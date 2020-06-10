<?php

$host = 'localhost';
$dbName = 'koekjes';
$username = 'root';
$password = '';
$table = 'temperatures';
$connection;

try {
    $options = array(
        PDO::ATTR_ERRMODE    => PDO::ERRMODE_SILENT,
        PDO::ATTR_PERSISTENT => false,
    );

    $connection = new PDO("mysql:host=" . $host . ";dbname=" . $dbName, $username, $password, $options);
} catch (PDOExeception $e) {
}