<style>
  div.container{
    width: 1500px;
    height: 1200px;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    align-items: space-between;
    
  }
  
  table{
    border: 1px solid black;
    text-align: center;
    border-collapse: collapse;  
  }
  table td{
    border: 1px solid #888;
    /* border-collapse: collapse; 沒有效果？*/
    padding: 15px;
  }
  tr:nth-child(1){
    background: black;
    color: white;
    font-size: 1rem;
  }
  tr:nth-child(2){
    background: #DDD;
  }
  a{
    text-decoration: none;
  }
  a:link{
    color: white;
  }
  a:hover{
    color: lightskyblue;
  }
  a:visited{
    color: white;
  }
</style>
<div>
  <input type="number" name="" id="">
  <input type="submit" value="產生年曆">
</div>


<<<<<<< HEAD
<!-- <div>年份:2020</div> -->

<?php
if(isset($_GET["year"])){
  $year=$_GET["year"];
}else{
  $year=date("Y");
}
echo "<h4 style='text-align:center'>西元". $year . "年曆</h4>";

<div class="container">
for($m=1;$m<=12;$m++){
  ?>
=======
<div class="container">
  
  <?php
// $year="2020";
// for($m=1;$m<=12;$m++){
  $year=date("Y");
  $month=date("m");
  // ""=$month-1;

  if(isset($_GET["mon"])){
    $month=$_GET["mon"];
  }
  
  if(isset($_GET["year"])){
    $year=$_GET["year"];
  }
>>>>>>> 06b92c93d8c348443879bba99ade47c067274606

  if($month>12){
    $year++; /*只寫$year++即可*/
    $month=1;
  }

  if($month<1){
    $year--;
    $month=12;
  }
  
  echo "年份: " . $year;
  ?>

<table>
  <tr>
    <td> <a href='try_calendar%20copy.php?mon=<?=$month-1?>&year=<?=$year?>'> << </a></td>
    <td colspan="5">月份:<?=$month;?></td>
    <td> <a href='try_calendar%20copy.php?mon=<?=$month+1?>&year=<?=$year?>'> >> </a></td>
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
// $firstDay="2020-04-01";
// $firstDayWeek=date("w",strtotime($firstDay));
// echo "第一天星期:" . $firstDayWeek . "<br>";

// // echo "<table>";
// for($i=0;$i<=4;$i++){
//   echo "<tr>";
//   for($j=0;$j<=6;$j++){
//     if($i==0 && $j<$firstDayWeek){
//       echo "<td></td>";
//     }else{
//       echo "<td>", $i*7+$j+1-$firstDayWeek, "</td>";

//     }
//   }
//   echo "</tr>";
// }
// echo "</table>";

$firstDay="$year-$month-01";
$firstDayWeek=date("w",strtotime($firstDay));
// echo "第一天星期:" . $firstDayWeek . "<br>";
$monthDays=date("t",strtotime($firstDay));
// echo "月天數:" . $monthDays . "天";

// echo "<table>";
for($i=0;$i<=4;$i++){
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
        "</td>";
        }
  }
  echo "</tr>";
}
// echo "</table>";


?>
</table>


<!-- <?php
// }
?> -->
</div>