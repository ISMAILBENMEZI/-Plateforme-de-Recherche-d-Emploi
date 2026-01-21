<?php

namespace App\Model\Repository;

use App\Core\Database;
use App\Model\Entity\Offer;
use PDOException;
use RuntimeException;

class OfferRepository
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function addOffer(Offer $offer)
    {
        // try {
            $query = 'INSERT INTO offers(title , job_name, salary, location, application_deadline, user_id)
                    VALUES(:title , :job_name, :salary, :location, :application_deadline, :user_id)';
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":title" => $offer->getTitle(),
                ":job_name" => $offer->getJobName(),
                ":salary" => $offer->getSalary(),
                ":location" => $offer->getLocation(),
                ":application_deadline" => $offer->getDeadline(),
                ":user_id" => $offer->getUserId()
            ]);

            $offerId = $this->conn->lastInsertId();
            $offer->setId($offerId);
            $this->addOfferSkilles($offer);
            return $offer;
        // } catch (PDOException $error) {
        //     throw new RuntimeException("Database error. Please try again later.");
        // }
    }

    public function addOfferSkilles(offer $offer)
    {
        $skills = $offer->getSkills();

        $values = [];
        $params = [];

        foreach($skills as $skillId)
        {
            $values[] = "(?,?)";
            $params[] = $offer->getId();
            $params[] = $skillId;
        }

        $query = "INSERT INTO offer_tag (offer_id , tag_id) VALUES" . implode(',', $values);
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
    }
}
