<?php
ob_start();
session_start();
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
    <?php
    include_once 'header.php';

    if (!isset($_SESSION['adminjanee']) or $_SESSION['adminjanee'] == false) {
        header('Location: login.php');
    }
    ?>
</head>
<body>

</body>
</html>