
<html>
<head><title>christianburg_registration_form</title>
    <link rel="stylesheet" href="mark.css">
</head>


<body>
 <div>

<div id="header">
    <h1>WELCOME
       <?php
        require_once('login.php');
    echo "$username";echo $_SESSION['hello'];

    ?></h1>
</div>

<div id="content">

   <h1> <?php
require_once('process.php');
echo"$nam $last"
   ?>
an email will be sent to update you on approval into our school


    </h1>


</div>
   <div id="footer">
       <a href="logout.php">Sign out</a>
</div>
</div>

</body>

</html>
