<?php 

namespace App\AbstractFactory;


interface OrmFactoryInterface 
{
    public function createConnection(): DBConnectionInterface;
    public function createQueryBuilder(): DBQueryBuilderInterface;
    public function createDBRecord(): DBRecordInterface;

}