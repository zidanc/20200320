<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");


$del_id=$_GET['user'];
$sql="delete from `student` where `id`='$del_id'";

$res=$pdo->exec($sql);

if ($res>=1) {
  header("location:list_user.php");
} else {
  echo "刪除失敗！<br>";
  echo "可能原因：1-該筆資料已不存在。2-資料庫連線有問題。3-SQL語法有誤。";
  echo $sql;
}
//我們寫這些程式，是讓使用者不用自己寫程式、也不用進到資料庫，也能做CRUD。

?>