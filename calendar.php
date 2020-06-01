<?php

class Calendar{

  public function __construct(){

    echo "<table>";
    
    echo "<tr>";
    echo "<td>日</td>";
    echo "<td>一</td>";
    echo "<td>二</td>";
    echo "<td>三</td>";
    echo "<td>四</td>";
    echo "<td>五</td>";
    echo "<td>六</td>";
    echo "</tr>";


    for($i=0;$i<6;$i++){
      echo "<tr>";
      for($j=0;$j<7;$j++){
        echo "<td>";
        $num=$i*7+$j+1;
        echo $num;
        echo "</td>";

      }
      echo "</tr>";
    }

    
    
    echo "</table>";

  }


}
$cal=new Calendar;


?>