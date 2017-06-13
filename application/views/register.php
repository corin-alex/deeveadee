<!DOCTYPE html>
<html>
<head lang="fr">
    <meta charset="utf-8">
    <title>Deeveadee</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/respond.min.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="<?= base_url(); ?>assets/img/favicon.png">

    <link href="<?= base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.min.css">
</head>
<body>
    <div class="top-bar">
        <a class="brand" href="<?= site_url('/'); ?>">Deeveadee</a>
    </div>
    <div class="login-box">
        <div class="container-fluid">
            <?php if (!empty(validation_errors())) : ?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors(); ?>
            </div>
            <?php endif; ?>
            <h2>Inscription</h2>
            <?= form_open('user/register'); ?>
            <input class="form-control" name="email" id="email" type="email" placeholder="Adresse email"><br>
            <input class="form-control" name="password" id="password" type="password" placeholder="Mot de passe"><br>
            <div class="text-center"><button type="submit" class="btn btn-primary">S'enregistrer</button></div>
            <?= form_close(); ?>
            <br>
            <div class="text-center"><a href="<?= site_url('/user/login'); ?>">Déjà inscrit(e) ? Se connecter</a></div>
        </div>
    </div>

    <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/js/base.js"></script>
</body>
</html>


