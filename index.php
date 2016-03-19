<!DOCTYPE html>
<html lang="en">
    <head>
        <title>360Derajat</title>
        <meta name="keywords" content="" />
		<meta name="description" content="" />
		
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
        
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css'>

        <link href="js/colorbox/colorbox.css"  rel='stylesheet' type='text/css'>
        <link href="css/templatemo_style.css"  rel='stylesheet' type='text/css'>
		<style>
		div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}	

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}
		</style>
		
		
    </head>
    
    <body>

        
        
            <div class="container">
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
                                <li class="active"><a href="index.php">HOME</a></li>
                                <li><a href="upload1.php">UPLOAD</a></li>
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
            <!-- /container -->
        
        <div>
            <!-- Carousel -->
            <div id="templatemo-carousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#templatemo-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="1"></li>
                    <li data-target="#templatemo-carousel" data-slide-to="2"></li>
					<li data-target="#templatemo-carousel" data-slide-to="3"></li>
					<li data-target="#templatemo-carousel" data-slide-to="4"></li>
					<li data-target="#templatemo-carousel" data-slide-to="5"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>WELCOME TO 360Derajat</h1>
                                <p>CHOOSE THE ONE SUITABLE FOR YOU</p>                                
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="carousel-caption">
                              	<h1>CLIMBING</h1>
                                <p>Petualangan di Medan Vertikal.Panjat tebing merupakan salah satu olahraga yang populer saat ini</p>
                            </div>
                        </div>
                    </div>
					<div class="item">
                        <div class="container">
                            <div class="carousel-caption">
                              	<h1>PARALAYANG</h1>
                                <p>Merasakan sensasi terbang bersama burung burung dan mengetahui keindahan alam dari atas.</p>
                            </div>
                        </div>
                    </div>
					<div class="item">
                        <div class="container">
                            <div class="carousel-caption">
                              	<h1>DIVING</h1>
                                <p>Mengetahui kehidupan biota laut dan kawanannya ,anda bisa memilih paket wisata ini</p>
                            </div>
                        </div>
                    </div>
					<div class="item">
                        <div class="container">
                            <div class="carousel-caption">
                              	<h1>CAVING</h1>
                                <p>Pengalaman petualangan di kegelapan abadi di dalam perut bumi,dan temukan keajabannya</p>
                            </div>
                        </div>
                    </div>
					
                </div>
                <a class="left carousel-control" href="#templatemo-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#templatemo-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
            </div><!-- /#templatemo-carousel -->
        </div>
       
        <div class="templatemo-team" id="templatemo-about">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header">
                        <div class="text-center">
                            <hr class="team_hr team_hr_left"/><span>PHOTOS</span>
                            <hr class="team_hr team_hr_right" />
                        </div>
						<?php
						include('configupload.php');
						$link = mysql_connect($host, $user, $pass)
						or die ("Could not connect to mysql because ".mysql_error());
						mysql_select_db($database)
						or die ("Could not select database because ".mysql_error());
						$sql= mysql_query("SELECT * FROM $table")
						or die ("Could not select table because ".mysql_error());
						while ($data = mysql_fetch_array($sql)){
						//Tampilkan Gambar
								echo '<div class="img">';
								echo '<a target="_blank" href="lamanfoto.php">';				
								echo '<img src="gambar/'.$data["gambar"].'", width="300", height="200"> </a>';
								echo '<div class="desc" style="font-weight:bold;font-size:15px;font-family:cursive">'.$data['judul'].'</div>';
								echo '</div>>';
						}
						?>
                    </div>
                </div>
            </div>
        </div>

		
        <div class="templatemo-footer" >
            <div class="container">
                <div class="row">
                    <div class="text-center">
                        <div class="footer_bottom_content">
                       		Copyright © 2015 <text>Kelompok 9 360 DERAJAT</text>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>
		<!-- templatemo 395 O-CTAV -->
    </body>
</html>