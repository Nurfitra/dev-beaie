<!-- typography -->
<div class="typrography">
	<div class="container">
		<h3 class="title" ><span>FAQ</span></h3>
		<div class="row">
			<div class="col-xs-12">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<?php $no=1; foreach ($faq->result() as $row) { ?>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$no;?>" aria-expanded="true" aria-controls="collapse<?=$no;?>" style="cursor: pointer;">
							<h4 class="panel-title">
								<?=$this->session->userdata('lang') == 'id' ? $row->question_id : $row->question_en;?>
							</h4>
						</div>
						<div id="collapse<?=$no;?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<?=$this->session->userdata('lang') == 'id' ? $row->answer_id : $row->answer_en;?>
							</div>
						</div>
					</div>
					<?php $no++; } ?>
				</div>
			</div>
		</div>
	</div>
</div>