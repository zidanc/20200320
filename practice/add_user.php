<?php

if(empty($_POST)){
  echo "非法存取";
  exit();
}

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$acc=$_POST['acc'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$birthday=$_POST['birthday'];

// echo $acc;
// echo $pw;
// echo $name;
// echo $email;
// echo $tel;
// echo $birthday;

$sql="insert into 
      `student` 
      (`id`,`acc`,`pw`,`name`,`email`,`tel`,`create_time`,`update_time`,`birthday`) 
      values
      ( 'null', '$acc', '$pw', '$name', '$email', '$tel', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."', '$birthday' )";

$res=$pdo->exec($sql);
if ($res>=1) {
  echo $res;
  echo "新增成功！";
} else {
  echo $res;
  echo "新增失敗";
}


?>