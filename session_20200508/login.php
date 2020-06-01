<?php
/*
$dsn="mysql:host:localhost;charset=utf8;dbname=school";
$pdo=new PDO($dsn,"root","");
date_default_timezone_set("Asia/Taipei");

if (!empty($_POST['acc'])) {
  echo "帳號不是空值。<br>";
  $acc=$_POST['acc'];
  $pw=$_POST['pw'];
  
  // $sql="select * from `student` where `acc`='$acc' && `pw`='$pw'";  佔儲存空間，若真的很多筆將會影響網路速度
  // $sql="select `student`.`acc`,`student`.`pw` from `student` where `acc`='$acc' && `pw`='$pw'";
  // 用count(*)好處是，帳密資料比對相同應該只有唯一一筆，此時count結果為1，若沒有就是0。
  $sql="select count(*) from `student` where `acc`='$acc' && `pw`='$pw'";
  $r=$pdo->query($sql)->fetchColumn();
  
  // echo "<pre>";print_r($r);"</pre>";

  // 21~25行是多餘的帳密確認，因為第11行已經透過sql語法去查詢了，查詢若POST進來的帳密與資料庫的相同時，才會將資料存成$r。若查詢POST進來的帳密和資料庫沒有任一筆符合的話，$r就會是空陣列。

  // if ($acc==$r['acc'] && $pw==$r['pw']) {  
  //   echo "登入成功！";
  // }else{
  //   echo "登入失敗！";
  // }

  // 另外一個21行的壞處是，將帳密從陣列中撈出來，在資安上比較有危險。且程式會出現警告Trying to access array offset on value of type bool 

  // if (!empty($r)) {
  //     echo "且，登入成功！";
  //   }else{
  //     echo "但，資料有誤，請重新輸入帳號密碼！";
  //   }
  // }
  if ($r==1) {
      echo "且，登入成功！";
    }else{
      echo "但，資料有誤，請重新輸入帳號密碼！";
    }
  }


*/

?>

<!-- 1.同一檔案/網頁logout： -->
<?php
// if (isset($_GET['logout'])) {
//   setcookie("id",$_COOKIE['id'],time()-1);
//   setcookie("status","true",time()-1);
//   header("location:login.php");
// }

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
  <form action="chklogin.php" method="post">
    
    <?php
      $showLogin=true;
    ?>
    
    <table>
      <tr>
        <td class="td1"><i class="material-icons md-48">face</i></td>
        <td><input type="text" name="acc">
              <?php
                // if(isset($_GET['status']) && $_GET['status']=="false"){
                //   echo "<div style='font-size:0.8rem; color:red;'>資料有誤，請重新輸入帳號、密碼！</div>";
                // }
                // $showLogin=true;這一句講師是寫在表格內這個位置。
                session_start();
                if (isset($_SESSION['status'])) {
                  switch ($_SESSION['status']) {
                    case 'true':
                      $showLogin=false;
                      // header("location:list_user.php");
                      break;
                      
                    case 'false':  
                      echo "<div style='font-size:0.8rem; color:red;'>資料有誤，請重新輸入帳號、密碼！</div>";
                      break;
                  }
                }
              ?>
        </td>
      </tr>
    
    <?php
      if ($showLogin==true) {
    ?>

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
    
    <?php
      }else{
        echo "<tr>";
        echo "<td colspan='2'>"."id=".$_SESSION['id']."你已登入，若仍需要請至"."<a href='list_user.php'>會員清單網頁</a>"."查看。"."</td>";
        echo "</tr>";
        
        echo "<tr>";
        // 1.同一檔案/網頁logout：
        // echo "<td colspan='2'><a href='login.php?logout=1'>登出</a></td>";
        // 2.由另一個檔案/網頁logout：
        echo "<td colspan='2'><a href='logout.php'>登出</a></td>";
        echo "</tr>";
      }
      ?>

    </table>
  </form>

</body>

</html>

