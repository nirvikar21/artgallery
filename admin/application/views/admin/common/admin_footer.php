	<!-- Jquery Core Js -->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 
    <!-- Bootstrap Core Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/bootstrap/js/bootstrap.js"></script>
	<!-- Select Plugin Js
    <script src="<?=base_url()?>assets/mkl_admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>-->
    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<!-- Jquery Validation Plugin Css -->
	<script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-validation/jquery.validate.js"></script>
	<!-- JQuery Steps Plugin Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-steps/jquery.steps.js"></script>
    <!-- Sweet Alert Plugin Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/sweetalert/sweetalert.min.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/node-waves/waves.js"></script>
	<!-- Jquery CountTo Plugin Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-countto/jquery.countTo.js"></script>
    <!-- Morris Plugin Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/raphael/raphael.min.js"></script>
    <script src="<?=base_url()?>assets/mkl_admin/plugins/morrisjs/morris.js"></script>
    <!-- ChartJs -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/chartjs/Chart.bundle.js"></script>
    <!-- Sparkline Chart Plugin Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>
	<!-- Custom Js -->
    <script src="<?=base_url()?>assets/mkl_admin/js/admin.js"></script>
    <script src="<?=base_url()?>assets/mkl_admin/js/pages/index.js"></script>
	<script src="<?=base_url()?>assets/mkl_admin/js/pages/forms/form-validation.js"></script>
	<script src="<?=base_url()?>assets/mkl_admin/js/pages/forms/advanced-form-elements.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>	
	<!-- Demo Js -->
    <script src="<?=base_url()?>assets/mkl_admin/js/demo.js"></script>  
	<!-- Ckeditor -->
	<script src="https://cdn.ckeditor.com/4.11.1/full/ckeditor.js"></script>

  <script src="<?=base_url('assets/')?>js/jquery-ui.min.js"></script>
  
	<script type="text/javascript">
function updatepriority(id,val,table)
{
	var sitepath="<?php echo base_url()?>";
	var xmlhttp;
	if(navigator.appName=="Microsoft Internet Explorer")
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	else
	{
		xmlhttp = new XMLHttpRequest();
	}
	xmlhttp.onreadystatechange = function() {
	    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
	    }
	}
	xmlhttp.open("GET", sitepath+"admin/cms_controller/priority/"+val+"/"+id+'/'+table, true);
	xmlhttp.send();
}
$(document).ready(function(){  
	$(".Ready").click(function(){    
		id=$( this ).attr("data-id");	
		$.ajax({
			url:'cms_controller/ready',  		
			type: 'post',		
			dataType: "html",		
			data: {id:id},		
			success: function( data ) {			
				$("#Ready"+id).hide();	
			}	
		});  
	});
});
	
$(document).ready(function(){	
	$(".expand").click(function(){		
	var id=$(this).attr("data-id");		
		$.ajax({url:'cms_controller/getOrderDetails',
				type: 'post',		
				dataType: "html",
				data: {id:id},		
				success: function( data ) {			
					$("#tt"+id).html(data);					
				}	
		});		
		$("#tt"+id).toggle();			
	});
})
$(document).ready(function(){	
	$(".rider").click(function(){		
		$('#order_id').val($(this).attr("data-order"));
		$('#user_id').val($(this).attr("data-user"));
	});
})
	var sitepath="<?php echo base_url()?>";
	$( "#artist" ).autocomplete({
		appendTo: '#tagsKeyWrap',
		source: function( request, response ) {
		    //var section=$('#section').attr('data-section');		
			$.ajax({
				url: sitepath+'/admin/cms_controller/getArtist',  
				type: 'post',
				dataType: "json",
				data: {
				   id: request.term,
				},
				success: function( data ) {
					response( data );
				}
			});
		},
		select: function (event, ui) {
			id = ui.item.id; // Give it a name of the_url, where to navigate to.
			$('#hdd_artist').val(ui.item.id);
			var exhibitionId=$('#exhibitionId').val();
			
			 $.ajax({
				url: sitepath+'/admin/cms_controller/searchResult',  
				type: 'post',
				//dataType: "json",
				data: {
				   Artist:id,exhibitionId:exhibitionId,
				},
				success: function( data ) {
					$('#arti').html(data);
					//response( data );
				}
			});
		}
	});
	$("#category").on('change',function(event) {
		var category = $('#category').val();
		var exhibitionId=$('#exhibitionId').val();
		$.ajax({
			url: sitepath+'/admin/cms_controller/getSearch_by_category',  
			type: 'post',
			//dataType: "json",
			data: {
				id:category,exhibitionId:exhibitionId,
			},
			success: function( data ) {
				$('#arti').html(data);
			}
		});
	});
		CKEDITOR.replace( 'editor1' );
		CKEDITOR.replace( 'editor2' );
		CKEDITOR.replace( 'editor3' );


	</script>
</body>
</html>