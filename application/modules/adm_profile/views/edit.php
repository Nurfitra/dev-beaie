<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">Company Profile</h3>
			</div>
			<?php echo form_open_multipart('admin/profile'); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-12">
						<label for="address" class="control-label">Address</label>
						<div class="form-group">
							<input type="text" name="address" value="<?php echo ($this->input->post('address') ? $this->input->post('address') : $tbl_profile['address']); ?>" class="form-control" id="address" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="telephone" class="control-label">Telephone</label>
						<div class="form-group">
							<input type="text" name="telephone" value="<?php echo ($this->input->post('telephone') ? $this->input->post('telephone') : $tbl_profile['telephone']); ?>" class="form-control" id="telephone" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="telephone" class="control-label">Fax</label>
						<div class="form-group">
							<input type="text" name="fax" value="<?php echo ($this->input->post('fax') ? $this->input->post('fax') : $tbl_profile['fax']); ?>" class="form-control" id="fax" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="email" class="control-label">Email General</label>
						<div class="form-group">
							<input type="email" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $tbl_profile['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="email_sales" class="control-label">Email Sales</label>
						<div class="form-group">
							<input type="text" name="email_sales" value="<?php echo ($this->input->post('email_sales') ? $this->input->post('email_sales') : $tbl_profile['email_sales']); ?>" class="form-control" id="email_sales" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="email_kemitraan" class="control-label">Email Partnership</label>
						<div class="form-group">
							<input type="email" name="email_kemitraan" value="<?php echo ($this->input->post('email_kemitraan') ? $this->input->post('email_kemitraan') : $tbl_profile['email_kemitraan']); ?>" class="form-control" id="email_kemitraan" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="facebook" class="control-label">Facebook</label>
						<div class="form-group">
							<input type="text" name="facebook" value="<?php echo ($this->input->post('facebook') ? $this->input->post('facebook') : $tbl_profile['facebook']); ?>" class="form-control" id="facebook" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="twitter" class="control-label">Twitter</label>
						<div class="form-group">
							<input type="text" name="twitter" value="<?php echo ($this->input->post('twitter') ? $this->input->post('twitter') : $tbl_profile['twitter']); ?>" class="form-control" id="twitter" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="instagram" class="control-label">Instagram</label>
						<div class="form-group">
							<input type="text" name="instagram" value="<?php echo ($this->input->post('instagram') ? $this->input->post('instagram') : $tbl_profile['instagram']); ?>" class="form-control" id="instagram" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="email_kemitraan" class="control-label">Email Partnership</label>
						<div class="form-group">
							<input type="email" name="email_kemitraan" value="<?php echo ($this->input->post('email_kemitraan') ? $this->input->post('email_kemitraan') : $tbl_profile['email_kemitraan']); ?>" class="form-control" id="email_kemitraan" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="contact_bg" class="control-label">Contact Background</label>
						<div class="form-group">
							<input type="file" name="contact_bg" class="form-control" id="contact_bg" />
						</div>
					</div>
					<div class="col-md-12">
						<label for="profile_bg" class="control-label">Profile Background</label>
						<div class="form-group">
							<input type="file" name="profile_bg" class="form-control" id="profile_bg" />
						</div>
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
											<label for="profile" class="control-label">Profile ID</label>
											<div class="form-group">
												<textarea name="profile_id" class="ckeditor form-control" id="editor1"><?php echo ($this->input->post('profile_id') ? $this->input->post('profile_id') : $tbl_profile['profile_id']); ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="lang-en">
									<div class="row">
										<div class="col-md-12">
											<label for="profile" class="control-label">Profile EN</label>
											<div class="form-group">
												<textarea name="profile_en" class="ckeditor form-control" id="profile"><?php echo ($this->input->post('profile_en') ? $this->input->post('profile_en') : $tbl_profile['profile_en']); ?></textarea>
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