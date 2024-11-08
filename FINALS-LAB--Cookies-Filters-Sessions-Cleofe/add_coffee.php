<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testing";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $image_path = "pics/" . basename($_FILES["image"]["name"]);

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $image_path)) {
   
        $sql = "INSERT INTO coffee_items (name, description, image_path) VALUES ('$name', '$description', '$image_path')";

        if ($conn->query($sql) === TRUE) {
            echo "New coffee item added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Coffee Selection</title>
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
            margin: 40px 0;
            font-size: 2.5em;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background: #333;
            padding: 20px;
            border-radius: 8px;
        }
        .form-container input, .form-container textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #555;
            border-radius: 4px;
            background-color: #222;
            color: white;
        }
        .form-container input[type="file"] {
            background-color: #222;
        }
        .form-container button {
            padding: 10px 20px;
            background-color: #7b5b29;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container button:hover {
            background-color: #6a4e2e;
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
    <h1>Add Coffee Selection</h1>
    <div class="form-container">
        <form action="add_coffee.php" method="post" enctype="multipart/form-data">
            <label for="name">Coffee Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>

            <button type="submit">Add Coffee</button>
        </form>
    </div>

    <a class="back-button" href="coffee_selection.php">Back to Menu</a>
</body>
</html>
