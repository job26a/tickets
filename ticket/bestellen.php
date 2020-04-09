<?php

require_once('database.php');

if(isset($_POST['save'])) {

    $basic = $_POST['quantity1'];
    $premium = $_POST['quantity2'];
    $VIP = $_POST['quantity3'];
    $date = date('Y-m-d H:i:s');

    $sqlInsert = "INSERT INTO klanten() VALUES ('$basic', '$premium', '$VIP', '$date')";

    $resultInsert = mysqli_query($con, insertQuery($basic , $premium, $VIP, $date));

    header("location: bevestig.php");

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
    include('header.php'); ?>
    </div>
    <div id="menu">
        <h2>kaartjes kopen</h2>
        <ul>

            <form action="bevestig.php" method="post">
                <label class="input">
                        <input type="checkbox" name="ticket1" value="basic"> basic
                        <input type="number" name="quantity1" min="0" max="50"><br>

                        <input type="checkbox" name="ticket2" value="premium"> premium
                        <input type="number" name="quantity2" min="0" max="20"><br>

                        <input type="checkbox" name="ticket3" value="VIP"> VIP
                        <input type="number" name="quantity3" min="0" max="10">
                        <br>
                </label>
                <input type="submit" value="betaalwijze" formaction="betaalwijze.php">
            </form>
        </ul>
    </div>
    <div id="submenu">
        <ul>
            <li>
                <a href="inloggen.php"> inloggen</a>
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