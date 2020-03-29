<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">JoinUS</h3>
			</div>
			<?php echo form_open('admin/joinus'); ?>
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
											<label for="joinus_desc_id" class="control-label">Deskripsi</label>
											<div class="form-group">
												<textarea name="joinus_desc_id" class="ckeditor form-control" id="profile"><?php echo ($this->input->post('joinus_desc_id') ? $this->input->post('joinus_desc_id') : $tbl_joinus['joinus_desc_id']); ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="lang-en">
									<div class="row">
										<div class="col-md-12">
											<label for="joinus_desc_en" class="control-label">Description</label>
											<div class="form-group">
												<textarea name="joinus_desc_en" class="ckeditor form-control" id="profile"><?php echo ($this->input->post('joinus_desc_en') ? $this->input->post('joinus_desc_en') : $tbl_joinus['joinus_desc_en']); ?></textarea>
											</div>
										</div>
									</div>
								</div>
							<div class="dropzone-previews"></div
							<!-- /.tab-pane -->
						</div>
						<!-- /.tab-content -->
					</div>
					<!-- nav-tabs-custom -->
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