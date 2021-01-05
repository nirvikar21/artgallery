<section id="home" class="desktop">  
  <div id="main-slide" class="owl-carousel1 owl-theme">
	<?php foreach($bannerData as $banner){?>
      <div class="item"> <img class="img-fluid" src="<?=base_url($banner->image)?>" alt="slider">
        <div class="container">
          <div class="slider-content">
            <h2><?=$banner->title?> </h2>
            <h5><?=$banner->description?></h5>
            <div> <a href="<?=$banner->url_link?>" class="action-button blue">EXPLORE GALLERY </a> </div>
          </div>
        </div>
      </div>
	<?php }?> 
  </div>
</section>
<section id="home" class="mobile">  
  <div id="main-slide-1" class="owl-carousel owl-theme">
	<?php foreach($bannerData as $banner){?>
      <div class="item"> <a href="<?=$banner->url_link?>"><img class="img-fluid" src="<?=base_url($banner->m_image)?>" alt="slider"></a>
        <div class="container">
          <div class="slider-content desktop">
            <h2><?=$banner->title?> </h2>
            <h5><?=$banner->description?></h5>
            <div> <a href="<?=$banner->url_link?>" class="action-button blue">EXPLORE GALLERY </a> </div>
          </div>
        </div>
      </div>
	<?php }?> 
  </div>
