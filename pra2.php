<h1>威力彩電腦選號，如何不會重複選號</h1>
<hr>
<?php

//亂數函式

$num=[];

for($i=0;$i<6;$i++){
  $num[]=rand(1,38);
}








foreach($num as $n){
  
  echo $n . " , ";
}

?>