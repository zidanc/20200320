<style>
  table{
    border: 1px solid black;
    text-align: center;
  }
  table td{
    border: 1px solid #888;
    /* border-collapse: collapse; 沒有效果？*/
  }
  tr:nth-child(1),td:nth-child(1){
    background: #EEE;
  }
  
</style>

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
    echo $j . " x " . $i . " = " . ($i*$j) . " , ";
  }
  echo "<br>";
}

echo "<table>";
for($i=1;$i<=9;$i++){
  echo "<tr>";
  for($j=1;$j<=9;$j++){
    echo "<td>" . $i . " x " . $j . " = " . ($i*$j) . " , " . "</td>";
  }
  // echo "<br>";
  echo "</tr>";
}
echo "</table>";

echo "<table border='1'>";
for($i=1;$i<=9;$i++){
  echo "<tr>";
  for($j=1;$j<=9;$j++){
    echo "<td>" . $i . " x " . $j . " = " . ($i*$j) . "</td>";
  }
  // echo "<br>";
  echo "</tr>";
}
echo "</table>";
echo "<hr>";

echo "<table border='1'>";
for ($i=0; $i <=9 ; $i++) {
  if ($i==0) {
    echo "<tr><td>" . " " ."</td>";
  }else{
    echo "<tr><td>". $i ."</td>"; 

  }
  for ($j=1; $j <=9 ; $j++) { 
    if ($i == 0){
      echo "<td>" . 1*$j . "</td>";
    }else{
      echo "<td>" . $i*$j . "</td>";
    }
  }
  echo "</tr>";
}
echo "</table>";

?>