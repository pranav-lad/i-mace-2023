	
	<?php $pagename = basename($_SERVER['PHP_SELF']);
	$serverpath = "localhost/aperp/";
	?>
	
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
<div class="section-header">
		<div class="continer" style="width:100%">
			<div class="ow d-flex justify-item-space-around align-item-stretch" style="width:100%">
				<div style="margin-top:auto" class="col-sm-3 col-md-2 col-lg-2 logo pr-0" style="height:display:flex; justify-content:center; align-items: center;">
					<a href="http://pccoepune.com"><center>
						<img src="images/logo3.png"  width="155px" class="img-responsive" style="margin-top:10px" alt="Pccoe Logo">
						<!-- <h2  style="font-family: Monotype Corsiva; font-size:35px; margin-top:20px; letter-spacing:1.5px;">i-Mace<br>2023</h2> -->
						<!-- <span style="font-family: Monotype Corsiva; font-size:35px; margin-top:20px; letter-spacing:1.5px;">i-Mace</span> -->
					</center></a>
				</div>
				<div class="heder col-sm-6 col-md-8 col-lg-8" style="" align="center">
                <style>
                    @media only screen and (max-width: 500px){
                        .heder{
                            width:100%;
                        }
                    }
                </style>
					<div style="width:100%">
						<span class="span0" style="line-height: 35px">  PIMPRI CHINCHWAD EDUCATION TRUST's </span><br>
						<span class="span2" style="line-height: 35px"> PIMPRI CHINCHWAD COLLEGE OF ENGINEERING </span>
						<p style="font-size:13px">NBA Accredited | NAAC Accredited with 'A' Grade | An Autonomous Institute | AICTE Approved | ISO 9001: 2015 Certified | Permanently Affiliated to SPPU, Pune</p>
						<div>
						<span class="span0" style="font-size:20px; padding:20px 0px;"><i>2 <sup>nd</sup> International Conference On</i></span>
					</div>
						<span class="span2" style="line-height: 35px"> Innovation In Mechanical And Civil Engineering </span><br>
						<span class="spanx" style=""> Conference Theme: “GREEN & SMART Systems” </span>
						<style>
							.spanx{
								color: #036605;
								line-height: 35px;
								font-weight: 530;
								font-size: 17px;
								background: #d0eed0;
								padding: 4px 10px;
							}
						</style>
						<!-- <br><span style="font-family: Monotype Corsiva; font-size:35px; margin-top:20px; letter-spacing:1.5px;">i-Mace 2023</span> -->
					</div>
				</div>
				<div class="col-sm-3 col-md-2 col-lg-2 logo pl-0" >
					<a href="http://pccoepune.com"><center><img style="margin-top:auto" src="http://mechanical.pccoepune.com/vender/img/pccoe_social_icons/pccoe-logo-new.png" class="img-responsive" width="150px" alt="PCET Trust Logo"></center></a>
				</div> 
				<!-- <div class="clearfix"></div> -->
			</div>
		</div>
	</div> 
<!-- <div class="wmh-mlr-90">
	<div class="wmh-full-wdt">

		<div class="wmh-wdt-12">
			<div class="wmh-plr-15 wmh-logo">
				<a href="http://www.pccoepune.com/"><img alt="PCCOE LOGO" class="wmh-img-rsp" src="vender/img/pccoe_social_icons/pccoe-logo-new.png"></a>
			</div>
		</div>

		<div class="wmh-wdt-76">
			<div style="wmh-plr-15">
				<div class="wmh_header1" align="center">PIMPRI CHINCHWAD EDUCATION TRUST's</div>
				<div class="wmh_header2" align="center">PIMPRI CHINCHWAD COLLEGE OF ENGINEERING</div>                				
				<div class="wmh_para">
					<i><span><strong>NBA</strong> Accredited</span> | <span><strong>NAAC</strong> Accredited with <strong>'A'</strong> Grade</span> | <span>An <strong>Autonomous</strong> Institute</span> | <span><strong>AICTE</strong> Approved</span> | <span><strong>ISO 9001: 2015</strong> Certified</span> | <span>Permanently Affiliated to <strong>SPPU</strong>, Pune</span></i>
				</div> 
			</div>
		</div>

		<div class="wmh-wdt-12">
			<div class="wmh-plr-15 wmh-logo">
				<a href="http://pcet.org.in/" target="_blank"><img src="vender/img/pccoe_social_icons/pcet-trust-logo-new.png" class="wmh-img-rsp" alt="PCET TRUST LOGO"></a>
			</div>
		</div>

	</div> <div class="wmh-cleardiv"></div>
</div> -->

