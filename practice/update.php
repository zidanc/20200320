<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="update `student` set `name`='olivia' ";
// echo $sql; 這樣的update語法，是全部name欄位都改成olivia。

$rows=$pdo->exec($sql);
echo $rows;

// foreach ($rows as $r) {   
//   echo $r['name']."-".$r['tel']."<br>";
// }
// exec()是回傳影響筆數，整數值，並非陣列。因此第十三行寫foreach函式就會出現無效參數代入foreach()的警告！



// 更新一筆成功就會回傳1，更新兩筆成功就會回傳2 
// if ($rows >= 1) {
//   echo $rows;
//   echo "更新成功";
// } else {
//   echo $rows;
//   echo "更新失敗";
// }


?>