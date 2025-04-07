<?php

namespace App\Controller;

use App\Security\EmailVerifier;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

final class LoginController extends AbstractController
{
    public function __construct(private EmailVerifier $emailVerifier)
    {
    }
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $utils): Response
    {
        $lastUsername = $utils->getLastUsername();
        $error = $utils->getLastAuthenticationError();
        
        if($error){
            $this->addFlash('error', 'Błędne dane logowania');
        }

        return $this->render('login/login.html.twig', [
            'controller_name' => 'LoginController',
            'lastUsername' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(){}

}
