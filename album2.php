<style>
  img{
    width:100%;
    box-shadow: 0px 0px 10px lightskyblue;
  }
  
  .frame{
    display:inline-block;
    box-sizing: border-box;
    /* width:150px; */
    margin: 15px;
    border: 5px dotted lightskyblue;
    padding: 10px;
  }
</style>

<a href="?album=1">美食</a>
<a href="?album=2">旅遊</a>
<a href="?album=3">寵物</a>
<hr>
<?php
include_once "base.php";

if(!empty($_GET['album'])){
    $album=['album'=>$_GET['album']];
}else{
    $album=[];
}


$images=all("file_info",$album);

foreach($images as $img){
    echo "<div class='frame'><img src='".$img['filename']."'></div>";
}


?>

