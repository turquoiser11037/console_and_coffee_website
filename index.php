<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cascadia+Code:ital,wght@0,200..700;1,200..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Home | Console & Coffee</title>
</head>
<body>
    <header>
        <div class="hamburger-container">
            <div class="hamburger">
                <!--checkbox-->
                <input type="checkbox">

                <!--3 spans-->
                <span></span>
                <span></span>
                <span></span>

                <!--menu items-->
                <div class="hamburger-links">
                    <a href="index.php" class="active-hamburger">Home</a><br>
                    <a href="menu.php">Menu</a><br>
                    <a href="games.php">Our Games</a><br>
                    <a href="events.php">Events</a><br>
                    <a href="contact.php">Contact Us</a><br>
                </div>
            </div>
        </div>
        <div id="pagetitle-container">
            <img id="logo" src="img/logo.png" alt="Image of Console and Coffee logo">
            <h1 id="pagetitle-1" class="big-title text-green">Console and Coffee</h1>
            <h2 id="pagetitle-2" class="big-title text-green">Brew, Play, Connect!</h2>
        </div>
        <nav>
            <a href="index.php" class="active-tab">Home</a>
            <a href="menu.php">Menu</a>
            <a href="games.php">Our Games</a>
            <a href="events.php">Events</a>
            <a href="contact.php">Contact Us</a>
        </nav>
        <br>
    </header>
    <main>
        <!--title-->
        <div class="box">
            <h1>Welcome!</h1>
        </div>
        <div class="box-image" id="welcome">
            <br>
            <p>We are an independent gaming cafe located in Shanklin, Isle of Wight.</p>
            <p>We have many board games, tabletop games and video games available at our location!</p>
            <p>All games available to play once you buy anything from our wide range of food and drink! You can find our menu <a href="menu.php" class="link-image">here</a></p>
            <br>
        </div>
        <!--next event countdown-->
        <div class="box">
            <p class="page-summary-text">We host social groups at our location, which provide an opportunity to meet new people, and we host events and tournaments for specific games which are open to all skill levels!</p>
            <br>
            <p><strong>Next Event:</strong></p>
            <p id="next-event-time">
            <?php
            date_default_timezone_set('Europe/London');
            $rem = strtotime('25th April 2026 18:00') - time();
            $day = floor($rem / 86400);
            $hr  = floor(($rem % 86400) / 3600);
            $min = floor(($rem % 3600) / 60);
            $sec = ($rem % 60);
            echo "Super Smash Bros. Ultimate Tournament - ";
            if($day) echo "$day days ";
            if($hr) echo "$hr hours ";
            if($min) echo "$min minutes ";
            if($sec) echo "$sec seconds ";
            echo "remaining";
            ?>
            <br>
            </p>
            <p>Check out all events <a href="events.php">here</a></p>
        </div>
        <!--image gallery-->
        <div class="box-green">
            <div id="opening-times">
                <h2>Opening Times</h2>
                <p>Monday: 11:00 - 17:00</p>
                <p>Tuesday: 11:00 - 18:00</p>
                <p>Wednesday: 10:00 - 18:00</p>
                <p>Thursday: 10:00 - 18:00</p>
                <p>Friday: 10:00 - 21:00</p>
                <p>Saturday: 10:00 - 21:00</p>
                <p>Sunday: 12:00 - 16:30</p>
                <p>Any other open times are just exclusively for clubs and events.</p>
            </div>
            <div id="image-gallery"> <!--update alt text-->
                <div class="image-gallery-item">
                    <img src="img/image1.jpeg" alt="Image of gaming consoles">
                </div>
                <div class="image-gallery-item">
                    <img src="img/image2.png" alt="Image of coffee on a one of our tables with a board game on it">
                </div>
                <div class="image-gallery-item">
                    <img src="img/image4.jpeg" alt="Image of Magic The Gathering cards">
                </div>
            </div>
        </div>
        <!--location-->
        <div class="box"> <!--id/class here-->
            <h2>Our Location!</h2>
            <p>Shanklin High Street</p>
            <img id="location-img" src="img/location-img.png" alt="Image of the cafe's location on Google Maps">
            <!--postcode and everything go here-->
            <p><a href="https://www.google.com/maps/@50.6289213,-1.1792041,17.5z">Link to location</a></p>
        </div>
        <!--social media pages / discord server-->
        <div class="box-green">
            <h3>Our Social Media</h3>
            <div id="socialcontainer"><!--flex-->
                <div class="socialmedia">
                    <a href="#" class="hidden-link"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/2023_Facebook_icon.svg/1280px-2023_Facebook_icon.svg.png?20231011122028" alt="Image of Facebook logo"></a>
                </div>
                <div class="socialmedia">
                    <a href="#" class="hidden-link"><img src=https://upload.wikimedia.org/wikipedia/commons/thumb/5/58/Instagram-Icon.png/960px-Instagram-Icon.png?_20230822013318 alt="Image of Instagram logo"></a>
                </div>
                <div class="socialmedia">
                    <a href="#" class="hidden-link"><img src="https://pngimg.com/d/tiktok_PNG2.png" alt="Image of TikTok logo"></a>
                </div>
            </div>
            <div class="box narrow"> <!--discord-->
                <p>Discord Server!</p>
                <p>Join our community <a href="#">here</a></p>
            </div>
            <br>
        </div>
    </main>
    <footer>
        <p>&copy; 2026 &mdash; Turquoise Websites</p>
    </footer>
</body>
</html>