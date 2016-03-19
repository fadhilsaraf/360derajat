<?php
	session_start();
	include("config.php");
	if (empty($_SESSION["username"])){
		header ('location:login.php');
	}if else (empty($_SESSION["foto"]){
		header ('location :index.php');
	}
	else
	$username=$_SESSION["username"];
	$fotoid=$_SESSION["foto"];
	$komentar=$_POST['komentar'];
	
	$link = mysql_connect($host, $user, $pass)
		or die ("Could not connect to mysql because ".mysql_error());
		mysql_select_db($database)
		or die ("Could not select database because ".mysql_error());
		$sql= mysql_query("SELECT * FROM $table WHERE fotoid LIKE $fotoid")
		or die ("Could not select table because ".mysql_error());
		while ($data = mysql_fetch_array($sql)){
		echo $data['username'];
		echo $data['komentar'];	
		}
?> 