<?php

namespace App\AbstractFactory;

interface SqlOrmInterface
{
    public function createConnection();
    public function createQueryBuilder();
    public function createDBRecord();
}