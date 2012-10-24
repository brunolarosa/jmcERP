<?php
// src/JuniorDashboard/ClientsBundle/Form/ClientType.php

namespace JuniorERP\DashboardBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
            ->add('nom')
            ->add('prenom')
            ->add('societe')
            ->add('fonction')
	    	->add('email')
	    	->add('telPortable')
	    	->add('telFixe');
    }

    public function getName()
    {
        return 'juniorDashboard_clientsBundle_clientType';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'JuniorERP\DashboardBundle\Entity\Client',
        );
    }
}