<?php

namespace App\Model\Repository;

use App\Core\Database;
use App\Model\Entity\Offer;
use PDOException;
use RuntimeException;
use PDO;

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

            foreach ($skills as $skill) {
                $values[] = "(?,?)";
                $params[] = $offer->getId();
                if (is_array($skill)) {
                    $params[] = $skill['id'];
                } else {
                    $params[] = $skill;
                }
            }

            $query = "INSERT INTO offer_tag (offer_id , tag_id) VALUES" . implode(',', $values);
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
        } catch (PDOException $error) {
            throw new RuntimeException("Database error. Please try again later.");
        }
    }

    public function updateOffer(Offer $offer)
    {
        try {

            $query = 'UPDATE offers SET title = :title , job_name = :job_name, salary = :salary, location = :location, application_deadline = :deadline WHERE id = :offer_id AND user_id = :user_id';
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":title" => $offer->getTitle(),
                ":job_name" => $offer->getJobName(),
                ":salary" => $offer->getSalary(),
                ":location" => $offer->getLocation(),
                ":deadline" => $offer->getDeadline(),
                ":user_id" => $offer->getUserId(),
                ":offer_id" => $offer->getId()
            ]);
            $this->updateOfferSkilles($offer);
            return true;
        } catch (PDOException $error) {
            throw new RuntimeException("Database error. Please try again later.");
        }
    }

    public function updateOfferSkilles(Offer $offer)
    {
        try {
            $this->deleteOfferSkilles($offer);
            $this->addOfferSkilles($offer);
        } catch (PDOException $error) {
            throw new RuntimeException("Database error. Please try again later.");
        }
    }

    public function deleteOffer(Offer $offer)
    {
        try {
            $query = 'DELETE FROM offers WHERE id = :offer_id AND user_id = :user_id';
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":offer_id" => $offer->getId(),
                ":user_id" => $offer->getUserId()
            ]);
            $this->deleteOfferSkilles($offer);
            return true;
        } catch (PDOException $error) {
            throw new RuntimeException("Database error. Please try again later.");
        }
    }

    public function deleteOfferSkilles(Offer $offer)
    {
        try {
            $query = 'DELETE FROM offer_tag WHERE offer_id = :offer_id';
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":offer_id" => $offer->getId()
            ]);
        } catch (PDOException $error) {
            throw new RuntimeException("Database error. Please try again later.");
        }
    }

    public function getOfferById(Offer $offer)
    {
        try {
            $query = '
                SELECT 
                    o.id AS offer_id,
                    o.title,
                    o.job_name,
                    o.salary,
                    o.location,
                    o.application_deadline,
                    o.user_id,
                    o.id,
                    t.id AS tag_id,
                    t.name AS tag_name
                    FROM offers o
                    LEFT JOIN offer_tag ot ON o.id = ot.offer_id
                    LEFT JOIN tags t ON ot.tag_id = t.id
                    WHERE o.id = :offer_id AND o.user_id = :user_id
                ';
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":offer_id" => $offer->getId(),
                ":user_id" => $offer->getUserId()
            ]);

            $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $rows;
        } catch (PDOException $error) {
            throw new RuntimeException("Database error. Please try again later.");
        }
    }

    public function getAllOffer()
    {
        try {
            $query = '
                SELECT 
                    o.id AS offer_id,
                    o.title,
                    o.job_name,
                    o.salary,
                    o.location,
                    o.user_id,
                    o.application_deadline,
                    t.id AS tag_id,
                    t.name AS tag_name
                    FROM offers o
                    LEFT JOIN offer_tag ot ON o.id = ot.offer_id
                    LEFT JOIN tags t ON ot.tag_id = t.id;
                ';
                // GROUP_CONCAT(t.name SEPARATOR ",") as tags
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $result;
        } catch (PDOException $error) {
            throw new RuntimeException("Database error. Please try again later.");
        }
    }

    public function getOfferByUserId(Offer $offer)
    {
        try {
            $query = '
                SELECT 
                    o.id AS offer_id,
                    o.title,
                    o.job_name,
                    o.salary,
                    o.location,
                    o.application_deadline,
                    o.user_id,
                    o.id,
                    t.id AS tag_id,
                    t.name AS tag_name
                    FROM offers o
                    LEFT JOIN offer_tag ot ON o.id = ot.offer_id
                    LEFT JOIN tags t ON ot.tag_id = t.id
                    WHERE o.user_id = :user_id;
                ';
            $stmt = $this->conn->prepare($query);
            $stmt->execute([
                ":user_id" => $offer->getUserId()
            ]);

            $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $rows;
        } catch (PDOException $error) {
            throw new RuntimeException("Database error. Please try again later.");
        }
    }

    public function getAllCategoriesWithTags()
    {
        $query = '
        SELECT 
            c.id   AS category_id,
            c.name AS category_name,
            t.id   AS tag_id,
            t.name AS tag_name
        FROM categories c
        LEFT JOIN tags t ON t.category_id = c.id
        ORDER BY c.id
        ';

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
