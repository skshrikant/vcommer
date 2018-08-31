    <script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>
     <div>
   		 <h1 class="sfont1">Products</h1>
   		 <p class="sfont2">Sourcing with more details is available by selecting additional options from the More Options Menu on the right side..</p>
   		 <br>
    </div>
    <div class="row">
    <?php //sxwprint_r($products);?>
    	
	    <div class="col-lg-10 section11"  id="Layer6" onmouseenter="ShowObjectWithEffect('Layer8', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer5', 0);ShowObject('Layer8', 0);return false;" >
		<?php  if(count($products) > 0 && $products[0]['id'] !='') { 
    	      foreach ($products as $product) { ?>
			<div class="row" id="Layer4">
				<div class="col-md-3 col-sm-12 displaydesktop">
					<div id="SlideShow1" class="img22">
					    <img class="image" src="<?php echo asset_url().$product['main_image'];?>" alt="" title="">
					    <img class="image" src="<?php echo asset_url().$product['sub_image2'];?>" style="display:none;" alt="" title="">
					</div>
				</div>
				<div class="col-md-6 col-sm-12 space1">
					 <div id="wb_Text8" class="section3">
						 <div class="inline padtop">
						    <span class="spanname"><strong><a href="./desk_details.php" target="_blank" class="style5"><?php echo $product['name']; ?></a></strong></span>
				   		 </div>
			   		  </div>
			   		  <div class="padtop">
						<span class="spandesc"><?php  echo substr($product['description'], '0', '250'); ?></span>
					  </div>
			   		  <div class="padtop">
                        <span class="spanprice">USD :<?php echo $product['unit_price']; ?></span>
                      </div>
                      <div class="padtop">
                        <span class="spanunit">Min. Order : <?php echo $product['quantity'].' '. $product['unit']; ?> </span>
                      </div>
		
				</div>
				
				<div class="col-md-3 col-sm-12">
					<div id="Layer5" class="section10 row">
					<div class="col-md-3">
					 <div id="RollOver5" class="box1">
					        <a href="buyer_profile.html" target="_blank">
					            <img class="hover" alt="" src="<?php echo asset_url() ?>images/randbuyercherry.png">
					            <span><img alt="" src="<?php echo asset_url() ?>images/randbuyerblack.png"></span>
					        </a>
					        <div id="wb_Text13"class="beauty1">
					        <p class="textfont1">VIEW PROFILE</p>
					        <p class="textfont2">To View Buyer Information, Desksite, Contact, Chat and much more.. </p>
					        </div>
					    
					    </div>
					</div>
					<div class="col-md-3">
					 <div id="RollOver21"  class="box2" >
					        <a href="#">
					            <img class="hover" alt="" src="<?php echo asset_url() ?>images/addcommunity_button2.png">
					            <span><img alt="" src="<?php echo asset_url() ?>images/addcommunity_button1.png"></span>
					        </a>
					         <div id="wb_Text13"class="beauty1">
					        <p class="textfont1">FIND THE SAME</p>
					        <p class="textfont2">To View More Buyers With Similar Specifications To The Current Buyer.. </p>
					        </div>
	
					       </div>
					</div>
					<div class="col-md-3">
					 <div id="RollOver22" class="box3" onclick="chat_with(<?php echo $product['user_id'];?>,<?php echo $product['accept_chat'];?>)">
					        <a>
					            <img class="hover" alt="" src="<?php echo asset_url() ?>images/chat_button2.png">
					            <span><img alt="" src="<?php echo asset_url() ?>images/chaTBLACK.png"></span>
					        </a>
					         <div id="wb_Text13"class="beauty1">
					        <p class="textfont1">ADD TO COMMUNITY</p>
					        <p class="textfont2">To Add Buyer To Your Community Member List, And Follow His Posts..</p>
					        </div>
					    </div>
					</div>
					<div class="col-md-3">
					 
					  <div id="RollOver6" class="box4">
					        <a href="#">
					            <img class="hover" alt="" src="<?php echo asset_url() ?>images/videosame_cherry.png">
					            <span><img alt="" src="<?php echo asset_url() ?>images/videosame_black.png"></span>
					        </a>
					        <div id="wb_Text13"class="beauty1">
					        <p class="textfont1">CHAT </p>
					        <p class="textfont2">To Chat With Buyer, In Case He Is An Active Member Or He Allows Sellers To Contact With Him.. </p>
					        </div>
					    </div>
					</div>
					</div>
				<div id="Layer8" class="section9" onclick="ShowObjectWithEffect('Layer5', 1, 'slideright', 500, 'swing');return false;">
				    <div id="wb_Shape1" class="stylebox">
				        <a href="#" onclick="ShowObjectWithEffect('Layer5', 1, 'slideright', 500, 'swing');return false;"><img src="<?php echo asset_url() ?>images/img0092.png" id="Shape1" alt="" style="width:11px;height:48px;"></a>
				    </div>
				</div>
						<div id="Layer7" class="section8">
							<div id="wb_Text8" class="margintop">
							     <span class="spancompany"><strong><a href="./desksite.php" target="_blank" class="style5"><?php echo $product['company_name']; ?></a></strong></span>
							</div>
							<div id="wb_Text3">
                                 <span class="spanpresent ">Presented By : </span> <span>Ms. Rose Rose</span>
                            </div>
                            <div class="space33">
									<strong class="font-style-1">Seller Type  </strong><p class="font-style-2"> <?php// echo $product['sub_category'];?></p>
							</div>
							<div>
								<div class="space44">
									<strong class="font-style-1"> <?php echo $product['company_country'];?> |  </strong><p class="font-style-2"> <?php echo $product['company_province'];?></p>
								</div>
							</div>
						     <div id="wb_Text7" class="style-2">
							    <div id="wb_Image10" class="img-style">
							        <?php if($product['gaurantee_period'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" > <?php }?>
						        </div>
							    <div id="wb_Image2" class="img-style">
							    	<?php if($product['gaurantee_period'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1" > <?php }?>
						        </div>
							    <div id="wb_Image1" class="img-style">
							        <?php if($product['is_logo_verified'] !=''){?><img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" > <?php }?>
						        </div>
						        <div id="wb_Image1" class="img-style">
									<?php if($product['plan_id'] > '1' && $product['plan_id'] > '1'){?><img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1"><?php }?>
						        </div>
							</div>
							<div class="text-center">								
								<p class="left style-font-1">Rank</p>
								<div class="progress">
								
								    <div class="progress-bar orange1" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $product['rank']?>%">
								    </div>
								  </div>
								  <p class="font121">%<?php echo $product['rank']?></p>
							</div>
						</div>
						
				</div>		
		</div>
	
	<?php }}  else {?>
	      <div class="col-lg-10 section11"  id="Layer6" onmouseenter="ShowObjectWithEffect('Layer8', 1, 'slideright', 300, 'swing');return false;" onmouseleave="ShowObject('Layer5', 0);ShowObject('Layer8', 0);return false;" >
	     	<h4 class="center"> No Product Found!</h4>
	     </div>
     <?php }  ?>
     </div>
	<div class="col-lg-2">
				<!--  
				<div class="panel displaydesktop">
					<div class="panel-heading style-1">
						<b>Categories</b>
					</div>
					<div class="list-group categary font10">
						<a href="#" class="list-group-item">Show Black Horse Members First </a> 
						<a href="#" class="list-group-item">Show My Community Members Only  </a> 
						<a href="#" class="list-group-item">Hide My Community Members </a> 
					</div>
				</div>
				-->
				<div class="panel">
					<div class="panel-heading" class="panelstyle">
						<b class="panelstyle1">More Options Menu</b>
					</div>
					<div class="list-group categary">
						<a href="#" class="list-group-item">Computer components </a> 
				   		<a href="#" class="list-group-item">Desktops and servers </a> 
				   		<a href="#" class="list-group-item">Laptop &amp; accessories </a> 
				   		<a href="#" class="list-group-item">Hide my community member </a> 
				   	</div>
				</div>
				
				<div id="Layer3" class="box8">
				<div id="wb_Text328" class="innersection">

					<span class="text2"><strong><a href="search_desksite.html" target="_blank" class="style5">Buyers Product Requests</a></strong></span>
					<p class="text3">View The Latest Trade & Products Requests, Boosted By Global Buyers..</p>
					<span class="text2"><strong><a href="search_desksite.html" target="_blank" class="style5">Buyers Stock Requests </a></strong></span>
					<p class="text3">View The Latest Stock Goods Requests, Boosted By Global Buyers..</p>
			    </div>
			   </div>
			   <div class="maxheight1 bg1">
						<div class="row" style="margin: 0px">
							<h3 style="color: #fff; text-align: center;">
								<span class="product-feature bg-font1"> WORLD</span><br> 
								<span class="product-feature-title bg-font2"> SELLERS</span>
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
			                     //   print_r($featuredSellers);
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
			                    <div id="Carousel3_back" class="style51">
			                        <a href=""><img alt="Back" src="<?php echo asset_url(); ?>images/previoustxt0blk.png"></a>
			                    </div>
			                    <div id="Carousel3_next" class="style53">
			                        <a style="cursor:pointer"><img alt="Next" src="<?php echo asset_url(); ?>images/nexttxt0blk.png"></a>
			                    </div>
			                </div>
			            </div>
			        </div>        
    			</div>
    			
    			
    			
    			<div>
    			
    			<?php ?>
    			
    			</div>
    
	</div>
	</div>
	
<script>
$(document).ready(function() {
    $("#SlideShow1").slideshow({
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
    $("#Layer185").stickylayer({
        orientation: 9,
        position: [0, 0],
        delay: 300
    });
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
</script>