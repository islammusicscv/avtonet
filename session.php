<?php
session_start();

$prefix = '/avtonet/';

$allowed = array($prefix.'login.php',$prefix.'user_add.php',$prefix.'login_check.php');

if (!isset($_SESSION['user_id']) && (!in_array($_SERVER['REQUEST_URI'],$allowed))) {
    header('Location:login.php'); die();
}