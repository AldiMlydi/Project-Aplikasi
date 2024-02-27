<?php 

    include "../config-db.php";

    $sql = "DELETE FROM penjualan WHERE id_penjualan =".$_GET['id'];
    $database->query($sql);

    header('location:tabelpenjualan.php');
?>