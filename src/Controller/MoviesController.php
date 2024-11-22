<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class MoviesController extends AbstractController
{
//    #[Route('/movies/{name}', name: 'movies', defaults:['name'=>null], methods: ['GET', 'HEAD'])]
//    public function index($name): JsonResponse
//    {
//        return $this->json([
//            'message' => $name,
//            'path' => 'src/Controller/MoviesController.php',
//        ]);
//    }


    #[Route('/movies', name: 'movies')]
    public function index(): Response {
        $movies = [
            'Avengers: Endgame',
            'Inceptions',
            'Loki'
        ];
     return $this->render('index.html.twig', [
         'title' => 'Movies title',
         'movies' => $movies,
     ]);
    }
}
