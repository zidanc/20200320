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
    
    // 看list_user.php檔案，a連結？後方的命名名稱，必須與超連結連過去對接的頁面，接收的陣列key值相同命名。
    $id=$_GET['id'];
    $sql="select * from `student` where `id`='$id'";
    $res=$pdo->query($sql)->fetch(); //因為id在這個資料表中是唯一的不會有多筆，所以用fetch即可，還能讓取出的值直接就是一維陣列。

  ?>

  <form action="update_user.php" method="post" class="form">
    
    <!-- 新增一個type="hidden"的項目，是為了讓這個form傳值submit到update_user.php時，可以有一個唯一不重複的資料給該頁去取值、覆寫。
    以免發生萬一輸入的帳號已經有在資料庫中，我們讓它覆蓋掉錯誤筆(隨便舉例：id=100的acc與正在輸入更新資料的id=8的acc相同，
    但我們還讓它submit出去 -->
    <input type="hidden" name="id" value="<?=$res['id'];?>">
    <div><label for="acc">帳號：</label><input type="text" name="acc" value="<?=$res['acc'];?>"></div>
    <div><label for="pw">密碼：</label><input type="password" name="pw" value="<?=$res['pw'];?>"></div>
    <div><label for="name">姓名：</label><input type="text" name="name" value="<?=$res['name'];?>"></div>
    <div><label for="email">email：</label><input type="email" name="email" value="<?=$res['email'];?>"></div>
    <div><label for="tel">手機：</label><input type="tel" name="tel" value="<?=$res['tel'];?>"></div>
    <div><label for="birthday">生日：</label><input type="date" name="birthday" value="<?=$res['birthday'];?>"></div>

    <div class="btn">
      <input type="submit" value="送出">
      <input type="reset" value="重置">
    </div>

  </form>


</body>
</html>