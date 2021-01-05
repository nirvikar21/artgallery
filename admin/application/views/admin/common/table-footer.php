<br><br>		
	<!-- Jquery Core Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>assets/mkl_admin/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?=base_url()?>assets/mkl_admin/js/admin.js"></script>
    <script src="<?=base_url()?>assets/mkl_admin/js/pages/tables/jquery-datatable.js"></script>
    <!-- Demo Js -->
    <script src="<?=base_url()?>assets/mkl_admin/js/demo.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  
  
$(function(){

	

	$('#chk_all').on('change',function(event) {
		if ($(this).is(":checked")){
      		$('.chkPermisssions').prop('checked','checked');
      	}else{
      		$('.chkPermisssions').removeAttr('checked');
      	}
   });
});


</script>
<script>
		CKEDITOR.replace( 'editor1' );
		CKEDITOR.replace( 'editor2' );
		CKEDITOR.replace( 'editor3' );
	</script>
</body>

</html>
  