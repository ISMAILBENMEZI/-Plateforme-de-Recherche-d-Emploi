<?php

namespace App\Model\Repository;

use App\Core\Database;

class OfferRepository
{
    private $conn;

    public function __construct()
    {
        $this->conn = Database::getInstance()->getConnection();
    }
}
