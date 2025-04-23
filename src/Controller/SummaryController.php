<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SummaryController extends AbstractController
{
    #[Route('/habits/summary', name: 'app_summary')]
    public function index(): Response
    {
        return $this->render('summary/index.html.twig', [
            'controller_name' => 'SummaryController',
        ]);
    }
}
