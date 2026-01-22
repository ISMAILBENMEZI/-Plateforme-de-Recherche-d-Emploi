<?php

namespace App\Controller;
use App\Core\Session;
use Services\AuthServices;
use Model\Entity\User;
use Model\Entity\Role;

class CondidatController
{

    public function home()
    {
        require __DIR__ . '/../../view/public/home.php';
    }
    public function candidat()
    {
        
        require __DIR__ . '/../../view/public/ListCondidats.php';
    }
    public function derregister()
    {
        require __DIR__ . '/../../view/public/register.php';
    }
   
}
