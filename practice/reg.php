<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>註冊會員</title>
  <style>
  h1{
    text-align:center;
  }
  .form{
    border: 1px solid #0000ff30;
    border-collapse: collapse;
    width: 30vw;
    margin: auto;
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
    text-align: center;
  }
  .btn input{
    /* display: flex;
    justify-content: center; */
    box-sizing: border-box;
    margin: 10px;
    font-size: 1rem;
  }
  </style>
</head>
<body>
  <h1>註冊會員</h1>
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