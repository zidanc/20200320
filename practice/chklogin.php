<?php
include "dbconnect.php";
// include("dbconnect.php");

if (!empty($_POST['acc'])) {
  echo "帳號不是空值。<br>";  //因為header執行速度很快的關係，所以程式跑完且顯示了這行，
                             //再往下判斷完是否==1後的echo也很快顯示就被header去其他頁面了。
  $acc=$_POST['acc'];
  $pw=$_POST['pw'];
  
  
  $sql="select count(*) from `student` where `acc`='$acc' && `pw`='$pw'";
  $r=$pdo->query($sql)->fetchColumn();
  
 
  if ($r==1) {
      echo "且，登入成功！";
      header("location:list_user.php");
    }else{
      echo "但，資料有誤，請重新輸入帳號密碼！";
      header("location:login.php");
    }
  }



?>

<a href="login.php">登入</a>