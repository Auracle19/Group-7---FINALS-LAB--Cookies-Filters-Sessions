<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch coffee items from the database
$sql = "SELECT * FROM coffee_items";
$result = $conn->query($sql);

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Selection</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin: 40px 0 20px;
            font-size: 2.5em;
        }
        .coffee-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 0 20px;
        }
        .coffee-item {
            background: #2c2c2c;
            border-radius: 12px;
            text-align: center;
            padding: 20px;
            width: 350px;
            height: 200px;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: row;
            align-items: center;
        }
        .coffee-item img {
            max-width: 100px;
            height: auto;
            border-radius: 8px;
            margin-right: 20px;
        }
        .coffee-item h3 {
            margin: 0;
            font-size: 1.5em;
        }
        .coffee-item p {
            margin-top: 5px;
            font-size: 0.9em;
        }
        .coffee-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.7);
        }
        .back-button {
            display: inline-block;
            margin: 30px auto;
            padding: 10px 20px;
            background-color: #7b5b29;
            color: white;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
        }
        .back-button:hover {
            background-color: #6a4e2e;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Coffee Selection</h1>
        <div class="coffee-list">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<div class="coffee-item">';
                    echo '<img src="' . $row['image_path'] . '" alt="' . $row['name'] . '">';
                    echo '<div>';
                    echo '<h3>' . $row['name'] . '</h3>';
                    echo '<p>' . $row['description'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo '<p>No coffee items found.</p>';
            }
            ?>
        </div>
        <a class="back-button" href="add_coffee.php">Add Coffee</a>
        <a class="back-button" href="homepage.php">Back to Menu</a>
    </div>
</body>
</html>
