<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script> ​
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
padding :10px;


}
.business-info a{
color: red;
padding :10px;
}
-->
</style>
<div id="body">        
<div class="row center bgwhite1">
	<br>
	<h2 class="font1 "><?php echo $business[0]['company_name'];?></h2><br>
   	<div class="row">
	  	<div class="col-md-3 col-sm-3">
	     	<img  src="<?php echo asset_url();?><?php echo $business[0]['business_logo'];?>" id="Shape85" alt="" style="width:100px;height:86px;">
     	</div>
	   	<div class="col-md-6 col-sm-6">
	     	<p class="font2"><br><?php echo $business[0]['company_introduction'];?></p>
	   	</div>
	   	<div class="col-md-2 col-sm-2">
		  	<img  src="<?php echo asset_url();?>images/black-horse.png" id="Image105" alt="" class="img41"><br>
		   	<span class="font3"><strong>Black Horse </strong>MEMBER</span><br><br>
		  	<div id="Layer251">
				<div id="Layer251_Container">
					<a href="#" onclick="ShowObjectWithEffect('Layer252', 1, 'slideup', 500);return false;">
						<img  src="<?php echo asset_url();?>images/deal_icon.png" id="Image97" alt="" class="img50">
					</a>
					<a href="#" onclick="ShowObjectWithEffect('Layer251', 0, 'pulsate', 500);return false;">
						<img  src="<?php echo asset_url();?>images/img0546.png" id="Image129" alt="" class="imgc">
					</a>
					<div id="Layer252" style="visibility:hidden">
						<div id="Layer252_Container">
							<a href="javascript:popupwnd('./chat_window.php','no','no','no','no','no','no','750','50','440','750')" target="_self">
								<img class="hover" alt=""  src="<?php echo asset_url();?>images/chat_button2.png">
								<span>
									<img alt=""  src="<?php echo asset_url();?>images/chat_button1.png">
								</span>
							</a>
							<a href="">
								<img class="hover" alt=""  src="<?php echo asset_url();?>images/addcommunity_button2.png">
						 		<span>
						 			<img alt=""  src="<?php echo asset_url();?>images/addcommunity_button1.png">
						 		</span>
							</a>
							<a href="">
								<img class="hover" alt=""  src="<?php echo asset_url();?>images/share_button.png">
								<span>
									<img alt=""  src="<?php echo asset_url();?>images/share_button1.png">
						   		</span>
							</a>
							<a href="javascript:popupwnd('./general_inquiry.php','no','no','no','no','no','no','200','50','1055','680')" target="_self">
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
		  	<img  src="<?php echo asset_url();?>images/Guarantee.png" id="Image89" alt="" aria-describedby="ui-tooltip-0" class="img25">
		  	<img  src="<?php echo asset_url();?>images/trusted.png" id="Image104" alt="" aria-describedby="ui-tooltip-1"  class="img25">
		</div>
	</div>
	<a href="<?php echo base_url();?>desksite/<?php echo $busi_id;?>" class="switch">
	  	<img src="<?php echo asset_url();?>images/desktoplogo.png" id="Image49" alt="">MyDesksite
	</a>
