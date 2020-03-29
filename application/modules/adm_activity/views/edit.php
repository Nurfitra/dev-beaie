	<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title"><?=ucfirst($tbl_activity['activity_title_id'] ? $tbl_activity['activity_title_id'] :  $tbl_activity['activity_title_en'])." Edit"; ?></h3>
			</div>
			<?php echo form_open_multipart('admin/activity/edit/'.$tbl_activity['id_activity']); ?>
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
											<label for="activity_title_id" class="control-label">Activity Title ID</label>
											<div class="form-group">
												<input type="text" name="activity_title_id" value="<?=$tbl_activity['activity_title_id'] ? $tbl_activity['activity_title_id'] : $this->input->post('activity_title_id'); ?>" class="form-control" id="activity_title_id" />
											</div>
										</div>
										<div class="col-md-12">
											<label for="profile" class="control-label">Activity Desc ID</label>
											<div class="form-group">
												<textarea name="activity_desc_id" class="ckeditor form-control" id="profile"><?=$tbl_activity['activity_desc_id'] ? $tbl_activity['activity_desc_id'] : $this->input->post('activity_desc_id'); ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="lang-en">
									<div class="row">
										<div class="col-md-12">
											<label for="activity_title_en" class="control-label">Activity Title EN</label>
											<div class="form-group">
												<input type="text" name="activity_title_en" value="<?=$tbl_activity['activity_title_en'] ? $tbl_activity['activity_title_en'] : $this->input->post('activity_title_en'); ?>" class="form-control" id="activity_title_en" />
											</div>
										</div>
										<div class="col-md-12">
											<label for="profile" class="control-label">Activity Desc EN</label>
											<div class="form-group">
												<textarea name="activity_desc_en" class="ckeditor form-control" id="profile"><?=$tbl_activity['activity_desc_en'] ? $tbl_activity['activity_desc_en'] : $this->input->post('activity_desc_en'); ?></textarea>
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
						<label for="activity_img" class="control-label">Activity Img</label>
						<div class="form-group">
							<input type="file" name="activity_img" class="form-control" id="activity_img" />
						</div>
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