<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>International Conference 2023 | i-MACE </title>
    <link href="old/assets/img/pccoe-logo.png" rel="icon">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
	<link rel="icon" href="images/.png" type="image/png">
	
	<!--Font Awesome Stylesheets -->
	<link href="css/all.min.css" rel="stylesheet">

    <style>
	
	</style>
	
  </head>
  <body>
  
	<?php include("header.php"); ?>
	
	<div class="inner-page-banner"></div>
	
	<div class="page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><i class="fa fa-home"></i><a href="index.php"> HOME</a></li>
							<li class="breadcrumb-item">Gallery </li>
						</ol>
					</nav>
				</div> <div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<div class="page_details imp-dates-tbl" style="overflow-x:hidden;">
	
		<h1 align="center">Gallery</h1>
		<div class="hdg-bdr"><span class="hdg-bdr-1"></span><span class="hdg-bdr-2"></span><span class="hdg-bdr-3"></span></div>

	<style>
		.row {
  display: flex;
  flex-wrap: wrap;
  padding:0 4px;
  justify-content: center;
  
}

/* Create four equal columns that sits next to each other */
.column {
  flex: 30%;
  max-width: 30%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
  width: 100%;
  height: 250px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
  .column {
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    flex: 100%;
    max-width: 100%;
  }
}
	</style>
	<div class="content-section" style="width: 100vw; display:flex; justify-content:center">
	<!-- ---------------------------------------------------- code --------------------------------------------- -->/
	<div class="row" style="padding-bottom: 50px">
  <div class="column">
    <img src="images/web/5.jpg">
    <img src="images/web/2.jpg">
    <!-- <img src="images/web/3.jpg"> -->
  </div>
  <div class="column">
    <img src="images/web/4.jpg">
    <img src="images/web/7.jpg">
    <!-- <img src="images/web/1.jpg"> -->
  </div>
  <div class="column">
    <img src="images/web/3.jpg">
    <img src="images/web/6.jpg">
    <!-- <img src="images/web/3.jpg"> -->
  </div>
</div>
	<!-- ---------------------------------------------------- code --------------------------------------------- -->
	</div>
	<?php include("footer.php"); ?>	
	
	<div class="clicktop">
        <a href="#" class="crunchify-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
	
	<!-- Countdown -->
	<script src="js/countdown.js"></script>
	
	<script>            
		jQuery(document).ready(function() {
		var offset = 220;
		var duration = 500;
		jQuery(window).scroll(function() {
		if (jQuery(this).scrollTop() > offset) {
		jQuery('.crunchify-top').fadeIn(duration);
		} else {
		jQuery('.crunchify-top').fadeOut(duration);
		}
		});
		 
		jQuery('.crunchify-top').click(function(event) {
		event.preventDefault();
		jQuery('html, body').animate({scrollTop: 0}, duration);
		return false;
		})
		});
	</script>
	
  </body>
</html>