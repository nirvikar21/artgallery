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
					if(isset($subcategoryData)){
						foreach($subcategoryData as $page);
					}?>

					<div class="header"><h2><?php echo isset($page->name) ? $page->category_name : 'ADD SubCategory'; ?></h2></div>
					<div class="body">
						<form id="form_validation" method="POST" action="<?php echo isset($page->id) ? base_url('admin/add-subcategory/'.$page->id) : base_url('admin/add-subcategory'); ?>" enctype="multipart/form-data">
							

							<div class="col-md-12">&nbsp;</div>
							<div class="clearfix"></div>
							
							<div class="form-group">
								<label class="form-label">Category</label>
								<select class="form-control show-tick" name="cat" id="cat" required>
								<option value="" >Select Category</option>
								<?php foreach($categoryData as $cat){ //print_r($categoryData)?>
								<option value="<?=$cat->id?>" ><?=$cat->category_name?></option>
								<?php }?>
								
								</select>
							</div>
							
							<div class="form-group">
								<label class="form-label">Sub Category Name</label>
								<input type="text" class="form-control" name="subcat_name" required value="<?php echo isset($page->subcat_name) ? $page->subcat_name : ''; ?>">
							</div>
							
							<div class="form-group">
								<label class="form-label">Status</label><br><br>
								<select class="form-control show-tick" name="status" id="status" required>
								<option value="1" <?php echo isset($page->status) && $page->status ==  1 ? 'selected' : ''; ?>>Active</option>
								<option value="0" <?php echo isset($page->status) && $page->status ==  0 ? 'selected' : ''; ?>>InActive</option>
								</select>
							</div>
							<button class="btn btn-primary waves-effect" type="submit" name="addSubCategory"><?php echo isset($page->id) ? 'UPDATE' : 'SUBMIT'; ?></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Basic Validation -->
	</div>
</section>