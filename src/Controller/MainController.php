<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'app_')]
class MainController extends AbstractController
{
    #[Route('/', name: 'bienvenue')]
    public function index(): Response
    {
		return $this->render('Views/bienvenue.html.twig');
    }

	#[Route('/philosophie', name: 'philosophie')]
	public function philosophie(): Response
	{
		return $this->render('Views/philosophie.html.twig');
	}


}
