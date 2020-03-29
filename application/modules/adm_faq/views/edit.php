	<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title"><?=ucfirst($tbl_faq['question_id'] ? $tbl_faq['question_id'] :  $tbl_faq['question_en'])." Edit"; ?></h3>
			</div>
			<?php echo form_open('admin/faq/edit/'.$tbl_faq['id_faq']); ?>
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
											<label for="question_id" class="control-label">Pertanyaan</label>
											<div class="form-group">
												<input type="text" name="question_id" value="<?=$tbl_faq['question_id'] ? $tbl_faq['question_id'] : $this->input->post('question_id'); ?>" class="form-control" id="question_id" />
											</div>
										</div>
										<div class="col-md-12">
											<label for="profile" class="control-label">Jawaban</label>
											<div class="form-group">
												<textarea name="answer_id" class="ckeditor form-control" id="profile"><?=$tbl_faq['answer_id'] ? $tbl_faq['answer_id'] : $this->input->post('answer_id'); ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
								<div class="tab-pane" id="lang-en">
									<div class="row">
										<div class="col-md-12">
											<label for="question_en" class="control-label">Question</label>
											<div class="form-group">
												<input type="text" name="question_en" value="<?=$tbl_faq['question_en'] ? $tbl_faq['question_en'] : $this->input->post('question_en'); ?>" class="form-control" id="question_en" />
											</div>
										</div>
										<div class="col-md-12">
											<label for="profile" class="control-label">Answer</label>
											<div class="form-group">
												<textarea name="answer_en" class="ckeditor form-control" id="profile"><?=$tbl_faq['answer_en'] ? $tbl_faq['answer_en'] : $this->input->post('answer_en'); ?></textarea>
											</div>
										</div>
									</div>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
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