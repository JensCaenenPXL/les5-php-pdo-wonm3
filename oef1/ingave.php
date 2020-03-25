<?php
$user='root';
$password='';

try {
    $db_conn = new PDO("mysql:host=localhost", $user, $password);
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Error!: " . $e->getMessage() . "\n");
}
$db_list = $db_conn->query("SHOW DATABASES");