<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="select `id`,`name`,`tel` from `students` limit 2";

$rows=$pdo->query($sql)->fetchAll();

foreach ($rows as $r) {
  echo $r['id'] . " - ". $r['name']. " - " . $r['tel']."<br>";
}


?>