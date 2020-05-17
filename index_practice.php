<h1>資料庫的連線</h1>
<?php

$dsn="mysql:host=localhost;charset=utf8;dbname=student";
$pdo=new PDO($dsn,'root','');

$sql="select * from `students`";
// $rows=$pdo->query($sql)->fetchAll(PDO::FETCH_BOTH);
$rows=$pdo->query($sql);
$row=$rows->fetch(PDO::FETCH_ASSOC);
$row=$rows->fetch(PDO::FETCH_ASSOC);
// $rows意指資料列。請幫我啟用PDO連線($pdo變數所帶有的資料庫位置、帳密)，做我想執行的$sql動作。此處為查詢query/Read。
// ->是物件式導向的寫法。
// $rows=$pdo->query($sql) 到這只是完成連線和送出資料。
// fetchAll()：才是把資料全部撈出來，撈出來是個二維陣列。
// fetch()：撈出第一筆資料，撈出來是個二維陣列。
// 撈出來的$rows，是個二維陣列。
// echo $rows[1][3];
echo "<pre>";print_r($row);"</pre>";
echo "<br>";
// echo $rows[1]['name'];
// echo $rows['name'];
echo "<hr>";
// echo "<pre>";print_r($rows);"</pre>";

?>

<?php
$sql="select * from `students` where left(`class_num`,3)='102'";
$rows=$pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
?>

<style>
  table{
    border-collapse: collapse;
    border:1px solid #555;
    box-shadow:0 0 5px #ccc;
  }
  table td{
    padding:5px;
    border:1px solid #0000ff20;
  }
</style>

<table>
<?php
foreach ($rows as $row) {
  echo "<tr>";
  echo "  <td>".$row['uni_id']."</td>";
  echo "  <td>".$row['class_num']."</td>";
  echo "  <td>".$row['name']."</td>";
  echo "  <td>".$row['dept']."</td>";
  echo "  <td>".$row['nat_id']."</td>";
  echo "</tr>";
  
}
?>
</table>


<?php
echo "<pre>";print_r($rows);"</pre>";
?>