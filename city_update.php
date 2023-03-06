<?php
include_once "session.php";
admin_only();
include_once "database.php";

$title = $_POST['title'];
$post_number = $_POST['post_number'];
$id = $_POST['id'];

//preverim, če ima vnešen ime kraja
if (!empty($title)) {
    $query = "UPDATE cities SET title=?,post_number=? WHERE id=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$title, $post_number, $id]);
}

header("Location: cities.php");