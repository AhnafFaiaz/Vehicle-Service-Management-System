<?php 
	
	require "../models/User.php";

	session_start();

	$list = getAll();

	$_SESSION['user_list'] = $list;

	header("../views/user_list.php");
?>