<style>
#contact label {
	display: inline-block;
	width: 100px;
	text-align: right;
}
textarea {
	vertical-align: top;
	height: 5em;
}
.error {
	display: none;
	margin-left: 10px;
}
.error_show {
	color: red;
	margin-left: 10px;
}
input.invalid, textarea.invalid {
	border: 2px solid red;
}
input.valid, textarea.valid {
	border: 2px solid green;
}
</style>
<section class="home-newsletter">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-xs-12">
        <div class="ubnewsttl">
          <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
          <h2>Subscribe to Newsletter</h2>
          <p class="ubnewstext"><span>Stay Updated with latest news, promotions & offers</span></p>
        </div>
      </div>
      <div class="col-md-5 col-xs-12">
        <div class="form-search">
          <input type="email" value="" placeholder="Your Email Address" name="EMAIL" id="newsmail" class="newsletter-input form-control">
          <span id="message" class="text-white"></span>
          <button id="subscribe" class="button_mini btn" type="submit"> <span>SUBSCRIBE NOW</span> </button>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-xs-12"><span class="logo-bt">
        <h4>About Chawla Art Gallery</h4>
        </span>
        <p class="fo_text">Chawla Art Gallery envisioned as an arena for passionately presenting artworks of quality & lasting in value over the years.One of the pioneers in the art business, the gallery has a history of long association with leading artists.</p>
        <div class="ubsocial">
          <h3 class="footer-title"> FOLLOW US ON</h3>
          <div class="social-links"> <a href="#" class="fa fa-facebook-f"></a> <a href="#" class="fa fa-twitter"></a> <a href="#" class="fa fa-instagram"></a> <a href="#" class="fa fa-linkedin"></a> <a href="#" class="fa fa-youtube"></a> </div>
        </div>
      </div>
      <div class="col-md-2 col-xs-5 ">
        <div class="footer-links  mlspace">
          <h3 class="footer-title">QUICK LINKS</h3>
          <ul class="list-unstyled">
            <li><a href="<?=base_url('about')?>"> About</a></li>
            <!--            <li><a href="#">Arts </a></li>-->
            <li><a href="<?=base_url('artist')?>">Artists </a></li>
            <li><a href="<?=base_url('exhibition')?>">Exhibitions</a></li>
            <li><a href="<?=base_url('press')?>">Press </a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-2 col-xs-7">
        <div class="footer-links mlspace">
          <h3 class="footer-title">&nbsp;</h3>
          <ul class="list-unstyled">
            <li><a href="<?=base_url('blog')?>">Newsletters </a></li>
            <li><a href="<?=base_url('contactus')?>">Contact Us</a></li>
            <li><a href="#" data-toggle="modal" data-target="#sell-your-art">Sell Your Art</a></li>
            <li><a href="<?=base_url('contactus')?>#map">Map</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 col-xs-12">
        <div class="footer-links ubcontact">
          <h3 class="footer-title">CONTACT DETAILS</h3>
          <span> <i class="fa fa-map-marker" aria-hidden="true"></i><strong> Chawla Art Gallery</strong><br>
          Square One Mall, Ground Floor<br>
          C-2 Saket Place, New Delhi 110017,<br>
          India</span> <br>
          <span> <i class="fa fa-paper-plane" aria-hidden="true"></i> <a href="mailto:sc@chawla-artgallery.com">sc@chawla-artgallery.com</a></span> <br>
          <span class="ak_number"> <i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+911126532077">+91-1126532077</a>/ <a href="tel:+911129561819">+91-1129561819</a> </span> </div>
      </div>
    </div>
  </div>
  
  <!-- Container end --> 
  
</footer>
<div class="ubftrbtm">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 ubcopyryt">
        <p class="mb0">© 2020, Chawla-Art gallery.com, All RIghts Reserved</p>
      </div>
    </div>
  </div>
