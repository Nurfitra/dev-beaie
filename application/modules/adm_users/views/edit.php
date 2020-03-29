<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('admin/users/edit/'.$tbl_admin['id_admin']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="admin_username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="admin_username" value="<?php echo ($this->input->post('admin_username') ? $this->input->post('admin_username') : $tbl_admin['admin_username']); ?>" class="form-control" id="admin_username" readonly />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="email" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $tbl_admin['email']); ?>" class="form-control" id="email" readonly />
						</div>
					</div>
					<div class="col-md-6">
						<label for="role" class="control-label">Role</label>
						<div class="form-group">
							<select name="role" class="form-control" id="role">
								<option value="1" <?php echo ($tbl_admin['role'] == '1' ? 'selected' : $this->input->post('role')); ?>>Super Admin</option>
								<option value="2" <?php echo ($tbl_admin['role'] == '2' ? 'selected' : $this->input->post('role')); ?>>Admin</option>
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