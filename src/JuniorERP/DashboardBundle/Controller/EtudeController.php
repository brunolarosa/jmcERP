<?php
// src/JuniorDashboard/GestionEtudesBundle/Controller/EtudesController.php

namespace JuniorERP\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;

use JuniorERP\DashboardBundle\Entity\Etude;

use JuniorERP\DashboardBundle\Form\Handler\EtudeHandler;
use JuniorERP\DashboardBundle\Form\Type\EtudeType;

class EtudeController extends Controller {
	
	public function indexAction() {

		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getEntityManager()
		->getRepository('JuniorERPDashboardBundle:Etude');
		
		$etudes = $repository->findAll();

		// Ici, on r�cup�rera la liste des articles, puis on la passera au template.
		
		// Mais pour l'instant, on ne fait qu'appeler le template.
		return $this->render('JuniorERPDashboardBundle:Etude:index.html.twig', array(
				'etudes' => $etudes
				));
	}
	
	public function voirAction($id) {
		
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getEntityManager()
		->getRepository('JuniorERPDashboardBundle:Etude');
		
		$etude = $repository->find($id);
		
		return $this->render('JuniorERPDashboardBundle:Etude:voir.html.twig', array(
				'etude' => $etude
		));
	}
	
	public function ajouterAction() {
		$etude = new Etude;
	
		// On cr�e le formulaire
		$form = $this->createForm(new EtudeType, $etude);
	
		// On cr�e le gestionnaire pour ce formulaire, avec les outils dont il a besoin
		$formHandler = new EtudeHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
	
		// On ex�cute le traitement du formulaire. S'il retourne true, alors le formulaire a bien �t� trait�
		if( $formHandler->process() )
		{
			return $this->redirect( $this->generateUrl('juniorERPDashboardBundle_voirEtude', array('id' => $etude->getId())) );
		}
	
		// Et s'il retourne false alors la requ�te n'�tait pas en POST ou le formulaire non valide.
		// On r�affiche donc le formulaire.
		return $this->render('JuniorERPDashboardBundle:Etude:ajouter.html.twig', array(
				'form' => $form->createView()
		));
	}
	
}