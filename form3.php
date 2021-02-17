<?php
session_start();
if(isset($_POST['dob'])||isset($_POST['nationality']))
{
    foreach ($_POST as $key => $value) {
        $_SESSION['post'][$key] = $value;
        }
}
else{
    header("location: from1.php"); 
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
 <h2><?php echo($_SESSION['post']['name']);?></h2><hr/>
 <span id="error">
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