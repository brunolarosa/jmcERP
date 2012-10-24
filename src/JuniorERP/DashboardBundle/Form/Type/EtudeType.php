<?php
// src/JuniorDashboard/EtudesBundle/Form/Type/EtudeType.php

namespace JuniorERP\DashboardBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class EtudeType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
            ->add('intitule')
            ->add('objectif')
            ->add('client', 'entity', array(
            		'class' => 'JuniorERPDashboardBundle:Client',
            		'property' => 'societe',
            		'empty_value' => 'Choisissez un client',
            		))
            ->add('provenance', 'entity', array(
            		'class' => 'JuniorERPDashboardBundle:Provenance',
            		'property' => 'nom',
            		'empty_value' => 'Choisissez une provenance'
            		))
            ->add('domaine', 'entity', array(
            		'class' => 'JuniorERPDashboardBundle:Domaine',
            		'property' => 'nom',
            		'empty_value' => 'Choisissez un domaine'
            		))
            ->add('chefProjet', 'entity', array(
            		'class' => 'JuniorERPUserBundle:User',
            		'property' => 'username',
            		'empty_value' => 'Choisissez un chef de projet'
            		))
            ->add('suiveurQualite', 'entity', array(
            		'class' => 'JuniorERPUserBundle:User',
            		'property' => 'username',
            		'empty_value' => 'Choisissez un suiveur qualite'
            		))
            ->add('duree');
    }

    public function getName()
    {
        return 'juniorERP_dashboardBundle_etudeType';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'JuniorERP\DashboardBundle\Entity\Etude',
        );
    }
}