<!DOCTYPE html>
<html lang="en">
    <head>
        <title>360derajat</title>
        <meta name="keywords" content="" />
		<meta name="description" content="" />

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="style.css" />
		<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
		<style>
		body{
		background-color:grey;
		font-family: 'Oleo Script', cursive;
		}
		</style>
    </head>
    
    <body>
        <div class="container" style="width:100%">
                <!-- Static navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                                <a href="index.html" class="navbar-brand"><img src="images/logo.png" alt="360Derajat template" title="360Derajat Template" width="30%"/></a>
                        </div>
                        <div class="navbar-collapse collapse" id="templatemo-nav-bar">
                            <ul class="nav navbar-nav navbar-right" style="margin-top: 30px;">
                                <li><a href="index.php">HOME</a></li>
                                <li class="active"><a href="upload1.php">UPLOAD</a></li>
								<li><a href="<?php session_start(); if (!empty($_SESSION["username"])){
								echo "logout.php";
								}					
								else{
									echo "login.php";}
									?>">
							<?php 
							if(!empty($_SESSION["username"])){
								echo"LOGOUT";
							}else {
								echo "LOGIN";
							}
							?></a> </li>
                            </ul>
						</div>
                        </div><!--/.nav-collapse -->
                    </div><!--/.container-fluid -->
                </div><!--/.navbar -->
        <div class="lg-container">
		<h1>UPLOAD NEW PHOTO</h1>
		<form action="upload.php" id="lg-form" name="lg-form" method="post" enctype="multipart/form-data">
		<div>
				<label for="username">Title:</label>	
				<input type="text" name="title" id="title" placeholder="Title" required />
			</div>
		<div>
			<label for="username">Caption:</label>	
			<input type="text" name="caption" id="caption" placeholder="Caption" required />
		</div>
		<input type="file" name="gambar" id="gambar"  required />
		<input type="submit" name="Submit" id="Submit" value="Upload" style="font-size:15px"/>
		</form>
	</div>
           
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>
    </body>
</html>