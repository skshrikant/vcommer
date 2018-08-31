<link href="<?php echo asset_url(); ?>css/pages/sellers.css"  rel="stylesheet">
<link href="<?php echo asset_url(); ?>js/slimbox/css/slimbox2.css"  rel="stylesheet">
<script src="<?php echo asset_url(); ?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-blind.min.js"></script>
<script	src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-drop.min.js"></script>
<script	src="<?php echo asset_url(); ?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fold.min.js"></script>
<script	src="<?php echo asset_url(); ?>js/jquery.ui.effect-highlight.min.js"></script>
<script	src="<?php echo asset_url(); ?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url(); ?>js/searchindex.js"></script>
<script src="<?php echo asset_url(); ?>js/slimbox/js/slimbox2.js"></script>
<link rel="stylesheet" href="<?php echo asset_url();?>js/prettyPhoto/css/prettyPhoto.css">
<script src="<?php echo asset_url();?>js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<style>
div.pp_overlay {
	z-index:12800 !important;
}
div.pp_pic_holder {
	z-index:12801 !important;
}
</style>
<div>
	<div id="Layer2" style="visibility: hidden;">
		<div id="Layer2_Container">
			<div class="container" style="width: 1280px;">
				<div class="row space121" style="margin:0px;">
				
				</div>
				
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2" style="padding-right: 0px; padding-left: 0px;">
						<form class="displaymobile">
							<div class="row">
								<div class=" col-md-offset-1 col-md-4 col-sm-4 col-xs-6" style="padding-right: 1px; padding-left: 1px;">
									<input type="text" class="search-box" required="required" name="keyword" id="key-search-box" placeholder="Type the product name to seach...">
								</div>
								<div class="col-md-1 col-sm-2 col-xs-4" style="padding-right: 1px; padding-left: 1px;">
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
								<div class="col-md-1 col-sm-1 col-xs-2 bluebg" style="padding-right: 1px;padding-left: 1px;">
                               		<button type="button" onclick="filterBusinessStation1();">GO</button>
                               	</div>
							</div>
							<br>
						</form>
						<div class="maxheight1" id="Layer68">
							<div id="wb_Text244">
								<span class="font2s2"><strong>REAL-TIME</strong></span>
							</div>
							<h3 class="font1s2">
								<span>BUSINESS STATION</span>
							</h3>
							<div class="text-center displaydesktop ">
								<img src="<?php echo asset_url(); ?>images/trade-satation.png"
									class="img-responsive">
							</div>
						</div>
					</div>
					<div class="col-lg-10 col-sm-3" style="padding-right:0px;padding-left:0px">
						<ul class="nav nav-tabs">
							<li class="active nav121" style="width: 190px;">
								<a data-toggle="tab" href="#home" style="background: #FF6347; border: 0px;">Sellers/Shippers Offers</a>
							</li>
							<li class="nav122" style="width: 160px;">
								<a data-toggle="tab" href="#menu1" style="background: #1E90FF; border: 0px;" onclick="current_view = 'filterBusinessStation'">Buyers Requests</a>
							</li>
							<!-- form class="displaydesktop" -->
								<div class="row" style="padding-top:4px;">
									<div class=" col-md-offset-1 col-md-4 col-sm-4 col-xs-6" style="padding-right: 1px; padding-left: 1px;">
										<input type="text" class="search-box" required="required" name="keyword" id="keyword" placeholder="Please type product Keyword…">
									</div>
									<div class="col-md-1 col-sm-2 col-xs-4" style="padding-right: 1px; padding-left: 1px;">
										<select class="search-box" name="country" id="country_name">
											<option value="">Country</option>
											<?php foreach ($Country as $country){?>
											<option value="<?php echo $country['name'];?>"><?php echo $country['name'];?></option>
											<?php }?>
										</select>
									</div>
									<div class="col-md-1 col-sm-1 col-xs-2 bluebg" style="padding-right: 1px; padding-left: 1px;">
										<button type="button" onclick="filterBusinessStation();">GO</button>
									</div>
								<!-- /div -->
							</form>
						</ul>
						<div id="Layer74" class="" style="width:978px;">
							<div class="row" style="margin:0px;" id="newsellerpostfrm">
								
							</div>
							<div class="row" style="margin: 0px;">
								<div class="greystyle" style="background-color: #FAEBD7;">
									* Each post will get expired automatically after 15 days, to view the
									remains days or delete posts click " View My Posts". <br> * Don't
									repeat, duplicate or send the same post twice, so as you not affect
									the storage of your Stock Market Box.
								</div>
							</div>
						</div>
						<div id="Layer744" class="" style="width:943px;z-index: 200;">
							<div class="row" style="margin:0px;" id="newbuyerpostfrm">
								
							</div>
							<div class="row" style="margin: 0px;">
								<div class="greystyle" style="background-color: #E9F4FF;padding-left:200px;">
									* Each post will get expired automatically after 15 days, to view the remain days or to delete posts, click on " View My Posts".<br>
									* Don't repeat, duplicate or send the same post twice, so as you not affect the storage of your (Business Station Box ).
								</div>
							</div>
						</div>
						<div class="tab-content">
							<!-- content-tab-1 -->
							<div id="home" class="tab-pane fade in active content121">
								<!-- view past close post add new post buttons -->
								<div class="tab1" style="padding-left:16px;">
									<?php if($tscategory_id == 1 || $tscategory_id == 2) { ?>
									<h3 class="leftbox1"><span style="color:#303030;font-family:Georgia;font-size:14px;"><strong>For Sellers & Shippers</strong></span></h3>
									<p class="leftbox2">Send Your Sell Post And Manage The Previous Ones. </p>
									<div id="Layer9">
										<img src="<?php echo asset_url(); ?>images/img0143.png" id="Image54" alt="" class="img46" style="width:30px !important;">
				                    <?php if($usertype[0]['user_category_id'] =='1' || $usertype[0]['user_category_id'] =='2' ) { ?>
					                    <span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:9px;">
						                    <a href="javascript:openNewPostForm();" class="bststyle6">
						                    	Add New Post
						                    </a>
					                    </span>
				                    <?php } else { ?>
				                    	<span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:9px;">
				                    	<a href="#">Add New Post</a>
				                    	</span>
										
				                    <?php } ?>
				                	</div>
									<div class="whitebox">
										<img src="<?php echo asset_url(); ?>images/viewmybuyposts.png" id="Image54" alt="" class="img46 mp1" style="margin-top:3px;"> 
										<span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:5px;">
											<a href="javascript:viewMyPosts();" class="bststyle9">
												View My Posts
											</a>
										</span>
									</div>
									<div class="whitebox">
										<img src="<?php echo asset_url(); ?>images/closebuyposts.png" id="Image54" alt="" class="img46 mp1" style="margin-top:3px;"> 
										<span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:5px;">
											<a href="#" onclick="ShowObjectWithEffect('Layer32', 0, 'fade', 500);ShowObjectWithEffect('Layer28', 1, 'fade', 500);return false;" class="bststyle9">
												Close My Posts
											</a>
										</span>
									</div>
									<?php } ?>
								</div>
								<!-- view past close post add new post buttons end-->
								<!-- close my post 1 -->

								<div id="Layer28" style="width: 1029px;height:625px;overflow-x: hidden;">
				                
				           		</div>


								<div id="Layer32" style="width: 1029px;height:625px;overflow-x: hidden;">
				             	</div>
				             	<br><br><br><br>
							</div>
							<!-- view my post end -->

							<!-- content-tab-1 end -->
							<div id="menu1" class="tab-pane fade content122">
							

							<div id="Layer288" style="width: 1029px;height:625px;overflow-x: hidden;"></div>
								
							<div id="Layer322" style="height:625px;width: 1029px;overflow-x: hidden;"></div>
								<!-- view my post end -->
								<!-- view past close post add new post buttons -->
								<div class="tab1" style="padding-left:16px;">
									<?php if($tscategory_id == 3) { ?>
									<span style="color:#303030;font-family:Georgia;font-size:14px;"><strong>For Buyers</strong></span><br>
									<p class="leftbox2">Send Your Buy Post And Manage The Previous Ones..</p>
									<div class="bluebox">
										<img src="<?php echo asset_url(); ?>images/barsendpost.png" id="Image54" alt="" class="img46" style="width:30px !important;">
				                    	<?php if($usertype[0]['user_category_id'] =='3' ) { ?>
				                    	<span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:9px;">
					                    	<a href="javascript:openNewBuyerPostForm();" class="bststyle6">
					                    		Add New Post
					                    	</a>
				                    	</span>
				                		<?php } else { ?>
				                		<span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:9px;">
				                		<a href="#">Add New Post</a>
				                		</span>

				                		<?php } ?>
				                	</div>
									<div class="whitebox">
										<img src="<?php echo asset_url(); ?>images/viewmysellposts.png" id="Image54" alt="" class="img46 mp1"> 
										<span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:5px;">
											<a href="javascript:viewBuyerPosts();" class="bststyle10">
												View My Posts
											</a>
										</span>
									</div>
									<div class="whitebox">
										<img src="<?php echo asset_url(); ?>images/closesellposts.png" id="Image54" alt="" class="img46 mp1"> 
										<span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:5px;">
											<a href="#" onclick="ShowObjectWithEffect('Layer322', 0, 'fade', 500);ShowObjectWithEffect('Layer288', 1, 'fade', 500);return false;" class="bststyle10">
												Close My Posts
											</a>
										</span>
									</div>
									<?php } ?>
								</div>
								<!-- view past close post add new post buttons end-->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- popup 
				            <div id="lbCenter" style="top: 223.5px; width: 380px; height: 314px; margin-left: -190px; left: 720px; display:none;" class="">
				                <div id="lbImage" style="background-image: url(&quot;http://trdstation.com/images/babytoy1.jpg&quot;); display: block;">
				                    <div style="position: relative; width: 360px; height: 294px;">
				                        <a id="lbPrevLink" href="#" style="display: none; height: 294px;"></a>
				                        <a id="lbNextLink" href="#" style="display: block; height: 294px;"></a>
				                    </div>
				                </div>
				            </div>
				            <!-- popup end -->
	<!-- add new post popup -->
	<div class="container" style="width: 1280px;padding-left:0px;">
	</div>
	<!-- edit post buy end -->
	<div id="Layer46" style="position: fixed; text-align: center; left: 0; top: 0; right: 0; bottom: 0; z-index: 1418;<?php if(!empty($_COOKIE['bstation-landing'])) { ?>display:none;<?php } ?>">
		<div id="Layer46_Container" style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
			<div id="wb_Text84" style="position: absolute; left: 423px; top: 186px; width: 375px; height: 49px; z-index: 527; text-align: left;">
				<span style="color: #4B4B4B; font-family: Arial; font-size: 43px;">THE BUSINESS</span>
			</div>
			<!-- div id="Layer64" style="position: absolute; text-align: center; left: 0%; top: 0px; width: 1280px; height: 47px; z-index: 528;">
				<div class="container-fluid" style="padding-left: 15%;">
					<ul class="nav navbar-nav navbar-left">
						<li class="inline">
							<a href="#">
								<span class="navtrd1">TRD</span>
								<span class="navtrd3">STATION</span>
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right" style="padding-right: 10%;">
						<li><a href="#" class="navtrd4">GOOD LUCK</a></li>
						<li class="displaydesktop"><a class="navtrd4">|</a></li>
                       	<?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
                        	<li><a data-toggle="modal" class="user1">Guest</a></li>
			           	<?php } else { ?>
		                   	<li><a data-toggle="modal" class="user1"><?php echo $tsprefix."  ".$tsusername; ?></a></li>
		               	<?php } ?>
                            <li class="dropdown" style="padding-top: 5px;">
                         	<?php if ($profile_img == '') { ?>
							<img src="<?php echo asset_url(); ?>images/rseller2.png" id="Image24" alt="" class="img35" style="border-radius: 50%;">
	                   <?php } else { ?>
	                        <img src="<?php echo asset_url().$profile_img?>" id="Image24" alt="" class="img35" style="border-radius: 50%;">
	                   <?php } ?>
                   		</li>
					</ul>
				</div>
			</div-->
			<div id="wb_Text85" style="position: absolute; left: 423px; top: 211px; width: 441px; height: 156px; z-index: 529; text-align: left;">
				<span style="color: #00BFFF; font-family: Impact; font-size: 128px;">STATION</span>
			</div>
			<div id="wb_Text86" style="position: absolute; left: 423px; top: 355px; width: 431px; height: 45px; z-index: 530; text-align: left;">
				<span style="color: #696969; font-family: Arial; font-size: 12px;">
					A Real-Time Business Platform, Allows Worldwide Businessmen To Sell &amp;&nbsp; Buy, Offer &amp; Request, And Much More.. <br>
				</span>
			</div>
			<div id="wb_Image58" style="position: absolute; left: 61px; top: 114px; width: 385px; height: 668px; z-index: 531;">
				<img src="<?php echo asset_url();?>images/img0162.png" id="Image58" alt="">
			</div>
			<div id="Layer66" style="position: absolute; text-align: center; left: 423px; top: 422px; width: 581px; height: 37px; z-index: 532;">
				<div id="Layer66_Container" style="width: 581px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
					<!-- form name="SiteSearch3_form" id="SiteSearch3_form" accept-charset="UTF-8" -->
						<div id="wb_CssMenu6" style="position: absolute; left: 385px; top: 1px; width: 159px; height: 36px; z-index: 523;">
							<select class="search-box" name="top_country" style="height: 26px; border: 1px #808080 solid !important; width: 124px;" id="top_country_id">
								<option value="">Country</option>
								<?php foreach ($Country as $country){?>
								<option value="<?php echo $country['name'];?>"><?php echo $country['name'];?></option>
								<?php }?>
							</select> 
							<br>
						</div>
						<input type="text" id="SiteSearch3" style="position: absolute; left: 0px; top: 1px; width: 374px; height: 26px; line-height: 26px; z-index: 524;" name="SiteSearch1" value="" placeholder="Please type product Keyword…">
						<div id="wb_Image57" style="position: absolute; left: 492px; top: 7px; width: 13px; height: 8px; z-index: 525;">
							<img src="<?php echo asset_url();?>images/img0161.png" id="Image57" alt="">
						</div>
						<input type="button" id="Button14" onclick="searchBusinessStation();" name="Search" value="GO" style="position: absolute; left: 518px; top: 0px; width: 63px; height: 27px; z-index: 526;"/>
					<!-- /form-->
				</div>
			</div>
			<div id="wb_Text89" style="position: absolute; left: 423px; top: 473px; width: 303px; height: 15px; z-index: 533; text-align: left;">
				<span style="color: #696969; font-family: Arial; font-size: 12px;">High You Voice, Ask For Whatever ..</span>
			</div>
		</div>
	</div>
	<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
	<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
