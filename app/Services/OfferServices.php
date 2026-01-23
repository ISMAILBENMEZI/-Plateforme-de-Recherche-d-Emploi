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
        $rows = $this->offerRepository->getAllOffer();
        if (empty($rows))
            return null;

        $offers = [];

        foreach ($rows as $row) {
            if (!isset($offers[$row->id])) {
                $offers[$row->id] = new Offer(
                    title: $row->title,
                    job_name: $row->job_name,
                    salary: $row->salary,
                    location: $row->location,
                    deadline: $row->application_deadline,
                    user_id: $row->user_id,
                    id: $row->id
                );

                if ($row->tag_id !== null) {
                    $offers[$row->id]->addSkill($row->tag_id, $row->tag_name);
                }
            }
        }
        return array_values($offers);
    }

    public function getOfferBuId(Offer $offer)
    {
        $rows = $this->offerRepository->getOfferById($offer);
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

    public function getOfferByUserId(Offer $offer)
    {
        $rows = $this->offerRepository->getOfferByUserId($offer);
        if (empty($rows))
            return null;
        $offers = [];
        foreach ($rows as $row) {
            if (!isset($offers[$row->id])) {
                $offers[$row->id] = new Offer(
                    title: $row->title,
                    job_name: $row->job_name,
                    salary: $row->salary,
                    location: $row->location,
                    deadline: $row->application_deadline,
                    user_id: $row->user_id,
                    id: $row->id
                );
            }
            if ($row->tag_id != null) {
                $offers[$row->id]->addSkill($row->tag_id, $row->tag_name);
            }
        }
        return array_values($offers);
    }

    public function updateOffer(Offer $offer)
    {
        $result = $this->offerRepository->updateOffer($offer);
        return $result;
    }
}




/*
public function getOfferByUserId(Offer $offer): array
{
    $rows = $this->offerRepository->getOfferByUserId($offer);

    if (empty($rows)) {
        return [];
    }

    $offers = [];

    foreach ($rows as $row) {

        if (!isset($offers[$row->id])) {
            $offers[$row->id] = new Offer(
                title: $row->title,
                job_name: $row->job_name,
                salary: $row->salary,
                location: $row->location,
                deadline: $row->application_deadline,
                user_id: $row->user_id,
                id: $row->id
            );
        }

        // إضافة Skills (Tags)
        if ($row->tag_id !== null) {
            $offers[$row->id]->addSkill(
                $row->tag_id,
                $row->tag_name
            );
        }
    }

    return array_values($offers);
}

*/
