<?php
include_once 'header.php';
include_once "database.php";

$user_id = $_SESSION['user_id'];
$id = (int) $_GET['id'];

$query = "SELECT * FROM cars WHERE id=? AND user_id=?";
$stmt = $pdo->prepare($query);
$stmt->execute([$id, $user_id]);
//preverim, da obstaja avto s temi pogoji v bazi
if ($stmt->rowCount() != 1) {
    header("Location: cars.php"); die();
}

$row = $stmt->fetch();
?>

<h1>Ogled avtomobila</h1>
    <div class="row gtr-200">
        <div class="col-6 col-12-medium">
            <h2>Podatki</h2>
            <div class="table-wrapper">
                <table>
                    <tbody>
                    <tr>
                        <td><strong>Znamka</strong></td>
                        <td><?php echo $row['brand']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Model</strong></td>
                        <td><?php echo $row['model']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Kilometri</strong></td>
                        <td><?php echo $row['km']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Kilovati</strong></td>
                        <td><?php echo $row['kw']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Prostornina</strong></td>
                        <td><?php echo $row['ccm']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Gorivo</strong></td>
                        <td><?php echo $row['fuel']; ?></td>
                    </tr>
                    <tr>
                        <td><strong>Letnik</strong></td>
                        <td><?php echo $row['year']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-6 col-12-medium">
            <h2>Slike</h2>
            <div class="box alt">
                <div class="row gtr-50 gtr-uniform">

                            <?php
                            $query = "SELECT * FROM images WHERE car_id=?";
                            $stmt = $pdo->prepare($query);
                            $stmt->execute([$id]);

                            while ($image = $stmt->fetch()) {
                                echo '<div class="col-4">';
                                echo '<span class="image fit">';
                                echo '<img src="'.$image['url'].'" alt="" />';
                                echo '</span>';
                                echo '</div>';
                            }
                            ?>
                </div>
            </div>
            <form action="car_image_upload.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="row gtr-uniform">
                    <div class="col-12">
                        <input type="file" name="file" />
                    </div>
                    <div class="col-12">
                        <input type="submit" value="Naloži" class="button primary small" />
                    </div>
                </div>
            </form>

        </div>
    </div>


<?php
include_once 'footer.php';
?>