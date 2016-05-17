<?php
// Doctrine (db)
$app['db.options'] = array(
    'driver' => 'pdo_mysql',
    'charset' => 'utf8',
    'host' => 'localhost',
    'port' => '3306',
    'user' => 'mybooks_user',
    'password' => 'secret',
    'dbname' => 'mybooks',
);

