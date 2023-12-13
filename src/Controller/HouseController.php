<?php

namespace App\Controller;

use App\Repository\HouseRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HouseController extends AbstractController
{
    private HouseRepository $houseRepository;

    public function __construct(HouseRepository $houseRepository)
    {
        $this->houseRepository = $houseRepository;
    }

    #[Route('/maisons', name: 'app_houses')]
    public function index(): Response
    {
        return $this->render('house/index.html.twig', [
            'allHouses' => $this->houseRepository->findAll(),
        ]);
    }

    #[Route('/maisons/{id}', name: 'app_house')]
    public function showHouse(int $id): Response
    {
        return $this->render('house/house.html.twig', [
            'house' => $this->houseRepository->find($id),
        ]);
    }
}
