<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>註冊會員</title>
</head>
<body>
  <h1>註冊會員</h1>
  <form action="add_user.php" method="post">
    
    <div><label for="acc">帳號：</label><input type="text" name="acc" value=""></div>
    <div><label for="pw">密碼：</label><input type="password" name="pw" value=""></div>
    <div><label for="name">姓名：</label><input type="text" name="name" value=""></div>
    <div><label for="email">email：</label><input type="email" name="email" value=""></div>
    <div><label for="tel">手機：</label><input type="tel" name="tel" value=""></div>
    <div><label for="birthday">生日：</label><input type="date" name="birthday" value=""></div>

    <input type="submit" value="送出">
    <input type="reset" value="重置">

  </form>


</body>
</html>