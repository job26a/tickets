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
        <h2>Basic</h2>
        <ul>
            <li><p>40 euro</p></li>
        </ul>
        <h2>Premium</h2>
        <ul>
            <li><p>60 euro</p></li>
        </ul>
        <h2>VIP</h2>
        <ul>
            <li><p>100 euro</p></li>
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