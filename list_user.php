<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>會員列表</title>
  <style>
    h1{
      text-align:center;
    }
    table{
      border: 1px solid lightgray;
      background: lightgreen;
      margin: auto;
    }
    table td{
      padding: 10px;
      border: 0px solid white;
    }
    tr:nth-child(1){
      background: white;
    }
    table button{
      border-radius: 5px;
    }
  </style>
</head>
<body>
  <?php
  $dsn="mysql:host=localhost;charset=utf8;dbname=school";
  $pdo=new PDO($dsn,"root","");
  date_default_timezone_set("Asia/Taipei");
  
  $sql="select * from `students";
  $rows=$pdo->query($sql)->fetchAll();
  ?>
  <h1>會員資料表</h1>
  <table>
    <tr>
      <td>帳號</td>
      <td>密碼</td>
      <td>姓名</td>
      <td>email</td>
      <td>手機</td>
      <td>註冊日期</td>
      <td>修改日期</td>
      <td>生日</td>
      <td>操作</td>
    </tr>
    
  
  
  <?php  
  foreach($rows as $r){
    echo "<tr>";
    echo    "<td>".$r['acc']."</td>";
    echo    "<td>".$r['pw']."</td>";
    echo    "<td>".$r['name']."</td>";
    echo    "<td>".$r['email']."</td>";
    echo    "<td>".$r['tel']."</td>";
    echo    "<td>".$r['create_time']."</td>";
    echo    "<td>".$r['update_time']."</td>";
    echo    "<td>".$r['birthday']."</td>";
    echo    "<td>
            <a href='edit_user.php?user=".$r['id']."'><button>編輯</button></a>
            </td>";
    echo    "<td><button>刪除</button></td>";
    echo "</tr>";
  }
  ?>
  </table>
    


</body>
</html>