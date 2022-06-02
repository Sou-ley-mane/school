<?php

namespace App\Controller;

use App\Entity\Classe;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ClasseController extends AbstractController
{
    #[Route('/classe', name: 'app_classe')]
    public function index(EntityManagerInterface $em): Response
    {
       $classe=$em->getRepository(Classe::class)->findAll();
    //    dd($classe);                          
        return $this->render('classe/index.html.twig', [
            'listClasse' => $classe,
            'title'=>'liste des classes'
        ]);
    }
}
