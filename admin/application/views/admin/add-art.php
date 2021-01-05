<style>
.form-group .form-control{ border: 1px solid #c1b4b4 !important; padding: 5px 10px;}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
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
					if(isset($ArtData)){
						foreach($ArtData as $page);
					}?>

					<div class="header"><h2><?php echo isset($page->name) ? $page->name : 'ADD Art'; ?></h2></div>
					<div class="body">
						<form id="form_validation" method="POST" action="<?php echo isset($page->id) ? base_url('admin/add-art/'.$page->id) : base_url('admin/add-art'); ?>" enctype="multipart/form-data">
							

							<div class="col-md-12">&nbsp;</div>
							<div class="clearfix"></div> 
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Choose Artist</label>
									<select class="form-control show-tick select2" name="artist" id="artist" >
										<option value="">Select Artist</option>
										<?php foreach($artistData as $artist){?>
									   <option value="<?=$artist->id?>" <?php echo isset($page->artist) && $page->artist ==  $artist->id ? 'selected' : ''; ?>><?=$artist->name?></option>
										<?php }?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Choose Category</label>
									<select class="form-control show-tick select2" name="category" id="category" >
										<option value="">Select Category</option>
										<?php foreach($categoryData as $cat){?>
									   <option value="<?=$cat->id?>"<?php echo isset($page->category) && $page->category ==  $cat->id ? 'selected' : ''; ?>><?=$cat->category_name?></option>
										<?php }?>
									</select>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Choose SubCategory</label>
									<select class="form-control show-tick select2" name="subcategory" id="subcategory" >
										<option value="">Select SubCategory</option>
										<?php foreach($subcatData as $subcat){ print_r($cat)?>
											<option value="<?=$subcat->id?>" <?php echo isset($page->subcategory) && $page->subcategory ==  $subcat->id ? 'selected' : ''; ?>><?=$subcat->subcat_name?></option>
										<?php }?>	
									</select>								
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Size</label> 
									<input type="text" class="form-control" name="size"  value="<?php echo isset($page->size) ? $page->size : ''; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">ArtId</label> 
									<input type="text" class="form-control" name="art_id"  value="<?php echo isset($page->art_id) ? $page->art_id : ''; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">Year</label>
									<input type="text" class="form-control" name="year"  value="<?php echo isset($page->year) ? $page->year : ''; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">price</label>
									<input type="text" class="form-control" name="price"  value="<?php echo isset($page->price) ? $page->price : ''; ?>">
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">
									<label class="form-label">USD Price</label>
									<input type="text" class="form-control" name="usd_price"  value="<?php echo isset($page->usd_price) ? $page->usd_price : ''; ?>">
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Description</label>
									<textarea name="description" id="" class="form-control"><?php echo isset($page->description) ? $page->description : ''; ?></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="pimg">
										<label class="form-label">Profile Pic</label>
										<input type="file" name="image" />
									</div>
									<div class="pimg">
									<?php if(isset($page->profile_image)){?>
										<input type="hidden" name="image_update" value="<?=$page->profile_image?>">
										<img src="<?=base_url($page->profile_image)?>" class="img-thumbnail" style="height:60px" />
									<?php } ?>
									</div>
								</div>
							</div>	
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Show on HomePage</label>
									<td><input name="show_on_home" type="checkbox" id="show_on_home" class="filled-in check" value="1" <?=(@$page->show_on_home==1)?'checked':''?> /><label for="show_on_home" ></label>
								</div>
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<label class="form-label">Order By</label>
									<input type="text" class="form-control" name="order"  value="<?php echo isset($page->order) ? $page->order : ''; ?>">
								</div>
							</div>
							
							<div class="col-md-6"> </div>
							<div class="clearfix"></div> 
								<div class="form-group">
									<label class="form-label">Status</label><br><br>
									<select class="form-control show-tick" name="status" id="status" required>
									<option value="1" <?php echo isset($page->status) && $page->status ==  1 ? 'selected' : ''; ?>>Active</option>
									<option value="0" <?php echo isset($page->status) && $page->status ==  0 ? 'selected' : ''; ?>>InActive</option>
									</select>
								</div>
							
							<button class="btn btn-primary waves-effect" type="submit" name="addArtist"><?php echo isset($page->id) ? 'UPDATE' : 'SUBMIT'; ?></button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Basic Validation -->
	</div>

</section>
<script>
	var sitepath="<?php echo base_url()?>";
	$("#category").change(function(){
		var category=$( "#category" ).val();
		$.ajax({
			url: sitepath+'admin/cms_controller/ajax_subcat',  
			type: 'post',
			data: {
				id: category,
			},
			success: function( data ) {
				$("#subcategory").html(data);
			}
		});
	});
	
	 $('.select2').select2();
</script>