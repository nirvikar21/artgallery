<!-- JQuery DataTable Css -->
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
						<h2>All Categories</h2>
						<ul class="header-dropdown m-r--5">
							<li>
							
							<a class="btn btn-primary waves-effect pull-right" href="<?php echo base_url('admin/add-category');?>">Add New</a>
							
							</li>
						</ul>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
									<tr>
										<th>#Sno.</th>
										<th>Category</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#Sno.</th>
										<th>Category</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php 
								if(isset($categoryData) && $categoryData !=='')
								{$i = 1;
									foreach($categoryData as $cat){
								?>
									<tr>
										<td><?=$i++?></td>
										<td><?=$cat->category_name ?></td>
										<td>
											<?php if($cat->status == 1){ ?>
												<label class="label bg-light-blue">Active</label>
											<?php }else{?>
												<label class="label bg-red">InActive</label>
											<?php } ?>
										</td>
										<td>
											 <a href="<?=base_url('admin/add-category/'.$cat->id)?>" class="btn bg-cyan btn-xs waves-effect" title="View/Edit"><i class="material-icons">mode_edit</i></a>
											<a href="<?=base_url('admin/cms_controller/deleteCategory/'.$cat->id)?>" class="btn bg-cyan btn-xs btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this record?');"><i class="material-icons">delete_forever</i></a>
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