<?php
require_once("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Festival</title>

    <style>
        table
        {
            border: solid black 1px;
            border-collapse: collapse;
        }
        td
        {
            border: solid black 1px;
            border-collapse: collapse;
        }
    </style>

</head>
<body>

<div id="container">
    <div id="header">
    <?php
    include('header.php'); ?>
    </div>
    <div id="menu">
        <h1>bestellingen overzicht</h1>
        <table>
            <th>Besteling ID</th>
            <th>Basic kaartjes</th>
            <th>Premium kaartjes</th>
            <th>VIP kaartjes</th>
        <?php
        $con;
        $sql = "SELECT * FROM bestellingen, klanten WHERE '$gebruikersnaam' = gebruikersnaam";
        $result = $con->query($sql);

        while($row = $result->fetch_assoc()) {

        echo "<tr>" . "<td>". $row["BestellingID"]."</td>" . "<td>" . $row["aantal_basic"].
             "</td>" . "<td>" . $row["aantal_premium"] . "</td>".
            "<td>" . $row["aantal_VIP"] . "</td>"."</tr>";
        }
        ?>


        </table>
    </div>
    <div id="submenu">
        <ul>
            <li>
                <a href="inlog_opties.php"> inloggen</a>
            </li>
            <li>
                <a href="ticket_info.php">info tickets</a>
            </li>
            <li>
                <a href="bestellen.php">bestellen</a>
            </li>
        </ul>
    </div>
    <div id="footer">
    <?php
    include('footer.php')
    ?>
    </div>

</div>
</body>
</html>