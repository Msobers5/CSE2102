<html><head>
  <meta charset="utf-8">
  <lang="en">
    <title>christianburg_registration_form</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="reg.css" />  <link rel="stylesheet" type="text/css" href="altre.css" />
</head>

<body>
  <h1>Welcome <?php require_once('login.php');

  echo "$username"; echo $_SESSION['hello'];?>
<a href="logout.php" id="h">LOGOUT</a>

<div id="mymodal" class="modal">
   <div class="modal-cont">
     <span class="close">&times;</span>
     <p><h2> Welcome to the registration page <br>register for our school here</h2></p>
   </div>

 </div>
 <script>
 var modal = document.getElementById('mymodal');
 var span = document.getElementsByClassName("close")[0];
 {
     modal.style.display = "block";
 }
 span.onclick = function() {
     modal.style.display = "none";
 }
 window.onclick = function(event) {
     if (event.target == modal) {
         modal.style.display = "none";
     }
 }
 </script>
</h1>
  <div class="wrapper2">
    <table class="Tablewrapper">
      <tr>
        <td>
          <img class="schoolimg" img src="CWSS.jpg" alt="ChristianBurgschool">
        </td>

        <td class="school">ChristianBurg Secondary School<br>
          <p>Motto:
        </td>


        <td class="Ministry">

          <p>Address: Wismar Linden<br>
            Principal:<br>
            Contact Number: +592 442-0813
            <br>
            Email:
            <a href="https://education.gov.gy/web/"> Ministry of Education </a>
            <br>
            <img class="guyanaimg" src="ministry.jpeg" alt="guyana_ministry_education">
        </td>
      </tr>
    </table>
  </div><br>


  <div id="Registrationform">
    ChristianBurg Wismar Secondary School Student Registration Form
  </div>



  <div id="wrapper" >
    <form id="student_registration" action="status.php"  method="post">
<div id="kl">
      <div id="Parentcontactinfo">
        Student Information<br><br>
      </div>


        <label for="Firstname">First-name:</label>
        <input id="Firstname"name="fno" type="text"><br><br>

        <label for="lastname">Last-name:</label>
        <input id="lastname"name="lno" type="text"><br><br>

        <label for="Dateofbirth">Date of Birth:</label>
        <input id="Dateofbirth" name="bno"type="date" max="1979-12-31"><br><br>

        <label for="TelephoneNo">TelephoneNo #:</label>
        <input id="Telephoneno"name="tno" type="number"><br><br>

        <label for="Religion">Religion:</label>
        <input id="Religion"name="rno" type="text"><br><br>

        <label for="Notes">Notes:</label>
      <input name="note" type="text" id="lastname"><br><br>

      <label>Address:</label>
          <input type="text" id="add" name="addr" placeholder="ADDRESS">
<br>
          <label for="email">Email:</label>
           <input id="Religion" name="email" type="text">
<h4>select student type</h4>
<select name="option">
  <option value="part time">Part time</option>
    <option value="full time">Full time</option>
  </select>
  <p>Registration fee:</p>
  <ul>
    <li>$50000</li>
  </ul>
</div>

<div id="ft">
  <div id="Parentcontactinfo">
    Parents Contact Information
  </div>
<h2>father</h2>
        <label for="Firstname">Firstname:</label>
        <input id="Firstname" name="fnno" type="text"><br><br>


        <label for="Lastname">Lastname:</label>
        <input id="fLast" name="flno" type="text">
<h2>mother</h2>
        <label for="mname">Firstname:</label>
        <input id="ml" name="mfo"type="text"><br><br>


        <label for="mLast">Lastname:</label>
        <input id="mLast" name="mlo" type="text"><br><br>

        <label>Address:</label>
            <input type="text"  name="address" placeholder="ADDRESS">
<br><br>

        <label for="TelephoneNo">TelephoneNo #:</label>
        <input id="Telephoneno" name="to" type="number"><br><br>

        <label for="Occupation">Father's Occupation:</label>
        <input id="Occupation" name="fo" type="text"><br>

        <label for="Occupation">Mother's occupation</label>
        <input id="mOccupation" name="mo" type="text"><br><br>
        <label for="Occupation">payment:</label>
        <input id="Occupation" name="py"type="number"><br><br>
</div>
        <input id="Submit" type="submit" value="Submit" method="post" >
      </form></div>
      <footer>CW</footer>
      </body>
      </html>
