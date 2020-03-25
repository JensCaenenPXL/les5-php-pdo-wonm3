<?php
include("dbconnect.php");

$naam = $_GET["name"];
$sql = "INSERT INTO gebruikers (naam) VALUES (?)";
$query = $db_conn->prepare($sql);
$query->execute([$naam]);
header("Location: overzicht.php");