<h4>威力彩號碼</h4>
<hr>

<?php
// 步驟1: 單純亂數選取6個號碼。
// $num=[];

// for ($i=0; $i < 6; $i++) { 
//   $num[]=rand(1,49);
// }
// echo "<pre>";print_r($num);"</pre>";

// 步驟2: 亂數選取6個號碼，若遇重複將之移除。改比較容易重複的38個彩球，來觀察。
$num=[];
$count=0; /*$count皆為記次數用，沒有一定需要下這變數，功能不會影響，純讓自己觀察程式怎麼跑。*/
$count1=0;
$count2=0;
for ($i=0; $i <6 ; $i++) { 
  $num[]=rand(1,38);
}
echo "<pre>";print_r($num);"</pre>";

for ($i=0; $i <6 ; $i++) { 
  for ($j=0; $j <6 ; $j++) { 
    
    if($j!=$i && $num[$j]==$num[$i]){
      unset($num[$j]);
      // array_splice($num,$j,1);   同樣與unset皆為移除陣列中某值的功能，但splice目前這樣寫仍有bug。
      $num[$j]=rand(1,38);
      $count++;
    }
    $count1++;
  }
  $count2++;
}
echo "<pre>";print_r($num);"</pre>";
echo "重複了".$count."次<br>";
echo "重複了".$count1."次<br>";
echo "重複了".$count2."次<br>";



foreach ($num as $key => $d) {
  echo $d . " , ";
}

echo "<hr>";
?>

<?php
echo "方法：以while迴圈來取號";
echo "<hr>";

$num=[];
// count是函數；$count是變數，是變數的話一開始就要宣告，兩者使用的狀況要判別。
$count=0;

while (count($num) < 6 ) {
  // $num[]=rand(1,38);    老師不是這邊就取第一個元素。
  // $count++;
  if(count($num)>0){

    $tmp=rand(1,38);
    if(!in_array($tmp,$num)){
      $num[]=$tmp;
    }else{
      echo "有重複號碼".$tmp;   //這else也是觀察用，不寫不會影響功能。
    }

  }else{

    $num[]=rand(1,38);    //放入第一個元素。

  }
$count++;   //這也是觀察用，不寫不會影響功能。
}

echo "<br>";
echo $count;
echo "<pre>";print_r($num);"</pre>";






?>