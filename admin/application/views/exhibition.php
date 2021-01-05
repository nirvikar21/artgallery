<!-- mainheader -->

 <div class="ak-sub-banner" style="background-image: url(<?=base_url('assets/')?>images/subheader-img.jpg);"> <span class="ak-sub-banner-dark"></span>

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <h2>Exhibitions</h2>

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
					<a href="<?=base_url('exhibition-detail/'.$page->id)?>"> 
						<div class="image-box" style="padding-top:15px">
							<figure><img src="<?=base_url($page->image)?>" alt=""></figure>
						   <!--<div class="overlay-box">
								<div class="content">
									<h3><?=$page->title?></h3>
									<span><?=date('d-M-Y',strtotime($page->start_date))?></span>                       
								</div>             
							</div>-->
						</div>
                        <div class="content text-center">
                        <h3 style="font-weight: 600;
    color: #333;
    margin-bottom: 5px;
    font-size: 16px; padding:0px; margin:8px 0px 8px;"><?=$page->title?></h3>
									<span style="color: #828282;
    font-size: 13px;
    line-height: 15px;
    display: block;
    min-height: 15px; margin-bottom:15px;"><?=date('d-M-Y',strtotime($page->start_date))?> - <?=date('d-M-Y',strtotime($page->end_date))?></span>
                                    </div>
					</a>
                    <div class="clearfix"></div>
				</div>

			</div>

				<?php }
				}else{?>
				<div class="alert alert-danger" role="alert" align="center">
					No Record Found
				</div>
				<?php }?>

		</div>

	</div>

</section>