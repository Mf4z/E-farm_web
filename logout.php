
<?php include("includes/functions.php");?> 
<?php

// 1.find session
session_start();
//2.unset  all the session variables

$_SESSION[]=array();
// 3. Destroy the session cookie

  if(isset($_COOKIE[session_name()])){
  	setcookie(session_name(),'', time()-4200,'/');



  }
  // 4. Destroy the session
  session_destroy();
  redirect_to("login.php?logout=1");

?>