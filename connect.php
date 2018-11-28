<?php
session_start();
$connection=Mysqli_connect('localhost','root','') or die ("error");
mysqli_select_db($connection,"register2");
error_reporting(0);
  ?>


  