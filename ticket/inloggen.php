<?php
require_once("database.php");

$gebruikersnaam = $_POST['gebruikersnaam'];
$wachtwoord = $_POST['wachtwoord'];

if (isset($_POST['save'])) {

    $sql = "SELECT gebruikersnaam, Email, Wachtwoord FROM klanten
    WHERE gebruikersnaam = '$gebruikersnaam' AND  wachtwoord = '$wachtwoord'";

    $result = mysqli_query($con, selectQuery($gebruikersnaam, $wachtwoord) );
}
?>
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
        <div id="content">
            <div id="main-menu">
                <h2>inloggen</h2>
                <ul>
                    <form action="profiel.php" method="post">
                            gebruikersnaam:<br>
                            <input type="text" name="gebruikersnaam" value="">
                            <br>
                            wachtwoord:<br>
                            <input type="text" name="wachtwoord" value="">
                            <br>
                            <br>
                            <button formaction="profiel.php" name="save">inloggen</button>
                            <button formaction="bestellen.php" name="order">bestellen</button>

                    </form>



                </ul>
            </div>

        </div>

    </div>
    <div id="submenu">
        <ul>
            <li>
                <a href="inloggen.php"> inloggen</a>
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
