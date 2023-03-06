<?php
include_once "session.php";
include_once "database.php";

$user_id = $_SESSION['user_id'];
$comment_id = $_GET['id'];
$add_id = $_GET['add_id'];

$query = "DELETE FROM comments WHERE id=? AND user_id = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$comment_id,$user_id]);

header("Location: add.php?id=".$add_id."#kometarOdsek");