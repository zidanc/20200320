<?php

include_once "base.php";

if(!empty($_FILES['doc']['tmp_name'])){
  echo "上傳的暫存檔名及路徑:".$_FILES['doc']['tmp_name']."<br>";
  echo "檔案類型:".$_FILES['doc']['type']."<br>";
  echo "檔案原始名稱:".$_FILES['doc']['name']."<br>";

  move_uploaded_file($_FILES['doc']['tmp_name'],"doc/".$_FILES['doc']['name']);
  echo "檔案搬移位置在"."doc/".$_FILES['doc']['name'];
  
  if ($_FILES['doc']['type']=="text/plain") {
    move_uploaded_file($_FILES['doc']['tmp_name'],'doc/'.$_FILES['doc']['name']);
    
    //開啟檔案函數
    // header('Content-Type: text/plain charset:text/uif-8'); 直接靠程式轉碼。
    $path='doc/'.$_FILES['doc']['name'];
    $file=fopen($path,"r+");

    $txt=fgets($file); //第一行的內容，說明，日期，到期不需要輸入進資料表，所以先在迴圈外跑一次，讓pointer移動一次。
    $num=1;
    while(!feof($file)){
      $txt=fgets($file);  //第二行
      // $font_size=rand(12,24)."px";
      // echo "<div style='margin:10px;font-size:$font_size;'>".$txt."</div>";
      $tmp=explode(",",$txt);
      if(count($tmp)==4){

        $content['subject']=$tmp[0];
        $content['description']=$tmp[1];
        $content['create_date']=$tmp[2];
        $content['due_date']=$tmp[3];
        save("todo_list",$content);
        $num++;
        
      }
      
      // echo "<div style='margin:10px;font-size:20px;'>".$txt."</div>";
      
      // echo $txt."<br>";
    }
    // echo "已儲存".$num."筆資料";
    to("text-import.php");

  }else{
    echo "檔案類型錯誤!";
  }
  
  echo "<pre>";print_r($_FILES);"</pre>";
}else{
  echo "上傳錯誤:".$_FILES['doc']['error'];
}

?>