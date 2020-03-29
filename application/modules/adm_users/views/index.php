<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users List</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/users/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th>Username</th>
						<th>Email</th>
						<th>Role</th>
						<th>Actions</th>
                    </tr>
                    <?php $no=1; foreach($tbl_admin as $t){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?php echo ucfirst($t['admin_username']); ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo ($t['role'] == '1' ? 'Super Admin' : 'Admin'); ?></td>
						<td>
                            <?=strtoupper($this->session->userdata('admin_username')) == strtoupper($t['admin_username']) ? '<a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-xs"><span class="fa fa-pencil"></span> Change Password</a> ' : ''; ?>
                            <a href="<?php echo site_url('admin/users/edit/'.$t['id_admin']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/users/remove/'.$t['id_admin']); ?>" onclick="if(confirm('Ingin Menghapus User ini?')){return true;}else{ return false;}" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Change Password</h4>
              </div>
            <form action="<?=base_url('admin/users/changepasswd');?>" method="POST">
              <div class="modal-body">
                     <div class="form-group">
                        <label for="exampleInputEmail1">Old Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="oldpassword" placeholder="Old Password">
                      </div> 
                     <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="password" placeholder="Password">
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputEmail1">Re-Password</label>
                        <input type="password" class="form-control" id="exampleInputEmail1" name="repassword" placeholder="Re-Password">
                      </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
            </div>
          </div>
        </div>
    </div>
</div>
