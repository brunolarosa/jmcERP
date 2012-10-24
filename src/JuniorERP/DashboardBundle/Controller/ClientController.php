<?php
// src/JuniorDashboard/ClientsBundle/Controller/CLientsController.php

namespace JuniorERP\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;

use JuniorERP\DashboardBundle\Entity\Client;

use JuniorERP\DashboardBundle\Form\Handler\ClientHandler;
use JuniorERP\DashboardBundle\Form\Type\ClientType;

class ClientController extends Controller {
	
	public function indexAction() {
		
		// On rŽcupre le repository
		$repository = $this->getDoctrine()
						   ->getEntityManager()
						   ->getRepository('JuniorERPDashboardBundle:Client');
		
		$clients = $repository->findAll();
		
		// Ici, on rŽcupŽrera la liste des articles, puis on la passera au template.
		
		// Mais pour l'instant, on ne fait qu'appeler le template.
		return $this->render('::layoutDashboard.html.twig', array(
				'clients' => $clients
				));
	}
	
	public function voirAction($id)
	{
	
		//TODO: afficher les informations relative ˆ l'Žtude passer en paramtre.
	}
	
	public function ajouterAction()
	{
		$client = new Client;
	
		// On crŽe le formulaire
		$form = $this->createForm(new ClientType, $client);
	
		// On crŽe le gestionnaire pour ce formulaire, avec les outils dont il a besoin
		$formHandler = new ClientHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
	
		// On exŽcute le traitement du formulaire. S'il retourne true, alors le formulaire a bien ŽtŽ traitŽ
		if( $formHandler->process() )
		{
			return $this->redirect( $this->generateUrl('juniorDashboardClientBundle_voir', array('id' => $client->getId())) );
		}
	
		// Et s'il retourne false alors la requte n'Žtait pas en POST ou le formulaire non valide.
		// On rŽaffiche donc le formulaire.
		return $this->render('JuniorERPDashboardBundle:Client:ajouter.html.twig', array(
				'form' => $form->createView()
		));
	}
	
}