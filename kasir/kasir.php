<?php 
include "../config-db.php";
$data = "INSERT INTO kasir(nama,alamat,telepon,status,username,password,akses) VALUES
(
    '".$_POST['nama']."',
    '".$_POST['alamat']."',
    '".$_POST['telepon']."',
    '".$_POST['status']."',
    '".$_POST['username']."',
    '".$_POST['password']."',
    '".$_POST['akses']."'
)";
 
$database->query($data);
Header("location../tabelkasir.php")
?>