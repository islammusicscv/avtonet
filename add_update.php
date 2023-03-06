<?php
include_once "session.php";
include_once "database.php";

$user_id = $_SESSION['user_id'];

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];
$date_start = $_POST['date_start'];
$date_end = $_POST['date_end'];

//preverim, če ima vnešena obvezna polja
if (!empty($title) && !empty($price) && !empty($date_start) && !empty($date_end)) {
    $query = "UPDATE adds SET title=?,description=?,price=?,date_start=?,date_end=? WHERE id=? AND user_id=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$title,$description,$price,$date_start,$date_end,$id,$user_id]);
}

header("Location: adds_my.php");