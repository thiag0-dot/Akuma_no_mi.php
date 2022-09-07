<?php

namespace AKUMA_NO_MI\DAO;

use \PDO;

class Mysql extends PDO
{
    public $dsn = "mysql:host=localhost:3306;dbname=db_fruta";
    public $user = "root";
    public $pass = "thiagodev";

    public function __construct()
    {
        return parent::__construct($this->dsn, $this->user, $this->pass);
    }
}