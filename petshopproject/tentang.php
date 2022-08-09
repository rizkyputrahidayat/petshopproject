<?php
session_start();
require 'config.php';
$judul = 'Tentang Kami';

require 'templates/header.php';
?>

<div class="row bg-white border p-2 mt-5">
    <div class="col-md ml-3">
        <h1>Promo Terbaru</h1>
        <p class="lead">!!PROMO MURAH!! Whiskas Tuna Makanan Kucing Basah - Wishkas Pouch 85g Diskon 50% !!
        </p>
        <hr>
        <div class="row ml-1">
            <div class="w-100">
                <h3><i class="fa fa-map-marker "></i> Free Ongkir</h3>
                <p> Untuk JABODETABEK </p>
            </div>
            <!-- /.col-sm-4-->
            <div class="">
                <h3><i class="fa fa-phone"></i> Contact Us</h3>
                <p class="text-muted">Jangan ragu untuk menghubungi kami di nomor berikut</p>
                <p><strong>+62 8124625378</strong></p>
            </div>
        </div>
    </div>
</div>
<?php require 'templates/footer.php' ?>