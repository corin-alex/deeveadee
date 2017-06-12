<h2 class="text-center">
    Nouveautés
</h2>
<div class="container-fluid">
    <div class="row">
    <?php foreach ($last_dvds as $dvd): ?>
        <div class="col-xs-6 col-md-3" style="padding: 0">
            <div class="dvd-thumb">
                <span class="glyphicon glyphicon-new-window open" aria-hidden="true"></span>
                <img src="resources/upload/<?= $dvd->afficheD; ?>">
                <div class="dvd-details">
                    <strong><?= $dvd->titreD; ?></strong><br>
                    <?= $dvd->anneeD; ?><br>
                    <?= $dvd->auteurD; ?><br>
                    <?= $dvd->categorieD; ?><br>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    </div>
</div>
<div class="text-center">
    <br>
    <a href="#">Voir tous les DVD</a>
    <br><br>
</div>