<h1>資料庫的連線</h1>
<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=student"; /*分號隔開三個變數，dbname指定到你連線的dbname */
$pdo=new PDO($dsn,'root','');

/* ()內一定要大寫。
fetchAll(PDO::FETCH_ASSOC)
fetchAll(PDO::FETCH_NUM)
fetchAll(PDO::FETCH_BOTH) ->預設值
*/

$sql="select * from students where left('class_num',3)='102'"; /*此行是告訴欲連線的資料表*/
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
// $rows=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
// $row=$rows->fetch(PDO::FETCH_ASSOC);


// echo $row["name"];
// echo "<hr>";
// // echo $rows[1]["name"];
// echo "<hr>";
// // echo $rows[1][3];
// echo "<hr>";
// echo "<pre>";print_r($rows);"</pre>";

?>
<table>
<?php

foreach($rows as $row){
  echo   "</tr>";
  echo   "    <td>".$row['uni_id']."</td>";
  echo   "    <td>".$row['class_num']."</td>";
  echo   "    <td>".$row['name']."</td>";
  echo   "    <td>".$row['dept']."</td>";
  echo   "    <td>".$row['nat_id']."</td>";
  echo   "<tr>";
}
  
?>
</table>