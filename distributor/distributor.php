<?php

    include "../config-db.php";

    $data = "INSERT INTO distributor(nama_distributor,alamat,telepon)VALUES (
    '".$_POST['namadistributor']."',
    '".$_POST['alamat']."',
    '".$_POST['telepon']."'
    )";

    $database->query($data);
    header("location:tabeldistributor.php");
?>