
<link rel="stylesheet" href="c.css">
<link rel="stylesheet" href="cf.css">
<link rel="stylesheet" href="v.css">
 <h1 id="gt">Welcome <?php require_once('login.php');
echo "$username"?>
<a id="admin" href="admin.php" id="h">Admin</a>
<a href="logout.php" id="h">LOGOUT</a>
</h1><?php
require_once('f.php');


 ?><link rel="stylesheet" href="ga.css">
 <?php require_once('connect.php');
 	?><h1 id="gh">students</h1><?php require_once('connect.php');
?><div id="tom">
<table class="myTable" style="table-layout: fixed">
        <thead>

        <tr>
          <th>ID</th>
          <th>username </th>
          <th>Password</th>

		  <th>Role</th>
		  <th>view students</th>

		  <th>delete</th>

        </tr>
        </thead>

        <?php

        $view="select * from login";//select query for viewing users.
        $run=mysqli_query($connection,$view);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {



        ?>

        <tr>
<!--here showing results in the table --><td><?php echo $row['id'];  ?></td>
            <td><?php echo $row['username'];  ?></td>
            <td><?php echo $row['password'];  ?></td>
            <td><?php echo $row['role'];  ?></td>
 <td><a href="vws.php"><button >view students</button></a></td>


              <td>
              <a href="usd.php?del=<?php echo $row['id']; ?>"><button class="btn btn-danger">DELETE</button></a></td>
        </tr>

        <?php } ?>

    </table></div>
