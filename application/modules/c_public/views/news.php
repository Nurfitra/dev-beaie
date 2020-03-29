<!-- typography -->
<div class="typrography">
	<div class="container">
		<h3 class="title" ><?=$this->session->userdata('lang') == 'id' ? '<span>Berita</span>' : '<span>News</span>';?></h3>
		<div class="row">
		<?php foreach ($news->result() as $row) { ?>
		  <div class="col-sm-6 col-md-4 wow fadeInUp animated" data-wow-delay=".1s">
		    <div class="thumbnail">
		      <img src="<?=base_url('uploads/'.$row->news_img);?>" alt="<?=$this->session->userdata('lang') == 'id' ? $row->news_title_id : $row->news_title_en;?>">
		      <div class="caption">
		        <h3><?=$this->session->userdata('lang') == 'id' ? $row->news_title_id : $row->news_title_en;?></h3>
		        <p><?=character_limiter(strip_tags($this->session->userdata('lang') == 'id' ? $row->news_desc_id : $row->news_desc_en), 120);?></p>
		        <p><a href="<?=base_url('news/detail/'.$row->id_news);?>" class="btn btn-default" role="button">Read More ..</a></p>
		      </div>
		    </div>
		  </div>
		<?php } ?>
		</div>
		<div class="row">
			<div class="col-md-12 offset-6">
				<ul class="pagination">
					<li class="disabled"><a href="#"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
				</ul>
			</div>
		</div>
	</div>
</div>