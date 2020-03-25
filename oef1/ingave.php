<?php
$user='root';
$password='root';
$database='persondb'; //$datebase = $_GET['database_select']
$pdo=null;

try {
    $pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $statement = $pdo->prepare();                                                      //TODO : database tonen
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->execute();
    var_dump($statement->fetchAll());


} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();

}
$pdo=null;