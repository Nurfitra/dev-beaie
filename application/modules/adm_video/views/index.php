<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Video List</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/video_upload'); ?>" class="btn btn-success btn-sm">Upload Video</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th>Video</th>
						<th>Video URL</th>
						<th>Actions</th>
                    </tr>
                    <?php $no=1; foreach($tbl_video->result_array() as $t){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><a href="#" onclick="window.open('<?=base_url('uploads/'.$t['video']);?>', 'Video View', 
                                                 'width=400,height=350'); return false;">View Video</a></td>
                        <td><input type="text" id="copy<?php echo $no; ?>" value="<?=base_url('uploads/'.$t['video']);?>">
                        <button class="btn" data-clipboard-target="#copy<?php echo $no; ?>">Copy Link</button></td>
						<td>
                            <!-- <a href="<?php echo site_url('admin/video/edit/'.$t['id_video']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>  -->
                            <a href="<?php echo site_url('admin/video/remove/'.$t['id_video']); ?>" class="btn btn-danger btn-xs" onclick="if(confirm('Ingin Menghapus video ini?')){return true;}else{ return false;}"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
