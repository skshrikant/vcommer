<link rel="stylesheet" href="<?php echo asset_url();?>css/jquery.ui.all.css">
<script src="<?php echo asset_url(); ?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.slideshow.min.js"></script>
<script src="<?php echo asset_url(); ?>js/wb.carousel.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.core.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.widget.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.position.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.mouse.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.draggable.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-blind.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-drop.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fold.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-highlight.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url(); ?>js/fancybox/jquery.easing-1.3.pack.js"></script>
<link rel="stylesheet" href="<?php echo asset_url(); ?>css/fancybox/jquery.fancybox-1.3.0.css">
<script src="<?php echo asset_url(); ?>js/fancybox/jquery.fancybox-1.3.0.pack.js"></script>
<script src="<?php echo asset_url(); ?>js/fancybox/jquery.mousewheel-3.0.2.pack.js"></script>
<link rel="stylesheet" href="<?php echo asset_url();?>js/prettyPhoto/css/prettyPhoto.css">
<script src="<?php echo asset_url();?>js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<style>
<!--
body {
	overflow:scroll;
}
#Layer232 {
    background-color: #B22222;
}
.business-info{
	background-color: #ffffff;
	padding :2px;
}

-->
</style>
<div id="body">        
<div class="row center bgwhite1" style="height:220px;">
	<h2 class="font1 "><?php echo $business[0]['company_name'];?></h2>
   	<div class="row" style="margin:0px;">
	  	<div class="col-md-3 col-sm-3 text-right">
	     	<img  src="<?php echo asset_url();?><?php echo $business[0]['business_logo'];?>" id="Shape85" alt="" style="width:100px;height:86px;">
     	</div>
	   	<div class="col-md-6 col-sm-6">
	     	<p class="font2"><br><?php echo substr($business[0]['company_introduction'],0,500);?></p>
	   	</div>
	   	<div class="col-md-2 col-sm-2">
	   		<?php if($business[0]['plan_id'] > 1) { ?>
		  	<img  src="<?php echo asset_url();?>images/black-horse.png" id="Image105" alt="" class="img41"><br>
		   	<span class="font3"><strong>Black Horse </strong>MEMBER</span>
		   	<?php } ?>
		   	<br><br>
		  	<div id="Layer251" style="z-index:1;">
				<div id="Layer251_Container">
					<a href="#" onclick="ShowObjectWithEffect('Layer252', 1, 'slideup', 500);return false;">
						<img  src="<?php echo asset_url();?>images/deal_icon.png" id="Image97" alt="" class="img50">
					</a>
					<a href="#" onclick="ShowObjectWithEffect('Layer251', 0, 'pulsate', 500);return false;">
						<img  src="<?php echo asset_url();?>images/img0546.png" id="Image129" alt="" class="imgc">
					</a>
					<div id="Layer252" style="visibility:hidden">
						<div id="Layer252_Container">
							<a onclick="javascript:chat_with(<?php echo $business[0]['user_id'];?>,<?php echo $business[0]['accept_chat'];?>);">
								<img class="hover" alt=""  src="<?php echo asset_url();?>images/chat_button2.png">
								<span>
									<img alt=""  src="<?php echo asset_url();?>images/chat_button1.png">
								</span>
							</a>
							<a href="javascript:addToCommunity(<?php echo $business[0]['busi_id'];?>);">
								<img class="hover" alt=""  src="<?php echo asset_url();?>images/addcommunity_button2.png">
						 		<span>
						 			<img alt=""  src="<?php echo asset_url();?>images/addcommunity_button1.png">
						 		</span>
							</a>
							<a href="javascript:shareToWorld('<?php echo base_url();?>seller/website/<?php echo $business[0]['busi_id']?>','<?php echo $business[0]['company_name']?> @ TRDSTATION',1,<?php echo $business[0]['busi_id']?>);">
								<img class="hover" alt=""  src="<?php echo asset_url();?>images/share_button.png">
								<span>
									<img alt=""  src="<?php echo asset_url();?>images/share_button1.png">
						   		</span>
							</a>
							<a href="javascript:openGeneralEnquiry(<?php echo $business[0]['busi_id']?>);" target="_self">
								<img class="hover" alt=""  src="<?php echo asset_url();?>images/inquirytomato.png">
								<span>
									<img alt=""  src="<?php echo asset_url();?>images/inquiryblack.png">
						    	</span>
							</a>
							<a href="#" onclick="ShowObjectWithEffect('Layer252', 0, 'slideup', 500);return false;" class="imgup">
								<img  src="<?php echo asset_url();?>images/img0547.png" alt="">
							</a>
						</div>
					</div>
				</div>
			</div>
		  	<img  src="<?php echo asset_url();?>images/Guarantee.png" id="Image89" alt="" aria-describedby="ui-tooltip-0" class="img25" style="width:30px !important;">
		  	<img  src="<?php echo asset_url();?>images/trusted.png" id="Image104" alt="" aria-describedby="ui-tooltip-1"  class="img25">
		</div>
	</div>
	<a href="<?php echo base_url();?>desksite/<?php echo $busi_id;?>" class="switch">
	  	<img src="<?php echo asset_url();?>images/desktoplogo.png" id="Image49" alt="">MyDesksite
	</a>
