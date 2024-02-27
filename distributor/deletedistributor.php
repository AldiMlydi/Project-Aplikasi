<?php ;
include '../config-db.php';
$sql = 'DELETE FROM distributor WHERE id_distributor ='.$_GET['id'];

$database->query($sql);
header ('location:tabeldistributor.php');
?>