<?php

namespace App\Controller;

use App\Repository\UserRepository;
use DateTime;
use App\Repository\PostRepository;
use App\Repository\TrackingRepository;
use App\Repository\AchievementRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

final class CommunityController extends AbstractController
{
    #[Route('/community', name: 'app_community')]
    public function index(AchievementRepository $achievements, TrackingRepository $trackings, EntityManagerInterface $em, UserRepository $users): Response
    {
        $user = $this->getUser();
        $today = new DateTime('now');

        $posts = $achievements->getAllShared();
        

//OBECNA SERIA DNI
    $streaksArray = $trackings->getStreaks($user);
    $streaksDate = [];

    foreach($streaksArray as $key => $value){

        if($value['end_date'] == $today->format('Y-m-d'))
        $streaksDate[$key] = $value['start_date'];
    }
    if(!empty($streaksDate)){
        $startDate = new DateTime($streaksDate[array_key_last($streaksDate)]);
        
        $currentStreak = date_diff($today, $startDate)->days+1;
    }

// ZAPISYWANIE WYKONANYCH DNI DO BAZY
    $setCurrentStreak = $user->getCurrentStreak();

    if($setCurrentStreak == null or $setCurrentStreak != $currentStreak){
        $user->setCurrentStreak($currentStreak);
        $em->persist($user);
        $em->flush();    
    }

//RANKING UŻYTKOWNIKOW
    $ranking = $users->getStreaksRanking();
        
        return $this->render('community/index.html.twig', [
            'controller_name' => 'CommunityController',
            'userData' => $user,
            'user' => $user->getUserIdentifier(),
            'posts' => $posts,
            'ranking' => $ranking,
        ]);
    }
}
