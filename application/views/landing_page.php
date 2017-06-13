<div class="intro">
    <div class="container-fluid text-center">
        <br><br>
        <div class="page-header">
        <h1><span class="the-d">D</span><small>eeveadee</small></h1>
        </div>
        <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
    </div>
</div>
<br><br><br><br>
<h2 class="text-center">Nouveautés</h2>
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

<h2 class="text-center">Nos formules</h2>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-4">
           <div class="pricing-tmb">
               <div class="pricing-header">
                   <div class="princing-title">
                       Essential
                   </div>
                    <div class="pricing-price">
                        20€<sup><small>Mois</small></sup>
                    </div>
               </div>
               <br>
               <div class="container-fluid">
                   <ul class="list-group">
                       <li class="list-group-item">Cras justo odio</li>
                       <li class="list-group-item">Dapibus ac facilisis in</li>
                       <li class="list-group-item">Morbi leo risus</li>
                   </ul>
               </div>
               <div class="text-center">
                   <button class="btn btn-primary">Choisir</button>
               </div>
           </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="pricing-tmb">
                <div class="pricing-header">
                    <div class="princing-title">
                        Standard
                    </div>
                    <div class="pricing-price">
                        30€<sup><small>Mois</small></sup>
                    </div>
                </div>
                <br>
                <div class="container-fluid">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                    </ul>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">Choisir</button>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="pricing-tmb">
                <div class="pricing-header">
                    <div class="princing-title">
                        Premium
                    </div>
                    <div class="pricing-price">
                        40€<sup><small>Mois</small></sup>
                    </div>
                </div>
                <br>
                <div class="container-fluid">
                    <ul class="list-group">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                    </ul>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary">Choisir</button>
                </div>
            </div>
        </div>
    </div>
</div>

<h2 class="text-center">Nos boutiques</h2>
<div id="map"></div>
<br><br>
<script>
    function initMap() {
        var uluru = {lat: 43.605160, lng: 3.882201};
        var uluruu = {lat: 43.346642, lng: 3.221606};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 20,
            center: uluru
        });
        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
        var marker2 = new google.maps.Marker({
            position: uluruu,
            map: map
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9GMpu6HgmVgNitPurY_CWM07BY9l5QiA &callback=initMap">
</script>
