<?php

$user='root';
$password='root';
$pdo='null';


try{
    $pdo = new PDO("mysql:host=localhost;dbname=$database", $user,$password);



}catch(PDOException $e){
    print 'Exception!: ' . $e->getMessage();

}
