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
							<li class="breadcrumb-item">Registration </li>
						</ol>
					</nav>
				</div> <div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<div class="page_details imp-dates-tbl" style="overflow-x:hidden">
	
		<h1 align="center">Registration</h1>
		<div class="hdg-bdr"><span class="hdg-bdr-1"></span><span class="hdg-bdr-2"></span><span class="hdg-bdr-3"></span></div>
	<div class="containe" style="width:100vw; height:15vh"><h2 style="text-align:center">Coming Soon...</h2></div>
		<!-- <div class="container">
			<div class="row">
			
				<div class="col-md-12">					
						
					<h2>College Account Details</h2>
					<div class="table-responsive">
						<table class="table table-bordered table-responsive">
							<tbody>
								<tr>
									<td>
										Name 
									</td>
									<td>
										<span>S.B.PATIL COLLEGE OF ARCHITECTURE & DESIGN</span>
									</td>
								</tr>
								<tr>
									<td>
										Bank Name
									</td>
									<td>
										<span>INDIAN OVERSEAS BANK, Branch - NIGDI Pune</span>
									</td>	
								</tr>
								<tr>
									<td>
										Account No.
									</td>
									<td>
										<span>169401000006801</span>
									</td>	
								</tr>
								<tr>
									<td>
										IFSC Code
									</td>
									<td>
										<span>IOBA0001694</span>
									</td>	
								</tr>
							</tbody>
						</table>
					</div> <br>

					<h2>Registration Fees for International Conference</h2>
					<div class="table-responsive">
						<table class="table table-bordered table-responsive">
							<tbody>
								<tr>
									<td width="50%">
										Category 
									</td>
									<td>
										<span></span>
									</td>
								</tr>
								<tr>
									<td>
										Authors (Professionals and Academicians)
									</td>
									<td>
										<span>2600 Rs</span>
									</td>	
								</tr>
								<tr>
									<td>
										Authors (Students of 5th Year B.Arch, M.Arch, PhD Scholers)
									</td>
									<td>
										<span>2000 Rs</span>
									</td>	
								</tr>
								<tr>
									<td>
										Uinternational Authors
									</td>
									<td>
										<span>$40</span>
									</td>	
								</tr>
								<tr>
									<td>
										Attendees
									</td>
									<td>
										<span>1300 Rs</span>
									</td>	
								</tr>
							</tbody>
						</table>
					</div>

				</div>
				
			</div>
		</div>
	 -->
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