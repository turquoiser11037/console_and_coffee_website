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
    <script defer src="js/script.js"></script>
    <title>Our Menu | Console & Coffee</title>
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
                    <a href="menu.php" class="active-hamburger">Menu</a><br>
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
            <a href="index.php">Home</a>
            <a href="menu.php" class="active-tab">Menu</a>
            <a href="games.php">Our Games</a>
            <a href="events.php">Events</a>
            <a href="contact.php">Contact Us</a>
        </nav>
        <br>
    </header>
    <main>
        <div class="box">
            <h1>Our Menu</h1>
        </div>
        <div class="box-image-two">
            <br>
            <p>We have a wide range of food and drink available, including savoury food and desserts and drinks such as our homemade coffee!</p>
            <p>It is a requirement for customers to purchase anything from our menu to be able to play any game at our location.</p>
            <p>We also serve alcoholic drinks which can only be purchased by customers with valid ID.</p>
            <br>
        </div>
        <div class="box">
            <div id="tab-container">
                <button class="tablink active" onclick="open_tab(event, 'food')">Food</button>
                <button class="tablink" onclick="open_tab(event, 'drinks')">Drinks</button>
                <button class="tablink" onclick="open_tab(event, 'alcohol')">Alcoholic Drinks</button>
            </div>
            <div id="menu-container" class="narrow">
                <div id="food" class="tab-content" style="display: block">
                    <h2>Savoury Food Menu</h2>
                    <br>
                    <div class="menu">
                        <p class="menu-title">Item</p>
                        <p class="menu-title">Price</p>
                        <p>Sandwich</p>
                        <p>£2.00</p>
                        <p>Panini</p>
                        <p>£2.00</p>
                        <p>Baguette</p>
                        <p>£2.50</p>
                        <p class="stretched-item menu-title">Toppings: (applies to Sandwiches, Paninis and Baguettes)</p>
                        <p class="stretched-item">Salad (+ 25p)</p>
                        <p class="stretched-item">Ham (+ 50p)</p>
                        <p class="stretched-item">Cheese (Vegan option) (+ 50p)</p>
                        <p class="stretched-item">Mozzarella (+ 50p)</p>
                        <p class="stretched-item">Bacon (+ 50p)</p>
                        <p class="stretched-item">Pepperoni (+ 50p)</p>
                        <p class="stretched-item">Chicken (+ 50p)</p>
                        <p class="stretched-item">Eggs (+ 50p)</p>
                        <p class="stretched-item">Beef (+ 50p)</p>
                        <p class="stretched-item">Tuna (+ 50p)</p>
                        <p class="stretched-item"></p>
                        <p>Sausage Roll</p>
                        <p>£2.00</p>
                        <p>Crisps (any flavour)</p>
                        <p>£1.50</p>
                    </div>
                    <h2>Dessert Menu</h2>
                    <div class="menu">
                        <p class="menu-title">Item</p>
                        <p class="menu-title">Price</p>
                        <p>Waffle</p>
                        <p>£3.00</p>
                        <p>Bubble Waffle</p>
                        <p>£3.25</p>
                        <p class="stretched-item menu-title">Toppings:</p>
                        <p class="stretched-item">Strawberries (+ 20p)</p>
                        <p class="stretched-item">Whipped Cream (+ 60p)</p>
                        <p class="stretched-item">Blueberries (+ 20p)</p>
                        <p class="stretched-item">Biscoff Spread (+ 75p)</p>
                        <p class="stretched-item">Vanilla Ice Cream (+ 60p)</p>
                        <p class="stretched-item">Chocolate Ice Cream (+ 75p)</p>
                        <p class="stretched-item">Any other ice cream flavour (+ £1.00)</p>
                        <p class="stretched-item">Caramel (+ 60p)</p>
                        <p>Millionaire's Shortbread</p>
                        <p>£3.00</p>
                        <p>Vanilla Ice Cream</p>
                        <p>£1.50</p>
                        <p>Chocolate Ice Cream</p>
                        <p>£2.00</p>
                        <p>Strawberry Ice Cream</p>
                        <p>£2.00</p>
                        <p>Mint Chocolate Ice Cream</p>
                        <p>£2.20</p>
                        <p>Double Chocolate Ice Cream</p>
                        <p>£2.50</p>
                        <p>Triple Chocolate Ice Cream</p>
                        <p>£2.75</p>
                        <p>Biscoff Ice Cream</p>
                        <p>£2.50</p>
                        <p>Bubblegum Ice Cream</p>
                        <p>£2.20</p>
                    </div>
                </div>
                <div id="drinks" class="tab-content">
                    <h2>Coffee Menu</h2>
                    <h3>All drinks are handmade by the cafe.</h3>
                    <div class="menu">
                        <p class="menu-title">Item</p>
                        <p class="menu-title">Price</p>
                        <p>Black Coffee</p>
                        <p>£1.70</p>
                        <p>Americano</p>
                        <p>£2.20, Iced: £2.50</p>
                        <p>Console Cappuccino</p>
                        <p>£2.70, Iced: £3.00</p>
                        <p>Flat White</p>
                        <p>£2.50, Iced: £3.00</p>
                        <p>Latte</p>
                        <p>£2.70, Iced: £3.00</p>
                        <p>E-spresso</p>
                        <p>£2.30, Iced: £2.60</p>
                        <p>Console Caramel Macchiato</p>
                        <p>£2.90, Iced: £3.30</p>
                        <p>Mocha</p>
                        <p>£2.80, Iced: £3.20</p>
                        <p>Flavoured Mocha (Mint Chocolate, Dark Chocolate, Caramel, Hazelnut)</p>
                        <p>£3.80, Iced: £4.50</p>
                    </div>
                    <h2>Frappes</h2>
                    <div class="menu">
                        <p class="menu-title">Item</p>
                        <p class="menu-title">Price</p> 
                        <p>Console and Coffee Frappe</p>
                        <p>£3.50</p>
                        <p>Console Espresso Frappe</p>
                        <p>£3.50</p>
                        <p>Mocha Frappe</p>
                        <p>£3.80</p>
                        <p>Caramel Frappe</p>
                        <p>£3.80</p>
                        <p>White Chocolate Frappe</p>
                        <p>£4.00</p>
                        <p>Hazelnut Frappe</p>
                        <p>£4.00</p>
                        <p>Cookies and Cream Frappe</p>
                        <p>£4.00</p>
                        <p>Mint Chocolate Frappe</p>
                    </div>
                    <h2>Drink Menu</h2>
                    <div class="menu">
                        <p class="menu-title">Item</p>
                        <p class="menu-title">Price</p>
                        <p>Water</p>
                        <p>£0.70</p>
                        <p>Tea</p>
                        <p>£1.70</p>
                        <p>Earl Grey Tea</p>
                        <p>£2.00</p>
                        <p>Green Tea</p>
                        <p>£2.20</p>
                        <p>Mint Tea</p>
                        <p>£2.20</p>
                        <p>Apple Juice / Orange Juice</p>
                        <p>£2.00</p>
                        <p>Fanta / Sprite / Diet Coke</p>
                        <p>£1.50</p>
                        <p>Coca-Cola / Pepsi</p>
                        <p>£1.75</p>
                        <p>Chocolate / Banana / Vanilla / Strawberry Milkshake</p>
                        <p>£3.30</p>
                        <p>Peach / Lemon Iced Tea</p>
                        <p>£2.50</p>
                    </div>
                </div>
                <div id="alcohol" class="tab-content">
                    <h2>Alcoholic Drink Menu (only available from 7pm - 10pm on selected days)</h2>
                    <h3>These drinks can only be served to those with valid ID.</h3>
                    <h2>Cocktails</h2>
                    <div class="menu">
                        <p class="menu-title">Item</p>
                        <p class="menu-title">Price</p>
                        <p>Bloody Mary (Vodka, homemade "Bloody" mix, olives, celery, salted rim)</p>
                        <p>£6.50</p>
                        <p>Console Irish Coffee Cocktail (Irish whiskey, hot coffee, brown sugar, cream)</p>
                        <p>£7.00</p>
                        <p>Console Margarita</p>
                        <p>£7.00</p>
                        <p>"Old Fashioned" Retro Gamer Cocktail</p>
                        <p>£7.00</p>
                        <p>Console Caramel Cocktail</p>
                        <p>£7.00</p>
                        <p>Elderflower Martini</p>
                        <p>£6.80</p>
                        <p>Strawberry Lemonade Vodka Cocktail</p>
                        <p>£6.80</p>
                        <p>"Sonic Speed" Blue Martini</p>
                        <p>£7.00</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; 2026 &mdash; Turquoise Websites</p>
    </footer>