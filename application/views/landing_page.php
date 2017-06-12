<h2 class="text-center">
    Nouveautés
</h2>
<div class="container-fluid">
    <div class="row">
    <?php foreach ($last_dvds as $dvd): ?>
        <div class="col-xs-12 col-sm-6 col-md-3" style="padding: 0">
            <a href="<?= site_url('dvd/view/' . $dvd->id); ?>" class="dvd-thumb">
                <span class="glyphicon glyphicon-new-window open" aria-hidden="true"></span>
                <img src="<?= base_url(); ?>assets/upload/<?= $dvd->afficheD; ?>">
                <div class="dvd-details">
                    <strong><?= $dvd->titreD; ?></strong><br>
                    <?= $dvd->anneeD; ?><br>
                    <?= $dvd->auteurD; ?><br>
                    <?= $dvd->categorieD; ?><br>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
    </div>
</div>
<div class="text-center">
    <br>
    <a href="<?= site_url('dvd/list/'); ?>">Voir tous les DVD</a>
    <br><br>
</div>