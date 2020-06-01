<?php
include "dbconnect.php";
// include("dbconnect.php");   功能同上，此可以放在程式內使用。

if(!empty($_POST['acc'])){
  echo "有送出資料";
  $acc=$_POST['acc'];
  $pw=$_POST['pw'];
  $sql="select count(*) from `students` where `acc`='$acc' && `pw`='$pw'";
  $user=$pdo->query($sql)->fetchColumn();
  echo $sql."<br>";
  
  // print_r($user);

  // 方法一
  // if($acc==$user['acc'] && $pw==$user['pw']){
  //   echo "登入成功";
  // }else{
  //   echo "登入失敗";
  
  // 較正確方法二
  // if(!empty($user)){
  //   echo "登入成功";
  // }else{
  //   echo "登入失敗";
  // }

  // 更正確方法三
  if($user==1){
    echo "登入成功";    //因為下方還有一行導向頁面指令，所以"登入成功"一瞬間就過去了，幾乎看不到。
    header("location:list_user.php");
  }else{
    echo "登入失敗";    //因為下方還有一行導向頁面指令，所以"登入失敗"一瞬間就過去了，幾乎看不到。
    header("location:login_samepage.php?status=false");
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登入</title>
  <style>
    form{
      text-align: center;
      width: 200px;
      height: 150px;
      border: 1px solid black;
      display:flex;
      margin:100px auto;
      align-items: center;
      flex-flow: column wrap;
      padding: 10px;
      box-shadow: 1px 1px 5px 10px #ccc;
    }
    div{
      margin-bottom:16px;
    }
  </style>
</head>
<body>
  <form action="chklogin.php" method="post">
    <div>帳號:<input type="text" name="acc"></div>
    <div>密碼:<input type="password" name="pw"></div>
    <div>
      <input type="submit" value="sign-in">
      <input type="submit" value="reset">
    </div>
  </form>
</body>
</html>