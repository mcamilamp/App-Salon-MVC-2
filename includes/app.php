<?php

use Model\ActiveRecord;

require __DIR__ . '/../vendor/autoload.php';
$doten = Dotenv\Dotenv::createImmutable(__DIR__);
$doten->safeLoad();

require 'funciones.php';
require 'database.php';

// Conectarnos a la base de datos
ActiveRecord::setDB($db);
