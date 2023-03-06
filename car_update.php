<?php
include_once "session.php";
include_once "database.php";

$user_id = $_SESSION['user_id'];

$id = $_POST ['id'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$year = $_POST['year'];
$km = $_POST['km'];
$kw = $_POST['kw'];
$ccm = $_POST['ccm'];
$fuel = $_POST['fuel'];

//preverim, če ima vnešena obvezna polja
if (!empty($brand) && !empty($model)) {
    $query = "UPDATE cars SET brand=?,model=?,year=?,km=?,kw=?,ccm=?,fuel=?
                WHERE user_id=? AND id=?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$brand,$model,$year,$km,$kw,$ccm,$fuel,$user_id,$id]);
}

header("Location: cars.php");