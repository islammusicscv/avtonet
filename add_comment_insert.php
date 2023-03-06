<?php
include_once "session.php";
include_once "database.php";

$add_id = $_POST['add_id'];
$content = $_POST['content'];
$user_id = $_SESSION['user_id'];

if (!empty($content)) {
    $query = "INSERT INTO comments(content,user_id,add_id) VALUES (?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$content,$user_id,$add_id]);
}

header("Location: add.php?id=".$add_id."#kometarOdsek");