<?php


require_once("connect.php");
$username=$_POST['un'];
$password=($_POST['pw']);
 $password = md5($password);


$SEARCH="SELECT * FROM login  where username='$username'  ";




$result = mysqli_query($connection, $SEARCH) ;
if(mysqli_num_rows($result)>0){
$_SESSION['nin'] = "sorry but username $username is taken....try again !!!";
header('location:sign up.php');

}else{
//3.1.2 If the posted values are equal to the database values, then session will be created for the user.

$sql="INSERT INTO login (username,password,role) values ('$username','$password','user')";
$verify=mysqli_query($connection,$sql);

$_SESSION['hello']="$username";

$sql="SELECT * FROM login WHERE username ='$username'  LIMIT 1";
  $result = mysqli_query($connection, $sql);
  $user = mysqli_fetch_assoc($result);}

 ?>
