<?php
include_once 'header.php';
?>
    <h1>Vnos oglasa</h1>

    <form action="add_insert.php" method="post">
        <div class="row gtr-uniform">
            <div class="col-12">
                <select name="car_id">
                    <?php
                    include_once "database.php";
                    $query = "SELECT * FROM cars WHERE user_id=?";
                    $stmt = $pdo->prepare($query);
                    $stmt->execute([$_SESSION['user_id']]);

                    while ($row = $stmt->fetch()) {
                        echo '<option value="'.$row['id'].'">'.$row['brand'].' - '.$row['model'].' -'.$row['year'].'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="col-12">
                <input type="text" name="title" placeholder="Vnesi naslov oglasa" required="required" />
            </div>
            <div class="col-12">
                <textarea name="description" cols="8" rows="4" placeholder="Vnesi opis oglasa"></textarea>
            </div>
            <div class="col-12">
                <input type="text" name="price" placeholder="Vnesi ceno" required="required" />
            </div>
            <div class="col-12">
                <input type="date" name="date_start" placeholder="Vnesi začetek oglasa" required="required"  />
            </div>
            <div class="col-12">
                <input type="date" name="date_end" placeholder="Vnesi konec oglasa" required="required" />
            </div>
            <div class="col-12">
                <input type="submit" value="Shrani" class="primary" />
            </div>
        </div>
    </form>

<?php
include_once 'footer.php';
?>