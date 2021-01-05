<?php

	foreach($artistDetailsData as $details);

?>
<!--style="background-image: url(http://rwtpl.com/chawlaarts/assets/images/subheader-img.jpg);"-->
<!-- mainheader -->
 <div class="ak-sub-banner" > <span class="ak-sub-banner-dark"></span>
  <div class="container">
    <div class="col-md-1 col-xs-4 text-center">
      <div class="post-media"> <img class="img-responsive" src="<?=base_url($details->image)?>" alt=""> </div>
    </div>
    <div class="col-md-11 col-xs-8">
      <h3>
        <?=$details->name?>
      </h3>
      <div>
        <ul class="list-inline" style="color:#fff">
          <li>B: <?=$details->born?> </li>
          <li><a href="" class="bio" data-toggle="modal" data-target="#bio-details"><i class="fa fa-link" aria-hidden="true"></i> View Bio</a> 
          </li>
        </ul>
      </div>
      
      <!--<ul class="ak-breadcrumb">

          <li><a href="index.html">Homepage</a></li>

          <li>Artistworks</li>

        </ul>--> 
      
    </div>
  </div>
</div>


<!--<section class="artistworks">
  <div class="container">
    <div class="row">
      <div class=" col-xs-12">
        <div class="artistworks-wrap  clearfix">
          <div class="col-md-1 text-center">
            <div class="post-media"> <img class="img-responsive" src="<?=base_url($details->image)?>" alt=""> </div>
          </div>
       
          
          <div class="col-md-11">
            <h4>
              <?=$details->name?>
            </h4>
            <ul class="list-inline">
              <li><i class="fa fa-child" aria-hidden="true"></i> Born: 1945 </li>
              <li><i class="fa fa-map-marker" aria-hidden="true"></i> Lives:
                <?=$details->city?>
              </li>
            </ul>
            <p>
              <?=$details->description?>
              <span> Read more..</a></span></p>
          </div>
          
          
        </div>
      </div>
    </div>
  </div>
</section>-->
<section class="Art artistworks-listing">
  <div class="container">
    <div class="row">
      <?php if(isset($YouMayLike) && $YouMayLike!=""){
				foreach($YouMayLike as $like){ 
		  $arr_size1=explode('|',$like->size);
		  
		  ?>
      <div class="col-md-3 col-xs-6">
        <div class="panting-single">
          <a data-fancybox data-caption href="<?=base_url($like->profile_image)?>"><div class="panting-thumb"> <img src="<?=base_url($like->profile_image)?>" alt="" class="img-responsive">
          
           </div>
          
          </a>
          <a data-fancybox data-caption href="<?=base_url($like->profile_image)?>"><div class="zoom-icon"><i class="fa fa-search"></i></div></a>
          <div class="panting-info">
            <h5>
              <?=getArtistName($like->artist)?>
            </h5>
            <!--<p> Serigraphy on paper</p>-->
            <small>
            <?=$like->description?>
            </small>
            <div class="box">
              <div class="row">
                <div class="col-md-5"><!--<span class="sku-cod">
                  <?=$like->art_id?>
                  </span>--></div>
                <div class="col-md-12 text-right">
				
				<?php if($like->price!=""){?>
					<span class="price1">Rs. <?=$like->price?></span>
				<?php }else{?>
						<span class="red1">Price on request</span>
				<?php }?>
				</div>
              </div>
            </div>
            <div class="row desktop">
            <div class="col-md-6 col-xs-12 panting-meta pad0"><a href="<?=base_url('art-details/'.$like->id)?>" class="view_details">VIEW DETAILS</a> </div>

              <div class="col-md-6 col-xs-12 panting-meta pad0 text-right" > <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a> </div>
                          </div>
            <div class="row mobile">
             <div class="col-md-6 col-xs-6 panting-meta pad0"><a href="<?=base_url('art-details/'.$like->id)?>" class="view_details">DETAILS</a> </div>
              <div class="col-md-6 col-xs-6 panting-meta pad0 pad20 text-right" > <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a> </div>
             
            </div>
            
            <!--	<div class="panting-meta"> <a href="<?=base_url('art-details/'.$like->id)?>" class="view_details">VIEW DETAILS</a></div>--> 
            
          </div>
        </div>
      </div>
      <?php }
	  }
	  ?>
    </div>
  </div>
</section>
<div class="modal fade contact_us" id="bio-details" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body ">
         <div class="box">

          <h6><?=$details->name?></h6>
<div style="margin-top:-15px;">
        <ul class="list-inline" >
          <li> B: <?=$details->born?> </li>
          <li> 
		  <?php if($details->city!=""){?>
		  <i class="fa fa-map-marker" aria-hidden="true"></i> Lives:<?=$details->city?>
		  <?php }else{?>
		  
		  <?php }?>
            
          </li>
        </ul>
      </div>
          <div class="row">

		 
            <div class="col-md-12">

              <?=$details->description?>

            </div>

            

            

            

			
          </div>

        </div>
        </div>
       
      </div>
      
    </div>
  </div>