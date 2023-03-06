</section>

</div>
</div>

<!-- Sidebar -->
<div id="sidebar">
    <div class="inner">

        <!-- Search -->
        <section id="search" class="alt">
            <form method="post" action="#">
                <input type="text" name="query" id="query" placeholder="Search" />
            </form>
        </section>

        <!-- Menu -->
        <nav id="menu">
            <header class="major">
                <h2>Menu</h2>
            </header>
            <ul>
                <?php
                    if (isset($_SESSION['user_id'])) {
                ?>
                <li><a href="index.php">Domov</a></li>
                <li><a href="cities.php">Kraji</a></li>
                <li><a href="cars.php">Avtomobili</a></li>
                <li><a href="adds.php">Oglasi</a></li>
                <li><a href="adds_my.php">Moji oglasi</a></li>
                <li><a href="logout.php">Odjava</a></li>
                <?php
                    }
                    else {
                ?>
                <li><a href="user_add.php">Registracija</a></li>
                <li><a href="login.php">Prijava</a></li>
                <?php
                    }
                ?>
            </ul>
        </nav>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>Novi avtomobili</h2>
            </header>
            <div class="mini-posts">
                <article>
                    <a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                </article>
                <article>
                    <a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                </article>
                <article>
                    <a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
                    <p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
                </article>
            </div>
            <ul class="actions">
                <li><a href="#" class="button">More</a></li>
            </ul>
        </section>

        <!-- Section -->
        <section>
            <header class="major">
                <h2>Kontakt</h2>
            </header>
            <p>VSŠ Velenje.</p>
            <ul class="contact">
                <li class="icon solid fa-envelope"><a href="#">vss@scv.si</a></li>
                <li class="icon solid fa-phone">(03) 8960-640</li>
                <li class="icon solid fa-home">Trg mladosti 3<br />
                    3320 Velenje</li>
            </ul>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
        </footer>

    </div>
</div>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>