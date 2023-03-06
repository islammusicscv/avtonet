<?php
include_once 'header.php';
?>
    <h1>Registracija</h1>

    <form action="user_insert.php" method="post">
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="first_name" placeholder="Vnesi ime" required="required" />
            </div>
            <div class="col-12">
                <input type="text" name="last_name" placeholder="Vnesi priimek" required="required" />
            </div>
            <div class="col-12">
                <input type="text" name="phone" placeholder="Vnesi telefon" required="required" />
            </div>
            <div class="col-12">
                <select name="city_id">
                <?php
                include_once "database.php";
                $query = "SELECT * FROM cities";
                $stmt = $pdo->prepare($query);
                $stmt->execute();

                while ($row = $stmt->fetch()) {
                    echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
                }
                ?>
                </select>
            </div>
            <div class="col-12">
                <input type="email" name="email" placeholder="Vnesi e-pošto" required="required" />
            </div>
            <div class="col-12">
                <input type="password" name="pass1" placeholder="Vnesi geslo" required="required" />
            </div>
            <div class="col-12">
                <input type="password" name="pass2" placeholder="Ponovi geslo" required="required" />
            </div>
            <div class="col-12">
                <input type="submit" value="Shrani" class="primary" />
            </div>
        </div>
    </form>

<?php
include_once 'footer.php';
?>