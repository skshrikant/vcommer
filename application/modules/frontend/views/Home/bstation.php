<link href="<?php echo asset_url(); ?>css/pages/sellers.css"
	rel="stylesheet">
<script src="<?php echo asset_url(); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-blind.min.js"></script>
<script
	src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-drop.min.js"></script>
<script
	src="<?php echo asset_url(); ?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fold.min.js"></script>
<script
	src="<?php echo asset_url(); ?>js/jquery.ui.effect-highlight.min.js"></script>
<script
	src="<?php echo asset_url(); ?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url(); ?>js/searchindex.js"></script>
<div>
	<div id="Layer2">
		<div id="Layer2_Container">
			<div class="container">
				<div class="row space121">
					<div class="col-lg-2 col-md-2 col-sm-2 ">
						<form class="displaymobile ">
							<div class="row ">
								<div class=" col-md-offset-1 col-md-4 col-sm-4 col-xs-6 "
									style="padding-right: 1px; padding-left: 1px;">
									<input type="text " class="search-box " required="required "
										name="keyword "
										placeholder="Type a keyword to seach ( product, company or name )... ">
								</div>
								<div class="col-md-1 col-sm-2 col-xs-4 "
									style="padding-right: 1px; padding-left: 1px;">
									<div class="dropdown">
										<select class="search-box" name='country'>
											<option value="0">Country</option>
												<?php foreach ($Country as $country){?>
													<option
												value="<?php echo $country['id'];?>, <?php echo $country['name'];?> "><?php echo $country['name'];?></option>
												<?php }?>
											</select>
									</div>
								</div>
								<div class="col-md-1 col-sm-1 col-xs-2 bluebg "
									style="padding-right: 1px; padding-left: 1px;">
									<button type="button ">GO</button>
								</div>
							</div>
							<br>
						</form>
						<div class="maxheight1 " id="Layer68 ">
							<div id="wb_Text244 ">
								<span class="font2s2 "><strong>REAL-TIME</strong></span>
							</div>
							<h3 class="font1s2 ">
								<span>STOCKS MARKET</span>
							</h3>
							<div class="text-center displaydesktop ">
								<img src="<?php echo asset_url(); ?>images/trade-satation.png"
									class="img-responsive">
							</div>
						</div>
					</div>
					<div class="col-lg-10 col-md-10 col-sm-10">
						<ul class="nav nav-tabs">
							<li class="active nav121"><a data-toggle="tab" href="#home">Sellers/Shippers
									Offers</a></li>
							<li class="nav122"><a data-toggle="tab" href="#menu1">Buyers
									Requests</a></li>
							<form class="displaydesktop">
								<div class="row">
									<div class=" col-md-offset-1 col-md-4 col-sm-4 col-xs-6"
										style="padding-right: 1px; padding-left: 1px;">
										<input type="text" class="search-box" required="required"
											name="keyword"
											placeholder="Type a keyword to seach ( product, company or name )...">
									</div>
									<div class="col-md-1 col-sm-2 col-xs-4"
										style="padding-right: 1px; padding-left: 1px;">
										<div class="dropdown">
											<select class="search-box" name='country'>
												<option value="0">Country</option>
												<?php foreach ($Country as $country){?>
													<option
													value="<?php echo $country['id'];?>, <?php echo $country['name'];?> "><?php echo $country['name'];?></option>
												<?php }?>
											</select>
										</div>
									</div>
									<div class="col-md-1 col-sm-1 col-xs-2 bluebg"
										style="padding-right: 1px; padding-left: 1px;">
										<button type="button">GO</button>
									</div>
								</div>
							</form>
						</ul>

						<div class="tab-content">
							<!-- content-tab-1 -->
							<div id="home" class="tab-pane fade in active content121">
								<!-- view past close post add new post buttons -->
								<div class="tab1">
									<h3 class="leftbox1">For Sellers</h3>
									<p class="leftbox2">Send " I Have This" Stock Post And Manage
										Your Previous Ones.</p>
									<div id="Layer9">
										<img src="<?php echo asset_url(); ?>images/img0143.png"
											id="Image54" alt="" class="img46">
				                    <?php if($usertype[0]['user_category_id'] =='1' || $usertype[0]['user_category_id'] =='2' ) { ?>
				                    <a href="#"
											onclick="ShowObjectWithEffect('Layer74', 1, 'cliphorizontal', 500);return false;"><h4
												class="whitetext1">Add New Post</h4></a>
				                    <?php } else { ?>
				                    <a href="#"><h4 class="whitetext1">Add New Post</h4></a>
				                    <?php } ?>
				                </div>
									<div class="whitebox">
										<img src="<?php echo asset_url(); ?>images/viewmybuyposts.png"
											id="Image54" alt="" class="img46 mp1"> <a href="#"
											onclick="ShowObjectWithEffect('Layer28', 0, 'fade', 500);ShowObjectWithEffect('Layer32', 1, 'fade', 500);return false;"><h4
												class="greytext1">View My Posts</h4></a>
									</div>
									<div class="whitebox">
										<img src="<?php echo asset_url(); ?>images/closebuyposts.png"
											id="Image54" alt="" class="img46 mp1"> <a href="#"
											onclick="ShowObjectWithEffect('Layer32', 0, 'fade', 500);ShowObjectWithEffect('Layer28', 1, 'fade', 500);return false;"><h4
												class="greytext1">Close My Posts</h4></a>
									</div>
								</div>
								<!-- view past close post add new post buttons end-->
								<!-- close my post 1 -->

								<div id="Layer28" class="section11 spacier">
				            <?php 
