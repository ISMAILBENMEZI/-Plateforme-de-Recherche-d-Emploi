<?php

namespace Services;

use Model\Repository\AuthRepository;
use App\Model\Entity\User;
use App\Core\Session;

Session::start();
class AuthServices
{

    public function login(User $user)
    {
        $auth = new AuthRepository();
        $res = $auth->findByEmail($user);
       
        if ($res && password_verify($user->getPassword() , $res->getPassword())) {
            Session::set('User_id', $res->getId());
            Session::set('User_name', $res->getName());
            Session::set('User_email', $res->getEmail());
            Session::set('User_role', $res->getRole());
            return $res;

        }
        return false;
    }
    public function register(User $user, $passwordConfig)
    {

        if ($user->getPassword() != $passwordConfig) {
            Session::set('error_register', 'le mot de passe ou email incorrecte');
            return false;
        }
        $auth = new AuthRepository();
        $res = $auth->findByEmail($user);
        if ($res) {
            Session::set('error_register', 'le compte qui deja existe');

            return false;
        }
        $user->setPassword(password_hash($user->getPassword(),PASSWORD_BCRYPT));
        return $auth->insert($user);
    }
}
