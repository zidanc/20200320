<style>
  table{
    width:250px; 
    border-collapse: collapse;
    text-align: center;
  }
  table td{
    border: 1px solid #ccc;
    padding: 15px;
  }
  table tr{
    height:50px;
  }
  .wrapper{               /*控制跑1~12迴圈出來的12個月曆。*/
    display: flex;
    flex-flow:row wrap;
    /* align-items: center; */
  }
  .calendar{              /*每一個【各自】月曆內「月份」、「第一天星期：」、「月天數：」、月曆表格本身這四個物件的排列。*/
    display: flex;
    flex-flow: column nowrap;
    justify-content: flex-start;
    margin: 20px 40px;
  }
  tr>td:first-child{
    color: red;
  }
  tr>td:last-child{
    color: darkgreen;
  }
  table tr:nth-of-type(1){
    background: pink;
  }
  td:hover{
    background: lightskyblue;
  }
  div.title{
    display:flex;
    flex-flow: column wrap;
    /* justify-content: center;
    align-items: center; */
    margin-left: 40%;
    font-size: 2rem;
    filter: drop-shadow(1px 1px 1px gray);
  }
</style>

<!-- table>(tr>td*7)*6 -->
<div class="title">
  <div>月曆練習</div>
  <div>年份：2021</div>
</div>

<div class="wrapper">

<?php
$year=2021;
for ($m=1; $m <=12 ; $m++) { 
?>

<div class="calendar">

<table>       
  <tr>
    <td class="month" colspan="7">月份：<?=$m; ?></td>
  </tr>
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

// echo "第一天星期：".$firstDayWeek."<br>";
// echo "月天數：".$monthDays."天";

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

</div>

<?php
}
?>

</div>