<h4>日期/時間函式</h4>
<div>strtotime() - 把文字日期轉成時間序</div>

<?php

$time="2020-04-16 12:30:21";
$serialTime=strtotime($time);

echo date("Y年m月d日 H:i:s",$serialTime);
echo "<br>";
echo date("Y年n月m日 H:i:s",$serialTime);

?>

<h4>時間練習</h4>
<div>距離下一次的生日還有幾天</div>
<div>7/2</div>

<?php
$today="2020-04-16";
$nextBirth="2020-07-02";
// $serialTimeT=strtotime($today);
// $serialtimeB=strtotime($nextBirth);

//程式計算
$between=strtotime($nextBirth)-strtotime($today);
$days=$between/60/60/24;
echo "還有:".$days."天";

echo "<hr>";

$days=date("z", strtotime($nextBirth))-date("z", strtotime($today));
echo "$days";
// echo date_timezone_get() 此函數不常用，可以自行查詢使用方式;


?>

<h4>date()函式</h4>
<?php
echo date("Y-m-d H:i:s");

?>

<h4>strtotime()函式</h4>
<?php
// echo date("Y-m-d H:i:s");
// $today變數上面已經命令過了
$date=strtotime("+3 days" . $today);
echo date("Y-m-d", $date);

echo "<hr>";
echo date("Y-m-d",strtotime("-2 month", strtotime("2020-07-02")));
echo "<br>";
echo date("Y-m-d",strtotime("-2 month , 2020-07-02"));

?>

<h4>迴圈+時間練習</h4>
<div>印出今天起的三十天日期</div>
<?php
$today=date("Y-m-d");
/* 我的自行練習思考
$between=strtotime("+1 day, 2020-04-16");
$between2=strtotime("+2 day, 2020-04-16");*/

for ($i=1; $i<=30 ; $i++) {
  echo date("Y-m-d", strtotime("+$i day" . $today))."<br>";
   
}


?>