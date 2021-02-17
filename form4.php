<!DOCTYPE HTML>
<html>
 <head>
 <title>Divorce</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <?php
 session_start();
 foreach ($_POST as $key => $value) {
 $_SESSION['post'][$key] = $value;
 } 
 extract($_SESSION['post']); // Function to extract array.
 $connection = mysql_connect("localhost", "root", "");
 $db = mysql_select_db("divorce", $connection); // Storing values in database.
 $query = mysql_query("insert into detail (
     name,dv_id,dob,nationality,marital,qualification) 
     values('$name','$dv_id','$dob','$nationality','$mst','$qualification')", $connection);
 if ($query) {
 echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
 } else {
 echo '<p><span>Form Submission Failed..!!</span></p>';
 header("location: from1.php"); 
 } 
 unset($_SESSION['post']); // Destroying session 
 ?>
 </div>
 </div>
 </body>
</html>