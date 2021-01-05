<style>
.form-group .form-control{ border: 1px solid #c1b4b4 !important; padding: 5px 10px;}
</style>
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
					if(isset($UserData)){
						foreach($UserData as $page);
					}?>

					<div class="header"><h2>ResetPassword</h2></div>
					<div class="body">
						
						<form id="form_validation" method="POST" action="<?php echo isset($page->id) ? base_url('admin/reset-password/'.$page->id) : base_url('admin/reset-password'); ?>" enctype="multipart/form-data">
							
							<div class="clearfix"></div>
							<div class="form-group">
								<label class="form-label">UserName</label><br><br>
								<input type="text" class="form-control" name="old_password" required value="<?php echo $page->Name?>">
							</div>
							<div class="form-group">
								<label class="form-label">Old Password</label><br><br>
								<input type="password" class="form-control" name="old_password" required value="">
							</div>
							
							<div class="form-group">
								<label class="form-label">New Password</label>
								<input type="password" class="form-control" name="new_password" required value="">
							</div>
							
							<div class="form-group">
								<label class="form-label">Confirm Password</label>
								<input type="password" class="form-control" name="confirm_password" required value="">
							</div>
							
							<button class="btn btn-primary waves-effect" type="submit" name="ResetPassword"><?php echo isset($page->id) ? 'UPDATE' : 'SUBMIT'; ?></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Basic Validation -->
	</div>
</section>
