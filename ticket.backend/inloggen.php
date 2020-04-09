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

                <h2>inloggen</h2>
                <ul>
                    <form action="home.php" method="post">
                        <label class="input">

                            gebruikersnaam:<br>
                            <input type="text" name="gebruikersnaam" value="">
                            <br>
                            wachtwoord:<br>
                            <input type="text" name="wachtwoord" value="">
                            <br>
                            <br>
                            <input type="submit" name="save" value="submit">
                        </label>
                    </form>


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