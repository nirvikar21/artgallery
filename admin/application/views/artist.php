
<div class="ak-sub-banner" style="background-image: url(<?=base_url('assets/')?>images/subheader-img.jpg);"> <span class="ak-sub-banner-dark"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Artists</h2>
        <!--<ul class="ak-breadcrumb">
          <li><a href="index.html">Homepage</a></li>
          <li>Artist</li>
        </ul>--> 
        
      </div>
    </div>
  </div>
</div>
<section class="Artist">
  <div class="container">
    <div class="search">
      <div class="fom-body">
        <form name="frm" method="post" action="<?=base_url('artist')?>">
          <div class="row">
            <div class="col-md-6 col-xs-6 pad-right">
              <div class="form-group">
                <label>Find Artist</label>
                <div class="searchArea">
                  <input type="text" name="artist" class="form-control" id="artist" placeholder="Search..">
                  <input type="hidden" name="artist_id" id="artist_ids">
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xs-6 pad-left">
              <div class="form-group">
                <label><!--Art Type-->Filter</label>
                <select name="category" id="category" class="myselect form-control city e1" >
                  <option value="-1" select="" >Select Type </option>
				  <option value="0" select="" >View All </option>
                  <?php foreach($categoryData as $cat){?>
                  <option value="<?=$cat->id?>"<?php echo isset($page->category) && $page->category ==  $cat->id ? 'selected' : ''; ?>>
                  <?=$cat->category_name?>
                  </option>
                  <?php }?>
                </select>
              </div>
            </div>
            
            <!--<div class="col-md-6 col-xs-6 pad-left ">
					  <div class="form-group">
						<label>Category</label>
						<select name="subcategory" id="subcategory" class="myselect form-control city e1" >
						  <option value="" select="" >Select Category </option>
						    <?php foreach($subcatData as $subcat){ print_r($cat)?>
								<option value="<?=$subcat->id?>" <?php echo isset($page->subcategory) && $page->subcategory ==  $subcat->id ? 'selected' : ''; ?>><?=$subcat->subcat_name?></option>
							<?php }?>	
						</select>
					  </div>
					</div>--> 
            
            <!--<div class="col-md-2 col-xs-12 ">
					  <div class="form-group">
						 <button name="searchData" class="submit-bt-details">Search</button>
					  </div>

					</div>--> 
            
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!--<section class="artist-listing">
	<div class="container">
		<div class="row">
			<div id="content-1" class="content mCustomScrollbar">
				<div id="responsive">
					<?php foreach($artistData as $artist){?>
					<div class="col-md-3 col-xs-6 art-list-pad-right">
						<div class="job-featured">
							<div class="content">
								<h3><a href="<?=base_url('artist-details/'.$artist->artist_id)?>"><?=$artist->artist_name?> </a><span>(<?=getArtistImgCount($artist->artist_id)?>)</span></h3>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>-->

<section class="artist-listing">
  <div class="container">
    <div class="row">
      <div id="content-1" class="content mCustomScrollbar">
        <div id="responsive">
			<div class="col-sm-3 col-xs-6 artist_name">
				<?php 
				$prevLabel = null;
				foreach($artists1Data as $artist){
					$currLabel = strtoupper(substr($artist->name, 0, 1));
					if ($currLabel !== $prevLabel) {
						echo'<h4>'.$currLabel.'</h4>';
						$prevLabel = $currLabel;
					}
					echo '<a href="artist-details/'.$artist->id.'" class="artist">'.$artist->name.' ('.getArtistImgCount($artist->id).')</a>';
				
				 }?>
			</div> 
            <div class="col-sm-3 col-xs-6 artist_name">
				<?php 
				$prevLabel = null;
				foreach($artistsData2 as $artist2){ 
					$currLabel = strtoupper(substr($artist2->name, 0, 1));
					if ($currLabel !== $prevLabel) {
						echo'<h4>'.$currLabel.'</h4>';
						$prevLabel = $currLabel;
					}
					echo '<a href="artist-details/'.$artist2->id.'" class="artist">'.$artist2->name.'('.getArtistImgCount($artist2->id).')</a>';
				
				 }?>
			</div>

			<div class="col-sm-3 col-xs-6 artist_name">
				<?php 
				$prevLabel = null;
				foreach($artistsData3 as $artist3){ 
					$currLabel = strtoupper(substr($artist3->name, 0, 1));
					if ($currLabel !== $prevLabel) {
						echo'<h4>'.$currLabel.'</h4>';
						$prevLabel = $currLabel;
					}
					echo '<a href="artist-details/'.$artist3->id.'" class="artist">'.$artist3->name.' ('.getArtistImgCount($artist3->id).')</a> ';
				
				 }?>
			</div> 	
			<div class="col-sm-3 col-xs-6 artist_name">
				<?php 
				$prevLabel = null;
				foreach($artistsData4 as $artist4){ 
					$currLabel = strtoupper(substr($artist4->name, 0, 1));
					if ($currLabel !== $prevLabel) {
						echo'<h4>'.$currLabel.'</h4>';
						$prevLabel = $currLabel;
					}
					echo '<a href="artist-details/'.$artist4->id.'" class="artist">'.$artist4->name.' ('.getArtistImgCount($artist4->id).')</a>';
				
				 }?>
			</div>
         
        
      </div>
    </div>
  </div>
</section>
<script>


</script>
<style>
.artist_name { min-height:765px; border-right:1px solid#ddd; margin-top:15px; }
.artist_name:last-child {border-right:none;}
.artist_name h4 { font-size:14px !important; padding: 0;
    margin: 0;
    color: #da251c;
    margin-bottom: 5px; }
.artist_name a { display:block; padding:5px 0px; color:#333; font-size:14px }
</style>
