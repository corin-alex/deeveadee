<div class="container-fluid">
    <br><br>
    <?php
    if (empty($chart))
        echo "Votre panier est vide";
    ?>
    <ul class="list-group">
        <?php
        $count = 0;
        foreach($chart as $dvd): ?>
        <li class="list-group-item">
            <a href="<?= site_url('chart/remove/' . $count); ?>" class="float-right"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
            <a href="<?= site_url('dvd/view/' . $dvd->id); ?>">
                <img class="float-left list-thumb" src="<?= base_url(); ?>assets/upload/<?= $dvd->afficheD; ?>">
                <h4 class="list-group-item-heading">
                    <?= $dvd->titreD; ?>
                </h4>
                <p class="list-group-item-text">
                    <?= $dvd->auteurD; ?> -
                    <?= $dvd->categorieD; ?> -
                    <?= $dvd->anneeD; ?>
                </p>
            </a>
        </li>
            <?php $count++; ?>
        <?php endforeach; ?>
    </ul>


    <div class="text-center">
        <button class="btn btn-primary">Reserver</button>
        <a onclick="return confirm('Etes vous sûr(e) de vouloir vider le panier ?');" href="<?= site_url('chart/empty'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
    </div>
    <br><br>
</div>
