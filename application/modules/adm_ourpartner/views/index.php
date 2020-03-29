<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">OurClient List</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/OurClient/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th>Client Name</th>
						<th>Client Img</th>
						<th>Actions</th>
                    </tr>
                    <?php $no=1; foreach($tbl_ourpartner as $t){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?=$t['ourpartner_name']; ?></td>
						<td><?php echo $t['ourpartner_img']; ?></td>
						<td>
                            <a href="<?php echo site_url('admin/OurClient/edit/'.$t['id_ourpartner']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/OurClient/remove/'.$t['id_ourpartner']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
