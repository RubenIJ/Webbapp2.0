<?php
ob_start();
session_start();
include_once 'header.php';

if (!isset($_SESSION['adminjanee']) or $_SESSION['adminjanee'] == false) {
    header('Location: login.php');
}

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM menu WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();

header('Location: admin.php');
?>