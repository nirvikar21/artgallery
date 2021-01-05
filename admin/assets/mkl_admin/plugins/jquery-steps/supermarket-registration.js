$(document).ready(function(){
	var base_url = $('#base_url').val();
	
	/*Show time picker */
	//$('#Delivery').timepicker();
	
	/* Validate first tab */
	$("#AccountIfo").click(function(e){
		e.preventDefault();

		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var gender = $('#gender').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var supermarketname = $('#supermarketname').val();
		var supermarket_address = $('#supermarket_address').val();
		var delivery_time = $('#delivery_time').val();
		var supermarket_location = $('#location').val();
		var pass = $('#password').val();
		var cpassword = $('#cpassword').val();
		var error = 1;
		
		if(firstname == ''){
			$('#invalidFirst').html('First name must not be empty');
			document.getElementById('firstname').focus();
			error = 0;
			$('#invalidFirst').show();
			return false;
		}else if(firstname.length <= 3){
			$('#invalidFirst').html('First name must be greater than 3 character');
			document.getElementById('firstname').focus();
			$('#invalidFirst').show();
			error = 0;
			return false;
		}else{
			$('#invalidFirst').hide();
			error = 1;
		}

		if(lastname == ''){
			$('#invalidLast').html('Last name must not be empty');
			document.getElementById('lastname').focus();
			error = 0;
			$('#invalidLast').show();
			return false;
		}else if(lastname.length <= 3){
			$('#invalidLast').html('Last name must be greater than 3 character');
			document.getElementById('lastname').focus();
			$('#invalidLast').show();
			error = 0;
			return false;
		}else{
			$('#invalidLast').hide();
			error = 1;
		}
		
		if(gender == ''){
			$('#invalidGender').html('Gender must not be empty');
			document.getElementById('gender').focus();
			error = 0;
			$('#invalidGender').show();
			return false;
		}else{
			$('#invalidGender').hide();
			error = 1;
		}
		
		if(email == ''){
			$('#invalidEmail').html('Email must not be empty');
			document.getElementById('email').focus();
			error = 0;
			$('#invalidEmail').show();
			return false;
		}else if(!isEmail(email)){
			$('#invalidEmail').html('Invalid email format');
			document.getElementById('email').focus();
			error = 0;
			$('#invalidEmail').show();
			return false;
		}else{
			$('#invalidEmail').hide();
			error = 1;
		}
		
		if(phone == ''){
			$('#invalidPhone').html('Phone Number must not be empty');
			document.getElementById('phone').focus();
			error = 0;
			$('#invalidPhone').show();
			return false;
		}else if(!isValidPhone(phone)){
			$('#invalidPhone').html('Invalid phone number');
			document.getElementById('phone').focus();
			error = 0;
			$('#invalidPhone').show();
			return false;
		}else{
			$('#invalidPhone').hide();
			error = 1;
		}
		
		if(supermarketname == ''){
			$('#invalidName').html('Supermarket name must not be empty');
			document.getElementById('supermarketname').focus();
			error = 0;
			$('#invalidName').show();
			return false;
		}else{
			$('#invalidName').hide();
			error = 1;
		}
		
		if(supermarket_address == ''){
			$('#invalidAddress').html('Supermarket address must not be empty');
			document.getElementById('supermarket_address').focus();
			error = 0;
			$('#invalidAddress').show();
			error = 1;
			return false;
		}else{
			$('#invalidAddress').hide();
			error = 1;
		}
		
		if(delivery_time == ''){
			$('#invalidDelTime').html('Delivery time must not be empty');
			document.getElementById('delivery_time').focus();
			error = 0;
			$('#invalidDelTime').show();
			return false;
		}else{
			$('#invalidDelTime').hide();
			error = 1;
		}
		
		if(supermarket_location == ''){
			$('#invalidLocation').html('Supermarket location must not be empty');
			document.getElementById('location').focus();
			error = 0;
			$('#invalidLocation').show();
			return false;
		}else{
			$('#invalidLocation').hide();
			error = 1;
		}
		
		
		if(pass == ''){
			$('#invalidPass').html('Password must not be empty');
			document.getElementById('password').focus();
			error = 0;
			$('#invalidPass').show();
			return false;
		}else if(pass.length < 8){
			$('#invalidPass').html('Password should be greater than or equal to 8 character/digits');
			document.getElementById('password').focus();
			error = 0;
			$('#invalidPass').show();
			return false;
		}else if(!isValidPassword(pass)){
			$('#invalidPass').html('<ul><li> The password must contain at least 2 digits</li><li>The password must contain an alpha</li><li>The password must contain 1 or more special characters which are defined</li><li> The password must be at least 8 characters long</li></ul>');
			document.getElementById('password').focus();
			error = 0;
			$('#invalidPass').show();
			return false;
		}else{
			$('#invalidPass').hide();
			error = 1;
		}

		if(cpassword == ''){
			$('#invalidCpass').html('Confirm password must not be empty');
			document.getElementById('cpassword').focus();
			error = 0;
			$('#invalidCpass').show();
			return false;
		}else if(pass != cpassword){
			$('#invalidCpass').html('Password not mached');
			document.getElementById('cpassword').focus();
			error = 0;
			$('#invalidCpass').show();
			return false;
		}else{
			$('#invalidCpass').hide();
			error = 1;
		}

		/* if (!$("#verify").is(":checked")) {
			$('#invalidCheck').html('You must agree with our terms & conditions');
			return false;
		} */
		if(error != 0){
			$('#t1').removeClass('active');
			$('#t2').removeClass('disabled');
			$('#t2').addClass('active');
			$('#acc_info').hide();
			$('#up_doc').show();
			
		}

	});

/******************** Go to 2nd tab Start *********************/		
	$("#back1").click(function(e){
		e.preventDefault();
		$('#t1').addClass('active');
		$('#t2').removeClass('active');
		
		$('#acc_info').show();
		$('#up_doc').hide();
	});
/******************** Go to on 2nd tab End *********************/

/******************** Go to back on 2nd tab Start *********************/		
	$("#back2").click(function(e){
		e.preventDefault();
		$('#t2').addClass('active');
		$('#t3').removeClass('active');
		
		$('#up_doc').show();
		$('#sms_veri').hide();
	});
/******************** Go to 2nd tab End *********************/				

/******************** Change profile pic Start*********************/
	$('#image_file').on('change', function(e){  
		e.preventDefault();
		$('#upload_form').submit();
	});
	
	$('#upload_form').on('submit', function(e){  
		e.preventDefault();
		
		if($('#image_file').val() == '')  
		{  
			alert("Please Select the File");  
		}  
		else  
		{  
			$('.prof_loader').show();
				
			$.ajax({ 
				url:base_url+"mkl_supermarket/Supermarket_controller/ajax_upload",   
				method:"POST",  
				data:new FormData(this),  
				contentType: false,  
				cache: false,  
				processData:false,  
				success:function(data)  
				{  
					$('.prof_loader').hide();
					$('#uploaded_image').html(data);  
				}  
			});  
		}  
	}); 
/******************** Change profile pic End*********************************/

/******************** Upload Identity Proof docs Start*********************/
	$('#image_file_2').on('change', function(e){  
		e.preventDefault();
		$('#upload_form_2').submit();
		//alert(data);
	});
	
	$('#upload_form_2').on('submit', function(e){  
		e.preventDefault();
		
		if($('#image_file_2').val() == '')  
		{  
			alert("Please Select the File");  
		}  
		else  
		{  
			$('#identity_proof').html('Uploading...')
			$.ajax({ 
				url:base_url+"mkl_supermarket/Supermarket_controller/ajax_upload_all",   
				method:"POST",  
				data:new FormData(this),  
				contentType: false,  
				cache: false,  
				processData:false,  
				success:function(data)  
				{  
					$('#identity_proof').html(data);  
					$('#identity_proof_doc').val(data);  
				}  
			});  
		}  
	}); 
/******************** Upload Identity Proof docs End **********************/

/******************** Upload Address Proof docs Start *********************/
	$('#image_file_3').on('change', function(e){  
		e.preventDefault();
		$('#upload_form_3').submit();
	});
	
	$('#upload_form_3').on('submit', function(e){  
		e.preventDefault();
		
		if($('#image_file_3').val() == '')  
		{  
			alert("Please Select the File");  
		}  
		else  
		{  
			$('#address_proof').html('Uploading...')
			$.ajax({ 
				url:base_url+"mkl_supermarket/Supermarket_controller/ajax_upload_all",   
				method:"POST",  
				data:new FormData(this),  
				contentType: false,  
				cache: false,  
				processData:false,  
				success:function(data){  
					$('#address_proof').html(data);  
					$('#address_proof_doc').val(data);  
				}  
			});  
		}  
	}); 
/******************** Upload Address Proof docs End ***********************/

/******************** Upload Registration Certificate docs Start *********************/
	$('#image_file_4').on('change', function(e){  
		e.preventDefault();
		$('#upload_form_4').submit();
	});
	
	$('#upload_form_4').on('submit', function(e){  
		e.preventDefault();
		
		if($('#image_file_4').val() == '')  
		{  
			alert("Please Select the File");  
		}  
		else  
		{  
			$('#registration_certificate').html('Uploading...')
			$.ajax({ 
				url:base_url+"mkl_supermarket/Supermarket_controller/ajax_upload_all",   
				method:"POST",  
				data:new FormData(this),  
				contentType: false,  
				cache: false,  
				processData:false,  
				success:function(data){  
					$('#registration_certificate').html(data);  
					$('#registration_certificate_doc').val(data);  
				}  
			});  
		}  
	}); 
/******************** Upload Registration Certificate docs End ***********************/
	
/******************** Upload Registration Certificate docs Start *********************/
	$('#image_file_5').on('change', function(e){  
		e.preventDefault();
		$('#upload_form_5').submit();
	});
	
	$('#upload_form_5').on('submit', function(e){  
		e.preventDefault();
		
		if($('#image_file_5').val() == '')  
		{  
			alert("Please Select the File");  
		}  
		else  
		{  
			$('#others').html('Uploading...')
			$.ajax({ 
				url:base_url+"mkl_supermarket/Supermarket_controller/ajax_upload_all",   
				method:"POST",  
				data:new FormData(this),  
				contentType: false,  
				cache: false,  
				processData:false,  
				success:function(data){  
					$('#others').html(data);  
					$('#others_doc').val(data);  
				}  
			});  
		}  
	}); 
/******************** Upload Registration Certificate docs End ***********************/
	
/******************** Insert Supermarket Data Start *********************/	
	$("#UploadIfo").click(function(e){
		e.preventDefault();

		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var gender = $('#gender').val();
		var email = $('#email').val();
		var phone = $('#phone').val();
		var supermarketname = $('#supermarketname').val();
		var supermarket_address = $('#supermarket_address').val();
		var delivery_time = $('#delivery_time').val();
		var supermarket_location = $('#location').val();
		var pass = $('#password').val();
		
		var about = $('#about').val();
		var identity_proof_doc = $('#identity_proof_doc').val();
		var address_proof_doc = $('#address_proof_doc').val();
		var registration_certificate_doc = $('#registration_certificate_doc').val();
		var others_doc = $('#others_doc').val();
		
		var error = 1;
		
		if(error == 1)
		{
			$('#others').html('Uploading...')
			$.ajax({ 
				url:base_url+"mkl_supermarket/Supermarket_controller/addSupermarketData",   
				type:"POST",  
				data:{
					firstname:firstname,
					lastname:lastname,
					gender:gender,
					email:email,
					phone:phone,
					supermarketname:supermarketname,
					supermarket_address:supermarket_address,
					delivery_time:delivery_time,
					supermarket_location:supermarket_location,
					pass:pass,
					about:about,
					identity_proof_doc:identity_proof_doc,
					address_proof_doc:address_proof_doc,
					registration_certificate_doc:registration_certificate_doc,
					others_doc:others_doc,
				}, 
				success:function(data){  
					if(data.trim() == 'success'){
						$('#t2').removeClass('active');
						$('#t3').removeClass('disabled');
						$('#t3').addClass('active');
						$('#up_doc').hide();
						$('#sms_veri').show(); 
						//alert(data);
					}else{
						alert(data)
					}
					
				}  
			});  
			
			//alert(about+" "+identity_proof_doc+" "+address_proof_doc+" "+registration_certificate_doc+" "+others_doc+" "+firstname+" "+gender+" "+email+" "+phone+" "+supermarketname+" "+delivery_time+" "+supermarket_address+" "+supermarket_location+" "+pass);
		}

	});
/******************** Insert Supermarket Data End *********************/	
});



/* For validate Email field */
function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}

/* For validate Password field */
function isValidPassword(pass) {
	var regex = /^(?=(.*\d){2})(?=.*[a-zA-Z])(?=.*[!@#$%])[0-9a-zA-Z!@#$%]{8,}/;
	return regex.test(pass);
}

/* For validate Phone Number field */
function isValidPhone(phone) {
	var filter = /^[0-9-+]+$/;
	return filter.test(phone);
}


