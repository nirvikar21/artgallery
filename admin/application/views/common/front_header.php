<?php
$mataTags=getMetaData();
foreach($mataTags as $meta);
//print_r($meta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Free Web tutorials" value="<?=$meta->meta_description?>">
<meta name="keywords" content="HTML, CSS, JavaScript" value="<?=$meta->meta_keyword?>">
<meta name="author" content="John Doe" value="<?=$meta->meta_title?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>Chawla Art Gallery</title>
<link rel="stylesheet" href="<?=base_url('assets/')?>css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url('assets/')?>css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url('assets/')?>css/owl.carousel.min.css">
<link rel="stylesheet" href="<?=base_url('assets/')?>css/owl.theme.default.min.css">
<link rel="stylesheet" href="<?=base_url('assets/')?>css/animate.css">
<link rel="stylesheet" href="<?=base_url('assets/')?>css/main.css">
<link rel="stylesheet" href="<?=base_url('assets/')?>css/select2.min.css">
<link rel="shortcut icon" href="<?=base_url('assets/')?>images/favicon.png">

<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
<script type="text/javascript" src="<?=base_url('assets/')?>js/modernizr.js"></script>
</head>
<style>
.ui-autocomplete {
    list-style: none;
}
.ui-autocomplete li {
    cursor: pointer;
}
</style>
<body>

<nav id="nav" class="navbar navbar-default ak_header desktop">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url('assets/')?>images/chawlaartgallery-logo.png" class="img-responsive" alt=""></a>
      <div class="clearfix"></div>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?=base_url()?>">Home</a></li>
        <li><a href="<?=base_url('about')?>">About </a></li>
        <li><a href="<?=base_url('artist')?>"> Artists </a></li>
       <!-- <li><a href="<?=base_url('exhibition')?>"> Exhibitions </a></li>-->
        
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Exhibitions
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?=base_url('artfairs')?>">Art Fairs</a></li>
          <li><a href="<?=base_url('exhibition')?>">Exhibitions</a></li>
        </ul>
      </li>
        <li><a href="<?=base_url('press')?>"> Press</a></li>
        <li><a href="<?=base_url('blog')?>"> Newsletters</a></li>
        <!--<li><a href="javascript:void(0);"> Virtual Tour </a></li>-->
      <!--  <li><a href="#" data-toggle="modal" data-target="#make-an-enquiry">Sell Your Art</a></li>-->
        <li><a href="<?=base_url('contactus')?>"> Contact Us </a></li>
       <!-- <li><a href="#" class="btn btn-default" data-toggle="modal" data-target="#make-an-enquiry">Sell Your Art</a></li>-->
          </ul>
        
      <ul class="nav navbar-nav navbar-right right_menu">
		<li>
			<form method="post" action="<?=base_url('artist-details/')?>" class="navbar-form" role="search">
				<div class="input-group">
					<div class="homeWrap"> 
						<input type="text" class="form-control" name="keywordstitle" id="homeSearch" placeholder="Search an Artist...">
						<input type="hidden" name="artistId" id="artistId">
					</div>
					<span class="input-group-btn">
						<button type="button" class="btn ak-default">
							<span class="glyphicon glyphicon-search">
								<span class="sr-only">Search...</span>
							</span>
						</button>
					</span>
				</div>
			</form>
		</li>
        
        
        
        <!--<li><a href="#" class="btn btn-default" data-toggle="modal" data-target="#sell-your-art" style="color:#da251c !important;">Sell Your Art </a></li>-->
        
        
	  <li class="dropdown sell-art">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:#da251c !important;">Sell Your Art <span class="caret"></span></a>
      <ul class="dropdown-menu">
      <li><a href="#" class=" " data-toggle="modal" data-target="#sell-your-art">Artist</a></li>
      <li> <a href="#" class=" " data-toggle="modal" data-target="#Collector">Collector </a></li>
      </ul>
      
      </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
<!-- mainheader -->
 <header class="mobile" style="padding:7px 0px;">
 <div class="container">
 <div class="row">
 <div class="col-xs-3">
 <div class="mobile-btn"><span style="font-size:32px;cursor:pointer;" onclick="openNav()">&#9776;</span></div>
 
 </div>
  <div class="col-xs-7 text-center header-img"><a href="<?=base_url()?>"><img src="<?=base_url('assets/')?>images/chawlaartgallery-logo.png" alt=""></a></div>
  <div class="col-xs-2 text-right mar-t" style="font-size: 20px;
    color: #333;
    ">
 <a href="<?=base_url('artist')?>" style="color:#333"><i class="fa fa-search"></i></a>
 
 </div>
 </div>
 
 </div>
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  
<a href="<?=base_url()?>">Home</a>
<div class="bor-div"></div>
<a href="<?=base_url('about')?>">About </a>
<div class="bor-div"></div>
<a href="<?=base_url('artist')?>"> Artists </a>
<div class="bor-div"></div>
<div class="dropdown mobile-pd">
  <a class="dropdown-toggle" type="button" data-toggle="dropdown">Exhibitions
  <span class="caret"></span></a>
  <ul class="dropdown-menu">
<li><a href="<?=base_url('artfairs')?>">Art Fairs</a></li>
<div class="bor-div"></div>
          <li><a href="<?=base_url('exhibition')?>">Exhibitions</a></li>
  </ul>
</div>
<div class="bor-div"></div>
<a href="<?=base_url('press')?>"> Press</a>
<div class="bor-div"></div>
<a href="<?=base_url('blog')?>"> Newsletters</a>
<div class="bor-div"></div>
<a href="<?=base_url('contactus')?>"> Contact Us </a>
<div class="bor-div"></div>

<div class="dropdown mobile-pd">
  <a class="dropdown-toggle" type="button" data-toggle="dropdown" style="color:#da251c !important; text-align:left;">Sell Your Art
  <span class="caret"></span></a>
  <ul class="dropdown-menu">
<li><a href="#" class=" " data-toggle="modal" data-target="#sell-your-art">Artist</a></li>
     
<div class="bor-div"></div>
          <li> <a href="#" class=" " data-toggle="modal" data-target="#Collector">Collector </a></li>
  </ul>
</div>

<div class="bor-div"></div>
<!--<a href="#" class="btn btn-default" data-toggle="modal" data-target="#sell-your-art" style="color:#da251c !important; text-align:left;">Sell Your Art</a>-->
<!--<a href="tel:+911126532077" style="color:#444; font-weight:600;">+91-11-26532077</a>
<div class="bor-div"></div>-->
<a href="mailto:sc@chawla-artgallery.com" style="text-transform:lowercase">sc@chawla-artgallery.com</a>
 



</div>

 </header>