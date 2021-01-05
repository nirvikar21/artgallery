<!-- mainheader -->
 <div class="ak-sub-banner" style="background-image: url(assets/images/subheader-img.jpg);"> <span class="ak-sub-banner-dark"></span>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>Blog</h2>
        <!--<ul class="ak-breadcrumb">
          <li><a href="index.html">Homepage</a></li>
          <li>Blog</li>
        </ul>-->
      </div>
    </div>
  </div>
</div>
 
 <section class="blog-listing">
 <div class="container">
  <div class="row">
  <?php foreach($blogData as $blog){?>
      <div class="col-sm-6 col-md-4">
        <div class="blog_block">
          <figure class="blog_media">
            <img src="<?=base_url($blog->image)?>" class="img-responsive center-block" alt=" ">
            <p class="blog_category"><?=$blog->category?> </p>
          </figure>
          <div class="blog_title"><?=$blog->title?></div>
          
          <div class="blog_desc">
            <p><?=excerpt($blog->description,'20')?></p>
          </div>
          <hr>
          <div class="blog_datetime pull-left"><i class="fa fa-clock-o"></i> April 21, 2020</div>
          <a href="<?=base_url('blog-details/'.$blog->id)?>" class="blog_detail-btn pull-right">Read Details</a>
          <div class="clearfix"></div>
        </div>
      </div>
  <?php }?>
    </div>
    
    <div class="text-center">
      <ul class="pagination">
        <li><a href="#">«</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">»</a></li>
      </ul>
    </div>
 
  
 </div>
 </section>