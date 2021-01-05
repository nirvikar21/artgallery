<link href="<?=base_url()?>assets/mkl_admin/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
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
						<h2>All Artist
							<a class="btn btn-primary waves-effect pull-right" href="<?php echo base_url('admin/add-artist');?>">Add New</a>
							</h2>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
									<tr>
										<th>#Sno.</th>
										<th>Artist</th>
										<th>Name</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#Sno.</th>
										<th>Banner</th>
										<th>Name</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php 
								if(isset($artists) && $artists !=='')
								{
									$i = 1;
									foreach($artists as $artist){
								?>
									<tr>
										<td><?=$i++?></td>
										<td><?php if($artist->image != ''){?>
										<img src="<?=base_url($artist->image)?>" class="img-thumbnail" style="height:60px" />
										<?php }else{ ?>
										<img src="<?=base_url('assets/images/dummy.jpg')?>" class="img-thumbnail" style="height:60px" />
										<?php } ?></td>
										<td><?=$artist->name?></td>
										<td>
											<?php if($artist->status == 1){ ?>
												<label class="label bg-light-blue">Active</label>
											<?php }else{?>
												<label class="label bg-red">InActive</label>
											<?php } ?>
										</td>
										<td>
											
											 <a href="<?=base_url('admin/add-artist/'.$artist->id)?>" class="btn bg-cyan btn-xs waves-effect" title="View/Edit"><i class="material-icons">mode_edit</i></a>
											
											
											<a href="<?=base_url('admin/cms_controller/deleteArtist/'.$artist->id)?>" class="btn bg-cyan btn-xs btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this record?');"><i class="material-icons">delete_forever</i></a>
											
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
	
	
