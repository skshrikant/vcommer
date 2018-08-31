<style>
a.style5_99
{
   color: #ffffff;
   text-decoration: none;
}
a.style5_99:visited
{
   color: #ffffff;
   text-decoration: none;
}
a.style5_99:active
{
   color: #ffffff;
   text-decoration: none;
}
a.style5_99:hover
{
   color: #FF6347;
   text-decoration: none;
}
</style>
<div class="padding76">
<link rel="" href="<?php echo asset_url(); ?>css/pages/stock_market.css" />
<link rel="stylesheet" href="<?php echo asset_url(); ?>css/pages/basictools.css" />
<div class="col-md-10 col-md-offset-2">
<div class="row whitesearch">
<div class="col-md-1 col-sm-1 col-xs-1 displaydesktop">
<p class="whitepage">Page</p>
</div>
<div class="col-md-6 col-sm-6 col-xs-6 inline">
<p class="pagesearch m6" >1 of 50 </p>
<h3 class="center searchtext">VIEW MORE</h3>
</div>
<div class="col-md-3 col-sm-3 col-xs-3 inline">
<p class="pagesearch"> Page No</p>
<input type="text" class="b1">
</div>
<div class="col-md-1 col-sm-1 col-xs-1 col-xs-offset-1">
<button class="whitepage">GO
    </button>
</div>
</div>
</div>


<div class="col-sm-12 text-center copyright" id="Layer295" style="height:40px">
    <p style="color:#DCDCDC;font-family:Arial;font-size:11px;padding-top:13px">COPYRIGHTS | TRDSTATION 2013-2016 @ ALL RIGHTS RESERVED</p>
