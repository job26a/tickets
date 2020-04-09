
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Festival</title>
</head>
<?php
require_once("database.php");

$con;
$sql = "SELECT * FROM klanten WHERE ";
$result = $con->query($sql);
?>
<body>

<div id="container">
    <div id="header">
        <?php
        include('header.php'); ?>
    </div>
    <div id="menu">
        <ul>
            <li>

            </li>
        </ul>
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