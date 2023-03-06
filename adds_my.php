<?php
include_once "header.php";
$user_id = $_SESSION['user_id'];
?>
    <h1>Oglasi</h1>

    <a href="add_add.php" class="button">Nov oglas</a>
    <br /><br />
    <div class="row">
        <?php
        include_once "database.php";
        include_once "functions.php";
        $query = "SELECT * FROM adds WHERE user_id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$user_id]);



        while ($row = $stmt->fetch()) {
            echo '<div class=col-4 col-12-medium">';
            echo '<span class="image fit"><a href="add.php?id='.$row['id'].'"><img src="'.getImageFromCarId($row['car_id']).'" alt="Slika" /></a></span>';
            echo '<div>'.$row['title'].'</div>';
            echo '<div>'.$row['price'].' €</div>';
            echo '<span><a href="add_edit.php?id='.$row['id'].'" class="button small">Uredi</a></span>';
            echo ' <span><a href="add_delete.php?id='.$row['id'].'" class="button small primary" onclick="return confirm(\'Prepričani?\');">Izbriši</a></span>';
            echo '</div>';
        }
        ?>

    </div>

<?php
include_once "footer.php";
?>