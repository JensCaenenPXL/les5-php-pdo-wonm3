<?php

?>

<html>
<head>
    <title>Overzicht</title>
</head>
<body>
<ul>
<?php
    //TODO: get list
?>
</ul>
<br>
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