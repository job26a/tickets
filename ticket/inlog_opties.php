<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Festival</title>
</head>
<body>

<div id="container">
    <div id="header">
        <?php
        include('header.php'); ?>
    </div>
    <div id="menu">
        <ul>
            <li>
                <a href="inloggen.php" id="txtmenu">inloggen</a>
            </li>
            <li>
                <a href="account%20maken.php" id="txtmenu">account maken</a>
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