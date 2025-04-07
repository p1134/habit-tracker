<?php

namespace App\Controller;

use App\Entity\Habit;
use App\Form\HabitType;
use App\Entity\OwnHabit;
use App\Form\OwnHabitType;
use App\Repository\HabitRepository;
use App\Repository\OwnHabitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class HabitController extends AbstractController
{
    #[Route('/nawyki', name: 'app_habit')]
    public function Habits(): Response
    {
        $user = $this->getUser();

        return $this->render('habit/index.html.twig', [
            'controller_name' => 'HabitController',
            'user' => $user->getUserIdentifier(),

        ]);
    }

    #[Route('/nawyki/dodaj', name: 'app_new_habit')]
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
    public function selectHabit()
    {
        $user = $this->getUser();

        return $this->render('habit/_select_habit_form.html.twig', [
            'user' => $user->getUserIdentifier(),
        ]);
    }
}
