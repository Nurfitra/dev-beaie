	<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title"><?=ucfirst($tbl_kemitraan['kemitraan_title_id'] ? $tbl_kemitraan['kemitraan_title_id'] :  $tbl_kemitraan['kemitraan_title_en'])." Edit"; ?></h3>
			</div>
			<?php echo form_open_multipart('admin/kemitraan/edit/'.$tbl_kemitraan['id_kemitraan']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-12">
						
						<!-- Custom Tabs -->
						<div class="nav-tabs-custom">

							<div class="row">
								<div class="col-md-12">
									<label for="kemitraan_title_id" class="control-label">Nama Mitra</label>
									<div class="form-group">
										<input type="text" name="kemitraan_title_id" value="<?=$tbl_kemitraan['kemitraan_title_id'] ? $tbl_kemitraan['kemitraan_title_id'] : $this->input->post('kemitraan_title_id'); ?>" class="form-control" id="kemitraan_title_id" />
									</div>
								</div>
								<div class="col-md-12">
									<label for="email" class="control-label">Email</label>
									<div class="form-group">
										<input type="email" name="email" value="<?=$tbl_kemitraan['email'] ? $tbl_kemitraan['email'] : $this->input->post('email'); ?>" class="form-control" id="email" />
									</div>
								</div>
								<div class="col-md-12">
									<label for="telp" class="control-label">Telp</label>
									<div class="form-group">
										<input type="text" name="telp" value="<?=$tbl_kemitraan['telp'] ? $tbl_kemitraan['telp'] : $this->input->post('telp'); ?>" class="form-control" id="telp" />
									</div>
								</div>
								<div class="col-md-12">
									<label for="alamat" class="control-label">Alamat</label>
									<div class="form-group">
										<input type="text" name="alamat" value="<?=$tbl_kemitraan['alamat'] ? $tbl_kemitraan['alamat'] : $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
									</div>
								</div>
							</div>
							<ul class="nav nav-tabs">
								<li class="active"><a href="#lang-id" data-toggle="tab" aria-expanded="true"><span class="flag-icon flag-icon-id"></span></a></li>
								<li class=""><a href="#lang-en" data-toggle="tab" aria-expanded="false"><span class="flag-icon flag-icon-us"></span></a></li>
							</ul>
							<div class="tab-content">
								<!-- /.tab-pane -->
								<div class="tab-pane active" id="lang-id">
									<div class="row">
										<div class="col-md-12">
											<label for="profile" class="control-label">Deskripsi Mitra</label>
											<div class="form-group">
												<textarea name="kemitraan_desc_id" class="ckeditor form-control" id="profile"><?=$tbl_kemitraan['kemitraan_desc_id'] ? $tbl_kemitraan['kemitraan_desc_id'] : $this->input->post('kemitraan_desc_id'); ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="lang-en">
									<div class="row">
										<div class="col-md-12">
											<label for="profile" class="control-label">Mitra Description</label>
											<div class="form-group">
												<textarea name="kemitraan_desc_en" class="ckeditor form-control" id="profile"><?=$tbl_kemitraan['kemitraan_desc_en'] ? $tbl_kemitraan['kemitraan_desc_en'] : $this->input->post('kemitraan_desc_en'); ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div>
						<!-- <div class="col-md-12">
							<label for="kemitraan_img" class="control-label">Mitra Image</label>
							<div class="form-group">
								<input type="file" name="kemitraan_img" class="form-control" id="kemitraan_img" />
							</div>
						</div> -->
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