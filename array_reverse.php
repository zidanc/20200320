<h1>反轉陣列</h1>
<hr>
<?php
$a=[2,4,6,1,8];
echo "<pre>"; print_r($a);echo "</pre>";
echo "地板函數".floor(count($a)/2)."<br>";
echo "天花板函數".ceil(count($a)/2)."<br>";

for($i=0;$i<floor(count($a))/2;$i++){
  
  $tmp=$a[$i];
  $a[$i]=$a[count($a)-1-$i];
  $a[count($a)-1-$i]=$tmp;
}
  /*然後老師將count($a)-1-$i指定成一個變數$index，把$index帶回去上式
  重新整理而得。*/
  echo "<pre>";print_r($a);echo "</pre>";

?>