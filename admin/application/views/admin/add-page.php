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
					<div class="header">
						<h2><?php if(isset($pageData[0]->page_name)){ echo $pageData[0]->page_name ;}else{ echo 'ADD PAGE'; }?> </h2>
					</div>
					<div class="body">
						<?php if(isset($pageData[0]->page_name)){ $actionUrl = 'admin/add-page/'.$pageData[0]->id; }else{ $actionUrl = 'admin/add-page'; }?>
						<form id="form_validation" action="<?=base_url().$actionUrl?>" method="POST" enctype="multipart/form-data">
							
							<div class="form-group form-float">	

								<div class="pimg" style="float: left;width: 40%;">	
									<label class="form-label">Page Banner</label>
									<input type="file" class="form-control col-md-6" name="banner_image">	
									
								</div>
								<div class="pimg" style="float: left;width: 40%;">		
								<?php if(isset($pageData[0]->banner_image) && $pageData[0]->banner_image != ''){?>
									<input type="hidden" class="form-control col-md-6" name="update_banner_image" value="<?php echo isset($pageData[0]->featured_image) ? $pageData[0]->featured_image : ''; ?>">									
									<img src="<?=base_url($pageData[0]->banner_image)?>" class="img-thumbnail" style="height:60px" />	
								<?php } ?>																
								</div>							
							</div>
							<div class="clearfix"></div>
							<div class="form-group form-float">	

								<div class="pimg" style="float: left;width: 40%;">	
									<label class="form-label">Featured Image</label>
									<input type="file" class="form-control col-md-6" name="featured_image">	
									
								</div>
								<div class="pimg" style="float: left;width: 40%;">		
								<?php if(isset($pageData[0]->featured_image) && $pageData[0]->featured_image != ''){?>
									<input type="hidden" class="form-control col-md-6" name="update_featured_image" value="<?php echo isset($pageData[0]->featured_image) ? $pageData[0]->featured_image : ''; ?>">									
									<img src="<?=base_url($pageData[0]->featured_image)?>" class="img-thumbnail" style="height:60px" />	
								<?php } ?>																
								</div>							
							</div>
							<div class="clearfix"></div>
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" name="page_name" required value="<?php if(isset($pageData[0]->page_name)){ echo $pageData[0]->page_name;} ?>">
									<label class="form-label">Page name</label>
								</div>
							</div>							
							<div class="clearfix"></div>
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" class="form-control" name="page_title" required value="<?php if(isset($pageData[0]->page_title)){ echo $pageData[0]->page_title;} ?>">
									<label class="form-label">Page Title</label>
								</div>
							</div>
							
							<div class="form-group form-float">
								<label class="form-label">Description</label>
								<textarea class="form-control" id="editor1" name="page_content" style=" height: 155px; width: 948px;"><?php echo isset($pageData[0]->page_content) ? $pageData[0]->page_content : ''; ?></textarea>
							</div>
							<div class="form-group">
								<label class="form-label">Meta Title</label>
								<textarea class="form-control1" name="meta_title" style="height: 155px; width: 948px; border:block"><?php echo isset($pageData[0]->meta_title) ? $pageData[0]->meta_title : ''; ?></textarea>
							</div>
							<div class="form-group">
								<label class="form-label">Meta Keyword</label>
								<textarea class="form-control1"  name="meta_keyword" style=" height: 155px; width: 948px;"><?php echo isset($pageData[0]->meta_keyword) ? $pageData[0]->meta_keyword : ''; ?></textarea>
							</div>
							<div class="form-group">
								<label class="form-label">Meta Description</label>
								<textarea class="form-control1"  name="meta_description" style=" height: 155px; width: 948px;"><?php echo isset($pageData[0]->meta_description) ? $pageData[0]->meta_description : ''; ?></textarea>
							</div>
							<div class="form-group form-float">
								<div class="form-line">
									<label class="form-label">Status</label><br><br>
									<select class="form-control show-tick" name="status" required>
										<option value="">-- Please Select Status--</option>
										<option value="1" <?php if(isset($pageData[0]->status) && $pageData[0]->status == 1 ){ echo 'selected';} ?>>Active</option>
										<option value="0" <?php if(isset($pageData[0]->status) && $pageData[0]->status == 0 ){ echo 'selected';} ?>>InActive</option>
									</select>
								</div>
							</div>
							<button class="btn btn-primary waves-effect" name="add_page" type="submit"><?php if(isset($pageData)){ echo 'UPDATE';}else{ echo 'SUBMIT'; }?></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
