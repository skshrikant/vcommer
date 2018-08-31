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
							<a onclick="chat_with(<?php echo $business['user_id'];?>,<?php echo $business['accept_chat'];?>)">
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
		      	 	 	<p style="padding-top: 10px;text-align:left;">ISO, SGS, CQC, ICQ, Ce</p>
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
	<div id="Layer120" onmouseleave="ShowObjectWithEffect('Layer120', 0, 'slideup', 500, 'swing');return false;" style="position: absolute;top: 306px;z-index: 500;visibility:hidden; margin-left: 474px;"  class=" boxstyle1">
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
  	<!-- scroll bar -->
      <!-- forth fold -->
      	<?php if(count($products) > 0) { ?>
	  	<div class="row" style="margin:0px;">
	  		<div class="row" style="padding: 15px 0px 0px 0px;margin:5px;">
				<div class="col-md-12 text-left" style="padding: 5px 0px;"><span style="color:#3C3C3C;font-family:Arial;font-size:13px;"><?php  echo $products[0]['mainproduct'];  ?></span></div>
				<div class="col-md-12 text-left" style="margin-left:20px;padding: 5px 0px;"><img src="<?php echo asset_url();?>images/page_location.png" id="Image102" alt="" style="width:16px;"> <span style="color:#4B4B4B;font-family:Arial;font-size:17px;"><strong><?php  echo $products[0]['subproduct'];  ?></strong></span></div>
			</div>
      		<div id="pmyCarousel1">
				<div class="">
					<div class="item active">
						<div class="row">
							<?php foreach ($products as $key=>$featured_product) { ?>
							<div class="col-md-3" onmouseenter="ShowObjectWithEffect('FLayer206-<?php echo $key;?>', 1, 'fade', 500);return false;" onmouseleave="ShowObjectWithEffect('FLayer206-<?php echo $key;?>', 0, 'fade', 500);return false;">
						  		<div class="bgwhite center">
					      			<a href="<?php echo base_url();?>item/details/<?php echo $featured_product['id'];?>/<?php echo $featured_product['busi_id'];?>" class="a1">
							      	 	<?php echo $featured_product['name'];?>
							      	</a>
							      	<p class="a2">
							    	  	<?php echo substr($featured_product['about'],0,120);?> ...
							     	</p>
							     	<img src="<?php echo asset_url();?><?php echo $featured_product['main_image'];?>" alt="" class="productimg">
								   	<p class="a4">Price</p>
									<div class="inline">
							      	   	<p class="a5">USD </p>
							      	   	<p class="a6"><?php echo $featured_product['unit_price'];?>.00</p>
						      	  	</div>
						      	   	<p class="a4">Min. Order: <?php echo $featured_product['quantity'];?> <?php echo $featured_product['unit'];?>    </p>
						      	   	<div class="inline">
							      	   	<p>Rate</p>
							      	   	<img src="<?php echo asset_url();?>images/rate.png" alt="" class="margin2">
							      	  	<p>4.5 of 5 </p>
						      	 	</div>
						      	 	<div id="FLayer206-<?php echo $key;?>" style="position: absolute;text-align: left;visibility: visible;left: 39px;top: 115px;width: 250px;height: 250px;z-index: 393;background-color: transparent;display:none;">
										<div class="Layer207" style="position:absolute;text-align:left;left:0px;top:2px;width:250px;height:215px;z-index:382;">
										</div>
										<div id="wb_Text437" style="position:absolute;left:102px;top:138px;width:80px;height:16px;z-index:383;text-align:left;">
											<span style="background-color:#FFFFFF;color:#3C3C3C;font-family:Arial;font-size:13px;">DETAILS</span>
										</div>
										<div id="RollOver31" style="position:absolute;left:98px;top:74px;overflow:hidden;width:60px;height:60px;z-index:384">
											<a href="<?php echo base_url();?>item/details/<?php echo $featured_product['id'];?>/<?php echo $featured_product['busi_id'];?>" target="_blank">
												<img class="hover" alt="" src="<?php echo asset_url();?>images/view-detailsc.png">
												<span><img alt="" src="<?php echo asset_url();?>images/view-detailsb.png"></span>
											</a>
										</div>
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
      		<?php if(count($products) > 4) { ?>
		  	<a class="left carousel-control" href="#myCarousel1" data-slide="prev">
		     	<img src="<?php echo asset_url();?>images/previoustxt0blk.png"/>
		    </a>
		    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
		    	<img src="<?php echo asset_url();?>images/nexttxt0blk.png"/>
		    </a>
		    <?php } ?>
	  	</div>
	  	<?php } ?>
	  	<?php if(count($products) <= 0) { ?>
	  	<div style="height:700px;">
			<br><br><br><br>
			<h3>Opps!! seller have not added products for this category yet.</h3>
			<br><br><br><br>
		</div>
		<?php } ?>
      	<!-- forth fold -->
       	<!-- fifth fold end-->
      	<!-- seventh fold end -->
</div>
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
function likeMyVideo(id,type,likeid) {
	$.get(base_url+"likevideo/"+id,{ type: type},function(data) {
		if(data.status == 1) {
			var likes = parseInt($("#"+likeid).html());
			likes = likes + 1;
			$("#"+likeid).html(likes);
		}
		$("#msg_cont").html(data.msg);
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
		$("#msg_cont").html('LOGIN TO CAHT');
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
