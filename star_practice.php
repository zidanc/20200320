<style>
  *{
    font-family: "Courier New";
  }
</style>

<?php

// 直角三角形
for($i=1;$i<=5;$i++){
  for ($j=1; $j <($i+1) ; $j++) { 
    echo "*";
  }
  echo "<br>";
}
echo "<hr>";
// 方式二
// for($i=1;$i<=5;$i++){
//   for ($j=1; $j <=$i ; $j++) { 
//     echo "*";
//   }
//   echo "<br>";
// }

// 倒直角三角形
for($i=1;$i<=5;$i++){
  for($j=1;$j<=(6-$i);$j++){
    echo "*";
  }
  echo "<br>";
}
echo "<hr>";
// 方式二
// for ($i=5; $i >=0 ; $i--) { 
//   for ($j=0; $j <$i ; $j++) { 
//     echo "*";
//   }
//   echo "<br>";
// }
echo "<hr>";
// 正三角形
for ($i=1; $i <=5 ; $i++) { 
  for ($k=1; $k <=(5-$i) ; $k++) { 
    echo "&nbsp;";
  }
  for ($j=1; $j <=(2*$i-1) ; $j++) { 
    echo "*";
  }
  echo "<br>";
}

echo "<hr>";
echo "菱形"."<br>";

for ($i=1; $i <=9 ; $i++) { 
      if ($i<=5) {
        $t=$i;
      }else{
        $t=10-$i;
      }
  for ($k=1; $k <=5-$t ; $k++) { 
    echo "&nbsp;";
  }
  for ($j=1;$j<=2*$t-1;$j++){

    echo "*";
  }
  echo "<br>";
}

echo "<hr>";
echo "矩形";
echo "<br>";

for ($i=1; $i <=7 ; $i++) { 
  for ($j=1; $j <=7 ; $j++) { 
    
    if ($i==1 || $i==7) {
      echo "*";
    }else if($j==1 || $j==7){
      echo "*";
    }else{
      echo "&nbsp;";
    }

  }
  echo "<br>";
}

echo "<hr>";
echo "中空矩形作法二: 巢狀迴圈";
echo "<br>";
for($i=1;$i<=7;$i++){

  if ($i==1 || $i==7) {
  
    for ($j=1; $j <=7 ; $j++) { 
      echo "*";
    }
    
  }else{
  
    for ($k=1;$k<=7;$k++) {
  
      if ($k==1 || $k==7) { 
        echo "*";
      }else{
        echo "&nbsp;";
      }
    }   
  }
  echo "<br>";
}
echo '錯誤，因為變數重複導致$i先執行到2，然後=>1=>7就結束，無法完整執行';
echo "<br>";
for($i=1;$i<=7;$i++){

  if ($i==1 || $i==7) {
  
    for ($j=1; $j <=7 ; $j++) { 
      echo "*";
    }
    
  }else{
  
    for ($i=1;$i<=7;$i++) {
  
      if ($i==1 || $i==7) { 
        echo "*";
      }else{
        echo "&nbsp;";
      }
    }   
  }
  echo "<br>";
}

echo "<hr>";
echo "矩形帶對角線";
echo "<br>";

for ($i=1; $i <=7 ; $i++) { 
  for ($j=1; $j <=7 ; $j++) { 
    
    if ($i==1 || $i==7 || $i==$j) {
      echo "*";
    }else if($j==1 || $j==7 || $j==8-$i){
      echo "*";
    }else{
      echo "&nbsp;";
    }

  }
  echo "<br>";
}
 
echo "錯誤語法，導致矩形帶對角線變成無限實心矩形";
echo "<br>";

// for ($i=1; $i <=7 ; $i++) { 
//   for ($j=1; $j <=7 ; $j++) { 
    
//     if ($i==1 || $i==7 || $i=$j) {
//       echo "*";
//     }else if($j==1 || $j==7 || $j==8-$i){
//       echo "*";
//     }else{
//       echo "&nbsp;";
//     }

//   }
//   echo "<br>";
// }

echo "<hr>";
echo "矩形帶對角線作法二: 巢狀迴圈";
echo "<br>";
for($i=1;$i<=7;$i++){

  if ($i==1 || $i==7) {
  
    for ($j=1; $j <=7 ; $j++) { 
      echo "*";
    }
    
  }else{
  
    for ($k=1;$k<=7;$k++) {
  
      if ($k==1 || $k==7 || $k==$i || $k==(8-$i)) { 
        echo "*";
      }else{
        echo "&nbsp;";
      }
    }   
  }
  echo "<br>";
}
echo "<hr>";
echo "修改code，讓未來改變一個變數即可正常改變矩形大小且帶對角線";
echo "<br>";

$x=14;

for ($i=1; $i <=$x ; $i++) { 
  for ($j=1; $j <=$x ; $j++) { 
    
    if ($i==1 || $i==$x || $i==$j) {
      echo "*";
    }else if($j==1 || $j==$x || $j==($x+1)-$i){
      echo "*";
    }else{
      echo "&nbsp;";
    }

  }
  echo "<br>";
}
echo "綜合菱形及矩形的做法，撰寫一個挖空的菱形程式";
echo "<hr>";
echo "承上題，在挖空的菱形中加入對角線";
echo "<br>";


?>