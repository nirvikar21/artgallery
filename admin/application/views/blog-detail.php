<?php
foreach($blogDetailsData as $blog);
?>
<section class="blog-listing">
	<div class="container">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="blog_detail-wrap">
					  <figure class="blog_media">
						<img src="<?=base_url($blog->image)?>" class="img-responsive center-block" alt=" ">
						<p class="blog_category"><?=$blog->category?></p>
					  </figure>
					  <h2 class="blog_secttl"><time class="blog_post-date"><p class="date">21</p>April, 2020</time> <?=$blog->title?></h2>
					  <div class="blog_detail-desc"> <?=$blog->description?></div>
					</div>
				<hr>
					<div class="text-center">
					  <a class="action-button" href="<?=base_url('blog')?>"> Back to Blogs </a>
					</div>
				</div>
			</div>
		</div> 
	</div>
</section>