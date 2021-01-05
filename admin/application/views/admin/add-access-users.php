<?php 
if(isset($userAccessData)){	
	foreach($userAccessData as $page);		
}?>
<style>
.wid{
    float: left;
    width: 25%;
}
.form-control {
    border: 1px solid #c1b4b4 !important;
    padding: 5px 10px;
}
</style>
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
						<h2>All Manage Permission</h2>
					</div>
					<div class="body">
						<div class="col-md-12 col-xs-12">
	<div class="x_panel">
		<form id="form2" name="form2" method="post" action="<?php echo isset($page->id) ? base_url('admin/add-user-access/'.$page->id) : base_url('admin/add-user-access'); ?>">
       
			<?php if(isset($_SESSION["msg"])){?> 
			<div class="error"><?php echo $_SESSION["msg"];unset($_SESSION["msg"]);?></div> 
			<?php }?>
			
			<?php 
			
			$allPerms = array();
			?>
        <div class="col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
				<label class="form-label">Name</label>
				<input type="text" class="form-control" name="Name"  value="<?php echo isset($page->Name) ? $page->Name : ''; ?>">
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
				<label class="form-label">Email</label>
				<input type="text" class="form-control" name="Email"  value="<?php echo isset($page->Email) ? $page->Email : ''; ?>">
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="form-group">
				<label class="form-label">Password</label>
				<input type="text" class="form-control" name="Psw"  value="<?php echo isset($page->Psw) ? $page->Psw : ''; ?>">
			</div>
		</div> 
		
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12">Access Urls <span class="required">*</span></label>
				<div class="col-md-12 col-sm-12 col-xs-12 form-group">
							   
				   <?php 
					// Loop for access urls
					//$allpermissions = getPermissions();
						//echo"<pre>";print_r();die;
						if(isset($userAccessData[0]->permissions) && $userAccessData[0]->permissions != ''){
							$rpermissions=unserialize($userAccessData[0]->permissions);
						}else{
							$rpermissions = array();
						}
						foreach($allpermissions as $permissionLabel => $permission){ 
							$permission = strtolower($permission);
							$expr = '/[_-]/';
							$arrPermission1 = preg_split($expr, $permission, -1, PREG_SPLIT_NO_EMPTY);
							//echo '<pre>';print_r($arrPermission1);
							$arrPermission = implode(' ', $arrPermission1);
							//$permissionLabel = ucwords($arrPermission);
							$class = "chkPermisssions";
							if(isset($_SESSION["ad_type"]) and $_SESSION["ad_type"] == '1'){
								if($permission  == 'adminlist' or $permission  == 'useraccess') {
									//$inlinestyle = "hideme";$checked = "checked='checked'";
									$class = "chkadminright";
								}
							}
							
							//print_r($allPerms );die;
							?> 
							<div class='ckbox ckbox-primary wid'>
							<input class='<?=$class?>' type='checkbox' name='rpermissions[]' id='chk_<?=$permission?>' value='<?=$permission?>' <?=in_array($permission,$rpermissions)?'checked':''?> />
							<label class='<?=$class?>' name='label_<?=$permission?>' for='chk_<?=$permission?>'><?=$permissionLabel?></label>
							</div>
						<?php }	?>
						
				</div>
				<div class="clearfix"></div>    
			</div>
					  
			<!--<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12"> &nbsp; </label>
				<div class="col-md-9 col-sm-9 col-xs-12">
					<div class='ckbox ckbox-primary'>
						<input class='chkAll' type='checkbox' name='chk_all' id='chk_all' value='$permission' />
						<label class='chk_all' name='chk_all' for='chk_all'>Select All</label>
					</div>
				</div>
				<div class="clearfix"></div>    
			</div>-->
			 
			<div class="form-group">
				<label class="control-label col-md-3 col-sm-3 col-xs-12"> &nbsp; </label>
				<div class="col-md-9 col-sm-9 col-xs-12">
							   
				<input name="Submit" type="submit" class="btn btn-primary"  value="<?=isset($getData['id'])?'Update':'Add'?>"/> </div>
				<div class="clearfix"></div>   
			</div>
                  
		</form>
	</div>
        
</div>
<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<!-- #END# Exportable Table -->
	</div>
</section>





