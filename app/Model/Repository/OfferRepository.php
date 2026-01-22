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
        try {
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

            $offerId
                = $this->conn->lastInsertId();
            $offer->setId($offerId);
            $this->addOfferSkilles($offer);
            return $offer;
        } catch (PDOException $error) {
            throw new RuntimeException("Database error. Please try again later.");
        }
    }

    public function addOfferSkilles(offer $offer)
    {
        try {
            $skills = $offer->getSkills();

            $values = [];
            $params = [];

            foreach ($skills as $skillId) {
                $values[] = "(?,?)";
                $params[] = $offer->getId();
                $params[] = $skillId;
            }

            $query = "INSERT INTO offer_tag (offer_id , tag_id) VALUES" . implode(',', $values);
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
        } catch (PDOException $error) {
            throw new RuntimeException("Database error. Please try again later.");
        }
    }

    public function deleteOffer(Offer $offer)
    {

        $query = 'DELETE FROM offers WHERE id = :offer_id AND user_id = :user_id';
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ":offer_id" => $offer->getId(),
            ":user_id" => $offer->getUserId()
        ]);

        $query = 'DELETE FROM offer_tag WHERE offer_id = :offer_id';
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ":offer_id" => $offer->getId()
        ]);
        return true;
    }
}
