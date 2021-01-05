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
						<h2>All Pages</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
									<tr>
										<th>#Sno.</th>
										<th>Mobile No.</th>
										<th>Email</th>
										
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#Sno.</th>
										<th>Mobile No.</th>
										<th>Email</th>
										
										<th>Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php 
								if($SettingData != '')
								{
									$i = 1;
									foreach($SettingData as $page){
								?>
									<tr>
										<td><?=$i++?></td>
										<td><?=$page->mobile_no?></td>
										<td><?=$page->email?></td>
										<td>
											<a href="<?=base_url('admin/add-setting/'.$page->id)?>" class="btn btn-info" title="View"><i class="material-icons">visibility</i></a>
											
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


