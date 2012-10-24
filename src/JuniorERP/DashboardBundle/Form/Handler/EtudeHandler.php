<?php
// src/JuniorDashboard/EtudesBundle/Form/EtudeHandler.php

namespace JuniorERP\DashboardBundle\Form\Handler;

use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

use JuniorERP\DashboardBundle\Entity\Etude;

class EtudeHandler
{
    protected $form;
    protected $request;
    protected $em;

    public function __construct(Form $form, Request $request, EntityManager $em)
    {
        $this->form    = $form;
        $this->request = $request;
        $this->em      = $em;
    }

    public function process()
    {
        if( $this->request->getMethod() == 'POST' )
        {
            $this->form->bindRequest($this->request);

            if( $this->form->isValid() )
            {
                $this->onSuccess($this->form->getData());

                return true;
            }
        }

        return false;
    }

    public function onSuccess(Etude $etude)
    {
    	$etude->setRefEtude('TE01');
        $this->em->persist($etude);
        $this->em->flush();
    }
}