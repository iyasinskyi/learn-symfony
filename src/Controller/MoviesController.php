<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class MoviesController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }
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
       $repository = $this->entityManager->getRepository(Movie::class);
        $movies = $repository->findOneBy(['id'=>5,'title'=>'The Great Movie'],['id'=>'ASC']);
        dd($movies);
     return $this->render('index.html.twig', [
         'title' => 'Movies title',
         'movies' => $movies,
     ]);
    }



}
