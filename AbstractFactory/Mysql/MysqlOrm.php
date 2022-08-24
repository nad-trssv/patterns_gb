<?php

namespace App\AbstractFactory\Mysql;

use App\AbstractFactory\SqlOrmInterface;

class MysqlOrm implements SqlOrmInterface
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