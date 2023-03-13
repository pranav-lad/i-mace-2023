<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>APERP - International Conference 2023 | SBPCOAD</title>

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
							<li class="breadcrumb-item">APERP</li>
						</ol>
					</nav>
				</div> <div class="clearfix"></div>
			</div>
		</div>
	</div>
	
	<div class="page_details">
	
		<h1 align="center">APERP</h1>
		<div class="hdg-bdr"><span class="hdg-bdr-1"></span><span class="hdg-bdr-2"></span><span class="hdg-bdr-3"></span></div>
	
		<div id="section1">
			<div class="container">
				<div class="row">
				
					<div class="col-md-12">
						
						<h2>PREAMBLE</h2>
						<p align="justify">The built environment around us is fast changing and becoming a multidisciplinary effort. Architects must work collaboratively with other allied professions, such as engineers, environmental professionals, conservationists, IT professionals, procurement specialists, landscape designers, etc. </p>

						<p align="justify">In addition, the future of the built environment is moving towards smart cities, which is changing the scope of the architecture profession. </p>

						<p align="justify">The feedback from all these professionals should inform the architectural pedagogy.
						This conference attempts to bring together these diverse streams of professionals and their accumulated knowledge to inform the future of architecture education and research.</p>
						
						</div>

				</div>
			</div>
		</div>					
						
		<div id="section2">
			<div class="container">
				<div class="row">
				
					<div class="col-md-12">					
						
						<h2>THEMES (not limited to)</h2>
						<p align="justify"><strong>1. CHALLENGES AND OPPORTUNITIES IN ARCHITECTURE EDUCATION, PROFESSION & RESEARCH</strong> <br>
						Pedagogy in architecture, Online teaching system and tactics ,Financial management In architectural practice, Office management, Skill development, Entrepreneurship, Overlap between architecture &  Mechanical engineering in designing building services, The role of education in teaching the importance of conservation &revitalizing environments etc. </p>

						<p align="justify"><strong>2. ENVIROMNENT & ENERGY CRISIS (challenges, issues & possibilities)</strong> <br>
						Challenges, issues & possibilities, Climate responsive Vernacular architecture, Sustainable material in construction, Water conservation, Landscape and environmental planning & design, Smart cities, Climate responsive modern architecture, ECBC, GRIHA, LEED etc. </p>

						<p align="justify"><strong>3. THEORY AND PRACTICE IN ARCHITECTURE, RESEARCH, PLANNING AND DESIGN POLICIES</strong> <br>
						Site & campus planning, Role of rules(policies, theories) in architectural design, Universal design, Disaster management, Smart cities, Construction management, Maintaining professional ethics in architecture, Importance of RERA for construction managers etc.</p>

						
					</div>

				</div>
			</div>
		</div>
		
		<div id="section3">
			<div class="container">
				<div class="row">
				
					<div class="col-md-12">					
						
						<h2>CALL FOR ABSTRACTS</h2>
						<h4>Last Date - 28TH  FEBRUARY 2023</h4>
						<p><b>Call for PAPERS / POSTER presentation:</b> Submissions of abstract are invited on any of the given themes and related areas. The <b>abstract should not exceed 250 words</b>. The <b>Font name</b>: Times new roman; <b>Font size</b>: 12, <b>Line spacing</b>: 1.5; <b>Margin</b>: 1’’ on all sides on A4 paper. <b>Keywords</b>: 3-5 should be given below the abstract in italic. The abstract should be sent in MS word format to the following email id: <a href="mailto:conference2023@sbpatilarchitecture.com"><span>conference2023@sbpatilarchitecture.com</span></a></p>
						
					</div>

				</div>
			</div>
		</div>
		
		<div class="imp-dates-tbl" id="section4">
			<div class="container">
				<div class="row">
				
					<div class="col-md-12">					
						
						<h2>IMPORTANT DATES</h2>
						<div class="table-responsive">
							<table class="table table-bordered table-responsive">
								<tbody>
									<tr>
										<td>
											Call for Abstracts
										</td>
										<td>
											 <span>28<sup>th</sup> FEBRUARY 2023</span>
										</td>
									</tr>
									<tr>
										<td>
											Full Paper Submission
										</td>
										<td>
											<span>1<sup>st</sup> APRIL 2023</span>
										</td>	
									</tr>
									<tr>
										<td>
											 Conference Date 
										</td>
										<td>
											<span>17<sup>th</sup> to 18<sup>th</sup> JULY  2023</span>
										</td>	
									</tr>
								</tbody>
							</table>
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