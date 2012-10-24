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
		
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
						   ->getEntityManager()
						   ->getRepository('JuniorERPDashboardBundle:Client');
		
		$clients = $repository->findAll();
		
		// Ici, on r�cup�rera la liste des articles, puis on la passera au template.
		
		// Mais pour l'instant, on ne fait qu'appeler le template.
		return $this->render('::layoutDashboard.html.twig', array(
				'clients' => $clients
				));
	}
	
	public function voirAction($id)
	{
	
		//TODO: afficher les informations relative � l'�tude passer en param�tre.
	}
	
	public function ajouterAction()
	{
		$client = new Client;
	
		// On cr�e le formulaire
		$form = $this->createForm(new ClientType, $client);
	
		// On cr�e le gestionnaire pour ce formulaire, avec les outils dont il a besoin
		$formHandler = new ClientHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
	
		// On ex�cute le traitement du formulaire. S'il retourne true, alors le formulaire a bien �t� trait�
		if( $formHandler->process() )
		{
			return $this->redirect( $this->generateUrl('juniorDashboardClientBundle_voir', array('id' => $client->getId())) );
		}
	
		// Et s'il retourne false alors la requ�te n'�tait pas en POST ou le formulaire non valide.
		// On r�affiche donc le formulaire.
		return $this->render('JuniorERPDashboardBundle:Client:ajouter.html.twig', array(
				'form' => $form->createView()
		));
	}
	
}