<?php

$str="today is a good day";
$find="s";

$status=false;   /*當false時，執行以下while loop,若變數為$status=true;，停止執行loop*/
$position=0;      /*另外，需要一個變數記錄我找到第幾個字元，所以先指派0，從第0個位置開始找。*/
while ($status == false) {
  $tmp=mb_substr($str,$position,1,"utf8");  //此字串，從第幾個位置開始找，找1個該字元。

  if ($tmp==$find) {
    echo "字元" . $find . "在" . $str . "的第" . $position . "個位置";
    $status=true;     //當$tmp==$find時，將$status改成true，結束這個loop。
  }else{
    $position++;
    
  }
}

?>