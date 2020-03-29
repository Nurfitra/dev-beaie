<div class="map">
	<div class="container">
		<h3 class="title "><?=$this->session->userdata('lang') == 'id' ? 'Peta <span>Lokasi</span>' : 'View <span>On Map</span>';?></h3>
		<iframe src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJuyoVUrHJaS4RNbjqjUus3Sw&key=AIzaSyBRfVVbVH2zwzD-Ns5RT9eCh1WSgZTcu-4" style="border:0"></iframe>
		<div class="contact-grids">
				<div class="col-md-4 contact-grid text-center animated wow slideInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						<h4><?=$this->session->userdata('lang') == 'id' ? 'Alamat' : 'Address';?></h4>
						<p><?=str_replace(',','<br/>', $profile->row('address'));?></span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInUp" data-wow-delay=".5s">
					<div class="contact-grid1">
						<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						<h4><?=$this->session->userdata('lang') == 'id' ? 'Hubungi Kami' : 'Call Us';?></h4>
						<p><b>Phone :</b><?=$profile->row('telephone');?><span><b>Fax :</b><?=$profile->row('fax');?></span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid text-center animated wow slideInRight" data-wow-delay=".5s">
					<div class="contact-grid1">
						<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						<h4>Email</h4>
						<p>
							<?=$profile->row('email') ? '<span><b>General :</b> <a href="mailto:'.$profile->row('email').'">'.$profile->row('email').'</a></span>' : '';?>
							<?=$profile->row('email_purchasing') ? '<span><b>Purchasing :</b> <a href="mailto:'.$profile->row('email_purchasing').'">'.$profile->row('email_purchasing').'</a></span>' : '';?>
							<?=$profile->row('email_kemitraan') ? '<span><b>Kemitraan :</b> <a href="mailto:'.$profile->row('email_kemitraan').'">'.$profile->row('email_kemitraan').'</a></span>' : '';?>
							<?=$profile->row('email_sales') ? '<span><b>Sales :</b> <a href="mailto:'.$profile->row('email_sales').'">'.str_replace(',','<br/>',$profile->row('email_sales')).'</a></span>' : '';?>
						</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

	</div>
</div>