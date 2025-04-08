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
    #[Route('/nawyki', name: 'app_habit')]
    public function Habits(SelectedHabitsRepository $shb): Response
    {
        $user = $this->getUser();
        $habits = $shb->habitsToTrack($user);
        // dd($habits);

        return $this->render('habit/index.html.twig', [
            'controller_name' => 'HabitController',
            'user' => $user->getUserIdentifier(),
            'habits' => $shb->habitsToTrack($user),
        ]);
    }

    #[Route('/nawyki/dodaj', 'app_new_habit')]
    public function newHabit(EntityManagerInterface $entityManager, Request $request): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(OwnHabitType::class, new OwnHabit(), [
            'user' => $user,
        ]);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $ownHabit = $form->getData();
            $ownHabit->setUser($user);
            

            $entityManager->persist($ownHabit);
            $entityManager->flush();
            $this->addFlash('success', 'Nawyk został utworzony');

            return $this->redirectToRoute('app_habit');
        }

        return $this->render('habit/_new_habit_form.html.twig', [
            'controller_name' => 'HabitController',
            'user' => $user->getUserIdentifier(),
            'form' => $form->createView(),
            'form_type' => 'ownHabit',

        ]);
    }

    #[Route('nawyki/wybierz', 'app_select_habit')]
    public function selectHabit(Request $request, EntityManagerInterface $entityManager, SelectedHabitsRepository $selectedHabits)
    {
        $user = $this->getUser();

        $tracking = $selectedHabits->habitsToTrack($user);
        $selectedHabitsArray = array_map(fn($sh) => $sh->getHabit(), $tracking);

        $selectedGlobal = array_filter($selectedHabitsArray, fn($habit) => $habit instanceof Habit);
        $selectedOwn = array_filter($selectedHabitsArray, fn($habit) => $habit instanceof OwmnHabit);


        $form = $this->createForm(HabitType::class, [
            'habits' => $selectedGlobal,
            'ownHabits' => $selectedOwn,
        ], [
            'user' => $user,
        ]);

        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $today = new DateTime('now');

            $selectedGlobal = $form->get('habits')->getData();
            $selectedOwn = $form->get('ownHabits')->getData();

            $selectedAll = array_merge($selectedGlobal, $selectedOwn);
            // dd($today);
            // $trackingHabits = $selectedHabits->habitsToTrack($user);

            foreach($selectedAll as $habit){
                $alreadySelected = false;

                foreach($tracking as $th){
                    if($habit->getId() === $th->getHabit()->getId()){
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
                if (!in_array($th->getHabit(), $selectedAll, true)) {
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