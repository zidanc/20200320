<?php
$dsn="mysql:host:localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

if (!empty($_POST['acc'])) {
  echo "帳號不是空值。";
  $acc=$_POST['acc'];
  $pw=$_POST['pw'];
  
  $sql="select * from `student` where `acc`='$acc' && `pw`='$pw'";
  $r=$pdo->query($sql)->fetch();
  
  echo "<pre>";print_r($r);"</pre>";

}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登入</title>
  <style>
    /* body {
      font-family: Arial, "Microsoft JhengHei", Helvetica, sans-serif;
      font-size: 1.2rem;
      line-height: 2rem;
    } */

    table {
      border: 1px solid #AAA;
      border-collapse: collapse;
      box-sizing: border-box;
      box-shadow: 1px 1px 4px lightslategray;
      width: 19vw;
      min-width: 18vw;
      margin-left: 10vw;
      margin-top: 1vh;

    }

    td {
      border: 1px solid #DDD;
      padding: 10px;
    }

    td input {
      font-size: 17px;
      border-color: transparent transparent #CCC transparent;

    }

    td button {
      border-radius: 5px;
      padding: 4px 8px;
      font-family: Arial, "Microsoft JhengHei", Helvetica, sans-serif;
      font-size: 1rem;
      background-color: #0000ff20;
    }

    h1 {
      margin-left: 10vw;
      /* margin-top: 8vh; */
    }

    .td1 {
      min-width: 50px;
      text-align: center;
    }
    .material-icons.md-48{
      font-size: 36px;
      color: orange;
    }
  </style>
  <script src="https://kit.fontawesome.com/fae004be8b.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>

<body>
  <h1>&nbsp;<i class="fas fa-sign-in-alt"></i>&nbsp; 歡迎回來</h1>
  <form action="?" method="post">
    <table>
      <tr>
        <td class="td1"><i class="material-icons md-48">face</i></td>
        <td><input type="text" name="acc"></td>
      </tr>
      <tr>
        <td class="td1"><i class="fas fa-key"></i></td>
        <td><input type="password" name="pw"></td>
      </tr>
      <tr>
        <td colspan="2">
          <button type="submit" value="登入">登入</button>
          <button type="reset" value="重置">重置</button>
        </td>
      </tr>
    </table>
  </form>

</body>

</html>

