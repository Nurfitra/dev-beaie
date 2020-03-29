<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">OurClient Add</h3>
			</div>
			<?php echo form_open_multipart('admin/OurClient/add'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-12">
						<label for="ourpartner_title_id" class="control-label">Client Name</label>
						<div class="form-group">
							<input type="text" name="ourpartner_name" value="<?php echo $this->input->post('ourpartner_name'); ?>" class="form-control" id="ourpartner_name" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="ourpartner_img" class="control-label">Client Image</label>
						<div class="form-group" id="partnerfile">
							<input type="file" name="ourpartner_img[]" class="form-control" id="ourpartner_img" />
						</div>
						<button style="margin-bottom: 10px;" type="button" class="btn btn-default" onclick="addimg()"><i class="fa fa-plus"></i> Image</button>
					</div>
					
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
											<label for="profile" class="control-label">Deskripsi</label>
											<div class="form-group">
												<textarea name="ourpartner_desc_id" class="ckeditor form-control" id="profile"></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="lang-en">
									<div class="row">
										<div class="col-md-12">
											<label for="profile" class="control-label">Description</label>
											<div class="form-group">
												<textarea name="ourpartner_desc_en" class="ckeditor form-control" id="profile"></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div>
						<!-- nav-tabs-custom -->
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