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
		
		<div id="templatemo-blog">
            <div class="container">
                <div class="row">
                    <div class="templatemo-line-header" style="margin-top: 0px;" >
                        <div class="text-center">
                            <hr class="team_hr team_hr_left hr_gray"/><span class="span_blog txt_darkgrey">ARTICLES</span>
                            <hr class="team_hr team_hr_right hr_gray" />
                        </div>
                    </div>
                    <br class="clearfix"/>
                </div>
                        <div>
        						<link rel="stylesheet" href="komentar_files/formoid1/formoid-solid-orange.css" type="text/css" />
        						<script type="text/javascript" src="komentar_files/formoid1/jquery.min.js"></script>
        						<form class="formoid-solid-orange" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;max-width:1080px;min-width:150px" method="post">
								
        							<div class="title"><h2><?php
									include ("coba.php");
									echo $data['gambar'];
									echo " BY ";
									echo $data['username'];
									?></h2></div>
        							<div class="element-textarea">
									<img class="img-responsive" src="gambar/<?php echo $_SESSION["foto"];?> " align="right" width="" height=""  alt="cv" />
									<label class="title"></label>
        								<div class="item-cont">
										<br></br>
        									<textarea class="medium" name="textarea" cols="20" rows="5" placeholder="Komentar"></textarea>
        									<span class="icon-place"></span>
        								</div>
        							</div>
        							<div class="submit"><input type="submit" value="Submit"/></div>
        						</form>
        						<p class="frmd"></p>
        						<script type="text/javascript" src="komentar_files/formoid1/formoid-solid-orange.js"></script>
                        </div>     
			</div>  
		</div> 
					
			


        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js"  type="text/javascript"></script>
        <script src="js/stickUp.min.js"  type="text/javascript"></script>
        <script src="js/colorbox/jquery.colorbox-min.js"  type="text/javascript"></script>
        <script src="js/templatemo_script.js"  type="text/javascript"></script>
    </body>
</html>