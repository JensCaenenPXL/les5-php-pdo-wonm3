<?php
include("dbconnect.php");

$naam = $_GET["name"];
$sql = "DELETE FROM gebruikers WHERE naam = ?";
$query = $db_conn->prepare($sql);
$query->execute([$naam]);
header("Location: overzicht.php");