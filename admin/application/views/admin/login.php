<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<title>Chawla Art Gallery - Dashboard</title>
		<link rel="icon" href="<?=base_url()?>assets/mkl_admin/favicon.ico" type="image/x-icon">		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">		<link href="<?=base_url()?>assets/mkl_admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
		<!-- Waves Effect Css -->
		<link href="<?=base_url()?>assets/mkl_admin/plugins/node-waves/waves.css" rel="stylesheet" />
		<!-- Animation Css -->
		<link href="<?=base_url()?>assets/mkl_admin/plugins/animate-css/animate.css" rel="stylesheet" />
		<!-- Custom Css -->
		<link href="<?=base_url()?>assets/mkl_admin/css/style.css" rel="stylesheet">
	</head>
<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"> <b>Chawla Art Gallery Admin</b></a>
       </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" action="<?=base_url('admin/login/loginValidate')?>" method="POST">
                    <div class="msg">
						<?php if($this->session->flashdata('loginMsg')){?>
							<p class="validField" id="invalidEmail"><?=$this->session->flashdata('loginMsg')?></p>
						<?php }?>
					</div>
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
							<!--input type="email" id="email" class="emailInput" name="email" placeholder="Enter Your Email" required/-->
							<cite class="validField" id="invalidEmail"></cite>
                            <input type="text" id="email" class="form-control" name="email" placeholder="Email" autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
							<cite class="validField" id="invalid_password"></cite>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" id="getBtn" type="submit">SIGN IN</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<style>
.validField{color:red;}
</style>	
 <!-- Jquery Core Js -->
<script src="<?=base_url()?>assets/mkl_admin/plugins/jquery/jquery.min.js"></script><!-- Bootstrap Core Js -->
<script src="<?=base_url()?>assets/mkl_admin/plugins/bootstrap/js/bootstrap.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="<?=base_url()?>assets/mkl_admin/plugins/node-waves/waves.js"></script>

<!-- Validation Plugin Js -->
<script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-validation/jquery.validate.js"></script>

<!-- Custom Js -->
<script src="<?=base_url()?>assets/mkl_admin/js/admin.js"></script>
<script src="<?=base_url()?>assets/mkl_admin/js/pages/examples/sign-in.js"></script>

<script>
  
$(document).ready(function(){
    $("#getBtn").on('click', function(e){
		e.preventDefault();
		
		var email = $("#email").val();
		var pass = $("#password").val();
		var base_url = $("#base_url").val();
		var error = 0;
		
		if(email == ''){
			$('#invalidEmail').html('Email must not be empty');
			document.getElementById('email').focus();
			error = 1;
			return false;
		}else if(!isEmail(email)){
			$('#invalidEmail').html('Invalid email format');
			document.getElementById('email').focus();
			error = 1;
			$('#invalidEmail').show();
			return false;
		}else{
			$('#invalidEmail').hide();
			error = 0;
		}
			 
		if(pass == ''){
			$('#invalid_password').html('Password must not be empty');
			document.getElementById('password').focus();
			$('#invalid_password').show();
			error = 1;
			return false;
		}else{
			$('#invalid_password').hide();
			error = 0;
		}
		
		if(error != 1){
			$('#sign_in').submit();
			return true;
		}else{
			return false;
		}
	}); 
});
/* For validate Email field */
function isEmail(email) {
 var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
 return regex.test(email);
}
</script>
</body>
</html>