<h4>字串函式練習</h4>
<div>字串 aaddw1123</div>


<?php
$str="aaddw1123";
$str2="";
for($i=0;$i<strlen($str);$i++){
  $str2=$str2 . "*";
}
echo $str2;
echo "<hr>";

// $str="今天天氣很好，是不是?"
$str3=str_repeat("好",strlen($str));
echo $str3;
echo "<hr>";
echo str_repeat("是否,",10);

?>

<h4>字串切割</h4>
<div>this,is,a,book</div>

<?php
$str="this,is,a,book";
$strArray=explode(",",$str);

echo "<pre>";
print_r($strArray);
echo "</pre>";

echo $strArray[3];
?>


<h4>將上例陣列重新組合成“this is a book”</h4>
<?php
$str="this,is,a,book";
echo str_replace(",","&nbsp;",$str);

?>

<?php
echo "<hr>";
// <!-- 方式二，依照題目要求，講師意思不是要用str_replace -->
echo "方式二，使用join或implode都可以，join比較現代";
echo join(" ",$strArray);

?>

<h4>將” The reason why a great man is great is that he resolves to be a great man”
<br>只取前十字成為” The reason…”</h4>

<?php
$str="The reason why a great man is great is that he resolves to be a great man";
echo mb_substr($str, 0, 10, "utf-8");
echo "<br>";
// 方式二
echo "講師方式二";
echo "<br>";
$str2=mb_substr($str, 0, 10);
echo $str2 . "...";

echo "<hr>";

?>
