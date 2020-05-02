<h4>反轉陣列</h4>
<hr>

<?php

$a=[2,4,6,1,8];  
echo "<pre>";print_r($a);"</pre>";

echo "使用反轉陣列函數";
echo "<pre>";print_r(array_reverse($a));"</pre>";  
// 使用反轉陣列函數
?>

<h4>交換變數</h4>
<hr>

$a=5<br>
$b=10

<?php
$a=5;
$b=10;

$tmp=$a;
$a=$b;
$b=$tmp;

echo '$a='.$a."<br>";
echo '$b='.$b;

?>
<hr>
<h4>反轉陣列搭配暫存的變數，達到反轉目的</h4>
<hr>

<?php
$b=[2,4,6,1,8];
echo "<pre>";print_r($b);"</pre>";
echo "地板函數".floor(count($b)/2)."<br>";
echo "天花板函數".ceil(count($b)/2)."<br>";

for($i=0;$i<floor(count($b)/2);$i++){
  $tmp=$b[$i];
  $index=count($b)-1-$i;
  $b[$i]=$b[$index];
  $b[$index]=$tmp;

  echo "<pre>";print_r($b);"</pre>";      //寫在迴圈裡，做觀察用。
}

?>