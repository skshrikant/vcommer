<link href="<?php echo asset_url(); ?>css/pages/sellers.css"  rel="stylesheet">
<link href="<?php echo asset_url(); ?>js/slimbox/css/slimbox2.css"  rel="stylesheet">
<link href="<?php echo asset_url(); ?>css/pages/sellers.css" rel="stylesheet">
<script src="<?php echo asset_url(); ?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-blind.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-drop.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-fold.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-highlight.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url(); ?>js/jquery.ui.effect-slide.min.js"></script>
<script src="<?php echo asset_url(); ?>js/searchindex.js"></script>
<script src="<?php echo asset_url(); ?>js/wwb10.min.js"></script>
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
				<div class="row space121">
                    <!-- strong class="sfont11">The Stocks Market</strong>
                    <p class="sfont22"> A Real-Time Stocks Market, Allows Businessmen Around The World To Sell, Buy And Ask For Stocks Or Ready Goods..</p>
                    <br-->
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2" style="padding-right:0px;padding-left:0px;">
                   		<form class="displaymobile">
                       		<div class="row">
                          		<div class=" col-md-offset-1 col-md-4 col-sm-4 col-xs-6" style="padding-right: 1px; padding-left: 1px;">
                               		<input type="text" class="search-box" required="required" name="keyword1" id="key-search-box" placeholder="Type the product name to seach..." id="keyword1">
                              	</div>
                             	<div class="col-md-1 col-sm-2 col-xs-4" style="padding-right: 1px;padding-left: 1px;">
									<select class="search-box" name="country1" id="country_name1">
										<option value="">Country</option>
										<?php foreach ($Country as $country){?>
										<option value="<?php echo $country['name'];?> "><?php echo $country['name'];?></option>
										<?php }?>
									</select>
                           		</div>
                               	<div class="col-md-1 col-sm-1 col-xs-2 bluebg" style="padding-right: 1px;padding-left: 1px;">
                               		<button type="button" onclick="filterBusinessStation1();">GO</button>
                               	</div>
                        	</div>
                           	<br>
                      	</form>
                        <div class="maxheight1" id="Layer68">
                            <div id="wb_Text244" style="position:absolute;left:61px;top:17px;width:84px;height:15px;text-align:center;z-index:46;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:12px;"><strong>REAL-TIME</strong></span>
							</div>
							<br>
                            <h3 class="font1s2">
                                <span>STOCKS MARKET<span>
                            </h3>
                            <div class="text-center displaydesktop">
                                <img src="<?php echo asset_url(); ?>images/trade-atationround0.png" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10 col-sm-3" style="padding-right:0px;padding-left:0px;">
	                        <ul class="nav nav-tabs">
	                            <li class="active nav121"><a data-toggle="tab" href="#home" class="stock-navtab">I Have This</a></li>
	                            <li class="nav122"><a data-toggle="tab" href="#menu1" class="stock-navtab2">I Need This</a></li>
                           		<!-- form  class="displaydesktop"-->
                                	<div class="row">
	                                    <div class=" col-md-offset-2 col-md-4 col-sm-4 col-xs-6" style="padding-right: 1px; padding-left: 1px;">
	                                        <input type="text" class="search-box" required="required" name="keyword" id="keyword" placeholder="Type the product name to seach..." id="keyword">
	                                    </div>
	                                    <div class="col-md-1 col-sm-2 col-xs-4" style="padding-right:2px;padding-left: 1px;">
											<select class="search-box" name="country" id="country_name">
												<option value="">Country</option>
												<?php foreach ($Country as $country){?>
												<option value="<?php echo $country['name'];?>"><?php echo $country['name'];?></option>
												<?php }?>
											</select>
	                                    </div>
	                                    <div class="col-md-1 col-sm-1 col-xs-2 bluebg" style=" padding-right: 1px;padding-left: 1px;">
	                                        <button type="button" onclick="filterBusinessStation();"> GO</button>
	                                    </div>
                                	</div>
                            	<!-- /form-->
                        	</ul>
							<div id="Layer74" class="" style="width:978px;">
								<div class="row" style="margin:0px;" id="newsellerpostfrm">
									
								</div>
								<div class="row" style="margin: 0px;">
									<div class="greystyle" style="background-color:#D3D3D3;padding-left:200px;">
										* Each post will get expired automatically after 7 days, to view the remains days or delete posts click " View My Posts".<br>
										* Don't repeat, duplicate or send the same post twice, so as you not affect the storage of your Stock Market Box.
									</div>
								</div>
							</div>
							<div id="Layer744" class="" style="width:943px;z-index: 200;">
								<div class="row" style="margin:0px;" id="newbuyerpostfrm">
									
								</div>
								<div class="row" style="margin: 0px;">
									<div class="greystyle" style="background-color:#E9F4FF;padding-left:200px;">
										* Each post will get expired automatically after 7 days, to view remains days, or delete posts click on " View My Post".<br>
										* Don't repeat, duplicate or send the same post twice, so as you not affect the storage of your stock market box.
									</div>
								</div>
							</div>
						
				    		<div class="tab-content">
				        		<div id="home" class="tab-pane fade in active content121">
				        			<?php if($tscategory_id == 1 || $tscategory_id == 2) { ?>
				            		<div class="tab1" style="padding-left:16px;">
						                <h3 class="leftbox1"><span style="color:#303030;font-family:Georgia;font-size:14px;"><strong>For Sellers</strong></span></h3>
						                <p class="leftbox2">Send " I Have This" Stock Post And Manage Your Previous Ones.</p>
						                <div id="Layer9">
						                    <img src="<?php echo asset_url(); ?>images/img0208.png" id="Image54" alt="" class="img46" style="width:30px !important;height:30px;"/>
						                    <?php if($usertype[0]['user_category_id'] =='1' || $usertype[0]['user_category_id'] =='2' ) { ?>
						                    <span style="color:#FFFFFF;font-family:Georgia;font-size:13px;padding-top:8px;">
						                    	<a href="javascript:openNewPostForm();" class="bststyle6">Add New Post</a>
						                    </span>
						                    <?php } else { ?>
						                    <span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:5px;">
						                    	<a href="#" class="bststyle6">Add New Post</a>
						                    </span>
						                    <?php } ?>
						                </div>
						                <div class="whitebox">
						                    <img src="<?php echo asset_url(); ?>images/Stockpostgre.png" id="Image54" alt="" class="img46 mp1">
						                    <span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:5px;">
						                    	<a href="javascript:viewMyPosts();" class="bststyle10">View My Posts</a>
						                    </span>
						                </div>
						                <div class="whitebox">
						                    <img src="<?php echo asset_url(); ?>images/closebuygre.png" id="Image54" alt="" class="img46 mp1">
						                    <span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:5px;">
						                    	<a href="#" onclick="ShowObjectWithEffect('Layer32', 0, 'fade', 500);ShowObjectWithEffect('Layer28', 1, 'fade', 500);return false;" class="bststyle10">Close My Posts</a>
						                    </span>
						              	</div>
						            </div>
						            <?php } ?>
						            <div id="Layer28" style="width: 1029px;height:625px;overflow-x: auto;">
				                
				           		</div>
									<div id="Layer32" style="width: 1029px;height:625px;overflow-x: auto;">
				             	</div>
					             	<br><br><br><br>
				        		</div>
				        		<div id="menu1" class="tab-pane fade content122">
						            <div id="Layer288" style="width: 1029px;height:625px;overflow-x: auto;">
						            </div>
									<div id="Layer322" style="width: 1029px;height:625px; overflow-x: auto;">
						            </div>
						            <?php if($tscategory_id == 3) { ?>
						            <div class="tab1" style="padding-left:16px;">
						                <h3 class="leftbox1"><span style="color:#303030;font-family:Georgia;font-size:14px;"><strong>For Buyers</strong></span></h3>
						                <p class="leftbox2">Send " I Have This" Stock Post And Manage Your Previous Ones.</p>
						                <div class="whitebox">
						                    <img src="<?php echo asset_url(); ?>images/img0205.png" id="Image54" alt="" class="img46" style="width:30px !important;height:30px;">
						                    <?php if($usertype[0]['user_category_id'] =='3' ) { ?>
						                    <span style="color:#FFFFFF;font-family:Georgia;font-size:13px;padding-top:8px;">
						                    	<a href="javascript:openNewBuyerPostForm();" class="bststyle7">Add New Post</a>
						                    </span>
						                	<?php } else { ?>
						                	<span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:5px;">
						                		<a href="#" class="bststyle7">Add New Post</a>
						                	</span>
						                	<?php } ?>
						                </div>
						                <div class="whitebox">
						                    <img src="<?php echo asset_url(); ?>images/viewmysellposts.png" id="Image54" alt="" class="img46 mp1">
						                    <span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:5px;">
						                    	<a href="javascript:viewBuyerPosts();" class="bststyle10">View My Posts</a>
						                    </span>
						                </div>
						                <div class="whitebox">
						                    <img src="<?php echo asset_url(); ?>images/closesellposts.png" id="Image54" alt="" class="img46 mp1">
						                    <span style="color:#FFFFFF;font-family:Georgia;font-size:14px;padding-top:5px;">
						                    	<a href="#" onclick="ShowObjectWithEffect('Layer322', 0, 'fade', 500);ShowObjectWithEffect('Layer288', 1, 'fade', 500);return false;" class="bststyle10">Close My Posts</a>
						                    </span>
						              	</div>
						            </div>
						            <?php } ?>
				        		</div>
				    		</div>
                    	</div>
                	</div>
            	</div>
        	</div>
    	</div>
