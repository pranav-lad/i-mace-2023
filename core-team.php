<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>International Conference 2023 | i-MACE Core Team</title>

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
							<li class="breadcrumb-item">CORE TEAM</li>
						</ol>
					</nav>
				</div> <div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<div class="page_details">
	
		<h1 align="center">CORE TEAM</h1>
		<div class="hdg-bdr"><span class="hdg-bdr-1"></span><span class="hdg-bdr-2"></span><span class="hdg-bdr-3"></span></div>
	
		<div class="container">
			<div class="row">
				
				<div class="col-xs-12 col-sm-6 col-md-4 adv-board"> 						
					<div class="inner-box">

                        <div class="image-box">
                            <figure class="image"><img src="images/core-team/dr-mahendra-sonawane.png" class="img-responsive" alt="CORE TEAM"></figure> 
                        </div>

                        <div class="info-box">
                            <h4 class="name"> DR. MAHENDRA SONAWANE</h4>
                            <span class="designation">PRINCIPAL</span>
                        </div>

                    </div>					
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 adv-board"> 						
					<div class="inner-box">

                        <div class="image-box">
                            <figure class="image"><img src="images/core-team/ar-shashwati-singhal.jpg" class="img-responsive" alt="CORE TEAM"></figure> 
                        </div>

                        <div class="info-box">
                            <h4 class="name"> AR. SHASHWATI SINHAL  </h4>
                            <span class="designation">CONVENOR</span>
                        </div>

                    </div>					
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 adv-board"> 						
					<div class="inner-box">

                        <div class="image-box">
                            <figure class="image"><img src="images/core-team/ar-ruturaj-kulkarni.jpg" class="img-responsive" alt="CORE TEAM"></figure> 
                        </div>

                        <div class="info-box">
                            <h4 class="name"> AR. RUTURAJ KULKARNI </h4>
                            <span class="designation">CO-CONVENOR</span>
                        </div>

                    </div>					
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4 adv-board"> 						
					<div class="inner-box">

                        <div class="image-box">
                            <figure class="image"><img src="images/core-team/ar-tanvi-ganorkar.jpg" class="img-responsive" alt="CORE TEAM"></figure> 
                        </div>

                        <div class="info-box">
                            <h4 class="name"> AR. TANVI GANORKAR </h4>
                            <span class="designation">CO-CONVENOR</span>
                        </div>

                    </div>					
				</div>
				
			</div>
		</div>
		
		
	
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