<div class="menu-strip">
		<div class="container" style="display: flex; justify-content: center;overflow:hidden; width:99vw">
			<div class="row">
				<div class="col-md-12 col-lg-12 mbl_nopadd" style="padding:0;">
					<nav id='cssmenu'>					
						<div id="head-mobile"></div>
						<div class="button"></div>
						<ul>
							<li <?php if ($pagename == "index.php") echo 'class="active"'; ?>><a href='index.php'>HOME</a></li>
							<li <?php if ($pagename == "about.php") echo 'class="active"'; ?>><a href='about.php'>ABOUT US</a>
							   <ul>
									<!-- <li><a href="about.php#section1">ABOUT PCET</a></li>
									<li><a href="about.php#section2">ABOUT SBPCOAD</a></li> -->
									 <!--ul>
										<li><a href='#'>Sub Product</a></li>
										<li><a href='#'>Sub Product</a></li>
									 </ul-->
							   </ul>
							</li>	
							<li <?php if ($pagename == "conference-track.php") echo 'class="active"'; ?>><a href='conference-track.php'>Conference Track</a>
							   <ul>
									<!-- <li><a href="aperp.php#section1">PREAMBLE</a></li>
									<li><a href="aperp.php#section2">THEMES</a></li>
									<li><a href="aperp.php#section3">CALL FOR ABSTRACTS</a></li>
									<li><a href="aperp.php#section4">IMPORTANT DATES</a></li> -->
							   </ul>
							</li>
							<li <?php if ($pagename == "patron-publication.php") echo 'class="active"'; ?>><a href='patron-publication.php'>PATRONS & PUBLICATION PARTNERS</a></li>
							<li <?php if ($pagename == "registration.php") echo 'class="active"'; ?>><a href='registration.php'>Registration</a></li>
							<li <?php if ($pagename == "org-comittee.php") echo 'class="active"'; ?>><a href='org-comittee.php'>Organizing Comittee</a></li>
							<li <?php if ($pagename == "gallery.php") echo 'class="active"'; ?>><a href='gallery.php'>Gallery</a></li>
							<li <?php if ($pagename == "contact.php") echo 'class="active"'; ?>><a href="contact.php">CONTACT</a></li>
							<li <?php if ($pagename == "index1.php") echo 'class="active"'; ?>><a href="old/index1.html" style="padding:11px"><span style="font-size:9px;text-align:center; font-weight300px; width:30px"><p style="margin:0">Previous Conference </span><br><span style="font-size:14px">i-Mace 2022</span></p></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	
	<!-- <div class="menu-strip">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12 mbl_nopadd">
					<nav id='cssmenu' style="font-size:15px;">					
						<div id="head-mobile"></div>
						<div class="button"></div>
						<ul>
							<li <?php if ($pagename == "index.php") echo 'class="active"'; ?>><a href='index.php'>HOME</a></li>
							<li <?php if ($pagename == "about.php") echo 'class="active"'; ?>><a href='about.php'>ABOUT US</a>
							   <ul>
									<li><a href="about.php#section1">ABOUT PCET</a></li>
									<li><a href="about.php#section2">ABOUT i-Mace</a></li>
							   </ul>
							</li>	
							<li <?php if ($pagename == "aperp.php") echo 'class="active"'; ?>><a href='aperp.php'>Conference Tracks</a>
							</li>
							<li <?php if ($pagename == "patrons-and-knowledge-partners.php") echo 'class="active"'; ?>><a href='patrons-and-knowledge-partners.php'>Patrons & Publication Partners</a></li>
							<li <?php if ($pagename == "advisory-board.php") echo 'class="active"'; ?>><a href='advisory-board.php'>Speakers</a></li>
							<li <?php if ($pagename == "core-team.php") echo 'class="active"'; ?>><a href='core-team.php'>Organizing Comittee</a></li>
							<li <?php if ($pagename == "registration.php") echo 'class="active"'; ?>><a href='registration.php'>Registration</a></li>
							<li <?php if ($pagename == "contact.php") echo 'class="active"'; ?>><a href="contact.php">Contact Us</a></li>
							<li <?php if ($pagename == "contact.php") echo 'class="active"'; ?>><a href="contact.php">Gallery</a></li>
							<li <?php if ($pagename == "contact.php") echo 'class="active"'; ?>><a href="contact.php">Previous Proceedings</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div> -->
	
	<div class="section-spotlight">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-2 col-md-1 col-lg-1 nopadding">
					<div class="spotlight-txt">
						<span class=""><a href="#">spotlight:</a></span>
					</div>
				</div>
				<div class="col-sm-10 col-md-11 col-lg-11">
					<marquee class="m-tb-5">
						
						<a><i class="fas fa-cog fa-spin"></i> <strong>2<sup>nd</sup> International Conference On

Innovation In Mechanical And Civil Engineering</strong></a>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						
					</marquee>
				</div>
			</div>
		</div>
	</div>