// print_r($productList);
																if ($usertype [0] ['user_category_id'] == '1' || $usertype [0] ['user_category_id'] == '2') {
																	if (count ( $productList ) > 0 && $productList [0] ['id'] != '') {
																		foreach ( $productList as $product ) {
																			?>
				                <div id="Layer281">
										<div class="row" id="Layer4">
											<div class="col-md-2 col-sm-12 grid">
												<img
													src="<?php echo asset_url(); ?><?php echo $product['profile_image'];?>"
													alt="" class="img92">
												<!-- <img src="<?php echo asset_url(); ?><?php echo $product['profile_image'];?>" style="filter: blur(5px);" alt="" class="img92">-->
												<img src="<?php echo asset_url(); ?>images/china0.png"
													id="Image297" alt="" class="flag"> <strong class="country"><?php echo $product['country'];?> </strong>
												<p class=""><?php echo $product['province'];?></p>
												<p class="date"><?php echo date("d-M-Y", strtotime($product['create'])); ?></p>
											</div>
											<div class="col-md-10">
												<div class="col-md-8 col-sm-12 space1">
													<div id="wb_Text8" class="section3">
														<span><strong class="font1"><a href="buyer_profile.html"
																target="_blank" class="style5"><?php echo $product['name'];?></a></strong>
														</span>
														<p class="font5">  <?php echo $product['description'];?>  </p>

														<div class="inline">
															<span class="usd">&nbsp; USD <?php echo $product['unit_price'];?>&nbsp;&nbsp;&nbsp; </span>
															<span class="minorder">&nbsp; Min. Order: <?php echo $product['quantity'].' '.$product['unit'];?>&nbsp;&nbsp;&nbsp; </span>
														</div>
													</div>
													<div class="row">
														<div class="col-sm-8">
															<br> <span><strong class="fontpost1"><a
																	href="buyer_profile.html" target="_blank">Boosted By: <?php echo $product['prefix'].' '.$product['username'];?></a></strong></span>
															<p class="style5"><?php echo $product['company_name'];?></p>
														</div>
														<div class="col-sm-4 center">
															<img
																src="<?php echo asset_url(); ?>images/CommMember.png"
																id="Image49" alt="" class="img25"> <img
																src="<?php echo asset_url(); ?>images/Active.png"
																id="Image49" alt="" class="img25">
															<div class="inline">
																<p class="av">AVAILABLE TILL</p>
																<p class="av1">15th June</p>
															</div>
														</div>
													</div>
												</div>
												<div class="col-md-4 col-sm-12">
													<div class="tumb-slide">
														<img
															src="<?php echo asset_url(); ?><?php echo $product['main_image'];?>"
															class="imgresponsive img211">
														<div class="hover-thumb text-center">
															<a href="#"
																onclick="ShowObjectWithEffect('Layer_sell_post', 1, 'slideup', 500, 'swing');return false;"><img
																src="<?php echo asset_url(); ?>images/img0156.png"
																id="Shape3" alt="" style="width: 48px; height: 48px;"></a>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-10 col-md-offset-2" id="Layer_sell_post"
												style="position: absolute; display: none; top: 32px;">
												<!-- add new sell post -->
												<a href="#"
													onclick="ShowObjectWithEffect('Layer_sell_post', 0, 'slideup', 500);return false;"
													style="width: 10px;"> <img
													src="http://localhost/Untitled/Bigfish/assets/images/close.png"
													id="Image16" alt="" style="width: 33px; float: right;"></a>
												<div class="row" style="padding: 25px 0px;">
													<div class="col-md-3">
														<div class="row">
															<div class="col-md-6 col-xs-6 col-sm-6">
																<a
																	href="<?php echo base_url(); ?><?php echo $product['image1'];?>"
																	data-rel="PhotoGallery1" title="babytoy1"
																	rel="PhotoGallery1"><img alt="babytoy1"
																	id="PhotoGallery1_img0"
																	src="<?php echo asset_url(); ?>images/tn_babytoy1.jpg"
																	title="babytoy1"></a>
															</div>
															<div class="col-md-6 col-xs-6 col-sm-6">
																<a
																	href="<?php echo base_url(); ?><?php echo $product['image2'];?>"
																	data-rel="PhotoGallery1" title="babytoy1"
																	rel="PhotoGallery1"><img alt="babytoy1"
																	id="PhotoGallery1_img0"
																	src="<?php echo asset_url(); ?>images/tn_babytoy1.jpg"
																	title="babytoy1"></a>
															</div>
															<div class="col-md-6 col-xs-6 col-sm-6">
																<a
																	href="<?php echo base_url(); ?><?php echo $product['image3'];?>"
																	data-rel="PhotoGallery1" title="babytoy1"
																	rel="PhotoGallery1"><img alt="babytoy1"
																	id="PhotoGallery1_img0"
																	src="<?php echo asset_url(); ?>images/tn_babytoy1.jpg"
																	title="babytoy1"></a>
															</div>
															<div class="col-md-6 col-xs-6 col-sm-6">
																<a
																	href="<?php echo base_url(); ?><?php echo $product['image4'];?>"
																	data-rel="PhotoGallery1" title="babytoy1"
																	rel="PhotoGallery1"><img alt="babytoy1"
																	id="PhotoGallery1_img0"
																	src="<?php echo asset_url(); ?>images/tn_babytoy1.jpg"
																	title="babytoy1"></a>
															</div>
														</div>
													</div>
													<div class="col-md-8" style="padding: 0px 40px;">
														<div id="Layer18" class="inline">
															<span class="fontstyle1"><strong><?php echo $product['title'];?></strong></span>
															<div id="wb_CssMenu2">
																<ul>
																	<li class="firstmain"><a class="withsubmenu" href="#"
																		target="_self">Translate</a>
																		<ul>
																			<li class="firstitem"><a href="#" target="_self">To&nbsp;my&nbsp;language</a>
																			</li>
																			<li class="lastitem"><a href="#" target="_self">To&nbsp;English</a>
																			</li>
																		</ul></li>
																</ul>
																<br>
															</div>
														</div>
														<br> <span class="color1"><br><?php echo $product['stockdesc'];?></span>
													</div>
													<div class="col-md-1 p1">
														<div id="RollOver2" class="img45">
															<a
																href="javascript:popupwnd('./buyer_request.php','no','no','no','yes','yes','no','600','50','555','750')"
																target="_self"> <img class="hover" alt="Send Inquiry"
																src="<?php echo asset_url(); ?>images/inquirytomato.png">
																<span><img alt="Send Inquiry"
																	src="<?php echo asset_url(); ?>images/inquiryblack.png"></span>
															</a>
														</div>
														<div id="RollOver2" class="img45">
															<a
																href="javascript:chat_with(<?php echo $product['user_id'];?>,1);"
																target="_self"> <img class="hover" alt="Chat"
																src="<?php echo asset_url(); ?>images/chat_button2.png">
																<span><img alt="Chat"
																	src="<?php echo asset_url(); ?>images/chaTBLACK.png"></span>
															</a>
														</div>
														<div id="RollOver5" class="img45">
															<a href="./seller_home.php" target="_blank"> <img
																class="hover" alt="Add To My Community"
																src="<?php echo asset_url(); ?>images/addcommunity_button2.png">
																<span><img alt="Add To My Community"
																	src="<?php echo asset_url(); ?>images/add2comBLACK.png"></span>
															</a>
														</div>
														<div id="RollOver1" class="img45">
															<a href="./desksite.php" target="_blank"> <img
																class="hover" alt="Visit Home Page"
																src="<?php echo asset_url(); ?>images/desksite-dorange.png">
																<span><img alt="Visit Home Page"
																	src="<?php echo asset_url(); ?>images/desktopblack.png"></span>
															</a>
														</div>
													</div>
													<!-- add new sell post  end-->
												</div>
											</div>
										</div>

									</div>
				                 
                                 <?php } }  else { ?>
								      <div class="row">
										<h4 class="center">No Posts Added!</h4>
									</div>
								    <?php } } else { ?>
                                      <div class="row">
										<h4 class="center">This section is only for Sellers and
											Shippers</h4>
									</div>
								      <?php } ?>
				                
				           </div>


								<div id="Layer32" class="section11 spacier">
				                <?php 
