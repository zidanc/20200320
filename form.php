<?php
if(isset($_POST['weight']) && isset($_POST['height'])){

$weight=$_POST['weight'];
$height=$_POST['height'];
echo "你輸入的身高是:" . $height . "<br>";
echo "你輸入的體重是:" . $weight . "<br>";
$level=round($weight/($height*$height)*10000 , 2);
if (!empty($height)){
      echo "<span style='background: #DDD','color:#FFF'>你的BMI是:</span>" . round($weight/($height*$height)*10000 , 2) ; /*如何轉換成cm,取值兩位即可*/
    }else{
      echo "<span style='color:red'> 請輸入正確的身高值 </span>";

    }

}

if($level<18.5){
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
  <h4>BMI Calculator</h4>
  <form action="?" method="post">
    身高(公分):<input type="number" name="height" step="0.01" ><br>
    體重(公斤):<input type="number" name="weight"><br>
    <input type="submit" value="送出">
  </form>

</body>
</html>