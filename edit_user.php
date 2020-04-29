<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>編輯會員</title>
  <style>
    fieldset{
      width: 300px;
    }
    div.button{
      margin-left:105px;
    }
    td{
      width: 100px;
      /* border: 1px solid gray; */
      text-align: right;
    }
    td.birthday{
      text-align: left;
    }
  </style>
</head>
<body>
  <!-- <h1></h1> -->
  <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,"root","");
    date_default_timezone_set("Asia/Taipei");

    $id=$_GET['id'];
    $sql="select * from `students` where `id`='$id'";
    $user=$pdo->query($sql)->fetch();

  ?>
  <fieldset>
    <legend>編輯會員</legend>
      <form method="POST" enctype="multipart/form-data" action="update_user.php">
      <table>
        <tr>
          <td>帳號：</td>
          <td><input type="text" name="acc" value="<?=$user['acc'];?>" placeholder="請輸入帳號" required></td>
        </tr>
        <tr>
          <td>密碼：</td>
          <td><input type="password" name="pw" value="<?=$user['pw'];?>" placeholder="請輸入密碼" required></td>
        </tr>
        <tr>
          <td>姓名：</td>
          <td><input type="text" name="name" value="<?=$user['name'];?>">
          </td>
        </tr>
        <tr>
          <td>出生日：</td>
          <td class="birthday"><input type="date" name="birth" value="<?=$user['birthday'];?>"></td>
        </tr>
        <tr>
          <td>聯絡信箱：</td>
          <td><input type="email" name="email" value="<?=$user['email'];?>" required></td>
        </tr>
        <tr>
          <td>手機：</td>
          <td><input type="text" name="tel" value="<?=$user['tel'];?>"></td>
        </tr>
      </table>
      
      
      <div class="button">
        <input type="submit" value="送出">
        <input type="reset" value="重置">
      </div>
  </fieldset>
</body>
</html>



<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");


?>
</body>
</html>
