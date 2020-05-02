<h1>找出五百年內的閏年</h1>
<hr>
<?php
echo "一、if判斷式的基本運用<br>";
$year=2200;
echo "西元".$year."年";

if ($year%4 == 0 && ($year%100 !=0 || $year%400 == 0)) {

  echo "是閏年";

}else{

  echo "是平年";

}
echo "<hr>";
echo "二、延伸到陣列的運用，找出五百年內的閏年";
echo "<br>";

$year=[];

for($i=2020;$i<2520;$i++){
  echo "西元".$i."年是";
  if ($i%4 == 0 && ($i%100 !=0 || $i%400 == 0)) {
    echo "閏年";
    $year[]=$i;
  }else{
    echo "平年";
  }
  echo "<hr>";
}


echo "閏年陣列";
echo "<pre>";print_r($year);"</pre>";
?>


<?php
$testYear=rand(2020,2520);

if(in_array($testYear,$year)){

  echo "西元".$testYear."年是閏年。";
}else{
  echo "西元".$testYear."年是平年。";
}

?>