<?php
require_once("connect.php");

include('login.php');


 error_reporting(0);

$nam=$_POST['fno'];
$last=$_POST['lno'];
$addr=$_POST['addr'];
$mem=$_POST['bno'];
$nick=$_POST['note'];
$email=$_POST['rno'];
$tele=$_POST['tno'];
$tel=$_POST['option'];
$eml=$_POST['email'];
 
$nam=$_POST['fno'];
$last=$_POST['lno'];
$father=$_POST['fnno'];
$lnam=$_POST['flno'];
$mfirst=$_POST['mfo'];
$mlast=$_POST['mlo'];
$addrs=$_POST['address'];
$meml=$_POST['to'];
$fo=$_POST['fo'];
$mo=$_POST['mo'];
$occupation=$_POST['py'];


$sqli="INSERT INTO students (fname,lname,dob,religion,note,address,sty,tele,email) VALUES('$_POST[fno]','$_POST[lno]','$_POST[bno]','$_POST[rno]','$_POST[note]','$addr','$_POST[option]','$_POST[tno]','$_POST[email]')";
mysqli_query($connection,$sqli);


$sql="INSERT INTO parents (fn,fl,mn,ml,addr,top,fo,mo,py,studentname) VALUES('$_POST[fnno]','$_POST[flno]','$_POST[mfo]','$_POST[mlo]','$_POST[address]','$_POST[to]','$_POST[fo]','$_POST[mo]','$_POST[py]','$_POST[lno] $_POST[fno]')";
mysqli_query($connection,$sql);

if(isset($_POST['py'])<1){
  $sqs="INSERT INTO payment(nos,pym,status) values ('$_POST[fno] $_POST[lno]','$_POST[py]','not paid')";
  mysqli_query($connection,$sqs);

}else{$sq="INSERT INTO payment(nos,pym,status) values ('$_POST[fno] $_POST[lno]','$_POST[py]',' paid')";
mysqli_query($connection,$sq);
}


        ?>
