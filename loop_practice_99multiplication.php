<?php
/* 外迴圈包內迴圈，共兩層的巢狀迴圈
for($i=0;$i<10;$i++){
  for($j=0;$j<10;$j++){
    echo "helloworld" . $i . "-" . $j . "<br>";
  }
}
*/

// multiplication table
for($i=1;$i<=9;$i++){
  for($j=1;$j<=9;$j++){
    echo $i . " x " . $j . " = " . ($i*$j) . " , " ;
  }
  echo "<br>";
}


?>