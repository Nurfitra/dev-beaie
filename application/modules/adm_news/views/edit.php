	<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title"><?=ucfirst($tbl_news['news_title_id'] ? $tbl_news['news_title_id'] :  $tbl_news['news_title_en'])." Edit"; ?></h3>
			</div>
			<?php echo form_open_multipart('admin/news/edit/'.$tbl_news['id_news']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-12">
						
						<!-- Custom Tabs -->
						<div class="nav-tabs-custom">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#lang-id" data-toggle="tab" aria-expanded="true"><span class="flag-icon flag-icon-id"></span></a></li>
								<li class=""><a href="#lang-en" data-toggle="tab" aria-expanded="false"><span class="flag-icon flag-icon-us"></span></a></li>
							</ul>
							<div class="tab-content">
								<!-- /.tab-pane -->
								<div class="tab-pane active" id="lang-id">
									<div class="row">
										<div class="col-md-12">
											<label for="news_title_id" class="control-label">Judul Berita</label>
											<div class="form-group">
												<input type="text" name="news_title_id" value="<?=$tbl_news['news_title_id'] ? $tbl_news['news_title_id'] : $this->input->post('news_title_id'); ?>" class="form-control" id="news_title_id" />
											</div>
										</div>
										<div class="col-md-12">
											<label for="profile" class="control-label">Deskripsi Berita</label>
											<div class="form-group">
												<textarea name="news_desc_id" class="ckeditor form-control" id="profile"><?=$tbl_news['news_desc_id'] ? $tbl_news['news_desc_id'] : $this->input->post('news_desc_id'); ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="lang-en">
									<div class="row">
										<div class="col-md-12">
											<label for="news_title_en" class="control-label">News Title</label>
											<div class="form-group">
												<input type="text" name="news_title_en" value="<?=$tbl_news['news_title_en'] ? $tbl_news['news_title_en'] : $this->input->post('news_title_en'); ?>" class="form-control" id="news_title_en" />
											</div>
										</div>
										<div class="col-md-12">
											<label for="profile" class="control-label">News Description</label>
											<div class="form-group">
												<textarea name="news_desc_en" class="ckeditor form-control" id="profile"><?=$tbl_news['news_desc_en'] ? $tbl_news['news_desc_en'] : $this->input->post('news_desc_en'); ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div>
						<div class="col-md-12">
							<label for="news_img" class="control-label">News Image</label>
							<div class="form-group">
								<input type="file" name="news_img" class="form-control" id="news_img" />
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
					</button>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>