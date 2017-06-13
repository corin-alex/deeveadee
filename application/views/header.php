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
    <div class="float-right">
        <a href="<?= site_url('/user/login'); ?>"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a>
    </div>
</div>
<div class="wrap">
    <main>
        <nav class="main-menu">
            <a href="<?= site_url('dvd/list/'); ?>">Voir le catalogue</a>
            <div class="float-right">
                <a href="<?= site_url('/chart/view'); ?>"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> <span class="badge"><?= $chart_count ?></span></a>
            </div>
        </nav>
        <div class="content">

