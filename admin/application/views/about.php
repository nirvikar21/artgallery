<?php
foreach($pageData as $page);
?>
<!-- mainheader -->
 <div class="ak-sub-banner" style="background-image: url(assets/images/subheader-img.jpg);"> <span class="ak-sub-banner-dark"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>About Us</h2>
        <!--<ul class="ak-breadcrumb">
          <li><a href="index.php">Homepage</a></li>
          <li>About Us</li>
        </ul>-->
      </div>
    </div>
  </div>
</div>
 
<section class="About_us">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1>About <span><?=$page->page_title?></span></h1>
				<p><?=$page->page_content?></p>
				 
				<!--<div class="links">
				  <a href="#" class="link2">COLLECTORS - SELL YOUR ART</a>
				</div>-->
			</div>
			<div class="col-md-6"><img src="<?=base_url($page->featured_image)?>" class="img-responsive"></div>
		</div>
	</div>
</section>
