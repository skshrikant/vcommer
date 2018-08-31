
<div id="body">
<!-- fixed header starts -->
 		<div class="container-fluid top-div">
            <ul class="nav navbar-nav navbar-left top-nav">
                <li class="inline"><a href="#" onclick="ShowObjectWithEffect('Layer106', 1, 'fold', 500, 'easeOutBounce');return false;"><img src="<?php echo asset_url(); ?>images/img0235.png" id="Image25" alt="" class="imgus"></a></li>
                <li class="inline"><a href="#" onclick="ShowObjectWithEffect('Layer106', 1, 'fold', 500, 'easeOutBounce');return false;"><span class="navtrd1">TRD</span><span class="navtrd2">STATION</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right top-nav">
                <li><a href="#" class="headerMenu" style="padding-right: 0px;">GOOD LUCK</a></li>
                
                <?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
                     <li><a data-toggle="modal" style="color:#FFFFFF;font-family:Georgia;font-size:15px;">Tang Lee</a></li>
                <?php }else { ?>
                     <li><a data-toggle="modal" style="color:#FFFFFF;font-family:Georgia;font-size:15px;"><?php echo $tsprefix."  ".$tsusername; ?></a></li>
                <?php  } ?>
                <li class="dropdown ">
                    <a href="#" onclick="ShowObjectWithEffect('Layer29', 1, 'fold', 300);return false;">
                       <?php if ($profile_img == '') { ?>
							 <img src="<?php echo asset_url(); ?>images/rseller2.png" id="Image24" alt="" class="img35">
	                    <?php } else { ?>
	                        <img src="<?php echo asset_url().$profile_img?>" id="Image24" alt="" class="img35">
	                    <?php } ?>
                    </a>
                </li>
                <div id="Layer29" onmouseleave="ShowObjectWithEffect('Layer29', 0, 'fold', 300);return false;">
                    <div id="wb_CssMenu7">
                        <ul>
                            <li class="firstmain"><a href="#" target="_self">Account</a>
                            </li>
                            <li><a href="#" target="_self">Membership</a>
                            </li>
                            <li><a href="#" target="_self">Control&nbsp;Panel</a>
                            </li>
                            <li><a href="#" target="_self">Logout</a>
                            </li>
                        </ul>
                        <br>
                    </div>
                </div>
            </ul>
        </div>
        <!-- fixed header ends -->
        <!-- navbar starts -->
            <nav class="navbar" style="z-index: 5000;visibility:hidden;position:absolute" id="Layer106" onmouseleave="ShowObjectWithEffect('Layer106', 0, 'fold', 500);return false;">
                <div id="Layer106_Container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="row" style="padding-top:1px;padding-right:1px;">
                        <div class="col-lg-2 col-sm-4 logo">
                            <div style="color:#E8AD8F;font-family:Georgia;font-size:12px;">WELCOME TO THE</div>
                            <div style="color:#FFFFFF;font-family:Arial;font-size:27px;margin-top:35px;">TRD</div>
                            <div style="color:#FFFFFF;font-family:Impact;font-size:48px;letter-spacing:0.07px;margin-top:-15px;">STATION</div>
                            <div style="color:#E8AD8F;font-family:Arial;font-size:12px;margin-top:-7px;">The new ear of ecommerce</div>
                        </div>
                        <div class="col-lg-4 col-sm-8" style="background:url(assets/images/ts/homeheader0.jpg) no-repeat center center; background-size:100% 100%; height:235px;">
                        </div>
                         <div class="col-lg-6 col-sm-12">
                            <div class="row open-div1 bgwhite" style="position: relative; min-height: 235px;">
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="col-xs-11">
                                    <ul class="nav navbar-nav trd-nav">
                                        <li class=" col-sm-2 col-xs-6">
                                          <a href="<?php echo base_url();?>"><img src="assets/images/ts/Homekit.png " style="width: 50px; "><h5>Home</h5></a></li>
										<li class="col-sm-2 col-xs-6 ">
										       <a href="<?php echo base_url();?>seller"><img src="assets/images/ts/seller.png" style="width: 50px;"><h5>Sellers</h5></a>
			                            </li>
			                            <li class="col-sm-2 col-xs-6">
			                                   <a href="<?php echo base_url();?>products"><img src="assets/images/ts/products.png " style="width: 50px; "><h5>Products</h5></a>
										</li>
										<li class="col-sm-2 col-xs-6 ">
											   <?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
											   		<a href="javascript:login_message()">
											   <?php }else{ ?>
											   		<a href="<?php echo base_url();?>b-station">
											   <?php } ?>
											   <img src="assets/images/ts/trade.png" style="width: 50px;"><h5>B-Station</h5></a>
			                             </li>
			                             <li class="col-sm-2 col-xs-6">
			                                   <a href="<?php echo base_url();?>pro-video"><img src="assets/images/ts/vidtube0.png" style="width: 50px;"><h5>Pro-Videos</h5></a>
			                              </li>
										  <li class="col-sm-2 col-xs-6 ">
												   <a href="<?php echo base_url();?>buyer"><img src="assets/images/ts/buyer.png" style="width: 50px;"><h5>Buyers</h5></a>
				                          </li>
			                               <li class="col-sm-2 col-xs-6">
			                                    <a href="<?php echo base_url();?>shipper"><img src="assets/images/ts/shipper.png " style="width: 50px;"><h5>Shippers</h5></a>
			                               </li>
										   <li class="col-sm-2 col-xs-6 ">
										   	<?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
											   		<a href="javascript:login_message()">
											   <?php }else{ ?>
											   		<a href="<?php echo base_url();?>stock-goods">
											   <?php } ?>
												<img src="assets/images/ts/stock.png" style="width: 50px;"><h5>Stock Goods</h5></a>
			                                </li>
			                                <li class="col-sm-2 col-xs-6">
			                                	<?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
											   		<a href="javascript:login_message()">
											   <?php }else{ ?>
											   		<a href="<?php echo base_url();?>community">
											   <?php } ?>
			                                    <img src="assets/images/ts/CommMember.png " style="width: 50px; "><h5>Community</h5></a>
			                                </li>
											<li class="col-sm-2 col-xs-6 ">
												<?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
											   		<a href="javascript:login_message()">
											   <?php }else{ ?>
											   		<a href="<?php echo base_url();?>my-alert" data-toggle="modal" data-target=".bs-example-modal-lg">
											   <?php } ?>
												<img src="assets/images/ts/Alerts1.png" style="width: 50px;"><h5>My Alerts</h5></a>
			                                </li>
                                    </ul>
                                </div>
                                <div class="reminder-div">
                                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 myalert" style="padding-top: 30px; display: none;">
                                        <h4 style="color: #ccc; text-align: center;">TRD STATION ALERTS BOX</h4>
                                        <p class="text-center">
                                            <img src="assets/images/ts/Alerts1.png" style="display: inline-block">
                                        </p>
                                        <p class="text-center">You Have Received A New Alert</p>
                                        <p style="color: #FF3033; text-align: center;">Add Request</p>
                                    </div>
                                    <a href="#" class="menu-arrow"><img src="assets/images/ts/img0020.png"><img src="assets/images/ts/img0020.png"></a>
                                    <a href="#" class="menu-arrow2"><img src="assets/images/ts/img0020.png"><img src="assets/images/ts/img0020.png"></a>
                                </div>
                                <!-- /.navbar-collapse -->
                            </div>
                        </div>
                        
                    </div>
                </div>
            </nav>
            <!-- navbar  ends -->
     <div class="row center bgwhite"><br>
	     <h2 class="font1 ">Shijiazhuang Chunse Apparel Co., Ltd.</h2><br>
	     <div class="row">
		     <div class="col-md-3 col-sm-3">
		     	<img  src="<?php echo asset_url();?>images/img0512.png" id="Shape85" alt="" style="width:100px;height:86px;">
		     </div>
		     <div class="col-md-6 col-sm-6">
		     	<p class="font2"><br>This modern, compact sofa is great for smaller spaces or as a second sofa. And in a cool aston grey - it'll go with any colour scheme. It's the subtle details that makes the Hugo stand out - like the French piping on the seams and the contrast side cushions. With thick foam cushioning, durable fabric upholstery and a solid wood frame this sofa will stay comfy and clean for longer. Keep it simple with this sofa or go for a more versatile option with the sofa bed. And for even more options there's the <br>4 in 1.</p>
		     </div>
		     <div class="col-md-2 col-sm-2">
			      <img  src="<?php echo asset_url();?>images/black-horse.png" id="Image105" alt="" class="himg"><br>
			      <span class="font3"><strong>Black Horse </strong>MEMBER</span><br>
			      <img  src="<?php echo asset_url();?>images/Guarantee.png" id="Image89" alt="" aria-describedby="ui-tooltip-0" class="img25">
			      <img  src="<?php echo asset_url();?>images/trusted.png" id="Image104" alt="" aria-describedby="ui-tooltip-1"  class="img25">
			  </div>
			
			  </div>
	     </div>
   <!-- search and navigation bar -->
		   <div class="bg2">
			   <div class="row">
			   		<div class="col-md-offset-3 col-md-5">
			   		 	<a href="" class="nav1">
			   		 		Home
			   		 	</a>
			   		 	<a href="" class="nav1"  onclick="ShowObjectWithEffect('Layer98', 1, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer95', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 0, 'slidedown', 500, 'swing');return false;">
			   		 		About
			   		 	</a>
			   		 	<a href=""  class="nav1" onclick=" ShowObjectWithEffect('Layer98', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer95', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 1, 'slideup', 500, 'swing');return false;">
			   		 	    Products
			   		 	</a>
			   		 	<a href=""  class="nav1" onclick="ShowObjectWithEffect('Layer95', 1, 'slideup', 500, 'swing');ShowObjectWithEffect('Layer98', 0, 'slidedown', 500, 'swing');ShowObjectWithEffect('Layer120', 0, 'slidedown', 500, 'swing');return false;">
			   		        Contact
			   		    </a>
			   		</div>
			   		<div class="col-md-3">
			   			<img src="<?php echo asset_url();?>images/i_145.gif" id="Image5" alt="" title="Save as PDF" class="img26">
			   			<img src="<?php echo asset_url();?>images/folder-print.png" id="Image6" alt="" title="Print this page"  class="img26">
			   		</div>
			   </div>
		   </div>
    <!-- search and navigation bar -->
     <!-- about us popup bar -->
      <div id="Layer98">
      
  <img src="<?php echo asset_url();?>images/img0568.png" id="Shape20" alt="" class="aro">
      	 <div class="bg3">
      	 	 <div class="row">
      	 	 	<div class="col-md-6 left">
	      	 	 	<br><br>
	      	 	 	<p class="about1"><strong>About Us</strong></p>
	      	 	 	<p class="about2">Seven Seas Logistics Co. was established in 2002 responding to the growing ofcommercial and project market, from the time of established, the company was catering cargo transportation needs of local market as well as of international market to serve the shipping movement all over the world... </p>
	      	 	 	<br><br>
      	 	 	    <div class="col-sm-4 about3">
      	 	 	    <br><br>
	      	 	 	<p class="about1"><strong>Business Information</strong></p>
	      	 	 	<br>
	      	 	 	<p>Business Type</p>
	      	 	 	<p>Main Product</p><br>
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
      	 	 	    <p>Manufacture</p>
      	 	 	    <p>Leather Sofa, Fabric Sofa, Chairs, Classic Chairs, Library, Tea Table</p>
      	 	 	    <p>Africa, Middel East</p>
      	 	 	    <p>1991</p>
      	 	 	    <p>11-15 Person</p>
      	 	 	    <p>China</p>
      	 	 	    <p>Fujian</p>
      	 	 	    <br><br><br>
      	 	 	    <p>Black Horse Member</p>
      	 	 	    <p>30000</p>
      	 	 	    <p>85%</p>
      	 	 	    <br><br><br>
      	 	 	    <p>Below 1000 Square Meter</p>
      	 	 	    <p>6</p>
      	 	 	    <p>OEM, ODM, Our Own Brand ( Hotii)</p>
      	 	 	    </div>
      	 	 	</div>
      	 	 	<div class="col-md-6"><br><br>
      	 	 		<a href="#" onclick="ShowObjectWithEffect('Layer98', 0, 'slideup', 500);return false;">
	      	 	 	 	<img  src="<?php echo asset_url();?>images/img0413.gif" id="Shape26" alt="" class="img33">
	      	 	 	</a>
      	 	 	     <img class="image"  src="<?php echo asset_url();?>images/1.jpg" alt="" title="" style="float: right;">
	      	 	 	
	      	 	 	<div class="col-md-3">
		      	 	 	<br><br>
		      	 	 	<p class="about1"><strong>Certificates</strong></p>
		      	 	 	
		      	 	 	<p class="about1"><strong>License</strong></p>
		      	 	 	
		      	 	 	<p class="about1"><strong>Verification</strong></p>
		      	 	 	</div>
		      	 	 	<div class="col-md-5 font3">
		      	 	 	<br><br>
		      	 	 	<p>ISO, SGS, CQC, ICQ, Ce</p>
		      	 	 	<p>Expor License</p>
		      	 	 	<p>Done by ( Povided later ) ..</p>
		      	 	 	<p class="font2">Back to Company Gallery</p>
		      	 	</div>
	      	 	 	<div class="col-md-3">
	      	 	 	   <br><br>
		      	 	 	<p>view</p>
		      	 	 	<p>view</p>
		      	 	 	<p>view</p>
		      	 	 	<p>view</p>
	      	 	 	</div>
	      	 	</div>
      	 	 </div>
      	 </div>
    
     </div>
     
     
     
      <!-- about us bar end-->
      <!-- product popup  -->
