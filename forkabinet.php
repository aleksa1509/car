<?php
session_start();
include 'template/db.php';
include 'template/cap.php';
include 'template/nav_klient.php';
?>
<h1 float: center>Здравствуйте.</h1>
<br>
<h1 float: center>Вот машины, которые вы арендовали:</h1>
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Ай-ди аренды</th>
      <th scope="col">машина</th>
      <th scope="col"> </th>
    </tr>
  </thead>
    <tbody>
  <?php
  $sql="SELECT * FROM arenda";
  $res=$mysqli->query($sql);
  foreach($res as $row){
    echo '<tr>
      <th scope="row">'.$row['id_arenda'].'</th>
      <td scope="row">'.$row['car'].'</td>';
      echo '<button type="button" class="btn btn-primary"><a class="link-opacity-10" href="delete.php?orderid='.$row['orederid'].'">Удалить</a></button>';
      
    '</tr>';
    }
   ?>
    </tbody>
</table>