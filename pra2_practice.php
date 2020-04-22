<h4>威力彩號碼</h4>
<hr>

<?php

$num=[];

for ($i=0; $i < 6; $i++) { 
  $num[]=rand(1,49);
}

foreach ($num as $key => $d) {
  echo $d . " , ";
}

// echo "<pre>";print_r($num);"</pre>";


?>