<?php
include_once 'header.php';
?>
    <h1>Vnos avtomobila</h1>

    <form action="car_insert.php" method="post">
        <div class="row gtr-uniform">
            <div class="col-12">
                <input type="text" name="brand" placeholder="Vnesi znamko" required="required" />
            </div>
            <div class="col-12">
                <input type="text" name="model" placeholder="Vnesi model" required="required" />
            </div>
            <div class="col-12">
                <input type="text" name="year" placeholder="Vnesi letnik" />
            </div>
            <div class="col-12">
                <input type="text" name="km" placeholder="Vnesi prevožene km" />
            </div>
            <div class="col-12">
                <input type="text" name="ccm" placeholder="Vnesi prostornino"  />
            </div>
            <div class="col-12">
                <input type="text" name="kw" placeholder="Vnesi kilovate" />
            </div>
            <div class="col-12">
                <input type="text" name="fuel" placeholder="Vnesi gorivo" />
            </div>
            <div class="col-12">
                <input type="submit" value="Shrani" class="primary" />
            </div>
        </div>
    </form>

<?php
include_once 'footer.php';
?>