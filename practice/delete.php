<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="delete from `student` where `name`='oli'";

$res=$pdo->exec($sql);

if ($res>=1) {
  echo $res."<br>";
  echo "刪除成功！";
} else {
  echo $res."<br>";
  echo "刪除失敗！";
}


?>