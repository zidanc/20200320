<h4>日期/時間函式</h4>
<div>strtotime()-把文字日期轉換成時間序</div>

<?php
$time="2020-04-06 11:30:20";
echo strtotime($time)."<br>";

$serialTime=strtotime($time);
echo date("Y",$serialTime);
echo "<br>";
echo date("Y年m月d日",$serialTime);
echo "<br>";
echo date("Y年n月j日",$serialTime);
?>

<h4>時間練習</h4>
<div>距離下一次的生日還有幾天</div>
<?php

$today=date("Y-m-d");
// $today="2020-05-03";        //左邊這樣寫代表以當天是00小時：00分：00秒來做計算。
$nextBirth="2020-07-02";    //兩天都是00小時：00分：00秒來相減，這樣後續換算除以86400會是整數天。

$between=strtotime($nextBirth)-strtotime($today);
echo $between."<br>";

$days=$between/86400;      //一天=24hr*60min*60sec=86400 sec.
echo "還剩".$days."天";
echo "<hr>";
//運用date("z",時間序)來運算，z:年份中的第幾天。
$days=date("z",strtotime($nextBirth))-date("z",strtotime($today));
echo $days;
?>

<hr>
<h4>date()函式</h4>

<?php
date_default_timezone_set("Asia/Taipei");
echo date("Y-m-d H:i:s");
?>

<hr>
<h4>strtotime()函式的偏移</h4>

<?php
echo strtotime("now")."<br>";
$date=strtotime("+3 days");
echo date("Y-m-d",$date);        


?>