<div id="Layer46" style="position: fixed; text-align: center; left: 0; top: 0; right: 0; bottom: 0; z-index: 1418;<?php if(!empty($_COOKIE['smarket-landing'])) { ?>display:none;<?php } ?>">
	<div id="Layer46_Container" style="width: 1280px; position: relative; margin-left: auto; margin-right: auto; text-align: left;">
		<div id="wb_Text84" style="position:absolute;left:195px;top:206px;width:194px;height:49px;z-index:534;text-align:left;">
			<span style="color:#4B4B4B;font-family:Arial;font-size:43px;">GLOBAL</span>
		</div>
		<div id="wb_Text85" style="position:absolute;left:192px;top:225px;width:441px;height:156px;z-index:536;text-align:left;">
			<span style="color:#00C9D0;font-family:Impact;font-size:128px;">STOCKS</span>
		</div>
		<div id="wb_Text86" style="position:absolute;left:193px;top:369px;width:431px;height:45px;z-index:537;text-align:left;">
			<span style="color:#696969;font-family:Arial;font-size:12px;">A Real-Time Stocks Market, Allows Businessmen Around The World To Sell, Buy And Ask For Stocks Or Ready Goods.. <br></span>
		</div>
		<div id="wb_Image58" style="position:absolute;left:605px;top:119px;width:600px;height:600px;z-index:3;">
			<img src="<?php echo asset_url();?>images/img0202.png" id="Image58" alt="">
		</div>
		<div id="Layer66" style="position:absolute;text-align:center;left:193px;top:436px;width:631px;height:37px;z-index:538;">
			<div id="Layer66_Container" style="width:631px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
				<!-- form name="SiteSearch3_form" id="SiteSearch3_form" accept-charset="UTF-8" onsubmit="return searchPage(features)" -->
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
	</div>
