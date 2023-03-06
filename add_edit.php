<?php
include_once 'header.php';
include_once "database.php";

$id = (int) $_GET['id'];
$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM adds WHERE id=? AND user_id =?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id, $user_id]);

if ($stmt->rowCount() != 1) {
    header("Location: adds_my.php"); die();
}

$row = $stmt->fetch();

?>
    <h1>Uredi oglasa</h1>

    <h2>
        <?php
        $query = "SELECT * FROM cars WHERE id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$row['car_id']]);
        $car = $stmt->fetch();

        echo $car['brand'].' '.$car['model'].' '.$car['year'];
        ?>

    </h2>

    <form action="add_update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="title" value="<?php echo $row['title']; ?>" placeholder="Vnesi naslov oglasa" required="required" />
            </div>
            <div class="col-12">
                <textarea name="description" cols="8" rows="4" placeholder="Vnesi opis oglasa"><?php echo $row['description']; ?></textarea>
            </div>
            <div class="col-12">
                <input type="text" name="price" value="<?php echo $row['price']; ?>" placeholder="Vnesi ceno" required="required" />
            </div>
            <div class="col-12">
                <input type="date" name="date_start" value="<?php echo date( "Y-m-d", strtotime($row['date_start'])); ?>" placeholder="Vnesi začetek oglasa" required="required"  />
            </div>
            <div class="col-12">
                <input type="date" name="date_end" value="<?php echo date( "Y-m-d", strtotime($row['date_end'])); ?>" placeholder="Vnesi konec oglasa" required="required" />
            </div>
            <div class="col-12">
                <input type="submit" value="Shrani" class="primary" />
            </div>
        </div>
    </form>

<?php
include_once 'footer.php';
?>