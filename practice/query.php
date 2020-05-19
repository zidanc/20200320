<?php

$dsn="mssql:host:localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

$sql="select `name`,`tel` from `student`";


?>