<?php

namespace App\AbstractFactory\Postgres;

use App\AbstractFactory\DBConnectionInterface;
use App\AbstractFactory\DBQueryBuilderInterface;
use App\AbstractFactory\DBRecordInterface;

class PostgresFactory implements PostgresFactoryInterface
{
    public function createConnection(): DBConnectionInterface
    {
        return new DBConnection();
    }

    public function createQueryBuilder(): DBQueryBuilderInterface
    {
        return new DBQueryBuilder();
    }

    public function createDBRecord(): DBRecordInterface
    {
        return new DBRecord();
    }
}