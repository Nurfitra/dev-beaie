<div class="row">
    <?php foreach ($tbl_home_img as $t){ ?>
    <div class="col-md-4">
        <div class="box box-solid">
            <div class="box-header with-border">
                <i class="fa fa-align-justify"></i>
                <h3 class="box-title">
                    <?=$t['home_title_id'] != "" ?  character_limiter(strip_tags($t['home_title_id']),15) : character_limiter(strip_tags($t['home_title_en']),15); ?>
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <ul style="padding: 0px;">
                    <li style="text-align: justify;list-style:none !important;padding: 5px;">
                        <?=$t['home_desc_id'] != "" ?  character_limiter(strip_tags($t['home_desc_id']), 180) : character_limiter(strip_tags($t['home_desc_en']), 180); ?>
                            
                    </li>
                    <li style="text-align: justify;list-style:none !important;padding: 5px;"><button type="button" onclick="location.href='<?=base_url('admin/img_home/upload?home_id='.$t["id_home"]);?>'" class="btn btn-default"><i class="fa fa-plus"></i> <i class="fa fa-image"></i></button></li>
                </ul>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <?php } ?>
</div>