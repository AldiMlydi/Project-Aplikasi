<?php 

    include "../config-db.php";

    $sql = "DELETE FROM pasok WHERE id_pasok =".$_GET['id'];
    $database->query($sql);

    header('location:tabelpasok.php');
?>