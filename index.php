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
            <a href="add.php" class="btn btn-info">Tambah</a>
                <table class="table table-bordered">
                    <thead>
                        <th>No</th>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Kode Pos</th>
                        <th>Aksi</th>
                    </thead>

                    <tbody>
                    <?php
                    include "koneksi.php";
                    $no = 1;
                    $sql = mysqli_query($koneksi, "SELECT * FROM kustomer ORDER BY idKustomer");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>

                    <td><?=$no++;?></td>
                    <td><?=$data['idKustomer'];?></td>
                    <td><?=$data['nmKustomer'];?></td>
                    <td><?=$data['telp'];?></td>
                    <td><?=$data['alamat'];?></td>
                    <td><?=$data['kota'];?></td>
                    <td><?=$data['kodePos'];?></td>
                    <td>
                    <a href="edit.php?id=<?=$data[0];?>">Edit</a>
                    |
                    <a href="delete.php?id=<?=$data[0];?>">Delete</a>
                    </td>
                    </tbody>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    
</body>
</html>