// print_r($productList);
																				if ($usertype [0] ['user_category_id'] == '1' || $usertype [0] ['user_category_id'] == '2') {
																					if (count ( $productList ) > 0 && $productList [0] ['id'] != '') {
																						foreach ( $productList as $product ) {
																							// if($product['catid'] =='1' || $product['catid'] =='2' ) {
																							?>
				                
				                <div id="Layer3252" class="section11 spacier"
										onmouseenter="ShowObjectWithEffect('Layer8', 1, 'slideright', 300, 'swing');return false;"
										onmouseleave="ShowObject('Layer5', 0);ShowObject('Layer8', 0);return false;">
										<div class="row" id="Layer4">
											<div class="col-md-2 col-sm-12 grid center">
												<br>
												<p>Posted on</p>
												<p class="date"><?php echo date("d-M-Y", strtotime($product['create'])); ?></p>
												<input type="checkbox">
												<button type="button" id="Button4" class="m2">Delete</button>
												<!--  <p class="date">2 days before</p>-->
											</div>
											<div class="col-md-8 col-sm-12 space1">
												<div id="wb_Text8" class="section3">
													<span><strong class="font1"><a href="buyer_profile.html"
															target="_blank" class="style5"><?php echo $product['title'];?></a></strong>
													</span>
													<p class="font5">Required Specifications in details,
														Required Specifications in details, Required
														Specifications in details, Required Specifications in
														details, Specifications in details.</p>
													<div class="inline pp">
														<span class="usd y">&nbsp; USD <?php echo $product['stockprice'];?>&nbsp;&nbsp;&nbsp; </span>
														<span class="minorder g">&nbsp; Min. Order: <?php echo $product['stockqty'];?>&nbsp;&nbsp;&nbsp; </span>
													</div>
												</div>
												<div class="row">
													<div class="col-sm-8">
														<span><strong><a href="buyer_profile.html" target="_blank"
																class="fontpost1">Boosted By: Mr. Mohamed Ali</a></strong></span>
														<p class="style5"><?php echo $product['company_name'];?> </p>
													</div>
													<div class="col-sm-4 center"></div>
												</div>
											</div>
											<div class="col-md-2 col-sm-12">
												<div id="Layer5" class="section10 row">
													<div class="col-md-3">
														<div id="RollOver5" class="box4">
															<img src="<?php echo asset_url(); ?>images/babytoy3.jpg"
																id="Image44" alt="" class="img191">
														</div>
													</div>
													<div class="col-md-3">
														<div id="RollOver21" class="box4">
															<img src="<?php echo asset_url(); ?>images/babytoy3.jpg"
																id="Image44" alt="" class="img191">
														</div>
													</div>
													<div class="col-md-3">
														<div id="RollOver22" class="box4">
															<img src="<?php echo asset_url(); ?>images/babytoy3.jpg"
																id="Image44" alt="" class="img191">
														</div>
													</div>
													<div class="col-md-3">
														<div id="RollOver6" class="box4">
															<button type="button" id="Button4" class="mj5">close</button>
														</div>
													</div>
												</div>
												<div id="Layer8" class="section9"
													onclick="ShowObjectWithEffect('Layer5', 1, 'slideright', 500, 'swing');return false;"
													style="visibility: hidden">
													<div id="wb_Shape1" class="stylebox">
														<a href="#"
															onclick="ShowObjectWithEffect('Layer5', 1, 'slideright', 500, 'swing');return false;">
															<img
															src="http://localhost/Untitled/Bigfish/assets/images/img0070.png"
															id="Shape1" alt="" style="width: 11px; height: 48px;">
														</a>
													</div>
												</div>
												<div id="Layer7" class="section8">
													<img
														src="<?php echo asset_url(); ?><?php echo $product['main_image'];?>"
														class="imgresponsive img211">
												</div>
											</div>
										</div>
									</div>
                                 <?php } }  else { ?>
								      <div class="row">
										<h4 class="center">No Posts Added!</h4>
									</div>
								 <?php } } else { ?>
                                      <div class="row">
										<h4 class="center">This section is only for sellers and
											shippers</h4>
									</div>
								 <?php } ?>
				             </div>
							</div>
							<!-- view my post end -->

							<!-- content-tab-1 end -->
							<div id="menu1" class="tab-pane fade content122">
								<!-- close my post -->
								<div id="Layer288" class="section11 spacier">
				             <?php 
