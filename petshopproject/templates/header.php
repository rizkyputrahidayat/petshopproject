<?php
if (isset($_POST['masuk'])) {
    masuk($_POST);
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= url ?>assets/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= url ?>assets/font-awesome/css/font-awesome.min.css" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= url ?>assets/css/custom.css" crossorigin="anonymous">

    <title><?= $judul ?></title>
</head>
<div class="topbar fixed-top">

    <?php if (isset($_SESSION['nama'])) : ?>
        <p class="text-right pr-2 bg-white">
            <a href="<?= url ?>profil.php" class="text-secondary" style="font-size: 16px !important;"><?= $_SESSION['nama'] ?></a> |
            <a href="<?= url ?>keluar.php" style="font-size: 16px !important;">Keluar</a>
        </p>
    <?php else : ?>
        <p class="text-right pr-2 bg-white">
            <a href="<?= url ?>masuk.php" class="text-secondary" style="cursor: pointer; font-size: 16px !important;">Masuk</a> |
            <a href="<?= url ?>daftar.php" style="font-size: 16px !important;">Daftar</a>
        </p>
    <?php endif; ?>

    <?php if (isset($_SESSION['pesan'])) : ?>
        <div id="pesan" data-pesan="<?= $_SESSION['pesan'] ?>"></div>
        <?php unset($_SESSION['pesan']) ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['sukses'])) : ?>
        <div id="cart-sukses" data-sukses="<?= $_SESSION['sukses'] ?>"></div>
        <?php unset($_SESSION['sukses']) ?>
    <?php endif; ?>

    <nav class="navbar navbar-expand-lg shadow-sm bg-white ">
        <div id="nav-btn" class="navbar-toggler m-auto" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false">
            <i id="icon" class="fa fa-bars"></i>
        </div>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav col-6">
                <li class="nav-item">
                    <a class="nav-link" href="<?= url ?>index.php" style="font-size: 20px !important;">Beranda </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url ?>produk.php" style="font-size: 20px !important;">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url ?>tentang.php" style="font-size: 20px !important;">Promosi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url ?>kontak.php" style="font-size: 20px !important;">Saran</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#masuk" </button> <a class="nav-link" href="<?= url ?>daftar.php">Daftar</a>
                </li>
            </ul>
            <div class="cari col-6">
                <form class="form-inline float-right" action="<?= url ?>produk.php/?cari=">
                    <input name="cari" class="form-control mr-sm-2 " type="search" placeholder="Cari" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
</div>

<body class="bg-light">
    <div class="container  bg-white p-5">