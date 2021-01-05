<!-- mainheader -->

 <div class="ak-sub-banner" style="background-image: url(<?=base_url('assets/')?>images/subheader-img.jpg);"> <span class="ak-sub-banner-dark"></span>

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <h2>Press</h2>

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

		<?php foreach($pressData as $press){?>

			<div class="project-block col-md-4 col-xs-12">

				<div class="inner-box photolightgallery">

				<a href="<?=base_url($press->image)?>" data-fancybox="images"> 

					<div class="image-box">
						<figure><img src="<?=base_url($press->image)?>" alt=""></figure>
					    <!--div class="overlay-box">
							<div class="content">
								<h3><?=$press->title?></h3>	
								<span></span>                     
							</div>             
						</div-->
						
						 

					</div>
<h2><?=$press->newspaper?></h2>
					</a>

				</div>

			</div>

		<?php }?>

		</div>

	</div>

</section>