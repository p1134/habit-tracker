<?php

namespace App\Controller;

use App\Form\SelectedHabitsType;
use App\Repository\TrackingRepository;
use DateTime;
use App\Entity\Habit;
use App\Form\HabitType;
use App\Entity\OwnHabit;
use App\Entity\Tracking;
use App\Form\OwnHabitType;
use App\Form\TrackingType;
use App\Entity\SelectedHabits;
use App\Repository\HabitRepository;
use App\Repository\OwnHabitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\SelectedHabitsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HabitController extends AbstractController
{
    #[Route('/habits', name: 'app_habit')]
    public function Habits(TrackingRepository $trackings, SelectedHabitsRepository $sh, Request $request): Response
    {
        $user = $this->getUser();

        $today = new DateTime('now');
        $today->format('Y/m/d');
        // $todayDate = $today->format()

        $days = ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'];
        // dd($days);
        $dayNumber = date('w');
        $day = $days[$dayNumber];

        $selected = $sh->showHabits($user);
        $trackingList = $trackings->dailyTracking($user);

        $selected = new ArrayCollection($selected);

        $currentSelected = new ArrayCollection();
        // dd($selected);
        foreach($selected as $s){
            if($s->getHabit() != null){
                $currentSelected->add($s);
            }
            elseif($s->getOwnHabit() != null && $s->getOwnHabit()->isDeleted() == false){
                $currentSelected->add($s);
            }
        }
        // dd($currentSelected);

        // dd($selected, $trackingList);
        // foreach($trackingList as $tracked){
        //     if(!$selected->exists(function ($key, $tracking) use ($today) {
        //         return $tracking->getDate()->format('Y-m-d') === $today;
        //     }))
        //     {
        //         foreach($selected as $s){
        //             if($s->getDate() < $today){
        //                 $tracked->setSelected(false);
        //             }
        //         }
        //         // dd($selected->getSelected());
        //     }
        // }



            return $this->render('habit/index.html.twig', [
                'controller_name' => 'HabitController',
                'user' => $user->getUserIdentifier(),
                'habits' => $currentSelected,
                'tracked' => $trackingList,
                'userData' => $user,
                'today' => $today->format('d.m.Y'),
                'day' => $day,
            ]);
        }

        #[Route('/habits/tracking', 'app_tracking_habit')]
        public function trackHabits(Request $request, EntityManagerInterface $entityManager, SelectedHabitsRepository $sh, TrackingRepository $trackings)
        {
            $user = $this->getUser();
            $today = new DateTime('now');
        
            // Pobieramy dane z formularza - ID zaznaczonych nawyków
            $habitsId = $request->get('habits', []);
        
            // Iterujemy po wszystkich zaznaczonych nawykach
            foreach ($habitsId as $selected) {
                $toTrack = $sh->selectById($user, $selected);
                
                if ($toTrack) {
                    // Sprawdzamy, czy nawyk jest już śledzony tego dnia
                    $alreadyTracked = $toTrack->getTracking()->exists(function($key, $tracking) use ($today) {
                        return $tracking->getDate()->format('Y/m/d') === $today->format('Y/m/d');
                    });
        
                    // Jeśli nie jest śledzony, dodajemy nowe śledzenie
                    if (!$alreadyTracked) {
                        $tracking = new Tracking();
                        $tracking->setUser($user);
                        $tracking->setDate($today);
                        $tracking->setSelectedHabits($toTrack);
                        $tracking->setSelected(true); // Nawyki są zaznaczone
                        $tracking->setIsDeleted(false);
        
                        $entityManager->persist($tracking);
                    }
                }
            }
        
            // Teraz usuwamy śledzenia, które nie zostały zaznaczone
            $allTrackedHabits = $trackings->findBy(['user' => $user, 'date' => $today]);
        
            foreach ($allTrackedHabits as $trackedHabit) {
                // Jeśli nawyk nie znajduje się w liście zaznaczonych, usuwamy go
                if (!in_array($trackedHabit->getSelectedHabits()->getId(), $habitsId) && !$trackedHabit->isDeleted()) {
                    $entityManager->remove($trackedHabit);
                    // dd($trackedHabit);
                }
                // $entityManager->persist($trackedHabit); // Usuwamy śledzenie
            }
        
            // Zatwierdzamy zmiany w bazie danych
            $entityManager->flush();
        
            return $this->redirectToRoute('app_dashboard');
        }
        

   

    #[Route('/habits/add', 'app_new_habit')]
    public function newHabit(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(OwnHabitType::class, null, [
            'user' => $user,
        ]);
        $form->handleRequest($request);
        $ownHabit = $form->getData();
        // dd($ownHabit);

        if($form->isSubmitted() && $form->isValid()){
            $habit = new OwnHabit();
            $habit->setUser($user);
            $habit->setName($ownHabit['name']);
            $habit->setCategory($ownHabit['category']);
            $habit->setIsDeleted(false);

            $entityManager->persist($habit);
            $entityManager->flush();
            $this->addFlash('success', 'Nawyk został utworzony');

            return $this->redirectToRoute('app_habit');
        }

        return $this->render('habit/_new_habit_form.html.twig', [
            'controller_name' => 'HabitController',
            'user' => $user->getUserIdentifier(),
            'form' => $form->createView(),
            'form_type' => 'ownHabitAdd',

        ]);
    }

    #[Route('/habits/remove', 'app_habit_remove')]
    public function removeHabit(Request $request, OwnHabitRepository $ownHabits, EntityManagerInterface $entityManager)
    {
        $user = $this->getUser();

        $tracking = $ownHabits->habitsToTrack($user);
        // $form = $this->createForm(OwnHabitType::class, null,[
        //     'ownHabits' => $tracking,
        // ]);
        if ($request->isMethod('POST')) {
            $selectedHabits = $request->get('ownHabits', []);
            // $data = $form->getData();
            // $selected = $data['ownHabits'] ?? [];
            // dd($data);
            
            foreach ($selectedHabits as $habitId) {
                $habit = $ownHabits->find($habitId);
                if ($habit) {
                    $habit->setIsDeleted(true);
                    // dd($habit);
                    $entityManager->persist($habit);
                }
            }
    
            $entityManager->flush();
    
            return $this->redirectToRoute('app_habit');
        }
        return $this->render('habit/_remove_habit_form.html.twig', [
            'user' => $user,
            // 'form' => $form->createView(),
            'form_type' => 'ownHabitRemove',
            'ownHabits' => $tracking,
        ]);
    }

    #[Route('/habits/select', 'app_select_habit')]
    public function selectHabit(Request $request, EntityManagerInterface $entityManager, SelectedHabitsRepository $selectedHabits)
    {
        $user = $this->getUser();

        //Nawyki wybrane do śledzenia
        $tracking = $selectedHabits->habitsToTrackFalse($user);
        // dd($tracking);
        $selectedHabitsArray = array_map(fn($sh) => $sh->getHabit() ?? $sh->getOwnHabit(), $tracking);
        // dd($selectedHabitsArray);

        $selectedGlobal = array_filter($selectedHabitsArray, fn($habit) => $habit instanceof Habit);
        $selectedOwn = array_filter($selectedHabitsArray, fn($habit) => $habit instanceof OwnHabit);
        // dd($selectedGlobal, $selectedOwn);

        $form = $this->createForm(HabitType::class, [
            'habits' => $selectedGlobal,
            'ownHabits' => $selectedOwn,
        ], [
            'user' => $user,
        ]);
        // dd($form->getData());

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $today = new DateTime('now');

            $selectedGlobal = $form->get('habits')->getData();
            $selectedOwn = $form->get('ownHabits')->getData();

            $selectedAll = array_merge($selectedGlobal, $selectedOwn);
            // dd($tracking, $selectedAll);
            // $trackingHabits = $selectedHabits->habitsToTrack($user);

            foreach($selectedAll as $habit){
                $alreadySelected = false;

                foreach($tracking as $th){
                    $trackedHabit = $th->getHabit();
                    $trackedOwnHabit = $th->getOwnHabit();

                    if (
                        
                        ($habit instanceof Habit && $trackedHabit !== null && $habit->getId() === $trackedHabit->getId()) ||
                        ($habit instanceof OwnHabit && $trackedOwnHabit !== null && $habit->getId() === $trackedOwnHabit->getId() && !$trackedOwnHabit->isDeleted())
                    ){
                        $alreadySelected = true;
                        break;
                    }
                }

                if(!$alreadySelected){
                    $selected = new SelectedHabits();

                    if ($habit instanceof Habit) {
                        $selected->setHabit($habit);
                    } elseif ($habit instanceof OwnHabit) {
                        $selected->setOwnHabit($habit);
                    }
                    $selected->setDate($today);
                    $selected->setUser($user);
                    $selected->setIsDeleted(false);

                    $entityManager->persist($selected);
                }
            }
            foreach ($tracking as $th) {
                $trackedHabit = $th->getHabit();
                $trackedOwnHabit = $th->getOwnHabit();
                $current = $trackedHabit ?? $trackedOwnHabit;
            
                if (!in_array($current, $selectedAll, true)) {
                    $th->setIsDeleted(true);
                    $entityManager->persist($th);
                }
            }
            
            $entityManager->flush();

            $this->addFlash('success', 'Nawyki zostały zaktualizowane');
            return $this->redirectToRoute('app_habit');

        }
        return $this->render('habit/_select_habit_form.html.twig', [
            'user' => $user->getUserIdentifier(),
            'form' => $form->createView(),
        ]);
    }
}