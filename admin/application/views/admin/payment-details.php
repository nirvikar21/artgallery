<?php
$loginDetails = $this->session->userdata('adminDetails');
$ci =& get_instance();
$ci->load->model('admin/admin_model'); 
$Permision=get_permision($loginDetails['admin_type']); 
$arrPermision=unserialize($Permision[0]->permissions);
?>

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
					<div class="header"><h2>All Feedback</h2></div>
					<div class="body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped table-hover dataTable js-exportable">
								<thead>
									<tr> 
										<th>PaymentId</th>
										<th>UserName</th>
										<th>UserMobile</th> 
										<th>PageName</th> 
										<th>Package Info</th>
										<th>Amount</th>
										<th>PaymentDate</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th>PaymentId</th>
										<th>UserName</th>
										<th>UserMobile</th> 
										<th>PageName</th> 
										<th>Package Info</th>
										<th>Amount</th>
										<th>PaymentDate</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</tfoot>
								<tbody>
								<?php 
								if($paymentData != '')
								{
									$i = 0;
									foreach($paymentData as $contacts){ $i++;
								?>
									<tr> 
										<td><?=$contacts->payment_id?></td>
										<td><?=$contacts->name?></td>
										<td><?=$contacts->mobile?></td>  
										<td><?=$contacts->page_name?></td>
										<td><?=$contacts->package_info?></td>
										<td><?=$contacts->amount?></td>
										<td><?=$contacts->payment_date?></td>
										<td><?=$contacts->pstatus?></td>
										<td>
										<?php if(in_array('deletepaymentdetails',$arrPermision)){ ?> 
											<a onclick="return confirm('Are you sure to delete this Payment Data?');" href="<?=base_url('admin/cms_controller/deletePaymt/'.$contacts->pytm_id)?>" class="btn btn-danger" title="Delete"><i class="material-icons">delete_forever</i></a>
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


