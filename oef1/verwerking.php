<?php

$user = 'root';
$password = 'root';
$pdo = 'null';

//TODO : uitgevoerd op voorwaarde dat er geen drop, delete of truncate in staat.

try {
    $pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $statement = $pdo->query();                                              //TODO : query nog invullen van html formulier
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->execute();


    //TODO : via while loop afdrukken

} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();

}
