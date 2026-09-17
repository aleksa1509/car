<?php
session_start();
include 'template/db.php';
include 'template/cap.php';
?>
<?php
if(empty($_SESSION["status"])){
  include 'template/nav.php';
}
else{
  $status=($_SESSION["status"]);
  if ($status=="klient"){
  include 'template/nav_klient.php';
}
}
?>
<h1 float: center>Машины, которые вы можете взять на прокат.</h1>
<br>
<h1 float: center>Перед тем как взять машину на прокат, зарегестрируйтесь.</h1>
<br>
<br>
<?php
$sql="SELECT * FROM cars";
$res=$mysqli->query($sql);
echo '<div class="row row-cols-1 row-cols-md-3 g-4">';
foreach($res as $row){
?>
  <div class="col">
    <div class="card h-100">
      <img src="img/<?= $row['img'] ?>" class="card-img-top" alt="машина">
      <div class="card-body">
        <h5 class="card-title"><?= $row['name'] ?></h5>
        <p class="card-text">Цена за день: <?= $row['price'] ?> рублей.</p>
      </div>
    </div>
  </div>
  <br>
  <?php
   if(empty($_SESSION['status'])){

        }else{
          $status=($_SESSION["status"]);
          if($status=='klient'){ ?>
          <form method="POST" role="form" class="form-inline" action="kabinet.php">
            <select name= 'car' class="form-select" aria-label="Default select example">
  <option value="Volkswagen белый">Volkswagen белый</option>
  <option value="Volkswagen голубой">Volkswagen голубой</option>
  <option value="Volkswagen серый">Volkswagen серый</option>
  <option value="Volkswagen чёрный">Volkswagen чёрный</option>
  <option value="Volkswagen берёзовый">Volkswagen берёзовый</option>
</select>
<br>
<button type="submit" class="btn btn-primary">Отправить</button>
</form>
<?php
          }
        }
            ?>
  <?php
}
echo '</div>';
  ?>
  <?php
  include 'template/footer.php';
  ?>