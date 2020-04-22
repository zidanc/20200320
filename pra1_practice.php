<?php
$a=[];
for ($i=1;$i<=9;$i++){
  for($j=1;$j<=9;$j++){
    $a[]= $i . "x" . $j . "=" . ($i*$j);
  }
}

// echo "<pre>";print_r($a);"</pre>";
// echo "<hr>";

// echo $a[31];
// $a[31]=9999;
// echo "<pre>";print_r($a);"</pre>";

for ($i=0;$i<count($a);$i++){
  echo $a[$i] . " , ";
  if ($i%9 == 8) {
    echo "<br>";
  }
}
echo "<hr>";

foreach($a as $key=>$d){
  echo $d . " , ";
  if ($key%9 == 8){
    echo "<br>";
  }
}
echo "<hr>";
echo  "practice2nd";
echo "<br>";
// 方法一：
// $a=[];
// for($i=1;$i<=9;$i++){
//   for ($j=1; $j <=9 ; $j++) { 
//     $a[]= $i . " x " . $j . "=" .($i*$j);
//   }
// }

// for($k=0;$k<count($a);$k++){
//   echo $a[$k] . " , ";
//   if ($k%9 == 8){
//     echo "<br>";
//   }
// }

// 方法二：
$a=[];
for ($i=1;$i<=9;$i++){
  for($j=1;$j<=9;$j++){
    $a[]= $i . "x" . $j . "=" . ($i*$j);
  }
}

foreach ($a as $key => $d) {
  echo $d . " , ";
  if($key%9 == 8){
    echo "<br>";
  }
}


?>