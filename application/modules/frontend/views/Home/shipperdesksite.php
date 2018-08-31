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

.dropdownsection {
	background-image: url(assets/images/menu_arrowwhite.png);
    background-repeat: no-repeat;
    background-position: right center;
}
a.style5
{
   color: #1E90FF;
   text-decoration: none;
}
a.style5:visited
{
   color: #1E90FF;
   text-decoration: none;
}
a.style5:active
{
   color: #1E90FF;
   text-decoration: none;
}
a.style5:hover
{
   color: #FF6347;
   text-decoration: underline;
}
.sfont1 {
	margin-top:0px;
}
#Button15 {
    border: 0px #A9A9A9 solid;
    background-color: #1E90FF;
    color: #FFFFFF;
    font-family: Arial;
    font-weight: normal;
    font-size: 13px;
}

</style>
<div>   
   	<div class="col-sm-12" style="padding:0px;padding-top: 40px;">
   		 <h1 class="sfont1">DESKSITES</h1>
   		 <p class="sfont2">Experience a new vision of websites techniques with quick access, rich information and much more..</p>
   		 <br>
    </div>
    <div class="row" style="margin:0px;">
	    <div class="col-lg-10 section11 seller-list">
			<?php if(isset($params['main_prod']) && $params['main_prod']!=''){ ?>
				<div class="row sub_products" style="border: 1px solid rgb(211, 211, 211);background-color: rgb(255, 255, 255);max-height: 176px;height: 95px;margin: 0px 0px 20px;">
					<div class="col-md-12">
						<div class="col-md-1 text-center" style="position: absolute; top: 25%; vertical-align: middle;">
							<img src="<?php echo asset_url(); ?>images/blank_folder.png" width="40">
							<span class="text-center"><?php echo ucwords($params['main_prod']);?></span>
						</div>
						<div class="col-md-11" style="padding-bottom:10px;padding-left:80px;">
							<div class="col-md-12" style="margin-top:7px;margin-bottom:10px">
								<span style="padding-left: 54px; font-size:13px">Categories/ <?php echo $productMainCat->cat_name;?> / <?php echo $productMainCat->sub_cat;?> / <span style="color:#1e90ff;"><?php echo ucwords($params['main_prod']);?></span></span>
							
							</div>
							<div style="padding-left:0;padding-right:0;" class="col-md-12">
								<?php if(!empty($subproducts)){ 
									foreach($subproducts as $res){ ?>
										<div class="col-md-3">
											<ul style="list-style:none;margin-bottom: -5px;">
												<li>
													<a class="btn btn-link main_prod" style="color:#808080;text-decoration:none;" href="javascript:void(0);" onclick="filter_by_subprod('<?php echo $params['main_cat_id'];?>','<?php echo $params['cat_id'];?>','<?php echo $params['main_prod'];?>','<?php echo $res['name'];?>')"><?php echo $res['name']; ?></a>
												</li>
											</ul>    
										</div>
										
									<?php }
								
								} ?>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
			<?php
			if(count($Sellers) > 0 && $Sellers[0]['id'] !='') { 
    		foreach ($Sellers as $key=>$seller) {?>
    		<div id="Layer4" style="height:363px;margin-bottom:20px;background-color:#fff;">
    			<div style="position:absolute;text-align:left;left:0px;width:1034px;height:361px;z-index:390;">
					<div id="wb_Shape1" style="position:absolute;left:0px;top:0px;width:587px;height:361px;z-index:349;">
						<?php if(!empty($seller['desksite_bg1'])) { ?>
						<img src="<?php echo asset_url();?><?php echo $seller['desksite_bg1'];?>" id="Shape1" alt="" style="width:587px;height:361px;">
						<?php } else { ?>
						<img src="<?php echo asset_url(); ?>images/member-desksite.jpg" id="Shape1" alt="" style="width:587px;height:361px;">
						<?php } ?>
					</div>
					<div id="wb_Text3" style="position:absolute;left:679px;top:46px;width:210px;height:15px;z-index:350;text-align:left;">
						<span style="color:#4B4B4B;font-family:Arial;font-size:12px;">Presented By: <?php if(!empty($seller['contact_name'])){ echo $seller['contact_prefix'].' '.$seller['contact_name']; } else { echo $seller['name_prefix'].' '.$seller['name'];} ?></span>
					</div>
					<div id="wb_Image5" style="position:absolute;left:625px;top:20px;width:45px;height:45px;z-index:351;">
						<?php if(!empty($seller['profile_image'])) { ?>
						 <img src="<?php echo asset_url().$seller['profile_image']; ?>" class="img1"/>
						 <?php } else { ?>
						 <img src="<?php echo asset_url(); ?>images/img3450.png" class="img1"/>
						 <?php } ?>
					</div>
					<div id="wb_Text8" style="position:absolute;left:678px;top:24px;width:345px;height:18px;z-index:352;text-align:left;">
						<span style="color:#303030;font-family:Georgia;font-size:15px;"><strong class="font1"><a href="<?php echo base_url();?>desksite/<?php echo $seller['busi_id'];?>" target="_blank" class="style5"><?php echo $seller['company_name']?></a></strong></span>
					</div>
					<?php if(!empty($seller['desksite_bg2'])) { ?>
					<div id="wb_Shape4" style="position:absolute;left:629px;top:205px;width:66px;height:62px;z-index:353;">
						<a href="#" onclick="ShowObjectWithEffect('Layer6-<?php echo $key;?>', 1, 'fade', 500, 'swing');return false;" onmouseenter="SetImage('Shape7-<?php echo $key;?>','<?php echo asset_url();?><?php echo $seller['desksite_bg2'];?>');return false;" onmouseleave="ShowObjectWithEffect('Layer6-<?php echo $key;?>', 0, 'fade', 500, 'swing');return false;">
							<img src="<?php echo asset_url();?><?php echo $seller['desksite_bg2'];?>" id="Shape4" alt="" style="width:66px;height:62px;">
						</a>
					</div>
					<?php } ?>
					<?php if(!empty($seller['company_info_img1'])) { ?>
					<div id="wb_Shape23" style="position:absolute;left:705px;top:205px;width:66px;height:62px;z-index:354;">
						<a href="#" onclick="ShowObjectWithEffect('Layer6-<?php echo $key;?>', 1, 'fade', 500, 'swing');return false;" onmouseenter="SetImage('Shape7-<?php echo $key;?>','<?php echo asset_url();?><?php echo $seller['company_info_img1'];?>');return false;" onmouseleave="ShowObjectWithEffect('Layer6-<?php echo $key;?>', 0, 'fade', 500, 'swing');return false;">
							<img src="<?php echo asset_url();?><?php echo $seller['company_info_img1'];?>" id="Shape23" alt="" style="width:66px;height:62px;">
						</a>
					</div>
					<?php } ?>
					<?php if(!empty($seller['company_info_img2'])) { ?>
					<div id="wb_Shape5" style="position:absolute;left:855px;top:205px;width:66px;height:62px;z-index:355;">
						<a href="#" onclick="ShowObjectWithEffect('Layer6-<?php echo $key;?>', 1, 'fade', 500, 'swing');return false;" onmouseenter="SetImage('Shape7-<?php echo $key;?>','<?php echo asset_url();?><?php echo $seller['company_info_img2'];?>');return false;" onmouseleave="ShowObjectWithEffect('Layer6-<?php echo $key;?>', 0, 'fade', 500, 'swing');return false;">
							<img src="<?php echo asset_url();?><?php echo $seller['company_info_img2'];?>" id="Shape5" alt="" style="width:66px;height:62px;">
						</a>
					</div>
					<?php } ?>
					<?php if(!empty($seller['company_info_img3'])) { ?>
					<div id="wb_Shape6" style="position:absolute;left:780px;top:205px;width:66px;height:62px;z-index:356;">
						<a href="#" onclick="ShowObjectWithEffect('Layer6-<?php echo $key;?>', 1, 'fade', 500, 'swing');return false;" onmouseenter="SetImage('Shape7-<?php echo $key;?>','<?php echo asset_url();?><?php echo $seller['company_info_img3'];?>');return false;" onmouseleave="ShowObjectWithEffect('Layer6-<?php echo $key;?>', 0, 'fade', 500, 'swing');return false;">
							<img src="<?php echo asset_url();?><?php echo $seller['company_info_img3'];?>" id="Shape6" alt="" style="width:66px;height:62px;">
						</a>
					</div>
					<?php } ?>
					<?php if(!empty($seller['company_info_img4'])) { ?>
					<div id="wb_Shape19" style="position:absolute;left:931px;top:205px;width:66px;height:62px;z-index:357;">
						<a href="#" onclick="ShowObjectWithEffect('Layer6-<?php echo $key;?>', 1, 'fade', 500, 'swing');return false;" onmouseenter="SetImage('Shape7-<?php echo $key;?>','<?php echo asset_url();?><?php echo $seller['company_info_img4'];?>');return false;" onmouseleave="ShowObjectWithEffect('Layer6-<?php echo $key;?>', 0, 'fade', 500, 'swing');return false;">
							<img src="<?php echo asset_url();?><?php echo $seller['company_info_img4'];?>" id="Shape19" alt="" style="width:66px;height:62px;">
						</a>
					</div>
					<?php } ?>
					<div id="Layer6-<?php echo $key;?>" style="position: absolute; text-align: left; visibility: visible; left: 0px; top: 0px; width: 592px; height: 361px; z-index: 358; display: none;background-color: #FFFFFF;">
						<div id="wb_Shape7" style="position:absolute;left:92px;top:0px;width:401px;height:360px;z-index:344;">
							<?php if(!empty($seller['desksite_bg1'])) { ?>
							<img src="<?php echo asset_url();?><?php echo $seller['desksite_bg1'];?>" id="Shape7-<?php echo $key;?>" alt="" style="height:360px;">
							<?php } else { ?>
							<img src="<?php echo asset_url(); ?>images/member-desksite.jpg" id="Shape7-<?php echo $key;?>" alt="" style="width:401px;height:360px;">
							<?php } ?>
						</div>
					</div>
					<div id="Layer7-<?php echo $key;?>" style="position:absolute;text-align:left;left:1px;top:1px;width:585px;height:360px;z-index:359;visibility:visible;background-color: transparent;" onmouseenter="ShowObjectWithEffect('Layer5-<?php echo $key;?>', 1, 'fade', 350, 'swing');return false;" onmouseleave="ShowObjectWithEffect('Layer5-<?php echo $key;?>', 0, 'fade', 500, 'swing');return false;">
						<div id="Layer5-<?php echo $key;?>" style="position: absolute; text-align: left; visibility: hidden; left: 238px; top: 131px; width: 114px; height: 95px; z-index: 347; display: block;">
							<div id="RollOver30" style="position:absolute;left:27px;top:0px;overflow:hidden;width:60px;height:60px;z-index:345">
								<a href="<?php echo base_url();?>shipper/profile/<?php echo $seller['busi_id'];?>" target="_blank">
									<img class="hover" alt="" src="<?php echo asset_url();?>images/newicons/view-detailsc.png">
									<span><img alt="" src="<?php echo asset_url();?>images/newicons/view-detailsb.png"></span>
								</a>
							</div>
							<div id="wb_Text430" style="position:absolute;left:0px;top:68px;width:114px;height:16px;text-align:center;z-index:346;">
								<span style="background-color:#FFFFFF;color:#3C3C3C;font-family:Arial;font-size:13px;">DISCOVER</span>
							</div>
						</div>
					</div>
					<div id="wb_Text10" style="position:absolute;left:631px;top:145px;width:374px;height:30px;z-index:360;text-align:left;">
						<span style="color:#4B4B4B;font-family:Arial;font-size:12px;"><?php echo substr($seller['main_product'], '0', '150')?> <?php if(strlen($seller['main_product']) > 150) { ?>...<?php } ?></span>
					</div>
					<div id="wb_Text9" style="position:absolute;left:631px;top:122px;width:130px;height:15px;z-index:361;text-align:left;">
						<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong>Main Services | </strong></span>
					</div>
					<div id="" style="position:absolute;left: 677px;top: 68px;width:120px;height:15px;z-index:362;text-align:left;">
						<span style="color:#808080;font-family:Georgia;font-size:12px;"><?php echo $seller['sub_category'];?></span>
					</div>
					<div id="wb_Text431" style="position:absolute;left: 756px;top:68px;width:130px;height:15px;z-index:363;text-align: right;">
						<span style="color:#FF6347;font-family:Georgia;font-size:12px;"><strong><?php echo $seller['company_country'];?> </strong></span><span style="color:#303030;font-family:Georgia;font-size:12px;"><strong>| </strong></span>
					</div>
					<div id="wb_Text6" style="position:absolute;left: 888px;top:68px;width: 150px;height:15px;z-index:364;text-align:left;">
						<span style="color:#808080;font-family:Georgia;font-size:12px;"><?php echo $seller['company_city'];?></span>
					</div>
					<div id="wb_Text13" style="position:absolute;left:971px;top:30px;width:36px;height:14px;z-index:365;text-align:left;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:11px;"><?php echo $seller['likes'];?></span>
					</div>
					<div id="wb_Image14" style="position:absolute;left:947px;top:24px;width:25px;height:25px;z-index:366;">
						<img src="<?php echo asset_url();?>images/items_like0.png" id="Image14" alt="" style="width:25px;">
					</div>
					<div style="position:absolute;left: 705px;top: 275px;width: 200px;height:25px;z-index:367;text-align:center;">
						<div id="wb_Text7" class="style-2">
						    <div id="wb_Image10" class="img-style">
						        <?php if(!empty($tsuserid) && $seller['community_id'] !='' && $seller['plan_id'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" > 
						        <?php }else {?>
						        <img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" style="opacity :0.15">
						        <?php } ?>
					        </div>
						    <div id="wb_Image1" class="img-style">
						        <?php if($seller['plan_id'] > 1 && $seller['is_logo_verified'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" > <?php } else { ?>
						        <img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" style="opacity :0.15" >
						        <?php }?>
					        </div>
					        <div id="wb_Image1" class="img-style">
								<?php if($seller['plan_id'] > '1' && $seller['plan_id'] > '1'){?><img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1"><?php } else {?>
								<img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1" style="opacity :0.15">
								<?php }?>
					        </div>
						</div>
					</div>
				</div>
			</div>
			<?php }}  else {?>
			      <div class="col-lg-10 section11"  id="Layer6" onmouseenter="ShowObjectWithEffect('Layer8', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer5', 0);ShowObject('Layer8', 0);return false;" >
			     	<h4 class="center"> No Seller Found!</h4>
			     </div>
		     <?php } ?>
		     <?php if($total_pages > 1) { ?>
		     	<div class="row" style="margin:0px;">
					<div id="wb_Text396" style="text-align:center;height:31px;padding:7px;padding-right:0px;background-color: #1E90FF;" class="col-sm-1">
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
							<form name="searchPageForm" id="searchPageForm" method="GET" action="<?php echo $wpsellerurl;?>" style="display:inline-block;">
								<select type="text" id="pageinputselect" style="border-radius:0px;width:40px;height:17px;line-height:17px;border: 1px #A9A9A9 solid;background-color: #00BFFF;padding-left:10px;" name="page">
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
				<div id="Layer3" class="box8">
					<div id="wb_Text328" class="innersection" style="background-color:#fff;">
						<span class="text2"><strong><a href="<?php echo base_url();?>vcatalogues" target="_blank" class="style5">V-CATALOGUES</a></strong></span>
						<p class="text3">Follow the latest collection of world sellers brands..</p>
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
           			  <div class="maxheight1 bg2">
		                	<div class="row" style="margin: 0px">
			                    <h3 style="color: #fff; text-align: center;">
			                    	<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">FEATURED</span><br>
			                    	<span style="color:#FFFFFF;font-family:Impact;font-size:20px;letter-spacing:0.07px;">PRODUCTS VIDEOS</span>
								</h3>
			                    <div class="text-center displaydesktop">
			                        <img src="<?php echo asset_url(); ?>images/porcube.png" class="img-responsive">
			                    </div>
			                </div>
			            </div>
			            <div id="">
			                <div id="wb_Carousel2" class="style4">
			                    <div id="Carousel2" style="position:absolute">
			                    <?php $i =0;
			                    foreach ($featuredProductVideo as $featuredVideo) {
			                    $i++;
			                    	?>
			                        <div class="frame" class="style5" <?php if(($i ==1) || ($i ==2)){ echo ""; } else{ echo 'style="z-index: 0; position: absolute; top: 0px; left: 0px; display: none;"'; } ?>>
			                            <div id="Layer39" class="fs11" onmouseenter="ShowObjectWithEffect('holder', 1, 'dropup', 300, 'swing');return false;" onmouseleave="ShowObjectWithEffect('holder', 0, 'fade', 500, 'swing');return false;">
			                                <div id="wb_Text78" class="fs1">
			                                    <span><strong><?php echo $featuredVideo['name'];?></strong></span></div>
			                                <div id="wb_Text77" class="fs2">
			                                    <span class="fs3"><?php echo substr($featuredVideo['description'], '0', '30');?> ...</span></div>
			                                <div id="wb_Text79" class="fs6">
			                                    <span class="fs4"><strong><?php echo $featuredVideo['unit_price'];?> / Set</strong></span></div>
			                                <div id="wb_Text80" class="fs7">
			                                    <span class="fs5"><strong>Min. Qty. <?php echo $featuredVideo['quantity'].' '.$featuredVideo['unit'];?></strong></span></div>
			                                <div id="wb_MediaPlayer1" class="fs9">
			                                    <video src="<?php echo asset_url().''.$featuredVideo['vedio_file']; ?>" controls="controls">
			                                    </video>
			                                </div>
			                                <div id="Layer29" class="fs13">
			                                </div>
			                                <div id="holder" class="fs14">
			                                    <div id="wb_Image33" class="fs15">
			                                        <a href="javascript:openVideo(<?php echo $featuredVideo['id'];?>)"><img src="<?php echo asset_url(); ?>images/play.png" id="Image33" alt="" width="35px" height="35px"></a>
			                                    </div>
			                                    <div id="wb_Image34" class="fs16">
			                                        <a href="./video_details.php" target="_blank"><img src="<?php echo asset_url(); ?>images/view2.png" id="Image34" alt="" width="35px" height="35px"></a>
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
	</div>
	<div id="Layer_details" class="class1">
        <div id="Layer_details_Container" class="class2">
        </div>
    </div>
    <div id="Layer_details2" class="class1">
        <div id="Layer_details_Container2" class="class2">
        </div>
    </div>
<script>

$(document).ready(function() {
	var sub_prod=$(".sub_products").height();
	if(sub_prod > 175){ 
		$(".sub_products").css('overflow-y','scroll');
	}else{
		$(".sub_products").css('overflow-y','hidden');
	}
    $(".mysellercarousel").slideshow({
        interval: 3000,
        type: 'sequence',
        effect: 'none',
        direction: '',
        pagination: false,
        effectlength: 1000
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
    var Carousel1Opts = {
        delay: 5000,
        duration: 2000,
        easing: 'easeInOutBounce',
        mode: 'fade',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel1").carouseleffects(Carousel1Opts);
    $("#Carousel1_back a").click(function() {
        $('#Carousel1').carouseleffects('prev');
    });
    $("#Carousel1_next a").click(function() {
        $('#Carousel1').carouseleffects('next');
    });
    $("#Carousel11").carouseleffects(Carousel1Opts);
    $("#Carousel11_back a").click(function() {
        $('#Carousel11').carouseleffects('prev');
    });
    $("#Carousel11_next a").click(function() {
        $('#Carousel11').carouseleffects('next');
    });
    $("#Layer_details").stickylayer({
        orientation: 9,
        position: [0, 0],
        delay: 300
    });
    $("#Layer_details3").stickylayer({
        orientation: 9,
        position: [0, 0],
        delay: 300
    });
    $("#Layer_details2").stickylayer({
        orientation: 9,
        position: [0, 0],
        delay: 300
    });
    var Carousel4Opts = {
        delay: 4000,
        duration: 500,
        easing: 'easeInOutBounce',
        mode: 'fade',
        direction: '',
        pagination: false,
        start: 0
    };
    $("#Carousel4").carouseleffects(Carousel4Opts);
    $("#Carousel4_back a").click(function() {
        $('#Carousel4').carouseleffects('prev');
    });
    $("#Carousel4_next a").click(function() {
        $('#Carousel4').carouseleffects('next');
    });
});
function openVideo(id) {
	$.get(base_url+"seller/video/view/"+id,{},function(data) {
		$("#Layer_details_Container").html(data);
		ShowObjectWithEffect('Layer_details', 1, 'scale', 500, 'swing');
	},'html');
}
function openProduct(id) {
	//alert('hello');
	$.get(base_url+"seller/product/view/"+id,{},function(data) {
		$("#Layer_details_Container2").html(data);
		ShowObjectWithEffect('Layer_details2', 1, 'scale', 500, 'swing');
	},'html');
}
function showBlackHorseMember() {
	$.get(base_url+"seller/blackhorse/memberlist",{},function(data) {
		$(".seller-list").html(data);
	},'html');
}

function showCommunityMember(id) {
	$.get(base_url+"seller/community/memberlist/"+id,{},function(data) {
		$(".seller-list").html(data);
	},'html');
}

function hideCommunityMember(id) {
	$.get(base_url+"seller/hidecommunity/memberlist/"+id,{},function(data) {
		$(".seller-list").html(data);
	},'html');
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