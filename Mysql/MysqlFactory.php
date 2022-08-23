<?php

namespace App\AbstractFactory\Mysql;

use App\AbstractFactory\DBConnectionInterface;
use App\AbstractFactory\DBQueryBuilderInterface;
use App\AbstractFactory\DBRecordInterface;

class MysqlFactory implements MysqlFactoryInterface
{
    public function createConnection():DBConnectionInterface {
        return new DBConnection();
    }

    public function createQueryBuilder():DBQueryBuilderInterface {
        return new DBQueryBuilder();
    }
    
    public function createDBRecord():DBRecordInterface {
        return new DBRecord();
    }
}