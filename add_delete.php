<?php
include_once "session.php";
include_once "database.php";

$id = $_GET['id'];
$user_id = $_SESSION['user_id'];

$query = "DELETE FROM adds WHERE id = ? AND user_id = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id, $user_id]);

header("Location: adds_my.php");