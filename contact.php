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
    <title>Contact Us | Console & Coffee</title>
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
                    <a href="index.php">Home</a><br>
                    <a href="menu.php">Menu</a><br>
                    <a href="games.php">Our Games</a><br>
                    <a href="events.php">Events</a><br>
                    <a href="contact.php" class="active-hamburger">Contact Us</a><br>
                </div>
            </div>
        </div>
        <div id="pagetitle-container">
            <img id="logo" src="img/logo.png" alt="Image of Console and Coffee logo">
            <h1 id="pagetitle-1" class="big-title text-green">Console and Coffee</h1>
            <h2 id="pagetitle-2" class="big-title text-green">Brew, Play, Connect!</h2>
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="games.php">Our Games</a>
            <a href="events.php">Events</a>
            <a href="contact.php" class="active-tab">Contact Us</a>
        </nav>
        <br>
    </header>
    <main>
        <div class="box">
            <h1>Contact Us!</h1>
            <p class="page-summary-text">Follow our social media to get all the updates about our service!</p>
            <p class="page-summary-text">You can also use the form on this page to recommend games that we could get for the cafe and also recommend specific events!</p>
        </div>
        <div class="box-green">
            <p>Our Social Media</p>
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
        <div class="box">
            <h2>Recommend a game or event for us here!</h2>
            <form action="actionpage.php" method="post">
                <div id="recommend-form">
                    <label for="recommend-game" id="recommend-game-text">Recommend a game (maximum 255 characters):</label>
                    <textarea id="recommend-game" name="recommend-game" placeholder="Type here" maxlength="255"></textarea>
                    <label for="recommend-event" id="recommend-event-text">Recommend an event (maximum 255 characters):</label>
                    <textarea id="recommend-event" name="recommend-event" placeholder="Type here" maxlength="255"></textarea>
                </div>
                <div id="submit-container">
                    <input type="submit" id="submit-form" value="Submit">
                </div>
            </form>
        </div>
    </main>
    <footer>
        <p>&copy; 2026 &mdash; Turquoise Websites</p>
    </footer>