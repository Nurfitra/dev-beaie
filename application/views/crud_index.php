<?php
$data = array(
    "site" => $_SERVER['SERVER_NAME'],
    "page" => $this->uri->segment(1),
    "home_id" => $this->input->get('home_id')
);
$this->load->view('layout/admin/header',$data);

foreach($css_files as $file): 
?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><?=$data['page'];?></h3>
            </div>
            <div class="box-body">
				<?php echo $output; ?>
            </div>
        </div>
    </div>
</div>
<?=$this->load->view('layout/admin/footer');?>