</section>
 
 <section class="Art">
	<div class="container">
		<h2 class="headings-all">Paintings</h2>  <!-- <span> <a href="<?=base_url('artist')?>" class="view_all">View All</a><i class="fa fa-caret-right" aria-hidden="true"></i></span>--> 
		<div class="border"></div>
		<div class="row">
        <div class="col-md-12">
         <div class="owl-carousel owl-theme" id="paintings">
		<?php foreach($artPantingData as $art){
				$Arr_size=explode('|',	$art->size);
			?>
			<div class="item">
				<div class="panting-single">
					<a data-fancybox data-caption href="<?=base_url($art->profile_image)?>">
                    <div class="panting-thumb"> <img src="<?=base_url($art->profile_image)?>" alt="" class="img-responsive">
                    
				   </div></a>
                   <a data-fancybox data-caption href="<?=base_url($art->profile_image)?>"><div class="zoom-icon"><i class="fa fa-search"></i></div></a>
                   <div class="clearfix"></div>
                   
                   
					<div class="panting-info">
					   <h5><?=getArtistName($art->artist)?></h5>
					<!--<p> Serigraphy on paper</p>-->
					  <small><?=$art->description?></small>
						<div class="box">
							<div class="row">
								<div class="col-md-5"><!--<span class="sku-cod"><?=$art->art_id?></span>--></div>
		<div class="col-md-12 text-right">
			<?php if($art->price!=""){?>
					<span class="price1">Rs. <?=$art->price?></span>
			<?php }else{?>
					<span class="red1">Price on request </span>
			<?php }?></div>
						   </div>
                           
						</div>
                        <div class="row desktop">
                        <div class="col-md-6 col-xs-12 panting-meta pad0"><a href="<?=base_url('art-details/'.$art->id)?>" class="view_details">VIEW DETAILS</a>  </div>
								<div class="col-md-6 col-xs-12 panting-meta pad0 text-right"> <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a>  </div>
								
						   </div>
                           <div class="row mobile">
                           <div class="col-md-6 col-xs-6 panting-meta pad0"><a href="<?=base_url('art-details/'.$art->id)?>" class="view_details">DETAILS</a>  </div>
								<div class="col-md-6 col-xs-6 panting-meta pad0 pad20 text-right"> <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a>  </div>
								
						   </div>
						
					</div> 

			  </div>
			</div>
		<?php }?>	
        </div>
        </div>
		</div>
        </div>
	</div>
 </section>

 <section class="Art Sculptures">
	<div class="container">
		<h2 class="headings-all">Sculptures</h2>  <!-- <span>  <a href="<?=base_url('artist')?>" class="view_all">View All</a> <i class="fa fa-caret-right" aria-hidden="true"></i></span>-->
		<div class="border"></div>
        
		<div class="row">
         <div class="col-md-12">
         <div class="owl-carousel owl-theme" id="sculptures">
			<?php foreach($artSculpturesData as $art1){
			$arr_size1=explode('|',$art1->size);
				?>
			<div class="item">
				<div class="panting-single">
					<a data-fancybox data-caption href="<?=base_url($art1->profile_image)?>">
                    <div class="panting-thumb "> <img src="<?=base_url($art1->profile_image)?>" alt="" class="img-responsive">
                    
				   </div>
                   
                   </a>
                   <a data-fancybox data-caption href="<?=base_url($art1->profile_image)?>"><div class="zoom-icon"><i class="fa fa-search"></i></div></a>
				<div class="panting-info">
				   <h5><?=getArtistName($art1->artist)?></h5>
				  <small><?=$art1->description?></small>
				 <div class="box">
				  <div class="row">
				  <div class="col-md-5"><!--<span class="sku-cod"><?=$art1->art_id?></span>--></div>
				   <div class="col-md-12 text-right">
			<?php if($art1->price!=""){?>
					<span class="price1">Rs. <?=$art1->price?></span>
			<?php }else{?>
					<span class="red1">Price on request </span>
			<?php }?></div>
				   </div>
				   </div>
                    <div class="row desktop">
                        <div class="col-md-6 col-xs-12 panting-meta pad0"><a href="<?=base_url('art-details/'.$art1->id)?>" class="view_details">VIEW DETAILS</a>  </div>
								<div class="col-md-6 col-xs-12 panting-meta pad0 text-right"> <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a>  </div>
								
						   </div>
                           <div class="row mobile">
                           <div class="col-md-6 col-xs-6 panting-meta pad0"><a href="<?=base_url('art-details/'.$art1->id)?>" class="view_details">DETAILS</a>  </div>
								<div class="col-md-6 col-xs-6 panting-meta pad0 pad20 text-right"> <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a>  </div>
								
						   </div>
					<!--<div class="panting-meta"> <a href="<?=base_url('art-details/'.$art1->id)?>" class="view_details">VIEW DETAILS</a>  </div>-->
				</div> 
			  </div>
			</div>
	<?php }?>     
		</div>
        </div>
        </div>
	</div>
 </section>
 <?php if(isset($artLithographData) && $artLithographData!=""){?>
 <section class="Art">
	<div class="container">
		<h2 class="headings-all"> Lithographs / Serigraphs</h2>   <!--<span> <a href="<?=base_url('artist')?>" class="view_all">View All</a> <i class="fa fa-caret-right" aria-hidden="true"></i></span>-->
		<div class="border"></div>
		<div class="row">
        <div class="col-md-12">
         <div class="owl-carousel owl-theme" id="lithograph-serigraph">
		<?php foreach($artLithographData as $art3){
				$Arr_size=explode('|',	$art3->size);
			?>
			<div class="item">
				<div class="panting-single">
					<a data-fancybox data-caption href="<?=base_url($art3->profile_image)?>">
                    <div class="panting-thumb"> <img src="<?=base_url($art3->profile_image)?>" alt="" class="img-responsive">
                    
				   </div> </a>
                   <a data-fancybox data-caption href="<?=base_url($art3->profile_image)?>"><div class="zoom-icon"><i class="fa fa-search"></i></div></a>
                   <div class="clearfix"></div>
                  
                   
					<div class="panting-info">
					   <h5><?=getArtistName($art3->artist)?></h5>
					<!--<p> Serigraphy on paper</p>-->
					  <small><?=$art3->description?></small>
						<div class="box">
							<div class="row">
								<div class="col-md-5"><!--<span class="sku-cod"><?=$art3->art_id?></span>--></div>
		<div class="col-md-12 text-right">
			<?php if($art3->price!=""){?>
					<span class="price1">Rs. <?=$art3->price?></span>
			<?php }else{?>
					<span class="red1">Price on request </span>
			<?php }?></div>
						   </div>
                           
						</div>
                        <div class="row desktop">
                        <div class="col-md-6 col-xs-12 panting-meta pad0"><a href="<?=base_url('art-details/'.$art3->id)?>" class="view_details">VIEW DETAILS</a>  </div>
								<div class="col-md-6 col-xs-12 panting-meta pad0 text-right"> <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a>  </div>
								
						   </div>
                           <div class="row mobile">
                           <div class="col-md-6 col-xs-6 panting-meta pad0"><a href="<?=base_url('art-details/'.$art3->id)?>" class="view_details">DETAILS</a>  </div>
								<div class="col-md-6 col-xs-6 panting-meta pad0 pad20 text-right"> <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a>  </div>
								
						   </div>
						
					</div> 

			  </div>
			</div>
		<?php }?>	
        </div>
        </div>
		</div>
        </div>
	</div>
 </section>
 <?php }?>
 <?php if(isset($artWorksPaperData) && $artWorksPaperData!=""){?>
 <section class="Art Sculptures">
	<div class="container">
		<h2 class="headings-all">Works on Paper</h2>  <!-- <span>  <a href="<?=base_url('artist')?>" class="view_all">View All</a> <i class="fa fa-caret-right" aria-hidden="true"></i></span>-->
		<div class="border"></div>
        
		<div class="row">
         <div class="col-md-12">
         <div class="owl-carousel owl-theme" id="works-on-paper">
			<?php foreach($artWorksPaperData as $art4){
				
			$arr_size1=explode('|',$art4->size);
				
				?>
			<div class="item">
				<div class="panting-single">
					<a data-fancybox data-caption href="<?=base_url($art4->profile_image)?>">
                    <div class="panting-thumb "> <img src="<?=base_url($art4->profile_image)?>" alt="" class="img-responsive">
                    
				   </div>
                   
                   </a>
                   <a data-fancybox data-caption href="<?=base_url($art4->profile_image)?>"><div class="zoom-icon"><i class="fa fa-search"></i></div></a>
				<div class="panting-info">
				   <h5><?=getArtistName($art4->artist)?></h5>
				  <small><?=$art4->description?></small>
				 <div class="box">
				  <div class="row">
				  <div class="col-md-5"><!--<span class="sku-cod"><?=$art4->art_id?></span>--></div>
				   <div class="col-md-12 text-right">
			<?php if($art4->price!=""){?>
					<span class="price1">Rs. <?=$art4->price?></span>
			<?php }else{?>
					<span class="red1">Price on request </span>
			<?php }?></div>
				   </div>
				   </div>
                    <div class="row desktop">
                        <div class="col-md-6 col-xs-12 panting-meta pad0"><a href="<?=base_url('art-details/'.$art4->id)?>" class="view_details">VIEW DETAILS</a>  </div>
								<div class="col-md-6 col-xs-12 panting-meta pad0 text-right"> <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a>  </div>
								
						   </div>
                           <div class="row mobile">
                           <div class="col-md-6 col-xs-6 panting-meta pad0"><a href="<?=base_url('art-details/'.$art4->id)?>" class="view_details">DETAILS</a>  </div>
								<div class="col-md-6 col-xs-6 panting-meta pad0 pad20 text-right"> <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a>  </div>
								
						   </div>
					
				</div> 
			  </div>
			</div>
	<?php }?>     
		</div>
        </div>
        </div>
	</div>
 </section>
 <?php }?>
 
  <?php /*if(isset($artWorksPriceData) && $artWorksPriceData!=""){?>
 <section class="Art">
	<div class="container">
		<h2 class="headings-all">Works with Price</h2>   <!--<span>  <a href="<?=base_url('artist')?>" class="view_all">View All</a> <i class="fa fa-caret-right" aria-hidden="true"></i></span>-->
		<div class="border"></div>
        
		<div class="row">
         <div class="col-md-12">
         <div class="owl-carousel owl-theme" id="works-with-price">
			<?php foreach($artWorksPriceData as $art5){
				
			$arr_size1=explode('|',$art4->size);
				
				?>
			<div class="item">
				<div class="panting-single">
					<a data-fancybox data-caption href="<?=base_url($art5->profile_image)?>">
                    <div class="panting-thumb "> <img src="<?=base_url($art5->profile_image)?>" alt="" class="img-responsive">
                    
				   </div>
                   
                   </a>
                   <a data-fancybox data-caption href="<?=base_url($art5->profile_image)?>"><div class="zoom-icon"><i class="fa fa-search"></i></div></a>
				<div class="panting-info">
				   <h5><?=getArtistName($art5->artist)?></h5>
				  <small><?=$arr_size1[0]?></small>
				 <div class="box">
				  <div class="row">
				  <div class="col-md-5"><!--<span class="sku-cod"><?=$art5->art_id?></span>--></div>
				   <div class="col-md-7">
			<?php if($art5->price!=""){?>
					<span class="price">Rs. <?$art5->price?></span>
			<?php }else{?>
					<span class="red"></span>
			<?php }?></div>
				   </div>
				   </div>
                    <div class="row desktop">
                        <div class="col-md-6 col-xs-12 panting-meta pad0"><a href="<?=base_url('art-details/'.$art5->id)?>" class="view_details">VIEW DETAILS</a>  </div>
								<div class="col-md-6 col-xs-12 panting-meta pad0 text-right"> <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a>  </div>
								
						   </div>
                           <div class="row mobile">
                           <div class="col-md-6 col-xs-6 panting-meta pad0"><a href="<?=base_url('art-details/'.$art5->id)?>" class="view_details">DETAILS</a>  </div>
								<div class="col-md-6 col-xs-6 panting-meta pad0 pad20 text-right"> <a href="#" class="view_details" data-toggle="modal" data-target="#make-an-enquiry">ENQUIRE</a>  </div>
								
						   </div>					
				</div> 
			  </div>
			</div>
	<?php }?>     
		</div>
        </div>
        </div>
	</div>
 </section>
 <?php }*/?>

