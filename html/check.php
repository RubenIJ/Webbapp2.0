<?php
ob_start();
session_start();
include_once 'header.php'; //Roept de header.php pagina op en laat het op de pagina zien


$stmt = $pdo->prepare("SELECT * FROM users WHERE gebruikersnaam = :gebruikersnaam AND wachtwoord = :wachtwoord");
$stmt->bindParam(':gebruikersnaam', $_POST['gebruikersnaam']);
$stmt->bindParam(':wachtwoord', $_POST['wachtwoord']);
$stmt->execute();
$result = $stmt->fetch();

if ($result == false) {
    echo "Login klopt niet";
    $_SESSION['adminjanee'] = false;
}
else {
     $_SESSION['adminjanee'] = true;
    header('Location: admin.php');
}
?>