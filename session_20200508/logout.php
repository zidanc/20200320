<?php

  // setcookie("id",$_SESSION['id'],time()-1);
  // setcookie("status","true",time()-1);
  session_start();
  unset($_SESSION['id']);
  unset($_SESSION['status']);

  header("location:login.php");
?>