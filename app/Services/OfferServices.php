<?php

namespace App\Services;

use App\Model\Repository\OfferRepository;
use App\Model\Entity\Offer;

class OfferServices
{
    private OfferRepository $offerRepository;

    public function __construct()
    {
        $this->offerRepository = new OfferRepository();
    }

    public function creatOffer(Offer $offer)
    {
        $result = $this->offerRepository->addOffer($offer);
        return $result;
    }

    public function deleteOffer(Offer $offer)
    {
        $result = $this->offerRepository->deleteOffer($offer);
        return $result;
    }
}