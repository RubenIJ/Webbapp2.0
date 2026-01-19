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
    <title>edit</title>

    <?php
    include_once 'header.php';

    if (!isset($_SESSION['adminjanee']) or $_SESSION['adminjanee'] == false) {
        header('Location: login.php');
    }

    $id = $_GET['id'];


    if (isset($_POST['naam'], $_POST['omschrijving'], $_POST['prijs'])) {

        $naam = $_POST['naam'];
        $omschrijving = $_POST['omschrijving'];
        $prijs = $_POST['prijs'];

        $stmt = $pdo->prepare("UPDATE menu SET naam = :naam, omschrijving = :omschrijving, prijs = :prijs WHERE id = :id");
        $stmt->bindParam(':naam', $naam);
        $stmt->bindParam(':omschrijving', $omschrijving);
        $stmt->bindParam(':prijs', $prijs);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        header('Location: admin.php');
    }

    $stmt = $pdo->prepare("SELECT id, naam, omschrijving, prijs FROM menu WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $row = $stmt->fetch();
    ?>
</head>

<body>
<h2>Product aanpassen</h2>

<form method="post" action="edit.php?id=<?php echo $id; ?>">
    <input name="naam" type="text" value="<?php echo $row['naam']; ?>" placeholder="Naam">
    <input name="omschrijving" type="text" value="<?php echo $row['omschrijving']; ?>" placeholder="Omschrijving">
    <input name="prijs" type="text" value="<?php echo $row['prijs']; ?>" placeholder="Prijs">
    <button type="submit">Opslaan</button>
</form>

<a href="admin.php">Terug</a>

</body>
</html>
