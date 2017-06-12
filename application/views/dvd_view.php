<br>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
            <img src="<?= base_url(); ?>assets/upload/<?= $dvd->afficheD; ?>">
        </div>
        <div class="col-sm-6">
            <h2><?= $dvd->titreD; ?></h2>
            <div class="fb-share-button float-right" data-href="<?= site_url('dvd/view/' . $dvd->id); ?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdeeveadee.my%2Findex.php%2Flanding%2Fview&amp;src=sdkpreparse">Partager</a></div>

            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            <span class="glyphicon glyphicon-star" aria-hidden="true"></span><br>
            <?= $dvd->categorieD; ?> -
            <?= $dvd->anneeD; ?><br>
            <?= $dvd->auteurD; ?><br><br>
            <?= $dvd->descriptionD; ?><br><br>
            <a href="<?= site_url('chart/add/' . $dvd->id); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
        </div>
    </div>
    <br>
    <div id="disqus_thread"></div>
    <br><br>
</div>

<script>
     var disqus_config = function () {
     this.page.url = "<?= site_url('dvd/view/' . $dvd->id); ?>";  // Replace PAGE_URL with your page's canonical URL variable
     this.page.identifier = "<?= sha1(site_url('dvd/view/' . $dvd->id)); ?>"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
     };

    (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://qhorin-beweb.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