// print_r($productList);
																	if ($usertype [0] ['user_category_id'] == '3') {
																		if (count ( $productList ) > 0 && $productList [0] ['id'] != '') {
																			foreach ( $productList as $product ) {
																				?>
				                <div class="row" id="Layer4">
										<div class="col-md-2 col-sm-12 grid">
											<img
												src="<?php echo asset_url(); ?><?php echo $product['profile_image'];?>"
												alt="" class="img92">
											<!-- <img src="<?php echo asset_url(); ?><?php echo $product['profile_image'];?>" style="filter: blur(5px);" alt="" class="img92">-->
											<img src="<?php echo asset_url(); ?>images/china0.png"
												id="Image297" alt="" class="flag"> <strong class="country"><?php echo $product['country'];?> </strong>
											<p class=""><?php echo $product['province'];?></p>
											<p class="date"><?php echo date("d-M-Y", strtotime($product['create'])); ?></p>
										</div>
										<div class="col-md-10">
											<div class="col-md-8 col-sm-12 space1">
												<div id="wb_Text8" class="section3">
													<span><strong class="font1"><a href="buyer_profile.html"
															target="_blank" class="style5"><?php echo $product['name'];?></a></strong>
													</span>
													<p class="font5">
				                                    <?php echo $product['description'];?>
				                                </p>
												</div>
												<div class="row">
													<div class="col-sm-8">
														<br> <span><strong class="fontpost1"><a
																href="buyer_profile.html" target="_blank">Boosted By:  <?php echo $product['prefix'].' '.$product['username'];?></a></strong></span>
														<p class="style5"><?php echo $product['company_name'];?> </p>
													</div>
													<div class="col-sm-4 center">
														<img src="<?php echo asset_url(); ?>images/CommMember.png"
															id="Image49" alt="" class="img25"> <img
															src="<?php echo asset_url(); ?>images/Active.png"
															id="Image49" alt="" class="img25">
													</div>
												</div>
											</div>
											<div class="col-md-4 col-sm-12">
												<div class="tumb-slide">
													<img src="<?php echo asset_url(); ?>images/babytoy1.jpg"
														class="imgresponsive img211">
													<div class="hover-thumb text-center">
														<a href="#"
															onclick="ShowObjectWithEffect('Layer_buy_post', 1, 'slideup', 500, 'swing');return false;">
															<img src="<?php echo asset_url(); ?>images/img0156.png"
															id="Shape3" alt="" style="width: 48px; height: 48px;">
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-10 col-md-offset-2" id="Layer_buy_post"
											style="position: absolute; visibility: hidden; top: 32px;">
											<!-- add new sell post -->
											<a href="#"
												onclick="ShowObjectWithEffect('Layer_buy_post', 0, 'slideup', 500);return false;"
												style="width: 10px;"> <img
												src="<?php echo asset_url(); ?>images/close.png"
												id="Image16" alt="" style="width: 33px; float: right;"></a>
											<div class="row" style="padding: 25px 0px;">
												<div class="col-md-3">
													<div class="row">
														<div class="col-md-6 col-sm-3 col-xs-3">
															<a
																href="<?php echo base_url(); ?><?php echo $product['image1'];?>"
																data-rel="PhotoGallery1" title="babytoy1"
																rel="PhotoGallery1"><img alt="babytoy1"
																id="PhotoGallery1_img0"
																src="<?php echo asset_url(); ?>images/tn_babytoy1.jpg"
																title="babytoy1"></a>
														</div>
														<div class="col-md-6 col-sm-3 col-xs-3">
															<a
																href="<?php echo base_url(); ?><?php echo $product['image2'];?>"
																data-rel="PhotoGallery1" title="babytoy1"
																rel="PhotoGallery1"><img alt="babytoy1"
																id="PhotoGallery1_img0"
																src="<?php echo asset_url(); ?>images/tn_babytoy1.jpg"
																title="babytoy1"></a>
														</div>
														<div class="col-md-6 col-sm-3 col-xs-3">
															<a
																href="<?php echo base_url(); ?><?php echo $product['image3'];?>"
																data-rel="PhotoGallery1" title="babytoy1"
																rel="PhotoGallery1"><img alt="babytoy1"
																id="PhotoGallery1_img0"
																src="<?php echo asset_url(); ?>images/tn_babytoy1.jpg"
																title="babytoy1"></a>
														</div>
														<div class="col-md-6 col-sm-3 col-xs-3">
															<a
																href="<?php echo base_url(); ?><?php echo $product['image4'];?>"
																data-rel="PhotoGallery1" title="babytoy1"
																rel="PhotoGallery1"><img alt="babytoy1"
																id="PhotoGallery1_img0"
																src="<?php echo asset_url(); ?>images/tn_babytoy1.jpg"
																title="babytoy1"></a>
														</div>
													</div>
												</div>
												<div class="col-md-8" style="padding: 0px 40px;">
													<div id="Layer18" class="inline">
														<span class="fontstyle1"><strong><?php echo $product['title'];?></strong></span>
														<div id="wb_CssMenu2">
															<ul>
																<li class="firstmain"><a class="withsubmenu" href="#"
																	target="_self">Translate</a>
																	<ul>
																		<li class="firstitem"><a href="#" target="_self">To&nbsp;my&nbsp;language</a>
																		</li>
																		<li class="lastitem"><a href="#" target="_self">To&nbsp;English</a>
																		</li>
																	</ul></li>
															</ul>
															<br>
														</div>
													</div>
													<br> <span class="color1"><br><?php echo $product['stockdesc'];?> </span>
												</div>
												<div class="col-md-1 p1">
													<div id="RollOver2" class="img45">
														<a
															href="javascript:popupwnd('./buyer_request.php','no','no','no','yes','yes','no','600','50','555','750')"
															target="_self"> <img class="hover" alt="Send Inquiry"
															src="<?php echo asset_url(); ?>images/inquirytomato.png">
															<span><img alt="Send Inquiry"
																src="<?php echo asset_url(); ?>images/inquiryblack.png"></span>
														</a>
													</div>
													<div id="RollOver2" class="img45">
														<a
															href="javascript:popupwnd('./chat_window.php','no','no','no','no','no','no','750','50','430','720')"
															target="_self"> <img class="hover" alt="Chat"
															src="<?php echo asset_url(); ?>images/chat_button2.png">
															<span><img alt="Chat"
																src="<?php echo asset_url(); ?>images/chaTBLACK.png"></span>
														</a>
													</div>
													<div id="RollOver5" class="img45">
														<a href="./seller_home.php" target="_blank"> <img
															class="hover" alt="Add To My Community"
															src="<?php echo asset_url(); ?>images/addcommunity_button2.png">
															<span><img alt="Add To My Community"
																src="<?php echo asset_url(); ?>images/add2comBLACK.png"></span>
														</a>
													</div>
													<div id="RollOver1" class="img45">
														<a href="./desksite.php" target="_blank"> <img
															class="hover" alt="Visit Home Page"
															src="<?php echo asset_url(); ?>images/desksite-dorange.png">
															<span><img alt="Visit Home Page"
																src="<?php echo asset_url(); ?>images/desktopblack.png"></span>
														</a>
													</div>
												</div>
												<!-- add new sell post  end-->
											</div>
										</div>
									</div>
				               
                                 <?php } }  else { ?>
								      <div class="row">
										<h4 class="center">No Posts Added!</h4>
									</div>
								 <?php } ?>
								  <?php } else { ?>
                                      <div class="row">
										<h4 class="center">This section is only for Buyers</h4>
									</div>
								  <?php } ?>
				            </div>
								<!-- close my post end -->
								<!-- view my post -->
								<div id="Layer322" class="section11 spacier"
									onmouseenter="ShowObjectWithEffect('Layer88', 1, 'slideright', 300, 'swing');return false;"
									onmouseleave="ShowObject('Layer5', 0);ShowObject('Layer8', 0);return false;">
				                 <?php 
