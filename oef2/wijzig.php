<?php
include("dbconnect.php");

$old_name = $_GET["old_name"];
$new_name = $_GET["new_name"];
$sql = "UPDATE gebruikers SET naam = ? WHERE naam = ?";
$query = $db_conn->prepare($sql);
$query->execute([$new_name, $old_name]);
header("Location: overzicht.php");