<div id="Layer120" onmouseleave="ShowObjectWithEffect('Layer120', 0, 'slideup', 500, 'swing');return false;" style="visibility:hidden;    margin-left: 474px;
"  class=" boxstyle1">

<img src="<?php echo asset_url();?>images/img0568.png" id="Shape20" alt="" class="aro">
<div id="wb_desktop_menu">
			                <ul>
			                    <li class="firstmain"><a class="withsubmenu" href="#" target="_self">Indoors&nbsp;Furniture</a>
			                        <ul>
			                            <li class="firstitem"><a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Fabric&nbsp;Sofas</a>
			                            </li>
			                            <li><a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Leather&nbsp;Sofas</a>
			                            </li>
			                            <li><a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">New&nbsp;Style</a>
			                            </li>
			                            <li><a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Bed&nbsp;Rooms</a>
			                            </li>
			                            <li><a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Tabels</a>
			                            </li>
			                            <li class="lastitem"><a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Libraries</a>
			                            </li>
			                        </ul>
			                    </li>
			                    <li><a class="withsubmenu" href="#" target="_self">Outdoors</a>
			                        <ul>
			                            <li class="firstitem"><a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Wooden&nbsp;Seats</a>
			                            </li>
			                            <li><a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Cradels</a>
			                            </li>
			                            <li><a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Garden&nbsp;Tabels</a>
			                            </li>
			                            <li class="lastitem"><a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">More</a>
			                            </li>
			                        </ul>
			                    </li>
			                     <li><a href="#" target="_self">More</a>
			                    </li>
			                     <li><a href="#" target="_self">More</a>
			                    </li>
			                    
			                    <li><a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">New&nbsp;Arrivals</a>
			                    </li>
			                    <li><a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Hot&nbsp;Sales</a>
			                    </li>
			                   
			                </ul>
			                <br>
			            </div>