// print_r($productList);
																					if ($usertype [0] ['user_category_id'] == '3') {
																						if (count ( $productList ) > 0 && $productList [0] ['id'] != '') {
																							foreach ( $productList as $product ) {
																								?>
				                <div class="row" id="Layer4">
										<div class="col-md-2 col-sm-12 grid center">
											<br>
											<p>Posted on</p>
											<p class="date"><?php echo date("d-M-Y", strtotime($product['create'])); ?></p>
											<input type="checkbox">
											<button type="button" id="Button4" class="m2">Delete</button>
											<p class="date">2 days before</p>
										</div>
										<div class="col-md-8 col-sm-12 space1">
											<div id="wb_Text8" class="section3">
												<span><strong class="font1"><a href="buyer_profile.html"
														target="_blank" class="style5"><?php echo $product['title'];?></a></strong>
												</span>
												<p class="font5">Required Specifications in details,
													Required Specifications in details, Required Specifications
													in details, Required Specifications in details,
													Specifications in details.</p>
												<div class="inline pp">
													<span class="usd y">&nbsp; USD 2.50<?php echo $product['stockprice'];?> </span>
													<span class="minorder g">&nbsp; Min. Order: <?php echo $product['stockqty'];?>&nbsp;&nbsp;&nbsp; </span>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-8">
													<span><strong><a href="buyer_profile.html" target="_blank"
															class="fontpost1">Boosted By: <?php echo $product['prefix'].' '.$product['username'];?></a></strong></span>
													<p class="style5"><?php echo $product['company_name'];?> </p>
												</div>
												<div class="col-sm-4 center"></div>
											</div>
										</div>
										<div class="col-md-2 col-sm-12">
											<div id="Layer55" class="section10 row">
												<div class="col-md-3">
													<div id="RollOver5" class="box4">
														<img src="<?php echo asset_url(); ?>images/babytoy3.jpg"
															id="Image44" alt="" class="img191">
													</div>
												</div>
												<div class="col-md-3">
													<div id="RollOver21" class="box4">
														<img src="<?php echo asset_url(); ?>images/babytoy3.jpg"
															id="Image44" alt="" class="img191">
													</div>
												</div>
												<div class="col-md-3">
													<div id="RollOver22" class="box4">
														<img src="<?php echo asset_url(); ?>images/babytoy3.jpg"
															id="Image44" alt="" class="img191">
													</div>
												</div>
												<div class="col-md-3">
													<div id="RollOver6" class="box4">
														<button type="button" id="Button4" class="mj5">close</button>
													</div>
												</div>
											</div>
											<div id="Layer88" class="section9"
												onclick="ShowObjectWithEffect('Layer55', 1, 'slideright', 500, 'swing');return false;"
												style="visibility: hidden">
												<div id="wb_Shape1" class="stylebox">
													<a href="#"
														onclick="ShowObjectWithEffect('Layer55', 1, 'slideright', 500, 'swing');return false;">
														<img
														src="http://localhost/Untitled/Bigfish/assets/images/img0070.png"
														id="Shape1" alt="" style="width: 11px; height: 48px;">
													</a>
												</div>
											</div>
											<div id="Layer7" class="section8">
												<img
													src="<?php echo asset_url(); ?><?php echo $product['main_image'];?>"
													class="imgresponsive img211">
											</div>
										</div>
									</div>
				                 <?php } }  else { ?>
								      <div class="row">
										<h4 class="center">No Posts Added!</h4>
									</div>
								 <?php } ?>
								  <?php } else { ?>
                                      <div class="row">
										<h4 class="center">This section is only for Buyers</h4>
									</div>
								  <?php } ?>
				            </div>
								<!-- view my post end -->
								<!-- view past close post add new post buttons -->
								<div class="tab1">
									<h3 class="leftbox1">For Buyer</h3>
									<p class="leftbox2">Send " I Have This" Stock Post And Manage
										Your Previous Ones.</p>
									<div class="bluebox">
										<img src="<?php echo asset_url(); ?>images/barsendpost.png"
											id="Image54" alt="" class="img46">
				                    <?php if($usertype[0]['user_category_id'] =='3' ) { ?>
				                    <a href="#"
											onclick="ShowObjectWithEffect('Layer744', 1, 'cliphorizontal', 500);return false;"><h4
												class="whitetext1">Add New Post</h4></a>
				                	<?php } else { ?>
				                	<a href="#"><h4 class="whitetext1">Add New Post</h4></a>
				                	<?php } ?>
				                </div>
									<div class="whitebox">
										<img
											src="<?php echo asset_url(); ?>images/viewmysellposts.png"
											id="Image54" alt="" class="img46 mp1"> <a href="#"
											onclick="ShowObjectWithEffect('Layer288', 0, 'fade', 500);ShowObjectWithEffect('Layer322', 1, 'fade', 500);return false;"><h4
												class="greytext1">View My Posts</h4></a>
									</div>
									<div class="whitebox">
										<img src="<?php echo asset_url(); ?>images/closesellposts.png"
											id="Image54" alt="" class="img46 mp1"> <a href="#"
											onclick="ShowObjectWithEffect('Layer322', 0, 'fade', 500);ShowObjectWithEffect('Layer288', 1, 'fade', 500);return false;"><h4
												class="greytext1">Close My Posts</h4></a>
									</div>
								</div>
								<!-- view past close post add new post buttons end-->
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="Layer74" class="stylebox1">
		<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-3 hash">
				<img src="<?php echo asset_url(); ?>images/img0041.png" id="Image59"
					alt="" class="img191">
			</div>
			<form id="addPostContent" name="addPostContent" action=""
				method="post" enctype="multipart/form-data">
				<div class="col-md-9 col-sm-9 col-xs-9">
					<input type="hidden" name="usertype"
						value="<?php echo $usertype[0]['user_category_id'];?>">
					<div id="postdatacontent">
						<a href="#"
							onclick="ShowObjectWithEffect('Layer74', 0, 'clipvertical', 500);ShowObject('Layer75', 0);return false;">
							<img src="<?php echo asset_url(); ?>images/close.png" id="Image2"
							alt="" class="img35">
						</a>
						<h3 class="leftbox1">Boost It Now..</h3>
						<p class="leftbox2">Sell Post Covers All Sellers/Shippers
							Requirements, Such As New Offers, New Arrivals, Wholesale
							Discount, Special Shipping Rates, Sourcing A Potential Buyer For
							A Particular Product, Looking For Agents For A Special Product
							And Much More..</p>

						<div class="row">
							<div class="col-md-3 col-sm-3 col-xs-3">
								<p class="leftbox3">Post Title</p>
								<br>
								<p class="leftbox3">Upload Images</p>
								<br>
								<p class="leftbox3 paddingtop11">Description & Spec.:</p>
								<br>
								<p class="leftbox3 paddingtop12">USD Price</p>
							</div>
							<div class="col-md-9 col-sm-9 col-xs-9">
								<input type="text" id="Editbox2" Placeholder="Buying Post Title"
									name="title" value="" maxlength="46"> <br>
								<div class="inline">
									<input type="radio" name="gender" value="uploadimage"> <br>
									<!--<input type="file" name="userfile[]" multiple>-->
									<input type="file" id="postimgupload" name="userfile[]"
										multiple="multiple" onchange="readPostImageURL(this)">
									<p class="hh">4 jpg images, Each image with Max. size 75KB</p>
								</div>
								<br>
								<div class="inline">
									<input type="radio" name="gender" value="productimage">
									<p class="leftbox3">From my products</p>
									<!--  <input type="text" id="Editbox2" name="Buying Post Title" value="" maxlength="46" placeholder="type product name ">-->
									<select id="select_product_id" onchange="getval(this);"
										name="product_id">
					                    <?php foreach($products as $productlist) { ?>
										  <option value="<?php echo $productlist['id'];?>"><?php echo $productlist['name'];?></option>
									    <?php } ?>	
									</select>
									<button id="buttonselect">Select</button>
								</div>
								<br>
								<div class="inline">
									<img id="postphoto1" src="#" alt="" class="formbox"> <img
										id="postphoto2" src="#" alt="" class="formbox"> <img
										id="postphoto3" src="#" alt="" class="formbox"> <img
										id="postphoto4" src="#" alt="" class="formbox">
								</div>
								<br>
								<textarea rows="6" cols="30" name="description" maxlength="2000"></textarea>
								<br>
								<div class="inline">
									<input type="number" id="Editbox3" name="usd_price" value=""
										maxlength="10">
									<p class="leftbox3">Qty</p>
									<input type="text" name="quantity">
								</div>
								<br>
								<div class="inline">
									<input type="checkbox" name="profilecheck">
									<p class="leftbox2">Keep My Profile Info. Locked For Other
										Sellers..</p>
								</div>
								<div class="inline">
									<button id="Button4">Reset</button>
									<button id="Button4" type="submit">Submit</button>
								</div>
							</div>
						</div>
					</div>
					<div id="view_Product_image"></div>
				</div>
			</form>
		</div>
		<div class="row">
			<div class="greystyle">
				* Each post will get expired automatically after 7 days, to view the
				remains days or delete posts click " View My Posts". <br> * Don't
				repeat, duplicate or send the same post twice, so as you not affect
				the storage of your Stock Market Box.
			</div>
		</div>
	</div>

	<!-- add edit buy -->
	<div id="Layer744" class="stylebox1">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-4 hash">
				<img src="<?php echo asset_url(); ?>images/img0041.png" id="Image59"
					alt="" class="img191">
			</div>
			<form id="addPostContentbuyer" name="addPostContentbuyer" action=""
				method="post" enctype="multipart/form-data">
				<div class="col-md-8 col-sm-8 col-xs-8">
					<input type="hidden" name="usertype"
						value="<?php echo $usertype[0]['user_category_id'];?>"> <a
						href="#"
						onclick="ShowObjectWithEffect('Layer744', 0, 'clipvertical', 500);ShowObject('Layer755', 0);return false;">
						<img src="<?php echo asset_url(); ?>images/close.png" id="Image2"
						alt="" class="img35">
					</a>
					<h3 class="leftbox1">Boost It Now..</h3>
					<p class="leftbox2">Buyers Post Covers All Buyers Requirements,
						Such As Getting A Quote, Sourcing A Potential Seller For A
						Particular Product, Looking For A Product Agency, Manufacturing A
						New Item And Much More..</p>
					<div class="inline ">
						<p class="leftbox3">Post Title</p>
						<input type="text" id="Editbox2" Placeholder="Buying Post Title"
							name="title" value="" maxlength="46">
					</div>
					<div class="inline">
						<p class="leftbox3">Upload Images</p>
						<input type="radio" name="gender" value="uploadimage"> <input
							type="file" name="userfile[]" multiple>
						<p class="hh">4 jpg images, Each image with Max. size 75KB</p>
					</div>

					<div class="inline">
						<p class="leftbox3">Description & Spec.:</p>
						<textarea rows="6" cols="30" name="description" maxlength="2000"></textarea>
					</div>
					<div class="inline">
						<input type="checkbox" name="profilecheckbuy">
						<p class="leftbox2">Keep My Profile Info. Locked For Other
							Sellers..</p>
					</div>
					<div class="inline">
						<button id="Button4" type="reset">Reset</button>
						<button id="Button4" type="submit">Submit</button>
					</div>
				</div>
			</form>
		</div>
		<div class="row">
			<div class="greystyle">
				* Each post will get expired automatically after 7 days, to view the
				remains days or delete posts click " View My Posts". <br> * Don't
				repeat, duplicate or send the same post twice, so as you not affect
				the storage of your Stock Market Box.
			</div>
		</div>
	</div>
	<!-- edit post buy end -->
	<div id="Layer46"
		style="position: fixed; text-align: center; left: 0; top: 0; right: 0; bottom: 0; z-index: 1418;">
		<div id="Layer46_Container"
			style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
			<div id="wb_Text84"
				style="position: absolute; left: 423px; top: 186px; width: 375px; height: 49px; z-index: 527; text-align: left;">
				<span style="color: #4B4B4B; font-family: Arial; font-size: 43px;">THE
					BUSINESS</span>
			</div>
			<div id="Layer64"
				style="position: absolute; text-align: center; left: 0%; top: 0px; width: 1280px; height: 47px; z-index: 528;">
				<div id="Layer64_Container"
					style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="wb_Text82"
						style="position: absolute; left: 951px; top: 17px; width: 107px; height: 18px; z-index: 518; text-align: left;">
						<span
							style="color: #4B4B4B; font-family: Georgia; font-size: 15px;">Good
							Luck |</span>
					</div>
					<div id="wb_Text83"
						style="position: absolute; left: 1042px; top: 17px; width: 107px; height: 18px; z-index: 519; text-align: left;">
						<span
							style="color: #FF8C00; font-family: Georgia; font-size: 15px;">Tang
							Lee</span>
					</div>
					<div id="Layer65"
						style="position: absolute; text-align: left; left: 1115px; top: 6px; width: 46px; height: 38px; z-index: 520;">
						<div id="wb_Image55"
							style="position: absolute; left: 7px; top: 5px; width: 30px; height: 30px; z-index: 517;">
							<a href="#"
								onclick="ShowObjectWithEffect('Layer29', 1, 'fold', 300);return false;"><img
								src="images/rseller2.png" id="Image55" alt=""></a>
						</div>
					</div>
					<div id="wb_Text141"
						style="position: absolute; left: 209px; top: 15px; width: 68px; height: 18px; text-align: center; z-index: 521;">
						<span style="color: #A9A9A9; font-family: Arial; font-size: 16px;">TRD</span>
					</div>
					<div id="wb_Text142"
						style="position: absolute; left: 261px; top: 15px; width: 61px; height: 20px; z-index: 522; text-align: left;">
						<span
							style="color: #808080; font-family: Impact; font-size: 16px;">STATION</span>
					</div>
				</div>
			</div>
			<div id="wb_Text85"
				style="position: absolute; left: 423px; top: 211px; width: 441px; height: 156px; z-index: 529; text-align: left;">
				<span style="color: #00BFFF; font-family: Impact; font-size: 128px;">STATION</span>
			</div>
			<div id="wb_Text86"
				style="position: absolute; left: 423px; top: 355px; width: 431px; height: 45px; z-index: 530; text-align: left;">
				<span style="color: #696969; font-family: Arial; font-size: 12px;">A
					Real-Time Business Platform, Allows Worldwide Businessmen To Sell
					&amp;&nbsp; Buy, Offer &amp; Request, And Much More.. <br>
				</span>
			</div>
			<div id="wb_Image58"
				style="position: absolute; left: 61px; top: 114px; width: 385px; height: 668px; z-index: 531;">
				<img src="images/img0162.png" id="Image58" alt="">
			</div>
			<div id="Layer66"
				style="position: absolute; text-align: center; left: 423px; top: 422px; width: 581px; height: 37px; z-index: 532;">
				<div id="Layer66_Container"
					style="width: 581px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<div id="wb_CssMenu6"
						style="position: absolute; left: 385px; top: 1px; width: 159px; height: 36px; z-index: 523;">
						<ul>
							<li class="firstmain"><a class="withsubmenu" href="#"
								target="_self">Country</a>

								<ul>
									<li class="firstitem"><a href="#" target="_self">America</a></li>
									<li><a href="#" target="_self">Arbanyia</a></li>
									<li><a href="#" target="_self">Belguiam</a></li>
									<li><a href="#" target="_self">Billa&nbsp;Rose</a></li>
									<li class="lastitem"><a href="#" target="_self">Camiron</a></li>
								</ul></li>
						</ul>
						<br>
					</div>
					<form name="SiteSearch3_form" id="SiteSearch3_form"
						accept-charset="UTF-8" onsubmit="return searchPage(features)">
						<input type="text" id="SiteSearch3"
							style="position: absolute; left: 0px; top: 1px; width: 374px; height: 26px; line-height: 26px; z-index: 524;"
							name="SiteSearch1" value=""
							placeholder="Type a product name to access the real-time station">
					</form>
					<div id="wb_Image57"
						style="position: absolute; left: 492px; top: 10px; width: 13px; height: 8px; z-index: 525;">
						<img src="images/img0161.png" id="Image57" alt="">
					</div>
					<input type="button" id="Button14"
						onclick="ShowObjectWithEffect('Layer46', 0, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer2', 1, 'slidedown', 500, 'swing');return false;"
						name="Search" value="GO"
						style="position: absolute; left: 518px; top: 1px; width: 63px; height: 30px; z-index: 526;">
				</div>
			</div>
			<div id="wb_Text89"
				style="position: absolute; left: 423px; top: 473px; width: 303px; height: 15px; z-index: 533; text-align: left;">
				<span style="color: #696969; font-family: Arial; font-size: 12px;">
					High You Voice, Ask For Whatever ..</span>
			</div>
		</div>
	</div>
	<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
	<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
	<script>

