</div>

<div class="categories container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <a href="<?= site_url('dvd/categorie/action'); ?>">Action</a><br>
            <a href="<?= site_url('dvd/categorie/aventure'); ?>">Aventure</a><br>
            <a href="<?= site_url('dvd/categorie/science%20fiction'); ?>">Science fiction</a><br>
            <a href="<?= site_url('dvd/categorie/drame'); ?>">Drame</a><br>
        </div>
        <div class="col-sm-3">
            <a href="<?= site_url('dvd/categorie/Thriller'); ?>">Thriller</a><br>
            <a href="<?= site_url('dvd/categorie/Romance'); ?>">Romance</a><br>
            <a href="<?= site_url('dvd/categorie/Biopic'); ?>">Biopic</a><br>
            <a href="<?= site_url('dvd/categorie/Comédie'); ?>">Comédie</a><br>
        </div>
        <div class="col-sm-3">
            <a href="<?= site_url('dvd/categorie/Documentaire'); ?>">Documentaire</a><br>
            <a href="<?= site_url('dvd/categorie/Péplum'); ?>">Péplum</a><br>
            <a href="<?= site_url('dvd/categorie/Concert'); ?>">Concert</a><br>
            <a href="<?= site_url('dvd/categorie/Spectacle'); ?>">Spectacle</a><br>
        </div>
        <div class="col-sm-3">
            <a href="<?= site_url('dvd/categorie/Comédie%20dramatique'); ?>">Comédie dramatique</a><br>
            <a href="<?= site_url('dvd/categorie/Animation'); ?>">Animation</a><br>
            <a href="<?= site_url('dvd/categorie/Policier'); ?>">Policier</a><br>
            <a href="<?= site_url('dvd/categorie/Guerre'); ?>">Guerre</a><br>
        </div>
    </div>
</div>
<div class="container-fluid footer">
    <div class="row">
        <div class="col-sm-4">
            <h5>Information</h5>
            <a href="#">A propos</a><br>
            <a href="#">Nous contacter</a><br>
            <a href="#">Mentions légales</a><br>
            <a href="#">CGV</a><br>
        </div>
        <div class="col-sm-4">
            <h5>Navigation</h5>
            <a href="#">Accueil</a><br>
            <a href="#">Catalogue</a><br>
            <a href="#">Panier</a><br>
            <a href="#">Historique de location</a><br>
        </div>
        <div class="col-sm-4">
            <h5>Suivez nous</h5>
            <a href="#">Facebook</a><br>
            <a href="#">Twitter</a><br>
            <a href="#">Google Plus</a><br>
            <a href="#">Youtube</a><br>
        </div>
    </div>
</div>
<footer class="page-footer">
    &copy; 2017 Deeveadee - Conception : www.corin-alex.com
</footer>
</main>
</div>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/base.js"></script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.9&appId=1486153574954198";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>