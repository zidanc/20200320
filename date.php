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


$today="2020-05-03";
$nextBirth="2020-07-02";

$between=strtotime($nextBirth)-strtotime($today);
echo $between."<br>";

$days=$between/86400;      //一天=24hr*60min*60sec=86400 sec.
echo "還剩".$days."天";





?>
