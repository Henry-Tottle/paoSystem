<?php

namespace App\Models;
use PDO;
class PAOModel
{
    protected PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function allRows(): array
    {
        $query = $this->db->prepare("SELECT * FROM `paochart`");
        $query->execute();
        $rows = $query->fetchAll();
        return $rows;
    }
}