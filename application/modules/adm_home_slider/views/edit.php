	<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title"><?=ucfirst($tbl_slider['slider_title_id'] ? $tbl_slider['slider_title_id'] :  $tbl_slider['slider_title_en'])." Edit"; ?></h3>
			</div>
			<?php echo form_open_multipart('admin/home_slider/edit/'.$tbl_slider['id_slider']); ?>
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
											<label for="slider_title_id" class="control-label">Judul Slider</label>
											<div class="form-group">
												<input type="text" name="slider_title_id" value="<?=$tbl_slider['slider_title_id'] ? $tbl_slider['slider_title_id'] : $this->input->post('slider_title_id'); ?>" class="form-control" id="slider_title_id" />
											</div>
										</div>
										<div class="col-md-12">
											<label for="profile" class="control-label">Deskripsi Slider</label>
											<div class="form-group">
												<input type="text" name="slider_desc_id" value="<?=$tbl_slider['slider_desc_id'] ? $tbl_slider['slider_desc_id'] : $this->input->post('slider_desc_id'); ?>" class="form-control" id="slider_desc_id" />
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="lang-en">
									<div class="row">
										<div class="col-md-12">
											<label for="slider_title_en" class="control-label">Slider Title</label>
											<div class="form-group">
												<input type="text" name="slider_title_en" value="<?=$tbl_slider['slider_title_en'] ? $tbl_slider['slider_title_en'] : $this->input->post('slider_title_en'); ?>" class="form-control" id="slider_title_en" />
											</div>
										</div>
										<div class="col-md-12">
											<label for="profile" class="control-label">Slider Description</label>
											<div class="form-group">
												<input type="text" name="slider_desc_en" value="<?=$tbl_slider['slider_desc_en'] ? $tbl_slider['slider_desc_en'] : $this->input->post('slider_desc_en'); ?>" class="form-control" id="slider_desc_en" />
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div>
						<div class="col-md-12">
							<label for="slider_img" class="control-label">Slider Image</label>
							<div class="form-group">
								<input type="file" name="slider_img" class="form-control" id="slider_img" />
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