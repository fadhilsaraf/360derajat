<?php
	session_start();
	include("configupload.php");
	if (empty($_SESSION["username"])){
		header ('location:login.php');
	}else{
	$username=$_SESSION["username"];
	$title=$_POST["title"];
	$caption=$_POST['caption'];
	$fileName = $_FILES['gambar']['name'];
	$link = mysql_connect($host, $user, $pass)
	or die ("Could not connect to mysql because ".mysql_error());
	mysql_select_db($database)
	or die ("Could not select database because ".mysql_error());
		// Simpan ke Database
		$sql = "insert into $table (judul, username, file, caption) values ('$title', '$username', '$fileName','$caption')";
		$sql = "insert into $table (gambar, judul, caption, username) values ('$fileName', '$title','$caption','$username')";
		mysql_query ($sql)
		or die("Could not insert data because ".mysql_error());
		// Simpan di Folder Gambar
		move_uploaded_file($_FILES['gambar']['tmp_name'], "gambar/".$_FILES['gambar']['name']);
		//echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";	
		header ('location:index.php');
	}
?>
 