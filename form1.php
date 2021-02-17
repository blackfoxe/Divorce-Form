<?php
session_start(); // Session starts here.
?><!DOCTYPE HTML>
<html>
 <head>
 <title>Internship Test</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2>Divorce Form/h2>
 <span id="error">
 <?php
 if (!empty($_SESSION['error'])) {
 echo $_SESSION['error'];
 unset($_SESSION['error']);
 }
 ?>
 </span>
 <form action="form2.php" method="post">
 <label>Name :<span>*</span></label>
 <input name="name" type="text" placeholder="Ex-James Anderson" required>
 <label>State issued Divorced Id :<span>*</span></label>
 <input name="dv_id" type="text" placeholder="12345678" required>
 <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </form>
 </div>
 </div>
 </body>
</html>