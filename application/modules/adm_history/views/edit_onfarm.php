<div class="row">
  <div class="col-md-12">
    <div class="box box-info">
      <div class="box-header">
        <h3 class="box-title">Select Language</h3>
      </div>
      <?php echo form_open('admin/onfarm'); ?>
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
                    <textarea name="onfarm_desc_id"  id="editor1" rows="10" cols="80" class="ckeditor form-control" id="onfarm_desc_id"><?php echo ($this->input->post('onfarm_desc_id') ? $this->input->post('onfarm_desc_id') : $tbl_onfarm['onfarm_desc_id']); ?></textarea>
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
                    <textarea name="onfarm_desc_en"  id="editor2" rows="10" cols="80" class="ckeditor form-control" id="onfarm_desc_en"><?php echo ($this->input->post('onfarm_desc_en') ? $this->input->post('onfarm_desc_en') : $tbl_onfarm['onfarm_desc_en']); ?></textarea>
                  </div>
                </div>
              </div>
            </div>
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