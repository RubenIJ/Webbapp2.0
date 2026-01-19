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
    <title>Admin</title>
    <?php
    include_once 'header.php';

    if (!isset($_SESSION['adminjanee']) or $_SESSION['adminjanee'] == false) {
        header('Location: login.php');
    }
    ?>
</head>
<body>
<a href="add.php" >Product toevoegen</a>
 <h2>menu kaart</h2>
    <?php
    $sql = "SELECT id, naam, omschrijving, prijs FROM menu";
    $stmt = $pdo->query($sql);

    $rows = $stmt->fetchAll(); // Haalt alle data uit de database en zet het in de variable rows

    if (count($rows) > 0) { // count telt hoeveel rijen er in de database staan het vergelijkt het met het getal 0, als het meer dan 0 is gaat de foreach loop lopen
        foreach ($rows as $row) {
            echo "" . $row["naam"] . " - " . $row["omschrijving"] . " - " . $row["prijs"] . "€ " . "<a href='edit.php?id=" . $row["id"] . "'>Aanpassen</a><br>"; //dit laat alle rijen zien met de data: naam, omschrijving en prijs
        }
    } else {
        echo "0 results";
    }
    ?>


</body>
</html>