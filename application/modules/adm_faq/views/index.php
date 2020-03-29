<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">FAQ List</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('admin/faq/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>No.</th>
						<th>Question</th>
						<th>Answer</th>
						<th>Actions</th>
                    </tr>
                    <?php $no=1; foreach($tbl_faq as $t){ ?>
                    <tr>
						<td><?php echo $no; ?></td>
						<td><?=$t['question_id'] != '' ? $t['question_id'] : $t['question_en']; ?></td>
						<td><?=character_limiter($t['answer_id'] != '' ? $t['answer_id'] : $t['answer_en'], 80) ; ?></td>
						<td>
                            <a href="<?php echo site_url('admin/faq/edit/'.$t['id_faq']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('admin/faq/remove/'.$t['id_faq']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php $no++; } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
