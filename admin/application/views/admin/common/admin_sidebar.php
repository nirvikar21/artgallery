<?php 
if($this->session->userdata('adminDetails')){
	$loginDetails = $this->session->userdata('adminDetails');
}else{
	redirect('admin/login');
}


?>
<style>
span.noti-count {
    background: #000000c2;
    color: #fff !important;
    padding: 1px 6px;
    border-radius: 3px;
}
ul.ml-menu li .waves-block.active{color: #f44336;}
</style>
<section>
	<!-- Left Sidebar -->
	<aside id="leftsidebar" class="sidebar"> 

		<!-- Menu -->
		<div class="menu">
			<?php $url = $this->uri->segment(2); ?>
			<ul class="list">
				<li class="header">MAIN NAVIGATION</li>
				
				
					
				
				<li class="<?php echo  $url == 'banners' || $url == 'add-banners' ? 'active' : ''; ?>">
					<a href="<?=base_url('admin/banners')?>">
						<i class="material-icons">photo_library</i>
						<span>Banners</span>
					</a>
				</li>
				
				<li class="<?php echo  $url == 'artist' || $url == 'add-artist' ? 'active' : ''; ?>">
					<a href="<?=base_url('admin/artist')?>">
						<i class="material-icons">photo_library</i>
						<span>Artist</span>
					</a>
				</li>
				
				<li class="<?php echo  $url == 'category' || $url == 'add-category' ? 'active' : ''; ?>">
					<a href="<?=base_url('admin/category')?>">
						<i class="material-icons">photo_library</i>
						<span>Category</span>
					</a>
				</li>
				
				<li class="<?php echo  $url == 'subcategory' || $url == 'add-subcategory' ? 'active' : ''; ?>">
					<a href="<?=base_url('admin/subcategory')?>">
						<i class="material-icons">photo_library</i>
						<span>SubCategory</span>
					</a>
				</li>
				<li class="<?php echo  $url == 'art' || $url == 'add-art' ? 'active' : ''; ?>">
					<a href="<?=base_url('admin/art')?>">
						<i class="material-icons">photo_library</i>
						<span>Add Art</span> 
					</a>
				</li>
				<li class="<?php echo  $url == 'pages' || $url == 'add-pages' ? 'active' : ''; ?>">
					<a href="<?=base_url('admin/pages')?>">
						<i class="material-icons">photo_library</i>
						<span>Pages</span> 
					</a>
				</li>
				
				<li class="<?php echo  $url == 'exhibition' || $url == 'add-exhibition' || $url == 'add-image' ? 'active' : ''; ?>">
					<a href="<?=base_url('admin/exhibition')?>">
						<i class="material-icons">photo_library</i>
						<span>Exhibition</span> 
					</a>
				</li>
				
				<li class="<?php echo  $url == 'gallery' || $url == 'add-gallery' ? 'active' : ''; ?>">
					<a href="<?=base_url('admin/gallery')?>">
						<i class="material-icons">photo_library</i>
						<span>Press</span> 
					</a>
				</li>
				
				<li class="<?php echo  $url == 'blog' || $url == 'add-blog' ? 'active' : ''; ?>"> 
					<a href="<?=base_url('admin/blog')?>">
						<i class="material-icons">people</i>
						<span>Blog</span>
					</a>
				</li>
				<li class="<?php echo  $url == 'newsletter' ? 'active' : ''; ?>"> 
					<a href="<?=base_url('admin/newsletter')?>">
						<i class="material-icons">people</i>
						<span>Newsletter</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- #Menu -->
	</aside>
	<!-- #END# Left Sidebar -->
</section>
