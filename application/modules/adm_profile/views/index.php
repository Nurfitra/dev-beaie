<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl Profile Listing</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Address</th>
						<th>Telephone</th>
						<th>Email</th>
						<th>Lang</th>
						<th>Profile</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_profile as $t){ ?>
                    <tr>
						<td><?php echo $t['id']; ?></td>
						<td><?php echo $t['address']; ?></td>
						<td><?php echo $t['telephone']; ?></td>
						<td><?php echo $t['email']; ?></td>
						<td><?php echo $t['lang']; ?></td>
						<td><?php echo $t['profile']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_profile/edit/'.$t['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_profile/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
