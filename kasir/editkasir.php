<?php 
include "../config-db.php";
$sql = 'SELECT * from kasir WHERE id_kasir='.$_GET['id'];
$hasil = $database->query($sql);
$tampil = ($hasil->fetch_assoc());
if(isset($_POST['nama'])){
    $sql='UPDATE kasir SET 
    nama="'.$_POST['nama'].'",
    alamat="'.$_POST['alamat'].'",
    telepon="'.$_POST['telepon'].'",
    status="'.$_POST['status'].'",
    username="'.$_POST['username'].'",
    password="'.$_POST['password'].'",
    akses="'.$_POST['akses'].'"
    WHERE id_kasir = "'.$_GET['id'].'"
    ';
$database->query($sql);
header  ("location:../tabelkasir.php");
}
; ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="card p-5 mt-5">
            <div class="mt-3 mb-3">
                <h4 class="text-center">Kasir</h4>
            </div>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $tampil['nama']; ?>">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $tampil['alamat']; ?>">
                </div>
                <div class="mb-3">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $tampil['telepon']; ?>">
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="<?= $tampil['status']; ?>">
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="<?= $tampil['username']; ?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" id="password" name="password" value="<?= $tampil['password']; ?>">
                </div>
                <div class="mb-3">
                    <label for="akses" class="form-label">akses</label>
                    <input type="text" class="form-control" id="akses" name="akses" value="<?= $tampil['akses']; ?>">
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>