<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Slider List</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/home_slider/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th>Slider Title</th>
						<th>Slider Desc</th>
						<th>Actions</th>
                    </tr>
                    <?php $no=1; foreach($tbl_slider as $t){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?=character_limiter($t['slider_title_id'] != '' ? $t['slider_title_id'] : $t['slider_title_en'],80); ?></td>
						<td><?=strip_tags(character_limiter($t['slider_desc_id'] != '' ? $t['slider_desc_id'] : $t['slider_desc_en'],80)); ?></td>
						<td>
                            <a href="<?php echo site_url('admin/home_slider/edit/'.$t['id_slider']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/home_slider/remove/'.$t['id_slider']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
