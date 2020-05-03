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

<h3>陣列重新組合，使用join函數組合陣列元素</h3>
<div>this,is,a,book陣列重新組合成this is a book</div>

<?php
//方法一：用str_replace函數
$str="this,is,a,book";
echo str_replace(","," ",$str);
echo "<hr>";
//方法二：
$str="this,is,a,book";
$strArray=explode(",",$str);
echo join(" ",$strArray);
?>

<h3>取字串片段：下列字串只取前十字，變成"The reason..."</h3>
<div>The reason why a great man is great is that he resolves to be a great man.</div>

<?php
$str="The reason why a great man is great is that he resolves to be a great man.";
echo substr($str,0,10)."...";


?>
