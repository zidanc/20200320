<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");


$sql="insert into `student`(`id`,
                            `acc`,
                            `pw`,
                            `name`,
                            `email`,
                            `tel`,
                            `create_time`,
                            `update_time`,
                            `birthday`) 
                    values (null,
                            'olivia1111',
                            '789789',
                            'olivia',
                            'olivia@gmail.com',
                            '0229997777',
                            '".date("Y-m-d H:i:s")."',
                            '".date("Y-m-d H:i:s")."',
                            '2000-02-10')";
echo $sql."<br>";
echo $pdo->query($sql);  //不應該echo $pdo，它無法以echo轉成字串。只是新增資料，不需要回傳。若你還是想回傳，可以echo，但只是看到boolean值。 
echo "資料已新增加";

?>