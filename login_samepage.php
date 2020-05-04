<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

if(!empty($_POST['acc'])){
  echo "有送出資料";
  $acc=$_POST['acc'];
  $pw=$_POST['pw'];
  $sql="select * from `students` where `acc`='$acc' && `pw`='$pw'";
  $user=$pdo->query($sql)->fetch();
  echo $sql."<br>";
  print_r($user);
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
  if($user=1){
    echo "登入成功";
  }else{
    echo "登入失敗";
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
  <form action="login_samepage.php" method="post">
    <div>帳號:<input type="text" name="acc"></div>
    <div>密碼:<input type="password" name="pw"></div>
    <div>
      <input type="submit" value="sign-in">
      <input type="submit" value="reset">
    </div>
  </form>
</body>
</html>