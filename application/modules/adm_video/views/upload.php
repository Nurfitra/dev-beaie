<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Video</h3>
      </div>
      <div class="box-body">
        <div class="row clearfix">
        </div>
        <!-- Custom Tabs -->
        
        <form action="<?=base_url('admin/video_upload/'.$this->uri->segment(3));?>" class="dropzone" id="myAwesomeDropzone " style="border: 2px dashed #0087F7;border-radius: 5px;background: white;" >
          <div class="dz-message needsclick">
            <h3>Drop files here or click to upload.</h3><br>
            <span class="note needsclick">(Select or Drop video.)</span><br/>
          </div>
        </form>
        <!-- nav-tabs-custom -->
      </div>
      <div class="box-footer">
        <button type="button" onclick="location.href='<?=base_url('admin/video/');?>'" class="btn btn-success">
        <i class="fa fa-arrow-left"></i> Back
        </button>
        <button type="button" onclick="location.href='<?=base_url('admin/video_upload/'.$this->uri->segment(3));?>'" class="btn btn-primary">
        <i class="fa fa-check"></i> Done
        </button>
        <div class="row">
          <?php $no=1; foreach ($video->result() as $row) { ?>
            <div class="col-sm-6 col-md-4 wow fadeInUp animated" data-wow-delay=".<?=$no;?>s"><br/>
              <div class="thumbnail">
                <div align="center" class="embed-responsive embed-responsive-16by9">
                    <video controls class="embed-responsive-item">
                        <source src="<?=base_url('uploads/'.$row->video);?>" type="video/mp4">
                    </video>
                </div>
                <div class="caption">
                  <p><a href="<?=base_url('admin/video_upload/remove/'.$row->id_video.'/'.$this->uri->segment(3));?>" class="btn btn-danger" role="button">Delete</a></p>
                </div>
              </div>
            </div>
          <?php $no++; } ?>
        </div>
      </div>
    </div>
  </div>
</div>