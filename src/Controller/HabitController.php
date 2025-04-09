<?php

namespace App\Controller;

use App\Entity\Habit;
use App\Entity\SelectedHabits;
use App\Form\HabitType;
use App\Entity\OwnHabit;
use App\Entity\Tracking;
use App\Form\OwnHabitType;
use App\Repository\HabitRepository;
use App\Repository\OwnHabitRepository;
use App\Repository\SelectedHabitsRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HabitController extends AbstractController
{
    #[Route('/habits', name: 'app_habit')]
    public function Habits(SelectedHabitsRepository $shb): Response
    {
        $user = $this->getUser();
        $habits = $shb->habitsToTrack($user);

        return $this->render('habit/index.html.twig', [
            'controller_name' => 'HabitController',
            'user' => $user->getUserIdentifier(),
            'habits' => $shb->habitsToTrack($user),
        ]);
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
        $form = $this->createForm(OwnHabitType::class, null, );
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();
            $selected = $data['ownHabits'] ?? [];
            
            foreach ($selected as $habit) {
                $entityManager->remove($habit);
            }
    
            $entityManager->flush();
    
            return $this->redirectToRoute('app_habit');
        }
        return $this->render('habit/_remove_habit_form.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
            'form_type' => 'ownHabitRemove',
        ]);
    }

    #[Route('/habits/select', 'app_select_habit')]
    public function selectHabit(Request $request, EntityManagerInterface $entityManager, SelectedHabitsRepository $selectedHabits)
    {
        $user = $this->getUser();

        $tracking = $selectedHabits->habitsToTrack($user);
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
            // dd($tracking);
            // $trackingHabits = $selectedHabits->habitsToTrack($user);

            foreach($selectedAll as $habit){
                $alreadySelected = false;

                foreach($tracking as $th){
                    $trackedHabit = $th->getHabit();
                    $trackedOwnHabit = $th->getOwnHabit();

                    if (
                        
                        ($habit instanceof Habit && $trackedHabit !== null && $habit->getId() === $trackedHabit->getId()) ||
                        ($habit instanceof OwnHabit && $trackedOwnHabit !== null && $habit->getId() === $trackedOwnHabit->getId())
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
                    $entityManager->persist($selected);
                }
            }
            foreach ($tracking as $th) {
                $trackedHabit = $th->getHabit();
                $trackedOwnHabit = $th->getOwnHabit();
                $current = $trackedHabit ?? $trackedOwnHabit;
            
                if (!in_array($current, $selectedAll, true)) {
                    $entityManager->remove($th);
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