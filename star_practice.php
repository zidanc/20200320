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

//菱形
for ($i=1; $i <=5 ; $i++) { 
  for ($k=1; $k <=(5-$i) ; $k++) { 
    echo "&nbsp;";
  }
  for ($j=1; $j <=(2*$i-1) ; $j++) { 
    echo "*";
  }
  echo "<br>";
}

 
    
?>