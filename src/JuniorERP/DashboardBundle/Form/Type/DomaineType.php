<?php
// src/JuniorDashboard/EtudesBundle/Form/Type/EtudeType.php

namespace JuniorERP\DashboardBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DomaineType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
            ->add('nom')
	    	->add('reference');
    }

    public function getName()
    {
        return 'juniorERP_dashboardBundle_domaineType';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'JuniorERP\DashboardBundle\Entity\Domaine',
        );
    }
}