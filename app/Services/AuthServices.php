<?php

namespace Services;

use Model\Repository\AuthRepository;
use Model\Entity\User;
 use App\Core\Session;
 Session::start();
class AuthServices
{

    public function login(User $user)
    {
        $auth = new AuthRepository();
        $res = $auth->findByEmail($user);
   ;
        if ($res && $user->getPassword()==$res[0]['password']) {
            return true;
        }
        return false;
    }
     public function register(User $user,$passwordConfig)
    {
       
        if($user->getPassword()!=$passwordConfig){
             Session::set('error_register','le mot de passe ou email incorrecte');
             return false;
             }
             $auth = new AuthRepository();
             $res = $auth->findByEmail($user);
             if ($res) {
                 Session::set('error_register','le compte qui deja existe');
                 
            // return false;
        }
        return $auth->insert($user);
        
    }
}
