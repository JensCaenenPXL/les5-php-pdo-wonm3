<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $db_conn = new PDO("mysql:host=$servername;dbname=les5_php_oef2", $username, $password);
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage() . "\n");
}
