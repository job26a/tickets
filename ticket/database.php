<?php



$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "website";

$con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);



if (!$con) {
    die("Connectie mislukt: ".mysqli_connect_error());
}

function insertQuery($voornaam, $achternaam, $gebruikersnaam, $Email, $telefoon_Nr, $postcode,
                     $woonplaats, $straatnaam, $huis_Nr, $wachtwoord){
    $sqlInsert = "INSERT INTO klanten(voornaam, achternaam, gebruikersnaam, Email, telefoon_Nr, postcode, plaats,
        straat, huis_Nr, wachtwoord) VALUES ('$voornaam', '$achternaam','$gebruikersnaam','$Email', '$telefoon_Nr', '$postcode'
                                                   ,'$woonplaats','$straatnaam','$huis_Nr','$wachtwoord')";
    return $sqlInsert;
}
function selectQuery($gebruikersnaam, $wachtwoord){
    $sqlSelect = "SELECT gebruikersnaam, Email, Wachtwoord FROM klanten
    WHERE gebruikersnaam = '$gebruikersnaam' AND  wachtwoord = '$wachtwoord'";
    return $sqlSelect;
}