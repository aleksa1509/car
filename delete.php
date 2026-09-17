<?php
include 'template/dv.php';
$orderid=$_GET['orderid'];
$sql="DELETE FROM arenda WHERE arenda.orderid=$orderid";
$mysqli->query($sql);
header('Location:kabinet.php');
?>