<?php

namespace App\Controller;

use App\Services\PostuleServices;

class RecruteurController
{
    private $candidatService;
    public function __construct()
    {
        $this->candidatService = new PostuleServices();
    }

    public function display()
    {
        
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            switch ($_POST) {
                case 'Accepter':
                    $this->accepterOffer($_POST);
                    break;
                case 'Refuser':
                    $this->refuserOffer($_POST);

                    break;
                case 'Profil':
                    $this->voirProfil();

                    break;
                case 'Telecharger':
                    $this->telechargercv();

                    break;

                default:
                    # code...
                    break;
            }
        }
        $condidats = $this->candidatService->display();
        
        require __DIR__ . '/../../view/public/ListCondidats.php';
    }
    // public function accepterOffer($_POST) {
    //  if($_POST['accepter']);
    // }
    public function refuserOffer() {}
    public function voirProfil() {}
    public function telechargercv() {}
}
