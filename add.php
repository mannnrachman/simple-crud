<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <title>Muhammad Rachman 15630265</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
            <a href="index.php" class="btn btn-warning"><-Kembali</a>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="number" name="idKustomer" class="form-control col-md-5">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nmKustomer" class="form-control col-md-5">
                    </div>
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="number" name="telp" class="form-control col-md-5">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" class="form-control col-md-5">
                    </div>
                    <div class="form-group">
                        <label for="">Kota</label>
                        <!-- <input type="text" name="kota" class="form-control col-md-5"> -->
                        <select name="kota" class="form-control col-md-5">
                            <option>Pilih dahulu</option>
                            <option value="bjm">Banjarmasin</option>
                            <option value="bjb">Banjarbaru</option>
                            <option value="mtp">Martapura</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kode Pos</label>
                        <input type="number" name="kodePos" class="form-control col-md-5">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                        <button type="reset" name="reset" class="btn btn-danger">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

<?php
include "koneksi.php";
if (isset($_POST['submit'])) {
    $idKustomer = $_POST['idKustomer'];
    $nmKustomer = $_POST['nmKustomer'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $kodePos = $_POST['kodePos'];

    mysqli_query($koneksi, "insert into kustomer values('$idKustomer','$nmKustomer','$telp','$alamat','$kota','$kodePos')");

    header("location:index.php");
}
?>