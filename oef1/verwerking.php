<?php

$user = 'root';
$password = 'root';
$pdo = 'null';

//TODO : uitgevoerd op voorwaarde dat er geen drop, delete of truncate in staat.

if( stristr($_GET["query"] , 'drop') == true || stristr($_GET["query"] , 'delete') == true || stristr($_GET["query"] , 'truncate') == true) {

    print("De opgegeven parameters zijn niet toegelaten");

}else{


try {
    $pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    $statement = $pdo->query($_GET["query"]);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $statement->execute();


    //TODO : via while loop afdrukken

} catch (PDOException $e) {
    print 'Exception!: ' . $e->getMessage();

}
}
