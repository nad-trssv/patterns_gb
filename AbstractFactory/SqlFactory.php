<?php

namespace App\AbstractFactory;

use App\AbstractFactory\Mysql\MysqlFactoryInterface;
use App\AbstractFactory\Oracle\OracleFactoryInterface;
use App\AbstractFactory\Postgres\PostgresFactoryInterface;

class SqlFactory implements SqlFactoryInterface
{

    public function __construct(
            private MysqlFactoryInterface $mysqlFactory,
            private OracleFactoryInterface $oracleFactory,
            private PostgresFactoryInterface $postgresFactory
        )
    {
        
    }

    public function createConnection(string $type): DBConnectionInterface
    {
        return match($type)
        {
            SqlEnum::MYSQL->value => $this->mysqlFactory->createConnection(),
            SqlEnum::ORACLE->value => $this->oracleFactory->createConnection(),
            SqlEnum::POSTGRES->value => $this->postgresFactory->createConnection()
        };

    }

    public function createQueryBuilder(string $type): DBQueryBuilderInterface
    {
        return match($type)
        {
            SqlEnum::MYSQL->value => $this->mysqlFactory->createQueryBuilder(),
            SqlEnum::ORACLE->value => $this->oracleFactory->createQueryBuilder(),
            SqlEnum::POSTGRES->value => $this->postgresFactory->createQueryBuilder()
        };

    }


    public function createRecord(string $type): DBRecordInterface
    {
        return match($type)
        {
            SqlEnum::MYSQL->value => $this->mysqlFactory->createDBRecord(),
            SqlEnum::ORACLE->value => $this->oracleFactory->createDBRecord(),
            SqlEnum::POSTGRES->value => $this->postgresFactory->createDBRecord()
        };

    }


}