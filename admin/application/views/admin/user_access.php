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
						<h2>All Access User
						<a class="btn btn-info waves-effect pull-right" href="<?=base_url()?>admin/add-user-access">Add New</a></h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table width="100%" class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
									<tr>
										<th>#Sno.</th>
										<th>Name</th>
										<th>Email</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#Sno.</th>
										<th>Name</th>
										<th>Email</th>	
										<th>Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php 
								if($accessUserData != '')
								{
									$i = 1;
									foreach($accessUserData as $page){
								?>
									<tr>
										<td><?=$i++?></td>
										<td><?=$page->Name?></td>
										<td><?=$page->Email?></td>	
										<td width="50%"	>
											<div style="width:50%;"><a href="<?=base_url()?>admin/add-user-access/<?=$page->id?>" class="btn bg-cyan btn-xs waves-effect" title="View/Edit"><i class="material-icons">mode_edit</i></a>
											<a href="<?=base_url('admin/cms_controller/deleteCoupon/'.$page->id)?>" class="btn bg-red btn-xs waves-effect" title="Delete"><i class="material-icons">delete_forever</i></a>
											
											<a class="btn btn-info waves-effect pull-right" href="<?=base_url()?>admin/reset-password/<?=$page->id?>">Reset Password</a>
											
											</div>
											
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
