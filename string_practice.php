<h4>字串處理</h4>
<hr>
<h5>1.子字串 substr() / mb_substr()</h5> 
<!-- mb表示multi bytes，(多位元的語系)是為了中、日、韓、泰文等二位元或更多位元的字所創的新指令 -->
<?php
$s="Hello World";
echo $s;
echo "<br>";
echo substr($s,6);

$s="哈囉 今天天氣好嗎?";
echo $s;
echo "<br>";
echo substr($s,0,5)."<br>";     //在substr函數，中文每一個字都算3個bytes。所以若要取一個完整的中文字，要3的倍數。

// mb_substr()
echo "<hr>";
echo mb_substr($s,1,3);

//str_repeat()
echo "<hr>";
echo str_repeat("*hello*",5);

//str_replace()
echo "<hr>";
echo str_replace("今天","明天",$s);

//explode()
echo "<hr>";
$str_sec[]=explode(" ",$s);   //不需要指定空陣列去接收，否則會變二維陣列。
$str_sec=explode(" ",$s); 
echo "<pre>";print_r($str_sec);"</pre>";
echo $str_sec[1];

//strpos()
echo "<hr>";
echo strpos($s,"天")."<br>";         //一個中文字實際上是3個bytes。空白為1個byte。
echo mb_strpos($s,"天")."<br>";      //也有mb_開頭的衍生函數，支援多位元語系。
echo mb_strrpos($s,"天")."<br>";     //多一個r，代表reverse，從後方算回來的第一個。
echo mb_strpos($s,"天",5);           //從第5個mb字元開始找。這樣就會避開第一個天，傳第二個天的位置回來。


?>