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
						<h2>All Art</h2>
						<ul class="header-dropdown m-r--5">
							<li>
							
							<a class="btn btn-primary waves-effect pull-right" href="<?php echo base_url('admin/add-art');?>">Add New</a>
							
							</li>
						</ul>
					</div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
									<tr>
										<th>#Sno.</th>
										<th>Profile</th>
										<th>Art Id</th>
										<th>Year</th>
										<th>Price</th>
										<th>Artist</th>
										<th>Status</th>																				<th>Show</th>										
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>#Sno.</th>
										<th>Profile</th>
										<th>Art Id</th>
										<th>Year</th>
										<th>Price</th>
										<th>Artist</th>
										<th>Status</th>																				<th>Show</th>
										<th>Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php 
								if(isset($ArtData) && $ArtData !=='')
								{
									$i = 1;
									foreach($ArtData as $art){
										//print_r($art);die;
										$artist=getArtistName($art->artist)
								?>
									<tr>
										<td><?=$i++?></td>
										<td><?php if($art->profile_image != ''){?>
										<img src="<?=base_url($art->profile_image)?>" class="img-thumbnail" style="height:60px" />
										<?php }else{ ?>
										<img src="<?=base_url('assets/images/dummy.jpg')?>" class="img-thumbnail" style="height:60px" />
										<?php } ?></td>
										<td><?=$art->art_id?></td>
										<td><?=$art->year?></td>
										<td><?=$art->price?></td>
										<td><?=$artist?></td>
										<td>
											<?php if($art->status == 1){ ?>
												<label class="label bg-light-blue">Active</label>
											<?php }else{?>
												<label class="label bg-red">InActive</label>
											<?php } ?>
										</td>										<td><?=($art->show_on_home=='1')?'HomePage':''?></td>
										<td>
											
											 <a href="<?=base_url('admin/add-art/'.$art->id)?>" class="btn bg-cyan btn-xs waves-effect" title="View/Edit"><i class="material-icons">mode_edit</i></a>
											
											
											<a href="<?=base_url('admin/cms_controller/deleteBanner/'.$art->id)?>" class="btn bg-cyan btn-xs btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this record?');"><i class="material-icons">delete_forever</i></a>
											
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