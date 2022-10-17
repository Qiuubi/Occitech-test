<?php

namespace App\Controller;

use App\Entity\Pokedex;
use App\Repository\PokedexRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(PokedexRepository $pokedexRepository): Response
    {
        return $this->render('home/index.html.twig', []);
    }
}
