<?php //var_dump($last_dvds); ?>

<h2 class="text-center">Nouveautés</h2>
<div class="row">
<?php foreach ($last_dvds as $dvd): ?>
    <div class="col-xs-6 col-md-3 thumb">
        <div class="text-center">
            <img src="http://via.placeholder.com/256x400"><br><br>
        </div>
        <strong> <?= $dvd->titreD; ?></strong>
        <span class="float-right">
             <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
             <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
             <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
             <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
             <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
         </span>

        <br>
        Année : <?= $dvd->anneeD; ?><br>
        Genre :  <?= $dvd->categorieD; ?><br>
        Auteur :  <?= $dvd->auteurD; ?><br><br>
        <div class="text-center">
            <button class="btn btn-primary">Reserver <span class="badge">10</span></button>
            <button class="btn btn-primary">En savoir plus</button>
        </div>
    </div>
<?php endforeach; ?>
</div>
