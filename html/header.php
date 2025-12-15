<?php
require 'database.php';

$db = new Database();   // class oproepen
$pdo = $db->connect();  // functie oproepen = connectie maken

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleHeader.css">
</head>
<body>
<div class="nav-box">
    <div class="nav-image">
        <img src="images/logo.png" alt="Logo Darko's">
    </div>
    <div class="nav-link">
        <div class="nav1">
        <a href="index.php">Home</a>
        </div>
        <div>
        <a href="login.php">Login</a>
        </div>
    </div>
</div>
</body>
</html>
