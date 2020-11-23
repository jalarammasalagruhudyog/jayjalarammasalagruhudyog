<?php


	if(isset($_POST['logout']))
	{
		session_start();
		session_unset();
		session_destroy();
		header("location:index.html?Successfullyloggedout");
	}
	else{
		session_start();
		session_unset();
		session_destroy();
		header("location:index.html?Successfullyloggedout");
	}
?>
