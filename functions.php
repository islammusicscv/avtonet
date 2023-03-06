<?php

function getImageFromCarId($id) {
    require "database.php";

    $query = "SELECT * FROM images WHERE car_id = ? LIMIT 1";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);

    $row = $stmt->fetch();

    //ali avto ima sliko
    if ($row) {
        return $row['url'];
    }

    return 'images/pic09.jpg';
}