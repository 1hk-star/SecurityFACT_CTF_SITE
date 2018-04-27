<?php
	include_once "./session.php";
	//header("Content-Type:application/json");

	unset($_SESSION['login_user']);

	
      echo("<script>location.replace('../index.php');</script>"); 
	

?>