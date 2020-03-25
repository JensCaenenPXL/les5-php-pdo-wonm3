<?php
$user = 'root';
$password = '';
$database = $_GET["database_select"];
$query = $_GET["query"];
$pdo = 'null';

//TODO : uitgevoerd op voorwaarde dat er geen drop, delete of truncate in staat.

if (stristr($query, 'drop') == true || stristr($query, 'delete') == true || stristr($query, 'truncate') == true) {

    print("De opgegeven parameters zijn niet toegelaten");

} else {


    try {
        $pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
        $statement = $pdo->query($query);
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->execute();


        //TODO : via while loop afdrukken
        print("<table>");
        while ($row = $statement->fetch()) {
            print('<tr><td>' . $row['id'] . '</td><td>' . $row['name'] . '</td></tr>');
        }
        print("</table>");

    } catch (PDOException $e) {
        print 'Exception!: ' . $e->getMessage();

    }
}
