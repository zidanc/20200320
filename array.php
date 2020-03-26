<?php

//陣列

$a=[11,23,36,70];

  echo $a[1];
  echo "<hr>";

$a=["小明"=>12,"小華"=>32,"小強"=>30,"阿國"=>42];
  
  echo $a["小強"];
  echo "<hr>";

 $b[]=12;
 $b[]=22;
 $b[]=45;

  echo "<pre>";print_r($b);echo "</pre>";
  echo $b[2];
  echo "<hr>";

  $a=[[1,2,3],[4,5,6],[4,7,9]];


  echo "<pre>";print_r($a);echo "</pre>";
  echo $a[2][1];
  echo "<hr>";

$a=[
    "小明"=>["國文"=>32, "英文"=>60, "歷史"=>99],
    "小華"=>["國文"=>60, "英文"=>52, "數學"=>79],
    "阿國"=>60

];

  echo "<pre>";print_r($a);echo "</pre>";
  echo "<hr>";

//陣列函式
echo "count(\$a)=>";
echo count($a);
echo "<hr>";
echo "is_array(\$a)=>";
echo is_array($a);
echo "<hr>";
echo "in_array(\$a)=>";
echo in_array($a);



?>




