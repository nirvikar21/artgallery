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
					if(isset($newBannerData)){
						foreach($newBannerData as $page);
					}?>

					<div class="header"><h2><?php echo isset($page->title) ? $page->title : 'ADD Banner'; ?></h2></div>
					<div class="body">
						<form id="form_validation" method="POST" action="<?php echo isset($page->id) ? base_url('admin/add-banners/'.$page->id) : base_url('admin/add-banners'); ?>" enctype="multipart/form-data">
							<div class="form-group">
								<div class="pimg" style="float: left;width: 40%;">
									<label class="form-label">Image</label>
									<input type="file" name="image" />
								</div>
								<div class="pimg" style="float: left;width: 40%;">
								<?php if(isset($page->image)){?>
									<input type="hidden" name="image_update" value="<?=$page->image?>">
									<img src="<?=base_url($page->image)?>" class="img-thumbnail" style="height:60px" />
								<?php } ?>
								</div>
							</div>
							
							<div class="form-group">
								<div class="pimg" style="float: left;width: 40%;">
									<label class="form-label">Mobile Banner</label>
									<input type="file" name="m_image" />
								</div>
								<div class="pimg" style="float: left;width: 40%;">
								<?php if(isset($page->m_image)){?>
									<input type="hidden" name="m_image_update" value="<?=$page->m_image?>">
									<img src="<?=base_url($page->m_image)?>" class="img-thumbnail" style="height:60px" />
								<?php } ?>
								</div>
							</div>

							<div class="col-md-12">&nbsp;</div>
							<div class="clearfix"></div> 
							<div class="form-group">
								<label class="form-label">Title</label>
								<input type="text" class="form-control" name="title" required value="<?php echo isset($page->title) ? $page->title : ''; ?>">
							</div>
							<div class="form-group">
								<label class="form-label">Description</label> 
								<textarea class="form-control" name="description" style=" height: 155px; width: 948px;"><?php echo isset($page->description) ? $page->description : ''; ?></textarea>
							</div>
							<div class="form-group">
								<label class="form-label">Url Link</label>
								<input type="text" class="form-control" name="url_link" required value="<?php echo isset($page->url_link) ? $page->url_link : ''; ?>">
							</div>
							<div class="form-group">
								<label class="form-label">Status</label><br><br>
								<select class="form-control show-tick" name="status" id="status" required>
								<option value="1" <?php echo isset($page->status) && $page->status ==  1 ? 'selected' : ''; ?>>Active</option>
								<option value="0" <?php echo isset($page->status) && $page->status ==  0 ? 'selected' : ''; ?>>InActive</option>
								</select>
							</div>
							<button class="btn btn-primary waves-effect" type="submit" name="addBanner"><?php echo isset($page->id) ? 'UPDATE' : 'SUBMIT'; ?></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Basic Validation -->
	</div>

</section>

