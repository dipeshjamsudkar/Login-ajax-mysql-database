<?php
session_start();
if(isset($_POST['logout']))
{
 unset($_SESSION['email']);
}
?>

<html>
<body>
 <h2>Hi, Demo</h2>
 
 <a href="https://mahresult.rf.gd" >HSC RESULT </a>
 <br>
 </br>
 <form method='post'>
 
  <input type='submit' name='logout' value='Logout'>
 </form>
</body>
</html>