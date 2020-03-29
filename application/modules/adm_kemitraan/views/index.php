<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Kemitraan List</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/kemitraan/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th>Nama Mitra</th>
						<th>Description</th>
                        <th>Image</th>
						<th>Actions</th>
                    </tr>
                    <?php $no=1; foreach($tbl_kemitraan as $t){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?=character_limiter($t['kemitraan_title_id'] != '' ? $t['kemitraan_title_id'] : $t['kemitraan_title_en'],80); ?></td>
						<td><?=strip_tags(character_limiter($t['kemitraan_desc_id'] != '' ? $t['kemitraan_desc_id'] : $t['kemitraan_desc_en'],80)); ?></td>
                        <td><a href="<?=base_url('admin/kemitraan_upload/'.$t['id_kemitraan']);?>">Add Image</a></td>
						<td>
                            <a href="<?php echo site_url('admin/kemitraan/edit/'.$t['id_kemitraan']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/kemitraan/remove/'.$t['id_kemitraan']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
