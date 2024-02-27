<?php 

    include "../config-db.php";

    $sql = "DELETE FROM buku WHERE id_buku =".$_GET['id'];
    $database->query($sql);

    header('location:tabelbuku.php');
?>