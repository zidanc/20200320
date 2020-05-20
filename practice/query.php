<?php

$dsn="mysql:host:localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="select `name`,`tel` from `student`";

$rows=$pdo->query($sql)->fetchAll();

foreach ($rows as $r ) {
  // echo $r['name']."-".$r['tel']."<br>";
  echo "<pre>";print_r($r);"</pre>";
}

// echo "<pre>";print_r($rows);"</pre>";


?>