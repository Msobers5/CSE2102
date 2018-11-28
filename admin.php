<html>
<head>
  <title>christianburg_registration_form</title>
<link rel="stylesheet" href="c.css">
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="stylef.css">
</head>
<body>
  <h1>Welcome <?php require_once('login.php');
echo "$username"?>
<a href="logout.php" id="h">LOGOUT</a>
</h1>
<div> <?php
require_once('connect.php');

if($_POST['create']){
$cret=$_POST['create'];
header('location:creates.php');
}elseif($_POST['view']){
$view=$_POST['view'];
header('location:vws.php');
}elseif($_POST['viewp']){
  $update=$_POST['viewp'];
  header('location:pyments.php');
}
elseif ($_POST['users']) {
  $users=$_POST['users'];
  header('location:users.php');
}elseif ($_POST['par']){
  $users=$_POST['par'];
  header('location:parents.php');

}else {
  // code...
}



?>
  <form action="admin.php" method="POST">
   <input name="create" type="submit" value="create student">
   <input name="view" type="submit" value="view students">
    <input name="viewp" type="submit" value="payments">
     <input name="par" type="submit" value="parents"> <input name="users" type="submit" value="users">


  </form></div>
</body>
</html>
