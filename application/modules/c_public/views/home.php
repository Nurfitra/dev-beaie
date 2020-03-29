<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Ari Rusmanto">
	<title>beaie.id - Responsive Landing Page</title>
	
	<!-- CSS -->
	<link href="<?=base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/animate.css');?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/style.css');?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/style-responsive.css');?>" rel="stylesheet">
	<link href="<?=base_url('assets/third/font-awesome/css/font-awesome.css');?>" rel="stylesheet">
	<link href="<?=base_url('assets/third/hovericon/css/component.css');?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	</head>
	
	<!-- BODY WITH DATA STYPE FOR SCROLLSPY -->
	<body class="tooltips" id="top" data-spy="scroll" data-target="#myScrollspy">
	
	<!-- START PAGE -->
	<div class="wrapper">
	
		<!-- 
		===========================================
		BEGIN HEADER SECTION
		===========================================
		-->
		<div id="header-landing">
			<!-- NAV MENU WRAPPER FOR FIXED POSITION -->
			<div id="nav-menu">
				<!-- NAV MENU CONTAINER -->
				<div class="container-fluid">
					<!-- LOGO -->
					<div id="logo">
						<img src="<?=base_url('assets/img/beaie.svg');?>" onclick="location.href='#" style="width: 80%;">
					</div><!-- /#logo -->
					<!-- END LOGO -->
					<!-- NAV MENU -->
					<div class="menus" id="myScrollspy">
						<ul class="nav scroll-nav">
							<li class="active"><a href="#top"><i class="fa fa-home"></i><span>Home</span></a></li>
							<li><a href="#aboutus"><i class="fa fa-laptop"></i><span>About</span></a></li>
							<li><a href="#services"><i class="fa fa-cog"></i><span>Services</span></a></li>
							<li><a href="#portfolio"><i class="fa fa-flask"></i><span>Portfolio</span></a></li>
							<li><a href="#contact"><i class="fa fa-envelope"></i><span>Contact</span></a></li>
						</ul>
					</div><!-- /.menus -->
					<!-- END NAV MENU -->
				</div><!-- /.container -->
				<!-- END NAV MENU CONTAINER -->
			</div><!-- /.nav-menu -->
			<!-- END NAV MENU FIXED POSITION -->
			
			<!-- HEADER SECTION CONTENT -->
			<div class="awesome-slogan">
				<div class="slogan">
					<h2>Hi, We Are <span style="color: #1DB6F0;">Beaie</span><br/>We Craft Your <span style="color: #1DB6F0;">Website</span></h2>
					<button class="btn btn-default">Contact Us</button>					
				</div>
                <img class="header-img" src="<?=base_url('assets/img/header1.svg');?>">
			</div><!-- /.awesome-slogan -->
			<!-- END HEADER SECTION CONTENT -->
		</div><!-- /.header-landing -->


		<!-- 
		===========================================
		END HEADER SECTION
		===========================================
		-->
		
		
		
		
		<!-- SEECTION THEME COLOR -->
		<div class="section-theme-landing"></div>
		<!-- END SECTION THEME COLOR -->
		
		
		
		
		<!-- 
		===========================================
		BEGIN ABOUT US SECTION
		===========================================
		-->
		<div class="section-page-landing section-light-grey" id="aboutus">
			<div class="inner-section">
				<div class="container">
					<!-- SECTION TITLE -->
					<h2 class="text-center">Who we are</h2>
					
					<!-- BEGIN FEATURES DESCRIPTION -->
					<?=$this->session->userdata('lang') == 'id' ? $profile->row('profile_id') : $profile->row('profile_en');?>
					<!-- END CALL TO ACTION -->
				</div><!-- /.container -->
			</div><!-- /.inner-section -->
		</div><!-- /.section-page-landing .section-light-grey -->
		<!-- 
		===========================================
		END HEADER SECTION
		===========================================
		-->
		
		
		
		
		<!-- 
		===========================================
		BEGIN SERVICES SECTION
		===========================================
		-->
		<div class="section-page-landing section-grey" id="services">
			<div class="inner-section">
				<div class="container">
					<!-- BEGIN HEADING SECTION -->
					<h2 class="text-center">Our Services</h2>
					<!-- END HEADING SECTION -->
					<!-- BEGIN SERVICES DESCRIPTION -->
					
					<div class="hi-icon-effect-1 hi-icon-effect-1a">
						<div class="row">
							<div class="col-sm-4">
								<div class="the-box-landing the-box-transparent text-center">
									<h4>IT CONSULTANT</h4>
									<a href="#fakelink" class="hi-icon hi-icon-screen">Web Design</a>

									<div class="testimonial-inner">
										<h5>&#34;
										Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
										&#34;</h5>
									</div><!-- /.testimonial-inner -->

								</div><!-- /.the-box-landing .the-box-transparent .text-center -->
							</div><!-- /.col-sm-3 -->
							<div class="col-sm-4">
								<div class="the-box-landing the-box-transparent text-center">
									<h4>WEB APPS</h4>
									<a href="#fakelink" class="hi-icon hi-icon-images">UI Design</a>
									<div class="testimonial-inner">
										<h5>&#34;
										Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
										&#34;</h5>
									</div><!-- /.testimonial-inner -->
								</div><!-- /.the-box-landing .the-box-transparent .text-center -->
							</div><!-- /.col-sm-3 -->
							<div class="col-sm-4">
								<div class="the-box-landing the-box-transparent text-center">
									<h4>MOBILE APPS</h4>
									<a href="#fakelink" class="hi-icon hi-icon-mobile">Mobile Apps</a>
									<div class="testimonial-inner">
										<h5>&#34;
										Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
										&#34;</h5>
									</div><!-- /.testimonial-inner -->
								</div><!-- /.the-box-landing .the-box-transparent .text-center -->
							</div><!-- /.col-sm-3 -->
						</div><!-- /.row -->
						<div class="row">
							<div class="col-sm-4">
								<div class="the-box-landing the-box-transparent text-center">
									<h4>SEO</h4>
									<a href="#fakelink" class="hi-icon hi-icon-screen">Web Design</a>
									<div class="testimonial-inner">
										<h5>&#34;
										Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
										&#34;</h5>
									</div><!-- /.testimonial-inner -->
								</div><!-- /.the-box-landing .the-box-transparent .text-center -->
							</div><!-- /.col-sm-3 -->
							<div class="col-sm-4">
								<div class="the-box-landing the-box-transparent text-center">
									<h4>IT INFRASTRUCTURE</h4>
									<a href="#fakelink" class="hi-icon hi-icon-images">UI Design</a>
									<div class="testimonial-inner">
										<h5>&#34;
										Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
										&#34;</h5>
									</div><!-- /.testimonial-inner -->
								</div><!-- /.the-box-landing .the-box-transparent .text-center -->
							</div><!-- /.col-sm-3 -->
							<div class="col-sm-4">
								<div class="the-box-landing the-box-transparent text-center">
									<h4>WEB HOSTING</h4>
									<a href="#fakelink" class="hi-icon hi-icon-archive">Web Hosting</a>
									<div class="testimonial-inner">
										<h5>&#34;
										Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
										&#34;</h5>
									</div><!-- /.testimonial-inner -->
								</div><!-- /.the-box-landing .the-box-transparent .text-center -->
							</div><!-- /.col-sm-3 -->
						</div><!-- /.row -->
						<div class="row">
							<div class="col-sm-3 col-sm-offset-3">
								<div class="the-box-landing the-box-transparent text-center">
									<h4>SEO</h4>
									<a href="#fakelink" class="hi-icon hi-icon-screen">Web Design</a>
									<div class="testimonial-inner">
										<h5>&#34;
										Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
										&#34;</h5>
									</div><!-- /.testimonial-inner -->
								</div><!-- /.the-box-landing .the-box-transparent .text-center -->
							</div><!-- /.col-sm-3 -->
							<div class="col-sm-3">
								<div class="the-box-landing the-box-transparent text-center">
									<h4>IT INFRASTRUCTURE</h4>
									<a href="#fakelink" class="hi-icon hi-icon-images">UI Design</a>
									<div class="testimonial-inner">
										<h5>&#34;
										Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat
										&#34;</h5>
									</div><!-- /.testimonial-inner -->
								</div><!-- /.the-box-landing .the-box-transparent .text-center -->
							</div><!-- /.col-sm-3 -->
						</div><!-- /.row -->
					</div><!-- /.hi-icon-effect-1 .hi-icon-effect-1a -->
					
				</div><!-- /.container -->
			</div><!-- /.inner-section -->
		</div><!-- /.section-page-landing .section-grey -->
		<!-- 
		===========================================
		END SERVICES SECTION
		===========================================
		-->
		
		
		
		
		<!-- 
		===========================================
		BEGIN PORTFOLIO SECTION
		===========================================
		-->
		<div class="section-page-landing" id="portfolio">
			<div class="inner-section">
				<!-- BEGIN MODAL PORTFOLIO -->
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
					<div class="modal-content">
						<!-- MODAL HEADER -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Project name</h4>
						</div>
						<!-- MODAL BODY -->
						<div class="modal-body">
						<img src="<?=base_url();?>/assets/images/blog-img/image001.jpg" class="img-responsive" alt="Image portfolio">
						<hr />
							<div class="row">
								<div class="col-sm-4">
									<button class="btn btn-default btn-teplok btn-block">Launch project</button>
									<table class="table table-modal-project">
										<tbody>
											<tr><td><strong>Type</strong></td><td class="text-right">Photography</td></tr>
											<tr><td><strong>Client</strong></td><td class="text-right">Marlboro</td></tr>
											<tr><td><strong>Year</strong></td><td class="text-right">2014</td></tr>
										</tbody>
									</table>
								</div><!-- /.col-sm-4 -->
								<div class="col-sm-8">
									<p style="text-align: justify">
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
									</p>
								</div><!-- /.col-sm-8 -->
							</div><!-- /.row -->
						</div><!-- /.modal-body -->
					</div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal .fade -->
				<!-- END MODAL PORTFOLIO -->
				
				
				<div class="container">
					<h2 class="text-center">Our Work</h2>
					<div class="portfolio-landing">
						<!-- PORTFOLIO CATEGORY FILTER -->
						<ul class="nav nav-pills nav-justified">
							<li class="filter" data-filter="all">Latest Project</li>
							<li class="filter" data-filter="web_design">Web Design</li>
							<li class="filter" data-filter="ui_design">UI Design</li>
							<li class="filter" data-filter="logo_design">Logo Design</li>
							<li class="filter" data-filter="photography">Photography</li>
							<li class="filter" data-filter="psd_template">PSD Template</li>
						</ul>
						<!-- END PORTFOLIO CATEGORY FILTER -->
						<!-- BEGIN PORTFOLIO GRID CONTENT -->
						<ul id="portfolio-grid">
							<li class="mix ui_design">
								<div class="des">
									<h4>Project Name</h4>
									<p>Short descriptions</p>
									<p>
										<a data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i></a>
										<a href="#fakelink"><i class="fa fa-link"></i></a>
									</p>
								</div>
								<img src="<?=base_url();?>/assets/images/image_small/image_small001.jpg" alt="Image portfolio">
							</li>
							<li class="mix logo_design">
								<div class="des">
									<h4>Project Name</h4>
									<p>Short descriptions</p>
									<p>
										<a data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i></a>
										<a href="#fakelink"><i class="fa fa-link"></i></a>
									</p>
								</div>
								<img src="<?=base_url();?>/assets/images/image_small/image_small002.jpg" alt="Image portfolio">
							</li>
							<li class="mix photography">
								<div class="des">
									<h4>Project Name</h4>
									<p>Short descriptions</p>
									<p>
										<a data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i></a>
										<a href="#fakelink"><i class="fa fa-link"></i></a>
									</p>
								</div>
								<img src="<?=base_url();?>/assets/images/image_small/image_small003.jpg" alt="Image portfolio">
							</li>
							<li class="mix ui_design">
								<div class="des">
									<h4>Project Name</h4>
									<p>Short descriptions</p>
									<p>
										<a data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i></a>
										<a href="#fakelink"><i class="fa fa-link"></i></a>
									</p>
								</div>
								<img src="<?=base_url();?>/assets/images/image_small/image_small004.jpg" alt="Image portfolio">
							</li>
							<li class="mix web_design">
								<div class="des">
									<h4>Project Name</h4>
									<p>Short descriptions</p>
									<p>
										<a data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i></a>
										<a href="#fakelink"><i class="fa fa-link"></i></a>
									</p>
								</div>
								<img src="<?=base_url();?>/assets/images/image_small/image_small005.jpg" alt="Image portfolio">
							</li>
							<li class="mix logo_design">
								<div class="des">
									<h4>Project Name</h4>
									<p>Short descriptions</p>
									<p>
										<a data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i></a>
										<a href="#fakelink"><i class="fa fa-link"></i></a>
									</p>
								</div>
								<img src="<?=base_url();?>/assets/images/image_small/image_small006.jpg" alt="Image portfolio">
							</li>
							<li class="mix psd_template">
								<div class="des">
									<h4>Project Name</h4>
									<p>Short descriptions</p>
									<p>
										<a data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i></a>
										<a href="#fakelink"><i class="fa fa-link"></i></a>
									</p>
								</div>
								<img src="<?=base_url();?>/assets/images/image_small/image_small007.jpg" alt="Image portfolio">
							</li>
							<li class="mix logo_design">
								<div class="des">
									<h4>Project Name</h4>
									<p>Short descriptions</p>
									<p>
										<a data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i></a>
										<a href="#fakelink"><i class="fa fa-link"></i></a>
									</p>
								</div>
								<img src="<?=base_url();?>/assets/images/image_small/image_small008.jpg" alt="Image portfolio">
							</li>
							<li class="mix ui_design">
								<div class="des">
									<h4>Project Name</h4>
									<p>Short descriptions</p>
									<p>
										<a data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i></a>
										<a href="#fakelink"><i class="fa fa-link"></i></a>
									</p>
								</div>
								<img src="<?=base_url();?>/assets/images/image_small/image_small009.jpg" alt="Image portfolio">
							</li>
							<li class="mix psd_template">
								<div class="des">
									<h4>Project Name</h4>
									<p>Short descriptions</p>
									<p>
										<a data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i></a>
										<a href="#fakelink"><i class="fa fa-link"></i></a>
									</p>
								</div>
								<img src="<?=base_url();?>/assets/images/image_small/image_small010.jpg" alt="Image portfolio">
							</li>
							<li class="mix web_design">
								<div class="des">
									<h4>Project Name</h4>
									<p>Short descriptions</p>
									<p>
										<a data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i></a>
										<a href="#fakelink"><i class="fa fa-link"></i></a>
									</p>
								</div>
								<img src="<?=base_url();?>/assets/images/image_small/image_small001.jpg" alt="Image portfolio">
							</li>
							<li class="mix psd_template">
								<div class="des">
									<h4>Project Name</h4>
									<p>Short descriptions</p>
									<p>
										<a data-toggle="modal" data-target="#myModal"><i class="fa fa-share"></i></a>
										<a href="#fakelink"><i class="fa fa-link"></i></a>
									</p>
								</div>
								<img src="<?=base_url();?>/assets/images/image_small/image_small002.jpg" alt="Image portfolio">
							</li>
						</ul>
						<!-- END PORTFOLIO GRID CONTENT -->
					</div><!-- /.portfolio-landing -->
				</div><!-- /.container -->
			</div><!-- /.inner-section -->
		</div><!-- /.section-page-landing -->
		<!-- 
		===========================================
		END PORTFOLIO SECTION
		===========================================
		-->		
		
		
		
		
		<!-- 
		===========================================
		BEGIN CLIENT SECTION
		===========================================
		-->
		<div class="section-page-landing section-grey" id="client">
			<div class="inner-section">
				<div class="container text-center">
					<h2 class="text-center">Our Clients</h2>
					<div class="clients">
						<div class="row">
							<div class="col-md-2 col-xs-6">
								<a href="#fakelink"><img src="<?=base_url();?>/assets/images/client-logo/google-logo.png" alt="Image client"></a>
							</div>
							<div class="col-md-2 col-xs-6">
								<a href="#fakelink"><img src="<?=base_url();?>/assets/images/client-logo/wordpress-logo.png" alt="Image client"></a>
							</div>
							<div class="col-md-2 col-xs-6">
								<a href="#fakelink"><img src="<?=base_url();?>/assets/images/client-logo/yahoo-logo.png" alt="Image client"></a>
							</div>
							<div class="col-md-2 col-xs-6">
								<a href="#fakelink"><img src="<?=base_url();?>/assets/images/client-logo/marlboro-logo.png" alt="Image client"></a>
							</div>
							<div class="col-md-2 col-xs-6">
								<a href="#fakelink"><img src="<?=base_url();?>/assets/images/client-logo/microsoft-logo.png" alt="Image client"></a>
							</div>
							<div class="col-md-2 col-xs-6">
								<a href="#fakelink"><img src="<?=base_url();?>/assets/images/client-logo/nokia-logo.png" alt="Image client"></a>
							</div><!-- /.col-md-2 col-xs-6 -->
						</div><!-- /.row -->
					</div><!-- /.clients -->
				</div><!-- /.container .text-center -->
			</div><!-- /.inner-section -->
		</div><!-- /.section-page-landing .section-grey -->
		<!-- 
		===========================================
		END CLIENT SECTION
		===========================================
		-->
		
		
		
		
		<!-- 
		===========================================
		BEGIN QUOTE OF THE DAY SECTION
		===========================================
		-->
		<div class="section-page-landing section-transparent" id="quote">
			<div class="section-overlay">
				<div class="inner-section">
					<div class="container text-center">
						<div class="quote">
							<h1>&#34;If you can't make it good at least make it look good&#34;</h1>
							<h3>- Bill Gates</h3>
						</div><!-- /.quote -->
					</div><!-- /.container text-center -->
				</div><!-- /.inner-section -->
			</div><!-- /.section-overlay -->
		</div><!-- /.section-page-landing .section-transparent -->
		<!-- 
		===========================================
		END QUOTE OF THE DAY SECTION
		===========================================
		-->
		
		
		
		
		<!-- 
		===========================================
		BEGIN CONTACT SECTION
		===========================================
		-->
		<div class="section-page-landing" id="contact">
			<div class="inner-section">
				<div class="container">
					<h2 class="text-center">Get in Touch</h2>
					<div class="col-sm-6">
						<form role="form" class="contact-form" id="ContactForm" method="post">
							<div class="row">
								<div class="col-sm-6">
								  <div class="form-group">
									<input type="text" name="YourName" class="form-control" placeholder="Your name">
								  </div>
								</div>
								<div class="col-sm-6">
								  <div class="form-group">
									<input type="email" name="YourEmail" class="form-control" placeholder="Your email">
								  </div>
								</div>
							</div>
						  <div class="form-group">
							<textarea class="form-control" name="YourMessage" style="height: 200px" placeholder="Your message"></textarea>
						  </div>
							<div class="row">
								<div class="col-sm-7">
								  <div class="col-sm-5">
									<h4 id="SimpleCaptcha"></h4>
								  </div>
								  <div class="col-sm-7">
									<input type="text" name="captcha" class="form-control" placeholder="Result">
								  </div>
								</div>
								<div class="col-sm-5">
								</div>
							</div>
							<button type="submit" class="btn btn-default btn-teplok"><i class="fa fa-envelope"></i>Submit</button>
						</form>
					</div>
					<div class="col-sm-6">
						Contact<br/>
						Wasap
					</div>
				</div><!-- /.container -->
			</div><!-- /.inner-section -->
		</div><!-- /.section-page-landing -->
		<!-- 
		===========================================
		END CONTACT SECTION
		===========================================
		-->