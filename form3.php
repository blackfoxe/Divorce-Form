<?php
session_start();
foreach ($_POST as $key => $value) {
    $_SESSION['post'][$key] = $value;
    }
?>
<!DOCTYPE HTML>
<html>
 <head>
 <title>Divorce Form</title>
 <link rel="stylesheet" href="style.css" />
 </head>
 <body>
 <div class="container">
 <div class="main">
 <h2></h2><hr/>
 <span id="error">
 <?php
 if (!empty($_SESSION['error_page3'])) {
 echo $_SESSION['error_page3'];
 unset($_SESSION['error_page3']);
 }
 ?>
 </span>
 <form action="form4.php" method="post">
 <label>Marital Status :<span>*</span></label>
<select name="mst">
<option value="">----Select----</options>
<option value="fresher" value="">Divorced </options>
<option value="less" value="">Living Together </options>
</select>
 <lable>Highest qualification: </lable>
 <select name="qualification">
 <option value="">----Select----</options>
 <option value="graduation" value="">Graduation </options>
 <option value="postgraduation" value="">Post Graduation </options>
 <option value="other" value="">Other </options>
 </select>
 <input type="reset" value="Reset" />
 <input name="submit" type="submit" value="Submit" />
 </form>
 </div> 
 </div>
 </body>
</html>