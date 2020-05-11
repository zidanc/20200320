<?php

if (!empty($_POST)) {
  $acc=$_POST["acc"];
  $pw=$_POST["pw"];
  
  if ($acc=="admin" && $pw=="1234") {
    
    echo "登入成功";
    
  }else{
    
    echo "acc=".$acc."<br>";
    echo "pw=".$pw."<br>";
    echo "登入失敗，請輸入正確帳號、密碼";
  }
}

?>