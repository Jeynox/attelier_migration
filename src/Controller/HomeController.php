<?php

namespace App\Controller;

use App\Entity\Squirrel;
use App\Repository\SquirrelRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SquirrelRepository $squirrelRipository): Response
    {
        $squirrels = $squirrelRipository->findAll();
        return $this->render('home/index.html.twig', ['squirrels' => $squirrels]);
    }
}
