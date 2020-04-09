<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Festival</title>
</head>
<body>

<div id="container">
    <div id="header">
        <p id="header"></p>
        <?php
        include('header.php'); ?>
        <a href="inloggen.php" id="header">uitloggen</a>
    </div>
    <div id="menu">
        <ul>
            <li>
                <a href="overzicht_bestellingen.php">overzicht bestellingen</a>
            </li>
            <li>
                <a href="overzicht_gebruikers.php">overzicht gebruikers</a>
            </li>
            <li>
                <a href="overzicht_klanten.php">overzicht klanten</a>
            </li>
        </ul>


    </div>
    <div id="submenu"></div>

    <div id="footer">
        <?php
        include('footer.php')
        ?>
    </div>

</div>
</body>
</html>