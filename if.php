<?php
//if 判斷式

$score=70;

if($score>=60){
    echo "及格";
}else{
    echo "不及格";
}

echo "<hr>";
//判斷成績
/*
100~90 -> "A"
75~90 -> "B"
60~75 -> "C"
0~59 -> "D"
*/

echo "<br>";
echo "成績:$score"; 
echo "<br>";
echo "等級:";

$score=70;
if ($score>=90){
  echo "A";
}else if ($score>=75) {
  echo "B";
} else if ($score>=60) {
  echo "C";
} else {
  echo "D";
}

echo "<br>";

//巢狀判斷式
if ($score>=90) {
  echo "A";
} else {
    if($score>=75){
      echo "B";
    } else {
        if($score>=60){
          echo "C";
        }else{
          echo "D";
        }
      }    
    }

echo "<hr>";
//閏年判斷，平年2月共28天，閏年29天。
/*公元年份除以4不可整除，為平年。
    ->公元年份除以4可整除，為閏年。
公元年份除以4可整除但除以100不可整除，為閏年。
    ->公元年份除以4可整除，並且 除以100不可整除，為閏年。
公元年份除以100可整除但除以400不可整除，為平年。
    ->公元年份除以4可整除，並且 (除以100不可整除 或是 除以400可以整除)，為閏年。


    */

$year=2003;
echo "<br>";
echo "西元年:$year";
echo "<br>";
if ($year%4 !=0) {
  echo "平年"; 
} else {
  echo "閏年";
}
echo "<hr>";

$year1=2100;
echo "西元年:$year1";
if ($year1%4 == 0 && $year1%100 !=0) {
  echo "閏年";
} else {
  echo "平年";
}
echo "<hr>";

/* $year2=2000;
echo "<br>";
echo "<西元年:$year2>"
//if ($year2%4 == 0 && ($year2%100 !=0 || $year2%400 == 0)) {
  echo "閏年";
} else {
  echo "平年";
} */

echo "<hr>";

$score=88;
$level="";
echo "成績:" . $score; 
echo "<br>";

if ($score>=90){
  $level= "A";
}else if ($score>=75) {
  $level= "B";
} else if ($score>=60) {
  $level= "C";
} else {
  $level= "D";
}


echo "等級:".$level;
echo "<br>";
switch ($level) {
  case 'A':
    echo "非常好，請努力保持";
    break;
  case 'B':
    echo "可圈可點，但還有進步的空間";
    break;
  case 'C':
    echo "一般水平，需要更多的努力";
    break;
  case 'D':
    echo "用心不足，請加強";
    break;
    default: echo "留級";/*指說若以上都沒有的情況，請列印這句。*/
        
  }



?>


