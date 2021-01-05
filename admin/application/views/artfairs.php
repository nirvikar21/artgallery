<!-- mainheader -->

 <div class="ak-sub-banner" style="background-image: url(<?=base_url('assets/')?>images/subheader-img.jpg);"> <span class="ak-sub-banner-dark"></span>

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <h2>Art Fairs</h2>

        <!--<ul class="ak-breadcrumb">

          <li><a href="index.html">Homepage</a></li>

          <li>Press</li>

        </ul>-->

      </div>

    </div>

  </div>

</div>

 

<section class="press-listing">

	<div class="container">

		<div class="row">

		<?php 
			if(isset($exhibitionData) && $exhibitionData!=""){
				foreach($exhibitionData as $page){?>

			<div class="project-block col-md-4 col-xs-12">
				<div class="inner-box photolightgallery">
					<a href="<?=base_url('artfair-detail/'.$page->id)?>"> 
						<div class="image-box">
							<figure><img src="<?=base_url($page->image)?>" alt=""></figure>
						   <div class="overlay-box">
								<div class="content">
									<h3><?=$page->title?></h3>
									<span><?=date('d-M-Y',strtotime($page->start_date))?> - <?=date('d-M-Y',strtotime($page->start_date))?></span>                        
								</div>             
							</div>
						</div>
					</a>
				</div>
			</div>

				<?php }}else{?>
				<div class="alert alert-danger" role="alert" align="center">
					No Record Found
				</div>
				<?php }?>

		</div>

	</div>

</section>