</div>
<!-- search and navigation bar -->
<div class="bg2">
	<div class="row">
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
						<input type="text" class="search-box" required="required" name="keyword" placeholder="Search">
					</div>
					<div class="col-sm-2 col-xs-1" style="padding: 0px;">
						<button class="btn btn-block search-btn" type="submit"><span aria-hidden="true" class="glyphicon glyphicon-search"></span></button>
					</div>
				</form>
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
	      	 		<div  class="tab-content">
		      	 		<div id="home1" class="tab-pane fade in active content1">
	      	 	 	     	<img class="image"  src="<?php echo asset_url();?>images/1.jpg" alt="" title="" style="float: right;">
	      	 	 	  	</div>
	      	 	 	 	<div id="menu11" class="tab-pane fade content1 center">
	      	 	 	     	<table>
	      	 	 	     	 	<tbody>
		      	 	 	     	 	<tr>
		      	 	 	     	 		<td>
			      	 	 	     	 		<a href="images/ISO_2000ok.jpg" data-rel="PhotoGallery5" rel="PhotoGallery5">
			      	 	 	     	 			<img alt="" id="PhotoGallery5_img1" src="<?php echo asset_url();?>images/tn_ISO_2000ok.png">
			      	 	 	     	 		</a>
		      	 	 	     	 		</td>
		      	 	 	     	 		<td>
		      	 	 	     	 			<a href="images/ISO_2000ok.jpg" data-rel="PhotoGallery5" rel="PhotoGallery5">
			      	 	 	     	 			<img alt="" id="PhotoGallery5_img1" src="<?php echo asset_url();?>images/tn_ISO_2000ok.png">
			      	 	 	     	 		</a>
		      	 	 	     	 		</td>
		      	 	 	     	 	</tr>
		      	 	 	     	 	<tr>
		      	 	 	     	 		<td>
		      	 	 	     	 			<a href="images/ISO_2000ok.jpg" data-rel="PhotoGallery5" rel="PhotoGallery5">
			      	 	 	     	 			<img alt="" id="PhotoGallery5_img1" src="<?php echo asset_url();?>images/tn_ISO_2000ok.png">
			      	 	 	     	 		</a>
		      	 	 	     	 		</td>
		      	 	 	     	 		<td>
		      	 	 	     	 			<a href="images/ISO_2000ok.jpg" data-rel="PhotoGallery5" rel="PhotoGallery5">
			      	 	 	     	 			<img alt="" id="PhotoGallery5_img1" src="<?php echo asset_url();?>images/tn_ISO_2000ok.png">
			      	 	 	     	 		</a>
		      	 	 	     	 		</td>
		      	 	 	     	 	</tr>
	      	 	 	     	 	</tbody>
	      	 	 	     	</table>
	      	 	 		</div>
	      	 	 	 	<div id="menu21" class="tab-pane fade content1 center">
		      	 	 	   	<a href="images/Certificate_of_Honor2004.jpg" data-rel="PhotoGallery6" rel="PhotoGallery6">
		      	 	 	     	<img alt="" id="PhotoGallery6_img0" src="<?php echo asset_url();?>images/tn_Certificate_of_Honor2004.png">
		      	 	 	   	</a><br>
		      	 	 	   	<a href="images/iso_9001_certification.gif" data-rel="PhotoGallery6" rel="PhotoGallery6">
		      	 	 	    	<img alt="" id="PhotoGallery6_img1" src="<?php echo asset_url();?>images/tn_iso_9001_certification.png">
		      	 	 		</a>
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
		      	 	 <div class="col-md-4 font3">
		      	 	 	<br><br>
		      	 	 	<p>ISO, SGS, CQC, ICQ, Ce</p>
		      	 	 	<p>Expor License</p>
		      	 	 	<p>Done by ( Povided later ) ..</p>
		      	 	 	<p class="font2">Back to Company Gallery</p>
		      	 	</div>
	      	 	 	<div class="col-md-3">
	      	 	 	   	<br><br>
	      	 	 	    <ul class="nav nav-tabs">
		      	 	 		<li class="active contact1"><a data-toggle="tab" href="#home1" >view</a></li>
		      	 	 		<li><a data-toggle="tab" href="#menu11">view</a></li>
		      	 	 		<li><a data-toggle="tab" href="#menu21">view</a></li>
		      	 	 	</ul>
	      	 	 	</div>
	      	 	</div>
      		</div>
    	</div>
	</div>
    <!-- about us bar end-->
   	<!-- product popup  -->
	<div id="Layer120" onmouseleave="ShowObjectWithEffect('Layer120', 0, 'slideup', 500, 'swing');return false;" style="visibility:hidden; margin-left: 474px;"  class=" boxstyle1">
		<img src="<?php echo asset_url();?>images/img0568.png" id="Shape20" alt="" class="aro">
		<div id="wb_desktop_menu">
          	<ul>
              	<li class="firstmain">
                    <a class="withsubmenu" href="#" target="_self">Indoors&nbsp;Furniture</a>
                   	<ul>
                       	<li class="firstitem">
                       		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Fabric&nbsp;Sofas</a>
                       	</li>
                       	<li>
                       		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Leather&nbsp;Sofas</a>
                       	</li>
                       	<li>
                       		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">New&nbsp;Style</a>
                       	</li>
                       	<li>
                       		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Bed&nbsp;Rooms</a>
                        </li>
                      	<li>
                      		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Tabels</a>
                       	</li>
                      	<li class="lastitem">
                      		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Libraries</a>
                   		</li>
               		</ul>
               	</li>
            	<li>
             		<a class="withsubmenu" href="#" target="_self">Outdoors</a>
                  	<ul>
                      	<li class="firstitem">
                         	<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Wooden&nbsp;Seats</a>
                        </li>
                       	<li>
                          	<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Cradels</a>
                        </li>
                      	<li>
                        	<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Garden&nbsp;Tabels</a>
                       	</li>
                      	<li class="lastitem">
                      		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">More</a>
                   		</li>
                	</ul>
              	</li>
              	<li>
                 	<a href="#" target="_self">More</a>
               	</li>
               	<li>
                 	<a href="#" target="_self">More</a>
               	</li>
             	<li>
               		<a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">New&nbsp;Arrivals</a>
              	</li>
              	<li>
                    <a href="javascript:displaylightbox('./desk_products.php',{'transitionIn':'elastic','transitionOut':'elastic','speedIn':600,'speedOut':200,'overlayShow':true,'overlayColor':'#000000','autoDimensions':true})" target="_self">Hot&nbsp;Sales</a>
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
			<div class="col-md-2">
				<div class="whitebox3">
		  			<ul class="nav nav-tabs">
			   			<li class="active contact1"><a data-toggle="tab" href="#home" >Information</a></li>
			   			<li><a data-toggle="tab" href="#menu1" class="contact1" >Contact us</a></li>
		  			</ul>
		  		</div>
			</div>
			<div class="col-md-10">
			  	<div class="tab-content">
			    	<div id="home" class="tab-pane fade in active">
			    		<div class="col-sm-6">
			      			<p class="about1">Contact person</p>
			      			 	<img alt="" id="PhotoGallery3_img0" src="<?php echo asset_url();?>images/tn_sell1.png"><br>
			      			<p class="contact2"><strong>Jack Lee</strong></p>
			      			<p class="contact3"><strong>jacklee@hotmail.com</strong><p>
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
						    <div class="col-md-8">
						    	<textarea rows="" cols="" placeholder="Message"> </textarea>
						    	<button>Submit</button>
						    </div>
					    </div>
				    </div>
				</div>
			</div>
    	</div>
  	</div>
  	<!-- contact popup bar end -->
  	<div class="row">&nbsp;</div>
  	<div class="row">
  		<div class="col-md-9">
  			<?php foreach ($Productdetails as $product) {?>
			<div class="panel panel-default">
			  <div class="panel-body">
			    <div class="col-md-6">
			   <div class="row"> 
			   		<div class="row">
			    		<p class="product-braedcrumbs" style="padding-left:20px;">
				    		<a href="<?php echo base_url();?>desksite">Desktop</a> 
					    	&gt; <a href="javascript:productListBySubCategory(<?php echo $product['subcategory_id'];?>,<?php echo $product['busi_id'];?>)" > <?php echo $product['subcategory']?></a> 
							&gt;<a href="javascript:productListByMainProduct(<?php echo $product['mainproduct_id'];?>,<?php echo $product['busi_id'];?>)"  > <?php echo $product['mainproduct']?></a>
							&gt; <a href="javascript:productListBySubProduct(<?php echo $product['subproduct_id'];?>,<?php echo $product['busi_id'];?>)" > <?php echo $product['subproduct']?> </a>&gt;
						</p>
			    	</div>
			    	<div class="row">&nbsp;</div>
			   		<div class="col-md-2 sm-image-border text-center">
				    	<div class="row">
				    		<a href="#" onmouseenter="SetImage('Shapeview','<?php echo asset_url()."".$product["main_image"];?>');return false;">
				    			<video class="sm sm-border" controls>
									  <source src="<?php echo asset_url().$product['video_file'];?>" type="video/mp4">
								</video>
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
				    	<div class="row main-image" style="width: 364px;">
			    			<video class="main" controls>
								<source src="<?php echo asset_url().$product['video_file'];?>" type="video/mp4">
							</video>
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
      		<div class="col-md-3">
      			<div class="row">
      			<div class="col-md-12" style="padding:10px;">
      			<?php  foreach ($advantages as $advantage){?>
      				<h4 class="heading"> Sellers Advantage</h4>
	      			<div class="panel-group" id="accordion">
	      				<p>
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					        Product Guarantee</a>
				        </p>
					    <div id="collapse1" class="panel-collapse collapse">
					      <div class="panel-body"><?php echo $advantage['gaurantee_term'];?></div>
					    </div>
					    <p>
						    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
					        Sample</a>
				        </p>
					    <div id="collapse2" class="panel-collapse collapse">
					      <div class="panel-body">The seller provides a free sample, shipping fees to be paid by customer.</div>
					    </div>
					    <p>
						    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
					        Product Certificates</a>
				        </p>
					    <div id="collapse3" class="panel-collapse collapse">
					      <div class="panel-body">The seller able to issue the following Products Certificates: <?php echo  $advantage['product_certs'];?></div>
					    </div>
					    <p>
						    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
					        Product Certificates</a>
				        </p>
					    <div id="collapse4" class="panel-collapse collapse">
					      <div class="panel-body"><?php if(!empty($advantage['verification_id'])){ echo "The seller has an export license and able to export and ship the goods under his company license."; } ?></div>
					    </div>
					 </div>
					 <?php }?>
				</div>
				<div class="bgwhite1">
				<div class="row">
				<?php  foreach ($sellers as $seller){?>
					<div class="col-md-12">
						<center><img src="<?php echo base_url().$seller['profile_image']?>" width="100px;" height="100px;" class="circle"></center>
					</div>
					<div class="col-md-12">
						<h6><a href="#">Main Market</a></h6>
						<p><?php echo $seller['company_country']?></p>
						<h6><a href="#">Main Product</a></h6>
						<p><?php echo $seller['main_product']?></p>
						<h6><a href="#">Year of Establish</a></h6>
						<p><?php echo $seller['year_of_registration']?></p>
						<h6><a href="#">No. of Employees</a></h6>
						<p><?php echo $seller['total_no_of_emp'] ;?> Person</p>
						<h6><a href="#">Country</a></h6>
						<p><?php echo $seller['company_country'].' '.$seller['company_province'];?></p>
					</div>
				<?php }?>
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

</script>
<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>

