<div class="container-fluid">
    <div class="row">
        <?php foreach ($dvdlist as $dvd): ?>
            <div class="col-xs-6 col-md-3" style="padding: 0">
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

<nav aria-label="Page navigation" class="text-center">
    <ul class="pagination">
        <li>
            <a href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>
        <li><a href="<?= site_url('dvd/list/0/12'); ?>">1</a></li>
        <?php
        $offset = 12;
        for($i = 2; $i <= floor($itemcount/12); $i++):
            $offset += 12;
            ?>
        <li><a href="<?= site_url('dvd/list/' . $offset . '/12'); ?>"><?= $i ?></a></li>
        <?php endfor; ?>
        <li>
            <a href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
</nav>