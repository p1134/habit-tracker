<?php

namespace App\Controller;

use DateTime;
use App\Repository\TrackingRepository;
use App\Repository\SelectedHabitsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class SummaryController extends AbstractController
{
    #[Route('/habits/summary', name: 'app_summary')]
    public function index(TrackingRepository $trackings, SelectedHabitsRepository $selectedHabits, Request $request): Response
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
            $groupedHabits[$id]['delete_date'] = $sh->getDeleteDate();
            $groupedHabits[$id]['category'] = $sh->getHabit() ? $sh->getHabit()->getCategory()->getId() : $sh->getOwnHabit()->getCategory()->getId();
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


        // $days = [1, 2, 3, 4, 5, 6, 0];
        $daysLabels   = ['Nd','Pn','Wt','Śr','Cz','Pt','Sb'];
        // Domyślnie „dzisiejszy dzień” bazując na 'format("w")' 
        // format("w") w PHP zwraca: 0 = Niedziela, 1 = Poniedziałek, … 6 = Sobota
        $todayNum = (int) $today->format('w');
        // $selectedDay = $days[$todayNum];
        $selectedDayNum = $todayNum;

        // Jeżeli był POST – pobieramy przekazany "day" i nadpisujemy
        if ($request->isMethod('POST')) {
            // Jeżeli w formularzu jest CSRF, to można to sprawdzić:
            $token = $request->request->get('_csrf_token');
            if (!$this->isCsrfTokenValid('day_summary', $token)) {
                // wywali 403, jeśli token błędny
                throw $this->createAccessDeniedException('Nieprawidłowy token CSRF.');
            }

            $dayIndex = $request->request->get('day');
            $dayIndex = (int) $dayIndex;
            // upewniamy się, że dayIndex to rzeczywiście liczba 0..6
           if ($dayIndex >= 0 && $dayIndex <= 6) {
        $selectedDayNum = $dayIndex;
    }
    // przekierowanie PRG:
    return $this->redirectToRoute('app_summary', ['day' => $selectedDayNum]);
        }

        // Jeżeli przyszliśmy GET-em po przekierowaniu (lub w ogóle GET-em), sprawdźmy czy w URL jest ?day=…
$paramDay = $request->query->get('day');
if (null !== $paramDay) {
    $paramDay = (int) $paramDay;
    if ($paramDay >= 0 && $paramDay <= 6) {
        $selectedDayNum = $paramDay;
    }
}




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

            'todayNum'      => $todayNum,       // liczba 0..6
            'selectedDayNum'=> $selectedDayNum, // liczba 0..6
            'daysLabels'    => $daysLabels,
        ]);
    }

}
