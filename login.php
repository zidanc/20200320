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
  </style>
</head>
<body>
  <?php
    $showLoginForm=true;
    if(isset($_GET['status'])){
      switch($_GET['status']){
        case "login":
          echo "你已登入";
          $showLoginForm=false;
        break;
        case "fail":
          echo "帳號密碼錯誤";
        break;
      }
    }
  ?>


  <?php
  if($showLoginForm){
  ?>

  <form action="user.php" method="post">
    <div>帳號:<input type="text" name="acc"></div>
    <div>密碼:<input type="passowrd" name="pw"></div>
    <div>
      <input type="submit" value="sign-in">
      <input type="submit" value="reset">
    </div>
  </form>

  <?php
  }else{
  ?>
<h1>恭喜你得到口罩100個</h1>  

  <?php
  }
  ?>

</body>
</html>