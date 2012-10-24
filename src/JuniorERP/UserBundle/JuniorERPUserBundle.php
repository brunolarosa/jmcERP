<?php
// src/JuniorERP/UserBundle/JuniorERPUserBundle.php

namespace JuniorERP\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class JuniorERPUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}