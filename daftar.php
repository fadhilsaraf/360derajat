<?php
	include("configuser.php");
	$username=$_POST['username'];
	$name=$_POST['name'];
	$pengacak="abcdrplpusing";
	$password2=md5(($_POST['repassword']),$pengacak);
	$password=md5(($_POST['password']),$pengacak);	
	$email=$_POST['email'];
		if($password2==$password){
			if(ereg("^.+@.+\\..+$", $email)){
				$link = mysql_connect($host, $user, $pass)
				or die ("Could not connect to mysql because ".mysql_error());
				mysql_select_db($database)
				or die ("Could not select database because ".mysql_error());
				// cek kesamaan username
				$check = "SELECT username FROM $table";
				$qry = mysql_query($check) or die ("Could not match data because ".mysql_error());
				$num_rows = mysql_num_rows($qry);
					if ($num_rows >=100) {
						setcookie("aksi", "username udah ada", time()+1);
						header('location:signup.php');
					} else { // masukkan data
						$insert = "insert into $table (username,nama, password,email)
						values ('$username','$name', '$password2','$email')";
						mysql_query ($insert)
						or die("Could not insert data because ".mysql_error());
						setcookie("aksi", "kedaftar", time()+1);
						header('location:login.php');
					}
			}else{
				//salah email
				setcookie("aksi", "email salah", time()+1);
				header('location:signup.php');
			}
		}else{
			//gak sama
			setcookie("aksi", "pasword gak sama", time()+1);
			header('location:signup.php');
		}
	
?> 