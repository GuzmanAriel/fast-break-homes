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
 				<h3><span>Search For Home</span></h3>
 				<div class="reservation">
 					<div class="section_room">
 						<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
 						<select id="country" onchange="change_country(this.value)" class="frm-field required">
 							<option value="null">Location</option>
 							<option value="null">Denmark</option>
 							<option value="AX">Sweden</option>
 							<option value="AX">New Zealand</option>
 							<option value="AX">America</option>
 							<option value="AX">Australia</option>
 						</select>
 					</div>
 					<div class="section_room">
 						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
 						<select id="country1" onchange="change_country(this.value)" class="frm-field required">
 							<option value="null">Type of property</option>
 							<option value="null">Property1</option>
 							<option value="AX">Property2</option>
 							<option value="AX">Property3</option>
 							<option value="AX">Property4</option>
 							<option value="AX">Property5</option>
 						</select>
 					</div>
 					<div class="reservation-grids">
 						<div class="reservation-grid-left">
 							<div class="section_room">
 								<span class="fa fa-bed" aria-hidden="true"> </span>
 								<select id="country2" onchange="change_country(this.value)" class="frm-field required">
 									<option value="null">Bedrooms</option>
 									<option value="null">1</option>
 									<option value="AX">2</option>
 									<option value="AX">3</option>
 									<option value="AX">4</option>
 									<option value="AX">More</option>
 								</select>
 							</div>
 						</div>
 						<div class="reservation-grid-right">
 							<div class="section_room">
 								<span class="fa fa-wheelchair-alt" aria-hidden="true"> </span>
 								<select id="country3" onchange="change_country(this.value)" class="frm-field required">
 									<option value="null">Baths</option>
 									<option value="null">Any</option>
 									<option value="AX">2</option>
 									<option value="AX">3</option>
 									<option value="AX">4</option>
 									<option value="AX">More</option>
 								</select>
 							</div>
 						</div>
 						<div class="clearfix"> </div>
 					</div>
 					<div class="reservation-grids">
 						<div class="reservation-grid-left">
 							<div class="section_room">
 								<span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
 								<select id="country2" onchange="change_country(this.value)" class="frm-field required">
 									<option value="null">Price From Min</option>
 									<option value="null">No Minimum</option>
 									<option value="AX">1000Yen</option>
 									<option value="AX">3000Yen</option>
 									<option value="AX">4000Yen</option>
 									<option value="AX">5000Yen</option>
 								</select>
 							</div>
 						</div>
 						<div class="reservation-grid-right">
 							<div class="section_room">
 								<span class="glyphicon glyphicon-yen" aria-hidden="true"></span>
 								<select id="country3" onchange="change_country(this.value)" class="frm-field required">
 									<option value="null">Price From Max</option>
 									<option value="null">Any</option>
 									<option value="AX">15000Yen</option>
 									<option value="AX">25000Yen</option>
 									<option value="AX">35000Yen</option>
 									<option value="AX">More</option>
 								</select>
 							</div>
 						</div>
 						<div class="clearfix"> </div>
 					</div>
 					<div class="keywords">
 						<form action="#" method="post">
 							<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
 							<input type="text" name="Key Words" placeholder="Key Words" required=" ">
 							<input type="submit" value="Search">
 						</form>
 					</div>
 				</div>
 		</div>
 		<div class="col-md-6 plat">
 		<div id="myCarousel1" class="carousel slide" data-ride="carousel" data-interval="2000" data-pause="hover">
 			<!-- Indicators -->
 			<ol class="carousel-indicators">
 				<li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
 				<li data-target="#myCarousel1" data-slide-to="1"></li>
 				<li data-target="#myCarousel1" data-slide-to="2"></li>
 			</ol>
 			<!-- Wrapper for slides -->
 			<div class="carousel-inner" role="listbox">
 				<div class="item active">
 					<div class="serv-w3ls1">

 							<img src="<?php echo get_template_directory_uri(); ?>/images/v3.jpg" alt="w3ls" class="img-responsive">
 						    <span class="four">40,000$</span>
 							<div class="rent-bottom">
 									<h4>Nerima Sanam St, Tokyo,TM 3020</h4>
 									<h5>For Rent</h5>
 									<p>Etiam elit felis, porta ut massa in, consectetur<p>
 									<div class="rent-icons">
 									  <h6 class="area">Area: 450m1</h6>
 									  <div class="r-icons">
 										   <ul class="icons-right">
 															<li><i class="fa fa-bed" aria-hidden="true"></i> 3</li>
 															<li><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> 2</li>
 											</ul>
 									  </div>
 									  <div class="clearfix"></div>
 									</div>
 							</div>

 					</div>
 				</div>
 				<div class="item">
 				<div class="serv-w3ls1">

 							<img src="<?php echo get_template_directory_uri(); ?>/images/v2.jpg" alt="w3ls" class="img-responsive">
 						    <span class="four">50,000$</span>
 							<div class="rent-bottom">
 									<h4>Nerima Sanam St, Tokyo,TM 3020</h4>
 									<h5>For Rent</h5>
 									<p>Etiam elit felis, porta ut massa in, consectetur<p>
 									<div class="rent-icons">
 									  <h6 class="area">Area: 450m2</h6>
 									  <div class="r-icons">
 										   <ul class="icons-right">
 															<li><i class="fa fa-bed" aria-hidden="true"></i> 3</li>
 															<li><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> 2</li>
 											</ul>
 									  </div>
 									  <div class="clearfix"></div>
 									</div>
 							</div>

 					</div>
 				</div>
 				<div class="item">
 					<div class="serv-w3ls1">
 						    <img src="<?php echo get_template_directory_uri(); ?>/images/v1.jpg" alt="w3ls" class="img-responsive">
 						    <span class="four">50,000$</span>
 							<div class="rent-bottom">
 									<h4>Nerima Sanam St, Tokyo,TM 3020</h4>
 									<h5>For Rent</h5>
 									<p>Etiam elit felis, porta ut massa in, consectetur<p>
 									<div class="rent-icons">
 									  <h6 class="area">Area: 450m3</h6>
 									  <div class="r-icons">
 										   <ul class="icons-right">
 															<li><i class="fa fa-bed" aria-hidden="true"></i> 3</li>
 															<li><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> 2</li>
 											</ul>
 									  </div>
 									  <div class="clearfix"></div>
 									</div>
 							</div>
 					</div>
 				</div>
 				<div class="item">
 					<div class="serv-w3ls1">

 							<img src="<?php echo get_template_directory_uri(); ?>/images/v4.jpg" alt="w3ls" class="img-responsive">
 						    <span class="four">30,000$</span>
 							<div class="rent-bottom">
 									<h4>Nerima Sanam St, Tokyo,TM 3020</h4>
 									<h5>For Rent</h5>
 									<p>Etiam elit felis, porta ut massa in, consectetur<p>
 									<div class="rent-icons">
 									  <h6 class="area">Area: 450m4</h6>
 									  <div class="r-icons">
 										    <ul class="icons-right">
 															<li><i class="fa fa-bed" aria-hidden="true"></i> 3</li>
 															<li><i class="fa fa-wheelchair-alt" aria-hidden="true"></i> 2</li>
 											</ul>
 									  </div>
 									  <div class="clearfix"></div>
 									</div>
 							</div>

 					</div>
 				</div>
 			</div>
 		</div>

 	</div>
 	<div class="clearfix"> </div>
 	</div>
 </div>

 <!--//price-section-->
 <!--/featured-projects-->
 <div class="featured-section" id="projects">
   <div class="container">
 		<h3 class="tittle">Our <span>Featured </span> Projects</h3>
 			<div class="content-bottom-in">
 					<ul id="flexiselDemo1">
 						<li><div class="project-fur">
 								<a href="#" data-toggle="modal" data-target="#myModal1" ><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/v1.jpg" alt="" />	</a>
 									<div class="fur">
 										<div class="fur1">
 		                                    <span class="fur-money">$2.44 0 - $5.280 </span>
 		                                  <h6 class="fur-name"><a href="#" data-toggle="modal" data-target="#myModal1">Contrary to popular</a></h6>
 		                                   	<span>Paris</span>
                                			</div>
 			                            <div class="fur2">
 			                               	<span>2 BHK</span>
 			                             </div>
 									</div>
 									<span class="five">40,000$</span>
 							</div></li>
 							<li><div class="project-fur">
 									<a href="#" data-toggle="modal" data-target="#myModal1" ><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/v2.jpg" alt="" />	</a>
 										<div class="fur">
 											<div class="fur1">
			                                    <span class="fur-money">$2.44 0 - $5.280 </span>
			                                   <h6 class="fur-name"><a href="#" data-toggle="modal" data-target="#myModal1">Contrary to popular</a></h6>
			                                   	<span>Paris</span>
	                               			</div>
				                            <div class="fur2">
				                               	<span>2 BHK</span>
				                             </div>
 										</div>
 									<span class="five">45,000$</span>
 								</div>
 								</li>
 								<li><div class="project-fur">
 								<a href="#" data-toggle="modal" data-target="#myModal1" ><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/v3.jpg" alt="" />	</a>
 									<div class="fur">
 										<div class="fur1">
 		                                    <span class="fur-money">$2.44 0 - $5.280 </span>
 		                                  <h6 class="fur-name"><a href="#" data-toggle="modal" data-target="#myModal1">Contrary to popular</a></h6>
 		                                   	<span>Paris</span>
                                			</div>
 			                            <div class="fur2">
 			                               	<span>2 BHK</span>
 			                             </div>
 									</div>
 								<span class="five">40,000$</span>
 							</div></li>
 							<li><div class="project-fur">
 								<a href="#" data-toggle="modal" data-target="#myModal1" ><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/images/v4.jpg" alt="" />	</a>
 									<div class="fur">
 										<div class="fur1">
 		                                    <span class="fur-money">$2.44 0 - $5.280 </span>
 		                                    <h6 class="fur-name"><a href="#" data-toggle="modal" data-target="#myModal1">Contrary to popular</a></h6>
 		                                   	<span>Paris</span>
                                			</div>
 			                            <div class="fur2">
 			                               	<span>2 BHK</span>
 			                             </div>
 									</div>
 									<span class="five">40,000$</span>
 							    </div>
 							</li>
 					</ul>

 		</div>
 	</div>
 </div>
 <!--//featured-projects-->
   <!-- //Stats -->
 <div class="agitsworkw3ls" id="property">

 			<div class="col-md-6 agitsworkw3ls-grid ">
        <h3 class="tittle two">Properties <span>For</span> Rent</h3>
 				<!-- Tabs -->
 				<div class="tabs">
 					<div class="sap_tabs">
 						<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
 							<ul class="resp-tabs-list">
 								<li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span>CREATION</span></li>
 								<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>ANALYSIS</span></li>
 								<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>STRATEGY</span></li>
 								<div class="clearfix"></div>
 							</ul>

 							<div class="resp-tabs-container">
 								<h3 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>CREATION</h3><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
 									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>

 								</div>
 								<h3 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>ANALYSIS</h3><div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
 									<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word.</p>

 								</div>
 								<h3 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>STRATEGY</h3><div class="tab-3 resp-tab-content" aria-labelledby="tab_item-2">
 									<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use.</p>
 								</div>
 							</div>
 						</div>
 					</div>
 				</div>
 				<!-- //Tabs -->

 			</div>

 			<div class="col-md-6 agitsworkw3ls-grid-2">
 			   <div class="info-imgs">
 			         <ul>
 					  <li>
 						  <div class="gallery-grid1">
 								<img src="<?php echo get_template_directory_uri(); ?>/images/v5.jpg" alt=" " class="img-responsive">
 								<div class="p-mask">
 										<h4>Fetch <span>Villa</span></h4>
 									<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 								</div>
 							</div>
 					  </li>
 					   <li>
 					     <div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v2.jpg" alt=" " class="img-responsive">
 							<div class="p-mask">
 									<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					   </li>
 						<li>
 						   <div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v6.jpg" alt=" " class="img-responsive">
 							<div class="p-mask">
 									<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 						</li>
 					    <li>
 						  <div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v7.jpg" alt=" " class="img-responsive">
 							<div class="p-mask">
 									<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 						</li>
 					 </ul>
 			   </div>

 			</div>
 			<div class="clearfix"></div>

 		</div>
 	<!-- //Stats -->
  <!--/team-->
 <div class="team" id="team">
 		     <div class="container">
 			 <h3 class="tittle">Our <span>Team </span></h3>
 			 <!--/about-section-->
 			   <div class="about-section agileits">
 				<div class="col-md-7 ab-left">
 				  <div class="grid">
 			        <div class="h-f">
 					<figure class="effect-jazz">
 					<img src="<?php echo get_template_directory_uri(); ?>/images/t1.jpg" alt="img25">
 						<figcaption>
 							<h4>Ander<span>son</span></h4>
 							<ul class="top-links two">
 									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
 									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
 									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
 									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
 								</ul>
 							<p>
 							  MANAGER
 							</p>

 						</figcaption>
 					</figure>

 				 </div>
 				 <div class="h-f">
 					<figure class="effect-jazz">
 						<img src="<?php echo get_template_directory_uri(); ?>/images/t2.jpg" alt="img25">
 						<figcaption>
 							<h4>Ed<span>wards</span></h4>
 							<ul class="top-links two">
 									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
 									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
 									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
 									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
 			   <div class="col-md-5 ab-text">
 			             <h4 class="tittle">About Us</h4>
 						  <p>Lorem ipsum Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.Lorem Ipsum has been the industry's standard dummy text ever since.</p>
 						  <div class="start">
 						     <a href="#" data-toggle="modal" data-target="#myModal1" class="hvr-bounce-to-bottom">Get Started</a>
 						  </div>

 					</div>
 					<div class="clearfix"> </div>
 			 </div>
 			  <!--//about-section-->
 			  <!--/about-section2-->
 			   <div class="about-section">
 			        <div class="col-md-5 ab-text two">
 			             <h4 class="tittle">Welcome</h4>
 						 <p>Lorem ipsum Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.Lorem Ipsum has been the industry's standard dummy text ever since.</p>
 						  <div class="start">
 						     <a href="#"data-toggle="modal" data-target="#myModal1" class="hvr-bounce-to-bottom">Get Started</a>
 						  </div>

 					</div>
 						<div class="col-md-7 ab-left">
 				  <div class="grid">
 			        <div class="h-f">
 					<figure class="effect-jazz">
 					<img src="<?php echo get_template_directory_uri(); ?>/images/t4.jpg" alt="img25">
 						<figcaption>
 							<h4>Chri<span>stopher</span></h4>
 							<ul class="top-links two">
 									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
 									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
 									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
 									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
 								</ul>
 							<p>
 							  DIRECTOR
 							</p>

 						</figcaption>
 					</figure>

 				 </div>
 				 <div class="h-f">
 					<figure class="effect-jazz">
 						<img src="<?php echo get_template_directory_uri(); ?>/images/t3.jpg" alt="img25">
 						<figcaption>
 							<h4>Andrew<span>Mark</span></h4>
 							 <ul class="top-links two">
 									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
 									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
 									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
 									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
 								</ul>
 							<p>
 							   MANAGER
 							</p>

 						</figcaption>
 					</figure>

 				 </div>
 				 <div class="clearfix"> </div>
 				 </div>
 			   </div>
 					<div class="clearfix"> </div>
 			 </div>
 			  <!--//about-section2-->
 			</div>
 	     </div>
 		  <!--/team-->
 			<!-- gallery -->
 	<div class="gallery agile" id="gallery">
 		<div class="container">
 			<h3 class="tittle"> Our <span>Gallery</span></h3>
 			<div class="agile_gallery_grids w3-agile">
 				<ul class="clearfix demo">
 					<li>
 						<div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v5.jpg" alt=" " class="img-responsive" />
 							<div class="p-mask">
 									<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					</li>
 					<li>
 						<div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v1.jpg" alt=" " class="img-responsive" />
 							<div class="p-mask">
 								<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					</li>
 					<li>
 						<div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v6.jpg" alt=" " class="img-responsive" />
 							<div class="p-mask">
 							<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					</li>
 					<li>
 						<div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v3.jpg" alt=" " class="img-responsive" />
 							<div class="p-mask">
 								<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					</li>
 					<li>
 						<div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v7.jpg" alt=" " class="img-responsive" />
 							<div class="p-mask">
 									<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					</li>
 					<li>
 						<div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v2.jpg" alt=" " class="img-responsive" />
 							<div class="p-mask">
 									<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					</li>
 					<li>
 						<div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v8.jpg" alt=" " class="img-responsive" />
 							<div class="p-mask">
 									<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					</li>
 					<li>
 						<div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v4.jpg" alt=" " class="img-responsive" />
 							<div class="p-mask">
 								<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					</li>
 					<li>
 						<div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v1.jpg" alt=" " class="img-responsive" />
 							<div class="p-mask">
 									<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					</li>
 					<li>
 						<div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v2.jpg" alt=" " class="img-responsive" />
 							<div class="p-mask">
 								<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					</li>
 					<li>
 						<div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v3.jpg" alt=" " class="img-responsive" />
 							<div class="p-mask">
 									<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					</li>
 					<li>
 						<div class="gallery-grid1">
 							<img src="<?php echo get_template_directory_uri(); ?>/images/v4.jpg" alt=" " class="img-responsive" />
 							<div class="p-mask">
 									<h4>Fetch <span>Villa</span></h4>
 								<p>Neque porro quisquam est, qui dolorem ipsum.</p>
 							</div>
 						</div>
 					</li>
 				</ul>

 			</div>
 		</div>
 	</div>
 <!-- //gallery -->

<?php include( 'contact.php' ); ?>

<?php get_footer(); ?>
