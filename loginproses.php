<?php
	session_start();
	include("configuser.php");
	$username=$_POST['username'];
	$pengacak="abcdrplpusing";
	$password=md5(($_POST['password']),$pengacak);
	$link = mysql_connect($host, $user, $pass)
	or die ("Could not connect to mysql because ".mysql_error());
	mysql_select_db($database)
	or die ("Could not select database because ".mysql_error());
	$match = "Select * from $table where username='$username' and password='$password'";
	$qry = mysql_query($match)
	or die ("Could not match data because ".mysql_error());
	$num_rows = mysql_num_rows($qry);
	if ($num_rows <= 0) {
		setcookie("aksi", "unlog", time()+1);
		echo"<script>alert('Login Gagal, periksa kembali password dan/atau username anda !');history.go(-1);</script>";	
		header('location:login.php');
	} else {
		$_SESSION["username"]=$username;
		echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";	
		header('location:index.php');

	}
?> 