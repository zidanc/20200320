<h4>"好的，中國武漢肺炎"，請利用行內CSS，將"武漢肺炎"四字放大並變色</h4>

<?php
$str="好的，中國武漢肺炎";
echo "利用行內樣式。<br>";
echo "<hr>";
echo "<br>";

$str2=str_replace("武漢肺炎",'<span style="color:red; font-size:24px">武漢肺炎</span>',$str);
echo $str2."<br>";

//利用變數，讓函式內精簡，這樣未來修改也比較方便。
$search="武漢肺炎";
$style='<span style="color:red; font-size:24px">武漢肺炎</span>';
echo str_replace($search,$style,$str);


// echo "好的，中國". mb_substr($str,5,4);
// echo "<br>";
?>

<hr>
<!-- 好的，中國<span style="color:red; font-size:24px">武漢肺炎</span> -->