$('#buttonselect').click(function() {
    var id = $('#select_product_id').val(); 
    $('#postdatacontent').hide();
    $.post(base_url+"product/images", {id : id}, function(data){
	    $('#view_Product_image').html(data);
	    },'html');
    //alert(id);
});

$('#buttonuse').click(function() {
   // var id = $('#select_product_id').val(); 
   alert("hi");
    $('#postviewimage').hide();
    $('#postdatacontent').show();
   /* $.post(base_url+"product/images", {id : id}, function(data){
	    $('#view_Product_image').html(data);
	    },'html');*/
    //alert(id);
});


$('#addPostContent').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    	title: {
            validators: {
                notEmpty: {
                    message: 'Post Title is required and cannot be empty'
                }
            }
        }
    }
}).on('success.form.bv', function(event,data) {
	// Prevent form submission
	event.preventDefault();
	addPostContent();
});

function addPostContent() {
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponse,
	 		url : base_url+'seller/bstationpostinsert',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#addPostContent').ajaxSubmit(options);
}

$('#addPostContentbuyer').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    	title: {
            validators: {
                notEmpty: {
                    message: 'Post Title is required and cannot be empty'
                }
            }
        }
    }
}).on('success.form.bv', function(event,data) {
	// Prevent form submission
	event.preventDefault();
	addPostContentbuyer();
});

