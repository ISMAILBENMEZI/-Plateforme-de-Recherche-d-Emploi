<?php
namespace App\Services;
use App\Model\Repository\CandidtRepository;
class CandidatServices
{
    private $Repo;
    public function __construct()
    {
        $this->Repo = new CandidtRepository();
    }

    public function getAllCategory()
    {
        return $this->Repo->getAll();
    }

    public function getTagsByCategory($CategoryId)
    {

        $this->Repo->getByCategory($CategoryId);
    }

    
}
