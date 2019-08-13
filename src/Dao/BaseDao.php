<?php


namespace App\Dao;

use PDO;
class BaseDao
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }
}