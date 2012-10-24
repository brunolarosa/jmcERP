<?php
// src/JuniorDashboard/GestionEtudesBundle/Controller/EtudesController.php

namespace JuniorERP\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Httpfoundation\Response;

use JuniorERP\DashboardBundle\Entity\Domaine;

use JuniorERP\UserBundle\Form\Handler\UserHandler;
use JuniorERP\UserBundle\Form\Type\UserType;
use JuniorERP\DashboardBundle\Form\Handler\DomaineHandler;
use JuniorERP\DashboardBundle\Form\Type\DomaineType;

class AdminController extends Controller {
	
	public function indexAction() {
		
		return $this->render('JuniorERPDashboardBundle:Admin:index.html.twig', array());
		
	}
	
	/* UTILISATEUR START */
	public function indexUtilisateurAction() {
		
		// On r�cup�re le repository
		$repository = $this->getDoctrine()
		->getEntityManager()
		->getRepository('JuniorERPUserBundle:User');
		
		$users = $repository->findAll();
		
		return $this->render('JuniorERPDashboardBundle:Admin/Utilisateur:index.html.twig', array(
				'users' => $users
				));
	}
	
	public function ajouterUtilisateurAction() {
		

		$user = new User;
		
		// On cr�e le formulaire
		$form = $this->createForm(new UserType, $user);
		
		// On cr�e le gestionnaire pour ce formulaire, avec les outils dont il a besoin
		$formHandler = new UserHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
		
		// On ex�cute le traitement du formulaire. S'il retourne true, alors le formulaire a bien �t� trait�
		if( $formHandler->process() )
		{
			return $this->redirect( $this->generateUrl('juniorDashboardAdminBundle_indexUtilisateur', array('id' => $user->getId())) );
		}
		
		// Et s'il retourne false alors la requ�te n'�tait pas en POST ou le formulaire non valide.
		// On r�affiche donc le formulaire.
		return $this->render('JuniorERPDashboardBundle:Admin/Utilisateur:ajouter.html.twig', array(
				'form' => $form->createView()
				));
	}
	/* UTILISATEUR END */
	
	
	/* ETUDE START */
	public function indexEtudeAction() {
		$repositoryProvenance = $this->getDoctrine()
									 ->getEntityManager()
									 ->getRepository('JuniorERPDashboardBundle:Provenance');
		
		$provenances = $repositoryProvenance->findAll();
		
		$repositoryDomaine = $this->getDoctrine()
		->getEntityManager()
		->getRepository('JuniorERPDashboardBundle:Domaine');
		
		$domaines = $repositoryDomaine->findAll();
		
		return $this->render('JuniorERPDashboardBundle:Admin/Etude:index.html.twig', array(
				'provenances' => $provenances,
				'domaines' => $domaines,
				));
	}
	
	public function ajouterDomaineEtudeAction() {
		
		$domaine = new Domaine;
		
		$form = $this->createForm(new DomaineType, $domaine);
		
		$formHandler = new DomaineHandler($form, $this->get('request'), $this->getDoctrine()->getEntityManager());
		
		// On ex�cute le traitement du formulaire. S'il retourne true, alors le formulaire a bien �t� trait�
		if( $formHandler->process() )
		{
			return $this->redirect( $this->generateUrl('JuniorERPDashboardBundle_admin_etude_index'));
		}
		
		// Et s'il retourne false alors la requ�te n'�tait pas en POST ou le formulaire non valide.
		// On r�affiche donc le formulaire.
		return $this->render('JuniorERPDashboardBundle:Admin/Etude:ajouterDomaine.html.twig', array(
				'form' => $form->createView()
		));
		

	}
	/* ETUDE END */
}