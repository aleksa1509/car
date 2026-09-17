<?php
include 'template/db.php';
if(!empty($_POST['name']) and !empty($_POST['login']) and !empty($_POST['password'])) {
    $login=($_POST['login']);
    $name=($_POST['name']);
    $password=($_POST['password']);
    $sql="SELECT * FROM users WHERE name ='$name' and login ='$login' and password ='$password'";
    $res=$mysqli->query($sql);
    $user=mysqli_fetch_assoc($res);
    if(!empty($user)){
        $_SESSION['name'] = $user['name'];
        $_SESSION['login']=$user['login'];
        $_SESSION['password']=$user['password'];
        header('Location: forkabinet.php');
    }else{
        echo'Неверный логин или пароль.';
    }
}
?>