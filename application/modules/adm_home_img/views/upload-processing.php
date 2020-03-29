<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Upload Image</h3>
      </div>
      <div class="box-body">
        <div class="row clearfix">
        </div>
        <!-- Custom Tabs -->
        
        <form action="<?=base_url('admin/processing_img');?>" class="dropzone" id="myAwesomeDropzone " style="border: 2px dashed #0087F7;border-radius: 5px;background: white;" >
          <div class="dz-message needsclick">
            <h3>Drop files here or click to upload.</h3><br>
            <span class="note needsclick">(Select or Drop Image.)</span><br/>
          </div>
        </form>
        <!-- nav-tabs-custom -->
      </div>
      <div class="box-footer">
        <button type="button" onclick="location.href='<?=base_url('admin/processing_img');?>'" class="btn btn-primary">
        <i class="fa fa-check"></i> Done
        </button>
        <div class="row">
          <?php $no=1; foreach ($image->result() as $row) { ?>
            <div class="col-sm-6 col-md-4 wow fadeInUp animated" data-wow-delay=".<?=$no;?>s"><br/>
              <div class="thumbnail">
                <img src="<?=base_url('uploads/'.$row->image);?>" alt="">
                <div class="caption">
                  <p><a href="<?=base_url('admin/processing_img/remove/'.$row->id_img);?>" class="btn btn-danger" role="button">Delete</a></p>
                </div>
              </div>
            </div>
          <?php $no++; } ?>
        </div>
      </div>
    </div>
  </div>
</div>