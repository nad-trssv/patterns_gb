<?php

namespace App\AbstractFactory\Mysql;

use App\AbstractFactory\DBConnectionInterface;

class DBConnection implements DBConnectionInterface
{
    public function connect()
    {
        return new \PDO('oracle:host=host_name;dbname=db_name;charset=UTF8', 'root', 'password');
    }
}