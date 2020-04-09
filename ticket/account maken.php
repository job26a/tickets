<?php
require('database.php');


    if(isset($_POST['save'])) {

        $voornaam = $_POST['voornaam'];
        $achternaam = $_POST["achternaam"];
        $gebruikersnaam = $_POST["gebruikersnaam"];
        $Email = $_POST["Email"];
        $telefoon_Nr = $_POST["telefoon_Nr"];
        $postcode =  $_POST["postcode"];
        $woonplaats = $_POST["woonplaats"];
        $straatnaam = $_POST["straatnaam"];
        $huis_Nr = $_POST["huis_Nr"];
        $wachtwoord = $_POST["wachtwoord"];






        $sqlInsert = "INSERT INTO klanten(voornaam, achternaam, gebruikersnaam, Email, telefoon_Nr, postcode, woonplaats,
        straatnaam, huis_Nr, wachtwoord) VALUES ('$voornaam', '$achternaam','$gebruikersnaam','$Email', '$telefoon_Nr', '$postcode'
                                                   ,'$woonplaats','$straatnaam','$huis_Nr','$wachtwoord')";

        $resultInsert = mysqli_query($con, insertQuery($voornaam, $achternaam, $gebruikersnaam, $Email, $telefoon_Nr, $postcode,
                                                        $woonplaats, $straatnaam, $huis_Nr, $wachtwoord ));

        header("location: profiel.php");

        mysqli_close($con);

    };
if(isset($_POST['order'])) {

    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST["achternaam"];
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $Email = $_POST["Email"];
    $telefoon_Nr = $_POST["telefoon_Nr"];
    $postcode =  $_POST["postcode"];
    $woonplaats = $_POST["woonplaats"];
    $straatnaam = $_POST["straatnaam"];
    $huis_Nr = $_POST["huis_Nr"];
    $wachtwoord = $_POST["wachtwoord"];






    $sqlInsert = "INSERT INTO klanten(voornaam, achternaam, gebruikersnaam, Email, telefoon_Nr, postcode, plaats,
        straat, huis_Nr, wachtwoord) VALUES ('$voornaam', '$achternaam','$gebruikersnaam','$Email', '$telefoon_Nr', '$postcode'
                                                   ,'$woonplaats','$straatnaam','$huis_Nr','$wachtwoord')";

    $resultInsert = mysqli_query($con, insertQuery($voornaam, $achternaam, $gebruikersnaam, $Email, $telefoon_Nr, $postcode,
        $woonplaats, $straatnaam, $huis_Nr, $wachtwoord ));

    header("location: bestellen.php");

    mysqli_close($con);

};
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
        include('header.php');
        ?>

    </div>
    <div id="menu">
        <form action="account%20maken.php" method="post">


            voornaam:<br>
            <input type="text" name="voornaam" id="txtmenu">
            <br>
            achternaam:<br>
            <input type="text" name="achternaam">
            <br>
            gebruikersnaam:<br>
            <input type="text" name="gebruikersnaam" value="">
            <br>
            Email:<br>
            <input  type="text" name="Email" value="">
            <br>
            telefoon nummer:<br>
            <input type="text" name="telefoon_Nr" value="">
            <br>
            postcode:<br>
            <input type="text" name="postcode" value="">
            <br>
            woonplaats:<br>
            <input type="text" name="woonplaats" value="">
            <br>
            straatnaam:<br>
            <input type="text" name="straatnaam" value="">
            <br>
            huisnummer:<br>
            <input type="text" name="huis_Nr" value="">
            <br>
            wachtwoord:<br>
            <input type="text" name="wachtwoord" value="">
            <br>

            <br>
            <button formaction="#" name="save">inloggen</button>
            <button formaction="#" name="order">bestellen</button>


        </form>

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