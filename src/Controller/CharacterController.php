<?php

namespace App\Controller;

use App\Repository\CharacterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CharacterController extends AbstractController
{
    private CharacterRepository $characterRepository;

    public function __construct(CharacterRepository $characterRepository)
    {
        $this->characterRepository = $characterRepository;
    }

    #[Route('/', name: 'app_characters')]
    public function index(): Response
    {
        return $this->render('character/index.html.twig', [
            'allCharacters' => $this->characterRepository->findAll(),
        ]);
    }

    #[Route('/personnages/{id}', name: 'app_character')]
    public function showCharacter(int $id): Response
    {
        return $this->render('character/character.html.twig', [
            'character' => $this->characterRepository->find($id),
        ]);
    }
}