</div>
</div>
<div id="myalertModal" class="modal modal-alert fade" role="dialog">
  	<div class="modal-dialog" style="width:100%;">
    	<div class="modal-content" style="border-radius:0px;">
      		<div class="modal-body" style="padding:0px;">
      			<div class="row editaccount_outer">
					<div class="col-md-2 account-left-nav"> 
						<div class="col-md-12" style="padding:0px;">
							<div class="account-image" style="padding-top:10px;">
								<a href=""><img class="hover" alt="" src="<?php echo asset_url();?>images/Alerts1.png"></a>
							</div>
							<div class="account-image" style="padding-top: 3px;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Alerts</span>
							</div>
							<div id="RollOver55"  style="position: absolute; left: 63px; top: 110px; overflow: hidden; width: 50%; height: 40px; z-index: 1680">
								<a href="javascript:openFavoriteInfo(1);"> 
									<img class="hover" alt="" src="<?php echo asset_url();?>images/myfavor0red.png" style="width:40px;"> 
									<span><img alt="" src="<?php echo asset_url();?>images/myfavor0.png" style="width:40px;"></span>
								</a>
							</div><br>
							<div style="position: absolute;top: 157px;text-align:center;width: 160px;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">My Favorite</span>
							</div>
							<div id="RollOver51" style="position: absolute; left: 63px; top: 192px; overflow: hidden; width: 47%; height: 40px; z-index: 1681">
								<a href="javascript:openMycart();"> 
									<img class="hover" alt="" src="<?php echo asset_url();?>images/mycartgren.png" style="width:40px;"> 
									<span>
										<img alt="" src="<?php echo asset_url();?>images/mycart.png" style="width:40px;">
									</span>
								</a>
							</div><br>
							<div style="position: absolute;top: 240px;text-align:center;width: 160px;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">My Cart</span>
							</div>
							<div id="RollOver54" style="position: absolute; left: 63px; top:274px; overflow: hidden; width: 50%; height: 40px; z-index: 1683;">
								<a href="javascript:openRequest();"> 
									<img class="hover" alt="" src="<?php echo asset_url();?>images/addrequescolort.png" style="width:40px;"> 
									<span>
										<img alt="" src="<?php echo asset_url();?>images/addrequest.png" style="width:40px;">
									</span>
								</a>
								<div id="totalrequest" style="position:absolute;top:13px;left:35px;width:32px;height:16px;padding:1px;background-color:#ff0017;color:#fff;border-radius:2px;text-align:center;z-index:2;font-size:11px;"><?php echo $gblrequests; ?></div>
							</div><br>
							<div style="position:absolute;top:322px;text-align:center;width: 160px;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">Add Requests</span>
							</div>
							<div id="RollOver58" style="position: absolute; left: 63px; top: 356px; overflow: hidden; width: 50%; height: 40px; z-index: 1695;">
								<a href="javascript:openChat();"> 
									<img class="hover" alt="" src="<?php echo asset_url();?>images/incomingchatalertscolor.png" style="width:40px;">
									<span>
										<img alt="" src="<?php echo asset_url();?>images/incomingchatalerts.png" style="width:40px;">
									</span>
								</a>
								<div style="position:absolute;top:13px;left:35px;width:32px;height:16px;padding:1px;background-color:#ff0017;color:#fff;border-radius:2px;text-align:center;z-index:2;font-size:11px;">4</div>
							</div><br>
							<div style="position:absolute;top:404px;text-align:center;width: 160px;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">Chat Alerts</span>
							</div>
							<div id="RollOver52" style="position: absolute; left: 63px; top: 438px; overflow: hidden; width: 50%; height: 40px; z-index: 1687;">
								<a href="javascript:openInquiry();"> <img class="hover" alt="" src="<?php echo asset_url();?>images/inquiryoffwhite.png" style="width:40px;"> <span>
									<img alt="" src="<?php echo asset_url();?>images/inquiry.png" style="width:40px;"></span>
								</a>
								<div id="totalinquiry" style="position:absolute;top:13px;left:35px;width:32px;height:16px;padding:1px;background-color:#ff0017;color:#fff;border-radius:2px;text-align:center;z-index:2;font-size:11px;"><?php echo $gblinquiries;?></div>
							</div>
							<br>
							<div style="position:absolute;top:486px;text-align:center;width: 160px;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">Inquiries</span>
							</div>
							<div id="RollOver53" style="position: absolute; left: 63px; top: 520px; overflow: hidden; width: 50%; height: 40px; z-index: 1691;">
								<a href="javascript:openOffer();"> 
									<img class="hover" alt="" src="<?php echo asset_url();?>images/offer-tool2.png" style="width:40px;"> 
									<span>
										<img alt="" src="<?php echo asset_url();?>images/offer-tool1.png" style="width:40px;">
									</span>
								</a>
								<div id="totaloffer" style="position:absolute;top:13px;left:35px;width:32px;height:16px;padding:1px;background-color:#ff0017;color:#fff;border-radius:2px;text-align:center;z-index:2;font-size:11px;"><?php echo $gbloffers;?></div>
							</div>
							<br>
							<div style="position:absolute;top:568px;text-align:center;width: 160px;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">Offers</span>
							</div>
							<div id="RollOver56" style="position: absolute; left: 63px; top: 602px; overflow: hidden; width: 50%; height: 40px; z-index: 1699;">
								<a onclick="javascript:sellerOrder();" target="_blank">
									<img class="hover" alt="" src="<?php echo asset_url();?>images/My-order-color.png" style="width:40px;"> 
									<span>
										<img alt="" src="<?php echo asset_url();?>images/My-order.png" style="width:40px;">
									</span>
								</a>
								<div id="totalorder" style="position:absolute;top:13px;left:35px;width:32px;height:16px;padding:1px;background-color:#ff0017;color:#fff;border-radius:2px;text-align:center;z-index:2;font-size:11px;"><?php echo $gblorders;?></div>
							</div><br>
							<div style="position:absolute;top:650px;text-align:center;width: 160px;">
								<span style="color:#FFFFFF;font-family:Arial;font-size:12px;">My Orders</span>
							</div>
						</div>
					</div>
					<div class="col-md-10 account-content-area">
							<div class="panel panel-default" id="alertbodypanel">
									
							</div>
					</div>
				</div>
      		</div>
    	</div>
  	</div>
