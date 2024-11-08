<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$theme = isset($_COOKIE['user_theme']) ? $_COOKIE['user_theme'] : 'light';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Coffee Shop</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #f2f2f2;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: #2c2c2c;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        h1 {
            color: #d9b26a;
        }
        p {
            font-size: 1.2em;
        }
        .coffee-recommendations {
            margin: 30px 0;
            padding: 20px;
            background: #3d3d3d;
            border-radius: 8px;
            text-align: left;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
            color: #f2f2f2;
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #d9b26a;
            color: #1a1a1a;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .back-button:hover {
            background-color: #c09b5a;
        }
        footer {
            margin-top: 40px;
            padding: 10px;
            background: #4b3d29;
            color: white;
            text-align: center;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Coffee Shop, <?php echo $_SESSION['username']; ?>!</h1>
        <p>We're thrilled to have you here. Explore our delicious coffee selections!</p>
        
        <div class="coffee-recommendations">
            <h2>Our Top Coffee Picks</h2>
            <ul>
                <li><strong>Espresso:</strong> A rich and bold coffee shot, perfect for a quick boost.</li>
                <li><strong>Latte:</strong> Creamy and smooth with steamed milk, a favorite for many.</li>
                <li><strong>Cappuccino:</strong> A delightful mix of espresso, steamed milk, and foam.</li>
                <li><strong>Cold Brew:</strong> Smooth and refreshing, ideal for warm days.</li>
                <li><strong>Mocha:</strong> A sweet blend of chocolate and coffee, a dessert in a cup!</li>
            </ul>
        </div>
        
        <a href="coffee_selection.php" class="back-button">View Coffee Selection</a>
        <a href="logout.php" class="back-button">Logout</a>
    </div>

    <footer>
        <p>Contact us: info@ourcoffeeshop.com | Call us: 1125-1120-0901</p>
    </footer>
</body>
</html>
