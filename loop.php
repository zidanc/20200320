<?php

//for loop

/*for($i=0;$i<10;$i++) = for($i=0;$i<10;$i=$i+1)的寫法*/
/*for($i=1;$i<=9;$i++){

  echo $i;

} */

for($i=1;$i<=9;$i++){

  for($j=1;$j<=9;$j++){
  
    echo $i . "x" . $j . "=" . ($i * $j) . " , ";
  
  }

}

//為了排版的需要
echo "<hr>";

for($i=1;$i<=9;$i++){

  for($j=1;$j<=9;$j++){
  
    echo $i . " x " . $j . " = " . ($i * $j) . " , ";
  
  }
  echo "<br>";
}

echo "<hr>";

echo "<table border=1>";
for($i=1;$i<=9;$i++){
  echo "<tr>";  
  for($j=1;$j<=9;$j++){
  
    echo "<td>" . $j . " x " . $i . " = " . ($i * $j) . " , " . "</td>";
    //echo "<td> $j . ' x ' . $i . ' = ' . ($i * $j) . ' , ' </td>"是不好的作法;
  
  }
  echo "<tr>";
}
echo "</table>";

echo "<hr>";

//課堂作業 自己寫法
echo "<table border=1>";
for ($a=1;$a<=9;$a++){
  echo "<tr>";
  for($b=1;$b<=9;$b++){

    echo "<td>" . ($a * $b) . "</td>";

  }
  echo "</tr>";
}
echo "</table>";

echo "<hr>";
//課堂作業 老師概念
echo "<table border=1>";
for ($a=1;$a<=9;$a++){
  echo "<tr><td>$a</td>";
  for($b=1;$b<=9;$b++){

    echo "<td>" . ($a * $b) . "</td>";

  }
  echo "</tr>";
}
echo "</table>";


?>