var is_offer_accepts = <?php echo $contact_details[0]['accept_offer'];?>;
var is_contact_accepts = <?php echo $contact_details[0]['accept_email'];?>;
var plan_id = <?php echo $contact_details[0]['plan_id'];?>;
var desk_step = <?php echo $contact_details[0]['step'];?>;
var usr_cat_id = <?php echo $tscategory_id;?>;

$("#SiteSearch3").change(function() {
  	$('[name=keyword]').val($(this).val());
});
     
$("#top_country_id").change(function() {
	$('[name=country]').val($(this).val());
});
function getProductImages() {
    var id = $('#select_product_id').val(); 
    var product_no = $("#product_select").val();
    if(product_no != "") {
	    $.post(base_url+"product/images", {id : id, product_no: product_no}, function(data){
		    if(data == 11) { 
		    	alert("No product found");
		    } else {
		    	$('#postdatacontent').hide();
		    	$('#view_Product_image').html(data);
		    }
		},'html');
    } else {
    	alert("Please enter product number.");
    }
}

$('#buttonuse').click(function() {
    $('#view_Product_image').hide();
    $('#postdatacontent').show();
});

function openNewPostForm() {
	if(plan_id > 1) {
		if((usr_cat_id == 1 && desk_step == 4) || (usr_cat_id == 2 && desk_step == 2)) {
			$.get(base_url+"bstation/seller/newpost/form",{},function(data){
				if(data == '11') {
					customAlert('Oops.. You have been reached to the maximum number of sending posts per day… See you tomorrow.');
				} else {
					$("#newsellerpostfrm").html(data);
					ShowObjectWithEffect('Layer74', 1, 'cliphorizontal', 500);
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
					                    message: 'Post Title is required'
					                },
					                stringLength: {
							            max: 45,
							            min: 6,
							            message: 'Minimum 6 and maximum 45 characters required'
							        }
					            }
					        },
					        description: {
					            validators: {
					                notEmpty: {
					                    message: 'Post Description is required'
					                },
					                stringLength: {
							            max: 1500,
							            min: 150,
							            message: 'Minimum 150 and maximum 1500 characters required'
							        }
					            }
					        },
					        usd_price: {
					            validators: {
					                notEmpty: {
					                    message: 'USD Price is required'
					                },
					                numeric: {
					                 	message: 'Item Price is invalid',
					                    thousandsSeparator: '',
					                    decimalSeparator: '.'
					              	}
					            }
					        },
					        quantity: {
					            validators: {
					                notEmpty: {
					                    message: 'Quantity is required'
					                }
					            }
					        }
					    }
					}).on('success.form.bv', function(event,data) {
						// Prevent form submission
						event.preventDefault();
						addPostContent();
					});
				}
			},'html');
		} else {
			customAlert('Sorry.. You have to create you Desksite to send posts or communicate with our members.. It\'s so easy .. just follow the steps shown here-under:<br> 1. Login and click on your profile image, then select Continue.<br> 2. Complete your registration till we create your Station.<br> 3. In " My Station" click on " My Desksite" and follow the steps to build it.');
		}
	} else {
		customAlert("Sorry.. Only Black Horse members can send posts and deal with global buyers, <strong>Please upgrade your membership</strong>.");
	}
}


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

