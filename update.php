<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="update `students` set `name`='王大明', `birthday`='1500-09-01',`tel`='0955555189' where `id`='2'";
$res=$pdo->exec($sql);

echo $sql;
echo "<br>";

if($res>=1){
  echo $res;
  echo "更新成功!";
}else{
  echo $res;
  echo "更新失敗!";
}


?>