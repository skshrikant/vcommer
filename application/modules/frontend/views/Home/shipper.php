<link rel="stylesheet" href="<?php echo asset_url();?>css/custom.css">
<style>
#RollOver26 a
{
   display: block;
   position: relative;
   height: 100%;
   width: 100%;
}
#RollOver26 a img
{
   position: absolute;
   /* z-index: 1; */
   border-width: 0;
}
#RollOver26 span
{
   display: block;
   height: 100%;
   width: 100%;
   position: absolute;
   z-index: 2;
}
#RollOver26 a .hover
{
   visibility: hidden;
}
#RollOver26 a:hover .hover
{
   visibility: visible;
}
#RollOver26 a:hover span
{
   visibility: hidden;
}
#RollOver26 img
{
   border-width: 0;
   position: absolute;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}


#RollOver25 a
{
   display: block;
   position: relative;
   height: 100%;
   width: 100%;
}
#RollOver25 a img
{
   position: absolute;
   /* z-index: 1; */
   border-width: 0;
}
#RollOver25 span
{
   display: block;
   height: 100%;
   width: 100%;
   position: absolute;
   z-index: 2;
}
#RollOver25 a .hover
{
   visibility: hidden;
}
#RollOver25 a:hover .hover
{
   visibility: visible;
}
#RollOver25 a:hover span
{
   visibility: hidden;
}
#RollOver25 img
{
   border-width: 0;
   position: absolute;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}


#RollOver24 a
{
   display: block;
   position: relative;
   height: 100%;
   width: 100%;
}
#RollOver24 a img
{
   position: absolute;
   /* z-index: 1; */
   border-width: 0;
}
#RollOver24 span
{
   display: block;
   height: 100%;
   width: 100%;
   position: absolute;
   z-index: 2;
}
#RollOver24 a .hover
{
   visibility: hidden;
}
#RollOver24 a:hover .hover
{
   visibility: visible;
}
#RollOver24 a:hover span
{
   visibility: hidden;
}
#RollOver24 img
{
   border-width: 0;
   position: absolute;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}

#RollOver27 a
{
   display: block;
   position: relative;
   height: 100%;
   width: 100%;
}
#RollOver27 a img
{
   position: absolute;
   /* z-index: 1; */
   border-width: 0;
}
#RollOver27 span
{
   display: block;
   height: 100%;
   width: 100%;
   position: absolute;
   z-index: 2;
}
#RollOver27 a .hover
{
   visibility: hidden;
}
#RollOver27 a:hover .hover
{
   visibility: visible;
}
#RollOver27 a:hover span
{
   visibility: hidden;
}
#RollOver27 img
{
   border-width: 0;
   position: absolute;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
}

