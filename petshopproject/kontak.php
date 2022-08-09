<?php
session_start();
require 'function/kontak.php';

if (isset($_POST['kontak'])) {
    if (cekLogin() === true) {
        tambahKontak($_POST);
        die;
    } else {
        $_SESSION['pesan'] = "Anda belum masuk! Silahkan login terlebih dahulu!";
    }
}


$judul = ambilKontak()['judul'];
$kontak = ambilKontak()['kontak'];



require 'templates/header.php';
?>
<div class="row mt-5">
    <div class="col-md-8 p-2 bg-white border border-right">
        <h2>Kritik dan Saran</h2>
        <form method="POST" action="">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="firstname">Nama</label>
                        <input id="firstname" type="text" class="form-control" required name="nama">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="text" class="form-control" required name="email">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="tentang">Judul</label>
                        <input id="tentang" type="text" class="form-control" required name="tentang">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="pesan">Deskripsi</label>
                        <textarea id="pesan" class="form-control" required name="pesan"></textarea>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button type="submit" name="kontak" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Kirim </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require 'templates/footer.php' ?>