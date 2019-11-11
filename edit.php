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
                <?php
                include "koneksi.php";
                $id = $_GET['id'];
                $sql = mysqli_query($koneksi, "SELECT * FROM kustomer where idKustomer = '$id'");
                $data = mysqli_fetch_array($sql);
                ?>
                    <div class="form-group">
                        <label for="">ID</label>
                        <input type="number" name="idKustomer" readonly value="<?=$data['idKustomer'];?>" class="form-control col-md-5">
                    </div>
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nmKustomer" value="<?=$data['nmKustomer'];?>" class="form-control col-md-5">
                    </div>
                    <div class="form-group">
                        <label for="">Telepon</label>
                        <input type="number" name="telp" value="<?=$data['telp'];?>" class="form-control col-md-5">
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input type="text" name="alamat" value="<?=$data['alamat'];?>" class="form-control col-md-5">
                    </div>
                    <div class="form-group">
                        <label for="">Kota</label>
                        <!-- <input type="text" name="kota" class="form-control col-md-5"> -->
                        <select name="kota" class="form-control col-md-5">
                            <option>Pilih dahulu</option>
                            <option value="bjm" <?php if ($data['kota'] == 'bjm') {
                                echo "selected";
                            }?>>Banjarmasin</option>
                            <option value="bjb" <?php if ($data['kota'] == 'bjb') {
                                echo "selected";
                            }?>>Banjarbaru</option>
                            <option value="mtp" <?php if ($data['kota'] == 'mtp') {
                                echo "selected";
                            }?>>Martapura</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Kode Pos</label>
                        <input type="number" name="kodePos" value="<?=$data['kodePos'];?>" class="form-control col-md-5">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-success">Edit</button>
                        <button type="reset" name="reset" class="btn btn-danger">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $idKustomer = $_POST['idKustomer'];
    $nmKustomer = $_POST['nmKustomer'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $kodePos = $_POST['kodePos'];

    mysqli_query($koneksi, "update kustomer set nmKustomer = '$nmKustomer',telp = '$telp',alamat = '$alamat',kota = '$kota',kodePos = '$kodePos' where idKustomer = '$idKustomer'");

    header("location:index.php");
}
?>