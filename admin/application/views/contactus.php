<?php

foreach($pageData as $page);

?>



<div class="ak-sub-banner" style="background-image: url(assets/images/subheader-img.jpg);"> <span class="ak-sub-banner-dark"></span>

  <div class="container">

    <div class="row">

      <div class="col-md-12">

        <h2>Contact Us</h2>

        <!--<ul class="ak-breadcrumb">

          <li><a href="index.html">Homepage</a></li>

          <li>Contact Us</li>

        </ul>-->

      </div>

    </div>

  </div>

</div>

				

 <section class="contact_us">

 <div class="container">

				<?php if($this->session->flashdata('adminError')){ ?>

					<div class="alert alert-danger alert-dismissible">

						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>

						<?=$this->session->flashdata('adminError')?>

					</div>

				<?php $this->session->set_flashdata('adminError',''); } if($this->session->flashdata('adminSuccess')){ ?>

					<div class="alert alert-success alert-dismissible">

						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>

						<?=$this->session->flashdata('adminSuccess')?>

					</div>

				<?php $this->session->set_flashdata('adminSuccess',''); } ?> 

 <div class="row">

      <div class="col-md-5 pad-right col-md-offset-1 col-xs-12">

       <?=$page->page_content?>

      </div>

      <div class="col-md-5 pad-left col-xs-12">

        <div class="box">

          <h6>Make An Enquiry</h6>

          <div class="row">

		  <form name="signupForm"  method="post" action="<?=base_url('submit_query')?>">

            <div class="col-md-12">

              <div class="form-group">

                <input type="text" class="form-control" id="name" placeholder="Enter Your Name" name="name" required>

              </div>

            </div>

            <div class="col-md-12">

              <div class="form-group">

                <input type="email" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>

              </div>

            </div>

            <div class="col-md-12">

              <div class="form-group">

                <input type="text" class="form-control" id="mobile" placeholder="Enter Your Mobile" name="mobile" required>

              </div>

            </div>

            <div class="col-md-12">

              <div class="form-group">

                <textarea id="message" rows="4" cols="50" placeholder="Enter Your Message" required></textarea>

              </div>

              <div class="requ_callbk">

                <button type="submit" id="submit" class="btn btn-info submit-details">SUBMIT</button>

              </div>

            </div>

			</form>

          </div>

        </div>

      </div>

    </div> 

 </div>

<div class="clearfix"></div>
 </section>
<div class="clearfix"></div>
 <div class="map" id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14021.710704196417!2d77.2200293!3d28.5268622!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x902e7b00fe5f985e!2sSquare%20One%20Mall!5e0!3m2!1sen!2sin!4v1589197824334!5m2!1sen!2sin" width="100%" height="415" style="border:0;"></iframe></div>