<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Activity List</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/activity/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th>Activity Title</th>
						<th>Activity Image</th>
						<th>Actions</th>
                    </tr>
                    <?php $no=1; foreach($tbl_activity as $t){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?=$t['activity_title_id'] != '' ? $t['activity_title_id'] : $t['activity_title_en']; ?></td>
						<!-- <td><a href="#" onclick="window.open('<?=base_url('uploads/'.$t['activity_img']);?>', 'Image View', 
                                                 'width=400,height=350'); return false;">View Image</a></td> --><td><a href="<?=base_url('admin/activity_upload/'.$t['id_activity']);?>">Add Image</a></td>
						<td>
                            <a href="<?php echo site_url('admin/activity/edit/'.$t['id_activity']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/activity/remove/'.$t['id_activity']); ?>" class="btn btn-danger btn-xs" onclick="if(confirm('Ingin Menghapus Activity ini?')){return true;}else{ return false;}"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
