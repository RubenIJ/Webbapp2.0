<?php
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
    <title>Darko's</title>
    <?php
    include_once 'header.php'; //Roept de header.php pagina op en laat het op de pagina zien
    ?>
</head>
<body>
<h1>Bekijk ons menu: </h1>
<?php
$sql = "SELECT naam, omschrijving, prijs FROM menu";
$stmt = $pdo->query($sql);

$rows = $stmt->fetchAll(); // Haalt alle data uit de database en zet het in de variable rows

if (count($rows) > 0) { // count telt hoeveel rijen er in de database staan het vergelijkt het met het getal 0, als het meer dan 0 is gaat de foreach loop lopen
    foreach ($rows as $row) {
        echo "" . $row["naam"] . " - " . $row["omschrijving"] . " - " . $row["prijs"]  . "€" . "<br>"; //dit laat alle rijen zien met de data: naam, omschrijving en prijs
    }
} else {
    echo "0 results";
}
?>
</body>
</html>