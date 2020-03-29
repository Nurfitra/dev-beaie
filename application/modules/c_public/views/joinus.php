<div class="news-left">
	<div class="container">
		<h3 class="title " ><?=$this->session->userdata('lang') == 'id' ? '<span>Bergabung</span> Bersama <span>Kami</span>' : 'Join <span> Us</span>';?></h3>
		<div class="grid_3 grid_4">
			<div class="bs-example">
				<div class="mb-60">
				<?=$this->session->userdata('lang') == 'id' ? $joinus->row('joinus_desc_id') : $joinus->row('joinus_desc_en');?>
				</div>
			</div>			
		</div>
		<div class="clearfix"> </div>
	</div>
</div>