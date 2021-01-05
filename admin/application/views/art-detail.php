<?php
foreach($artDetailsData as $art);
$category=getCategory($art->category);
//echo"<pre>";print_r($category[0]->category_name);die;
?>
<div class="artwork-details">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="gallerwrap">
					<div class="show" href="<?=base_url($art->profile_image)?>">
					   <a data-fancybox="images" href="<?=base_url($art->profile_image)?>"><img src="<?=base_url($art->profile_image)?>" id="show-img" class="img-responsive"></a>
                       
					</div>
                    <a data-fancybox="images" href="<?=base_url($art->profile_image)?>"> <div class="zoom-icon-1"><i class="fa fa-search"></i></div></a>
				</div>
			</div>
			<div class=" col-md-6">
				<div class="ubproduct_detail">
					<h3 class="ubpro_title hdn"><a href="<?=base_url('artist-details/'.$art->artist)?>"><?=getArtistName($art->artist)?></a></h3>
                     
			<p class="ubprodetrow"><strong class="wit-right">Title  </strong> :&nbsp;&nbsp;<?=$art->description?></p>
            <p class="ubprodetrow"><strong class="wit-right">Size  </strong> :&nbsp;&nbsp;<span><?=$art->size?></span></p>			
            <p class="ubprodetrow"><strong class="wit-right">Medium </strong> :&nbsp;&nbsp;<?=$category[0]->category_name?></p>	
			<p class="ubprodetrow"><strong class="wit-right">Year </strong> :&nbsp;&nbsp;<span><?=$art->year?></span></p>
             <p class="ubprodetrow"><strong class="wit-right">Code </strong> :&nbsp;&nbsp;<span><?=$art->art_id?></span></p>
					<? if($art->price!=""){?>
					<p class="ubprodetrow"><strong id="curr1">INR :</strong>
					<span id="prices" style="padding-right:20px;"><?=$art->price?> </span>
					
					<select name="currency" id="curr">
						<option value="INR">INR</option>
						<option value="USD">USD</option>
					</select>
					<input type="hidden" name="inr_price" id="inr_price" value="<?=$art->price?>" />
					<input type="hidden" name="usd_price" id="usd_price" value="<?=$art->usd_price?>" />
					<?php }else{?>
					<strong><span class="red1">Price on request</span></strong>
					<?php }?>
					</p>
					<p style="margin-bottom: 0px; margin-top: -5px">(Taxes Extra)</p>
					
					<div class="ubproquantity">
					   <div class="ubquanwrap">
					   <a class="action-button" href="javascript:void(0);" data-toggle="modal" data-target="#make-an-enquiry">Enquire now</a>   </div>
					   <p style="margin-top: 10px;">“ The gallery will provide you with an Authenticity Certificate for this work”</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="Art">
	<div class="container">
		<?php 
		$YouMayLike = getOthers($art->artist, $art->id); //echo "<pre>";print_r($YouMayLike);
		if($YouMayLike){ ?>
		<h2 class="headings text-center">View other works by <?=getArtistName($art->artist)?>  </h2>
		<div class="row">
		<?php foreach($YouMayLike as $like){
			$arr_like=explode('|',$like->size);
			?>
			<div class="col-md-3 col-xs-6">
				<div class="panting-single">
                <a data-fancybox="images" href="<?=base_url($like->profile_image)?>"><div class="panting-thumb"> <img src="<?=base_url($like->profile_image)?>" alt="" class="img-responsive">
          
           </div>
          
          </a>
          <a data-fancybox="images" href="<?=base_url($like->profile_image)?>"> <div class="zoom-icon"><i class="fa fa-search"></i></div></a>
                
					<!--<div class="panting-thumb"> <img src="<?=base_url($like->profile_image)?>" alt="" class=""></div>-->
					<div class="panting-info">
						<h5><?=getArtistName($like->artist)?></h5>
						<!--<p> Serigraphy on paper</p>-->
						<small><?=$arr_like[0]?></small>
						<div class="box">
							<div class="row">
								<div class="col-md-5"><!--<span class="sku-cod"><?=$like->art_id?></span>--></div>
								<div class="col-md-7">
								<?php if($like->price!=""){?>
								<span class="price">Rs. <?=$like->price?></span>
								<?php }else{?>
								<span class="red"></span>
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
                        
                        
                        
                        
                        
						<!--<div class="panting-meta"> <a href="<?=base_url('art-details/'.$like->id)?>" class="view_details">VIEW DETAILS</a>  </div>-->
					</div> 
				</div>
			</div>
			<?php }?>		
		</div>
		<?php }?>	
	</div>
</section>


<!-- Modal -->
<div class="modal fade contact_us" id="enquiry_now" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body ">
         <div class="box">

          <h6>Make An Enquiry</h6>
		<form id="contact" method="post" action="">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control" id="contact_name" placeholder="Enter Your Name" name="name" >
				<span class="error">This field is required</span>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <input type="email" class="form-control" id="contact_email" placeholder="Enter Your Email" name="email" >
				<span class="error">A valid email address is required</span>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <input type="text" class="form-control" id="contact_mobile" placeholder="Enter Your Mobile" name="mobile" >
				<span class="error">This field is required</span>
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <textarea id="contact_message" name="message" rows="4" cols="50" placeholder="Enter Your Message" ></textarea>
				<span class="error">This field is required</span>
              </div>
              <div class="requ_callbk" id="contact_submit">
                <button type="submit" id="Rsubmit" class="btn btn-info submit-details">REQUEST A CALLBACK</button>
              </div>
            </div>
          </div>
		</form>
        </div>
        </div>
       
      </div>
      
    </div>
</div>
