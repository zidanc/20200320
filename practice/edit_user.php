<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>編輯會員</title>
  <style>
  h1{
    text-align:center;
  }
  .form{
    border: 1px solid #0000ff30;
    border-collapse: collapse;
    width: 30vw;
    margin: auto;
    box-sizing: border-box;
    padding: calc(0.01*100vw);
  }
  .form div{
    font-size: 18px;
    padding: 6px;
    margin-bottom: 3px;
  }
  .form input{
    border:0;
    border-bottom:1px solid #aaa;
    
  }
  .btn{
    display: flex;
    justify-content: center;
    flex-flow: row wrap;
  }
  .btn input{
    box-sizing: border-box;
    margin: 10px;
    font-size: 1rem;
  }
  </style>
</head>
<body>
  <h1>編輯會員</h1>
  
  <?php
    $dsn="mysql:host=localhost;charset=utf8;dbname=school";
    $pdo=new PDO($dsn,"root","");
    date_default_timezone_set("Asia/Taipei");
    
    $id=$_GET['id'];
    $sql="select * from `student` where `id`='$id'";
    $res=$pdo->query($sql)->fetch(); //因為id在這個資料表中是唯一的不會有多筆，所以用fetch即可，還能讓取出的值直接就是一維陣列。
    
  ?>

  <form action="add_user.php" method="post" class="form">
    
    <div><label for="acc">帳號：</label><input type="text" name="acc" value=""></div>
    <div><label for="pw">密碼：</label><input type="password" name="pw" value=""></div>
    <div><label for="name">姓名：</label><input type="text" name="name" value=""></div>
    <div><label for="email">email：</label><input type="email" name="email" value=""></div>
    <div><label for="tel">手機：</label><input type="tel" name="tel" value=""></div>
    <div><label for="birthday">生日：</label><input type="date" name="birthday" value=""></div>

    <div class="btn">
    <input type="submit" value="送出">
    <input type="reset" value="重置">
    </div>

  </form>


</body>
</html>