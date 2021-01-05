<?php
$loginDetails = $this->session->userdata('adminDetails');
$ci =& get_instance();
$ci->load->model('admin/admin_model'); 
$Permision=get_permision($loginDetails['admin_type']); 
$arrPermision=unserialize($Permision[0]->permissions);
?>

<!-- JQuery DataTable Css -->
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
						<h2>All logo
						<?php if(in_array('addlogo',$arrPermision)){ ?>
						<a class="btn btn-info waves-effect pull-right" href="<?=base_url()?>admin/add-logo">Add New</a>
						<?php }?>
						</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
									<tr>
										<th>#Sno.</th>
										<th>Image</th>
										<th>Logo</th>
										<th>Name</th> 
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#Sno.</th>
										<th>Image</th>
										<th>Logo</th>
										<th>Name</th> 
										<th>Status</th>
										<th>Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php 
								if($testimonialData != '')
								{
									$i = 1;
									foreach($testimonialData as $page){
								?>
									<tr>
										<td><?=$i++?></td>
										<td><img src="<?=base_url('assets/uploads/testimonial/'.$page->testimonial_image)?>" class="img-thumbnail" style="height:60px" /></td>
										<td><img src="<?=base_url('assets/uploads/testimonial/'.$page->testimonial_logo)?>" class="img-thumbnail" style="height:60px" /></td>
										<td><?=$page->name?></td> 
										
										<td>
											<?php if($page->status == 0){ ?>
											<button type="button" class="btn bg-orange btn-block btn-xs waves-effect">Inactive</button>
											<?php }else{ ?>
											<button type="button" class="btn bg-green btn-block btn-xs waves-effect">Active</button>
											<?php } ?>
										</td>
										<td>
										<?php if(in_array('editlogo',$arrPermision)){ ?>
											<a href="<?=base_url()?>admin/add-logo/<?=$page->id?>" class="btn bg-cyan btn-xs waves-effect" title="View/Edit"><i class="material-icons">mode_edit</i></a>
										<?php }?>	
										<?php if(in_array('deletelogo',$arrPermision)){ ?>	
											<a href="<?=base_url('admin/cms_controller/deleteLogo/'.$page->id)?>" class="btn bg-red btn-xs waves-effect" title="Delete"><i class="material-icons">delete_forever</i></a>
										<?php }?>	
										</td>
									</tr>
								<?php }	} ?>    
								   
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Exportable Table -->
	</div>
</section>
