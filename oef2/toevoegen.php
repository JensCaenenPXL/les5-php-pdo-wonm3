<?php
include("dbconnect.php");

$name = $_GET["name"];
$sql = "INSERT INTO gebruikers (naam) VALUES (?)";
$query = $db_conn->prepare($sql);
$query->execute([$name]);
header("Location: overzicht.php");