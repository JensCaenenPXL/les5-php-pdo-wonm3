<?php
    include("ingave.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database</title>
</head>
<body>
<form action="verwerking.php">
    <label for="database_select">Databank</label>
    <select name="database_select" id="database_select">
        <?php while ($db = $db_list->fetchColumn(0)) {
            echo "<option value=\"$db\">$db</option>";
        } ?>
    </select><br/>
    <label for="query">
        SQL Query (drop, delete en truncate niet toegelaten)
        <br>
        <textarea name="query" rows="4" cols="50"></textarea>
    </label>
    <br/>
    <br/>
    <button id="submit">Voer uit</button>
</form>
</body>
</html>