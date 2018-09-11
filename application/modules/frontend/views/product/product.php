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
a.main_prod:hover{
	color: #FF6347 !important;
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
#Button15 {
    border: 0px #A9A9A9 solid;
    background-color: #FF8C00;
    color: #FFFFFF;
    font-family: Arial;
    font-weight: normal;
    font-size: 13px;
}

</style>
<div>
    <div class="col-sm-12" style="padding:0px;padding-top:40px;">
   		 <h1 class="sfont1">Products</h1>
   		 <p class="sfont2">Sourcing with more details is available by selecting additional options from the More Options Menu on the right side..</p>
   		 <br>
    </div>
    <div class="row" style="margin:0px;">
		<div class="col-lg-10 section11 products-list"  id="Layer6"  >
		<?php if(isset($params['main_prod']) && $params['main_prod']!=''){ ?>
				<div class="row sub_products" style="border: 1px solid rgb(211, 211, 211);background-color: rgb(255, 255, 255);height: 158px;margin:0 0 20px;">
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
	    
		<?php  if(count($products) > 0 && $products[0]['id'] !='') { 
    	      foreach ($products as $key=>$product) { ?>
			<div class="row" id="Layer4" style="margin:0px;margin-bottom:15px;" onmouseenter="ShowObjectWithEffect('Layer8_<?php echo $key;?>', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer5_<?php echo $key;?>', 0);ShowObject('Layer8_<?php echo $key;?>', 0);return false;">
				<div class="col-md-3 col-sm-12 displaydesktop" style="width:210px;">
					<div id="SlideShow1" class="img22 SlideShow1" >
					    <img class="image" src="<?php echo asset_url().$product['main_image'];?>" alt="" title="">
					    <img class="image" src="<?php echo asset_url().$product['sub_image2'];?>" style="display:none;" alt="" title="">
					</div>
				</div>
				<div class="col-md-6 col-sm-12 space1" style="padding-left: 20px;width:518px;">
					 <div id="wb_Text8" class="section3">
						 <div class="inline padtop">
						    <span class="spanname"><strong><a href="<?php echo base_url()?>products/details/<?php echo $product['id']; ?>" target="_blank" class="style5"><?php echo $product['name']; ?></a></strong></span>
				   		 </div>
			   		  </div>
			   		  <div class="padtop">
						<span class="spandesc"><?php  echo substr($product['description'], '0', '240'); ?><?php if(strlen($product['description']) > 240) { ?> ...<?php } ?></span>
					  </div>
			   		  <div class="padtop">
                        <span class="spanprice">USD :<?php echo $product['unit_price']; ?></span>
                      </div>
                      <div class="padtop">
                        <span class="spanunit">Min. Order : <?php echo $product['quantity'].' '. $product['unit']; ?> </span>
                      </div>
                   		<div id="Layer5_<?php echo $key;?>" class="section10 row seller_Layer5">
							<div class="col-md-2" style="width:20%;padding: 5px;">
							 	<div id="RollOver5" class="box1">
							        <a href="<?php echo base_url();?>products/details/<?php echo $product['id']; ?>" target="_blank">
							            <img class="hover" alt="" src="<?php echo asset_url() ?>images/viewroll.png">
							            <span><img alt="" src="<?php echo asset_url() ?>images/view.png"></span>
							        </a>
							        <div id="wb_Text13"class="beauty1">
							        <p class="textfont1">VIEW DETAILS</p>
							        <p class="textfont2">To View More Details About This<br> Product, Such Aa Size, Material and much more..</p>
							        </div>
							    </div>
							</div>
							<div class="col-md-2" style="width:20%;padding: 5px;">
							 	<div id="RollOver21"  class="box2" >
							        <a href="javascript:showRelatedImages(<?php echo $product['id']; ?>,'<?php echo $key;?>');">
							            <img alt="" src="<?php echo asset_url() ?>images/galleryblack.png">
							        </a>
							      	<div id="wb_Text13"class="beauty1">
								        <p class="textfont1">GALLERY</p>
								        <p class="textfont2">To View The Product Gallery<br> From The Same Seller.. </p>
							        </div>
							   	</div>
							</div>
							<div class="col-md-2" style="width:20%;padding: 5px;">
							 	<div id="RollOver22" class="box3">
							        <a href="javascript:addToMyFavourite(<?php echo $product['id'];?>,4);" target="_self">
							            <img class="hover" alt="" src="<?php echo asset_url() ?>images/faforiteroll.png">
							            <span><img alt="" src="<?php echo asset_url() ?>images/addtofavblack.png"></span>
							        </a>
							        <div id="wb_Text13"class="beauty1">
								        <p class="textfont1">ADD TO FAVORITE</p>
								        <p class="textfont2">To Save Product in Your <br>Favorite Box,To Find It Later<br> On..</p>
							        </div>
							    </div>
							</div>
							<div class="col-md-2" style="width:20%;padding: 5px;">
							 	<div id="RollOver22" class="box3">
							        <a href="javascript:addToItemToCart(<?php echo $product['id'];?>);" target="_self">
							            <img class="hover" alt="" src="<?php echo asset_url() ?>images/addtocartroll.png">
							            <span><img alt="" src="<?php echo asset_url() ?>images/aert.png"></span>
							        </a>
							        <div id="wb_Text13"class="beauty1">
								        <p class="textfont1">ADD CART</p>
								        <p class="textfont2">To Add This Product To Your<br> Cart, And Arrange Your<br> Orders ..</p>
							        </div>
							    </div>
							</div>
							<div class="col-md-2" style="width:20%;padding: 5px;">
							  	<div id="RollOver6" class="box4" onclick="chat_with(<?php echo $product['user_id'];?>,<?php echo $product['accept_chat']; ?>);">
							        <a>
							            <img class="hover" alt="" src="<?php echo asset_url() ?>images/chatorange.png">
							            <span><img alt="" src="<?php echo asset_url() ?>images/chaTBLACK.png"></span>
							        </a>
							        <div id="wb_Text13"class="beauty1">
							        <p class="textfont1">CHAT </p>
							        <p class="textfont2">To Chat With Seller, <br>About This Products .. </p>
							        </div>
							    </div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-12" style="float: right;">
						<div id="Layer8_<?php echo $key;?>" class="section9 seller_Layer8" onclick="ShowObjectWithEffect('Layer5_<?php echo $key;?>', 1, 'slideright', 500, 'swing');return false;">
						    <div id="wb_Shape1" class="stylebox">
						        <a href="#" onclick="ShowObjectWithEffect('Layer5_<?php echo $key;?>', 1, 'slideright', 500, 'swing');$('.carousel').carousel();return false;"><img src="<?php echo asset_url() ?>images/img0013.png" id="Shape1" alt="" style="width:11px;height:48px;"></a>
						    </div>
						</div>
						<div id="Layer7" class="section8" style="width:300px;">
							<div id="wb_Text8" class="margintop" style="padding-left: 15px;">
							     <div style="float:left;width:55px;">
									<img src="<?php echo asset_url();?><?php echo $product['profile_image'];?>" class="img1" alt="" style="width:45px;height:45px;">
								</div>
								<div class="float:left;padding-top: 5px;">
									<span style="color:#303030;font-family:Georgia;font-size:12px;"><strong><a href="<?php echo base_url();?>desksite/<?php echo $product['busi_id'];?>" target="_blank" class="style5"><?php echo $product['company_name']; ?></a></strong></span><br>
									<span class="">Presented By : </span> <span><?php if(!empty($product['contact_name'])){ echo $product['contact_prefix'].' '.$product['contact_name']; } else { echo $product['name_prefix'].' '.$product['user_name'];} ?></span>
								</div>
								<div style="clear:both;"></div>
							</div>
                            <div class="text-center">
								<strong class="font-style-1">Seller | </strong><span class="font-style-2"> <?php echo $product['sub_category'];?></span>
							</div>
							<div>
								<div class="text-center">
									<strong class="font-style-1"> <?php echo $product['company_country'];?> | </strong><span class="font-style-2"><?php echo $product['company_city'];?></span>
								</div>
							</div>
						     <div id="wb_Text7" class="style-2" style="padding-top:10px;">
							     <div id="wb_Image10" class="img-style">
							        <?php if(!empty($tsuserid) && $product['community_id'] !='' && $product['plan_id'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" > 
							        <?php }else {?>
							        <img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" style="opacity :0.15">
							        <?php } ?>
						        </div>
							    <div id="wb_Image2" class="img-style">
							    	<?php if($product['plan_id'] > 1 && $product['gaurantee_period'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1" style="width:34px;height:26px;"> <?php } else {?>
							    	<img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1" style="opacity :0.15;width:34px;height:26px;" >
							    	<?php }?>
						        </div>
							    <div id="wb_Image1" class="img-style">
							        <?php if($product['plan_id'] > 1 && $product['is_logo_verified'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" > <?php } else { ?>
							        <img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" style="opacity :0.15" >
							        <?php }?>
						        </div>
						        <div id="wb_Image1" class="img-style">
									<?php if($product['plan_id'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1"><?php } else {?>
									<img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1" style="opacity :0.15">
									<?php }?>
						        </div>
							</div>
							<div class="text-center" style="padding-top:10px;">								
								<div class="left style-font-1" style="float:left;width:20%;">Rank</div>
								<div class="progress" style="float:left;margin:0px;margin-top: 5px;width:60%;">
								    <div class="progress-bar orange1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $product['rank']?>%">
								    </div>
								</div>
								<div class="font121" style="float:left;width:15%;"><strong>%<?php echo $product['rank']?></strong></div>
							</div>
						</div>
						
				</div>
				<div id="Layer19_<?php echo $key;?>" style="position: absolute; text-align: left; visibility: hidden; width:1039px; height: 176px; z-index:200;background-color: #EBECEE;border: 1px #D3D3D3 solid;">
					<div id="similar-images-<?php echo $key;?>">
					</div>
					<div id="wb_Image25" style="position:absolute;left:997px;top:0px;width:40px;height:40px;z-index:113;">
						<a href="#" onclick="ShowObjectWithEffect('Layer19_<?php echo $key;?>', 0, 'slideright', 500);return false;"><img src="<?php echo asset_url(); ?>images/closeround.png" id="Image25" alt=""></a>
					</div>
				</div>	
			</div>
	<?php }}  else {?>
	      <div class="col-lg-10 section11"  id="Layer6" onmouseenter="ShowObjectWithEffect('Layer8', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer5', 0);ShowObject('Layer8', 0);return false;" >
	     	<h4 class="center"> No Product Found!</h4>
	     </div>
     <?php }  ?>
     <?php if(isset($total_pages) && $total_pages > 1) { ?>
	     	<div class="row" style="margin:0px;">
				<div id="wb_Text396" style="text-align:center;height:31px;padding:7px;padding-right:0px;background-color:#FF8C00;" class="col-sm-1">
					<span style="color:#FFFFFF;font-family:Georgia;font-size:12px;">Page&nbsp;&nbsp; </span>
				</div>
				<div id="wb_Text393" style="height:31px;background-color: #FFFFFF;padding:0px" class="col-sm-11">
					<div style="text-align:left;padding-top:7px;" class="col-sm-2">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $params['page'];?> of <?php echo $total_pages;?>&nbsp;&nbsp; </span>
					</div>
					<div style="text-align:center;padding-top:7px;" class="col-sm-8">
						<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><a href="<?php if($total_pages >= ($params['page']+1)){ echo $wpproducturl."page=".($params['page']+1);}?>" class="style5">VIEW MORE</a></strong></span>
					</div>
					<div class="col-sm-2" style="padding:0px;padding-top:7px;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"> Page No</span>&nbsp;
						<form name="searchPageForm" id="searchPageForm" method="GET" action="<?php echo $wpproducturl;?>" style="display:inline-block;">
							<select type="text" id="pageinputselect" style="border-radius:0px;width:40px;height:17px;line-height:17px;border: 1px #A9A9A9 solid;background-color:#FAEBD7;padding-left:10px;" name="page">
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
						<!--  <a href="#" class="list-group-item" onclick="showBlackHorseMember();">Show Black Horse Memeber First </a> 
				   		<a href="#" class="list-group-item" onclick="showCommunityMember(1)">Show My Community Members Only </a> 
				   		<a href="#" class="list-group-item" onclick="hideCommunityMember(1)">Hide My Community Members</a> -->
				   		<?php						
								$plan_id = 2;
								$plan_text = "First";
								$parts = parse_url($_SERVER['REQUEST_URI']);
								if(!empty($parts['query'])){
									parse_str($parts['query'], $query);
									if(!empty($query['plan_id']) && $query['plan_id'] == 2){ 
										$plan_id = 1; 
										$plan_text = "Last";
									} else{ 
										$plan_id = 2;
										$plan_text = "First"; 
									}
								}
							?>	
				   		<a href="<?php echo $producturl;?>&plan_id=<?= $plan_id ?>" class="list-group-item" >Show Black Horse Memeber  <?= $plan_text ?> </a> 
				   		<?php if(!empty($tsuserid)){?>
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
				   			<a href="<?php echo $producturl;?><?=$community_only ?>" class="list-group-item">Show My Community Members Only </a> 
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

				   			<a href="<?php echo $producturl;?><?=$community_hide ?>" class="list-group-item">Hide My Community Members </a>
				   		<?php }?>
				   	</div>
				</div>
				
				<div id="Layer3" class="box8">
					<div id="wb_Text328" class="innersection">
						<span class="text2" style="padding: 10px 0px 0px 2px;"><strong><a href="<?php echo base_url();?>vcatalogues" target="_blank" class="style5">V-CATALOGUES</a></strong></span>
						<p class="text3" style="padding: 0px 2px;">Follow the latest collection of world sellers brands..</p>
						<span class="text2" style="padding: 10px 0px 0px 2px;"><strong><a href="<?php echo base_url();?>seller/desksites" target="_blank" class="style5">DESKSITES </a></strong></span>
						<p class="text3" style="padding: 0px 2px;">Experience a new vision of websites techniques with quick access, rich information and much more..</p>
						<span class="text2" style="padding: 10px 0px 0px 2px;"><strong><a href="<?php echo base_url();?>3dproducts" target="_blank" class="style5">PRODUCTS IN 3D </a></strong></span>
						<p class="text3" style="padding: 0px 2px;">Step into a new dimension of E-commerce, search products with rich information, live details and much more..</p>
				    </div>
			   </div>
			   <div class="sp">
					<div class="maxheight1 bg1" style="height: 875px;">
						<div class="row" style="margin: 0px">
							<div id="wb_Text275" style="margin-top: 20px;text-align:center;">
								<span style="color:#4B4B4B;font-family:Arial;font-size:13px;">FEATURED</span>
							</div>
							<div id="wb_Text274" style="text-align:center;">
								<span style="color:#4B4B4B;font-family:Impact;font-size:20px;letter-spacing:0.07px;">PRODUCTS</span>
							</div>
							<div id="wb_Image141" style="height:242px;">
								<img src="<?php echo asset_url(); ?>images/dice0.png" class="img-responsive">
							</div>
						</div>
					</div>
					
					<div id="Layer24">
						<div id="wb_Carousel5" style="position:absolute;left:1px;top:33%;width:206px;height:655px;z-index:16961;overflow:hidden;">
							<div id="Carousel5" style="position:absolute;width:206px;">
							<?php $i =0;
                        		foreach ( $featuredProducts as $key=>$featuredProduct) {
									if($i%2 == 0) { $frame = $i; ?>
                            		<div class="frame">
                            		<?php } $i++; ?>
									
										<div id="<?= ($i%2 == 0) ? 'Layer161' : 'Layer167' ?>" style="position:absolute;text-align:left;left:1px;width:202px;height:285px;<?= ($i%2 == 0) ? 'top:301px;z-index:1593;' : 'top:1px;z-index:1614;'; ?>">
                                			<div id="wb_Text117" style="position:absolute;top:15px;width:202px;height:16px;text-align:center;z-index:1577;">
												<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><?php echo substr($featuredProduct['name'],'0','22');?></strong></span>
											</div>
                                 			<div id="wb_Text118" style="position:absolute;top:34px;width:202px;height:16px;text-align:center;z-index:1578;">
												<span style="color:#787878;font-family:Arial;font-size:12px;"><?php echo substr($featuredProduct['description'], '0', '35');?>...</span>
											</div>

											<div id="wb_Text119" style="position:absolute;top:236px;width:202px;height:16px;text-align:center;z-index:1579;">
												<span style="color:#FF8C00;font-family:Arial;font-size:16px;"><strong>$ <?php echo $featuredProduct['unit_price'];?> / Pc</strong></span>
											</div>

											<div id="wb_Text120" style="position:absolute;top:257px;width:202px;height:16px;text-align:center;z-index:1580;">
												<span style="color:#787878;font-family:Arial;font-size:12px;"><strong>Min. Qty <?php echo $featuredProduct['quantity'].' '.$featuredProduct['unit'];?> </strong></span>
											</div>

											<div id="Layer162" style="position:absolute;text-align:left;visibility:hidden;left:0px;top:179px;width:212px;height:39px;z-index:1581;">
												<div id="wb_Image114" style="position:absolute;left:67px;top:2px;width:35px;height:35px;z-index:1575;">
													<a href="#" onclick="ShowObjectWithEffect('Layer_details2', 1, 'scale', 500, 'swing');return false;"><img src="images/window.png" id="Image114" alt=""></a>
												</div>
												<div id="wb_Image115" style="position:absolute;left:116px;top:2px;width:35px;height:35px;z-index:1576;">
													<a href="#" target="_blank"><img src="images/view.png" id="Image115" alt=""></a>
												</div>
											</div>
											
											<div id="wb_Image116" style="position:absolute;left:1px;top:59px;width:200px;height:161px;z-index:1583;">
												<a href="#" onclick=";return false;"><img src="<?php echo asset_url().''.$featuredProduct['main_image']; ?>" id="Image116" alt=""></a>
											</div>                                   
                                		</div>
                            		<?php if($frame+2 == $i){ ?>
                            		</div>
									<?php } 
								} ?>		
							</div>
							<div id="Carousel5_back" style="position:absolute;left:15px;top:91%;width:35px;height:13px;z-index:999">
                        		<a style="cursor:pointer"><img alt="Back" style="border-width:0" src="images/previoustxt0blk.png"></a>
                        	</div>
							<div id="Carousel5_next" style="position:absolute;right:15px;top:91%;width:35px;height:13px;z-index:999">
								<a style="cursor:pointer"><img alt="Next" style="border-width:0" src="images/nexttxt0blk.png"></a>
							</div>
						</div>
					</div>
		   		</div>
				
				<div class="maxheight1 bg2">
					<div class="row" style="margin: 0px">
						<div id="Layer212" style="position:absolute;text-align:left;width:209px;height:900px;">
					
							<div id="Layer213" style="position:absolute;text-align:left;left:0px;top:5%;width:209px;height:273px;z-index:23111;">
							<div id="wb_Text223" style="position:absolute;top:32px;width:209px;height:25px;text-align:center;z-index:2212;">
								<span style="color:#FFFFFF;font-family:Impact;font-size:20px;letter-spacing:0.07px;">PRODUCTS VIDEOS</span></div>
							<div id="wb_Image170" style="position:absolute;left:2px;top:61px;width:209px;height:209px;z-index:2213;">
								<img src="<?php echo asset_url(); ?>images/porcube.png" id="Image170" alt=""></div>
							<div id="wb_Text224" style="position:absolute;top:16px;width:209px;height:16px;text-align:center;z-index:2214;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">FEATURED </span></div>
							</div>
						</div>
					</div>
				</div>
				
				<div id="">
					<div id="wb_Carousel7" style="position:absolute;left:1px;top:81.5%;width:205px;height:595px;z-index:23121;overflow:hidden;">
						<div id="Carousel7" style="position:absolute">
						<?php $i =0;
							foreach ($featuredProductVideo as $featuredVideo) {
								if($i%2 == 0){ $frame = $i; ?>
								<div class="frame">
								<?php } $i++; ?>
									<div id="<?= ($i%2 == 0) ? 'Layer214' : 'Layer200' ?>" style="position:absolute;text-align:left;left:2px;width:202px;height:269px;<?= ($i%2 == 0) ? 'z-index:2229;top:3px;' : 'top:285px;z-index:2230;'; ?>">
										<div id="<?= ($i%2 == 0) ? 'wb_Text225' : 'wb_Text205' ?>" style="position:absolute;top:13px;width:202px;height:16px;text-align:center;z-index:2216;">
											<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><a href="#" class="style5" onclick=";return false;"><?php echo $featuredVideo['name'];?></a></strong></span>
										</div>

										<div id="wb_Text226" style="position:absolute;left:20px;top:31px;width:172px;height:16px;text-align:center;z-index:2217;">
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
								<?php if($frame+2 == $i){ ?>
								</div>
								<?php } 
							} ?>
						</div>
						<div id="Carousel7_back" style="position:absolute;left:15px;top:95%;width:35px;height:13px;z-index:999"><a style="cursor:pointer">
							  <img alt="Back" style="border-width:0" src="images/previoustxt0blk.png"></a>
						</div>
						<div id="Carousel7_next" style="position:absolute;right:15px;top:95%;width:35px;height:13px;z-index:999"><a style="cursor:pointer">
							<img alt="Next" style="border-width:0" src="images/nexttxt0blk.png"></a>
						</div>
					</div>
				</div>				

				<div class="maxheight1 bg1">
					<div class="row" style="margin: 0px">
						<div id="Layer212" style="position:absolute;text-align:left;width:209px;height:1850px;z-index:2513;">
						
							<div id="Layer213" style="position:absolute;text-align:left;left:0px;top:49%;width:209px;height:273px;z-index:2311;">
							<div id="wb_Text223" style="position:absolute;top:32px;width:209px;height:25px;text-align:center;z-index:2212;">
								<span style="color:#FFFFFF;font-family:Impact;font-size:20px;letter-spacing:0.07px;">WORLD</span></div>
							<div id="wb_Image170" style="position:absolute;left:2px;top:61px;width:209px;height:209px;z-index:2213;">
								<img src="<?php echo asset_url(); ?>images/ts/Fsellersok.png" id="Image170" alt=""></div>
							<div id="wb_Text224" style="position:absolute;top:16px;width:209px;height:16px;text-align:center;z-index:2214;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">SELLERS </span></div>
							</div>
						</div>
					</div>
				</div>

			    <div id="Layer2" class="style2">
					<div id="Layer2_Container" class="style3">
						<div id="Layer138">
							<div id="wb_Carousel1" style="width:205px;height:655px;z-index:660;overflow:hidden;">
								<div  id="Carousel1" style="position:absolute;top: 180%;z-index: 3333;">
				
									<?php 
										$i= 0;
										foreach($featuredSellers as $featuredSeller){
											if($i%2 == 0){
											$frame = $i; ?>

										<div class="frame">
											<?php } $i++; ?>
											
											<div id="<?= ($i%2 == 0) ?'Layer51':'Layer55' ?>" style="position:absolute;text-align:left;left:2px;width:205px;height:288px;<?= ($i%2 == 0) ?'top:2px;z-index:547;':'top:304px;z-index:548;'?>">
												<div id="Layer52" style="position:absolute;text-align:left;left:0px;top:209px;width:205px;height:79px;z-index:535;">
													<div id="wb_Text39" style="position:absolute;left:65px;top:15px;width:135px;height:14px;z-index:530;text-align:left;">
														<span style="color:#000000;font-family:Georgia;font-size:11px;">
															<?php if($featuredSeller['contact_person_name'] != ""){ ?>
																<strong><?php echo $featuredSeller['contact_person_name'];?></strong>
															<?php }else{ ?>
																<strong><?php echo $featuredSeller['contact_person'];?></strong>
															<?php } ?>
														</span>
													</div>
													<div id="wb_Text40" style="position:absolute;left:65px;top:30px;width:132px;height:15px;z-index:531;text-align:left;">
														<span style="color:#696969;font-family:Arial;font-size:12px;"><?php echo $featuredSeller['position'];?></span>
													</div>
													<div id="Layer53" style="position:absolute;text-align:left;left:0px;top:60px;width:205px;height:19px;z-index:532;">
														<div id="wb_Text41" style="position:absolute;left:8px;top:2px;width:190px;height:14px;z-index:527;text-align:left;">
															<span style="color:#000000;font-family:Arial;font-size:11px;">
															<strong><?php echo $featuredSeller['product_name']; ?></strong>
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
													<div id="wb_Image38" style="position:absolute;left:12px;top:9px;width:42px;height:42px;z-index:534;">
														<img src="<?php echo asset_url();?>images/flags/<?php echo $featuredSeller['flag'];?>" id="Image38" alt="">
													</div>
												</div>


												<div id="wb_Image39" style="position:absolute;left:0px;top:0px;width:205px;height:226px;z-index:536;">
													<a href="#" onclick=";return false;">
														<?php if ($featuredSeller['picture'] != "" && file_exists("assets/".$featuredSeller['picture'])){ ?>
															<img src="<?php echo asset_url().''.$featuredSeller['picture']; ?>" id="Image39" alt=""  class="style86" style="width:226px !important;max-height:210px !important;">
														<?php }else{ ?>
															<img src="<?php echo asset_url().'images/img1004.png'?>" id="Shape24" alt="" style="width:205px;height:210px;">
														<?php } ?>
													</a>
												</div>
											</div>
											
										
									<?php if($frame+2 == $i){ ?>
									</div>
									<?php } ?>
									<?php }?>
									
								</div>
								<div id="Carousel1_back" style="position:absolute;left:15px;top:272%;width:35px;height:13px;z-index:9999">
									<a style="cursor:pointer">
									<img alt="Back" style="border-width:0" src="images/previoustxt0blk.png">
									</a>
								</div>
								<div id="Carousel1_next" style="position:absolute;right:15px;top:272%;width:35px;height:13px;z-index:9999">
									<a style="cursor:pointer">
									<img alt="Next" style="border-width:0" src="images/nexttxt0blk.png">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

    			<div id="Layer_sellers" class="class1">
					<div id="Layer_details_Container4" class="class2">
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
	if(sub_prod > 155){ 
		$(".sub_products").css('overflow-y','auto');
	}else{
		$(".sub_products").css('overflow-y','hidden');
	}
	var Carousel1Opts = {
        delay: 4000,
        duration: 500,
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
    $("#Carousel4_back a").click(function(){
       $('#Carousel4').carouseleffects('prev');
    });
    $("#Carousel4_next a").click(function(){
       $('#Carousel4').carouseleffects('next');
    });
    
});
$(document).ready(function() {
    $(".SlideShow1").slideshow({
        interval: 3000,
        type: 'sequence',
        effect: 'none',
        direction: '',
        pagination: false,
        effectlength: 1000
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
function openProduct(id) {
	//alert('hello');
	$.get(base_url+"seller/product/view/"+id,{},function(data) {
		$("#Layer_details_Container2").html(data);
		ShowObjectWithEffect('Layer_details2', 1, 'scale', 500, 'swing');
	},'html');
}
function openSeller(id) {
		$.get(base_url+"seller/popup/"+id,{},function(data) {
			$("#Layer_details_Container4").html(data);
			ShowObjectWithEffect('Layer_sellers', 1, 'scale', 500, 'swing');
		},'html');
}
function showVerifiedFirst() {
	$.get(base_url+"product/verified/",{},function(data) {
		$(".products-list").html(data);
	},'html');
}
function showCommunityFirst(id) {
	$.get(base_url+"product/show/community/"+id,{},function(data) {
		$(".products-list").html(data);
	},'html');
}
function hideCommunity(id) {
	$.get(base_url+"product/hide/community/"+id,{},function(data) {
		$(".products-list").html(data);
	},'html');
}
function changeCountry(a){
	var country = $(a).val();
	$.post(base_url+"seller/city",{country: country, busi_type: 1 },function(data) {
		$('#city').html(data);
	},'html');
	
}
function addToItemToCart(id) {
	$.post(base_url+"additemtocart",{product_id: id},function(data) {
		$("#msg_cont").html(data.msg);
		ShowObject('Layer99', 1);
	},'json');
}
function productGallery(busi_id) {
	$.get(base_url+"getproductgallery/"+busi_id,{},function(data) {
		$("#msg_cont").html(data.msg);
		ShowObject('Layer99', 1);
	},'json');
}

function showRelatedImages(product_id,layer) {
	$.get(base_url+"product/relatedimages/"+product_id+"/"+layer,{},function(data) {
		$("#similar-images-"+layer).html(data);
		ShowObjectWithEffect('Layer19_'+layer, 1, 'slideleft', 500);ShowObjectWithEffect('Layer5_'+layer, 0, 'slideright', 500);
		$('.carousel').carousel({
			interval: 3000
		});
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