<?php
    include_once "header.php";
?>

<h1>Moja stran</h1>
<?php
//ali obstaja prijavljen uporabnik
if (isset($_SESSION['user_id'])) {
    echo 'Trenutno prijavljeni id je: '.$_SESSION['user_id'];
}


?>


<?php
    include_once "footer.php";


/*tabela = users

user_add.php -> stran, kjer uporabnik napiše podatke za dodajanje userja (FORM)
user_insert.php -> stran, ki zapiše v bazo
user_edit.php -> stran, kjer lahko uporabnik spremnija svoje nastavitve
user_update.php -> stran, ki spremeni podatke v bazi
user.php -> prikaže podatke 1 uporabnika
users.php -> prikaže vse uporabnike
user_delete.php -> izbriše uporabnika
*/
?>
