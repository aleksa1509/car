<?php
session_start();
include 'template/db.php';
include "template/cap.php";
include "template/nav.php";
?>
<h1 float: center>Если вы уже зарешестрировались, авторезуйтесь.</h1>
<br>
<form method="POST" role="form" class="form-inline" action="avtorization.php">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Введитке имя</label>
  <input type="text" class="form-control" name="name" required placeholder="Введите имя">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Введите email</label>
  <input type="email" class="form-control" name="login" required placeholder="Введите логин">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Введите пароль</label>
  <input type="password" class="form-control" name="password" required placeholder="Введите пароль">
</div>
<br>
<button type="submit" class="btn btn-primary">Отправить</button>
</form>