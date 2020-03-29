<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('admin/users/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="admin_username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="admin_username" value="<?php echo $this->input->post('admin_username'); ?>" class="form-control" id="admin_username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="admin_password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="admin_password" value="<?php echo $this->input->post('admin_password'); ?>" class="form-control" id="admin_password" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="email" name="email" value="<?php echo $this->input->post('email'); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="role" class="control-label">Role</label>
						<div class="form-group">
							<select name="role" class="form-control" id="role">
								<option value="1">Administrator</option>
								<option value="2">Editor</option>
							</select>
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