</div>
<div id="Layer99" style="position:fixed;left:0;top:0px; text-align: center; visibility: hidden; margin:20% 36%; width: 380px; height: 110px; float: left; display: block; z-index: 1000000;background-color: #4B4B4B;border: 1px #A9A9A9 solid;-moz-border-radius: 2px; -webkit-border-radius: 2px; border-radius: 2px; -moz-box-shadow: 2px 2px 12px #000000;-webkit-box-shadow: 2px 2px 12px #000000;box-shadow: 2px 2px 12px #000000;">
	<div id="Layer99_Container" style="width:332px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
		<div id="wb_Text145" style="padding-top: 15px;width:332px;position:relative;margin-left:auto;margin-right:auto;text-align:left;z-index:3529;text-align: center;">
		<span style="color:#C0C0C0;font-family:Georgia;font-size:12px;" id="msg_cont">ADDED SUCCESFULLY TO YOUR FAVORITE</span></div>
		<div id="Layer282" style="position:absolute;text-align:left;left:100px;top:75px;width:133px;height:24px;z-index:3530;background-color: #787878;" onclick="ShowObject('Layer99', 0);return false;">
		<div id="wb_Text146" style="position:absolute;left:45px;top:4px;width:49px;height:16px;text-align:center;z-index:3528;">
		<span style="color:#FFFFFF;font-family:Georgia;font-size:13px;"><a href="#" class="style5_99" onclick="ShowObject('Layer99', 0);return false;">OK</a></span></div>
		</div>
	</div>
</div>
<div id="Layer223" style="position: fixed; text-align: center; visibility: hidden; left: 0px; top: 0px; right: 0px; bottom: 0px; z-index: 4935; display: block;">
	<div id="Layer223_Container" style="width:1280px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
		<div id="Layer139" style="position:absolute;text-align:center;left:513px;top:326px;width:277px;height:163px;z-index:4881;">
			<div id="Layer139_Container" style="width:277px;position:relative;margin-left:auto;margin-right:auto;text-align:left;" class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php echo base_url();?>" data-a2a-title="Awesome business website, worth spreading..!!" data-a2a-text="Discover an immersive B2B experience, built to wow your audience and push your business towards a new generation of Ecommerce..!!">
				<div id="RollOver64" style="position:absolute;left:32px;top:19px;width:45px;height:45px;z-index:4873">
					<a class="a2a_button_google_plus">
						<div class="image_container">
							<div class="front"><img alt="" src="<?php echo asset_url();?>images/google.png" class="share-btns"></div>
							<div class="back"><img alt="" src="<?php echo asset_url();?>images/google0.png" class="share-btns"></div>
						</div>
					</a>
				</div>
				<div id="RollOver65" style="position:absolute;left:89px;top:19px;width:45px;height:45px;z-index:4874">
					<a class="a2a_button_facebook">
						<div class="image_container">
							<div class="front"><img alt="" src="<?php echo asset_url();?>images/face.png" class="share-btns"></div>
							<div class="back"><img alt="" src="<?php echo asset_url();?>images/face0.png" class="share-btns"></div>
						</div>
					</a>
				</div>
				<div id="RollOver66" style="position:absolute;left:146px;top:19px;width:45px;height:45px;z-index:4875">
					<a class="a2a_button_twitter">
						<div class="image_container">
							<div class="front"><img alt="" src="<?php echo asset_url();?>images/twitter.png" class="share-btns"></div>
							<div class="back"><img alt="" src="<?php echo asset_url();?>images/twitter0.png" class="share-btns"></div>
						</div>
					</a>
				</div>
				<div id="RollOver67" style="position:absolute;left:32px;top:78px;width:45px;height:45px;z-index:4876">
				<a class="a2a_button_pinterest">
					<div class="image_container">
						<div class="front"><img alt="" src="<?php echo asset_url();?>images/pin.png" class="share-btns"></div>
						<div class="back"><img alt="" src="<?php echo asset_url();?>images/pin0.png" class="share-btns"></div>
					</div>
				</a>
				</div>
				<div id="RollOver68" style="position:absolute;left:203px;top:19px;width:45px;height:45px;z-index:4877">
					<a class="a2a_button_linkedin">
						<div class="image_container">
							<div class="front"><img alt="" src="<?php echo asset_url();?>images/linkedin.png" class="share-btns"></div>
							<div class="back"><img alt="" src="<?php echo asset_url();?>images/linkedin0.png" class="share-btns"></div>
						</div>
					</a>
				</div>
				<div id="RollOver69" style="position:absolute;left:89px;top:78px;width:45px;height:45px;z-index:4878">
					<a class="a2a_button_email">
						<div class="image_container">
							<div class="front"><img alt="" src="<?php echo asset_url();?>images/mail-round-filled.png" class="share-btns"></div>
							<div class="back"><img alt="" src="<?php echo asset_url();?>images/mail-round.png" class="share-btns"></div>
						</div>
					</a>
				</div>
				<div id="RollOver70" style="position:absolute;left:146px;top:78px;width:45px;height:45px;z-index:4879">
					<a class="a2a_button_wechat">
						<div class="image_container">
							<div class="front"><img alt="" src="<?php echo asset_url();?>images/wechat.png" class="share-btns"></div>
							<div class="back"><img alt="" src="<?php echo asset_url();?>images/wechat0.png" class="share-btns"></div>
						</div>
					</a>
				</div>
				<div id="RollOver71" style="position:absolute;left:203px;top:78px;width:45px;height:45px;z-index:4880">
					<a class="a2a_button_whatsapp">
						<div class="image_container">
							<div class="front"><img alt="" src="<?php echo asset_url();?>images/whatsapp.png" class="share-btns"></div>
							<div class="back"><img alt="" src="<?php echo asset_url();?>images/whatsapp.png" class="share-btns"></div>
						</div>
					</a>
				</div>
				<div style="text-align: center;position: absolute;top: 130px;left: 120px;"><a href="" id="a2apage_show_more_less" class="a2a_menu_show_more_less a2a_more" title="Show all" style="font-size:16px;font-weight:bold;border-bottom:0px;">More…</a></a></div>
			</div>
		</div>
		<div id="wb_Image103" style="position:absolute;left:777px;top:300px;width:40px;height:40px;z-index:4882;">
			<a href="#" onclick="ShowObjectWithEffect('Layer223', 0, 'fade', 500);return false;"><img src="<?php echo asset_url();?>images/img0482.png" id="Image103" alt=""></a>
		</div>
	</div>