function showAddRequest(formData, jqForm, options){
	$("#loading-image").show();
   	var queryString = $.param(formData);
	return true;
}
   	
function showAddResponse(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		$("#loading-image").hide();
  	} else {
  		$("#loading-image").hide();
  		$("#post-success-result").show();
  		filterBusinessStation();
  	}
}

function openNewBuyerPostForm() {
	if(is_offer_accepts == 1 && is_contact_accepts == 1 && desk_step == 2) {
		$.get(base_url+"bstation/buyer/newpost/form",{},function(data){
			if(data == '11') {
				customAlert('Oops.. You have been reached to the maximum number of sending posts per day… See you tomorrow.');
			} else {
				$("#newbuyerpostfrm").html(data);
				ShowObjectWithEffect('Layer744', 1, 'cliphorizontal', 500);
				$('#addPostBuyerContent').bootstrapValidator({
					container: function($field, validator) {
						return $field.parent().next('.messageContainer');
				   	},
				    feedbackIcons: {
				        validating: 'glyphicon glyphicon-refresh'
				    },
				    excluded: ':disabled',
				    fields: {
				    	btitle: {
				            validators: {
				                notEmpty: {
				                    message: 'Post Title is required'
				                },
				                stringLength: {
						            max: 45,
						            min: 6,
						            message: 'Minimum 6 and maximum 45 characters required'
						        }
				            }
				        },
				        bdescription: {
				            validators: {
				                notEmpty: {
				                    message: 'Post Description is required'
				                },
				                stringLength: {
						            max: 1500,
						            min: 150,
						            message: 'Minimum 150 and maximum 1500 characters required'
						        }
				            }
				        },
				    }
				}).on('success.form.bv', function(event,data) {
					// Prevent form submission
					event.preventDefault();
					addPostContentbuyer();
				});
			}
		},'html');
	} else {
		if(desk_step < 2) {
			customAlert('Sorry.. You have to create you Desksite to send posts or communicate with our members.. It\'s so easy .. just follow the steps shown here-under:<br> 1. Login and click on your profile image, then select Continue.<br> 2. Complete your registration till we create your Station.<br> 3. In " My Station" click on " My Desksite" and follow the steps to build it.');
		} else {
			customAlert('Oops.. You are not able to sent a post.. It seems that you have turned the features (Receive Elite Manufactures Offers & Members contact request) OFF.. Please go to " My Station", then click on "Tools" icon, and select " Control Pannel", then Turn these features ON.');
		}
	}
}

