<style>
  img{
    width:100%;
    box-shadow: 0px 0px 10px lightskyblue;
  }
  
  .frame{
    display:inline-block;
    box-sizing: border-box;
    width:150px;
    margin: 15px;
    border: 5px dotted lightskyblue;
    padding: 10px;
  }
</style>

<?php
include_once "base.php";

$images=all('file_info');

foreach($images as $img){
  echo "<div class='frame'><img src='".$img['path']."'></div>";
}


?>