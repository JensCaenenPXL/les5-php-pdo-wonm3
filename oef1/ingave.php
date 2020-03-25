<?php
$user='root';
$password='root';
$database='persondb';
$pdo=null;

try {
    $pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $statement = $pdo->prepare();                                                      //TODO : database tonen
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->execute();
    var_dump($statement->fetch());


} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();

}
$pdo=null;