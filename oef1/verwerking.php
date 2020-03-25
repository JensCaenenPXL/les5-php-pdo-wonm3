<?php
$user = 'root';
$password = '';
$database = $_GET['database_select'];
$pdo = 'null';

if (stristr($_GET["query"], 'drop') || stristr($_GET["query"], 'delete') || stristr($_GET["query"], 'truncate')) {

    print("De opgegeven parameters zijn niet toegelaten");

} else {


    try {
        $pdo = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
        $statement = $pdo->query($_GET["query"]);
        //$statement->setFetchMode(PDO::FETCH_ASSOC);
        //$statement->execute();

        print("<table>");
        while ($row = $statement->fetch()) {
            print('<tr><td>' . $row['id'] . '</td><td>' . $row['name'] . '</td></tr>');
        }
        print("</table>");

    } catch (PDOException $e) {
        print 'Exception!: ' . $e->getMessage();

    }
}
