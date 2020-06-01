<style>
  span{
    color: red;
  }
</style>

<?php

if (isset($_GET["height"]) && isset($_GET["weight"]) && $_GET["weight"]>0 && $_GET["height"]>0 ){
  
  $height=$_GET["height"];
  $weight=$_GET["weight"];
  $level=round($weight/($height*$height)*10000,2);
  echo "你輸入的的身高是".$height."公分<br>";
  echo "你輸入的的體重是".$weight."公斤<br>";
  
  
  if (!empty($height)) {
    echo "BMI=". $level." ";
  }
  
  if ($level<18.5){
    echo "體重過輕";
  }else if($level<24){
    echo "你很健康";
  }else if($level<27){
    echo "過重";
  }else if($level<30){
    echo "輕度肥胖";
  }else if($level<35){
    echo "中度肥胖";
  }else{
    echo "重度肥胖";
  }

}else{
  
  echo "<span>請輸入正確的身高、體重，才能得知您的BMI值。</span>";

}


// 因為不設>0，會有判斷瑕疵。但此處將判斷式設有四個條件交集，有問題
// if (isset($_GET["height"]) && isset($_GET["weight"]) && $_GET["height"]>0 && $_GET["weight"]>0 ){     
  
//   $height=$_GET["height"];
//   $weight=$_GET["weight"];
  
//   echo "你輸入的的身高是".$height."公分<br>";
//   echo "你輸入的的體重是".$weight."公斤<br>";
// }

// if (!empty($height)) {
//   $BMI=$weight/($height*$height)*10000;
//   echo "BMI=". round($BMI,2);

// }else{
//   echo "<span>請輸入正確的身高值。</span>";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>表單傳值</title>
</head>
<body>
  <!-- form>input:text*2+input:submit -->
  <h4>BMI計算機</h4>
  
  <form action="?" method="get">
    身高(cm)：<input type="number" name="height" id=""><br>
    體重(kg)：<input type="number" name="weight" id=""><br>
    <input type="submit" value="送出">
  </form>
  
</body>
</html>