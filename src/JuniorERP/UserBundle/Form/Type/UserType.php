<?php
// src/JuniorDashboard/ClientsBundle/Form/ClientType.php

namespace JuniorDashboard\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
	    $builder
            ->add('nom')
	    	->add('email')
	    	->add('portable');
    }

    public function getName()
    {
        return 'juniorDashboard_userBundle_userType';
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'JuniorDashboard\UserBundle\Entity\User',
        );
    }
}