.frame1 {
	z-index: 0;
    position: absolute;
    top: 275px;
    left: 0px;
}
.sfont1 {
	margin-top:0px;
}
.img1 {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    border: 1px solid #aaa;
}
#Button15 {
    border: 0px #A9A9A9 solid;
    background-color: #00BFFF;
    color: #FFFFFF;
    font-family: Arial;
    font-weight: normal;
    font-size: 13px;
}
</style>  
<div>
	<div class="col-sm-12" style="padding:0px;padding-top: 40px;">
   		 <h1 class="sfont1">Shippers</h1>
   		 <p class="sfont2">Sourcing with more details is available by selecting additional options from the More Options Menu on the right side..</p>
   		 <br>
    </div>
    <div class="row" style="margin:0px;">
    	<div class="col-lg-10 section11 shippers-list" id="Layer6">
			<?php 
	    	if(count($Shippers) > 0 &&  $Shippers[0]['id'] !='') {  
    			foreach ($Shippers as $key=>$shipper) {?>
			<div class="row" id="Layer4" style="margin:0px;margin-bottom:15px;" onmouseenter="ShowObjectWithEffect('Layer8_<?php echo $key;?>', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer5_<?php echo $key;?>', 0);ShowObject('Layer8_<?php echo $key;?>', 0);return false;">
				<div class="col-md-3 col-sm-12 displaydesktop">
					<div id="SlideShow1" class="img22 SlideShow1" >
						<?php if(!empty($shipper['info_img1'])) { ?>
					    <img class="image" src="<?php echo asset_url().$shipper['info_img1'];?>" alt="" title="" style="width:218px;">
					    <img class="image" src="<?php echo asset_url().$shipper['info_img2'];?>" style="display:none;width:218px;" alt="" title="">
					    <?php } else { ?>
					    <img class="image" src="<?php echo asset_url();?>images/shipping-a.jpg" alt="" title="" style="width:218px;">
					    <img class="image" src="<?php echo asset_url();?>images/shipping-a.jpg" style="display:none;width:218px;" alt="" title="">
					    <?php } ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 space1">
					<div id="wb_Text8" class="section3">
						 <div class="inline">
							 <img src="<?php echo asset_url().$shipper['profile_image']; ?>" class="img1"/>
					   		 <span class="block"><strong class="font1"><a href="<?php echo base_url();?>shipper/profile/<?php echo $shipper['busi_id'];?>" target="_blank" class="style5"><?php echo $shipper['company_name']?></a></strong>
					   		<br> Presented By: <?php if(!empty($shipper['contact_name'])){ echo $shipper['contact_prefix'].' '.$shipper['contact_name']; } else { echo $shipper['name_prefix'].' '.$shipper['name'];} ?></span>
				   		 </div>
			   		  	<p class="font5" style="margin:0px;"><?php echo substr($shipper['hot_presentation'], '0', '200'); ?><br><br></span></p>
			   		</div>
					<div><div class="col-sm-2" style="padding:0px;width:110px;"><strong class="strong1">Main Services |</strong></div><div class="col-sm-9" style="padding:0px;width:445px;"> <?php echo substr($shipper['main_product'], '0', '165')?> <?php if(strlen($shipper['main_product']) > 165) { ?>...<?php } ?></div></div>
					<div id="Layer5_<?php echo $key;?>" class="section10 row seller_Layer5">
						<div class="col-md-2">
							&nbsp;
						</div>
						<div class="col-md-3">
							<div id="RollOver5" class="box1">
						        <a href="<?php echo base_url();?>shipper/profile/<?php echo $shipper['busi_id'];?>" target="_blank">
						            <img class="hover" alt="" src="<?php echo asset_url() ?>images/Desktopskyb.png">
						            <span><img alt="" src="<?php echo asset_url() ?>images/desktopicon.gif"></span>
						        </a>
						        <div id="wb_Text13"class="beauty1">
						        <p class="textfont1">DESKSITE</p>
						        <p class="textfont2">To View Shipper Desksite Source Services, Contact, Chat and much more.. </p>
						        </div>
						    
						    </div>
						</div>
						<div class="col-md-3">
						 	<div id="RollOver22" class="box3">
						        <a href="javascript:addToMyFavourite(<?php echo $shipper['busi_id'];?>,2);" target="_self">
						            <img class="hover" alt="" src="<?php echo asset_url() ?>images/faforiteskyb.png">
						            <span><img alt="Favourite" src="<?php echo asset_url() ?>images/favoriteclick.png"></span>
						        </a>
						        <div id="wb_Text13"class="beauty1">
							        <p class="textfont1">ADD TO FAVOURITE</p>
							        <p class="textfont2">To Save Shipper in Your Favorite, So As You Will Be Able To View It Later On..</p>
						        </div>
						    </div>
						</div>
						<div class="col-md-3">
						  	<div id="RollOver6" class="box4" onclick="chat_with(<?php echo $shipper['user_id'];?>,<?php echo $shipper['accept_chat'];?>);">
						        <a>
						            <img class="hover" alt="" src="<?php echo asset_url() ?>images/chatskyb.png">
						            <span><img alt="" src="<?php echo asset_url() ?>images/chaTBLACK.png"></span>
						        </a>
						        <div id="wb_Text13"class="beauty1">
						        <p class="textfont1">CHAT </p>
						        <p class="textfont2">To Chat With Shipper .. </p>
						        </div>
						    </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-12">
					<div id="Layer8_<?php echo $key;?>" class="section9 seller_Layer8" onclick="ShowObjectWithEffect('Layer5_<?php echo $key;?>', 1, 'slideright', 500, 'swing');return false;">
					    <div id="wb_Shape1" class="stylebox">
					        <a href="#" onclick="ShowObjectWithEffect('Layer5_<?php echo $key;?>', 1, 'slideright', 500, 'swing');return false;"><img src="<?php echo asset_url() ?>images/img0098.png" id="Shape1" alt="" style="width:11px;height:48px;"></a>
					    </div>
					</div>
						<div id="Layer7" class="section8">
						    <div id="wb_Text7" class="style-2">
							    <div id="wb_Image10" class="img-style">
							         <?php if(!empty($tsuserid) && $shipper['community_id'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" > 
							        <?php }else {?>
							        <img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" style="opacity :0.15">
							        <?php } ?>
						        </div>
							    <div id="wb_Image1" class="img-style">
							        <?php if($shipper['is_logo_verified'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" > <?php } else { ?>
							        <img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" style="opacity :0.15" >
							        <?php }?>
						        </div>
						        <div id="wb_Image1" class="img-style">
									<?php if($shipper['plan_id'] != '' && $shipper['plan_id'] > '1'){?><img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1"><?php } else {?>
									<img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1" style="opacity :0.15">
									<?php }?>
						        </div>
							</div>
							<div class="text-center">
								<div class="space33">
									<strong class="font-style-1">Shipper | </strong><p class="font-style-2"> <?php echo $shipper['sub_category'];?></p>
								</div><br>
								<div class="space33">
									<strong class="font-style-1"> <?php echo $shipper['company_country'];?> |  </strong><p class="font-style-2"> <?php echo $shipper['company_city'];?></p>
								</div>
							</div>
						</div>
						
				</div>		
		</div>
		<?php }
	     } else {?>
		      <div class="col-lg-10 section11"  id="Layer6" onmouseenter="ShowObjectWithEffect('Layer8', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer5', 0);ShowObject('Layer8', 0);return false;" >
		     	<h4 class="center"> No Shipper Found!</h4>
		     </div>
	     <?php } ?>
	     <?php if(isset($total_pages) && $total_pages > 1) { ?>
	     	<div class="row" style="margin:0px;">
				<div id="wb_Text396" style="text-align:center;height:31px;padding:7px;padding-right:0px;background-color:#00BFFF;" class="col-sm-1">
					<span style="color:#FFFFFF;font-family:Georgia;font-size:12px;">Page&nbsp;&nbsp; </span>
				</div>
				<div id="wb_Text393" style="height:31px;background-color: #FFFFFF;padding:0px" class="col-sm-11">
					<div style="text-align:left;padding-top:7px;" class="col-sm-2">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $params['page'];?> of <?php echo $total_pages;?>&nbsp;&nbsp; </span>
					</div>
					<div style="text-align:center;padding-top:7px;" class="col-sm-8">
						<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><a href="<?php if($total_pages >= ($params['page']+1)){ echo $wpsellerurl."page=".($params['page']+1);}?>" class="style5">VIEW MORE</a></strong></span>
					</div>
					<div class="col-sm-2" style="padding:0px;padding-top:7px;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"> Page No</span>&nbsp;
						<form name="searchPageForm" id="searchPageForm" method="GET" action="<?php echo $wpshipperurl;?>" style="display:inline-block;">
							<select type="text" id="pageinputselect" style="border-radius:0px;width:40px;height:17px;line-height:17px;border: 1px #A9A9A9 solid;background-color:#E0FFFF;padding-left:10px;" name="page">
							<?php for($i=1;$i<=$total_pages;$i++) { ?>
								<option value="<?php echo $i;?>" <?php if($i == $params['page']){ ?>selected<?php } ?>><?php echo $i;?></option>
							<?php } ?>
							</select>
							&nbsp;&nbsp;&nbsp;&nbsp;
							<span class="pull-right">
								<button type="submit" id="Button15" style="width:47px;height:31px;margin-top: -7px;">GO</button>
							</span>
						</form>
					</div>
				</div>
			</div>
		<?php } ?>
     </div>
	<div class="col-lg-2" style="padding:0px;">
				<div class="panel">
					<div class="panel-heading" class="panelstyle">
						<b class="panelstyle1">More Options Menu</b>
					</div>
					<div class="list-group categary">
						<?php						
							$shippingLine = "&usubcat_id=6";
							$forwarder = "&usubcat_id=7";
							$companies = "&usubcat_id=8";
							$parts = parse_url($_SERVER['REQUEST_URI']);
							if(!empty($parts['query'])){
								parse_str($parts['query'], $query);
								if(!empty($query['usubcat_id'])){
									switch ($query['usubcat_id']) {
										case '6':
											$shippingLine = "";
											break;
										case '7':
											$forwarder = "";
											break;
										case '8':
											$companies = "";
											break;
									}
									
								} 
							}
						?>

						<a href="<?php echo $url;?><?= $shippingLine ?>" class="list-group-item">Show Shipping Lines First</a> 
				   		<a href="<?php echo $url;?><?= $forwarder ?>" class="list-group-item">Show Forwarders First </a> 
				   		<a href="<?php echo $url;?><?= $companies ?>" class="list-group-item">Show Shipping Companies First </a> 
				   		<?php if(!empty( $tsuserid)){?>

								<?php						
									$community_only = "&community_only=1";
									$parts = parse_url($_SERVER['REQUEST_URI']);
									if(!empty($parts['query'])){
										parse_str($parts['query'], $query);
										if(!empty($query['community_only']) && $query['community_only'] == 1){ 
											$community_only = "";
										} 
									}
								?>
					   		<a href="<?php echo $url;?><?= $community_only ?>" class="list-group-item">Show My Community Members First </a> 
					   		<?php						
									$community_hide = "&community_hide=1";
									$parts = parse_url($_SERVER['REQUEST_URI']);
									if(!empty($parts['query'])){
										parse_str($parts['query'], $query);
										if(!empty($query['community_hide']) && $query['community_hide'] == 1){ 
											$community_hide = "";
										} 
									}
								?>
					   		<a href="<?php echo $url;?><?=$community_hide ?>" class="list-group-item">Hide My Community Members </a> 
				   		<?php }?>
				   	</div>
				</div>
				<div id="Layer3" class="box8">
				<div id="wb_Text328" class="innersection">
					<span class="text2"><strong><a href="<?php echo base_url();?>shipper/desksites" target="_blank" class="style5">SHIPPERS DESKSITES</a></strong></span>
					<p class="text3">Experience A New Vision Of Websites Techniques With Quick Access, Rich Information And Much More..</p>
					<span class="text2"><strong><a href="<?php echo base_url();?>b-station" target="_blank" class="style5">LATEST SHIPPING POSTS </a></strong></span>
					<p class="text3">Follow Up The Latest Shipping Posts Boosted By Global Shippers</p>
			    </div>
			   </div>
			   <div class="maxheight1 bg1">
					<div class="row" style="margin: 0px">
						<div id="wb_Text275" style="margin-top: 20px;text-align:center;">
							<span style="color:#4B4B4B;font-family:Arial;font-size:13px;">FEATURED WORLD</span>
						</div>
						<div id="wb_Text274" style="text-align:center;">
							<span style="color:#4B4B4B;font-family:Impact;font-size:20px;letter-spacing:0.07px;">SHIPPERS</span>
						</div>
						<div id="wb_Image141" style="height:242px;">
							<img src="<?php echo asset_url(); ?>images/Fshipperok.png" class="img-responsive">
						</div>
					</div>
				</div>

				<div id="Layer2" >
	       			<div id="Layer2_Container" class="style3">
	           			<div id="Layer138">
	               			<div id="wb_Carousel1" style="width:206px;height:655px;z-index:660;overflow:hidden;">
								<div  id="Carousel1" style="position:absolute;">
								<?php 
									$i= 0;
									foreach($featuredShippers as $featuredShipper){
										if($i%2 == 0){ 
											$frame = $i;?>

											<div class="frame">
										<?php } $i++; ?>
												
												<div id="<?= ($i%2 == 0) ?'Layer51':'Layer55' ?>" style="position:absolute;text-align:left;left:2px;width:206px;height:288px;<?= ($i%2 == 0) ?'top:2px;z-index:547;':'top:304px;z-index:548;'?>">
													<div id="Layer52" style="position:absolute;text-align:left;left:0px;top:209px;width:206px;height:79px;z-index:535;">
														<div id="wb_Text39" style="position:absolute;left:65px;top:15px;width:135px;height:14px;z-index:530;text-align:left;">
															<span style="color:#000000;font-family:Georgia;font-size:11px;">
																<?php if($featuredShipper['contact_person_name'] != ""){ ?>
																	<strong><?php echo $featuredShipper['contact_person_name'];?></strong>
																<?php }else{ ?>
																	<strong><?php echo $featuredShipper['contact_person'];?></strong>
																<?php } ?>
															</span>
														</div>
														<div id="wb_Text40" style="position:absolute;left:65px;top:30px;width:132px;height:15px;z-index:531;text-align:left;">
															<span style="color:#696969;font-family:Arial;font-size:12px;"><?= $featuredShipper['position'] ?></span>
														</div>
														<div id="Layer53" style="position:absolute;text-align:left;left:0px;top:60px;width:206px;height:19px;z-index:532;">
															<div id="wb_Text41" style="position:absolute;left:8px;top:2px;width:190px;height:14px;z-index:527;text-align:left;">
																<span style="color:#000000;font-family:Arial;font-size:11px;">
																<strong><?php echo $featuredShipper['product_name']; ?></strong>
																</span>
															</div>
														</div>

														<div id="Layer54" style="position:absolute;text-align:left;visibility:hidden;left:2px;top:14px;width:207px;height:46px;z-index:533;">
															<div id="wb_Image37" style="position:absolute;left:64px;top:5px;width:35px;height:35px;z-index:528;">
																<a href="#" onclick="ShowObjectWithEffect('Layer_buyer', 1, 'scale', 500, 'swing');return false;">
																<img src="images/window.png" id="Image37" alt="">
																</a>
															</div>
															<div id="RollOver13" style="position:absolute;left:113px;top:6px;overflow:hidden;width:35px;height:35px;z-index:529">
																<a href="#" target="_blank">
																<img class="hover" alt="" src="images/desktoporange.gif">
																<span>
																	<img alt="" src="images/desktopblack.png">
																</span>
																</a>
															</div>
														</div>
														<!-- <div id="wb_Image38" style="position:absolute;left:12px;top:9px;width:42px;height:42px;z-index:534;">
															<img src="<?php echo asset_url();?>images/flags/<?php echo $featuredShipper['flag'];?>" id="Image38" alt="">
														</div> -->
													</div>


													<div id="wb_Image39" style="position:absolute;left:0px;top:0px;width:206px;height:226px;z-index:536;">
														<a href="#" onclick=";return false;">
															<?php if ($featuredShipper['picture'] != "" && file_exists("assets/".$featuredShipper['picture'])){ ?>
																<img src="<?php echo asset_url().''.$featuredShipper['picture']; ?>" id="Image39" alt=""  class="style86" style="width:226px !important;max-height:210px !important;">
															<?php }else{ ?>
																<img src="<?php echo asset_url().'images/img1004.png'?>" id="Shape24" alt="" style="width:206px;height:210px;">
															<?php } ?>
														</a>
													</div>
												</div>
														
													
										<?php if($frame+2 == $i){ ?>
											</div>
										<?php } ?>
									<?php }?>
								</div>
								<div id="Carousel1_back" style="position:absolute;left:15px;top:92%;width:35px;height:13px;z-index:999">
									<a style="cursor:pointer">
									<img alt="Back" style="border-width:0" src="images/previoustxt0blk.png">
									</a>
								</div>
								<div id="Carousel1_next" style="position:absolute;right:15px;top:92%;width:35px;height:13px;z-index:999">
									<a style="cursor:pointer">
									<img alt="Next" style="border-width:0" src="images/nexttxt0blk.png">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>	
				
				<div class="maxheight1 bg2">
					<div class="row" style="margin: 0px">
						<div id="Layer212" style="position:absolute;text-align:left;width:205px;height:870px;z-index:2513;">
					
							<div id="Layer213" style="position:absolute;text-align:left;left:0px;top:0px;width:205px;height:273px;z-index:2311;">
							<div id="wb_Text223" style="position:absolute;top:32px;width:205px;height:25px;text-align:center;z-index:2212;">
								<span style="color:#FFFFFF;font-family:Impact;font-size:20px;letter-spacing:0.07px;">VIDEOS</span></div>
							<div id="wb_Image170" style="position:absolute;left:2px;top:61px;width:205px;height:205px;z-index:2213;">
								<img src="<?php echo asset_url(); ?>images/porcube.png" id="Image170" alt=""></div>
							<div id="wb_Text224" style="position:absolute;top:16px;width:205px;height:16px;text-align:center;z-index:2214;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">FEATURED </span></div>
							</div>
						</div>
					</div>
				</div>

				<div id="">
                	<div id="wb_Carousel7" style="position:absolute;left:0px;top:119.2%;width:206px;height:595px;z-index:23121;overflow:hidden;">
	                    <div id="Carousel7" style="position:absolute">

							<?php $i = 0; 
							foreach ($featuredProductVideo as $featuredVideo) {
								if($i%2 == 0){ $frame = $i; ?>
									<div class="frame">	
								<?php } $i++; ?>
								
										<div id="<?= ($i%2 == 0) ? 'Layer214' : 'Layer200' ?>" style="position:absolute;text-align:left;left:2px;width:202px;height:269px;<?= ($i%2 == 0) ? 'z-index:2229;top:6px;' : 'top:285px;z-index:2230;'; ?>">
											<div id="<?= ($i%2 == 0) ? 'wb_Text225' : 'wb_Text205' ?>" style="position:absolute;top:13px;width:200px;height:16px;text-align:center;z-index:2216;">
												<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><a href="#" class="style5" onclick=";return false;"><?php echo $featuredVideo['name'];?></a></strong></span>
											</div>
											<div id="wb_Text226" style="position:absolute;top:31px;width:200px;height:16px;text-align:center;z-index:2217;">
												<span style="color:#787878;font-family:Arial;font-size:12px;"><?php echo substr($featuredVideo['description'], '0', '50');?></span>
											</div>

											<div id="wb_MediaPlayer15" style="position:absolute;left:0px;top:81px;width:202px;height:118px;z-index:2218;">
												<video src="<?php echo asset_url().''.$featuredVideo['vedio_file']; ?>" id="MediaPlayer15">
												</video>
											</div>  
											<div id="Layer215" style="position:absolute;text-align:left;visibility:hidden;left:0px;top:173px;width:202px;height:39px;z-index:2219;">
												<div id="wb_Image171" style="position:absolute;left:89px;top:2px;width:35px;height:35px;z-index:2215;">
													<a href="#" onclick="ShowObjectWithEffect('Layer_Details', 1, 'scale', 500, 'swing');return false;"><img
														src="images/view2.png" id="Image171" alt=""></a></div>
												</div> 

												<div id="wb_Text213" style="position:absolute;top:220px;width:202px;height:16px;text-align:center;z-index:2220;">
													<span style="color:#1E90FF;font-family:Arial;font-size:16px;"><strong>$ <?php echo $featuredVideo['unit_price'];?>  / Pack</strong></span>
												</div> 

												<div id="wb_Text214" style="position:absolute;top:241px;width:202px;height:16px;text-align:center;z-index:2221;">
													<span style="color:#787878;font-family:Arial;font-size:12px;"><strong>Min. Qty. <?php echo $featuredVideo['quantity'].' '.$featuredVideo['unit'];?></strong></span>
												</div>
											</div>
										<!-- </div> -->
								<?php if($frame+2 == $i){ ?>
									</div>
								<?php } 
							} ?>
						</div>
						<div id="Carousel7_back" style="position:absolute;left:15px;top:95%;width:35px;height:13px;z-index:999"><a style="cursor:pointer">
							<img alt="Back" style="border-width:0" src="images/previoustxt0.png"></a>
						</div>
						<div id="Carousel7_next" style="position:absolute;right:15px;top:95%;width:35px;height:13px;z-index:999"><a style="cursor:pointer">
							<img alt="Next" style="border-width:0" src="images/nexttxt0.png"></a>
						</div>
                   </div>
               </div>
				
			   

			</div>
		</div>
	</div>

			
<script>
$(document).ready(function() {
    $(".SlideShow1").slideshow({
        interval: 5000,
        type: 'sequence',
        effect: 'none',
        direction: '',
        pagination: false,
        effectlength: 3000
    });
    $("#Layer32").stickylayer({
        orientation: 9,
        position: [0, 0],
        delay: 300
    });
    $("#Layer35").stickylayer({
        orientation: 9,
        position: [0, 0],
        delay: 300
    });
    $("#Layer145").stickylayer({
        orientation: 9,
        position: [0, 0],
        delay: 300
    });
    var Carousel3Opts = {
        delay: 4000,
        duration: 500,
        easing: 'easeInOutBounce',
        mode: 'fade',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel3").carouseleffects(Carousel3Opts);
    $("#Carousel3_back a").click(function() {
        $('#Carousel3').carouseleffects('prev');
    });
    $("#Carousel3_next a").click(function() {
        $('#Carousel3').carouseleffects('next');
    });
    var Carousel2Opts = {
        delay: 4000,
        duration: 500,
        easing: 'easeInOutBounce',
        mode: 'fade',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel2").carouseleffects(Carousel2Opts);
    $("#Carousel2_back a").click(function() {
        $('#Carousel2').carouseleffects('prev');
    });
    $("#Carousel2_next a").click(function() {
        $('#Carousel2').carouseleffects('next');
    });
    $("#Layer185").stickylayer({
        orientation: 9,
        position: [0, 0],
        delay: 300
    });
    //searchParseURL();
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
    var jQueryToolTip2Opts = {
        hide: true,
        show: true,
        content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Buyer has a current request,<br>Visit his Desksite to view and deal.</span>',
        items: '#wb_Image2',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image2").tooltip(jQueryToolTip2Opts);
    var jQueryToolTip3Opts = {
        hide: true,
        show: true,
        content: '<span style="color:#696969;font-family:Arial;font-size:12px;">This buyer is an active..</span>',
        items: '#wb_Image1',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image1").tooltip(jQueryToolTip3Opts);
    var jQueryToolTip1Opts = {
        hide: true,
        show: true,
        content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Buyer is a member <br>in your community</span>',
        items: '#wb_Image10',
        position: {
            my: "right bottom",
            at: "left top",
            collision: "flipfit"
        }
    };
    $("#wb_Image10").tooltip(jQueryToolTip1Opts);
    $("#Layer_buyer").stickylayer({
        orientation: 9,
        position: [0, 0],
        delay: 0,
        keepOriginalPos: true
    });
});
function openVideo(id) {
	$.get(base_url+"seller/video/view/"+id,{},function(data) {
		$("#Layer_details_Container").html(data);
		ShowObjectWithEffect('Layer_details', 1, 'scale', 500, 'swing');
	},'html');
}
function showCommunityFirst(id) {
	$.get(base_url+"shipper/show/community/"+id,{},function(data) {
		$(".shippers-list").html(data);
	},'html');
}
function hideCommunity(id) {
	$.get(base_url+"shipper/hide/community/"+id,{},function(data) {
		$(".shippers-list").html(data);
	},'html');
}
function shippingLine(id) {
	$.get(base_url+"shipper/shippingLine"+id,{},function(data) {
		$(".shippers-list").html(data);
	},'html');
}

function changeCountry(a){
	var country = $(a).val();
	$.post(base_url+"seller/city",{country: country, busi_type: 2 },function(data) {
		$('#city').html(data);
	},'html');
	
}
function openShipper(id) {
		$.get(base_url+"shipper/popup/"+id,{},function(data) {
			$("#Layer_details_Container4").html(data);
			ShowObjectWithEffect('Layer_sellers', 1, 'scale', 500, 'swing');
		},'html');
	}
	function filter_by_subcat(cat_id, cat_sub_id,main_prod) {
        $("#filter_cat").val(cat_id);
        $("#filter_sub_cat").val(cat_sub_id);
        $("#main_prod").val(main_prod);
        $("#filter_by_category").submit();
    }
</script>