</div>
<a id="back-to-top" href="#" class="scroll-up back-to-top " role="button" title="" data-toggle="tooltip" data-placement="left" data-original-title="Click to return on the top page" > <i class="fa fa-angle-up"></i> </a> 
<!-- Modal -->
<div class="modal fade contact_us" id="make-an-enquiry" role="dialog">
  <div class="modal-dialog"> 
    
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body ">
        <div class="alert alert-success statusMsg" role="alert" style="display:none"> </div>
        <div class="box">
          <h6>Make An Enquiry</h6>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control" id="contact_name" placeholder="Name*" name="name" >
                <span id="errmsgname" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="email" class="form-control" id="contact_email" placeholder="Email*" name="email" >
                <span id="errmsgemail" class="error">A valid email address is required</span> </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control" id="contact_mobile" placeholder="Mobile" name="mobile" >
                <span id="errmsgmobile" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control" id="contact_city" placeholder="City*" name="city" >
                <span id="errmsgcity" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <textarea id="contact_message" name="message" rows="4" cols="50" placeholder="Message" ></textarea>
                <span id="errmsgmessage" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-12">
              <label>Captcha Code</label>
              <div class="row">
                <div class="col-md-4">
                  <?php
			echo "<div class='image image-captcha' style='float:left; font-size:26px;'>";  
			echo $image; 
			echo "</div>";  
			echo "<a style='margin-left: 15px; margin-top:5px;float:left;' href='javascript:;' class ='refresh'><img id ='ref_symbol' style='width:25px; '  src =".base_url()."assets/images/refresh.png></a>";
			 ?>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" id="contact_captcha" name="contact_captcha" class="input_box form-control" data-validation="required" required placeholder="Enter Captcha Code Here">
                    <input type="hidden" id="contact_captchvalid" name="contact_captchvalid" value="<?=$captchaD;?>">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="requ_callbk" >
                <button type="submit" id="Rsubmit1"  class="btn btn-info submit-details">SUBMIT</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade contact_us" id="sell-your-art" role="dialog">
  <div class="modal-dialog"> 
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body ">
        <div class="alert alert-success statusMsg1" role="alert" style="display:none"></div>
        <div class="box">
          <h6>Sell Your Art - Artist</h6>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Name of Artist<span>*</span></label>
                <input type="text" class="form-control" id="sell_name" name="sell_name" placeholder="Name of Artist" >
                <span id="sellerrName" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email Id<span>*</span></label>
                <input type="text" class="form-control" id="sell_email" name="sell_email" placeholder="Email Id" >
                <span id="sellerrEmail" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Mobile Number<span>*</span></label>
                <input type="text" class="form-control" id="sell_mobile" name="sell_mobile" placeholder="Mobile No." >
                <span id="sellerrMobile" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>City<span>*</span></label>
                <input type="text" class="form-control" id="sell_city" name="sell_city" placeholder="City">
                <span id="sellerrCity" class="error">This field is required</span> </div>
            </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label>Medium<span>*</span></label>
                <input type="text" class="form-control" id="sell_medium" name="sell_medium" placeholder="Medium" >
                <span id="sellerrMedium" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Size<span>*</span></label>
                <input type="text" class="form-control" id="sell_size" name="sell_size" placeholder="Art Size" >
                <span id="sellerrSize" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Expected Price - Rs or USD<span>*</span></label>
                <input type="text" class="form-control" id="sell_price" name="sell_price" placeholder="Expected Price - Rs or USD">
                <span id="sellerrPrice" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Upload Art Image <span>*</span></label>
                <div class="input-group">
                  <input type="text" class="form-control" readonly placeholder="Upload Art Image 

">
                  <div class="input-group-btn"> <span class="fileUpload btn btn-success"> <span class="upl" id="upload">Upload </span>
                    <input type="file" class="upload up" id="file" name="file" placeholder="Max. file size: 10 MB" onchange="readURL(this);" />
                    </span> </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Upload Profile <span>*</span></label>
                <div class="input-group">
                  <input type="text" class="form-control" readonly placeholder="Upload Profile 

">
                  <div class="input-group-btn"> <span class="fileUpload btn btn-success"> <span class="upl" id="upload">Upload </span>
                    <input type="file" class="upload up" id="sell_profile" name="file" placeholder="Max. file size: 10 MB" onchange="readURL(this);" />
                    </span> </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label>Captcha Code <span>*</span></label>
              <div class="row">
                <div class="col-md-4">
                  <?php
			echo "<div class='image image-captcha' style='float:left; font-size:26px;'>";  
			echo $image; 
			echo "</div>";  
			echo "<a style='margin-left: 15px; margin-top:5px;float:left;' href='javascript:;' class ='refresh'><img id ='ref_symbol' style='width:25px; '  src =".base_url()."assets/images/refresh.png></a>";
			 ?>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" id="captcha" name="captcha" class="input_box form-control" data-validation="required" required placeholder="Enter Captcha Code Here">
                    <input type="hidden" id="captchvalid" name="captchvalid" value="<?=$captchaD;?>">
                  </div>
                </div>
              
                
              </div>
            </div>  <div class="clearfix"></div>
            <div class="col-md-12">
                  <div class="requ_callbk">
                    <button type="submit" id="sell_your_art" class="btn btn-info submit-details">SUBMIT</button>
                  </div>
                </div>
            
            
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>










