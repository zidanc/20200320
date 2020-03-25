<?php
//(單行註解)  宣告一個變數
$a=1;
echo $a;
echo "<br>";

$a=2.1;
echo $a;
echo "<br>";
print($a);
echo "<br>";

$studentInSchool="Yes";


/*
(多行註解)   宣告一個常數，常數不可被變更。
*/

define("PI",3.14159);
echo PI;
echo "<br>";
echo PI*2;
echo "<br>";
echo "<hr>";

//運算子 !
$a=true;
echo $a;
echo "<br>";
echo !$a;
echo "<hr>";

//運算子 ++
$b=2;
echo "<br>";
echo $b++;
echo "<br>";
echo $b+1;
echo "<hr>";

//字串運算子

$a="A";
$b="1";
echo $a;
echo "<br>";
echo $b;
$c=$a . $b;
$d=$a + $b; //不能運算的字串與數字在一起，將只會打印出數字
echo "<hr>";
echo $c;
echo "<br>";
echo $d;
echo "<hr>";

//三元運算子
$a=0;
echo ($a>0)?"很貴":"免費";
echo "<hr>";

if($a>0){
  echo "expensive";
}else{
  echo "cheap";
}
echo "<hr>";
?>

