<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>不定參數函式練習</title>
  <style>
   *{
     font-family: consolas;
   }
  </style>
</head>
<body>
  
<?php
// 最一開始不定函式印星星
// stars();

// 讓印星星重複跑，並且行數隨機產生
// for($i=0;$i<10;$i++){
//   $rand=rand(1,10);
//   stars($rand);
// }

// function stars($row){

//   for($i=1;$i<=$row;$i++){
//     for($j=1;$j<=($row-1+$i);$j++){
//       if($j<=($row-$i)){
//         echo "&nbsp;";
//       }else{
//         echo "*";
//       }
//     }
//     echo "<br>";
//   }

// }
?>

<form action="?" method="get">
  <label for=""><input type="number" name="star"></label>
  <input type="submit" value="送出">
</form>


<?php
if(!empty($_GET['star'])){
  $star=$_GET['star'];
  stars($star);
}else{
  echo "請輸入星星行數";
}  




function stars($row){

  for($i=1;$i<=$row;$i++){
    for($j=1;$j<=($row-1+$i);$j++){
      if($j<=($row-$i)){
        echo "&nbsp;";
      }else{
        echo "*";
      }
    }
    echo "<br>";
  }

}





?>



</body>
</html>