function addPostContentbuyer() {
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showBAddRequest,
	 		success :  showBAddResponse,
	 		url : base_url+'seller/bstationpostinsertbuyer',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#addPostBuyerContent').ajaxSubmit(options);
}

function showBAddRequest(formData, jqForm, options){
	$("#bloading-image").show();
   	var queryString = $.param(formData);
	return true;
}
   	
function showBAddResponse(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		$("#bloading-image").hide();
  	} else {
  		$("#bloading-image").hide();
  		$("#bpost-success-result").show();
  		filterBusinessStation();
  	}
}

function setBackgroundSize(id,input,size) {
  	if (input.files && input.files[0]) {
    	var reader = new FileReader();
       	reader.onload = function (e) {
       		var ext = input.files[0].name.split('.').pop();
       		var file_size = parseInt(input.files[0].size);
       		var filesizeinkb = (file_size/1024);
       		var image = new Image();
            image.src = e.target.result;
            image.onload = function () {
                var imgwidth = this.width;
                if(ext == 'jpg' || ext == 'jpeg') {
	                if(filesizeinkb > size) {
	                	alert("Image size should be "+size+"kb max.");
	                    $('#'+id).val('');
	                } else {
		                $('#'+id).css('background-image', 'url('+e.target.result+')').css('background-size','cover');
	                }
                } else {
                	alert("Image should be JPG or JPEG.");
                    $('#'+id).val('');
                }
            };
      	}
        reader.readAsDataURL(input.files[0]);
   	}
}

