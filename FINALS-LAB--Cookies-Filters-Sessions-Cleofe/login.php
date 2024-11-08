<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    
    if ($username === 'jeric123' && $password === '123') {
        $_SESSION['username'] = $username;
        header("Location: homepage.php");
        exit();
    } else {
        $error = "Invalid credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffee Shop Login</title>
    <style>
        body {
            background-color: #1a1a1a;
            color: #f2f2f2;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: #2c2c2c;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            transform: perspective(1000px) rotateY(0deg);
            transition: transform 0.5s ease;
        }
        .container:hover {
            transform: perspective(1000px) rotateY(10deg);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.7);
        }
        h2 {
            text-align: center;
            color: #d9b26a;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #f2f2f2;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #444;
            border-radius: 5px;
            background: #3d3d3d;
            color: #f2f2f2;
            transition: border 0.3s ease, box-shadow 0.3s ease;
        }
        input:focus {
            border: 1px solid #d9b26a;
            box-shadow: 0 0 8px rgba(217, 178, 106, 0.5);
            outline: none;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #d9b26a;
            color: #1a1a1a;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }
        button:hover {
            background-color: #c09b5a;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }
        .error {
            color: #ff6666;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <form method="post" action="">
            <h2>Login to Our Coffee Shop</h2>
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
        </form>
    </div>
</body>
</html>
