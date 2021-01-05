<style>
.form-group .form-control{ border: 1px solid #c1b4b4 !important; padding: 5px 10px;}
</style>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<section class="content">
	<div class="container-fluid">
		<!-- Basic Validation -->
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php if($this->session->flashdata('adminError')){ ?>
					<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
						<?=$this->session->flashdata('adminError')?>
					</div>
				<?php $this->session->set_flashdata('adminError',''); } if($this->session->flashdata('adminSuccess')){ ?>
					<div class="alert alert-success alert-dismissible">

						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>

						<?=$this->session->flashdata('adminSuccess')?>

					</div>

				<?php $this->session->set_flashdata('adminSuccess',''); } ?> 
				<div class="card">
					<?php
					if(isset($pressData)){
						foreach($pressData as $page);
					}?>

					<div class="header"><h2><?php echo 'ADD Exhibition'; ?></h2></div>
					<div class="body">
						<form id="form_validation" method="POST" action="<?php echo isset($page->id) ? base_url('admin/add-exhibition/'.$page->id) : base_url('admin/add-exhibition'); ?>" enctype="multipart/form-data">
							<div class="form-group">
								<div class="pimg" style="float: left;width: 40%;">
									<label class="form-label">Press Image</label>
									<input type="file" name="image" />
								</div>
								<div class="pimg" style="float: left;width: 40%;">
								<?php if(isset($page->image)){?>
									<input type="hidden" name="image_update" value="<?=$page->image?>">
									<img src="<?=base_url($page->image)?>" class="img-thumbnail" style="height:60px" />
								<?php } ?>
								</div>
							</div>
							<div class="col-md-12">&nbsp;</div> 
							<div class="clearfix"></div>
							<div class="form-group">
								<label class="form-label">Category</label><br><br>
								<select class="form-control show-tick" name="category" id="category" required>
								<option value="">Select Category</option>
								<option value="artfairs" <?php echo isset($page->category) && $page->category ==  "artfairs" ? 'selected' : ''; ?>>ArtFairs</option>
								<option value="exhibtion" <?php echo isset($page->category) && $page->category ==  "exhibtion" ? 'selected' : ''; ?>>Exhibtion</option>
								</select>
							</div>
							<div class="clearfix"></div>
							
							<div class="form-group">
								<label class="form-label">Title</label> 
								<input type="text" class="form-control" name="title"  value="<?php echo isset($page->title) ? $page->title : ''; ?>">
							</div>
							
							<div class="form-group">
								<label class="form-label">Start Date</label> 
								<input type="text" class="form-control" name="start_date" id="datepicker"  value="<?php echo isset($page->start_date) ? $page->start_date : ''; ?>">
							</div>
							
							<div class="form-group">
								<label class="form-label">End Date</label> 
								<input type="text" class="form-control" name="end_date" id="datepicker1"  value="<?php echo isset($page->end_date) ? $page->end_date : ''; ?>">
							</div>
							
							<div class="col-md-12">&nbsp;</div> 
							<div class="clearfix"></div> 
							<div class="form-group">
								<label class="form-label">Status</label><br><br>
								<select class="form-control show-tick" name="status" id="status" required>
								<option value="1" <?php echo isset($page->status) && $page->status ==  1 ? 'selected' : ''; ?>>Active</option>
								<option value="0" <?php echo isset($page->status) && $page->status ==  0 ? 'selected' : ''; ?>>InActive</option>
								</select>
							</div>
							<button class="btn btn-primary waves-effect" type="submit" name="addPress"><?php echo isset($page->id) ? 'UPDATE' : 'SUBMIT'; ?></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Basic Validation -->
	</div>

</section>
<script>
  $( function() {
    $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();
	$('#datepicker1').datepicker({ dateFormat: 'yy-mm-dd' }).val();
  } );
  </script>