</script>
<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.cookie.js"></script>
<script>
var current_view = "filterBusinessStation";
function searchBusinessStation(loader = true) {
	current_view = "searchBusinessStation";
	var keyword = $("#SiteSearch3").val();
	var country = $("#top_country_id").val();
	if(keyword != "" || country != "") {
		if(loader)
			ajaxindicatorstart("");
		$.post(base_url+"bstation/search/posts",{keyword: keyword, country: country},function(data){
			if(loader)
				ajaxindicatorstop();
			$("#Layer28").html(data.posts);
			$("#Layer288").html(data.requests);
			ShowObjectWithEffect('Layer46', 0, 'slideup', 500, 'swing');
			ShowObjectWithEffect('Layer2', 1, 'slidedown', 500, 'swing');
			/*$("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
		    $("a[rel^='PhotoGallery1']").slimbox({
		        overlayOpacity: 0.8
		    }, null, function(el) {
		        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
		    });*/
		    $.cookie('bstation-landing', '1', { expires: 365 });
		    $.cookie('bstation-keyword', keyword, { expires: 365 });
		    $.cookie('bstation-country', country, { expires: 365 });
		},'json');
	} else {
		//if(keyword == "" && country == "") {
			alert("Please enter search keyword or select country");
		/*} else {
			if(keyword == "") {
				alert("Please enter search keyword");
			}
			if(country == "") {
				alert("Please select country");
			}
		}*/
	}
}
function filterBusinessStation(loader = true) {
	current_view = "filterBusinessStation";
	var keyword = $("#keyword").val();
	var country = $("#country_name").val();
	if(keyword != "" || country != "") {
		if(loader)
			ajaxindicatorstart("");
		$.post(base_url+"bstation/search/posts",{keyword: keyword, country: country},function(data){
			if(loader)
				ajaxindicatorstop();
			$("#Layer28").html(data.posts);
			$("#Layer288").html(data.requests);
			ShowObjectWithEffect('Layer46', 0, 'slideup', 500, 'swing');
			ShowObjectWithEffect('Layer2', 1, 'slidedown', 500, 'swing');
			ShowObjectWithEffect('Layer28', 1, 'fade', 500);ShowObjectWithEffect('Layer32', 0, 'fade', 500);
			/*$("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
		    $("a[rel^='PhotoGallery1']").slimbox({
		        overlayOpacity: 0.8
		    }, null, function(el) {
		        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
		    });*/
		    $.cookie('bstation-landing', '1', { expires: 365 });
		    $.cookie('bstation-keyword', keyword, { expires: 365 });
		    $.cookie('bstation-country', country, { expires: 365 });
		},'json');
	} else {
		//if(keyword == "" && country == "") {
			alert("Please enter search keyword or select country");
		/*} else {
			if(keyword == "") {
				alert("Please enter search keyword");
			}
			if(country == "") {
				alert("Please select country");
			}
		}*/
	}
}

