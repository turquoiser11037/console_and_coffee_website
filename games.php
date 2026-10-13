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
    <title>Games List | Console & Coffee</title>
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
                    <a href="games.php" class="active-hamburger">Our Games</a><br>
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
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <a href="games.php" class="active-tab">Our Games</a>
            <a href="events.php">Events</a>
            <a href="contact.php">Contact Us</a>
        </nav>
        <br>
    </header>
    <main>
        <div class="box">
            <h1>Our Games List</h1>
            <p class="page-summary-text">Here are all of our games that are currently in our cafe - this gets updated every now and then so check back to see if your favourite games are in!</p>
        </div>
        <div class="box-green">
            <div id="game-database">
                <p class="menu-title">Game Name</p>
                <p class="menu-title">Game Type</p>
                <p class="menu-title">Console</p>

                <!--database-->
                <?php
                // database connection
                require_once('db-config.php');

                // query of the database
                $query = "
                SELECT games_list.GameName, game_types.GameType, consoles.ConsoleName
                FROM games_list
                JOIN game_types ON games_list.TypeID = game_types.GameTypeID
                LEFT JOIN consoles ON games_list.ConsoleID = consoles.ConsoleID
                ORDER BY GameName;
                "; 
                // left join to include null values

                // run query
                $run = @mysqli_query($conn, $query);
                $num_rows = mysqli_num_rows($run);
                if($num_rows > 0) {
                    // display the rows
                    while ($row = mysqli_fetch_array($run)) {
                        echo "<p>";
                        echo $row['GameName'];
                        echo "<p>";
                        echo $row['GameType'];
                        echo "</p>";
                        echo "<p>";
                        echo $row['ConsoleName'];
                        echo "</p>";
                        
                    }

                }
                else {
                    echo "<p>No data to show</p>";
                }

                ?>
            </div>
        </div>
        <div class="box">
            <p>Want to request a game? <a href="contact.php">Contact us!</a></p>
        </div>
    </main>
    <footer>
        <p>&copy; 2026 &mdash; Turquoise Websites</p>
    </footer>