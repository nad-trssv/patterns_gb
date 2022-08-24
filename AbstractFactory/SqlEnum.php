<?php

namespace App\AbstractFactory;

enum SqlEnum: string{
    case MYSQL = 'musql';
    case ORACLE = 'oracle';
    case POSTGRES = 'postgres';
}