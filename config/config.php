<?php

namespace Config ;

use Dotenv\Dotenv;

if(!isset($_SESSION))
	session_start();


define('BASE_PATH', realpath(__DIR__.'/../'));

require_once __DIR__.'/../vendor/autoload.php';

$dotEnv = Dotenv::createImmutable(BASE_PATH);
$dotEnv->load();

require_once __DIR__.'/router.php' ;

new RouteDispatcher($router);
    