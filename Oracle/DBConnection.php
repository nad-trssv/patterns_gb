<?php

namespace App\AbstractFactory\Oracle;

use App\AbstractFactory\DBConnectionInterface;

class DBConnection implements DBConnectionInterface
{
    public function connect()
    {
        return new \PDO('oci:host=host_name;dbname=db_name;charset=UTF8', 'root', 'password');
    }
}