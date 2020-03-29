<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tbl News Img Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tbl_news_img/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Id Img</th>
						<th>Id News</th>
						<th>Image</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tbl_news_img as $t){ ?>
                    <tr>
						<td><?php echo $t['id_img']; ?></td>
						<td><?php echo $t['id_news']; ?></td>
						<td><?php echo $t['image']; ?></td>
						<td>
                            <a href="<?php echo site_url('tbl_news_img/edit/'.$t['id_img']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tbl_news_img/remove/'.$t['id_img']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
