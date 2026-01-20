<?php
ob_start();
session_start();
include_once 'header.php';

if (!isset($_SESSION['adminjanee']) or $_SESSION['adminjanee'] == false) {
    header('Location: login.php');
}


if (isset($_POST['naam'], $_POST['omschrijving'], $_POST['prijs'])) {

    $naam = $_POST['naam'];
    $omschrijving = $_POST['omschrijving'];
    $prijs = $_POST['prijs'];

    $stmt = $pdo->prepare("INSERT INTO menu (naam, omschrijving, prijs) VALUES (:naam, :omschrijving, :prijs)");

    $stmt->bindParam(':naam', $naam);
    $stmt->bindParam(':omschrijving', $omschrijving);
    $stmt->bindParam(':prijs', $prijs);

    $stmt->execute();

    header('Location: admin.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Toevoegen</title>
</head>
<body>
<form method="post" action="add.php">
    <input name="naam" type="text" placeholder="Naam">
    <input name="omschrijving" type="text" placeholder="Omschrijving">
    <input name="prijs" type="text" placeholder="Prijs">
    <button type="submit">Toevoegen</button>

</form>
<a href="admin.php">Terug</a>
</body>
</html>
