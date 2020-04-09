<?php



$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "website";

$con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);



function insertQuery($voornaam, $achternaam, $gebruikersnaam, $telefoon_Nr, $wachtwoord, $Email, $admin){
    $sqlInsert = "INSERT INTO gebruikers(voornaam, achternaam, gebruikersnaam,  telefoon_Nr, wachtwoord, Email, admin) VALUES
                    ('$voornaam', '$achternaam','$gebruikersnaam', '$telefoon_Nr','$wachtwoord','$Email','$admin')";
    return $sqlInsert;
}