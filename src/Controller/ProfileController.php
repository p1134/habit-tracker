<?php

namespace App\Controller;

use DateTime;
use Symfony\UX\Chartjs\Model\Chart;
use App\Repository\OwnHabitRepository;
use App\Repository\TrackingRepository;
use App\Repository\SelectedHabitsRepository;
use Proxies\__CG__\App\Entity\SelectedHabits;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    public function index(TrackingRepository $trackings, OwnHabitRepository $ownHabits, SelectedHabitsRepository $selectedHabits, ChartBuilderInterface $chartBuilder): Response
    {
        $user = $this->getUser();

        $today = new DateTime('now');
        $today->format('Y/m/d');

        
        //NAJDŁUŻSZA SERIA
        $streaksArray = $trackings->getStreaks($user);
        // dd($streaksArray);
        $streaksLength = [];
        
        foreach($streaksArray as $key => $value){
            $streaksLength[$key] = $value['streak_length'];
        }

        if($streaksLength != null){
            $maxStreak = max($streaksLength);
        }
        else{
            $maxStreak = 0;
        }


//OBECNA SERIA
        $streaksDate = [];

        foreach($streaksArray as $key => $value){

            if($value['end_date'] == $today->format('Y-m-d'))
            $streaksDate[$key] = $value['start_date'];
    }
    if(!empty($streaksDate)){
        $startDate = new DateTime($streaksDate[array_key_last($streaksDate)]);
        
        $currentStreak = date_diff($today, $startDate)->days+1;

        //OSIAGNIECIA

        //Pierwszy krok
        if($currentStreak > 1){
            $firstStepAchieve = true;
        }
        //Złota jesień zycia
        if($currentStreak > 90){
            $goldLifeAchieve = true;
        }
    }
        //Kreator rzeczywistości
    if($ownHabits->findBy(['user' => $user->getId()]) != null){
        $ownHabitAchieve = true;   
    }

        //Weekendowy wojownik
    $tracks = $trackings->getAllTracks($user);
    $twArray = [];
    foreach($tracks as $t){
        $twArray[] = (int) $t['date']->format('w');
    }

    $pattern = [0,6,0,6,0,6];
    for($i = 0; $i <= count($twArray); $i++){
        $slice = array_slice($twArray, $i,count($pattern));
        if($slice === $pattern){
            $weekendAchieve = true;
        }
    }

        //Powrót po przerwie
    $lastTrack = (int)array_key_last($tracks);
    $beforeLast = $lastTrack - 1;
    foreach($tracks as $key => $value){
        if($lastTrack === $key){
            $lastDate = $tracks[$lastTrack]['date'];
            $beforeDate = $tracks[$beforeLast]['date'];
            $dayDiff = $lastDate->diff($beforeDate)->format('%a');

            if((int)$dayDiff > 2){
                $backAchieve = true;
                dd($backAchieve);
            }
        }
    }
        //Nowa rutyna
    $selected = $selectedHabits->getDate($user);
    if(!empty($selected) && $selected[1]){
        $lastDate = $selected[0]['date'];
        $beforeLast = $selected[1]['date'];
        $dayDiff = $lastDate->diff($beforeLast)->format('%a');
    }
        if((int)$dayDiff >= 30){
            $newRoutineAchieve = true;
    }

        //Multizadaniowiec
    $selectedToTrack = $selectedHabits->habitsToTrackFalse($user);
    $countSelected = count($selectedToTrack);
    if($countSelected >= 3){
        $multiAchieve = true;
    }
        //Ninja
    if($countSelected >= 6){
        $ninjaAchieve = true;
    }
        //Master
    if($countSelected >= 10){
        $masterAchieve = true;
    }

    //Wykres kategorii
    $trackData = $trackings->getAllTracks($user);
    $healthCounter = 0;
    $relaxCounter = 0;
    $socialActivityCounter = 0;
    foreach($trackData as $key => $value){
        if($value['habitCategory'] != null){
            switch($value['habitCategory']){
                case 'Zdrowie': $healthCounter++;
                break;
                
                case 'Relaks':  $relaxCounter++;
                break;
                
                case 'Aktywność społeczna': $socialActivityCounter++;
                break;
            }}
            else{
                switch($value['ownHabitCategory']){
                    case 'Zdrowie': $healthCounter++;
                    break;
                    
                    case 'Relaks':  $relaxCounter++;
                    break;
                    
                    case 'Aktywność społeczna': $socialActivityCounter++;
                    break;
                }
            }}
            $categoryData = ['Zdrowie' => (int)$healthCounter, 'Relaks' => (int)$relaxCounter, 'Aktywność społeczna' => (int)$socialActivityCounter];

            $chart = $chartBuilder->createChart(Chart::TYPE_PIE);

$chart->setData([
    'labels' => array_keys($categoryData),
    'datasets' => [[
        'label' => 'Kategorie',
        'backgroundColor' => ['#466EA0', '#96BE46', '#F0BE46'], // opcjonalnie kolory
        'data' => array_values($categoryData),
    ]]
]);

$chart->setOptions([
    'responsive' => true,
    'plugins' => [
        'legend' => [
            'position' => 'top',
            'labels' => [
                'font' => [
                    'size' => 16,         // 🔹 zmiana wielkości czcionki legendy
                    'family' => 'Poppins', // 🔹 opcjonalnie rodzaj czcionki
                    'weight' => 'normal' // 🔹 lub 'bold', 'lighter'
                ],
                'color' => '#444',       // 🔹 kolor tekstu
            ]
        ],
        'title' => [
            'display' => true,
            'text' => 'Wykonane nawyki według kategorii',
            'font' => [
                'family' => 'Poppins',    // czcionka
                'size' => 19,           // rozmiar w px
                'weight' => 'normal',     // np. 'normal', 'bold', 'lighter'
            ],
        'color' => '#000000'
    ],
    ],
]);



        return $this->render('profile/index.html.twig', [
            'controller_name' => 'ProfileController',
            'userData' => $user,
            'firstStep' => $firstStepAchieve ?? null,
            'goldLife' => $goldLifeAchieve ?? null,
            'ownHabit' => $ownHabitAchieve ?? null,
            'warrior' => $weekendAchieve ?? null,
            'break' => $backAchieve ?? null,
            'newRoutine' => $newRoutineAchieve ?? null,
            'multi' => $multiAchieve ?? null,
            'ninja' => $ninjaAchieve ?? null,
            'master' => $masterAchieve ?? null,
            'chart' => $chart,
        ]);
    }
}