<div class="modal fade contact_us" id="Collector" role="dialog">
  <div class="modal-dialog"> 
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body ">
        <div class="alert alert-success statusMsg1" role="alert" style="display:none"></div>
        <div class="box">
          <h6>Sell Your Art - Collector</h6>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label> Name of seller<span>*</span></label>
                <input type="text" class="form-control" id="coll_name" name="coll_name" placeholder="Name of Seller" >
                <span id="collerrName" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email Id<span>*</span></label>
                <input type="text" class="form-control" id="coll_email" name="coll_email" placeholder="Email Id" >
                <span id="collerrEmail" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Mobile Number<span>*</span></label>
                <input type="text" class="form-control" id="coll_mobile" name="coll_mobile" placeholder="Mobile No." >
                <span id="collerrMobile" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>City<span>*</span></label>
                <input type="text" class="form-control" id="coll_city" name="coll_city" placeholder="City">
                <span id="collerrCity" class="error">This field is required</span> </div>
            </div>
            
              <div class="col-md-6">
                <div class="form-group">
                  <label>Artist Name (if collector)<span>*</span></label>
                  <input type="text" class="form-control" id="coll_artist" name="coll_artist" placeholder="Artist Name (if collector)" >
                  <span id="collerrArtist" class="error">This field is required</span></div>
              </div>
            
            <div class="col-md-6">
              <div class="form-group">
                <label>Medium<span>*</span></label>
                <input type="text" class="form-control" id="coll_medium" name="coll_medium" placeholder="Medium" >
                <span id="collerrMedium" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Size<span>*</span></label>
                <input type="text" class="form-control" id="coll_size" name="coll_size" placeholder="Art Size" >
                <span id="collerrSize" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Expected Price - Rs or USD<span>*</span></label>
                <input type="text" class="form-control" id="coll_price" name="coll_price" placeholder="Expected Price - Rs or USD">
                <span id="collerrPrice" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Upload  Image <span>*</span></label>
                <div class="input-group">
                  <input type="text" class="form-control" readonly placeholder="Upload Art Image 

">
                  <div class="input-group-btn"> <span class="fileUpload btn btn-success"> <span class="upl" id="upload">Upload </span>
                    <input type="file" class="upload up" id="collfile" name="collfile" placeholder="Max. file size: 10 MB" onchange="readURL(this);" />
                    </span> </div>
                </div>
              </div>
            </div>
             <div class="col-md-6">
              <div class="form-group">
                <label>Provenance of the work/ Comments<span>*</span></label>
                <input type="text" class="form-control" id="coll_comment" name="coll_comment" placeholder="Provenance of the work ">
                <span id="collerrComment" class="error">This field is required</span> </div>
            </div>
            <div class="col-md-12">
              <label>Captcha Code <span>*</span></label>
              <div class="row">
                <div class="col-md-4">
                  <?php
			echo "<div class='image image-captcha' style='float:left; font-size:26px;'>";  
			echo $image; 
			echo "</div>";  
			echo "<a style='margin-left: 15px; margin-top:5px;float:left;' href='javascript:;' class ='refresh'><img id ='ref_symbol' style='width:25px; '  src =".base_url()."assets/images/refresh.png></a>";
			 ?>
                </div>
                <div class="col-md-8">
                  <div class="form-group">
                    <input type="text" id="coll_captcha" name="coll_captcha" class="input_box form-control" data-validation="required" required placeholder="Enter Captcha Code Here">
                    <input type="hidden" id="coll_captchvalid" name="coll_captchvalid" value="<?=$captchaD;?>">
                  </div>
                </div>
              
                <div class="col-md-12">
                  <div class="requ_callbk">
                    <button type="submit" id="coll_your_art" class="btn btn-info submit-details">SUBMIT</button>
                  </div>
                </div>
              </div>
            </div>  
            
            
            
            
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript" src="<?=base_url('assets/')?>js/jquery.min.js"></script> 
<script type="text/javascript" src="<?=base_url('assets/')?>js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?=base_url('assets/')?>js/owl.carousel.min.js"></script> 
<script type="text/javascript" src="<?=base_url('assets/')?>js/wow.min.js"></script> 
<script type="text/javascript" src="<?=base_url('assets/')?>js/select2.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script> 
<script type="text/javascript" src="<?=base_url('assets/')?>js/custom.js"></script> 
<script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 