</div>

      
      <!-- product popup bar end -->
      <!-- contact popup bar  -->
  <div id="Layer95" onmouseleave="ShowObjectWithEffect('Layer95', 0, 'slideup', 500, 'swing');return false;" >
  <img src="<?php echo asset_url();?>images/img0568.png" id="Shape20" alt="" class="aro">
      <div class="row contact6">
      		<div class="col-md-6">
      			<div class="col-sm-6">
      				<div class="whitebox">
	      				<p class="contact1">Information</p>
	      				<p class="contact1" >Contact us</p>
	      				<p class="contact1">Information</p>
      				</div>
      			</div>
      			<div class="col-sm-6">
	      			 <p class="about1">Contact person</p>
	      			 <img alt="" id="PhotoGallery3_img0" src="<?php echo asset_url();?>images/tn_sell1.png"><br>
	      			 <p class="contact2"><strong>Jack Lee</strong></p>
	      			 <p class="contact3"><strong>jacklee@hotmail.com</strong><p>
	      		</div>
      		</div>
      		<div class="col-md-6 left">
      			
      			<h3 class="contact4">MAIN OFFICE</h3>
	      			<div class="whitebox">
	      				<div class="col-sm-7">
	      					<p>Office No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</p>
	      					<div class="flex">
	      					<p class="about1"> Email</p><p>zaki-hazem250@hotmail.com</p></div>
	      					<div class="flex">
	      					<p class="about1"> Web</p><p>www.udtalks.com</p>
	      					</div>
	      				</div>
	      				<div class="col-sm-4">
		      				<p class="about1"> Tel</p>
		      				<p>0086 028665384</p>
		      				<p>0086 028665384</p>
	      				</div>
	      			 </div>
	      			
	      			<h3 class="contact4">MAIN OFFICE</h3>
	      			<div class="scrollbox">
	      			<div class="whitebox">
	      			
	      				<div class="col-sm-7">
	      					<p>Office No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</p>
	      					<div class="flex">
	      					<p class="about1"> Email</p><p>zaki-hazem250@hotmail.com</p>
	      					</div>
	      					<div class="flex">
	      					<p class="about1" > Web</p><p>www.udtalks.com</p>
	      					</div>
	      				</div>
	      				<div class="col-sm-4">
		      				<p class="about1"> Tel</p>
		      				<p>0086 028665384</p>
		      				<p>0086 028665384</p>
	      				</div>
	      			</div>
	      			<div class="whitebox">
	      			
	      				<div class="col-sm-7">
	      					<p>Office No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</p>
	      					<div class="flex">
	      					<p class="about1"> Email</p><p>zaki-hazem250@hotmail.com</p>
	      					</div>
	      					<div class="flex">
	      					<p class="about1" > Web</p><p>www.udtalks.com</p>
	      					</div>
	      				</div>
	      				<div class="col-sm-4">
		      				<p class="about1"> Tel</p>
		      				<p>0086 028665384</p>
		      				<p>0086 028665384</p>
	      				</div>
	      			</div>
	      			<div class="whitebox">
	      			
	      				<div class="col-sm-7">
	      					<p>Office No. 250, Hengsheng Building No. 203, C Zuo, HuanshiZhong Road</p>
	      					<div class="flex">
	      					<p class="about1"> Email</p><p>zaki-hazem250@hotmail.com</p>
	      					</div>
	      					<div class="flex">
	      					<p class="about1" > Web</p><p>www.udtalks.com</p>
	      					</div>
	      				</div>
	      				<div class="col-sm-4">
		      				<p class="about1"> Tel</p>
		      				<p>0086 028665384</p>
		      				<p>0086 028665384</p>
	      				</div>
	      			</div>
      			
      			</div>
      		</div>
         </div>
      </div>
      <!-- contact popup bar end -->
    
    
