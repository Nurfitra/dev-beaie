<!-- typography -->
<div class="typrography">
	 <div class="container">
		<h3 class="title" ><span><?=$kemitraan->row('kemitraan_title_id');?></span></h3>
		  <div class="col-sm-6 col-md-6 col-lg-6 mb-60">
				<div class="fotorama" data-nav="thumbs" data-width="700" data-ratio="700/467" data-max-width="100%">
				<?php foreach ($kemitraan_img->result() as $row) { ?>
				  <img src="<?=base_url('uploads/'.$row->image);?>">
				<?php } ?>
				</div>
          </div>
		  <div class="col-sm-6 col-md-6 col-lg-6 mb-60">
            <h4 class="text-blue title-border mb-30 bars"><?=$kemitraan->row('kemitraan_title_id');?></h4>
			<p>
				<?=$this->session->userdata('lang') == 'id' ? $kemitraan->row('kemitraan_desc_id') : $kemitraan->row('kemitraan_desc_en');?>
			</p>
			<br/>
			<p><i class="glyphicon glyphicon-envelope"></i>&nbsp; <?=$kemitraan->row('email');?></p>
			<p><i class="glyphicon glyphicon-phone-alt"></i>&nbsp; <?=$kemitraan->row('telp');?></p>
			<p><i class="glyphicon glyphicon-map-marker"></i>&nbsp; <?=$kemitraan->row('alamat');?></p>

          </div>
		  <div class="clearfix"></div>

	</div>
</div>
<!-- //typography -->