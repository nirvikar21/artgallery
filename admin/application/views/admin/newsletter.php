
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
						<h2>All NewsLetter</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
									<tr>
										<th>#Sno.</th>
										<th>Newsletter Email</th>									
										<th>Status</th>
										
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#Sno.</th>
										<th>Newsletter Email</th>									
										<th>Status</th>
										
									</tr>
								</tfoot>
								<tbody>
								<?php 
								if($newsletterData != '')
								{
									$i = 1;
									foreach($newsletterData as $page){
								?>
									<tr>
										<td><?=$i++?></td>
										
										<td><?=$page->email?></td>
										<td>
											<?php if($page->status == 0){ ?>
											<button type="button" class="btn bg-orange btn-block btn-xs waves-effect">Inactive</button>
											<?php }else{ ?>
											<button type="button" class="btn bg-green btn-block btn-xs waves-effect">Active</button>
											<?php } ?>
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
