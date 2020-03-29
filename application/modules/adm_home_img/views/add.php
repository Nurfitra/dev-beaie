<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tbl Home Img Add</h3>
            </div>
            <?php echo form_open('tbl_home_img/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="id_home" class="control-label">Id Home</label>
						<div class="form-group">
							<input type="text" name="id_home" value="<?php echo $this->input->post('id_home'); ?>" class="form-control" id="id_home" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="image" class="control-label">Image</label>
						<div class="form-group">
							<input type="text" name="image" value="<?php echo $this->input->post('image'); ?>" class="form-control" id="image" />
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