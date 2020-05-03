<h4>字串函式練習</h4>
<div> 字串aaddw1123 </div>

<?php
$str="aaddw1123";
$str2="";       //指定一個變數，為空字串。

for($i=0;$i<strlen($str);$i++){
  $str2=$str2."*";
  // echo "i=".$i."=>".$str2."<br>";  //觀察用。
}

echo $str2."<br>";
echo "<hr>";

$str3=str_repeat("*",strlen($str));
echo $str3;

?>

<h4>字串切割</h4>
<div>this,is,a,book</div>

<?php
$str="this,is,a,book";
$str2=explode(",",$str);
$str3=explode(",",$str,3);

echo "<pre>";print_r($str2);"</pre>";
echo "<pre>";print_r($str3);"</pre>";

echo $str2[3];
?>