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

    public function getAllOffer()
    {
        $result = $this->offerRepository->getAllOffer();
        return $result;
    }

    public function getOfferBuId(Offer $offer)
    {
        $rows = $this->offerRepository->getOfferBuId($offer);
        if (empty($rows))
            return null;

        $offerObj = new offer(
            title: $rows[0]->title,
            job_name: $rows[0]->job_name,
            salary: $rows[0]->salary,
            location: $rows[0]->location,
            deadline: $rows[0]->application_deadline,
            user_id: $rows[0]->user_id,
            id: $rows[0]->id
        );

        foreach ($rows as $row) {
            if ($row->tag_id !== null) {
                $offerObj->addSkill($row->tag_id, $row->tag_name);
            }
        }

        return $offerObj;
    }

    public function updateOffer(Offer $offer)
    {
        $result = $this->offerRepository->updateOffer($offer);
        return $result;
    }
}
