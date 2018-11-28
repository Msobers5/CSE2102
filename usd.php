<?php
require_once('connect.php');
$delete_id=$_GET['del'];
$delete_query="delete  from login WHERE id='$delete_id'";//delete query
$run=mysqli_query($connection,$delete_query);
if($run)
{
//javascript function to open in the same window
    echo "<script>window.open('users.php?deleted=user has been deleted','_self')</script>";
}

?>
Related Keywords:
