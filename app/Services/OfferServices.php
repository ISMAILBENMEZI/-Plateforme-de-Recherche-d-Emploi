<?php
namespace App\Services;
use App\Model\Repository;
use App\Model\Repository\OfferRepository;

class OfferServices
{
    private OfferRepository $offerRepository;

    public function __construct()
    {
        $this->offerRepository = new OfferRepository();
    }
}
