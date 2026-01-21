<?php

namespace App\Controller;
use Services\AuthServices;
use Model\Entity\User;
use Model\Entity\Role;

class AuthController
{
    
    public function home()
    {
        require __DIR__ . '/../../view/public/home.php';
    }
    public function derLogin()
    {
        require __DIR__ . '/../../view/public/login.php';
    }
    public function derregister()
    {
         require __DIR__ . '/../../view/public/register.php';
    }
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['email']) || !empty($_POST['password'])) {
                $user = new User($_POST['email'], $_POST['password']);
                $auth = new AuthServices();
                if ($auth->login($user)) {
                    require __DIR__ . '/../../view/public/offers.php';
                }
            }
        }
        
    }
    public function register()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            if (!empty($_POST['name']) || !empty($_POST['email']) || !empty($_POST['role']) || !empty($_POST['password']) || !empty($_POST['passwordConfig'])) {
                $email=$_POST['email'];
                $password=$_POST['password'];
                $nameRole=$_POST['role'];

                $role = new Role($nameRole);
                $user = new User($email,$password);
                $user->setName($_POST['name']);
                $user->setRole($role);
                $auth = new AuthServices();
                if ($auth->register($user, $_POST['passwordConfig'])) {
                    require __DIR__ . '/../../view/public/login.php';
                }
            }
        }
       
    }
}
