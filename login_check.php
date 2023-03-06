<?php
include_once "database.php";

$email = $_POST['email'];
$pass = $_POST['pass'];

if (!empty($email) && !empty($pass)) {
    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    //preverim, če user obstaja in je geslo pravilno
    if ($user && password_verify($pass, $user['pass'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['admin'] = $user['admin'];
        header("Location: index.php"); die();
    }
}

header("Location: login.php");