function selectProductImage() {
	if($('input[name="cimgchk[]"]:checked').length > 0) {
	    $('#postdatacontent').show();
	    $("input[name='cimgchk[]']:checked").each(function(index) {
	        $('#postphoto'+(index+1)).css('background-image','url("assets/'+$(this).val()+'")').css('background-size','cover');
	        $("#cimg"+(index+1)).val($(this).val());
	   	});
	    $('#view_Product_image').html("");
	} else {
		alert("Please select images.");
	}
}

function cancelProductImage() {
	$('#postdatacontent').show();
	$('#view_Product_image').html("");
}

function closeNewPost() {
	$('#view_Product_image').html("");
	$('#postdatacontent').show();
}

function closeNewPostResult() {
	ShowObjectWithEffect('Layer74', 0, 'clipvertical', 500);
	ShowObject('Layer75', 0);
	$('#view_Product_image').html("");
	$('#postdatacontent').show();
	$("#loading-image").hide();
	$("#post-success-result").hide();
}

function viewMyPosts() {
	current_view = "viewMyPosts";
	ajaxindicatorstart("");
	$.get(base_url+"bstation/seller/myposts",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer28', 0, 'fade', 500);
		ShowObjectWithEffect('Layer32', 1, 'fade', 500);
		$("#Layer32").html(data);
	},'html');
	
}

