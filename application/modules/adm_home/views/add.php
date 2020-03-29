<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Select Language</h3>
      </div>
      <?php echo form_open('admin/home/add'); ?>
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
                  <label for="home_title" class="control-label">Judul Post</label>
                  <div class="form-group">
                    <input type="text" name="home_title_id" value="<?php echo $this->input->post('home_title'); ?>" placeholder="Judul Post .." class="form-control" id="home_title" />
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="home_desc" class="control-label">Deskripsi Post</label>
                  <div class="form-group">
                    <textarea name="home_desc_id" class="form-control" id="home_desc"><?php echo $this->input->post('home_desc'); ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="lang-en">
              <div class="row">
                <div class="col-md-12">
                  <label for="home_title" class="control-label">Post Title</label>
                  <div class="form-group">
                    <input type="text" name="home_title_en" value="<?php echo $this->input->post('home_title'); ?>" placeholder="Post Title .." class="form-control" id="home_title" />
                  </div>
                </div>
                <div class="col-md-12">
                  <label for="home_desc" class="control-label">Post Description</label>
                  <div class="form-group">
                    <textarea name="home_desc_en" class="form-control" id="home_desc"><?php echo $this->input->post('home_desc'); ?></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="dropzone-previews"></div
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div>
        <!-- nav-tabs-custom -->
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">
        <i class="fa fa-check"></i> Save
        </button>
      </div>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>