<?php /* Template Name: Home Page */ ?>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
  get_header();
 ?>

 <?php include( 'image_header.php' ); ?>

 <!--/main-header-->
 <!-- /pop-->
 				<div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
 				<div class="modal-dialog sign" role="document">
 					<div class="modal-content about">
 						<div class="modal-header one">
 							<button type="button" class="close sg" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 								<div class="discount one">
 									<h3>A Few Words about Us</h3>

 								</div>
 						</div>
 						 <div class="modal-body about">
 								<img src="<?php echo get_template_directory_uri(); ?>/images/v5.jpg" alt="w3ls" class="img-responsive">
 							<h4>Lorem ipsum Nam libero tempore</h4>
 							<p>Lorem ipsum Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.Lorem Ipsum has been the industry's standard dummy text ever since.</p>

 						 </div>


 					</div>
 				</div>
 			</div>
 			<!-- //pop-->
 <!--/price-section-->
 <div class="price-section">
      <div class="container">
        <div class="col-md-6 price">
 				<h3><span> In Virginia and Need to Sell Your Home Fast?</span></h3>
 				<?php echo do_shortcode('[contact-form-7 id="8" title="Sell a Property"]'); ?>
 		</div>
 		<div class="col-md-6 plat">
 		<img clas="plat-img" src="<?php echo get_template_directory_uri(); ?>/images/v4.jpg" alt="w3ls" class="img-responsive">

 	</div>
 	<div class="clearfix"> </div>
 	</div>
 </div>

 <!--//price-section-->
 <!--/featured-projects-->
 <div class="featured-section" id="about">
   <div class="container">
     <div class="about-section agileits">
    <div class="col-md-6 ab-left">
      <div class="grid">
        <div>
        <figure class="effect-jazz">
        <img src="<?php echo get_template_directory_uri(); ?>/images/ariel-work.jpg" alt="img25">
          <figcaption>
            <h4>Ar<span>iel</span></h4>
            <ul class="top-links two">
                <li><a href="https://www.facebook.com/ariel.guzman.3956"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/in/ariel-guzman-6bbb9797/"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            <p>
              CEO
            </p>

          </figcaption>
        </figure>

     </div>
     <div class="clearfix"> </div>
     </div>
     </div>
     <div class="col-md-6 ab-text">
        <h4 class="tittle">About Us</h4>
          <p>Fast Break Homes takes distressed properties and redevelops them
           into <span>beautiful</span> homes. We take pride in helping those in
           unfortunate home owner situations by purchasing their home with cash offers
           and closing on their timeline. Our goal is to not only make their lives <span>easier</span>
           but also making the neighborhoods <span>better</span>.</p>
        <!--  <div class="start">
             <a href="#" data-toggle="modal" data-target="#myModal1" class="hvr-bounce-to-bottom">Get Started</a>
          </div>-->

      </div>
      <div class="clearfix"> </div>
   </div>
    </div>
   </div>
 </div>
 <!--//featured-projects-->



<?php include( 'contact.php' ); ?>

<?php get_footer(); ?>
