<?php
include_once 'header.php';
include_once "database.php";

$user_id = $_SESSION['user_id'];
$id = $_GET['id'];

$query = "SELECT * FROM cars WHERE id=? AND user_id=?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id, $user_id]);
$row = $stmt->fetch();
?>
    <h1>Uredi avtomobil</h1>

    <form action="car_update.php" method="post">
        <input type="hidden" value="<?php echo $row['id'];?>" name="id" />
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" value="<?php echo $row['brand'];?>" name="brand" placeholder="Vnesi znamko" required="required" />
            </div>
            <div class="col-12">
                <input type="text" value="<?php echo $row['model'];?>" name="model" placeholder="Vnesi model" required="required" />
            </div>
            <div class="col-12">
                <input type="text" value="<?php echo $row['year'];?>" name="year" placeholder="Vnesi letnik" />
            </div>
            <div class="col-12">
                <input type="text" value="<?php echo $row['km'];?>" name="km" placeholder="Vnesi prevožene km" />
            </div>
            <div class="col-12">
                <input type="text" value="<?php echo $row['ccm'];?>" name="ccm" placeholder="Vnesi prostornino"  />
            </div>
            <div class="col-12">
                <input type="text" value="<?php echo $row['kw'];?>" name="kw" placeholder="Vnesi kilovate" />
            </div>
            <div class="col-12">
                <input type="text" value="<?php echo $row['fuel'];?>" name="fuel" placeholder="Vnesi gorivo" />
            </div>
            <div class="col-12">
                <input type="submit" value="Shrani" class="primary" />
            </div>
        </div>
    </form>

<?php
include_once 'footer.php';
?>