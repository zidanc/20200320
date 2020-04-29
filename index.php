<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="insert into students(`id`,
                          `acc`,
                          `pw`,
                          `name`,
                          `email`,
                          `tel`,
                          `create_time`,
                          `update_time`,
                          `birthday`) 
                   values(null,
                          'zidan',
                          '456456',
                          '簡志瀚',
                          'b93605079@g.ntu.edu.tw',
                          '0960533552',
                          '".date("Y-m-d H:i:s")."',
                          '".date("Y-m-d H:i:s")."',
                          '1990-01-01')";

echo $sql;
echo "<br>";
// $pdo->query($sql);
echo $pdo->exec($sql);  // 不回傳資料，但回傳成功或失敗 (0 or 1)//
echo "資料已新增";

?>