function addPostContentbuyer() {
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponse,
	 		url : base_url+'seller/bstationpostinsertbuyer',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#addPostContentbuyer').ajaxSubmit(options);
}

function showAddRequest(formData, jqForm, options){
	$("#response").hide();
   	var queryString = $.param(formData);
	return true;
}
   	
function showAddResponse(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		$("#response").removeClass('alert-success');
       	$("#response").addClass('alert-danger');
		$("#response").html(resp.msg.name);
		$("#response").show();
  	} else {
  		$("#response").removeClass('alert-danger');
        $("#response").addClass('alert-success');
        $("#response").html(resp.msg);
        $("#response").show();
        alert(resp.msg);
        window.location.href = base_url+"b-station";
  	}
}

function readPostImageURL(input) {
	var filecount = $(input)[0].files.length;
	if(filecount <5) {
            for(var i=0; i< filecount; i++) {
            	setup_readerpost($(input)[0].files, i);
            }
	} else {
		alert('You can not select more than 4 files');
	}
}

function setup_readerpost(files, i) {
    var file = files[i];
    var name = file.name;
    var extension = name.replace(/^.*\./, '');
    var reader = new FileReader();
    reader.onload = function(e){
    	//readerLoaded(e, files, i, name);
    	var j = parseInt(i) + 1;
       // $('#postimgupload').css('display', 'none');
       /* if(extension == "pdf") {
        	$('#postphoto'+j).replaceWith($('<embed id="postphoto'+j+'" src="" />'));
        }*/
        $('#postphoto'+j).show();
        $('#postphoto'+j).attr('src', e.target.result).css('width', '60px').css('height', '60px');
    };
    reader.readAsDataURL(files[i]);
}

</script>
	<script>
function ValidateSend_Buying_Post(theForm) {
    var regexp;
    if (theForm.Editbox1.value.length < 10) {
        alert("Please Enter Your Post Title");
        theForm.Editbox1.focus();
        return false;
    }
    if (theForm.Editbox1.value.length > 46) {
        alert("Please Enter Your Post Title");
        theForm.Editbox1.focus();
        return false;
    }
    if (theForm.FileUpload1.value == "") {
        alert("Please Upload The Post  jpg or png images.");
        theForm.FileUpload1.focus();
        return false;
    }
    var extension = theForm.FileUpload1.value.substr(theForm.FileUpload1.value.lastIndexOf('.'));
    if ((extension.toLowerCase() != ".jpg") &&
        (extension.toLowerCase() != ".png")) {
        alert("Please Upload The Post  jpg or png images.");
        theForm.FileUpload1.focus();
        return false;
    }
    if (theForm.TextArea1.value.length < 110) {
        alert("Please Enter Enough Specifications For Your Post");
        theForm.TextArea1.focus();
        return false;
    }
    if (theForm.TextArea1.value.length > 210) {
        alert("Please Enter Enough Specifications For Your Post");
        theForm.TextArea1.focus();
        return false;
    }
    return true;
}
</script>
	<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>
	<script>
