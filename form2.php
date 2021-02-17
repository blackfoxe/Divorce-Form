<?php
session_start(); 
foreach ($_POST as $key => $value) {
    $_SESSION['post'][$key] = $value;
    }
?>

<!DOCTYPE HTML>
<html>
 <head>
 <title>Divorce</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2></h2><hr/>
 <span id="error">
<?php
// To show error of page 2.
if (!empty($_SESSION['error_page2'])) {
 echo $_SESSION['error_page2'];
 unset($_SESSION['error_page2']);
}
?>
 </span>
 <form action="form3.php" method="post">
 <label>Date of Birth :<span>*</span></label>
 <input name="dob" id="dob" type="text" value="" placeholder="DD/MM/YY" >
 <label>Nationality :<span>*</span></label><br />
 <input name="nationality" id="nationality" type="text" value="" >
  <input type="reset" value="Reset" />
 <input type="submit" value="Next" />
 </form>
 </div>
 </div>
 </body>
</html>