
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
 	?><h1 id="gh">students</h1><div id="tom">
 <table class="myTable" style="table-layout: fixed">
         <thead>

         <tr>
           <th>ID</th>
           <th>first name</th>
           <th>Last name</th>

           <th>birthday</th>

           <th>address</th>

           <th>religion</th>
           <th>contact</th>
           <th >email</th>
           <th>note</th>
           <th>student type</th>

           <th>DELETE</th>

         </tr>
         </thead>

         <?php

         $view="select * from students";//select query for viewing users.
         $run=mysqli_query($connection,$view);//here run the sql query.

         while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
         {



         ?>

         <tr>
 <!--here showing results in the table --><td><?php echo $row['id'];  ?></td>
             <td><?php echo $row['fname'];  ?></td>
             <td><?php echo $row['lname'];  ?></td>
             <td><?php echo $row['dob'];  ?></td>


             <td><?php echo $row['address'];  ?></td>
             <td><?php echo $row['religion'];  ?></td>
 						<td><?php echo $row[' tele '];  ?></td>
             <td><?php echo $row['email'];  ?></td>
             <td><?php echo $row['note'];  ?></td>
              <td><?php echo $row['sty'];  ?></td>


             <td>
               <a href="ds.php?del=<?php echo $row['id']; ?>"><button class="btn btn-danger">DELETE</button></a></td>
         </tr>

         <?php } ?>

     </table></div>
