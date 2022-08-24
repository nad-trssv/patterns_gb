<?php

namespace App\AbstractFactory\Postgres;

use App\AbstractFactory\Mysql\DBConnection;
use App\AbstractFactory\SqlOrmInterface;

class PostgresOrm implements SqlOrmInterface
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