</div>
<!-- search and navigation bar -->
<div class="bg2">
	<div class="row" style="margin:0px;">
	  	<div class="col-md-offset-3 col-md-5 mj1">
   		 	<a href="#" class="nav1">
   		 		Home
   		 	</a>
   		 	<a href="#" class="nav1"  onclick="ShowObjectWithEffect('Layer98', 1, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer95', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 0, 'slidedown', 500, 'swing');return false;">
   		 		About
   		 	</a>
   		 	<a href="#"  class="nav1" onclick=" ShowObjectWithEffect('Layer98', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer95', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 1, 'slideup', 500, 'swing');return false;">
   		 	    Products
   		 	</a>
   		 	<a href="#"  class="nav1" onclick="ShowObjectWithEffect('Layer95', 1, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer98', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 0, 'slidedown', 500, 'swing');return false;">
   		        Contact
   		    </a>
		</div>
		<div class="col-md-3">
			<div class="search-div"> 
				<form method="post" action="search">
					<div class="col-sm-10 col-xs-11" style="padding: 0px;">
						<input type="text" class="search-box" required="required" name="keyword" id="SiteSearch1" placeholder="Search">
					</div>
					<div class="col-sm-2 col-xs-1" style="padding: 0px;">
						<button class="btn btn-block search-btn" type="button" onclick="searchProducts();"><span aria-hidden="true" class="glyphicon glyphicon-search"></span></button>
					</div>
				</form>
			</div>
		</div>
 	</div>
    <!-- search and navigation bar -->
    <!-- about us popup bar -->
	<div id="Layer98" style="position:absolute;z-index:500;width:1280px;margin:auto auto;">
  		<img src="<?php echo asset_url();?>images/img0568.png" id="Shape20" alt="" class="aro">
     	<div class="bg3">
      		<div class="row">
      	 	 	<div class="col-md-6 left">
	      	 	 	<br><br>
	      	 	 	<div class="col-sm-12">
		      	 	 	<p class="about1"><strong>About Us</strong></p>
		      	 	 	<p class="about2"><?php echo substr($business[0]['company_introduction'],0,1000);?> <?php if(strlen($business[0]['company_introduction']) > 1000) { ?>...<?php } ?> </p>
		      	 	 	<br><br>
	      	 	 	</div>
      	 	 	    <div class="col-sm-4 about3">
	      	 	 	    <br><br>
		      	 	 	<p class="about1"><strong>Business Information</strong></p>
		      	 	 	<br>
		      	 	 	<p>Business Type</p>
		      	 	 	<p>Main Product</p><br><br>
		      	 	 	<p>Main Market</p>
		      	 	 	<p>Year of Establish</p>
		      	 	 	<p>No. of Employees</p>
		      	 	 	<p>Country</p>
		      	 	 	<p>Province / City</p>
		      	 	 	<br><br>
		      	 	 	<p class="about1"><strong>Performance</strong></p>
		      	 	 	<p>Membership</p>
		      	 	 	<p>Likes</p>
		      	 	 	<p>Rank</p>
		      	 	 	<br><br>
		      	 	 	<p class="about1"><strong>Production capacity</strong></p>
		      	 	 	<p>Factory Size</p>
		      	 	 	<p>No. of Production lines</p>
		      	 	 	<p>R&D Capacity</p>
		      	 	 	<br><br>
      	 	 	    </div>
      	 	 	    <div class="col-sm-8 about2">
	      	 	 	    <br><br><br><br><br>
	      	 	 	    <p><?php echo $business[0]['user_subcategory'];?></p>
	      	 	 	    <p><?php echo $business[0]['mainproducts'];?></p>
	      	 	 	    <p>
	      	 	 	    <?php 
		                	foreach ($market_info as $key=>$market) {
		                		if($key > 0) {
		                			echo ", ";
		                		}
		                		echo $market['name'];
		                	}
		                ?>
				        </p>
	      	 	 	    <p><?php echo $business[0]['year_of_registration'];?></p>
	      	 	 	    <p><?php echo $business[0]['total_no_of_emp'];?> Person</p>
	      	 	 	    <p><?php echo $business[0]['company_country'];?></p>
	      	 	 	    <p><?php echo $business[0]['company_city'];?></p>
	      	 	 	    <br><br><br><br>
	      	 	 	    <p><?php if($business[0]['plan_id'] > 1) { ?>Black Horse Member<?php } else { ?>Free Member<?php } ?></p>
	      	 	 	    <p><?php echo $business[0]['likes'];?></p>
	      	 	 	    <p><?php echo $business[0]['rank'];?>%</p>
	      	 	 	    <br><br><br>
	      	 	 	    <?php 
				            $size = "N/A";
				            if($company[0]['fact_size'] == 100) {
				            	$size = "Less Than 100 Square Meter";	
				            } else if($company[0]['fact_size'] == 500) {
				            	$size = "100 to 500 Square Meter";
			            	} else if($company[0]['fact_size'] == 1000) {
			            		$size = "501 to 1000 Square Meter";
		            		} else if($company[0]['fact_size'] == 2000) {
		            			$size = "1001 to 2000 Square Meter";
	            			} else if($company[0]['fact_size'] == 2100) {
	            				$size = "More Than 2000 Square Meter";
				            }
				        ?>
	      	 	 	    <p><?php echo $size;?></p>
	      	 	 	    <p><?php if(!empty($company[0]['no_of_production_line'])) { echo $company[0]['no_of_production_line'];} else { echo "N/A";}?></p>
	      	 	 	    <p>
	      	 	 	    <?php foreach ($user_rnd as $row) { ?>
  							<?php if($row['rnd_type_id'] == 4) { ?>
  								<?php echo $company[0]['rnd_capacity'];?>
  							<?php } else { ?>
  								<?php echo $row['name']?>&nbsp;
  							<?php } ?>
  						<?php } ?>
	  					</p>
      	 	 	    </div>
      	 	 	</div>
      	 	 	<div class="col-md-6"><br><br>
      	 	 		<a href="#" onclick="ShowObjectWithEffect('Layer98', 0, 'slideup', 500);return false;">
	      	 	 	 	<img  src="<?php echo asset_url();?>images/img0413.gif" id="Shape26" alt="" class="img33">
	      	 	 	</a>
	      	 		<div  class="tab-content">
		      	 		<div id="home1" class="tab-pane fade in active content1">
	      	 	 	     	<img class="image"  src="<?php echo asset_url();?><?php echo $business[0]['info_img1'];?>" alt="" title="" style="float: right;width:500px;">
	      	 	 	  	</div>
	      	 	 	 	<div id="menu11" class="tab-pane fade content1 center">
	      	 	 	     	<table style="width:100%;">
	      	 	 	     	 	<tbody>
	      	 	 	     	 		<?php foreach ($licences as $key=>$image) { ?>
		      	 	 	     	 	<tr>
		      	 	 	     	 		<td>
		      	 	 	     	 			<?php if(!empty($image['cert_image1'])) { ?>
			      	 	 	     	 		<a href="<?php echo asset_url().$image['cert_image1'];?>" data-rel="prettyPhoto_SlideShow311[SlideShow311]" rel="prettyPhoto_SlideShow311[SlideShow311]>
			      	 	 	     	 			<img alt="" id="PhotoGallery5_img1" src="<?php echo asset_url().$image['cert_image1'];?>" style="height:180px;">
			      	 	 	     	 		</a>
			      	 	 	     	 		<?php } ?>
		      	 	 	     	 		</td>
		      	 	 	     	 		<td>
		      	 	 	     	 			<?php if(!empty($image['cert_image2'])) { ?>
		      	 	 	     	 			<a href="<?php echo asset_url().$image['cert_image2'];?>" data-rel="prettyPhoto_SlideShow311[SlideShow311]" rel="prettyPhoto_SlideShow311[SlideShow311]">
			      	 	 	     	 			<img alt="" id="PhotoGallery5_img1" src="<?php echo asset_url().$image['cert_image2'];?>" style="height:180px;">
			      	 	 	     	 		</a>
			      	 	 	     	 		<?php } ?>
		      	 	 	     	 		</td>
		      	 	 	     	 	</tr>
		      	 	 	     	 	<tr>
		      	 	 	     	 		<td>
		      	 	 	     	 			<?php if(!empty($image['cert_image3'])) { ?>
		      	 	 	     	 			<a href="<?php echo asset_url().$image['cert_image3'];?>" data-rel="prettyPhoto_SlideShow311[SlideShow311]" rel="prettyPhoto_SlideShow311[SlideShow311]">
			      	 	 	     	 			<img alt="" id="PhotoGallery5_img1" src="<?php echo asset_url().$image['cert_image3'];?>" style="height:180px;">
			      	 	 	     	 		</a>
			      	 	 	     	 		<?php } ?>
		      	 	 	     	 		</td>
		      	 	 	     	 		<td>
		      	 	 	     	 			<?php if(!empty($image['cert_image4'])) { ?>
		      	 	 	     	 			<a href="<?php echo asset_url().$image['cert_image4'];?>" data-rel="prettyPhoto_SlideShow311[SlideShow311]" rel="prettyPhoto_SlideShow311[SlideShow311]">
			      	 	 	     	 			<img alt="" id="PhotoGallery5_img1" src="<?php echo asset_url().$image['cert_image4'];?>" style="height:180px;">
			      	 	 	     	 		</a>
			      	 	 	     	 		<?php } ?>
		      	 	 	     	 		</td>
		      	 	 	     	 	</tr>
		      	 	 	     	 	<?php } ?>
	      	 	 	     	 	</tbody>
	      	 	 	     	</table>
	      	 	 		</div>
	      	 	 	 	<div id="menu21" class="tab-pane fade content1 center">
	      	 	 	 		<?php foreach ($Certificate as $key=>$image) { ?>
		      	 	 	   	<a href="<?php echo asset_url().$image['certificate_url'];?>" data-rel="prettyPhoto_SlideShow312[SlideShow312]" rel="prettyPhoto_SlideShow312[SlideShow312]">
		      	 	 	     	<img alt="" id="PhotoGallery6_img0" src="<?php echo asset_url().$image['certificate_url'];?>" style="width:250px;">
		      	 	 	   	</a>
		      	 	 		<?php } ?>
	      	 	 	  	</div>
	      	 	 	  	<div id="menu31" class="tab-pane fade content1">
	      	 	 	 	</div>
	      	 	 	</div> 
	      	 	 	<div class=" col-md-offset-2 col-md-3">
		      	 	 	<br><br>
		      	 	 	<p class="about1"><strong>Certificates</strong></p>
		      	 	 	<p class="about1"><strong>License</strong></p>
		      	 	 	<p class="about1"><strong>Verification</strong></p>
		      	 	 </div>
		      	 	 <div class="col-md-4 font3 text-left">
		      	 	 	<br><br>
		      	 	 	<p style="padding-top: 10px;text-align:left;"><?php echo $business[0]['product_certs'];?></p>
		      	 	 	<p style="padding-top: 5px;text-align:left;">Expor License</p>
		      	 	 	<p style="padding-top: 5px;text-align:left;">Done by ( Povided later ) ..</p>
		      	 	 	<p class="font2 text-left">Back to Company Gallery</p>
		      	 	</div>
	      	 	 	<div class="col-md-3">
	      	 	 	   	<br><br>
	      	 	 	    <ul class="nav nav-tabs" style="border-bottom:0px;">
		      	 	 		<li class="active" style="width:130px;"><a data-toggle="tab" href="#menu11" style="padding:3px 10px;">view</a></li>
		      	 	 		<li style="width:130px;"><a data-toggle="tab" href="#menu21" style="padding:3px 10px;">view</a></li>
		      	 	 		<li style="width:130px;"><a data-toggle="tab" href="#menu31" style="padding:3px 10px;">view</a></li>
		      	 	 		<li style="width:130px;"><a data-toggle="tab" href="#home1" style="padding:3px 10px;">view</a></li>
		      	 	 	</ul>
	      	 	 	</div>
	      	 	</div>
      		</div>
    	</div>
	</div>
    <!-- about us bar end-->
   	<!-- product popup  -->
	<div id="Layer120" onmouseleave="ShowObjectWithEffect('Layer120', 0, 'slideup', 500, 'swing');return false;" style="position: absolute;top: 306px;z-index: 1;visibility:hidden; margin-left: 474px;"  class=" boxstyle1">
		<img src="<?php echo asset_url();?>images/img0568.png" id="Shape20" alt="" class="aro">
		<div id="wb_desktop_menu">
          	<ul>
          		<?php foreach($productCategories as $mainCategory) { ?>
              	<li class="firstmain">
                    <a class="<?php if(count($mainCategory['subproducts']) > 0) {?>withsubmenu<?php } ?>" href="<?php echo base_url();?>product/category/0/0/<?php echo $mainCategory['id'];?>/<?php echo $mainCategory['busi_id'];?>" target="_self"><?php echo $mainCategory['name']; ?></a>
                   	<?php foreach($mainCategory['subproducts'] as $subproduct){?>
                   	<ul>
                       	<li class="firstitem">
                       		<a href="<?php echo base_url();?>product/category/0/<?php echo $subproduct['id'];?>/0/<?php echo $mainCategory['busi_id'];?>" target="_self"><?php echo $subproduct['name'];?></a>
                       	</li>
               		</ul>
               		<?php } ?>
               	</li>
               	<?php } ?>
        	</ul>
          	<br>
      	</div>
	</div>

      
   	<!-- product popup bar end -->
  	<!-- contact popup bar  -->
	<div id="Layer95" style="position:absolute;z-index:500;width:1280px;margin:auto auto;" >
	  	<img src="<?php echo asset_url();?>images/img0568.png" id="Shape20" alt="" class="aro">
		<div class="row contact7">
			<a href="#" onclick="ShowObjectWithEffect('Layer95', 0, 'slideup', 500, 'swing');return false;" class="pull-right">
      	 		<img  src="<?php echo asset_url();?>images/img0596.gif" id="Shape26" alt="" class="img33">
      	 	</a>
			<div class="col-md-2">
				<div class="whitebox3" style="background-color:transparent !important;">
		  			<ul class="nav nav-tabs" style="border:0px;">
			   			<li class="active contact1"><a data-toggle="tab" href="#home" style="cursor:pointer;">Information</a></li>
			   			<li><a data-toggle="tab" href="#menu1" class="contact1" style="cursor:pointer;">Contact us</a></li>
		  			</ul>
		  		</div>
			</div>
			<div class="col-md-10">
			  	<div class="tab-content">
			    	<div id="home" class="tab-pane fade in active">
			    		<div class="col-sm-6">
			      			<p class="about1">Contact Person</p>
			      			<div class="card" style="margin:auto auto;width:220px;">
			      			 	<img alt="<?php echo $business[0]['name'];?>" id="PhotoGallery3_img0" src="<?php echo asset_url();?><?php echo $business[0]['profile_image'];?>" style="width:200px;" /><br>
			      			 </div>
			      			<br>
			      			<p class="contact2"><strong><?php echo $business[0]['name'];?></strong></p>
			      			<p class="contact3"><strong><?php echo $business[0]['email'];?></strong><p>
				      	</div>
			      		<div class="col-md-6 left">
			      			<h3 class="contact4">MAIN OFFICE</h3>
			      			<div class="whitebox">
			      				<div class="col-sm-7">
			      					<p><?php echo $business[0]['company_street'];?>, <?php echo $business[0]['company_city'];?>, <?php echo $business[0]['company_province'];?>, <?php echo $business[0]['company_country'];?></p>
			      					<div class="flex">
			      						<p class="about1"> Email</p><p><?php echo $business[0]['company_email'];?></p></div>
			      					<div class="flex">
			      						<p class="about1"> Web</p><p><?php echo $business[0]['website'];?></p>
			      					</div>
			      				</div>
			      				<div class="col-sm-4">
				      				<p class="about1"> Tel</p>
				      				<p><?php if(!empty($business[0]['telephone_number'])) { ?><?php echo $business[0]['telephone_city_code'];?> <?php echo $business[0]['telephone_number'];?><?php } ?></p>
				      				<p><?php if(!empty($business[0]['telephone_number1'])) { ?><?php echo $business[0]['telephone_city_code'];?> <?php echo $business[0]['telephone_number1'];?><?php } ?></p>
				      				<p class="about1"> Fax</p>
				      				<p><?php echo $business[0]['fax'];?></p>
			      				</div>
			      			</div>
				      		<h3 class="contact4">WORLDWIDE BRANCHES</h3>
				      		<div class="scrollbox">
				      			<?php foreach ($branches as $branch) { ?>
				      			<div class="whitebox" style="padding-bottom:10px;">
				      				<div class="col-sm-7">
				      					<p><?php echo $branch['street'];?>, <?php echo $branch['city'];?>, <?php echo $branch['province'];?>, <?php echo $branch['country'];?></p>
				      					<div class="flex">
				      						<p class="about1"> Email</p><p><?php echo $branch['email'];?></p>
				      					</div>
				      					<div class="flex">
				      						<p class="about1" > </p><p></p>
				      					</div>
				      				</div>
				      				<div class="col-sm-4">
					      				<p class="about1"> Tel</p>
					      				<p><?php echo $branch['city_code'];?> <?php echo $branch['telephone1'];?></p>
					      				<p><?php echo $branch['city_code'];?> <?php echo $branch['telephone2'];?></p>
					      				<p class="about1"> Fax</p>
					      				<p><?php echo $branch['fax'];?></p>
				      				</div>
				      			</div>
				      			<?php } ?>
			      			</div>
			      		</div>
			    	</div>
				    <div id="menu1" class="tab-pane fade">
					    <h2>CONTACT US</h2><br><br>
					    <div class="row">
						    <div class="col-md-5">
							    <input type="text" name="name" placeholder="Name"/>
							    <input type="email" name="email" placeholder="Email"/>
						    </div>
						    <div class="col-md-5">
							    <input type="text" name="company" placeholder="Company"/>
							    <input type="number" name="phone" placeholder="Phone"/>
						    </div>
						    <div class="col-md-10">
						    	<textarea rows="" cols="" placeholder="Message"> </textarea>
						    	<button type="button" onclick="submitContactForm();" style="padding:10px 15px;">Submit</button>
						    </div>
					    </div>
				    </div>
				</div>
			</div>
    	</div>
  	</div>
