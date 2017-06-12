
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <img src="<?= base_url(); ?>assets/upload/<?= $dvd->afficheD; ?>">
        </div>
        <div class="col-sm-6">
            <h2><?= $dvd->titreD; ?></h2>
            <div class="fb-share-button float-right" data-href="http://deeveadee.my/index.php/landing/view" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdeeveadee.my%2Findex.php%2Flanding%2Fview&amp;src=sdkpreparse">Partager</a></div>

            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span><br>
            <?= $dvd->categorieD; ?> -
            <?= $dvd->anneeD; ?><br>
            <?= $dvd->auteurD; ?><br><br>
            <?= $dvd->descriptionD; ?><br><br>
            <button class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></button>

             </div>
    </div>
</div>

