<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="update `student` set `name`='olivia'";
// echo $sql;

$rows=$pdo->exec($sql);

foreach ($rows as $r) {
  echo $r['name']."-".$r['tel']."<br>";
}

// 更新一筆成功就會回傳1，更新兩筆成功就會回傳2 
// if ($rows >= 1) {
//   echo $rows;
//   echo "更新成功";
// } else {
//   echo $rows;
//   echo "更新失敗";
// }


?>