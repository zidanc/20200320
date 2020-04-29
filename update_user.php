<?php
$id=$_POST['id'];
$acc=$_POST['acc'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$birthday=$_POST['birthday'];



$dsn="mysql:host=localhost;charset=utf8;dbname-school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="update `students` set `acc`='$acc',`pw`='$pw',`name`='$name',`email`='$email',`tel`='$tel',`birthday`='$birthday',`id`='$id' from`students` where `id`='$id'";

$res=$pdo->exec($sql);

if($res>0){
  header("location:list_user.php");
}else{
  echo "更新失敗<br>";
  echo $sql;
}

?>