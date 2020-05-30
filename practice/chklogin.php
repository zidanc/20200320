<?php
include "dbconnect.php";

if (!empty($_POST['acc'])) {
  echo "帳號不是空值。<br>";  
  $acc=$_POST['acc'];
  $pw=$_POST['pw'];
  
  $sql="select * from `student` where `acc`='$acc' && `pw`='$pw'";
  // $sql="select count(*) from `student` where `acc`='$acc' && `pw`='$pw'";
  $r=$pdo->query($sql)->fetchColumn();
  
              
  
 
  if (!empty($r)) {
      echo "且，登入成功！";
      setcookie("id",$r,time()+60*3);
      header("location:list_user.php");  
    }else{
      echo "但，資料有誤，請重新輸入帳號密碼！";
      setcookie("status","false",time()+10);
      header("location:login.php");  
    }
  }



?>

<a href="login.php">登入</a>