<?php
$user='root';
$password='root';
$database = 'persondb';
$pdo=null;

try {
    $db_conn = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $db_conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $statement = $pdo->prepare();                                                      //TODO : database tonen
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->execute();
    var_dump($statement->fetchAll());


} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();

}
$pdo=null;