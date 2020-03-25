<?php
include("dbconnect.php");

$name = $_GET["name"];
$sql = "DELETE FROM gebruikers WHERE naam = ?";
$query = $db_conn->prepare($sql);
$query->execute([$name]);
header("Location: overzicht.php");