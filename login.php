<?php
include_once 'header.php';
?>
    <h1>Prijava</h1>

    <form action="login_check.php" method="post">
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="email" name="email" placeholder="Vnesi e-pošto" required="required" />
            </div>
            <div class="col-12">
                <input type="password" name="pass" placeholder="Vnesi geslo" required="required" />
            </div>
            <div class="col-12">
                <input type="submit" value="Prijava" class="primary" />
            </div>
        </div>
    </form>

<?php
include_once 'footer.php';
?>