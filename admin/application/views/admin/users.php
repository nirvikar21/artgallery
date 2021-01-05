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
						<h2>All Users
						<?php if(in_array('adduser',$arrPermision)){ ?>
						<!--<a class="btn btn-info waves-effect pull-right" href="<?=base_url()?>admin/add-product">Add New</a>-->
						<?php }?>
						</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
									<tr>
										<th>#Sno.</th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Location</th> 
										<th>Experience</th>
										<th>Industry</th>
										<th>Functional Area</th>
										<th>Date</th>
										<th>Resume</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#Sno.</th>
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Location</th> 
										<th>Experience</th>
										<th>Industry</th>
										<th>Functional Area</th>
										<th>Date</th>
										<th>Resume</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php 
								if($userData != '')
								{
									$i = 1;
									foreach($userData as $page){
										//$category=getCategory($page->category);
								?>
									<tr>
										<td><?=$i++?></td>
										<td><?=$page->name?></td>
										<td><?=$page->email?></td>
										<td><?=$page->mobile?></td>
										<td><?=$page->city?></td>
										<td><?=$page->experince_max?></td>
										<td><?php $ins = unserialize($page->industry);
												foreach($ins as $v){
													$insdus=getIndustry($v);
													echo $insdus[0]->industry."<br>";
												}
											?>
										</td>
										<td><?php $inss = unserialize($page->functional_area);
												foreach($inss as $vs){
													$Functional=getFunctionalArea($vs);
													echo $Functional[0]->functional_area."<br>";
												}
											?>
										</td>
										<td><?=date('d-m-Y',strtotime($page->added_date))?></td>
										<td><a href="<?php echo base_url('admin/download/').$page->id?>">Download Resume</a></td>
										<td>
											<?php if($page->status == 0){ ?>
											<button type="button" class="btn bg-orange btn-block btn-xs waves-effect">Inactive</button>
											<?php }else{ ?>
											<button type="button" class="btn bg-green btn-block btn-xs waves-effect">Active</button>
											<?php } ?>
										</td>
										<td>
											<form action="<?=base_url('home/AdminUserLogin')?>" method="post" target="_blank">
											<input type="hidden" id="log_email" name="email" value="<?=$page->email?>"> 
											<button class="btn bg-blue btn-xs waves-effect" type="submit" title="View/Edit" name="goLogin"><i class="material-icons">visibility</i></button> 
											</form>
											<?php if(in_array('edituser',$arrPermision)){ ?>
											<a href="<?=base_url()?>admin/add-user/<?=$page->id?>" class="btn bg-cyan btn-xs waves-effect" title="View/Edit"><i class="material-icons">mode_edit</i></a>
											<?php }?>
											<?php if(in_array('deleteuser',$arrPermision)){ ?>
											<a href="<?=base_url('admin/cms_controller/deleteUser/'.$page->id)?>" class="btn bg-red btn-xs waves-effect" title="Delete" onclick=confirm("Press OK to close this option");><i class="material-icons">delete_forever</i></a>
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
