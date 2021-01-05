
<div class="ak-sub-banner" style="background-image: url(<?=base_url('assets/')?>images/subheader-img.jpg);"> <span class="ak-sub-banner-dark"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h2 style="float:none"><?=$exhibition[0]->title?></h2>
        <p style="color:#fff;"><i class="fa fa-calendar"></i> <?=date('d M,Y',strtotime($exhibition[0]->start_date))?> - <?=date('d M,Y',strtotime($exhibition[0]->end_date))?></p>
      </div>
    </div>
  </div>
</div>
<section class="Art"> 
	<div class="container">	
		<div class="row">
		<?php if(isset($exhibitionData) && $exhibitionData!=""){
				foreach($exhibitionData as $page){ //echo"<pre>";print_r($page);die;?>
			<div class="col-md-3 col-xs-6">
				<div class="panting-single">
						<a data-fancybox="" data-caption="" href="<?=base_url($page->profile_image);?>">
						<div class="panting-thumb"> <img src="<?=base_url($page->profile_image);?>" alt="" class="img-responsive">
						
					   </div></a>
					   <a data-fancybox="" data-caption="" href="<?=base_url($page->profile_image);?>"><div class="zoom-icon"><i class="fa fa-search"></i></div></a>
					   <div class="clearfix"></div>
					   
					   
						<div class="panting-info">
						   <h5><?=$page->artist?></h5>
							<p style="font-size: 13px;margin-bottom: 5px;"><?//=$page->categoryname?></p>
							<small><?$page->size?></small>
							<small><?=$page->description ?></small>
							<div class="box" style="margin: 8px 0px 0px;">
								<div class="row">
									<div class="col-md-5"><span class="sku-cod"></span></div>
										<div class="col-md-7 text-right">
										<?php if($page->price!=""){?>
											<span class="price1">Rs. <?=$page->price?></span>
										<?php }else{?>
												<span class="red1">Price on request </span>
										<?php }?>
										</div>
								</div>
							</div>
								<div class="row desktop">
									<div class="col-md-6 col-xs-12 panting-meta pad0"><a href="<?=base_url('art-details/'.$page->id);?>" class="view_details">VIEW DETAILS</a>  </div>
									<div class="col-md-6 col-xs-12 panting-meta pad0 text-right"> <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a></div>
							   </div>
								<div class="row mobile">
									<div class="col-md-6 col-xs-6 panting-meta pad0"><a href="<?=base_url('art-details/'.$page->id);?>" class="view_details">DETAILS</a>  </div>
									<div class="col-md-6 col-xs-6 panting-meta pad0 pad20 text-right"> <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a>  </div>
							   </div>
							
						</div> 

				  </div>
			</div>
		<?php }}else{?>	
					<div class="alert alert-warning" role="alert" align="center">
					  No Record Found
					</div>
		
		<?php }?>
		</div>
	</div>
</section>