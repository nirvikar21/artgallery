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
						<h2>All Pages
						
						<a class="btn btn-primary waves-effect pull-right" href="<?=base_url('admin/add-page')?>">Add New</a>
						
						</h2>
						
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
									<tr>
										<th>#Sno.</th>
										<th>Inner Banner</th>
										<th>Page Name</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#Sno.</th>
										<th>Inner Banner</th>
										<th>Page Name</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</tfoot>
								<tbody>
									
									
								<?php 
								if($pageData != '')
								{
									$i = 2;
									foreach($pageData as $page){
								?>
									<tr>
										<td><?=$i++?></td>
										<td><?php if($page->featured_image != ''){?>
										<img src="<?=base_url($page->featured_image)?>" class="img-thumbnail" style="height:60px; width:200px" />
										<?php }else{ echo "No Banner"; } ?></td>
										<td><?=$page->page_name?></td>
										<?php if($page->status == 1){?>
										<td><label class="label bg-light-blue">Active</label></td>
										<?php }else if($page->status == 0){?>
										<td><label class="label bg-red">InActive</label></td>
										<?php }?>
										
										<td>
										
											<a href="<?=base_url('admin/add-page/'.$page->id)?>" class="btn btn-info" title="View"><i class="material-icons">mode_edit</i></a>
										
										
											<a onclick="return confirm('Are you sure to delete this page?');" href="<?=base_url('admin/Cms_controller/deletePage/'.$page->id)?>" class="btn btn-danger" title="Delete"><i class="material-icons">delete_forever</i></a>
										
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


