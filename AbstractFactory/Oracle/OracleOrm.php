<?php

namespace App\AbstractFactory\Oracle;

use App\AbstractFactory\SqlOrmInterface;

class OracleOrm implements SqlOrmInterface
{
    public function createConnection()
    {
        return new DBConnection();
    }

    public function createQueryBuilder()
    {
        return new DBQueryBuilder();
    }

    public function createDBRecord()
    {
        return new DBRecord();
    }
}