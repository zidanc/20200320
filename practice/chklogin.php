<?php
include "dbconnect.php";
// include("dbconnect.php");

if (!empty($_POST['acc'])) {
  echo "帳號不是空值。<br>";  //因為header執行速度很快的關係，所以程式跑完且顯示了這行，
                             //再往下判斷完是否==1後的echo也很快顯示就被header去其他頁面了。
  $acc=$_POST['acc'];
  $pw=$_POST['pw'];
  
  $sql="select * from `student` where `acc`='$acc' && `pw`='$pw'";
  // $sql="select count(*) from `student` where `acc`='$acc' && `pw`='$pw'";
  $r=$pdo->query($sql)->fetchColumn();
              //fetchColumn()回傳的是字串也可以是陣列。官網寫mixed。
              //已試過用一般echo $r;或print_r($r);都可以顯示。
              //以這邊舉例，print_r($r);它就直接回傳id數字，且不是包在陣列裡。
              
  
 
  if (!empty($r)) {
      echo "且，登入成功！";
      header("location:list_user.php?id=$r");  //雖$sql沒有直接指名取id，但因為此資料表第1欄(fetchColumn())就是id，所以這邊陣列可以大膽寫$r['id']
      // header("location:list_user.php?id=".$r['id']."");  //但是！！網址傳值到下一頁會出現問題！！
    }else{
      echo "但，資料有誤，請重新輸入帳號密碼！";
      header("location:login.php?status=false");  
    }
  }
//新增的網頁傳值這"status"="false"兩個字串，可以自己任意取名。
//我們用$_GET或$_POST，協助使用者在用網頁request給Server端時，從無狀態網頁狀況下變成有特定status。
//Client端和Server端，永遠都不是保持連線的狀況。
//通常是一個request和一個response就結束連線，遺留目前這status在Client或Server端，僅留下網頁上的狀態status，告訴client端網頁要變成什麼status狀況的內容。
//表單從一開始無狀態的login.php，在使用者傳值到Server，Server透過php程式判斷該Response什麼狀態回Client端。


?>

<a href="login.php">登入</a>