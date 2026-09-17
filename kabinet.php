<?php
include 'template/db.php';
if(!empty($_POST)) {
    $car=($_POST['car']);
    $sql="INSERT INTO arenda (id_arenda, id_users, car) VALUES (NULL, NULL, '$car')";
    $res=$mysqli->query($sql);
    header('Location: forkabinet.php');
}
?>