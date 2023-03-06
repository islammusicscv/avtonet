<?php
include_once "header.php";
?>
<h1>Kraji</h1>

<a href="city_add.php" class="button">Nov kraj</a>
<br />
<div class="table-wrapper">
    <table>
        <thead>
        <tr>
            <th>Ime</th>
            <th>Poštna številka</th>
            <th>Akcija</th>
        </tr>
        </thead>
        <tbody>
<?php
include_once "database.php";
$query = "SELECT * FROM cities";
$stmt = $pdo->prepare($query);
$stmt->execute();

while ($row = $stmt->fetch()) {
    echo '<tr>';
    echo '<td>'.$row['title'].'</td>';
    echo '<td>'.$row['post_number'].'</td>';
    echo '<td>
            <a href="city_delete.php?id='.$row['id'].'" class="fa fa-trash" onclick="return confirm(\'Prepričani?\');"></a> 
            <a href="city_edit.php?id='.$row['id'].'" class="fa fa-edit"></a> 
          </td>';
    echo '</tr>';
}
?>
        </tbody>
    </table>
</div>
<?php
include_once "footer.php";
?>