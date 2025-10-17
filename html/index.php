<?php
session_start();

$servername = "db";
$dbname = "mydatabase";
$username = "user";
$password = "password";

try {
    $dsn = "mysql:host={$servername};dbname={$dbname};charset=utf8mb4";
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Verbinding OK
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Darko's</title>
</head>
<body>
    <header>
        <div class="container-header">
            <img src="images/logo.png" alt="Logo Darko's">
            <a href="login.php">Login</a>
            <a href="index.php">Home</a>
        </div>
    </header>
    <p>Test</p>
</body>
</html>