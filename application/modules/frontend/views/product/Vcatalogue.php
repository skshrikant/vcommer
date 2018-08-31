<style>
	.product3d >.panel-default {
	    background-color: #FFFFFF;
	    border: 1px #D3D3D3 solid;
	}
	.product3d >.panel{
	    margin-bottom: 20px;
	    background-color: #fff;
	    border: 1px #D3D3D3 solid;
	    border-radius: 0px;
	    
	}
	.product3d >h4 >span >a:hover{
		color:#1E90FF;
		font-family:Arial;
		font-size:16px;
	}
	
	.wb_Text495{
		position:absolute;
		left:19px;
		top:13px;
		width:258px;
		height:18px;
		text-align:center;
		z-index:220;
	}
	.wb_Text496{
		position:absolute;
		left:22px;
		top:35px;
		width:254px;
		height:30px;
		text-align:center;
		z-index:221;
	}
	.wb_Text497{
		position:absolute;
		left:56px;
		top:327px;
		width:176px;
		height:27px;
		text-align:center;
		z-index:222;
	}
	span.usd {
		color:#A9A9A9;
		font-family:Arial;
		font-size:13px;
	}
	span.desc{
		color:#3C3C3C;font-family:Arial;font-size:12px;
	}
	span.product_name{
		color:#1E90FF;
		font-family:Arial;
		font-size:16px;
	}
	.wb_Text498{
		position:absolute;left:70px;top:356px;width:161px;height:16px;text-align:center;z-index:223;
	}
	.min-order{
		background-color:#FFFFFF;
		color:#3C3C3C;
		font-family:Arial;
		font-size:13px;
	}
	.wb_Shape75{
		position:absolute;left:43px;top:77px;width:215px;height:250px;z-index:224;
	}
	.wb_Text2{
		position:absolute;left:161px;top:379px;width:63px;height:14px;z-index:225;text-align:left;
	}
	.wb_Image1{
		position:absolute;left:137px;top:373px;width:25px;height:25px;z-index:226;
	}
	.wb_Text1{
		position:absolute;left:113px;top:379px;width:29px;height:14px;z-index:227;text-align:left;
	}
	span.like-text{
		color:#3C3C3C;font-family:Arial;font-size:11px;
	}
	span.like-count{
	color:#3C3C3C;font-family:Arial;font-size:11px;
	}
	.Layer228{
		text-align:center;
		top:0px;
		width:294px;
		height:406px;
		z-index:255;
		background: #fff;
   		margin-bottom: 30px;
   		padding-top:5px;
	}
	#Layer6 {
   	 background-color: #f1f1f1;
	}
	#Layer7 {
   	 background-color: #FF6347;
	}
	.style19 {
	    position: absolute;
	    left: 3px;
	    top: 1px;
	    width: 100%;
	    height: 23px;
	    z-index: 84;
	}
	.Layer279 {
	    background-color: #F05539;
	}
	#Image23 {
	    border: none; 
	    left: 0;
	    top: 0;
	    width: 100%;
	    height: 100%;
	}
