<?php
/**
 * Created by PhpStorm.
 * User: menakafernando
 * Date: 10/6/18
 * Time: 5:47 PM
 */

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => '127.0.0.1',
    'username' => 'root',
    'password' => '1234',
    'database' => 'new',
    'charset' => 'utf8',
    'collection' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->bootEloquent();
