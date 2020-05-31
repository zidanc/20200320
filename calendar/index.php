<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>月曆設計</title>
  <link rel="stylesheet" href="./style.css">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@400&display=swap" rel="stylesheet">
</head>
<body>
  

<form action="" method="get">
  <input type="number" name="" id="">
  <input type="submit" value="產生年曆">
</form>


<?php
if(isset($_GET["year"])){
  $year=$_GET["year"];
}else{
  $year=date("Y");
}

if(isset($_GET["mon"])){
  $month=$_GET["mon"];
}else{
  $month=date("n");
}

if($month>12){
  $year++; /*只寫$year++即可*/
  $month=1;
}

if($month<1){
  $year--;
  $month=12;
}

echo "<h4 style='text-align:center';>西元". $year . "年曆</h4>";
// echo "<div class='container'>";

?>

<div class="container">

<?php
echo "<div>年份: " . $year ."</div>";
?>

  <table>
    <tr>
      <td> <a href='index.php?mon=<?=$month-1;?>&year=<?=$year;?>'> << </a></td>
      <td colspan="5">月份:<?=$month;?></td>
      <td> <a href='index.php?mon=<?=$month+1;?>&year=<?=$year;?>'> >> </a></td>
    </tr>
    <tr>
      <td>日</td>
      <td>一</td>
      <td>二</td>
      <td>三</td>
      <td>四</td>
      <td>五</td>
      <td>六</td>
    </tr>

<?php


$firstDay="$year-$month-01";
$firstDayWeek=date("w",strtotime($firstDay));
// echo "第一天星期:" . $firstDayWeek . "<br>";
$monthDays=date("t",strtotime($firstDay));
// echo "月天數:" . $monthDays . "天";

// echo "<table>";
for($i=0;$i<=5;$i++){
  echo "<tr>";
  for($j=0;$j<=6;$j++){
    if($i==0 && $j<$firstDayWeek){
      echo "<td></td>";
    }else{
      echo "<td>";
        $num=$i*7+$j+1-$firstDayWeek;
        if($num<=$monthDays){
          echo $num;
        }
      echo "</td>";
    }
  }
  echo "</tr>";
}


?>

</table>


</div>

</body>
</html>