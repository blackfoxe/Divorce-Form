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
 extract($_SESSION['post']);
 $name=$_SESSION['post']['name'];
 $dv_id=$_SESSION['post']['dv_id'];
 $nationality=$_SESSION['post']['nationality'];
 $dob=$_SESSION['post']['dob'];
 $mst=$_SESSION['post']['mst'];
 $qualification=$_SESSION['post']['qualification'];// Function to extract array.
 echo($name.$dv_id.$nationality);
 $connection = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db( $connection,"divorce",); // Storing values in database.
 $query = mysqli_query($connection,"insert into detail (name,dv_id,dob,nationality,mst,qualification) values('$name','$dv_id','$dob','$nationality','$mst','$qualification')");
 if ($query) {
 echo '<p><span id="success">Form Submitted successfully..!!</span></p>';
 header("location:form1.php");
 } else {
 echo '<p><span>Form Submission Failed..!!</span></p>';

 } 
 unset($_SESSION['post']); // Destroying session 
 ?>
 </div>
 </div>
 </body>
</html>