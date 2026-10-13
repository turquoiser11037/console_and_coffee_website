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
    <title>Events | Console & Coffee</title>
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
                    <a href="events.php" class="active-hamburger">Events</a><br>
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
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="games.php">Our Games</a>
            <a href="events.php" class="active-tab">Events</a>
            <a href="contact.php">Contact Us</a>
        </nav>
        <br>
    </header>
    <main>
        <div class="box">
            <h1>Events and Clubs</h1>
            <p class="page-summary-text">At our location, we host events, which range from our social groups that provide an opportunity to meet like-minded people to our many game-specific tournaments, which are an opportunity to showcase your game skills and win many prizes!</p>
        </div>
        <div class="box-green">
            <h1>UPCOMING EVENTS</h1>
        </div>
        <div id="event-container">
            <div class="box">
                <div class="event-listing">
                    <div class="event-date">
                        <p><strong>Date</strong></p>
                    </div>
                    <div class="event-name">
                        <p><strong>Event Name</strong></p>
                    </div>
                    <div class="event-time">
                        <p><strong>Time</strong></p>
                    </div>
                </div>
            </div>
            <div class="box-green">
                <div class="event-listing">
                    <div class="event-date">
                        <p>25/04</p>
                    </div>
                    <div class="event-name">
                        <p>Super Smash Bros. Ultimate Tournament</p>
                    </div>
                    <div class="event-description">
                        <p>We are proud to present our first Super Smash Bros. Tournament, and our first ever tournament hosted!</p>
                        <p>£5 entry</p>
                        <p>1st - £40</p>
                        <p>2nd - £25</p>
                        <p>3rd and 4th - £15</p>
                        <p>From 16:00 - 18:00 we host practice sessions for people that want to prepare!</p>
                        <p><strong><a href="#" class="text-black">Book here</a></strong></p>
                    </div>
                    <div class="event-time">
                        <p>18:00 - 21:00</p>
                    </div>
                </div>
            </div>
            <div class="box-green">
                <div class="event-listing">
                    <div class="event-date">
                        <p>26/04</p>
                    </div>
                    <div class="event-name">
                        <p>Board Games Afternoon</p>
                    </div>
                    <div class="event-description">
                        <p>Come and chill with us for a fun board games session!</p>
                        <p>Free Entry - turn up on the door</p>
                    </div>
                    <div class="event-time">
                        <p>13:00 - 16:00</p>
                    </div>
                </div>
            </div>
            <div class="box-green">
                <div class="event-listing">
                    <div class="event-date">
                        <p>26/04</p>
                    </div>
                    <div class="event-name">
                        <p>Mario Kart Double Dash Tournament</p>
                    </div>
                    <div class="event-description">
                        <p>The first of our retro tournaments! And what a fun way to start it out by playing one of the most nostalgic Mario Kart games!</p>
                        <p>£3 entry</p>
                        <p>Winner gets £25 in cash prizes!</p>
                        <p><strong><a href="#" class="text-black">Book here</a></strong></p>
                    </div>
                    <div class="event-time">
                        <p>18:00 - 21:00</p>
                    </div>
                </div>
            </div>
            <div class="box-green">
                <div class="event-listing">
                    <div class="event-date">
                        <p>28/04</p>
                    </div>
                    <div class="event-name">
                        <p>16-25 Social Meet</p>
                    </div>
                    <div class="event-description">
                        <p>Our cafe will be open exclusively to those aged 16-25 to provide an opportunity for people to meet and make new friends!</p>
                        <p>Free Entry</p>
                        <p><strong><a href="#" class="text-black">Book here</a></strong></p>
                    </div>
                    <div class="event-time">
                        <p>19:00 - 21:00</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box">
            <p>Want to request an event? <a href="contact.php">Contact us!</a></p>
        </div>
    </main>
    <footer>
        <p>&copy; 2026 &mdash; Turquoise Websites</p>
    </footer>