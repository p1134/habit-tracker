<?php

namespace App\Controller;

use App\Entity\Achievement;
use App\Repository\AchievementRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
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
    public function index(TrackingRepository $trackings, OwnHabitRepository $ownHabits, SelectedHabitsRepository $selectedHabits, AchievementRepository $achievements, EntityManagerInterface $em, ChartBuilderInterface $chartBuilder): Response
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

    $regularity = 0;
    $selfDevelopment = 0;
    $multitasking = 0;

    if(!empty($streaksDate)){
        $startDate = new DateTime($streaksDate[array_key_last($streaksDate)]);
        
        $currentStreak = date_diff($today, $startDate)->days+1;

    }

        //OSIAGNIECIA

        //Pierwszy krok
        if($maxStreak > 1){
            if($achievements->findOneBy(['user' => $user->getId(),'name' => 'Pierwszy krok']) == null){
            $achievement = new Achievement();
            $achievement->setUser($user);
            $achievement->setName('Pierwszy krok');
            $achievement->setDateCreate(new DateTime('now'));
            $achievement->setIsShared(false);

            $em->persist($achievement);
            $em->flush();

        }
        $firstStepAchieve = true;
        $regularity++;
    }
        //Złota jesień zycia
        if($maxStreak > 90){
            if($achievements->findOneBy(['user' => $user->getId(),'name' => 'Jesień życia']) == null){
                $achievement = new Achievement();
                $achievement->setUser($user);
                $achievement->setName('Jesień życia');
                $achievement->setDateCreate(new DateTime('now'));
                $achievement->setIsShared(false);
    
                $em->persist($achievement);
                $em->flush();
    
            }
            $goldLifeAchieve = true;
            $regularity++;
        }

        //Kreator rzeczywistości
    if($ownHabits->findBy(['user' => $user->getId()]) != null){
        if($achievements->findOneBy(['user' => $user->getId(),'name' => 'Kreator rzeczywistości']) == null){
            $achievement = new Achievement();
            $achievement->setUser($user);
            $achievement->setName('Kreator rzeczywistości');
            $achievement->setDateCreate(new DateTime('now'));
            $achievement->setIsShared(false);

            $em->persist($achievement);
            $em->flush();

        }
        $ownHabitAchieve = true;   
        $selfDevelopment++;
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
            $regularity++;

            if($achievements->findOneBy(['user' => $user->getId(),'name' => 'Weekendowy wojownik']) == null){
                $achievement = new Achievement();
                $achievement->setUser($user);
                $achievement->setName('Weekendowy wojownik');
                $achievement->setDateCreate(new DateTime('now'));
                $achievement->setIsShared(false);
    
                $em->persist($achievement);
                $em->flush();
    
            }
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
                $selfDevelopment++;

                if($achievements->findOneBy(['user' => $user->getId(),'name' => 'Powrót po przerwie']) == null){
                    $achievement = new Achievement();
                    $achievement->setUser($user);
                    $achievement->setName('Powrót po przerwie');
                    $achievement->setDateCreate(new DateTime('now'));
                    $achievement->setIsShared(false);
        
                    $em->persist($achievement);
                    $em->flush();
        
                }
            }
        }
    }
        //Nowa rutyna
    $selected = $selectedHabits->getDate($user);

    if(!empty($selected) && count($selected) >= 2){
        $lastDate = $selected[0]['date'];
        $beforeLast = $selected[1]['date'];
        $dayDiff = $lastDate->diff($beforeLast)->format('%a');
    }
        if((int)$dayDiff >= 30){
            $newRoutineAchieve = true;
            $selfDevelopment++;

            if($achievements->findOneBy(['user' => $user->getId(),'name' => 'Nowa rutyna']) == null){
                $achievement = new Achievement();
                $achievement->setUser($user);
                $achievement->setName('Nowa rutyna');
                $achievement->setDateCreate(new DateTime('now'));
                $achievement->setIsShared(false);
    
                $em->persist($achievement);
                $em->flush();
    
            }
    }

        //Multizadaniowiec
    $selectedToTrack = $selectedHabits->habitsToTrackFalse($user);
    $countSelected = count($selectedToTrack);
    if($countSelected >= 3){
        $multiAchieve = true;
        $multitasking++;

        if($achievements->findOneBy(['user' => $user->getId(),'name' => 'Multizadaniowiec']) == null){
            $achievement = new Achievement();
            $achievement->setUser($user);
            $achievement->setName('Multizadaniowiec');
            $achievement->setDateCreate(new DateTime('now'));
            $achievement->setIsShared(false);

            $em->persist($achievement);
            $em->flush();

        }
    }
        //Ninja
    if($countSelected >= 6){
        $ninjaAchieve = true;
        $multitasking++;

        if($achievements->findOneBy(['user' => $user->getId(),'name' => 'Nawykowy Ninja']) == null){
            $achievement = new Achievement();
            $achievement->setUser($user);
            $achievement->setName('Nawykowy Ninja');
            $achievement->setDateCreate(new DateTime('now'));
            $achievement->setIsShared(false);

            $em->persist($achievement);
            $em->flush();

        }
    }
        //Master
    if($countSelected >= 10){
        $masterAchieve = true;
        $multitasking++;

        if($achievements->findOneBy(['user' => $user->getId(),'name' => 'Mistrz rutyny']) == null){
            $achievement = new Achievement();
            $achievement->setUser($user);
            $achievement->setName('Mistrz rutyny');
            $achievement->setDateCreate(new DateTime('now'));
            $achievement->setIsShared(false);

            $em->persist($achievement);
            $em->flush();

        }
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
            'position' => 'bottom',
            'labels' => [
                'font' => [
                    'size' => 16,         // 🔹 zmiana wielkości czcionki legendy
                    'family' => 'Poppins', // 🔹 opcjonalnie rodzaj czcionki
                    'weight' => 'normal' // 🔹 lub 'bold', 'lighter'
                ],
                'color' => '#444',       // 🔹 kolor tekstu
            ]
        ],
    //     'title' => [
    //         // 'display' => true,
    //         // 'text' => 'Wykonane nawyki wg kategorii',
    //         'font' => [
    //             'family' => 'Poppins',    // czcionka
    //             'size' => 19,           // rozmiar w px
    //             'weight' => 'normal',     // np. 'normal', 'bold', 'lighter'
    //         ],
    //     'color' => '#000000'
    // ],
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
            'regularity' => $regularity,
            'selfDevelopment' => $selfDevelopment,
            'multitasking' => $multitasking,
        ]);
    }
}