</style>
	<div id="Layer2_Container">
		<div class="col-sm-12" style="padding:0px;">
   			<h1 class="sfont1">V-CATALOUGES</h1>
			<p class="sfont2">Source And Follow The Latest Collection Of Global Sellers And Famous Brands..</p>
			<br>
		</div>
		<div class="row" style="margin:0px;">
			<div class="col-lg-10 section11 seller-list">
				<?php 
					$i = 0;
					foreach ($vCatalogues as $key=>$item) {?>
						<?php if (($i % 3)==0){?>
							<div class="row">
							<?php }?>
								<div class="col-md-4">
									<div id="Layer5" style="text-align:left;left:0px;top:463px;width:320px;height:510px;z-index:420;margin-bottom:10px;" onmouseenter="ShowObjectWithEffect('Layer279-<?php echo $key;?>', 1, 'slideleft', 300, 'swing');return false;" onmouseleave="ShowObjectWithEffect('Layer279-<?php echo $key;?>', 0, 'slideleft', 300, 'swing');return false;">
										<div id="wb_Text12" style="position:absolute;left:28px;top:29px;width:278px;height:16px;text-align:center;z-index:384;">
											<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><?php echo $item['catalogue_title']; ?></strong></span>
										</div>
										<div id="Layer279-<?php echo $key;?>" class="Layer279" style="position: absolute; text-align: left; visibility: visible; left: 255px; top: 165px; width: 49px; height: 159px; z-index: 385; display: none;">
											<div id="RollOver5"  class="" style="position:absolute;left:14px;top:26px;width:30px;height:30px;z-index:380;">
												<a href="javascript:viewCatalogueBook(<?php echo $item['id'];?>);">
													<img class="hover" src="<?php echo asset_url()?>images/newicons/vacticongray.png" alt="view">
													<span><img alt="View" src="<?php echo asset_url()?>images/newicons/vacticonwhite.png"></span>
												</a>
											</div>
											<div id="RollOver6" style="position:absolute;left:14px;top:64px;overflow:hidden;width:30px;height:30px;z-index:381">
												<a href="javascript:addToMyFavourite(<?php echo $item['catalogue_id']; ?>,7);">
													<img class="hover" alt="Like" src="<?php echo asset_url()?>images/favoriteclick.png">
													<span><img alt="Like" src="<?php echo asset_url()?>images/addtofav.png"></span>
												</a>
											</div>
											<div id="RollOver9" style="position:absolute;left:14px;top:102px;overflow:hidden;width:30px;height:30px;z-index:382">
												<a href="<?php echo base_url();?>vcatalogues?keyword=<?php echo $item['catalogue_title']; ?>" target="_self">
													<img class="hover" alt="Same" src="<?php echo asset_url()?>images/from-sameblack.png">
													<span><img alt="Same" src="<?php echo asset_url()?>images/from-same-user.png"></span>
												</a>
											</div>
										</div>
										<div id="wb_Image23" style="position:absolute;left:58px;top:83px;width:214px;height:309px;z-index:386;">
										<img src="<?php echo asset_url()?>images/vCAT2.png" id="Image23" alt=""></div>
										<div id="wb_Shape2" style="position:absolute;left:87px;top:191px;width:171px;height:171px;z-index:387;">
											<img src="<?php echo asset_url().$item['catalogue_cover'];?>" id="Shape2" alt="" style="width:171px;height:171px;border-radius:50%;border:2px solid #e55a43;">
										</div>
										<div id="wb_Text16" style="position:absolute;left:101px;top:351px;width:143px;height:16px;text-align:center;z-index:388;">
										<span style="background-color:#F05539;color:#FFFFFF;font-family:Georgia;font-size:13px;"><strong><?php echo $item['catalogue_title']; ?> </strong></span></div>
										<div id="wb_Text34" style="position:absolute;left:134px;top:51px;width:29px;height:14px;z-index:389;text-align:left;">
										<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Likes</span></div>
										<div id="wb_Image27" style="position:absolute;left:158px;top:45px;width:25px;height:25px;z-index:390;">
										<img src="<?php echo asset_url()?>images/items_like0.png" id="Image27" alt=""></div>
										<div id="wb_Text33" style="position:absolute;left:182px;top:51px;width:63px;height:14px;z-index:391;text-align:left;">
										<span style="color:#3C3C3C;font-family:Arial;font-size:11px;" id="sdiv<?php echo $item['catalogue_id']; ?>"><?php echo $item['likes'];?></span></div>
										<div id="wb_Text10" style="position:absolute;left:40px;top:485px;width:30px;height:12px;z-index:392;text-align:left;">
										<span style="color:#3C3C3C;font-family:Arial;font-size:9.3px;">Rank</span></div>
										<div id="Layer6" style="position:absolute;text-align:left;left:74px;top:489px;width:181px;height:3px;z-index:393;">
										<div id="Layer7" style="position:absolute;text-align:left;left:0px;top:1px;width:<?php echo $item['rank']."%";?>;height:2px;z-index:383;">
										</div>
										</div>
										<div id="wb_Text13" style="position:absolute;left:185px;top:418px;width:125px;height:15px;z-index:394;text-align:left;">
										<span style="color:#808080;font-family:Arial;font-size:12px;"><?php echo $item['company_country'];?> | <?php echo $item['company_province'];?></span></div>
										<div id="wb_Text14" style="position:absolute;left:64px;top:417px;width:63px;height:15px;z-index:395;text-align:left;">
										<span style="color:#808080;font-family:Georgia;font-size:12px;">Supplier&nbsp;&nbsp; </span></div>
										<div id="wb_Text15" style="position:absolute;left:45px;top:397px;width:244px;height:15px;text-align:center;z-index:396;">
										<span style="color:#1E90FF;font-family:Arial;font-size:12px;text-transform:uppercase;"><a href="<?php echo base_url();?>desksite/<?php echo $item['busi_id'];?>" target="_blank" class="style19"><?php echo $item['company_name']; ?></a></span></div>
										<div id="wb_Text11" style="position:absolute;left:261px;top:484px;width:40px;height:14px;z-index:397;text-align:left;">
										<span style="color:#FF6347;font-family:Arial;font-size:11px;"><strong>% <?php echo $item['rank'];?></strong></span></div>
										<div id="wb_Image107" style="position:absolute;left:106px;top:446px;width:25px;height:25px;z-index:398;">
											<?php if(!empty($tsuserid) && $item['incommunity'] > 0 && $item['plan_id'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" > 
									        <?php }else {?>
									        <img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" style="opacity :0.15">
									        <?php } ?>
										</div>
										<div id="wb_Image5" style="position:absolute;left:133px;top:446px;width:34px;height:26px;z-index:399;">
											<?php if($item['plan_id'] > 1 && $item['gaurantee_period'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1" style="width:34px;height:26px;"> <?php } else {?>
									    	<img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1" style="opacity :0.15;width:34px;height:26px;" >
									    	<?php }?>
								    	</div>
										<div id="wb_Image18" style="position:absolute;left:170px;top:447px;width:25px;height:25px;z-index:400;">
											<?php if($item['plan_id'] > 1 && $item['is_logo_verified'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" > <?php } else { ?>
									        <img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" style="opacity :0.15" >
									        <?php }?>
										</div>
										<div id="wb_Image22" style="position:absolute;left:202px;top:447px;width:25px;height:25px;z-index:401;">
											<?php if($item['plan_id'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1"><?php } else {?>
											<img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1" style="opacity :0.15">
											<?php }?>
										</div>
									
									<div id="wb_Text7" class="style-2">
									     <div id="wb_Image10" class="img-style">
									        
								        </div>
									    <div id="wb_Image2" class="img-style">
									    	
								        </div>
									    <div id="wb_Image1" class="img-style">
									        
								        </div>
								        <div id="wb_Image1" class="img-style">
											
								        </div>
									</div>
									
									</div>
								</div>
						<?php if (($i % 3)==2  || ($i+1) == count($vCatalogues)){?>
							</div>
						<?php  } $i++; ?>
				<?php }?>
			</div>
			<div class="col-lg-2" style="padding:0px;">
				<div id="Layer3" class="box8">
					<div id="wb_Text328" class="innersection" style="background-color:#fff;">
						<span class="text2"><strong><a href="<?php echo base_url();?>seller/desksites" target="_blank" class="style5">DESKSITES </a></strong></span>
						<p class="text3">Experience a new vision of websites techniques with quick access, rich information and much more..</p>
						<span class="text2"><strong><a href="<?php echo base_url();?>3dproducts" target="_blank" class="style5">PRODUCTS IN 3D </a></strong></span>
						<p class="text3">Step into a new dimension of E-commerce, search products with rich information, live details and much more..</p>
				    </div>
			   </div>
			   <div class="maxheight1 bg1">
					<div class="row" style="margin: 0px">
						<h3 style="color: #fff; text-align: center;">
							<span style="color:#4B4B4B;font-family:Arial;font-size:13px;">WORLD</span><br> 
							<span style="color:#4B4B4B;font-family:Impact;font-size:20px;letter-spacing:0.07px;">SELLERS</span>
						</h3>
						<div class="text-center displaydesktop">
							<img src="<?php echo asset_url(); ?>images/ts/Fsellersok.png" class="img-responsive">
						</div>
					</div>
		    	</div>
		    	<div id="Layer2" class="style2">
       			  	<div id="Layer2_Container" class="style3">
           			 	<div id="Layer138">
               			 	<div id="wb_Carousel3" class="style4">
                    			<div id="Carousel3" style="position:absolute">
                     			 <?php 
                     				 $i= 0;
			                        foreach($featuredSellers as $featuredSeller){
			                        $i++;
			                        	?>
                        			<div class="frame" <?php if(($i ==1) || ($i ==2)){ echo ""; } else{ echo 'style="display:none"'; } ?>>
                           				<div id="Layer147" onmouseenter="ShowObjectWithEffect('Buyer_Holder1', 1, 'dropup', 300, 'swing');return false;" onmouseleave="ShowObjectWithEffect('Buyer_Holder1', 0, 'fade', 500, 'swing');return false;">
			                                <div id="wb_Image226" >
			                                    <img src="<?php echo asset_url().''.$featuredSeller['picture']; ?>" id="Image226" alt=""  class="style86">
			                                </div>
			                                <div id="Layer144" class="style15">
			                                    <div id="wb_Text434" class="style16">
			                                        <span class="fontstyle-4"><strong><?php echo $featuredSeller['contact_person_name'];?></strong></span>
			                                    </div>
			                                    <div id="wb_Text435" class="style17">
			                                        <span class="fontstyle-5"><?php echo $featuredSeller['position'];?></span></div>
			                                    <div id="Layer148" class="style18">
			                                        <div id="wb_Image48" class="style19">
			                                            <img src="<?php echo asset_url().''.$featuredSeller['contact_person_flag']; ?>" id="Image48" alt="">
			                                        </div>
			                                    </div>
			                                    <div id="Layer150" class="style20">
			                                        <div id="wb_Text440" class="style21">
			                                            <span class="fontstyle-6"><strong>Main Garment</strong></span></div>
			                                    </div>
			                                </div>
			                                <div id="Buyer_holder2" class="style22">
			                                    <div id="wb_Image521" class="style23">
			                                        <a href="#" onclick="ShowObjectWithEffect('Layer_buyer', 1, 'scale', 500, 'swing');return false;"><img src="<?php echo asset_url(); ?>images/window.png" id="Image5" alt=""></a>
			                                    </div>
			                                    <div id="RollOver12" class="style24">
			                                        <a href="./buyer_profile.php" target="_blank">
			                                            <img class="hover" alt="" src="<?php echo asset_url(); ?>images/desktoporange.gif">
			                                            <span><img alt="" src="<?php echo asset_url(); ?>images/desktopblack.png"></span>
			                                        </a>
			                                    </div>
			                               </div>
                           				</div>
                           			</div>
                           	 <?php }?>
                   			 </div>
		                    <div id="Carousel3_back" class="style51">
		                        <a href=""><img alt="Back" src="<?php echo asset_url(); ?>images/previoustxt0blk.png"></a>
		                    </div>
		                    <div id="Carousel3_next" class="style53">
		                        <a style="cursor:pointer"><img alt="Next" src="<?php echo asset_url(); ?>images/nexttxt0blk.png"></a>
		                    </div>
                		</div>
           			</div>
           			<div class="maxheight1 bg1">
						<div class="row" style="margin: 0px;background-color: #808080;">
							<h3 style="color: #fff; text-align: center;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">FEATURED WORLD </span><br> 
								<span style="color:#FFFFFF;font-family:Impact;font-size:20px;letter-spacing:0.07px;">BUYERS</span>
							</h3>
							<div class="text-center displaydesktop" style="margin-left:7px;margin-bottom:15px;">
								<img src="<?php echo asset_url(); ?>images/img0123.png" class="img-responsive">
							</div>
						</div>
			    	</div>
			            <div id="">
			                <div id="wb_Carousel2" class="style4">
			                    <div id="Carousel2" style="position:absolute">
			                    <?php 
			                      $i= 0;
			                        foreach($featuredBuyers as $featuredBuyer){
			                        $i++;
			                 	?>
			                        <div class="frame" <?php if(($i ==1) || ($i ==2)){ echo ""; } else{ echo 'style="display:none"'; } ?>>
			                            <div id="Layer147" onmouseenter="ShowObjectWithEffect('Buyer_Holder1', 1, 'dropup', 300, 'swing');return false;" onmouseleave="ShowObjectWithEffect('Buyer_Holder1', 0, 'fade', 500, 'swing');return false;">
			                                <div id="wb_Image226" >
			                                    <img src="<?php echo asset_url().''.$featuredBuyer['picture']; ?>" id="Image226" alt=""  class="style86">
			                                </div>
			                              
			                                <div id="Layer144" class="style15">
			                                    <div id="wb_Text434" class="style16">
			                                        <span class="fontstyle-4"><strong><?php echo $featuredBuyer['contact_person_name'];?></strong></span>
			                                    </div>
			                                    <div id="wb_Text435" class="style17">
			                                        <span class="fontstyle-5"><?php echo $featuredBuyer['position'];?></span></div>
			                                    <div id="Layer148" class="style18">
			                                        <div id="wb_Image48" class="style19">
			                                            <img src="<?php echo asset_url().''.$featuredBuyer['contact_person_flag']; ?>" id="Image48" alt="">
			                                        </div>
			                                    </div>
			                                    <div id="Layer150" class="style20">
			                                        <div id="wb_Text440" class="style21">
			                                            <span class="fontstyle-6"><strong>Men Garments</strong></span></div>
			                                    </div>
			                                </div>
			                                
			                                <div id="Buyer_holder2" class="style22">
			                                    <div id="wb_Image521" class="style23">
			                                        <a href="#" onclick="ShowObjectWithEffect('Layer_buyer', 1, 'scale', 500, 'swing');return false;"><img src="<?php echo asset_url(); ?>images/window.png" id="Image5" alt=""></a>
			                                    </div>
			                                    <div id="RollOver12" class="style24">
			                                        <a href="./buyer_profile.php" target="_blank">
			                                            <img class="hover" alt="" src="<?php echo asset_url(); ?>images/desktoporange.gif">
			                                            <span><img alt="" src="<?php echo asset_url(); ?>images/desktopblack.png"></span>
			                                        </a>
			                                    </div>
			                                </div>
			                            </div>
			                      	</div>
			                   	<?php }?>
			                    </div>
			                    <div id="Carousel2_back" class="fs18">
			                        <a style="cursor:pointer"><img alt="Back" style="border-width:0" src="<?php echo asset_url(); ?>images/previoustxt0.png"></a>
			                    </div>
			                    <div id="Carousel2_next" class="fs17">
			                        <a style="cursor:pointer"><img alt="Next" style="border-width:0" src="<?php echo asset_url(); ?>images/nexttxt0.png"></a>
			                    </div>
			                </div>
			            </div>
			        </div>
        		<!-- fearture videos end-->
        		<!-- feature products -->
			        <div class="sp">
			            <div class="maxheight1 bg3">
			                <div class="row" style="margin: 0px">
			                    <h3 style="color: #fff; text-align: center;">
									<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">FEATURED</span><br> 
									<span style="color:#FFFFFF;font-family:Impact;font-size:20px;letter-spacing:0.07px;">PRODUCTS</span>
								</h3>
			                    <div class="text-center displaydesktop">
			                        <img src="<?php echo asset_url(); ?>images/dice0.png" class="img-responsive">
			                    </div>
			                </div>
			            </div>
			            <div id="Layer24">
			                <div id="wb_Carousel1" class="style4">
			                    <div id="Carousel1" style="position:absolute">
			                    <?php $i =0;
			                    foreach ( $featuredProducts as $key=>$featuredProduct) {
			                    	if($key%2 == 0) {
				                    	?>
			                        <div class="frame" <?php if($i > 0) { ?>style="display:none;"<?php } ?>>
			                            <div id="Layer134" class="product111" onmouseenter="ShowObjectWithEffect('holder7-<?php echo $key;?>', 1, 'dropup', 300, 'swing');return false;" onmouseleave="ShowObjectWithEffect('holder7-<?php echo $key;?>', 0, 'fade', 500, 'swing');return false;">
			                                <div id="wb_Text417" class="product212">
			                                    <span class="product313"><strong><?php echo $featuredProduct['name'];?></strong></span></div>
			                                <div id="wb_Text418" class="product414">
			                                    <span class="product5"><?php echo substr($featuredProduct['description'], '0', '35');?>...</span></div>
			                                <div id="wb_Image128" class="product6">
			                                    <img src="<?php echo asset_url().''.$featuredProduct['main_image']; ?>" id="Image128" alt="" style="width:190px;height:155px;"></div>
			                                <div id="wb_Text419" class="product7">
			                                    <span class="product8"><strong><?php echo $featuredProduct['unit_price'];?> / Pc</strong></span></div>
			                                <div id="wb_Text420" class="product9">
			                                    <span class="product10"><strong>Min. Qty. <?php echo $featuredProduct['quantity'].' '.$featuredProduct['unit'];?> </strong></span></div>
			                                <div id="holder7-<?php echo $key;?>" class="product25" style="display:none;">
			                                    <div id="wb_Image138" class="product24">
			                                        <a href="javascript:openProduct(<?php echo $featuredProduct['id'];?>)" ><img src="<?php echo asset_url(); ?>images/view.png" id="Image138" alt=""></a>
			                                    </div>
			                                    <div id="wb_Image139" class="product26">
			                                        <a href="<?php echo base_url();?>desksite/<?php echo $featuredProduct['busi_id'];?>" target="_blank"><img src="<?php echo asset_url(); ?>images/window.png" id="Image139" alt=""></a>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <?php $i++; } ?>
			                        <?php }?>
			                    </div>
			                    <div id="Carousel11" style="position:absolute;top:275px;">
			                    <?php $i =0;
			                    foreach ( $featuredProducts as $key=>$featuredProduct) {
			                    	if($key%2 == 1) {
				                    	?>
			                        <div class="frame" <?php if($i > 0) { ?>style="display:none;"<?php } ?>>
			                            <div id="Layer134" class="product111" onmouseenter="ShowObjectWithEffect('holder7-<?php echo $key;?>', 1, 'dropup', 300, 'swing');return false;" onmouseleave="ShowObjectWithEffect('holder7-<?php echo $key;?>', 0, 'fade', 500, 'swing');return false;">
			                                <div id="wb_Text417" class="product212">
			                                    <span class="product313"><strong><?php echo $featuredProduct['name'];?></strong></span></div>
			                                <div id="wb_Text418" class="product414">
			                                    <span class="product5"><?php echo substr($featuredProduct['description'], '0', '35');?>...</span></div>
			                                <div id="wb_Image128" class="product6">
			                                    <img src="<?php echo asset_url().''.$featuredProduct['main_image']; ?>" id="Image128" alt="" style="width:190px;height:155px;"></div>
			                                <div id="wb_Text419" class="product7">
			                                    <span class="product8"><strong><?php echo $featuredProduct['unit_price'];?> / Pc</strong></span></div>
			                                <div id="wb_Text420" class="product9">
			                                    <span class="product10"><strong>Min. Qty. <?php echo $featuredProduct['quantity'].' '.$featuredProduct['unit'];?> </strong></span></div>
			                                <div id="holder7-<?php echo $key;?>" class="product25" style="display:none;">
			                                    <div id="wb_Image138" class="product24">
			                                        <a href="javascript:openProduct(<?php echo $featuredProduct['id'];?>)" ><img src="<?php echo asset_url(); ?>images/view.png" id="Image138" alt=""></a>
			                                    </div>
			                                    <div id="wb_Image139" class="product26">
			                                        <a href="<?php echo base_url();?>desksite/<?php echo $featuredProduct['busi_id'];?>" target="_blank"><img src="<?php echo asset_url(); ?>images/window.png" id="Image139" alt=""></a>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <?php $i++; }?>
			                        <?php } ?>
			                    </div>
			                </div>
			            </div>
			        </div>
			        <!-- feature product ends-->
			    </div>
        	</div>
		</div>
	</div>
<?php echo $template['partials']['vcatalogue']; ?>
<script>
function likeCatalogue(id) {
	$.get(base_url+"desksite/catalogue/like/"+id,{},function(data) {
		alert(data.msg);
		var likes = parseInt($("#sdiv"+id).html());
		likes++;
		$("#sdiv"+id).html(likes);
	},'json');
}
function changeCountry(a){
	var country = $(a).val();
	$.post(base_url+"seller/city",{country: country, busi_type: 1 },function(data) {
		$('#city').html(data);
	},'html');
	
}
var hoverTimeout, keepOpen = false, stayOpen = $('#Details');
    $(document).on('mouseenter', '.cat_slide', function () {
        clearTimeout(hoverTimeout);
        var curr_slide = $(this).attr("alt");
        $(".sub_cat").css('color', '#337ab7');
        $(".slide-details").hide();
		$("#sub_cat_main_prod").hide();
        $("#" + curr_slide).show();
        $("." + curr_slide).show();
        stayOpen.addClass('show');
    }).on('mouseleave', '.slide', function () {
        clearTimeout(hoverTimeout);
        hoverTimeout = setTimeout(function () {
            if (!keepOpen) {
                $(".slide-details").hide();
                stayOpen.removeClass('show');
            }
        }, 1000);
    });

    $(document).on('mouseenter', '#Details', function () {
        keepOpen = true;
        setTimeout(function () {
            keepOpen = false;
        }, 1500);
    }).on('mouseleave', '#Details', function () {
        keepOpen = false;
        $(".slide-details").hide();
        stayOpen.removeClass('show');
    });
    function highlight_keywords(str) {
        $(".sub_cat").css('color', '#337ab7');
        $("." + str).css('color', 'orange');
    }
    function filter_by_subcat(cat_id, cat_sub_id,main_prod) {
        $("#filter_cat").val(cat_id);
        $("#filter_sub_cat").val(cat_sub_id);
        $("#main_prod").val(main_prod);
        $("#filter_by_category").submit();
    }
	function filter_by_subprod(cat_id, cat_sub_id,main_prod,sub_prod){
		$("#filter_cat").val(cat_id);
        $("#filter_sub_cat").val(cat_sub_id);
        $("#main_prod").val(main_prod);
        $("#sub_prod").val(sub_prod);
        $("#filter_by_category").submit();
	}
	function get_main_products(main_cat,id,sub_cat_name){
		$.ajax({
			url: base_url + "home/get_main_products",
			type: "post",
			data : { id : id,name:sub_cat_name,main_cat:main_cat },
			success: function (response) {
				$("#sub_cat_main_prod").html('');
				$("#sub_cat_main_prod").append(response);
				$("#sub_cat_main_prod").show();
				
			}
		})
    }
</script>