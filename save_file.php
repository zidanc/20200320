<?php

include_once "base.php";

if ($_FILES['upload']['error']==0) {
  // move_uploaded_file($_FILES['upload']['tmp_name'],"img/".$_FILES['upload']['name']);
  //取得副檔名方法一
  switch($_FILES['upload']['type']){
    case "image/jpeg";
      $sub=".jpg";
    break;
    case "image/png";
      $sub=".png";
    break;
    case "image/gif";
      $sub=".gif";
    break;
  }

  //取得副檔名方法二，前提是必須確定上傳的檔案有副檔名，explode比較有風險。
  //explode()出來是一個陣列，我們要副檔名，所以index=1。$sub[1];就是副檔名。


  $name='mack'.date("Ymdhis").$sub;

  move_uploaded_file($_FILES['upload']['tmp_name'],"img/".$name);

  $data=[
    'filename'=>$name,
    'type'=>$_FILES['upload']['type'],
    'note'=>$_POST['note'],
    'path'=>'img/'.$name

  ];
  

// move_uploaded_file(上傳位址, 上傳目的地位置)
// 上傳位址_此為從二維陣列中的暫存位置tmp_name得知暫存位址

save('file_info',$data);

header("location:upload.php?filename=$name");
}
?>