</div>
  	<!-- contact popup bar end -->
  	<div class="row" style="margin:0px;">&nbsp;</div>
  	<div class="row" style="margin:0px;">
  		<div class="col-md-10" style="padding-left: 0px;">
  			<?php foreach ($Productdetails as $product) {?>
			<div class="panel panel-default">
			  <div class="panel-body">
			    <div class="col-md-6">
				   <div class="row"> 
				   		<div class="row" style="padding-left: 10px;">
				    		<p class="product-braedcrumbs">
					    		<a href="<?php echo base_url();?>desksite/<?php echo $product['busi_id'];?>">Desktop</a> 
						    	&gt; <a href="<?php echo base_url();?>product/category/<?php echo $product['subcategory_id'];?>/0/0/<?php echo $product['busi_id'];?>" > <?php echo $product['subcategory']?></a> 
								&gt;<a href="<?php echo base_url();?>product/category/0/<?php echo $product['mainproduct_id'];?>/0/<?php echo $product['busi_id'];?>"  > <?php echo $product['mainproduct']?></a>
								&gt; <a href="<?php echo base_url();?>product/category/0/0/<?php echo $product['subproduct_id'];?>/<?php echo $product['busi_id'];?>" > <?php echo $product['subproduct']?> </a>&gt;
							</p>
				    	</div>
				    	<div class="row">&nbsp;</div>
				   		<div class="col-md-3 sm-image-border">
					    	<div class="row">
					    		<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["main_image"];?>');return false;">
					    			<img src="<?php echo asset_url().''.$product['main_image'];?>" class="sm-image-border" width="66px" alt="" />
					    		</a>
				    		</div>
				    		<div class="row">
				    			<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["sub_image1"];?>');return false;">
					    			<img src="<?php echo asset_url().''.$product['sub_image1'];?>" class="sm-image-border" width="66px" alt="" />
				    			</a>
				    		</div>
				    		<div class="row">
					    		<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["sub_image2"];?>');return false;">
						    		<img src="<?php echo asset_url().''.$product['sub_image2'];?>" class="sm-image-border" width="66px" alt="" />
					    		</a>
				    		</div>
				    		<div class="row">
				    			<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["sub_image3"];?>');return false;">
					    			<img src="<?php echo asset_url().''.$product['sub_image3'];?>" class="sm-image-border" width="66px" alt="" />
					    		</a>
				    		</div>
				    		<div class="row">
				    			<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["sub_image4"];?>');return false;">
					    			<img src="<?php echo asset_url().''.$product['sub_image4'];?>" class="sm-image-border" width="66px" alt="" />
					    		</a>
				    		</div>
			    		</div>
					    <div class="col-md-9">
					    	<div class="row main-image">
				    			<img src="<?php echo asset_url().''.$product['main_image'];?>" id="Shapeview" class="img-responsive"  width="350" alt="" />	
					    	</div>
					    	<div class="row">
				    			<div class="col-md-6"><p>Viewed  <?php echo $product['visit']; ?></p></div>	
				    			<div class="col-md-6"><p>Likes  <i class="fa fa-thumbs-up like" aria-hidden="true"></i> <?php echo $product['likes']; ?></p></div>
					    	</div>
						</div>
						
					</div>
			    </div>
			    <div class="col-md-6">
			    	<h3 class="blue"><img src="<?php echo asset_url();?>images/page_location.png" class="sm-img" alt=""><span><?php echo $product['name']; ?></span></h3>
			    	<p><?php echo substr($product['description'], 0, 150); ?> ...</p>
			    	<div class="row">&nbsp;</div>
			    	<p> <h6>Quick Specifications</h6><hr /> </p>
			    	<div class="row">
			    		<div class="col-sm-4" ><p>Model Number</p></div>
			    		<div class="col-sm-8" ><p><?php echo $product['model_no']; ?></p></div>
		    		</div>
		    		<div class="row">
			    		<div class="col-md-4" ><p>Made In</p></div>
			    		<div class="col-md-8" ><p><?php echo $product['country']; ?></p></div>
		    		</div>
		    		<div class="row">
			    		<div class="col-md-4" ><p>Brand</p></div>
			    		<div class="col-md-8" ><p><?php echo $product['brand']; ?></p></div>
		    		</div>
		    		<div class="row">
			    		<div class="col-md-4" ><p>US$ Price</p></div>
			    		<div class="col-md-8" ><p><?php echo $product['unit_price']; ?></p></div>
		    		</div>
		    		<div class="row">
			    		<div class="col-md-4" ><p>Min. Order</p></div>
			    		<div class="col-md-8" ><p><?php echo $product['quantity']; ?></p></div>
		    		</div>
		    		<div class="row">
			    		<div class="col-md-4" ><p>Lead Time</p></div>
			    		<div class="col-md-8" ><p><?php echo $product['lead_time']?></p></div>
		    		</div>
		    		<div class="row">
			    		<div class="col-md-4" >Available Colors</div>
			    		<div class="col-md-8 " >
		    				<?php foreach($colors as $color) { ?>
			    				<span> <div class="available-colors" style="background: #<?php echo $color['color_code'];?>"></div></span>
		    				<?php } ?>
	    				</div>
	    			</div>
	    			<div class="row" style="padding-top:10px;">
			    		<div class="col-md-4" ><p>Product CBM</p></div>
			    		<div class="col-md-8" ><p><?php echo $product['cbm'];?></p></div>
		    		</div>
	    			<hr />
	    			<div class="row">
			    		<div class="col-md-4" ><p>Port</p></div>
			    		<div class="col-md-8" ><p><?php if(!empty($trade_info[0]['part1'])) { echo $trade_info[0]['part1']; } ?> <?php if(!empty($trade_info[0]['part2'])) { echo ", ".$trade_info[0]['part2']; } ?></p></div>
	    			</div>
		    		<div class="row">
			    		<div class="col-md-4" ><p>Accepted Payment</p></div>
			    		<div class="col-md-8" ><p><?php $curr_text = ""; foreach ($currency as $curr) { if($curr_text == "") { $curr_text = $curr['payment_currency'];} else { $curr_text = $curr_text.", ".$curr['payment_currency'];}} echo $curr_text;?></p></div>
		    		</div>
		    		<hr />
		    		<div class="row pull-center">
		    			<div class="share-icons" onclick="chat_with(<?php echo $product['user_id'];?>,<?php echo $product['accept_chat']; ?>)"><a><i class="fa fa-comments" aria-hidden="true"></i></a></div>
		    			<div class="share-icons"><a href=""><i class="fa fa-file-text-o" aria-hidden="true"></i></a></div>
		    			<div class="share-icons"><a href="javascript:addToMyFavourite(<?php echo $product['id'];?>,4);"><i class="fa fa-star" aria-hidden="true"></i></a></div>
		    			<div class="share-icons"><a href="javascript:addToItemToCart(<?php echo $product['id'];?>);"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></div>
		    			<div class="share-icons"><a href="javascript:likeProduct(<?php echo $product['id'];?>);"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></div>
		    			<div class="share-icons"><a href="javascript:shareToWorld('<?php echo base_url();?>item/details/<?php echo $product['id'];?>','<?php echo $product['name'];?>',2,<?php echo $product['id'];?>);"><i class="fa fa-share-alt" aria-hidden="true"></i></a></div>
		    		</div>
		    		<hr />
			    </div>
			  </div>
			</div>
			<div class="row"><h5 class="heading">About This Product</h5></div>
			<div class="row clearfix">&nbsp;</div>
			<div class="panel panel-default">
			  <div class="panel-body">
				  <div class="row">
				  	<div class="col-md-10"><p><?php echo $product['about']; ?></p></div>
				  </div>
				  <div class="row">
				  	<div class="col-md-8">
					  	<?php foreach ($specifications as $specification) {?>
							<div class="col-md-6">
								<p><b><?php echo $specification['spec_name']; ?></b> : <?php echo $specification['spec_value']; ?></p>
							</div>
						<?php }?>
					</div>
				  </div>
			  </div>
		  </div>
		  <div class="row"><h5 class="heading">Product Description</h5></div>
			<div class="row clearfix">&nbsp;</div>
			<div class="panel panel-default">
			  <div class="panel-body">
				  <div class="row">
				  	<div class="col-md-10"><p><?php echo $product['description']; ?></p></div>
				  </div>
				  <div class="row">
				  	<div class="col-md-12">
				  		<img src="<?php echo asset_url().''.$product['flyr_image1'];?>" class="flyr-img img-responsive" alt="">
					</div>
				  </div>
			  </div>
		  </div>
		  <div class="row"><h5 class="heading">Product Specification</h5></div>
			<div class="row clearfix">&nbsp;</div>
			<div class="panel panel-default">
			  <div class="panel-body">
				  <div class="row">
				  	<div class="col-md-8">
					  	<?php foreach ($specifications as $specification) {?>
							<div class="col-md-6">
								<p><b><?php echo $specification['spec_name']; ?></b> : <?php echo $specification['spec_value']; ?></p>
							</div>
						<?php }?>
					</div>
				  </div>
				  <div class="row">
				  	<div class="col-md-12">
				  		<img src="<?php echo asset_url().''.$product['flyr_image2'];?>" class="flyr-img img-responsive" alt="">
					</div>
				  </div>
			  </div>
		  </div>
		<?php } ?>
		</div>
      		<div class="col-md-2">
      			<div class="row">
      			<div class="business-info col-md-12">
      			<?php  foreach ($advantages as $advantage){?>
      				<h4 class="heading" style="margin-left:10px;"> <span style="color:#FF6347;font-family:Georgia;font-size:12px;"><strong>Seller Advantages</strong></span></h4>
	      			<div class="panel-group" id="accordion" style="padding-left: 10px;padding-right: 10px;">
	      				<p>
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="style5A">
					        	Product Guarantee <span class="pull-right"><img alt="" src="<?php echo asset_url();?>images/advantages_arrow.png"></span>
					        </a>
				        </p>
					    <div id="collapse1" class="panel-collapse collapse">
					      <div class="panel-body"><?php echo $advantage['gaurantee_term'];?></div>
					    </div>
					    <p>
						    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="style5A">
					        	Product Certificates <span class="pull-right"><img alt="" src="<?php echo asset_url();?>images/advantages_arrow.png"></span>
					        </a>
				        </p>
					    <div id="collapse3" class="panel-collapse collapse">
					      <div class="panel-body">The seller able to issue the following Products Certificates: <?php echo  $advantage['product_certs'];?></div>
					    </div>
					    <p>
						    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4" class="style5A">
					        	Export and Shipping <span class="pull-right"><img alt="" src="<?php echo asset_url();?>images/advantages_arrow.png"></span>
					        </a>
				        </p>
					    <div id="collapse4" class="panel-collapse collapse">
					      <div class="panel-body"><?php if(!empty($advantage['verification_id'])){ echo "The seller has an export license and able to export and ship the goods under his company license."; } ?></div>
					    </div>
					 </div>
					 <?php }?>
				</div>
				<hr>
				<div class="bgwhite1">
				<div class="row">
					<div class="col-md-12">
						<h6><a href="#"><span style="color:#696969;font-family:Arial;font-size:12px;"><u>Business Type : </u></span></a></h6>
						<p><?php echo $business[0]['user_subcategory'];?></p>
						<h6><a href="#"><span style="color:#696969;font-family:Arial;font-size:12px;"><u>Contact Person : </u></span></a></h6>
						<p><?php echo $business[0]['name_prefix'];?> <?php echo $business[0]['name'];?></p>
						<p><?php echo $business[0]['position'];?></p>
					</div>
					<div class="col-md-12">
						<center><img src="<?php echo asset_url().$business[0]['profile_image']?>" width="100px;" height="100px;" style="border-radius:50%;border:2px solid #FF6347;" class="circle"></center>
					</div>
					<div class="col-md-12">
						<h6><a href="#"><span style="color:#696969;font-family:Arial;font-size:12px;"><u>Main Market : </u></span></a></h6>
						<p>
						<?php 
		                	foreach ($market_info as $key=>$market) {
		                		if($key > 0) {
		                			echo ", ";
		                		}
		                		echo $market['name'];
		                	}
		                ?>
						</p>
						<h6><a href="#">Main Product</a></h6>
						<p><?php echo $business[0]['mainproducts'];?></p>
						<h6><a href="#">Year of Establish</a></h6>
						<p><?php echo $business[0]['year_of_registration'];?></p>
						<h6><a href="#">No. of Employees</a></h6>
						<p><?php echo $business[0]['total_no_of_emp'];?> Person</p>
						<h6><a href="#">Country</a></h6>
						<p><?php echo $business[0]['company_country'].' '.$business[0]['company_province'];?></p>
					</div>
				</div>
				</div>
				</div>
			</div>
	      </div>
      
   	<!-- third fold -->
	   	<div class="row">
	   		<h5 class="heading">Same By Seller</h5>
	    	<div id="myCarousel3" class="carousel slide" data-interval="false">
			<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active">
						<div class="row">
							<?php foreach ($productList as $key=>$proList) { ?>
							<div class="col-md-3">
								<div class="bgwhite center">
					      			<a href="<?php echo base_url();?>item/details/<?php echo $proList['id'];?>/<?php echo $proList['busi_id'];?>" class="a1">
							      	 	<?php echo $proList['name'];?>
							      	</a>
							      	<p class="a2">
							    	  	<?php echo substr($proList['about'],0,120);?> ...
							      	</p>
							     	<img src="<?php echo asset_url();?><?php echo $proList['main_image'];?>" alt="" class="productimg">
						      		<a href="<?php echo base_url();?>item/details/<?php echo $proList['id'];?>/<?php echo $proList['busi_id'];?>" class="hover1" > <img alt="" src="<?php echo asset_url();?>images/view-detailsb.png" class="img60">DETAILS</a>
						      	 	<p class="a4">Price</p>
						      	 	<div class="inline">
							      	   	<p class="a5">USD </p>
							      	   	<p class="a6"><?php echo $proList['unit_price'];?>.00</p>
						      	  	</div>
						      	   	<p class="a4">Min. Order: <?php echo $proList['quantity'];?> <?php echo $proList['unit'];?>    </p>
						      	  	<div class="inline">
							      	   	<p>Rate</p>
							      	   	<img src="<?php echo asset_url();?>images/rate.png" alt="" class="margin2">
							      	   	<p>4.5 of 5 </p>
						      	   	</div>
				      			</div>
				      		</div>
				      		<?php if($key%4 == 3) { ?>
						 	</div>
						 	</div>
						 	<div class="item">
							<div class="row">
						 	<?php } ?>
				      		<?php } ?>
						</div>
      	 			</div>
      	 		</div>
      	 	</div>
			<a class="left carousel-control" href="#myCarousel3" data-slide="prev">
				<img src="<?php echo asset_url();?>images/previoustxt0blk.png"/>
			</a>
			<a class="right carousel-control" href="#myCarousel3" data-slide="next">
				<img src="<?php echo asset_url();?>images/nexttxt0blk.png"/>
			</a>
		</div>
       	<!-- sixth fold end-->
  	</div>
  	
  	</div>
  	<br/>
  	<div class="row clearfix"></div>
  	
