<?php

namespace App\Controller;

use App\Repository\UserRepository;
use DateTime;
use App\Repository\TrackingRepository;
use App\Repository\SelectedHabitsRepository;
use Doctrine\DBAL\Query\QueryBuilder;
use Doctrine\ORM\EntityManagerInterface;
use PhpParser\Node\Stmt\Continue_;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

final class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function Habits(TrackingRepository $trackings, SelectedHabitsRepository $sh, Request $request, ChartBuilderInterface $chartBuilder, EntityManagerInterface $em, UserRepository $users): Response
    {
        $user = $this->getUser();

        $formType = 'dashboard';
        $session = $request->getSession();
        $session->set('formType', $formType);

        $today = new DateTime('now');
        $today->format('Y/m/d');
        // $todayDate = $today->format()

//AKTUALNY DZIEŃ
        $days = ['Niedziela', 'Poniedziałek', 'Wtorek', 'Środa', 'Czwartek', 'Piątek', 'Sobota'];
        // dd($days);
        $dayNumber = date('w');
        $day = $days[$dayNumber];

//WYBRANE NAWYKI DO ŚLEDZENIA
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
//DIAGRAM POSTĘPU
        $chart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);

        $trackedCount = count($trackingList);
        $selectedCount = (count($selected)-count($trackingList));
        if(count($selected) != 0){
            $donePercentage = number_format($trackedCount/count($selected)*100, 2);
        }
        else{
            $donePercentage = 0;
        }

        $chart->setData([
            'datasets' => [
                [
                    'label' => 'Procent ukończenia',
                    'backgroundColor' => ['rgb(240, 190, 70)', 'rgb(239,245,254)'],
                    'borderColor' => ['rgb(240, 190, 70)'],
                    'borderWidth' => [14, 0],
                    'data' => [$trackedCount, $selectedCount],
                ],
            ],
        ]);

        $chart->setOptions([
            'responsive' => true,
        ]);

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
    // dd($streaksDate);
    if(!empty($streaksDate)){
        $startDate = new DateTime($streaksDate[array_key_last($streaksDate)]);
        // dd($date1); 
        
        $currentStreak = date_diff($today, $startDate)->days+1;
        // dd($currentStreak);
    }

// ZAPISYWANIE WYKONANYCH DNI DO BAZY
    $setCurrentStreak = $user->getCurrentStreak();

    if($setCurrentStreak == null or $setCurrentStreak != $currentStreak){
        $user->setCurrentStreak($currentStreak);
        $em->persist($user);
        $em->flush();    
    }
    
    // dd($setCurrentStreak,$currentStreak);
    

            return $this->render('dashboard/index.html.twig', [
                'controller_name' => 'HabitController',
                'user' => $user->getUserIdentifier(),
                'habits' => $currentSelected,
                'tracked' => $trackingList,
                'userData' => $user,
                'today' => $today->format('d.m.Y'),
                'day' => $day,
                'chart' => $chart,
                'percentage' => $donePercentage,
                'trackedCount' => $trackedCount,
                'maxStreak' =>$maxStreak,
                'currentStreak' => $currentStreak  ?? 0,
                'formType' => 'dashboard',
            ]);
        }
}
