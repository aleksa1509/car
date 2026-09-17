<?php
include 'template/db.php';
if(!empty($_POST)) {
    $login=($_POST['login']);
    $name=($_POST['name']);
    $password=($_POST['password']);
    $sql="INSERT INTO users (id_user, name, login, password, status) VALUES (NULL, '$name', '$login', '$password', 'klient')";
    $res=$mysqli->query($sql);
    header('Location: forkabinet.php');
}
?>