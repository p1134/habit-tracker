<?php

namespace App\Controller;

use App\Repository\SelectedHabitsRepository;
use App\Repository\TrackingRepository;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SummaryController extends AbstractController
{
    #[Route('/habits/summary', name: 'app_summary')]
    public function index(TrackingRepository $trackings, SelectedHabitsRepository $selectedHabits): Response
    {
        $user = $this->getUser();

        $today = new DateTime('now');

        $startOfWeek = (clone $today)->modify('monday this week');
        $endOfWeek = (clone $startOfWeek)->modify('+6 days');

        $weekDoneHabits = $trackings->getWeekDoneHabits($user, $startOfWeek, $endOfWeek);
        $weekSelectedHabits = $trackings->getWeekSelectedHabits($user);

        $getSelectedHabits = $selectedHabits->habitsToTrack($user);
        // dd($getSelectedHabits, $weekDoneHabits);

        $groupedHabits = [];
        foreach($getSelectedHabits as $sh) {
            if($sh->getDeleteDate() == null || ($sh->getDeleteDate()->format('Y-m-d') >= $startOfWeek->format('Y-m-d'))) {
            $id = $sh->getHabit() ? $sh->getHabit()->getId() : $sh->getOwnHabit()->getId();
            $groupedHabits[$id]['name'] = $sh->getHabit() ? $sh->getHabit()->getName() : $sh->getOwnHabit()->getName();
            $groupedHabits[$id]['id'] = $sh->getHabit() ? $sh->getHabit()->getId() : $sh->getOwnHabit()->getId(); // Możesz tu wrzucać też trackingi z danym nawykiem i datą
            $groupedHabits[$id]['data'][] = $sh; // Możesz tu wrzucać też trackingi z danym nawykiem i datą
            $groupedHabits[$id]['deleted'] = $sh->isDeleted(); // Możesz tu wrzucać też trackingi z danym nawykiem i datą
            $groupedHabits[$id]['delet_date'] = $sh->getDeleteDate();
        }
        }

        $trackings = [];
        foreach($groupedHabits as $key => $value) {
            foreach($weekDoneHabits as $key2 => $value2) {
                if($key == $value2['h_id'] || $key == $value2['oh_id']){
                    $trackings[$key] = $value2;
                }
            }
        }
        // dd($trackings);

        // dd($getSelectedHabits, $groupedHabits, $weekDoneHabits);



        return $this->render('summary/index.html.twig', [
            'controller_name' => 'SummaryController',
            'userData' => $user,
            'user' => $user->getUserIdentifier(),
            'startOfWeek' => $startOfWeek->format('d.m.Y'),
            'endOfWeek' => $endOfWeek->format('d.m.Y'),
            'selectedHabits' => $getSelectedHabits,
            'doneHabits' => $weekDoneHabits,
            'habitsGrouped' => $groupedHabits,
            'today' => $today,
        ]);
    }
    #[Route('/habits/test', name: 'app_test')]
    public function test(TrackingRepository $trackings, SelectedHabitsRepository $selectedHabits): Response
    {
        $user = $this->getUser();

        $today = new DateTime('now');

        $startOfWeek = (clone $today)->modify('monday this week');
        $endOfWeek = (clone $startOfWeek)->modify('+6 days');

        $weekDoneHabits = $trackings->getWeekDoneHabits($user, $startOfWeek, $endOfWeek);
        $weekSelectedHabits = $trackings->getWeekSelectedHabits($user);

        $getSelectedHabits = $selectedHabits->habitsToTrack($user);
        // dd($getSelectedHabits, $weekDoneHabits);

        $groupedHabits = [];
        foreach($getSelectedHabits as $sh) {
            if($sh->getDeleteDate() == null || ($sh->getDeleteDate()->format('Y-m-d') >= $startOfWeek->format('Y-m-d'))) {
            $id = $sh->getHabit() ? $sh->getHabit()->getId() : $sh->getOwnHabit()->getId();
            $groupedHabits[$id]['name'] = $sh->getHabit() ? $sh->getHabit()->getName() : $sh->getOwnHabit()->getName();
            $groupedHabits[$id]['id'] = $sh->getHabit() ? $sh->getHabit()->getId() : $sh->getOwnHabit()->getId(); // Możesz tu wrzucać też trackingi z danym nawykiem i datą
            $groupedHabits[$id]['data'][] = $sh; // Możesz tu wrzucać też trackingi z danym nawykiem i datą
            $groupedHabits[$id]['deleted'] = $sh->isDeleted(); // Możesz tu wrzucać też trackingi z danym nawykiem i datą
            $groupedHabits[$id]['delet_date'] = $sh->getDeleteDate(); // Możesz tu wrzucać też trackingi z danym nawykiem i datą
            }
        }

        $trackings = [];
        foreach($groupedHabits as $key => $value) {
            foreach($weekDoneHabits as $key2 => $value2) {
                if($key == $value2['h_id'] || $key == $value2['oh_id']){
                    $trackings[$key] = $value2;
                }
            }
        }
        // dd($trackings);

        // dd($getSelectedHabits, $groupedHabits, $weekDoneHabits);



        return $this->render('summary/test.html.twig', [
            'controller_name' => 'SummaryController',
            'userData' => $user,
            'user' => $user->getUserIdentifier(),
            'startOfWeek' => $startOfWeek->format('d.m.Y'),
            'endOfWeek' => $endOfWeek->format('d.m.Y'),
            'selectedHabits' => $getSelectedHabits,
            'doneHabits' => $weekDoneHabits,
            'habitsGrouped' => $groupedHabits,
            'today' => $today,
        ]);
    }
}
