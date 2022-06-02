<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AttacheeController extends AbstractController
{
    #[Route('/attachee', name: 'app_attachee')]
    public function index(): Response
    {
        return $this->render('attachee/index.html.twig', [
            'controller_name' => 'AttacheeController',
        ]);
    }
}
