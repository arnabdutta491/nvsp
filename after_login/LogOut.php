<?php
	session_start();
	session_destroy();
	header("location:../before_login/Login.html");
?>