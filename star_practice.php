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
echo "中空矩形作法二";
echo "<br>";
for($i=1;$i<=7;$i++){
  if ($i==1 || $i==7) {
    echo "*";
  }else if($k){
    
  }
}


?>