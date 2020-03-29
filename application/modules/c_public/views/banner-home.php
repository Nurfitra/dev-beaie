<div class="banner" style="background: transparent !important;">
    
        <style>
            .callbacks_tabs{
                margin-top: -250px !important;
            }
        </style>

		<div class="ban-top ">

			<div class="container">

				<div class="ban-top-con">

					<div class="top_nav_left">

						<nav class="navbar navbar-default">

							<div class="container-fluid">

								<!-- Brand and toggle get grouped for better mobile display -->

								<div class="navbar-header">

									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

									<span class="sr-only">Toggle navigation</span>

									<span class="icon-bar"></span>

									<span class="icon-bar"></span>

									<span class="icon-bar"></span>

									</button>

								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->

								<div class="collapse navbar-collapse menu--shylock" id="bs-example-navbar-collapse-1">

								  <ul class="nav navbar-nav menu__list">

									<li class="<?=$this->uri->segment(1) == 'home' ? 'active menu__item menu__item--current' : 'menu__item';?>"><a class="menu__link" href="<?=base_url('home');?>"><?=$this->session->userdata('lang') == 'id' ? 'Beranda' : 'Home';?> <span class="sr-only">(current)</span></a></li>

									<li class="<?=$this->uri->segment(1) == 'companyProfile' ? 'active menu__item menu__item--current' : 'menu__item';?>"><a class="menu__link" href="<?=base_url('companyProfile');?>"><?=$this->session->userdata('lang') == 'id' ? 'Profil Perusahaan' : 'Company Profile';?></a></li>

									<li class="<?=$this->uri->segment(1) == 'products' ? 'active menu__item menu__item--current' : 'menu__item';?>"><a class="menu__link" href="<?=base_url('products');?>"><?=$this->session->userdata('lang') == 'id' ? 'Produk' : 'Products';?></a></li>

									<li class="<?=$this->uri->segment(1) == 'news' ? 'active menu__item menu__item--current' : 'menu__item';?>"><a class="menu__link" href="<?=base_url('news');?>"><?=$this->session->userdata('lang') == 'id' ? 'Berita' : 'News';?></a></li>

									<li class="<?=$this->uri->segment(1) == 'joinus' ? 'active menu__item menu__item--current' : 'menu__item';?>"><a class="menu__link" href="<?=base_url('joinus');?>"><?=$this->session->userdata('lang') == 'id' ? 'Bergabung' : 'Join US';?></a></li>

									<li class="<?=$this->uri->segment(1) == 'faq' ? 'active menu__item menu__item--current' : 'menu__item';?>"><a class="menu__link" href="<?=base_url('faq');?>">FAQ</a></li>

									<li class="<?=$this->uri->segment(1) == 'contact' ? 'active menu__item menu__item--current' : 'menu__item';?>"><a class="menu__link" href="<?=base_url('contact');?>"><?=$this->session->userdata('lang') == 'id' ? 'Kontak' : 'Contact';?></a></li>

								  </ul>

								</div>

							</div>

						</nav>

					</div>

					<?php

						$actual_link = base64_encode((isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");

					?>

					<div class="top_nav_right">

						<ul>

							<li><a class="flag-icon flag-icon-id" href="<?=base_url('lang/id?key='.$actual_link);?>"></a></li>

							<li><a class="flag-icon flag-icon-us" href="<?=base_url('lang/en?key='.$actual_link);?>"></a></li>

						</ul>

					</div>

					<div class="clearfix"></div>

				</div>

			</div>

		</div>

		<div class="ban-bot text-center">

			<script src="<?=base_url('assets');?>/js/responsiveslides.min.js"></script>

			<script>

					// You can also use "$(window).load(function() {"

					$(function () {

					// Slideshow 4

					$("#slider3").responsiveSlides({

						auto: true,

						pager: true,

						nav: false,

						speed: 500,

						namespace: "callbacks",

						before: function () {

					$('.events').append("<li>before event fired.</li>");

					},

					after: function () {

						$('.events').append("<li>after event fired.</li>");

						}

						});

					});

			</script>

			<div  id="top" class="callbacks_container">

				<ul class="rslides" id="slider3">

					<?php $no=1; foreach ($slider->result() as $row) { ?>
					
					<li>
						<img style="z-index:10;" src="<?=base_url('uploads/'.$row->slider_img);?>" alt="">
						
						<div class="ban-info" style="z-index:100;position:absolute;top:120px;margin-left:auto;margin-right:auto;left:0;right:0;">

							<h3><?=$this->session->userdata('lang') == 'id' ? $row->slider_title_id : $row->slider_title_en;?></h3>

							<p></p>

							<!--a class="hvr-rectangle-out" href="<?=base_url('companyProfile');?>">See More About Us</a-->

						</div>

					</li>					
					<?php $no++; } ?>


				</ul>

			</div>

			<div class="clearfix"></div>

		</div>

	</div>