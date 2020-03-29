<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Select Language</h3>
      </div>
      <?php echo form_open_multipart('admin/history'); ?>
      <div class="box-body">
        <div class="row clearfix">
        </div>
        <!-- Custom Tabs -->
        <div class="nav-tabs-custom">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#lang-id" data-toggle="tab" aria-expanded="true"><span class="flag-icon flag-icon-id"></span></a></li>
            <li class=""><a href="#lang-en" data-toggle="tab" aria-expanded="false"><span class="flag-icon flag-icon-us"></span></a></li>
          </ul>
          <div class="tab-content">
            <!-- /.tab-pane -->
            <div class="tab-pane active" id="lang-id">
              <div class="row">
                <div class="col-md-12">
                  <label for="home_desc" class="control-label">Deskripsi Post</label>
                  <div class="form-group">
                    <textarea name="history_desc_id"  id="editor1" rows="10" cols="80" class="ckeditor form-control" id="history_desc_id"><?php echo ($this->input->post('history_desc_id') ? $this->input->post('history_desc_id') : $tbl_history['history_desc_id']); ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="lang-en">
              <div class="row">
                <div class="col-md-12">
                  <label for="home_desc" class="control-label">Post Description</label>
                  <div class="form-group">
                    <textarea name="history_desc_en"  id="editor2" rows="10" cols="80" class="ckeditor form-control" id="history_desc_en"><?php echo ($this->input->post('history_desc_en') ? $this->input->post('history_desc_en') : $tbl_history['history_desc_en']); ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->

        <div class="col-md-12">
          <label for="home_desc" class="control-label">Cover Video</label>
          <div class="form-group">
            <input type="file" name="cover_video">
          </div>
        </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">
        <i class="fa fa-check"></i> Save
        </button>
      <?php echo form_close(); ?>
      <hr/>
        <div class="col-md-12">
          <form action="<?=base_url('admin/history_video');?>" class="dropzone" id="myAwesomeDropzonex" style="border: 2px dashed #0087F7;border-radius: 5px;background: white;" >
            <label for="home_desc" class="control-label">History Video</label>
            <div class="dz-message needsclick">
              <h3>Drop files here or click to upload.</h3><br>
              <span class="note needsclick">(Select or Drop Image.)</span><br/>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>