</div>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script src="<?php echo asset_url();?>js/jquery.cookie.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>
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
			$.get(base_url+"stockmarket/seller/newpost/form",{},function(data){
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
							},
													
					    }
					}).on('success.form.bv', function(event,data) {
						// Prevent form submission
						event.preventDefault();
						var imgselect = $('#cimg1').val();
						if(imgselect != ''){
							addPostContent();
						}else{
							$('.errormsg').html('<small class="help-block" data-bv-validator="notEmpty" data-bv-result="INVALID" style="">First Image is manadatory!</small>');
						}
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
	 		url : base_url+'stockmarket/addsellerpost',
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
		$.get(base_url+"stockmarket/buyer/newpost/form",{},function(data){
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
	 		url : base_url+'stockmarket/addbuyerpost',
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

function searchBusinessStation() {
	var keyword = $("#SiteSearch3").val();
	var country = $("#top_country_id").val();
	if(keyword.trim() != "" || country.trim() != " ") {
		ajaxindicatorstart("");
		$.post(base_url+"stockmarket/search/posts",{keyword: keyword, country: country},function(data){
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
			$.cookie('smarket-landing', '1', { expires: 365 });
		    $.cookie('smarket-keyword', keyword, { expires: 365 });
		    $.cookie('smarket-country', country, { expires: 365 });
		},'json');
	} else {
		//if(keyword == "" && country == "") {
			alert("Please enter search keyword and select country");
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
function filterBusinessStation() {
	
	var keyword = $("#keyword").val();
	var country = $("#country_name").val();
	if(keyword.trim() != "" || country.trim() != "") {
		ajaxindicatorstart("");
		$.post(base_url+"stockmarket/search/posts",{keyword: keyword, country: country},function(data){
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
			$.cookie('smarket-landing', '1', { expires: 365 });
		    $.cookie('smarket-keyword', keyword, { expires: 365 });
		    $.cookie('smarket-country', country, { expires: 365 });
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
    $('#postdatacontent').show();
    $("input[name='cimgchk[]']:checked").each(function(index) {
        $('#postphoto'+(index+1)).css('background-image','url('+base_url+'assets/'+$(this).val()+')').css('background-size','cover');
        $("#cimg"+(index+1)).val($(this).val());
   	});
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
	ajaxindicatorstart("");
	$.get(base_url+"stockmarket/seller/myposts",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer28', 0, 'fade', 500);
		ShowObjectWithEffect('Layer32', 1, 'fade', 500);
		$("#Layer32").html(data);
	},'html');
}

function deleteMyPost(id) {
	if($("#delete_chk"+id).prop("checked") == true) {
		$.get(base_url+"stockmarket/seller/post/delete/"+id,{},function(){
			viewMyPosts();
		},'json');
	} else {
		alert("Please select post.");
	}
}

function closeMyPost(key) {
	ShowObject('Layer5_'+key, 0);
	/*$.get(base_url+"stockmarket/seller/post/close/"+id,{},function(){
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
		$.get(base_url+"stockmarket/seller/post/delete/"+id,{},function(){
			viewBuyerPosts();
		},'json');
	} else {
		alert("Please select post.");
	}
}
function viewBuyerPosts() {
	ajaxindicatorstart("");
	$.get(base_url+"stockmarket/buyer/myposts",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer288', 0, 'fade', 500);
		ShowObjectWithEffect('Layer322', 1, 'fade', 500);
		$("#Layer322").html(data);
	},'html');
}
$(document).ready(function() {
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
<?php if(!empty($_COOKIE['smarket-landing'])) { ?>
var keyword = '<?php echo $_COOKIE['smarket-keyword'];?>';
var country = '<?php echo $_COOKIE['smarket-country'];?>';
$("#Layer46").hide();
ajaxindicatorstart("");
$.post(base_url+"stockmarket/search/posts",{keyword: keyword, country: country},function(data){
	ajaxindicatorstop();
	$("#Layer28").html(data.posts);
	$("#Layer288").html(data.requests);
	ShowObjectWithEffect('Layer2', 1, 'slidedown', 500, 'swing');
	/*$("a[data-rel='PhotoGallery1']").attr('rel', 'PhotoGallery1');
    $("a[rel^='PhotoGallery1']").slimbox({
        overlayOpacity: 0.8
    }, null, function(el) {
        return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
    });*/
	$('[name=keyword]').val(keyword);
    $('[name=country]').val(country);
},'json');
<?php } ?>
</script>