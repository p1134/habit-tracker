<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class CommunityController extends AbstractController
{
    #[Route('/community', name: 'app_community')]
    public function index(): Response
    {
        $user = $this->getUser();

        return $this->render('community/index.html.twig', [
            'controller_name' => 'CommunityController',
            'userData' => $user,
        ]);
    }

    public function addPost(PostRepository $posts){

    }
}
