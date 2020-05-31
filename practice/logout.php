<?php

  setcookie("id",$_COOKIE['id'],time()-1);
  setcookie("status","true",time()-1);
  header("location:login.php");


?>