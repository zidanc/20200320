<?php
include_once "base.php";

?>

<h4><確認刪除嗎?/h4>
<a href="?confirm=1">是</a><a href="?confirm=0">否</a>




<?php


$id=$_GET['id'];
$find=find('file_info',$id);
unlink($file['path']);
del('file_info',$id);

to("manage.php");

?>