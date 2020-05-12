<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>登入</title>
</head>
<body>
  
  <?php
  $showLoginForm=true; //執行迴圈前，"預設都要顯示登入表格"，所以給變數布林值=1。
  if (isset($_POST["status"])) {
    switch ($_POST["status"]) {
      case 'login':
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
  if ($showLoginForm) {       //此判斷式沒有寫成常見的$showLoginForm==1 or 0，是因為前面此變數已經帶有布林值的狀態才到這行了，所以可以省略不寫==1 or 0。
                              //$showLoginForm==1 時，才會顯示以下表單。另外，因為php程式碼是先從client端發出request到server，所以今天若Server接收到$showLoginForm=1，它回傳Response就會是只有true狀態下的程式碼。
                              //$showLoginForm=0，Server就Response 布林值=0 (false)狀態的程式碼。
  ?>

  <form action="user_practice.php" method="post">
    <div>帳號：<input type="text" name="acc" id=""></div>
    <div>密碼：<input type="password" name="pw" id=""></div>
    <div>
      <input type="submit" value="送出">
      <input type="reset" value="重置">
    </div>
  </form>
  
    <?php
    }else{
    ?>

      <h4>恭喜你中大獎，得到口罩100個！</h4>

  <?php
  }
  ?>

</body>
</html>

