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

	#[Route('/galerie', name: 'galerie')]
	public function galerie(): Response
	{
		//get asset directoru
		$dir = $this->getParameter('kernel.project_dir');
		$dir = $dir . '/public/images/galery';
		$count = 0;
		$files = glob($dir . '*');
		if($files)
			$count = count($files);
		else
			$count = -1;
		return $this->render('Views/galerie.html.twig', ['count' => $count]);
	}

	#[Route('/vieClub', name: 'vieClub')]
	public function vieClub(): Response
	{
		return $this->render('Views/vieClub.html.twig');
	}

	#[Route('/renseignements', name: 'renseignements')]
	public function renseignements(): Response
	{
		return $this->render('Views/renseignements.html.twig');
	}

	#[Route('/agenda', name: 'agenda')]
	public function agenda(): Response
	{
		return $this->render('Views/agenda.html.twig');
	}

	#[Route('/liens', name: 'liens')]
	public function liens(): Response
	{
		return $this->render('Views/liens.html.twig');
	}

	#[Route('/contact', name: 'contact')]
	public function contact(): Response
	{
		return $this->render('Views/contact.html.twig');
	}

}
