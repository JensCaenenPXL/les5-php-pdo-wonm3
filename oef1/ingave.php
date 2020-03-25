<?php
$user='root';
$password='root';
$database='persondb';
$pdo='null';

try {
    $pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $statement = $pdo->prepare();
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->execute();


} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();

}