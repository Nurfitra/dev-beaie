<div class="news-left">
	<div class="container">
		<h3 class="title " ><?=$this->session->userdata('lang') == 'id' ? 'Profil <span>Perusahaan</span>' : 'Company <span> Profile</span>';?></h3>
		<div class="grid_3 grid_4">
			<div class="bs-example">
				<div class="mb-60">
				<?=$this->session->userdata('lang') == 'id' ? $profile->row('profile_id') : $profile->row('profile_en');?>
				</div>
			</div>			
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="team-gds">
	<div class="container">
		<h3 class="title" ><?=$this->session->userdata('lang') == 'id' ? 'Client <span>Kami</span>' : 'Our <span> Client</span>';?></h3>
		<div class="team-bot">
			<?php foreach ($ourpartner->result() as $row) { ?>
			<div class="col-md-4 bottom-gds ">
				<div class="bott-img">
					<div class="icon-holder">
						<span><img  src="<?=base_url('uploads/'.$row->ourpartner_img);?>" alt=""></span>
					</div>
					<h4 class="mission"><?=ucfirst($row->ourpartner_name);?></h4>
					<div class="description">
						<p><?=$this->session->userdata('lang') == 'id' ? $row->ourpartner_desc_id : $row->ourpartner_desc_en;?></p>
					</div>
				</div>
			</div>
			<?php } ?>
			<div class="clearfix"></div>
		</div>
	</div>
</div>