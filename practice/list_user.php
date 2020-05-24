<?php

if (!isset($_GET['id'])) {  
  echo "非法登入，請回到<a href='login.php'>登入頁</a>重新登入！";
  exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員列表</title>
  <style>
    table{
      border: 1px solid #0000ff40;
      border-collapse: collapse; 
      margin: auto;
      width: 90vw;
    }
    table td{
      border:1px solid;
      border-color: transparent #0000ff40 #0000ff40 transparent;
      padding: 10px;
      line-height:1.5rem;
      
    }
    thead>tr:first-child{
      background: lightskyblue;
      
    }
    tr:nth-of-type(even){
      background: #0000FF20;
    }
    h1,div{
      text-align: center;
    }

    td:last-child{
      text-align: center;
    }
    
    button{
      border-radius: 5px;
    }
    div{
      margin-top: 1.5rem;
    }
  </style>
</head>
<body>
  
<?php
include "dbconnect.php";

$sql="select * from `student` where `id`='".$_GET['id']."'";
$user=$pdo->query($sql)->fetch();
echo "<h1>歡迎".$user['name']."回來</h1>";

$sql="select * from `student` order by `id` DESC";
$rows=$pdo->query($sql)->fetchAll();
?>
<h1>會員列表</h1>
<table>
  <thead>
    <tr>
      <td>ID</td>
      <td>帳號</td>
      <td>密碼</td>
      <td>姓名</td>
      <td>email</td>
      <td>電話</td>
      <td>註冊時間</td>
      <td>生日</td>
      <td>操作</td>
    </tr>
  </thead>

<?php
foreach ($rows as $r) {
  // echo $r['id']."-".$r['acc']."-".$r['name']."<br>";

    echo "<tr>";
    echo "  <td>".$r['id']."</td>";
    echo "  <td>".$r['acc']."</td>";
    echo "  <td>".$r['pw']."</td>";
    echo "  <td>".$r['name']."</td>";
    echo "  <td>".$r['email']."</td>";
    echo "  <td>".$r['tel']."</td>";
    echo "  <td>".$r['create_time']."</td>";
    echo "  <td>".$r['birthday']."</td>";
    echo 
      "<td>".
          "<a href='edit_user.php?id=".$r["id"]."'><button>編輯</button></a>"." ".
          "<a href='delete_user.php?user=".$r["id"]."'><button>刪除</button></a>"
      ."</td>";
    echo "</tr>";
}
// 網址傳值程式82、83行，?後方用user 或 id有差嗎？觀察一下。
// ◎觀察結果：
// ？後方的命名名稱，必須與超連結連過去對接的頁面，接收的陣列key值相同命名。而且只能用$_GET['']，用$_POST['']會被Notice: Undefined index: id。

?>

</table>


<div>
  <a href="login.php?status=true&id=<?=$_GET['id'];?>">回登入頁面</a>
</div>

</body>
</html>
<!-- 登入後多檔案之間的網頁傳值，非常複雜且考驗細心，
所以後來衍生出較方便的Cookies & Sessions來解決此問題 -->