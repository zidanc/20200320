<?php

$score=70;

if($score>=60){
  echo "及格";
}else{
  echo "不及格";
}
echo "<hr>";

/*
100~90 -> “A”
75~90 -> “B”
60~75 ->”C”
0~59 –>”D”
*/
$score=70;
echo "成績：" . $score;
echo "<br>";
echo "等級：";

if($score>=90){
  echo "A";
}else if($score>=75){
  echo "B";
}elseif ($score>=60) {
  echo "C";
}else {
  echo "D";
}

echo "<hr>";
// 閏年判斷
$year=2003;
echo "西元年：" . $year;
echo "為";
if($year%4 !=0){
  echo "平年";
}else{
  echo "閏年";
}

echo "<hr>";
if($year%4 == 0){
  echo "閏年";
}else{
  echo "平年";
}

//閏年判斷，平年2月共28天，閏年29天。
/*公元年份除以4不可整除，為平年。
    ->公元年份除以4可整除，為閏年。
公元年份除以4可整除但除以100不可整除，為閏年。
    ->公元年份除以4可整除，並且 除以100不可整除，為閏年。
公元年份除以100可整除但除以400不可整除，為平年。
    ->公元年份除以4可整除，並且 (除以100不可整除 或是 除以400可以整除)，為閏年。
    */


?>