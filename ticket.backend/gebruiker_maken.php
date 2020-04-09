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
        include('header.php');
        ?>
        <a href="inloggen.php" id="header">uitloggen</a>

    </div>
    <div id="menu">
        <form action="#" method="post">


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
            wachtwoord:<br>
            <input type="text" name="wachtwoord" value="">
            <br>
            admin:
            <input type="radio" name="admin" value="true">

            <br>
            <button type="submit" name="save">Account Maken</button>


        </form>

    </div>
    <div id="submenu">

    </div>
    <div id="footer">
        <?php
        include('footer.php')

        ?>
    </div>

</div>
</body>
</html>
<?php
require('database.php');

if(isset($_POST['save'])) {

    $_POST['admin'] = $_POST['admin'] == 'true' ? true : false;
}

if(isset($_POST['save'])) {

    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST["achternaam"];
    $gebruikersnaam = $_POST["gebruikersnaam"];
    $Email = $_POST["Email"];
    $telefoon_Nr = $_POST["telefoon_Nr"];
    $wachtwoord = $_POST["wachtwoord"];
    $admin = $_POST["admin"];

    $sqlInsert = "INSERT INTO gebruikers(voornaam, achternaam, gebruikersnaam, telefoon_Nr, wachtwoord,Email,admin)
                    VALUES ('$voornaam', '$achternaam','$gebruikersnaam','$telefoon_Nr','$wachtwoord',
                                                '$Email', $admin)";

    $resultInsert = mysqli_query($con, insertQuery($voornaam, $achternaam, $gebruikersnaam, $telefoon_Nr, $wachtwoord,
                                                    $Email,$admin));

    mysqli_close($con);

};
?>