<script>
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

function productBySeller(id) {
	$.get(base_url+"seller/product/"+id,{},function(data) {
		$("#Layer_products_Container").html(data);
		  // Set the effect type
	    var effect = 'slide';

	    // Set the options for the effect type chosen
	    var options1 = { direction: 'right' };
	    var options2 = { direction: 'left' };

	    // Set the duration (default: 400 milliseconds)
	    var duration1 = 500;
	    var duration2 = 500;
	    $('#Layer_products').hide("slide", {direction: "left" }, 1000);
	    $('#products').show("slide", { direction: "right" }, 1000);
	    //$('#products').toggle(effect, options1, duration1);
	   // $('#Layer_products').toggle(effect, options2, duration2);
		
		/*ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');*/
	},'html');
}
function productDetail(id) {
	$.get(base_url+"product/detail/"+id,{},function(data) {
		$("#details_Container").html(data);
		ShowObjectWithEffect('Layer_products', 0, 'slideright', 500, 'swing');
		ShowObjectWithEffect('Layer_details', 1, 'slideleft', 500, 'swing');
	},'html');
}
function productListBySubCategory(id, busi_id) {
	$.get(base_url+"product/subcategory/"+id+"/"+busi_id,{},function(data) {
		$("#Layer_products_Container").html(data);
		ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');
	},'html');
}
function productListByMainProduct(id, busi_id) {
	$.get(base_url+"product/mainproduct/"+id+"/"+busi_id,{},function(data) {
		$("#Layer_products_Container").html(data);
		ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');
	},'html');
}
function productListBySubProduct(id, busi_id) {
	$.get(base_url+"product/subproduct/"+id+"/"+busi_id,{},function(data) {
		$("#Layer_products_Container").html(data);
		ShowObjectWithEffect('Layer_details', 0, 'slideleft', 500, 'swing');
		ShowObjectWithEffect('Layer_products', 1, 'slideright', 500, 'swing');
	},'html');
}
function searchProducts() {
	var url = "<?php echo base_url();?>products?keyword="+$("#SiteSearch1").val();
	var win = window.open(url, '_blank');
	win.focus();
}
function addToItemToCart(id) {
	$.post(base_url+"additemtocart",{product_id: id},function(data) {
		$("#msg_cont").html(data.msg);
		ShowObject('Layer99', 1);
	},'json');
}
function likeProduct(id) {
	$.get(base_url+"desksite/product/like/"+id,{},function(data) {
		if(data.status == 1) {
			$("#msg_cont").html(data.msg);
		} else {
			$("#msg_cont").html(data.msg);
		}
		ShowObject('Layer99', 1);
	},'json');
}
function submitContactForm() {
	<?php if(!empty($tsuserid)) { ?>
		<?php if($tscategory_id != 3) { ?>
			$("#msg_cont").html("We have recorded your inquiry.");
			ShowObject('Layer99', 1);
			ShowObjectWithEffect('Layer216', 0, 'slideleft', 500, 'swing');
		<?php } else { ?>
			<?php if($contact_details[0]['accept_offer'] == 1 && $contact_details[0]['accept_email'] == 1 && $contact_details[0]['step'] == 2) { ?>
				$("#msg_cont").html("We have recorded your inquiry.");
				ShowObject('Layer99', 1);
				ShowObjectWithEffect('Layer216', 0, 'slideleft', 500, 'swing');
			<?php } else if($contact_details[0]['step'] < 2) { ?>
				$("#msg_cont").html("Sorry.. You have to create you Desksite to send posts or communicate with our members.. It\'s so easy .. just follow the steps shown here-under:<br> 1. Login and click on your profile image, then select Continue.<br> 2. Complete your registration till we create your Station.<br> 3. In " My Station" click on " My Desksite" and follow the steps to build it.");
				ShowObject('Layer99', 1);
			<?php } else if($contact_details[0]['accept_offer'] == 0 || $contact_details[0]['accept_email'] == 0) { ?>
				$("#msg_cont").html('Oops.. You are not able to sent a post.. It seems that you have turned the features (Receive Elite Manufactures Offers & Members contact request) OFF.. Please go to " My Station", then click on "Tools" icon, and select " Control Pannel", then Turn these features ON.');
				ShowObject('Layer99', 1);
			<?php } ?>
		<?php } ?>
	<?php } else { ?>
		$("#msg_cont").html("Please login to contact this seller.");
		ShowObject('Layer99', 1);
	<?php } ?>
}
function openChatWithBuyer(seller_id,accept_chat=true) {
	<?php if(!empty($tsuserid)) { ?>
		<?php if($tscategory_id == 3) { ?>
			<?php if($contact_details[0]['accept_chat'] == 1) { ?>
				jqcc.cometchat.chatWith(seller_id);
        		document.getElementById('cometchat_chatboxes').style.right='0px';
			<?php } else { ?>
				$("#msg_cont").html('Oops.. It seems that you have turned this feature OFF.. Please go to “ My Station”, then click on “Tools” icon, and select “ Control Panel”, then Turn it ON….');
				ShowObject('Layer99', 1);
			<?php } ?>
		<?php } else { ?>
			jqcc.cometchat.chatWith(seller_id);
        	document.getElementById('cometchat_chatboxes').style.right='0px';
		<?php } ?>
	<?php } else { ?>
		$("#msg_cont").html('LOGIN TO CHAT');
		ShowObject('Layer99', 1);
	<?php } ?>
}
function openGeneralEnquiry(id) {
	<?php if(!empty($tsuserid)) { ?>
		<?php if($tscategory_id != 3) { ?>
			popupwnd('<?php echo base_url();?>desksite/general_enquiry/'+id,'no','no','no','no','no','no','200','50','1055','680');
		<?php } else { ?>
			<?php if($contact_details[0]['accept_offer'] == 1 && $contact_details[0]['accept_email'] == 1 && $contact_details[0]['step'] == 2) { ?>
				popupwnd('<?php echo base_url();?>desksite/general_enquiry/'+id,'no','no','no','no','no','no','200','50','1055','680');
			<?php } else if($contact_details[0]['step'] < 2) { ?>
				$("#msg_cont").html("Sorry.. You have to create you Desksite to send posts or communicate with our members.. It\'s so easy .. just follow the steps shown here-under:<br> 1. Login and click on your profile image, then select Continue.<br> 2. Complete your registration till we create your Station.<br> 3. In " My Station" click on " My Desksite" and follow the steps to build it.");
				ShowObject('Layer99', 1);
			<?php } else if($contact_details[0]['accept_offer'] == 0 || $contact_details[0]['accept_email'] == 0) { ?>
				$("#msg_cont").html('Oops.. You are not able to sent a post.. It seems that you have turned the features (Receive Elite Manufactures Offers & Members contact request) OFF.. Please go to " My Station", then click on "Tools" icon, and select " Control Pannel", then Turn these features ON.');
				ShowObject('Layer99', 1);
			<?php } ?>
		<?php } ?>
	<?php } else { ?>
		$("#msg_cont").html("Please login to send inquiry.");
		ShowObject('Layer99', 1);
	<?php } ?>
}
$("a[data-rel='prettyPhoto_SlideShow311[SlideShow311]']").attr('rel', 'prettyPhoto_SlideShow311[SlideShow311]');
$("a[rel^='prettyPhoto_SlideShow311']").prettyPhoto({theme:'facebook',social_tools:false});
$("a[data-rel='prettyPhoto_SlideShow312[SlideShow312]']").attr('rel', 'prettyPhoto_SlideShow312[SlideShow312]');
$("a[rel^='prettyPhoto_SlideShow312']").prettyPhoto({theme:'facebook',social_tools:false});
</script>
<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>

