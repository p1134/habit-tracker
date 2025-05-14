<?php

namespace App\Controller;

use App\Repository\AchievementRepository;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CommunityController extends AbstractController
{
    #[Route('/community', name: 'app_community')]
    public function index(AchievementRepository $achievements): Response
    {
        $user = $this->getUser();

        $posts = $achievements->getAllShared();
        // dd($posts);
        
        return $this->render('community/index.html.twig', [
            'controller_name' => 'CommunityController',
            'userData' => $user,
            'user' => $user->getUserIdentifier(),
            'posts' => $posts,
        ]);
    }
}
