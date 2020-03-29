<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Home Post</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/home/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th>Post Title</th>
						<th>Post Desc</th>
						<th>Actions</th>
                    </tr>
                    <?php $no=1; foreach($tbl_home as $t){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?=$t['home_title_id'] != "" ?  $t['home_title_id'] : $t['home_title_en'];?></td>
						<td><?=$t['home_desc_id'] != "" ?  character_limiter(strip_tags($t['home_desc_id']), 40) : character_limiter(strip_tags($t['home_desc_en']), 40); ?></td>
						<td>
                            <a href="<?php echo site_url('admin/home/edit/'.$t['id_home']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/home/remove/'.$t['id_home']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