<div class="margintop">
<div class="col-lg-10">

<div id="product_details" class="b-gray">
	<?php foreach ($Productdetails as $product) {?>
		<div class="row">
			<ol class="breadcrumb">
			  <li><a href="javascript:productBySeller(<?php echo $product['busi_id'];?>);"> <img src="<?php echo asset_url()?>images/img1070.png" id="Shape17" alt="" width="10px"> Same by this seller</a></li>
			  <li class="pull-right">
				<a href="javascript:window.location.reload()" >
					<img src="<?php echo asset_url();?>images/i_145.gif" class="pull-right" width="20px" alt="" title="Save as PDF">
				</a>
			 </li>
			 <li class="pull-right">
			 	<a href="javascript:window.print()">
					<img src="<?php echo asset_url()?>images/folder-print.png" class="pull-right" width="20px" alt="" title="Print this page">
				</a>
			 </li>
			</ol>
		</div>
		<div class="panel panel-default">
		  <div class="panel-body">
		    <div class="col-md-6">
			   <div class="row"> 
			   		<div class="row">
			    		<p class="product-braedcrumbs">
				    		<a href="<?php echo base_url();?>desksite">Desktop</a> 
					    	&gt; <a href="javascript:productListBySubCategory(<?php echo $product['subcategory_id'];?>,<?php echo $product['busi_id'];?>)" > <?php echo $product['subcategory']?></a> 
							&gt;<a href="javascript:productListByMainProduct(<?php echo $product['mainproduct_id'];?>,<?php echo $product['busi_id'];?>)"  > <?php echo $product['mainproduct']?></a>
							&gt; <a href="javascript:productListBySubProduct(<?php echo $product['mainproduct_id'];?>,<?php echo $product['busi_id'];?>)" > <?php echo $product['subproduct']?> </a>&gt;
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
    			<hr />
    			<div class="row">
		    		<div class="col-md-4" ><p>Port</p></div>
		    		<div class="col-md-8" ><p>Ningbo</p></div>
    			</div>
	    		<div class="row">
		    		<div class="col-md-4" ><p>Accepted Payment</p></div>
		    		<div class="col-md-8" ><p>T/T, LC ...</p></div>
	    		</div>
	    		<hr />
	    		<div class="row pull-center">
	    			<div class="share-icons"><a href=""><i class="fa fa-comments" aria-hidden="true"></i></a></div>
	    			<div class="share-icons"><a href=""><i class="fa fa-file-text-o" aria-hidden="true"></i></a></div>
	    			<div class="share-icons"><a href=""><i class="fa fa-star" aria-hidden="true"></i></a></div>
	    			<div class="share-icons"><a href=""><i class="fa fa-shopping-basket" aria-hidden="true"></i></a></div>
	    			<div class="share-icons"><a href=""><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></div>
	    			<div class="share-icons"><a href=""><i class="fa fa-share-alt" aria-hidden="true"></i></a></div>
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

<div id="products">
	<div id="Layer_products_Container">
	</div>
</div>
</div>
<div class="col-lg-2">
<div class="bg6">
 <p class="lg1">Seller Advantages</p>
 <p data-toggle="collapse" data-target="#demo" class="lg3">Product Guarantee <img alt="" src="<?php echo asset_url();?>images/advantages_arrow.png"></p>
 <div id="demo" class="collapse lg2">
   The Seller provides a guarantee on this product, subjected to the following terms: CHANGE THE NOT VALID UNITS ( SHIPPING COST CARRIED BY BOTH PARTIES),                                                                                                             
  </div>
  <p data-toggle="collapse" data-target="#demo1" class="lg3">Sample <img alt="" src="<?php echo asset_url();?>images/advantages_arrow.png"></p>
 <div id="demo1" class="collapse lg2">
  The seller provides a free sample, shipping fees to be paid by customer.                      </div>
 

 
 <p data-toggle="collapse" data-target="#demo2" class="lg3">Product Certificates <img alt="" src="<?php echo asset_url();?>images/advantages_arrow.png"></p>
 <div id="demo2" class="collapse lg2">
 The seller able to issue the following Products Certificates: CE, SASO, ICQ, CQC, SGS,                                                                          </div>
 <p data-toggle="collapse" data-target="#demo3" class="lg3">Export and Shipping<img alt="" src="<?php echo asset_url();?>images/advantages_arrow.png"></p>
 <div id="demo3" class="collapse lg2">
The seller has an export license and able to export and ship the goods under his company license.                                                                                                                                   </div>
 <br>
  <p class="lg1">Seller Info.</p>
  <p class="lg7">Business Type</p>
  <p class="lg8">Manufecture</p><br>
   <p class="lg7">Contact Person</p>
  <p class="lg8">Mr. Yang</p>
  <p class="lg8">General Manager</p>
  <img src="<?php echo asset_url();?>images/img1125.png" id="Shape26" alt="" style="width:120px;height:120px;    margin: 20px 0px;"><br>
  <p class="lg7">Main Market</p>
  <p class="lg8">Africa and Middel East</p>
    <p class="lg7">Main Product</p>
  <p class="lg8">Leather Sofa, Fabric Sofa, Chairs, Classic Chairs ,Library, Tea Table</p>
  <p class="lg7">Year of Establish</p>
  <p class="lg8">1991</p>
  <p class="lg7">No. of Employee</p>
  <p class="lg8">11-12 People</p>
  <p class="lg7">Country</p>
  <p class="lg8">China</p>
</div>
</div>
</div> 
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

</script>
<script>
$(document).ready(function()
{
   $("a[data-rel='PhotoGallery3']").attr('rel', 'PhotoGallery3');
   $("a[rel^='PhotoGallery3']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $(".SlideMenu1_Folder div").click(function()
   {
      if ($(this).parent().find('ul').is(':hidden'))
      {
         $(this).parent().find('ul').slideDown();
      }
      else
      {
         $(this).parent().find('ul').slideUp();
      }
   });
   $("a[data-rel='SlideShow3']").attr('rel', 'SlideShow3');
   $("a[rel^='SlideShow3']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery5']").attr('rel', 'PhotoGallery5');
   $("a[rel^='PhotoGallery5']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery6']").attr('rel', 'PhotoGallery6');
   $("a[rel^='PhotoGallery6']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery2']").attr('rel', 'PhotoGallery2');
   $("a[rel^='PhotoGallery2']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   var jQueryToolTip2Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it on each product in ( Product Details Page)..</span>',
      items: '#wb_Image89',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image89").tooltip(jQueryToolTip2Opts);
   var jQueryToolTip1Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Verified logo is only ( strictly ) submitted to the Seller / Shipper who has been passed a strict verified check and audit procedures performed by leading inspection, verification, testing and certification third party companies, includes company licenses, product certificates and onsite check.<br>To check Sellers / Shipper\'s verification certificate, click on Seller\'s (About Tab) &gt; View Verification.<br></span>',
      items: '#wb_Image104',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image104").tooltip(jQueryToolTip1Opts);
});
</script>

<script>
function Validatecontact(theForm)
{
   var regexp;
   if (theForm.TextArea2.value.length < 10)
   {
      alert("Please enter at least 10 characters in the \"TextArea2\" field.");
      theForm.TextArea2.focus();
      return false;
   }
   if (theForm.TextArea2.value.length > 2000)
   {
      alert("Please enter at most 2000 characters in the \"TextArea2\" field.");
      theForm.TextArea2.focus();
      return false;
   }
   return true;
}
</script>
<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>
<script>
$(document).ready(function()
{
   $("#Layer27").stickylayer({orientation: 1, position: [0, 0], delay: 0});
   $("#Layer273").stickylayer({orientation: 1, position: [0, 30], delay: 0});
   $("#Layer35").stickylayer({orientation: 1, position: [0, 30], delay: 0});
   $("#SlideShow2").slideshow(
   {
      interval: 4000,
      type: 'sequence',
      effect: 'slide',
      direction: 'right',
      pagination: false,
      easing: 'easeInOutSine',
      effectlength: 2000
   });
   $("a[data-rel='SlideShow3']").attr('rel', 'SlideShow3');
   $("a[rel^='SlideShow3']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery5']").attr('rel', 'PhotoGallery5');
   $("a[rel^='PhotoGallery5']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery6']").attr('rel', 'PhotoGallery6');
   $("a[rel^='PhotoGallery6']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery2']").attr('rel', 'PhotoGallery2');
   $("a[rel^='PhotoGallery2']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery3']").attr('rel', 'PhotoGallery3');
   $("a[rel^='PhotoGallery3']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   var Carousel5Opts =
   {
      delay: 6500,
      duration: 300,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      pagination: false,
      start: 0
   };
   $("#Carousel5").carousel(Carousel5Opts);
   $("#Carousel5_back a").click(function()
   {
      $('#Carousel5').carousel('prev');
   });
   $("#Carousel5_next a").click(function()
   {
      $('#Carousel5').carousel('next');
   });
   var Carousel7Opts =
   {
      delay: 50000,
      duration: 300,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      pagination: false,
      start: 0
   };
   $("#Carousel7").carousel(Carousel7Opts);
   $("#Carousel7_back a").click(function()
   {
      $('#Carousel7').carousel('prev');
   });
   $("#Carousel7_next a").click(function()
   {
      $('#Carousel7').carousel('next');
   });
   var Carousel6Opts =
   {
      delay: 15000,
      duration: 300,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      pagination: false,
      start: 0
   };
   $("#Carousel6").carousel(Carousel6Opts);
   $("#Carousel6_back a").click(function()
   {
      $('#Carousel6').carousel('prev');
   });
   $("#Carousel6_next a").click(function()
   {
      $('#Carousel6').carousel('next');
   });
   var Carousel4Opts =
   {
      delay: 10000,
      duration: 500,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      pagination: false,
      start: 0
   };
   $("#Carousel4").carousel(Carousel4Opts);
   $("#Carousel4_back a").click(function()
   {
      $('#Carousel4').carousel('prev');
   });
   $("#Carousel4_next a").click(function()
   {
      $('#Carousel4').carousel('next');
   });
   $("#Layer251").stickylayer({orientation: 2, position: [220, 90], delay: 500});
   var jQueryToolTip1Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Verified logo is only ( strictly ) submitted to the Seller / Shipper who has been passed a strict verified check and audit procedures performed by leading inspection, verification, testing and certification third party companies, includes company licenses, product certificates and onsite check.<br>To check Sellers / Shipper\'s verification certificate, click on Seller\'s (About Tab) &gt; View Verification.<br></span>',
      items: '#wb_Image104',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image104").tooltip(jQueryToolTip1Opts);
   var jQueryToolTip2Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it on each product in ( Product Details Page)..</span>',
      items: '#wb_Image89',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image89").tooltip(jQueryToolTip2Opts);
   $("#SlideShow1").slideshow(
   {
      interval: 8000,
      type: 'sequence',
      effect: 'fade',
      direction: '',
      pagination: false,
      fullscreen: 3,
      effectlength: 1000
   });
   var Carousel3Opts =
   {
      delay: 3000,
      duration: 500,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      pagination: false,
      start: 0
   };
   $("#Carousel3").carousel(Carousel3Opts);
   $("#Carousel3_back a").click(function()
   {
      $('#Carousel3').carousel('prev');
   });
   $("#Carousel3_next a").click(function()
   {
      $('#Carousel3').carousel('next');
   });
   $("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
   $("a[rel^='PhotoGallery1']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   var zindex = 250;
   $("#PhotoGallery1 a").draggable(
   {
      start: function()
      {
         zindex = zindex + 1;
         $(this).css({zIndex:zindex});
      },
      stop: function()
      {
         rotation = Math.floor(Math.random()*15);
         if (Math.floor(Math.random()*11)>5)
         {
            rotation = rotation * -1;
         }
         $(this).data('rotation', rotation);
         $(this).css({webkitTransform:"rotate("+rotation+"deg)",MozTransform:"rotate("+rotation+"deg)",msTransform:"rotate("+rotation+"deg)",transform:"rotate("+rotation+"deg)"});
      }
   });
   $("#Layer216").stickylayer({orientation: 1, position: [70, 60], delay: 0});
   $("a[data-rel='PhotoGallery4']").attr('rel', 'PhotoGallery4');
   $("a[rel^='PhotoGallery4']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   var zindex = 250;
   $("#PhotoGallery4 a").draggable(
   {
      start: function()
      {
         zindex = zindex + 1;
         $(this).css({zIndex:zindex});
      },
      stop: function()
      {
         rotation = Math.floor(Math.random()*15);
         if (Math.floor(Math.random()*11)>5)
         {
            rotation = rotation * -1;
         }
         $(this).data('rotation', rotation);
         $(this).css({webkitTransform:"rotate("+rotation+"deg)",MozTransform:"rotate("+rotation+"deg)",msTransform:"rotate("+rotation+"deg)",transform:"rotate("+rotation+"deg)"});
      }
   });
   var jQueryToolTip3Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Black Horse Member</span>',
      items: '#wb_Image61',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image61").tooltip(jQueryToolTip3Opts);
   var jQueryToolTip4Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it, on each product ( Along with Product Details Page)..<br>Furthermore, Click on &quot; Advantages&quot; icon to view more..</span>',
      items: '#wb_Image94',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image94").tooltip(jQueryToolTip4Opts);
   $("#Layer5").stickylayer({orientation: 4, position: [0, 25], delay: 0});
   searchParseURL();
   $("#Layer58").stickylayer({orientation: 1, position: [70, 50], delay: 0});
   $("a[data-rel='PhotoGallery7']").attr('rel', 'PhotoGallery7');
   $("a[rel^='PhotoGallery7']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   $("a[data-rel='PhotoGallery8']").attr('rel', 'PhotoGallery8');
   $("a[rel^='PhotoGallery8']").slimbox({overlayOpacity: 0.8}, null, function(el){return (this == el)||((this.rel.length > 8)&&(this.rel == el.rel));});
   var Carousel2Opts =
   {
      delay: 3000,
      duration: 500,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      pagination: false,
      start: 0
   };
   $("#Carousel2").carousel(Carousel2Opts);
   $("#Carousel2_back a").click(function()
   {
      $('#Carousel2').carousel('prev');
   });
   $("#Carousel2_next a").click(function()
   {
      $('#Carousel2').carousel('next');
   });
   var Carousel1Opts =
   {
      delay: 3000,
      duration: 500,
      easing: 'linear',
      mode: 'forward',
      direction: '',
      pagination: false,
      start: 0
   };
   $("#Carousel1").carousel(Carousel1Opts);
   $("#Carousel1_back a").click(function()
   {
      $('#Carousel1').carousel('prev');
   });
   $("#Carousel1_next a").click(function()
   {
      $('#Carousel1').carousel('next');
   });
   var Carousel8Opts =
   {
      delay: 3000,
      duration: 500,
      easing: 'swing',
      mode: 'forward',
      direction: '',
      pagination: true,
      pagination_img_default: 'images/page_default.png',
      pagination_img_active: 'images/page_active.png',
      start: 0
   };
   $("#Carousel8").carousel(Carousel8Opts);
   $("#Layer44").stickylayer({orientation: 4, position: [0, 0], delay: 0});
   $("#Layer116").stickylayer({orientation: 8, position: [0, 0], delay: 100});
   $("#Layer106").stickylayer({orientation: 5, position: [0, 0], delay: 0});
   var jQueryToolTip5Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">This seller is a member in your community..</span>',
      items: '#wb_Image76',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image76").tooltip(jQueryToolTip5Opts);
   $("#Layer49").stickylayer({orientation: 4, position: [0, 60], delay: 0});
   $("#Layer28").stickylayer({orientation: 1, position: [0, 4], delay: 0});
   var jQueryToolTip6Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">The Seller Is A Member In Your Community</span>',
      items: '#wb_Image39',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image39").tooltip(jQueryToolTip6Opts);
   var jQueryToolTip7Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Black Horse Member</span>',
      items: '#wb_Image30',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image30").tooltip(jQueryToolTip7Opts);
   var jQueryToolTip8Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">This Seller Is Verified<br>View Seller Desksite And Click On The Same Logo For More Details.</span>',
      items: '#wb_Image32',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image32").tooltip(jQueryToolTip8Opts);
   var jQueryToolTip9Opts =
   {
      hide: true,
      show: true,
      content: '<span style="color:#696969;font-family:Arial;font-size:12px;">Guarantee logo..<br>This seller provides a guarantee on his goods, subjected to certain terms, you can check it on each product in ( Product Details Page)..</span>',
      items: '#wb_Image40',
      position: { my: "right bottom", at: "left top", collision: "flipfit" }
   };
   $("#wb_Image40").tooltip(jQueryToolTip9Opts);
});
function login_message(){
            $("#Layer99 > #Layer99_Container > #wb_Text145 > #msg_cont").html("PLEASE LOGIN TO ACCESS MEMBER AREA.");
            ShowObject('Layer99', 1);
}
</script>