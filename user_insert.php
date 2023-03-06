<?php
include_once "database.php";

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone = $_POST['phone'];
$city_id = $_POST['city_id'];
$email = $_POST['email'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

//preverim, če ima vnešene obvezne atribute
if (!empty($first_name) && !empty($last_name) && !empty($phone)
    && !empty($city_id) && !empty($email) && !empty($pass1)
    && ($pass1 == $pass2)) {
    //zakodirat geslo
    $pass = password_hash($pass1, PASSWORD_DEFAULT);
    $query = "INSERT INTO users(first_name,last_name,phone,city_id,email,pass) 
                VALUES(?,?,?,?,?,?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$first_name,$last_name,$phone,$city_id,$email,$pass]);
}
else {
    header("Location: user_add.php");
}

header("Location: login.php");