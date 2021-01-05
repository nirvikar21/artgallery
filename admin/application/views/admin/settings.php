 <section class="content">
        <div class="container-fluid">
           
            <!-- Basic Validation -->
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
                            <h2>ADMINISTRATOR SETTINGS</h2>
						</div>
                        <div class="body">
							 <form id="form_validation" action="<?=base_url('admin/settings')?>" method="POST" enctype="multipart/form-data">
								<div class="form-group form-float">
									<div class="pimg" style="float: left;width: 40%;">
										<label class="form-label">Logo</label>
										<input type="file" class="form-control col-md-6" name="logo">
									</div>
									
									<div class="pimg" style="float: left;width: 40%;">
									<?php if(isset($settingsData[0]->logo)){?>
										<input type="hidden" class="form-control col-md-6" name="logo_update" value="<?=$settingsData[0]->logo?>">
										<img src="<?=base_url('assets/images/logos/'.$settingsData[0]->logo)?>" class="" style="height:100px" />
									<?php } ?>
									</div>
									
								</div>
								<div class="clearfix"></div>
								
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="admin_name"  value="<?php if(isset($settingsData[0]->admin_name)){ echo $settingsData[0]->admin_name;} ?>">
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="email" class="form-control" name="admin_email" required value="<?php if(isset($settingsData[0]->admin_email)){ echo $settingsData[0]->admin_email;} ?>">
                                        <label class="form-label">Email</label>
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="admin_enc_password" required value="<?php if(isset($settingsData[0]->admin_dec_password)){ echo $settingsData[0]->admin_dec_password;} ?>">
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="number" class="form-control" name="commision"  value="<?php if(isset($settingsData[0]->commision)){ echo $settingsData[0]->commision;} ?>">
                                        <label class="form-label">Commisoin Applicable for all supermarkets (in %)</label>
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="fb_url"  value="<?php if(isset($settingsData[0]->fb_url)){ echo $settingsData[0]->fb_url;} ?>">
                                        <label class="form-label">Facebook URL</label>
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="tw_url"  value="<?php if(isset($settingsData[0]->tw_url)){ echo $settingsData[0]->tw_url;} ?>">
                                        <label class="form-label">Twitter URL</label>
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="gp_url"  value="<?php if(isset($settingsData[0]->gp_url)){ echo $settingsData[0]->gp_url;} ?>">
                                        <label class="form-label">Google Plus URL</label>
                                    </div>
                                </div>
								<div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="copyrights"  value="<?php if(isset($settingsData[0]->copyrights)){ echo $settingsData[0]->copyrights;} ?>">
                                        <label class="form-label">Copyrights</label>
                                    </div>
                                </div>
								
								<button class="btn btn-primary waves-effect" name="update_settings" type="submit">UPDATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Validation -->
		</div>
    </section>
  