function deleteMyPost(id) {
	if($("#delete_chk"+id).prop("checked") == true) {
		$.get(base_url+"bstation/seller/post/delete/"+id,{},function(){
			viewMyPosts();
		},'json');
	} else {
		alert("Please select post.");
	}
}

function closeMyPost(key) {
	current_view = "closeMyPost";
	ShowObject('Layer5_'+key, 0);
	/*$.get(base_url+"bstation/seller/post/close/"+id,{},function(){
		viewMyPosts();
	},'json');*/
}

function checkMyFiles(input) {
	var filecount = $(input)[0].files.length;
	if(filecount <5) {
		//
	} else {
		$(input).val('');
		alert('You can not select more than 4 images');
	}
}

function closeBNewPost() {
	$('#bpostdatacontent').show();
}

function closeBNewPostResult() {
	ShowObjectWithEffect('Layer744', 0, 'clipvertical', 500);
	ShowObject('Layer75', 0);
	$('#bpostdatacontent').show();
	$("#bloading-image").hide();
	$("#bpost-success-result").hide();
}

function deleteBuyerPost(id) {
	if($("#bdelete_chk"+id).prop("checked") == true) {
		$.get(base_url+"bstation/seller/post/delete/"+id,{},function(){
			viewBuyerPosts();
		},'json');
	} else {
		alert("Please select post.");
	}
}
function viewBuyerPosts() {
	ajaxindicatorstart("");
	$.get(base_url+"bstation/buyer/myposts",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer288', 0, 'fade', 500);
		ShowObjectWithEffect('Layer322', 1, 'fade', 500);
		$("#Layer322").html(data);
	},'html');
}
function loadRealtimebstationPosts(){
	var keyword = $("#keyword").val();
	var country = $("#country_name").val();
	if(keyword != "" && country != "") {
		//ajaxindicatorstart("");
		$.post(base_url+"bstation/search/posts",{keyword: keyword, country: country},function(data){
			//ajaxindicatorstop();
			$("#Layer28").html(data.posts);
			$("#Layer288").html(data.requests);
			ShowObjectWithEffect('Layer46', 0, 'slideup', 500, 'swing');
			ShowObjectWithEffect('Layer2', 1, 'slidedown', 500, 'swing');
			ShowObjectWithEffect('Layer28', 1, 'fade', 500);ShowObjectWithEffect('Layer32', 0, 'fade', 500);
		    $.cookie('bstation-landing', '1', { expires: 365 });
		    $.cookie('bstation-keyword', keyword, { expires: 365 });
		    $.cookie('bstation-country', country, { expires: 365 });
		},'json');
	}

	if(current_view == "searchBusinessStation"){
		searchBusinessStation(false);
	}else if(current_view == "filterBusinessStation"){
		filterBusinessStation(false);
	}
}
$(document).ready(function() {
	setInterval(loadRealtimebstationPosts,10000);
	$('#SiteSearch3').keydown(function(event) {
	   	if (event.keyCode == 13) {
	   		searchBusinessStation();
	    }
	});
	$('#keyword').keydown(function(event) {
	   	if (event.keyCode == 13) {
	   		filterBusinessStation();
	    }
	});
});
<?php if(!empty($_COOKIE['bstation-landing'])) { ?>
var keyword = '<?php echo $_COOKIE['bstation-keyword'];?>';
var country = '<?php echo $_COOKIE['bstation-country'];?>';
$("#Layer46").hide();
ajaxindicatorstart("");
$.post(base_url+"bstation/search/posts",{keyword: keyword, country: country},function(data){
	ajaxindicatorstop();
	$("#Layer28").html(data.posts);
	$("#Layer288").html(data.requests);
	ShowObjectWithEffect('Layer2', 1, 'fade', 100, 'swing');
	/*$("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
    $("a[rel^='PhotoGallery1']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });*/
    $('[name=keyword]').val(keyword);
    $('[name=country]').val(country);
},'json');

<?php if(!empty($_COOKIE['bstation-buyer-request']) && $_COOKIE['bstation-buyer-request'] == 1){ ?>

	$('.nav-tabs > .active').next('li').find('a').trigger('click');
	$.cookie('bstation-buyer-request', '0', { expires: 365 });
<?php } } ?>
</script>