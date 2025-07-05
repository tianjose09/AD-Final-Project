<?php
require_once VENDOR_PATH . '/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

if (php_sapi_name() === 'cli') {
    $_ENV['PG_HOST'] = 'localhost';
}

// Distribute the data using array key
$pgConfig = [
    'host' => $_ENV['PG_HOST'],
    'port' => $_ENV['PG_PORT'],
    'db'   => $_ENV['PG_DB'],
    'user' => $_ENV['PG_USER'],
    'pass' => $_ENV['PG_PASS'],
];

$mongoConfig = [
    'uri' => $_ENV['MONGO_URI'],
    'db'  => $_ENV['MONGO_DB'],
];