<!--section class="Categories">
	<div class="container">
		<h3 class="heading text-center">Categories</h3>
		<div class="row">
		<?php foreach($categoryData as $category){?>
			<div class="col-md-4">
				<div class="box">
					<a href="#">
						<div class="thumb"> <img src="<?=base_url('assets/')?>images/<?=$category->image?>" alt="" class="img-responsive"> </div>
						<div class="info"> <h5><?=$category->category_name?></h5> </div> 
					</a>
				</div>
			</div>
		<?php }?>
		</div>
		<div class="clearfix"></div>
		<div class="text-center"> <a href="#" class="action-button">View More </a></div>
	</div>
</section-->
  
 <!--<section class="About_us">
 <div class="container">
 <div class="row">
 <div class="col-md-6">
 <h1>About <span>Chawla Art Gallery</span></h1>
 <p>Chawla Art Gallery envisioned as an arena for passionately presenting artworks of quality & lasting in value over the years.One of the pioneers in the art business, the gallery has a history of long association with leading artists.The gallery is one of the reputed art galleries of India & has earned a great amount of good-will from the community of art lovers. The guiding principle of the organization has been to bring the viewers closer to the works of great masters of Indian art. Art connoisseur and business leader Mr. D.V. Chawla, founder of Chawla Art Gallery, has been actively engaged in art domain since 1967.He has evolved alongside the dynamics of Indian and global art. Shibani Chawla joined the art scene in 1987 & has made significant contribution towards art initiatives.</p>
 
<div class="links">
<a href="<?=base_url('about')?>" class="link1">ABOUT US</a>
 <a href="#" class="link2">COLLECTORS - SELL YOUR ART</a>
 </div>
 
 </div>
  <div class="col-md-6"><img src="<?=base_url('assets/')?>images/about-us-img.jpg" class="img-responsive"></div>
 </div>
 </div>
 </section>--->