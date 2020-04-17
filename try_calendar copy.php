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

</style>

<div>年份:2020</div>

<div class="container">
<?php
$year="2020";
for($m=1;$m<=12;$m++){
  ?>


<table>
  <tr>
    <td colspan="7">月份:<?=$m;?>
    </td>
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

$firstDay="$year-$m-01";
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


<?php
}
?>
</div>