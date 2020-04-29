<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
  <h1></h1>
  <fieldset>
    <legend>註冊會員</legend>
      <form method="POST" enctype="multipart/form-data">
      <table>
        <tr>
          <td>帳號：</td>
          <td><input type="text" name="acc" value="" placeholder="請輸入帳號" required></td>
        </tr>
        <tr>
          <td>密碼：</td>
          <td><input type="password" name="pw" value="" placeholder="請輸入密碼" required></td>
        </tr>
        <tr>
          <td>姓名：</td>
          <td><input type="text" name="name" value="">
          </td>
        </tr>
        <tr>
          <td>出生日：</td>
          <td class="birthday"><input type="date" name="birth"></td>
        </tr>
        <tr>
          <td>聯絡信箱：</td>
          <td><input type="email" name="email" required></td>
        </tr>
        <tr>
          <td>手機：</td>
          <td><input type="text" name="tel" value=""></td>
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