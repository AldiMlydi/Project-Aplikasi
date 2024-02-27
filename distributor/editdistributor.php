<?php 
include "../config-db.php";
$sql = 'SELECT * from distributor WHERE id_distributor='.$_GET['id'];
$hasil = $database->query($sql);
$tampil = ($hasil->fetch_assoc());
if(isset($_POST['namadistributor'])){
    $sql='UPDATE distributor SET 
    nama_distributor="'.$_POST['namadistributor'].'",
    alamat="'.$_POST['alamat'].'",
    telepon="'.$_POST['telepon'].'"
    WHERE id_distributor = "'.$_GET['id'].'"
    ';
$database->query($sql);
header  ("location:tabeldistributor.php");
}
; ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
    <form action="" method="post">

<div class="mb-3">
    <label for="namadistributor" class="form-label">Nama</label>
    <input type="text" class="form-control" id="namadistributor" name="namadistributor" value="<?= $tampil['nama_distributor']?>">
</div>
<div class="mb-3">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $tampil['alamat']?>">
</div>
<div class="mb-3">
    <label for="telepon" class="form-label">Telepon</label>
    <input type="text" class="form-control" id="telepon" name="telepon" value="<?= $tampil['telepon']?>">
</div>
<button type="submit">submit</button>
</form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>