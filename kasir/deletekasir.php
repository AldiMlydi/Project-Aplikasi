<?php ;
include '../config-db.php';
$sql = 'DELETE from kasir WHERE id_kasir ='.$_GET['id'];
$database->query($sql);
header ('location:tabelkasir.php');
?>