$(document).ready(function() {
    searchParseURL();
    searchParseURL();
    searchParseURL();
    searchParseURL();
    var $autocomplete = $('<ul class="autocomplete"></ul>').hide().insertAfter('#SiteSearch4');
    var selectedItem = null;
    var setSelectedItem = function(item) {
        selectedItem = item;
        if (selectedItem === null) {
            $autocomplete.hide();
            return;
        }
        if (selectedItem < 0) {
            selectedItem = 0;
        }
        if (selectedItem >= $autocomplete.find('li').length) {
            selectedItem = $autocomplete.find('li').length - 1;
        }
        $autocomplete.find('li').removeClass('selected').eq(selectedItem).addClass('selected');
        $autocomplete.css('left', $('#SiteSearch4').position().left);
        $autocomplete.css('top', $('#SiteSearch4').position().top + $('#SiteSearch4').outerHeight());
        $autocomplete.show();
    };
    var populateSearchField = function() {
        $('#SiteSearch4').val($autocomplete.find('li').eq(selectedItem).text());
        setSelectedItem(null);
    };
    $('#SiteSearch4').attr('autocomplete', 'off').keyup(function(event) {
        if (event.keyCode > 40 || event.keyCode == 8) {
            var data = new Array();
            var keywordVal = $('#SiteSearch4').val();
            keywordVal = keywordVal.toLowerCase();
            for (i = 0; i < database_length; i++) {
                var words = (searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords).toLowerCase();
                var array = words.split(" ");
                data = $.merge(data, array);
            }

            var unique = new Array();
            o: for (var i = 0; i < data.length; i++) {
                for (var j = 0; j < unique.length; j++) {
                    if (unique[j] == data[i]) continue o;
                }
                unique[unique.length] = data[i];
            }

            unique.sort();
            if (keywordVal.length && unique.length) {
                $autocomplete.empty();
                var item = 0;
                $.each(unique, function(index, term) {
                    term = term.toLowerCase();
                    if (term.indexOf(keywordVal) == 0) {
                        $('<li></li>').text(term).data('item', item).appendTo($autocomplete).mouseover(function() {
                            var item = $(this).data('item');
                            setSelectedItem(item);
                        }).click(populateSearchField);
                        item++;
                    }
                });
                setSelectedItem(0);
            } else {
                setSelectedItem(null);
            }
        } else
        if (event.keyCode == 38 && selectedItem !== null) {
            setSelectedItem(selectedItem - 1);
            event.preventDefault();
        } else
        if (event.keyCode == 40 && selectedItem !== null) {
            setSelectedItem(selectedItem + 1);
            event.preventDefault();
        } else
        if (event.keyCode == 27 && selectedItem !== null) {
            setSelectedItem(null);
        }
    }).keypress(function(event) {
        if (event.keyCode == 13 && selectedItem !== null) {
            populateSearchField();
            event.preventDefault();
        }
    }).blur(function(event) {
        setTimeout(function() {
            setSelectedItem(null);
        }, 250);
    });
    searchParseURL();
    var $autocomplete = $('<ul class="autocomplete"></ul>').hide().insertAfter('#SiteSearch5');
    var selectedItem = null;
    var setSelectedItem = function(item) {
        selectedItem = item;
        if (selectedItem === null) {
            $autocomplete.hide();
            return;
        }
        if (selectedItem < 0) {
            selectedItem = 0;
        }
        if (selectedItem >= $autocomplete.find('li').length) {
            selectedItem = $autocomplete.find('li').length - 1;
        }
        $autocomplete.find('li').removeClass('selected').eq(selectedItem).addClass('selected');
        $autocomplete.css('left', $('#SiteSearch5').position().left);
        $autocomplete.css('top', $('#SiteSearch5').position().top + $('#SiteSearch5').outerHeight());
        $autocomplete.show();
    };
    var populateSearchField = function() {
        $('#SiteSearch5').val($autocomplete.find('li').eq(selectedItem).text());
        setSelectedItem(null);
    };
    $('#SiteSearch5').attr('autocomplete', 'off').keyup(function(event) {
        if (event.keyCode > 40 || event.keyCode == 8) {
            var data = new Array();
            var keywordVal = $('#SiteSearch5').val();
            keywordVal = keywordVal.toLowerCase();
            for (i = 0; i < database_length; i++) {
                var words = (searchDatabase[i].title + " " + searchDatabase[i].description + " " + searchDatabase[i].keywords).toLowerCase();
                var array = words.split(" ");
                data = $.merge(data, array);
            }

            var unique = new Array();
            o: for (var i = 0; i < data.length; i++) {
                for (var j = 0; j < unique.length; j++) {
                    if (unique[j] == data[i]) continue o;
                }
                unique[unique.length] = data[i];
            }

            unique.sort();
            if (keywordVal.length && unique.length) {
                $autocomplete.empty();
                var item = 0;
                $.each(unique, function(index, term) {
                    term = term.toLowerCase();
                    if (term.indexOf(keywordVal) == 0) {
                        $('<li></li>').text(term).data('item', item).appendTo($autocomplete).mouseover(function() {
                            var item = $(this).data('item');
                            setSelectedItem(item);
                        }).click(populateSearchField);
                        item++;
                    }
                });
                setSelectedItem(0);
            } else {
                setSelectedItem(null);
            }
        } else
        if (event.keyCode == 38 && selectedItem !== null) {
            setSelectedItem(selectedItem - 1);
            event.preventDefault();
        } else
        if (event.keyCode == 40 && selectedItem !== null) {
            setSelectedItem(selectedItem + 1);
            event.preventDefault();
        } else
        if (event.keyCode == 27 && selectedItem !== null) {
            setSelectedItem(null);
        }
    }).keypress(function(event) {
        if (event.keyCode == 13 && selectedItem !== null) {
            populateSearchField();
            event.preventDefault();
        }
    }).blur(function(event) {
        setTimeout(function() {
            setSelectedItem(null);
        }, 250);
    });
    $("a[data-rel='PhotoGallery2']").attr('rel', 'PhotoGallery2');
    $("a[rel^='PhotoGallery2']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
    $("a[rel^='PhotoGallery1']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });
    $("#Layer74").stickylayer({
        orientation: 1,
        position: [380, 225],
        delay: 0
    });
    $("#Layer51").stickylayer({
        orientation: 1,
        position: [230, 45],
        delay: 500
    });
});
</script>