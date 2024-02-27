<?php

include "../config-db.php";

$data = "INSERT INTO penjualan(id_buku,id_kasir,jumlah,total,tanggal)VALUES (
        '" . $_POST['idBuku'] . "',
        '" . $_POST['idKasir'] . "',
        '" . $_POST['jumlah'] . "',
        '" . $_POST['total'] . "',
        '" . $_POST['tanggal'] . "'
    )";

$database->query($data);

header('location:tabelpenjualan.php');