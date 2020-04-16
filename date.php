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
echo date("Y-m-d H:i:s")

?>