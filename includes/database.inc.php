<?php

$host = 'localhost';
$dbName = 'weerapi';
$username = 'root';
$password = '';
$table = 'temperatures';
$connection;
$error = '';

try {
    $options = array(
        PDO::ATTR_ERRMODE    => PDO::ERRMODE_SILENT,
        PDO::ATTR_PERSISTENT => false,
    );

    $connection = new PDO("mysql:host=" . $host . ";dbname=" . $dbName, $username, $password, $options);
} catch (PDOException $e) {
    $error = 'Database kan niet geopend worden...<BR>';
}