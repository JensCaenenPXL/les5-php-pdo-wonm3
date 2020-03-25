<?php
    include("dbconnect.php");
    $sql = "SELECT * FROM gebruikers";
    $result = $db_conn->prepare($sql);
    $result->execute();
?>

<html>
<head>
    <title>Overzicht</title>
</head>
<body>
<h2>Gebruikerslijst</h2>
<ul>
<?php while($gebruiker = $result->fetch()) { ?>
    <li><?php echo $gebruiker[1] ?></li>
<?php } ?>
</ul>
<hr>
<form action="toevoegen.php">
    <label>Voeg gebruiker toe:</label>
    <input type="text" name="name">
    <input type="submit" value="Voeg toe">
</form>
<br>
<form action="verwijder.php">
    <label>Verwijder gebruiker:</label>
    <input type="text" name="name">
    <input type="submit" value="Verwijder">
</form>
<form action="wijzig.php">
    <label>Wijzig gebruiker:</label>
    <br>
    <label>Oude naam:</label>
    <input type="text" name="old_name">
    <label>Nieuwe naam:</label>
    <input type="text" name="new_name">
    <input type="submit" value="Wijzig">
</form>
</body>
</html>