<h4>字串"好的，中國武漢肺炎"。請將"武漢肺炎"四字放大並變色</h4>

<?php
$str="好的，中國武漢肺炎";
$str2=mb_substr($str, 5, 9,"UTF-8");
echo "<br>";

echo $str2;
echo "<hr>";
echo "方法二";
echo "<br>";
$search="武漢肺炎";
$target="<span style='color:red;font-size:24px'>武漢肺炎</span>";
echo str_replace($search,$target,$str);
echo "<hr>";


?>
<br>
好的，中國<span style="color:red;font-size:24px">武漢肺炎</span>