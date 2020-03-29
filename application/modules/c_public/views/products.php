<!-- gallery -->
<div class="gallery">
	<div class="container">
		<h3 class="title"><?=$this->session->userdata('lang') == 'id' ? 'Produk <span>Kami</span>' : 'Our <span>Product</span>';?></h3>
			<section>
				<ul class="lb-album ">
					<?php $no=1; foreach ($products->result() as $row) { ?>
					<li class="grid">
						<a href="#image-<?=$no;?>" style="text-align:center;">
							<figure class="effect-apollo">
								<img src="<?=base_url('uploads/'.$image->get_product_img($row->id_product)->row('image'));?>" alt="<?=$this->session->userdata('lang') == 'id' ? $row->product_title_id : $row->product_title_en;?>">
								<figcaption>
								</figcaption>			
							</figure>
							<h3><?=$this->session->userdata('lang') == 'id' ? $row->product_title_id : $row->product_title_en;?></h3>
						</a>
						<div class="lb-overlay" id="image-<?=$no;?>">
								<!-- <img src="<?=base_url('uploads/'.$row->product_img);?>" alt="<?=$this->session->userdata('lang') == 'id' ? $row->product_title_id : $row->product_title_en;?>" /> -->

								<!-- Carousell -->
								<div class="fotorama" data-nav="thumbs" data-width="700" data-ratio="700/467" data-max-width="100%">
								<?php foreach ($image->get_product_img($row->id_product)->result() as $rowx) { ?>
								  <img src="<?=base_url('uploads/'.$rowx->image);?>">
								<?php } ?>
								</div>
								<!-- ./Carousell -->

								<div class="gal-info">							
									<h3><?=$this->session->userdata('lang') == 'id' ? $row->product_title_id : $row->product_title_en;?></h3>
									<p><?=$this->session->userdata('lang') == 'id' ? $row->product_desc_id : $row->product_desc_en;?></p>
								</div>
								<a href="<?=base_url('products');?>" class="lb-close">Close</a>
						</div>
					</li>
					<?php $no++; } ?>
				</ul>
			</section>

	</div>
</div>
<!-- //gallery -->