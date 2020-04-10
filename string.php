<h4>字串處理</h4>
<hr>
<h5>1.子字串 substr() / mb_substr()</h5> 
<!-- mb表示multi bytes，是為了中文、泰文等二位元或更多位元的字所創的新指令 -->
<?php
$s="Hello World";
echo $s;
echo "<br>";
echo substr($s,6);

$s="哈囉 今天天氣好嗎?";
echo $s;
echo "<br>";
echo substr($s,0,5);

?>