<?php
session_start();

$prefix = '/avtonet/';

$allowed = array($prefix.'login.php',$prefix.'user_add.php',$prefix.'login_check.php');

if (!isset($_SESSION['user_id']) && (!in_array($_SERVER['REQUEST_URI'],$allowed))) {
    header('Location:login.php'); die();
}

function admin_only() {
    //če ni admin, ga preusmerim na domov
    if (!$_SESSION['admin']) {
        header("Location: index.php");
    }
}