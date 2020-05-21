<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$acc=$_POST['acc'];
$pw=$_POST['pw'];
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$birthday=$_POST['birthday'];

echo $acc;
echo $pw;
echo $name;
echo $email;
echo $tel;
echo $birthday;

?>