</div>
<script async src="//static.addtoany.com/menu/page.js"></script>
<div id="customAlertBox" class="modal fade" role="dialog" style="z-index:13000;">
  	<div class="modal-dialog" style="width:400px;">
    	<div class="modal-content" style="border-radius:0px;margin-top:25%;">
      		<div class="modal-body">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-2"></div>
      				<div class="col-sm-8">
	      				<div style="text-align: center;">
							<span style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;"></span>
						</div>
						<br><br>
						<div style="text-align: center;" id="customAlertText">
							My Alert
						</div>
					</div>
					<div class="col-sm-2"></div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<a href="" class="btn btn-sm btn-danger-custom" data-dismiss="modal" style="width:100px;">OK</a>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>
<script src="<?php echo asset_url(); ?>js/custom/frontalerts.js"></script>
<script>
function addToMyFavourite(fav_id,type) {
	$.get(base_url+"addtofavourite/"+fav_id+"/"+type,{},function(data) {
		if(data.status == 1) {
			$("#msg_cont").html(data.msg);
		} else {
			$("#msg_cont").html(data.msg);
		}
		ShowObject('Layer99', 1);
	},'json');
}
function shareToWorld(url,title,type,id) {
	var a2a_config = a2a_config || {};
	a2a_config.templates = a2a_config.templates || {};

	a2a_config.templates.email = {
	    subject: "Awesome business website, worth spreading..!!",
	    body: "Discover an immersive B2B experience, built to wow your audience and push your business towards a new generation of Ecommerce..!!"
	};

	a2a_config.templates.sms = {
	    body: "Check this out: Awesome business website, worth spreading..!! ${link}"
	};

	a2a_config.templates.twitter = {
	    text: "Awesome business website, worth spreading..!! ${link}",
	    related: "Trade Station"
	};

	a2a_config.templates.whatsapp = {
	    text: "Awesome business website, worth spreading..!! ${link}"
	};
	$("#Layer139_Container").attr("data-a2a-url",url);
	if(type != 1) {
		$("#Layer139_Container").attr("data-a2a-title",title);
	} else { 
		$("#Layer139_Container").attr("data-a2a-title",'Awesome business website, worth spreading..!!');
	}
	ShowObjectWithEffect('Layer223', 1, 'scale', 500);
	$.get(base_url+"desksite/share",{ type: type, id: id}, function(data) {
		//
	},'json');
}
function addToCommunity(id) {
	$.get(base_url+"addtomycommunity/"+id,{},function(data) {
		if(data.status == 1) {
			$("#msg_cont").html(data.msg);
		} else {
			$("#msg_cont").html(data.msg);
		}
		ShowObject('Layer99', 1);
	},'json');
}
function likeVideo(id) {
	$.get(base_url+"likevideo/"+id,{},function(data) {
		$("#msg_cont").html(data.msg);
	},'json');
}
function likeBusiness(id) {
	$.get(base_url+"likebusiness/"+id,{},function(data) {
		alert(data.msg);
	},'json');
}
function customAlert(msg) {
	$("#customAlertText").html(msg);
	$('#customAlertBox').modal({show:true,backdrop: 'static',keyboard: false});
}
function getAlerts()
{
	var type = 1;
	$.post(base_url+"mystation/favoriteinfo",{type:type},function(data){
		$("#alertbodypanel").html(data);
		$(".alerts-btn-selected").removeClass('alerts-btn-selected');
		$("#alert-fab-"+type).addClass('alerts-btn-selected');
		if(type == 1)
		{
			$("#seller_div").show();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#product_div").hide();
			$("#vedio_div").hide();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#ads_div").hide();
			$("#post_div").hide();
			$('.product-carousel').carousel({
		        interval: 3000
		    });
		}
		if(type == 2)
		{
			$("#seller_div").hide();
			$("#shipper_div").show();
			$("#buyer_div").hide();
			$("#vedio_div").hide();
			$("#product_div").hide();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#ads_div").hide();
			$("#post_div").hide();
			$('.alertcarousel2').carousel({
		        interval: 3000
		    });
		}
		if(type == 3)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#product_div").hide();
			$("#vedio_div").hide();
			$("#buyer_div").show();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#ads_div").hide();
			$("#post_div").hide();
			$('.alertcarousel3').carousel({
		        interval: 3000
		    });
		}
		if(type == 4)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#vedio_div").hide();
			$("#product_div").show();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#ads_div").hide();
			$("#post_div").hide();
			$('.alertcarousel4').carousel({
		        interval: 3000
		    });
		}
		if(type == 5)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#product_div").hide();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#vedio_div").show();
			$("#ads_div").hide();
			$("#post_div").hide();
		}
		if(type == 6)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#product_div").hide();
			$("#vedio_div").hide();
			$("#catalouge_div").hide();
			$("#dproduct_div").show();
			$("#ads_div").hide();
			$("#post_div").hide();
		}
		if(type == 7)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#product_div").hide();
			$("#vedio_div").hide();
			$("#dproduct_div").hide();
			$("#catalouge_div").show();
			$("#ads_div").hide();
			$("#post_div").hide();
		}
		if(type == 8)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#product_div").hide();
			$("#vedio_div").hide();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#ads_div").show();
			$("#post_div").hide();
		}
		if(type == 9)
		{
			$("#seller_div").hide();
			$("#shipper_div").hide();
			$("#buyer_div").hide();
			$("#product_div").hide();
			$("#vedio_div").hide();
			$("#dproduct_div").hide();
			$("#catalouge_div").hide();
			$("#ads_div").hide();
			$("#post_div").show();
		}
	
	});
	$('.carousel').carousel({
      interval: 2000
    });
}
function closeAlert(){
	$("#myalertModal").modal('hide');
}
</script>