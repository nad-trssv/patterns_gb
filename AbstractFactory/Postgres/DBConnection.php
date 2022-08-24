<?php

namespace App\AbstractFactory\Postgres;

use App\AbstractFactory\DBConnectionInterface;

class DBConnection implements DBConnectionInterface
{
    public function connect()
    {
        return new \PDO('pgsql:host=host_name;dbname=db_name;charset=UTF8', 'root', 'password');
    }
}