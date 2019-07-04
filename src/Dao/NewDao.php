<?php


namespace App\Dao;


use PDO;

class NewDao extends BaseDao
{
    public function __construct(PDO $db)
    {
        parent::__construct($db);
    }
}