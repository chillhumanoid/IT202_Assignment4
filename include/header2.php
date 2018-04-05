<?php
  session_start();
  if($_SESSION['eventCreated'] === FALSE){
    header('Location: ecpMain.php');
    exit;
  }
?>
