<?php
// oefening 2 - extra
$name = $_GET["name"];
?>
<html>
<head>
    <title>Bevestiging</title>
</head>
<body>
<form action="verwijder.php">
    <input type="hidden" name="name" value="<?php echo $name ?>">
    <p>Je staat op het punt om <?php echo $name ?> uit de gebruikerslijst te verwijderen. Ben je zeker van je keuze?</p>
    <input type="submit" value="Ja">
</form>
<form action="overzicht.php">
    <input type="submit" value="Nee">
</form>
</body>
</html>
