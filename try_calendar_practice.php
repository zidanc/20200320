<style>
  table{
    width:250px;
    border-collapse: collapse;
    text-align: center;
  }
  table td{
    border: 1px solid #ccc;
    padding: 10px;
  }
  .wrapper{
    display: flex;
  }
</style>

<!-- table>(tr>td*7)*6 -->

<h4>月曆練習</h4>
<div>年份：2021</div>

<div class="wrapper">

<?php
$year=2021;
for ($m=1; $m <=12 ; $m++) { 
?>

<div class="calendar">

<div>月份：<?=$m; ?></div>
<table>       
                  <!-- <?php ?>會寫在<table>標籤之中的原因：因為觀察月曆表格過後，會重複的部份是<tr>、<td> 6~7組，會重複表示可以用迴圈，要用迴圈的部份才需要被php標籤包裹著。 -->
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

$firstDay="$year-$m-01";
$firstDayWeek=date("w",strtotime($firstDay));
$monthDays=date("t",strtotime($firstDay));

echo "第一天星期：".$firstDayWeek."<br>";
echo "月天數：".$monthDays."天";

  for($i=0;$i<6;$i++){
    echo "<tr>";
    for($j=0;$j<7;$j++){

      if($i==0 && $j<$firstDayWeek){
        echo "<td>";
        echo "</td>";
      }else{
      
        // echo "<td>".($i*7+$j+1)."</td>";    可以寫成一行，但這樣若中間公式很長，不好閱讀。
        
        echo "<td>";
        $num= $i*7+$j+1-$firstDayWeek;
            if($num<=$monthDays){
              echo $num;
            }
        echo "</td>";
        
      }
    }
    echo "</td>";
  }


?>

</table>

<?php
}
?>

</div>

</div>