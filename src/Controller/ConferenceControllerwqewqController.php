<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceControllerwqewqController extends AbstractController
{
    #[Route('/conference/controllerwqewq', name: 'app_conference_controllerwqewq')]
    public function index(): Response
    {
        return $this->render('conference_controllerwqewq/index.html.twig', [
            'controller_name' => 'ConferenceControllerwqewqController',
        ]);
    }
}
