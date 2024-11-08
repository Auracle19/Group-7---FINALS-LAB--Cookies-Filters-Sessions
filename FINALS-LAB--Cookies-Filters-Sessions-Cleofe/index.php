<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Coffee Shop</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #121212;
            font-family: 'Arial', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #ffffff;
        }
        .container {
            background: #1e1e1e;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s;
            max-width: 600px;
            width: 90%;
        }
        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(255, 255, 255, 0.2);
        }
        h1 {
            color: #f39c12;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            color: #ffffff;
        }
        a {
            color: #f39c12;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
            color: #e67e22;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Coffee Shop!</h1>
        <p>Discover the best coffee selections. Please <a href="login.php">login</a> to continue.</p>
    </div>
</body>
</html>
