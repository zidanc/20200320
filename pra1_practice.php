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

foreach($a)


?>