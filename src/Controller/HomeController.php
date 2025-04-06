<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/',name: 'home_page')]
    public function index(): Response
    {
        $number = random_int(0, 100);

        return $this->render('home/index.html.twig', ['number' => $number]);
    }
}
