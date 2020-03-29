



    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->

  

  <footer class="main-footer">

    <strong>Copyright &copy; 2020 <a href="https://beaie.co.id">beaie.id</a>.</strong> All rights

    reserved.

  </footer>



</div>

<!-- ./wrapper -->

<!-- jQuery 3 -->

<!-- Bootstrap 3.3.7 -->

<script src="<?=base_url('assets');?>/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- SlimScroll -->

<script src="<?=base_url('assets');?>/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->

<script src="<?=base_url('assets');?>/plugins/fastclick/lib/fastclick.js"></script>

<!-- AdminLTE App -->

<script src="<?=base_url('assets');?>/js/adminlte.min.js"></script>

<script src="<?=base_url('assets');?>/plugins/iCheck/icheck.min.js"></script>

<script src="<?=base_url('assets');?>/plugins/ckeditor/ckeditor.js"></script>

<script src="<?=base_url('assets');?>/plugins/ckfinder/ckfinder.js"></script>

<script src="<?=base_url('assets');?>/plugins/ckeditor/config.js"></script>

<script src="<?=base_url('assets');?>/plugins/ckeditor/config.js"></script>
<?php return isset($_SESSION['logged'])==1?true:false; ?>
<script type="text/javascript">

  function CopyText() {
    /* Get the text field */
    var copyText = document.getElementById("copy");

    /* Select the text field */
    copyText.select();

    /* Copy the text inside the text field */
    document.execCommand("copy");

    /* Alert the copied text */
    alert("Copied the text: " + copyText.value);
  } 
  function addimg()

  {

    $('#partnerfile').append('<span><input style="margin-top: 5px;" type="file" name="kemitraan_img[]" class="form-control" id="kemitraan_img" /></span>');

  }

  function addimg_product()

  {

    $('#productfile').append('<span><input style="margin-top: 5px;" type="file" name="product_img[]" class="form-control" id="product_img" /></span>');

  }

  $(document).ready(function () {

    $('.sidebar-menu').tree();

    $('input').each(function(){

      var self = $(this),

        label = self.next(),

        label_text = label.html();



      label.remove();

      self.iCheck({

        checkboxClass: 'icheckbox_line-aero',

        radioClass: 'iradio_line-aero',

        insert: '<div class="icheck_line-icon"></div>' + label_text

      });

    });

  });

  Dropzone.options.myAwesomeDropzone = {

    paramName: "file", // The name that will be used to transfer the file

    maxFilesize: 2, // MB

    hiddenInputContainer: "home_id"

  };

  

  Dropzone.options.myAwesomeDropzonex = {

    maxFiles: 1,

    accept: function(file, done) {

      console.log("uploaded");

      done();

    },

    init: function() {

      this.on("maxfilesexceeded", function(file){

          alert("No more files please!");

      });

    }

  };

</script>

</body>

</html>