<!-- Jquery UI library --> 
<script src="<?=base_url('assets/')?>js/jquery-ui.min.js"></script>
</body></html><script>
	$("#subscribe").click(function(){
		var email=$('#newsmail').val();
		var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
		if (re.test(email)) {
			$.ajax({
				url: '<?php echo base_url()?>/home/NewsLetter',  
				type: 'post',
				dataType: "json",
				data: {
					email:email
				},
				success: function(data) {
					if(data=1){
						alert("Email Registered Successfully");	
					}else{
						alert("Email Already Registered");
					}	
				}
			});
		} else {
			alert("Invalid Email");
		}
		
	})
var sitepath="<?php echo base_url()?>";
	$(document).ready(function(){
		var fadeTime = 300;
		var sitepath="<?php echo base_url()?>";
		$( "#keywordstitle" ).autocomplete({
			appendTo: '#titleKeyWrap',
			source: function( request, response ) {  
				$.ajax({
					url: sitepath+'/home/getArtist',  
					type: 'post',
					//dataType: "json",
					data: {
						id: request.term,
					},
					success: function( data ) {
						$("#responsive").html(data);
					}
				});
			},
			select: function (event, ui) {
				id = ui.item.id; // Give it a name of the_url, where to navigate to.
				$.ajax({
					url: sitepath+'/home/getArtist', 
					type: 'post',
					data: {
						id: id,
					},
					success: function( data ) {
						$("#responsive").html(data);
					}
				}); 
			}
		});
	});
	$("#homeSearch" ).autocomplete({
		appendTo: '.homeWrap',
		source: function( request, response ) {  
			$.ajax({
				url: '<?=base_url()?>home/searchArtist',  
				type: 'post',
				dataType: "json",
				data: {
					keyword: request.term,
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function (event, ui) {
			the_url = ui.item.link; // Give it a name of the_url, where to navigate to.
			window.open(the_url);  // Open the url ( the_url )in a new window
			$('#artistId').val(ui.item.id); // save selected id to input
			//alert(ui.item.id);
		}
	});
	$("#artist" ).autocomplete({
		appendTo: '.searchArea',
		source: function( request, response ) {  
			$.ajax({
				url: '<?=base_url()?>home/searchArtist',  
				type: 'post',
				dataType: "json",
				data: {
					keyword: request.term,
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function (event, ui) {
			
			$('#artist_ids').val(ui.item.id); // save selected id to input
			$.ajax({
				url: '<?=base_url()?>home/searchResult',  
				type: 'post',
				data: {
					Artist: ui.item.id,
				},
				success: function(data) {
					$('#responsive').html(data);
				}
			});
			//alert(ui.item.id);
			
		}
	});
	$("#category").change(function(){
		var category=$("#category").val();
		var artist_ids=$( "#artist_ids" ).val();
		if(category=="0"){
			location.reload();
		}else{
			$.ajax({
				url: '<?=base_url()?>home/searchResult',  
				type: 'post',
				data: {
					category:category,artist_ids:artist_ids
				},
				success: function( data ) {
					$("#responsive").html(data);
				}
			});
		}
	});
   $("#Rsubmit1").click(function(){
		var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		var name = $('#contact_name').val();
		var email = $('#contact_email').val();
		var mobile = $('#contact_mobile').val();
		var city = $('#contact_city').val();
		var message = $('#contact_message').val();
		var contact_captchavalid = $('#contact_captchvalid').val();
		var contact_captcha = $('#contact_captcha').val();
		$("#errmsgname").addClass("error");
		$("#errmsgemail").addClass("error");
		$("#errmsgmobile").addClass("error");
		$("#errmsgcity").addClass("error");
		$("#errmsgmessage").addClass("error");
		
	   if(name.trim() == '' ){
			$("#errmsgname").removeClass("error").addClass("error_show");
			$('#name').focus();
			
			return false;
		}else if(email.trim() == '' ){
			$("#errmsgemail").removeClass("error").addClass("error_show");
			$('#email').focus();
			
			return false;
		}else if(email.trim() != '' && !reg.test(email)){
			$("#errmsgemail").removeClass("error").addClass("error_show");
			$('#email').focus();
			
			return false;
		}else if(mobile.trim() == '' ){
			$("#errmsgmobile").removeClass("error").addClass("error_show");
			$('#mobile').focus();
			
			return false;
		}else if(city.trim() == '' ){
			$("#errmsgcity").removeClass("error").addClass("error_show");
			$('#city').focus();
			return false;
		}else if(message.trim() == '' ){
			$("#errmsgmessage").removeClass("error").addClass("error_show");
			$('#message').focus();
			
			return false;
		}else{
			$.ajax({
				type:'POST',
				url:'<?=base_url()?>home/makeEnquery',
				data:'contactFrmSubmit=1&name='+name+'&email='+email+'&mobile='+mobile+'&city='+city+'&message='+message+'&captchavalid='+contact_captchavalid+'&captcha='+contact_captcha,
				beforeSend: function () {
					$('.submitBtn').attr("disabled","disabled");
					$('.modal-body').css('opacity', '.5');
				},
				success:function(msg){
					$('.statusMsg').hide();
					if(msg == 'ok'){
						$('#contact_name').val('');
						$('#contact_email').val('');
						$('#contact_mobile').val('');
						$('#contact_city').val('');
						$('#contact_message').val('');
						$('.statusMsg').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
						$('.statusMsg').show();
					}else if(msg=="invalid"){
						$('.statusMsg').html('<span style="color:red;">Invalid Captcha, please try again.</span>');
						$('.statusMsg').show();
					}else{
						$('.statusMsg').html('<span style="color:red;">Some problem occurred, please try again.</span>');
						$('.statusMsg').hide();
					}
					$('.submitBtn').removeAttr("disabled");
					$('.modal-body').css('opacity', '');
				}
			});
		} 
   })   
   
   $("#sell_your_art").click("#file",function(){
	   
		var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		var sell_name = $('#sell_name').val();
		var sell_email = $('#sell_email').val();
		var sell_mobile = $('#sell_mobile').val();
		var sell_city = $('#sell_city').val();
		var sell_message = $('#sell_message').val();
		var sell_seller=$('input[name="seller"]:checked').val();
		var sell_artist = $('#sell_artist').val();
		var sell_medium = $('#sell_medium').val();
		var sell_price = $('#sell_price').val();
		var sell_size = $('#sell_size').val();
		var sell_captchavalid = $('#captchvalid').val();
		var sell_captcha = $('#captcha').val();
		
		$("#sellerrName").addClass("error");
		$("#sellerrEmail").addClass("error");
		$("#sellerrCity").addClass("error");
		$("#sellerrMobile").addClass("error");
		$("#sellerrArtist").addClass("error");
		$("#sellerrMedium").addClass("error");
		$("#sellerrSize").addClass("error");
		$("#sellerrPrice").addClass("error");
		$("#errmsgmessage").addClass("error");
		
		
	   if(sell_name == '' ){
			$("#sellerrName").removeClass("error").addClass("error_show");
			$('#sell_name').focus();
			return false;
		}else if(sell_email == '' ){
			$("#sellerrEmail").removeClass("error").addClass("error_show");
			$('#sell_email').focus();
			return false;
		}else if(sell_email!= '' && !reg.test(sell_email)){
			$("#sellerrEmail").removeClass("error").addClass("error_show");
			$('#sell_email').focus();
			return false;
		}else if(sell_mobile == '' ){
			$("#sellerrMobile").removeClass("error").addClass("error_show");
			$('#sell_mobile').focus();
			return false;
		}else if(sell_city == '' ){
			$("#sellerrCity").removeClass("error").addClass("error_show");
			$('#sell_city').focus();
			return false;
		}else if(sell_size == '' ){
			$("#sellerrSize").removeClass("error").addClass("error_show");
			$('#sell_size').focus();
			return false;
		}else if(sell_medium == '' ){
			$("#sellerrMedium").removeClass("error").addClass("error_show");
			$('#sell_medium').focus();
			return false;
		}else if(sell_price == '' ){
			$("#sellerrPrice").removeClass("error").addClass("error_show");
			$('#sell_medium').focus();
			return false;
		
		}else if(sell_message == '' ){
			$("#errmsgmessage").removeClass("error").addClass("error_show");
			$('#message').focus();
			return false;
		}else{
			  var name = document.getElementById("file").files[0].name;
			  var form_data = new FormData();
			  var ext = name.split('.').pop().toLowerCase();
			  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
			  {
			   alert("Invalid Image File");
			  }
			  var oFReader = new FileReader();
			  oFReader.readAsDataURL(document.getElementById("file").files[0]);
			  var f = document.getElementById("file").files[0];
			  
			  var sell_profile = document.getElementById("sell_profile").files[0].name;
			  var form_data = new FormData();
			  var ext1 = sell_profile.split('.').pop().toLowerCase();
			  if(jQuery.inArray(ext1, ['gif','png','jpg','jpeg']) == -1) 
			  {
			   alert("Invalid Image File");
			  }
			  var oFReader = new FileReader();
			  oFReader.readAsDataURL(document.getElementById("sell_profile").files[0]);
			  var sell_profile = document.getElementById("sell_profile").files[0];
			  
			  form_data.append("file", document.getElementById('file').files[0]);
			  form_data.append("sell_profile", document.getElementById('sell_profile').files[0]);
			  form_data.append("name", sell_name);
			  form_data.append("email", sell_email);
			  form_data.append("city",sell_city);
			  form_data.append("mobile",sell_mobile);
			  form_data.append("seller",sell_seller);
			  form_data.append("artist",sell_artist);
			  form_data.append("medium",sell_medium);
			  form_data.append("price",sell_price);
			  form_data.append("size",sell_size);
			  form_data.append("captcha",sell_captcha);
			  form_data.append("captchavalid",sell_captchavalid);
			  
			  
			$.ajax({
				type:'POST',
				url:'<?=base_url()?>home/sellEnquery',
				
				 data: form_data,
				 contentType: false,
                 cache: false,
                 processData: false,
				 
				beforeSend: function () {
					$('.submitBtn').attr("disabled","disabled");
					$('.modal-body').css('opacity', '.5');
				},
				success:function(msg){
					$('.statusMsg1').hide();
					if(msg == 'ok'){
						$('#sell_name').val('');
						$('#sell_email').val('');
						$('#sell_mobile').val('');
						$('#sell_city').val('');
						$('#sell_artist').val('');
						$('#sell_medium').val('');
						$('#sell_price').val('');
						$('#sell_size').val('');
						$('.statusMsg1').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
						$('.statusMsg1').show();
					}else if(msg=="invalid"){
						$('.statusMsg1').html('<span style="color:red;">Invalid Captcha, please try again.</span>');
						$('.statusMsg1').show();
					}else{
						$('.statusMsg1').html('<span style="color:red;">Some problem occurred, please try again.</span>');
						$('.statusMsg1').hide();
					}
					$('.submitBtn').removeAttr("disabled");
					$('.modal-body').css('opacity', '');
				}
			});
		} 
   })
   
   $("#coll_your_art").click("#file",function(){
	   
		var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
		var coll_name = $('#coll_name').val();
		var coll_email = $('#coll_email').val();
		var coll_mobile = $('#coll_mobile').val();
		var coll_city = $('#coll_city').val();
		var coll_artist = $('#coll_artist').val();
		var coll_medium = $('#coll_medium').val();
		var coll_price = $('#coll_price').val();
		var coll_size = $('#coll_size').val();
		var coll_comment = $('#coll_comment').val();
		var coll_captchavalid = $('#coll_captchvalid').val();
		var coll_captcha = $('#coll_captcha').val();
		
		$("#collerrName").addClass("error");
		$("#collerrEmail").addClass("error");
		$("#collerrCity").addClass("error");
		$("#collerrMobile").addClass("error");
		$("#collerrArtist").addClass("error");
		$("#collerrMedium").addClass("error");
		$("#collerrSize").addClass("error");
		$("#collerrPrice").addClass("error");
		$("#collerrComment").addClass("error");
		
		 
		
	   if(coll_name == '' ){
			$("#collerrName").removeClass("error").addClass("error_show");
			$('#coll_name').focus();
			return false;
		}else if(coll_email == '' ){
			$("#collerrEmail").removeClass("error").addClass("error_show");
			$('#coll_email').focus();
			return false;
		}else if(coll_email!= '' && !reg.test(coll_email)){
			$("#collerrEmail").removeClass("error").addClass("error_show");
			$('#coll_email').focus();
			return false;
		}else if(coll_mobile == '' ){
			$("#collerrMobile").removeClass("error").addClass("error_show");
			$('#coll_mobile').focus();
			return false;
		}else if(coll_city == '' ){
			$("#collerrCity").removeClass("error").addClass("error_show");
			$('#coll_city').focus();
			return false;
		}else if(coll_artist ==''){
			$("#collerrArtist").removeClass("error").addClass("error_show");
			$('#coll_artist').focus();
			return false;
		}else if(coll_medium == '' ){
			$("#collerrMedium").removeClass("error").addClass("error_show");
			$('#coll_medium').focus();
			return false;
		}else if(coll_size == '' ){
			$("#collerrSize").removeClass("error").addClass("error_show");
			$('#coll_size').focus();
			return false;
		}else if(coll_price == '' ){
			$("#collerrPrice").removeClass("error").addClass("error_show");
			$('#coll_price').focus();
			return false;
		
		}else{
			  var collfile = document.getElementById("collfile").files[0].name;
			  var form_data = new FormData();
			  var ext = collfile.split('.').pop().toLowerCase();
			  if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
			  {
			   alert("Invalid Image File");
			  }
			  var oFReader = new FileReader();
			  oFReader.readAsDataURL(document.getElementById("collfile").files[0]);
			  var collfile = document.getElementById("collfile").files[0];
			  
			  
			  
			  form_data.append("collfile", document.getElementById('collfile').files[0]);
			  form_data.append("name", coll_name);
			  form_data.append("email", coll_email);
			  form_data.append("city",coll_city);
			  form_data.append("mobile",coll_mobile);
			  form_data.append("artist",coll_artist);
			  form_data.append("medium",coll_medium);
			  form_data.append("price",coll_price);
			  form_data.append("size",coll_size);
			  form_data.append("size",coll_comment);
			  form_data.append("captcha",coll_captcha);
			  form_data.append("captchavalid",coll_captchavalid);
			  
			  
			$.ajax({
				type:'POST',
				url:'<?=base_url()?>home/CollectionEnquery',
				 data: form_data,
				 contentType: false,
                 cache: false,
                 processData: false,
				 
				beforeSend: function () {
					$('.submitBtn').attr("disabled","disabled");
					$('.modal-body').css('opacity', '.5');
				},
				success:function(msg){
					$('.statusMsg1').hide();
					if(msg == 'ok'){
						$('#coll_name').val('');
						$('#coll_email').val('');
						$('#coll_mobile').val('');
						$('#coll_city').val('');
						$('#coll_artist').val('');
						$('#coll_medium').val('');
						$('#coll_price').val('');
						$('#coll_size').val('');
						$('.statusMsg1').html('<span style="color:green;">Thanks for contacting us, we\'ll get back to you soon.</p>');
						$('.statusMsg1').show();
					}else if(msg=="invalid"){
						$('.statusMsg1').html('<span style="color:red;">Invalid Captcha, please try again.</span>');
						$('.statusMsg1').show();
					}else{
						$('.statusMsg1').html('<span style="color:red;">Some problem occurred, please try again.</span>');
						$('.statusMsg1').hide();
					}
					$('.submitBtn').removeAttr("disabled");
					$('.modal-body').css('opacity', '');
				}
			});
		} 
   })
	$(document).ready(function() {
		$("a.refresh").click(function() {
			jQuery.ajax({
				type: "POST",
				dataType: "json",
				url: "<?php echo base_url(); ?>" + "/home/captcha_refresh",
				success: function(res) {
					if (res)
					{
						jQuery("div.image").html(res.img);
						jQuery("#captchvalid").val(res.captchaD);
					}
				}
			});
		});
	});
	$('#curr').change(function(){
		var currency=$('#curr').val();
		var usd_price=$('#usd_price').val();
		var inr_price=$('#inr_price').val();
		if(currency=="USD"){
			
			$('#curr1').html('USD :');
			$('#prices').html(usd_price);
		}else{
			$('#curr1').html('INR :');
			$('#prices').html(inr_price);
		}
		/*$.ajax({
			url: '<?=base_url()?>home/currencyConverter',  
			type: 'post',
			data: {
				currency:currency,price:price
			},
			success: function( data ) {
				$('#sss').show();
				$('#sss').html(data);
				
			}
		});*/
	})
</script>