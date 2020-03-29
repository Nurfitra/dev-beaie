<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">News List</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/news/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th>News Title</th>
						<th>News Desc</th>
						<th>Actions</th>
                    </tr>
                    <?php $no=1; foreach($tbl_news as $t){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?=character_limiter($t['news_title_id'] != '' ? $t['news_title_id'] : $t['news_title_en'],80); ?></td>
						<td><?=strip_tags(character_limiter($t['news_desc_id'] != '' ? $t['news_desc_id'] : $t['news_desc_en'],80)); ?></td>
						<td>
                            <a href="<?php echo site_url('admin/news/edit/'.$t['id_news']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/news/remove/'.$t['id_news']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
