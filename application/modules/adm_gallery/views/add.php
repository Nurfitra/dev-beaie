<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Tbl Gallery Add</h3>
			</div>
			<?php echo form_open_multipart('admin/gallery/add'); ?>
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
											<label for="gallery_title_id" class="control-label">Gallery Title ID</label>
											<div class="form-group">
												<input type="text" name="gallery_title_id" value="<?php echo $this->input->post('gallery_title_id'); ?>" class="form-control" id="gallery_title_id" />
											</div>
										</div>
										<div class="col-md-12">
											<label for="profile" class="control-label">Gallery Desc ID</label>
											<div class="form-group">
												<textarea name="gallery_desc_id" class="ckeditor form-control" id="profile"></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="lang-en">
									<div class="row">
										<div class="col-md-12">
											<label for="gallery_title_en" class="control-label">Gallery Title EN</label>
											<div class="form-group">
												<input type="text" name="gallery_title_en" value="<?php echo $this->input->post('gallery_title_en'); ?>" class="form-control" id="gallery_title_en" />
											</div>
										</div>
										<div class="col-md-12">
											<label for="profile" class="control-label">Gallery Desc EN</label>
											<div class="form-group">
												<textarea name="gallery_desc_en" class="ckeditor form-control" id="profile"></textarea>
											</div>
										</div>
									</div>
								</div> 	
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div>
					</div>
					<!-- <div class="col-md-12">
						<label for="gallery_img" class="control-label">Gallery Img</label>
						<div class="form-group" id="galleryfile">
							<input type="file" name="gallery_img[]" class="form-control" id="gallery_img" />
						</div>
						<button style="margin-bottom: 10px;" type="button" class="btn btn-default" onclick="addimg_gallery()"><i class="fa fa-plus"></i> Image</button>
					</div> -->
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