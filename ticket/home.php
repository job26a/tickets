<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Festival</title>
    <script src="slideshow.js"></script>
</head>
<body>

<div id="container">
    <div id="header">
    <?php
    include('header.php'); ?>
    </div>
    <div id="menu">
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="festival.jpg" style="width:80%">

            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="festival%203.jpg" style="width:80%">

            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="festival%202.jpg" style="width:80%">

            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
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