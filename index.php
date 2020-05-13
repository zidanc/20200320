<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>月曆的月份轉換</title>
</head>
<body>
 
 <?php
  $month=date("m");     /*頭一次到此網頁，還沒取到值之前，先取電腦本機系統月份*/
  
  if (isset($_GET["month"])) {    //每按一次上一月、下一月按鍵，送值給php程式→向Server發出request。
    $month=$_GET["month"];
  }
 ?>

<a href="index.php?month=<?=$month-1;?>">上一月(<?=$month-1;?>)</a>
<span>本月<?=$month;?></span>
<a href="index.php?month=<?=$month+1;?>">下一月(<?=$month+1;?>)</a>

</body>
</html>