<?php

require_once ("connect.php");
error_reporting(0);



if (isset($_POST['un']) and isset($_POST['pw'])){

$username = $_POST['un'];
$password = $_POST['pw'];
$password = md5($password);

$query = "SELECT * FROM `login` WHERE username='$username' and password='$password' AND role='user'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
 $username=$_POST['un'];
 $_SESSION['hello']=$_POST['un'];
header('Location:reg.php');
}
else{
$_SESSION['no']="Invalid username and password<br>if you do not have an account sign up with us or<br>Try again!!!!";
header('Location:  sin.php');
}}
if (isset($_POST['un']) and isset($_POST['pw'])){
$username = $_POST['un'];
$password = $_POST['pw'];
$password = md5($password);

$query = "SELECT * FROM `login` WHERE username='$username' and password='$password' AND role='ADMIN'";

$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['un'] = $username;


header('location:admin.php');
}}
if (isset($_SESSION['un'])){
$username = $_SESSION['un'];
}else{
}
