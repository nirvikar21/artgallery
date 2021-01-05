<!-- JQuery DataTable Css -->
<style>
input {
    border: 1px solid #ccc !important;
    padding: 10px 15px !important;
    border-radius: 5px !important;
}
select {
    border: 1px solid #ccc !important;
    padding: 5px 15px !important;
    border-radius: 5px !important;
}
.bgoption{
	background:green;
	color:#fff
}

.showcheckbox {
position: relative !important;
left: 32px !important;
opacity: 2 !important;
height: 20px;
width: 45px; 
}


</style>
<link rel="stylesheet" href="/resources/demos/style.css">
<link href="<?=base_url()?>assets/mkl_admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<section class="content">
	<div class="container-fluid">
	   <!-- Exportable Table -->
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
						<h2>All images </h2>
					</div>
					<div class="body">
						<div class="row">
							<div class="col-sm-3" style="margin-bottom:0;">
								<div class="form-group">
									<label class="form-label">Category</label>
									<div class="titleKeyWrap"> 
										<select name="category" id="category" class="form-control">
											<option value="">Select Category</option>
											<option value="1" >Paintings</option>
											<option value="2" >Sculptures</option>
											<option value="3" >Lithographs/ Serigraphs</option>
											<option value="4" >Works on Paper</option>
										</select> 
									</div>
								</div>
							</div>
							<div class="col-sm-3" style="margin-bottom:0;">
								<div class="form-group">
									<label class="form-label">Artist</label>
									<div class="tagsKeyWrap"> 
										<input type="text" class="form-control" name="artist" id="artist" placeholder="Artist" data-topic="" value=""><i class="fa fa-search"></i>
										<input type="hidden" class="form-control" name="hdd_artist" id="hdd_artist" value="">
									</div>
								</div>
							</div>
						</div>
						<form name="frm" method="POST" action="<?php echo isset($page->id) ? base_url('admin/save-image/'.$page->id) : base_url('admin/save-image'); ?>" enctype="multipart/form-data"/>
							<input type="hidden" name="id" id="exhibitionId" value="<?=$id?>" />
							<div class="table-responsive">
								<table class="table table-bordered table-striped table-hover dataTable js-exportable">
									<thead>
										<tr>
											<th><input name="show_on_home0" type="checkbox" id="checkIt" class="filled-in check showcheckbox" value="1" /></th>
											<th>Image</th>
											<th>Artist</th>
											<th>Action</th>											
											
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th><input name="show_on_home" type="checkbox" id="isCheck" class="filled-in check showcheckbox" value="1"  /></th>
											<th>Image</th>
											<th>Artist</th>										
											<th>Action</th>
										</tr>
									</tfoot>
									<tbody id="arti">
									<?php
									if(isset($exhibitionImageData) && $exhibitionImageData!=""){		
										foreach(@$exhibitionImageData as $v){
											$arrImage[]=$v->image;
										}
									}			
										//echo"<pre>";print_r($arrImage);die;
									if(isset($pressData) && $pressData!="")
									{ 	$i = 1;
										foreach($pressData as $page){
											$artist=getArtistName($page->artist);
											//echo"<pre>";print_r($artist);die;
											if(isset($arrImage) && $arrImage!=""){
												if(in_array($page->id,@$arrImage)){
													$imgchecked="checked";
												}else{
													$imgchecked="";
												}
											}	
									?>
										<tr>
											<td><input name="Images[]" type="checkbox" id="show_on_home<?=$i?>" class="filled-in check showcheckbox" value="<?=$page->id?>" <?=@$imgchecked?>  /></td>
											<td><img src="<?=base_url($page->profile_image)?>" class="img-thumbnail" style="height:60px" /></td>
											<td><?=$artist?></td>
											<td>
											<?php 
												if (is_array(@$arrImage)) {	
													if(in_array(@$page->id,@$arrImage)){?>
													<a href="<?=base_url('admin/Cms_controller/deleteImage/'.$page->id.'/'.$id)?>" onclick="return confirm('Are you sure to delete this record?');">Delete</a></td>
												<?php }}?>		
										</tr>
									<?php $i++; }} ?>    
									 <input type="submit" name="submit" value="Submit"> 
									 
									</tbody>
								</table>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Exportable Table -->
	</div>
</section>
<script>
$(document).ready(function(){
    $("#checkIt").click(function () {
		if($('#checkIt').is(':checked')){
			$('.check').prop('checked',true);
		}else{
			$('.check').prop('checked',false);
		}
    });
});
  </script>