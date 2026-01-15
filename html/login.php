<?php ?>


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
    ?>
</head>
<body>

<div class="form">
<form method="post" action="check.php">
    <input class="inpupt-field" name="gebruikersnaam" type="text" placeholder="User">
    <input type="password" name="wachtwoord" placeholder="Wachtwoord">
    <button  type="submit" Login></button>
</form>
</div>

</body>
</html>
