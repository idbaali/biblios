<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AwesoneController extends AbstractController
{
    #[Route('/awesone', name: 'app_awesone')]
    public function index(): Response
    {
        return $this->render('awesone/index.html.twig', [
            'controller_name' => 'AwesoneController',
        ]);
    }
}
