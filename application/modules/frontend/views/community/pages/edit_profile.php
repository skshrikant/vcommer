<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Profile</title>
<meta name="description" content="The World's First Social B2B Platform">
<meta name="keywords" content="sourcing product, e-commerce, business, trade, commerce, community, video tube, business chat, buyers, sellers, shippers, products, china. exporters, suppliers">
<meta name="author" content="Hazem Zaki">
<meta name="categories" content="E-Commerce">
<meta name="generator" content="Hotline Internet & Technology Co. Ltd.">
<link href="<?php echo asset_url();?>css/station.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/pages/edit_profile.css" rel="stylesheet">
<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-blind.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-bounce.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-clip.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-drop.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-explode.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-fade.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-fold.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-highlight.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-pulsate.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-scale.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-shake.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.effect-slide.min.js"></script>
<script>
function ValidateLayer4(theForm)
{
   var regexp;
   if (theForm.Editbox1.value == "")
   {
      alert("Please enter a value for the \" Add Nickname \" field.");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value.length < 2)
   {
      alert("Please enter at least 2 characters in the \" Add Nickname \" field.");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value.length > 20)
   {
      alert("Please enter at most 20 characters in the \" Add Nickname \" field.");
      theForm.Editbox1.focus();
      return false;
   }
   return true;
}
</script>
<script src="<?php echo asset_url();?>js/wwb10.min.js"></script>
</head>
<body>
	<div id="Layer1" style="position: absolute; text-align: left; left: 0px; top: 0px; width: 416px; height: 701px; z-index: 44;">
		<div id="Layer8" style="position: absolute; text-align: left; left: 84px; top: 38px; width: 296px; height: 37px; z-index: 19;">
		</div>
		<div id="wb_Image94" style="position: absolute; left: 36px; top: 33px; width: 45px; height: 45px; z-index: 20;">
			<img src="<?php echo asset_url();?>images/editprofile0.png" id="Image94" alt="">
		</div>
		<div id="wb_Text17"
			style="position: absolute; left: 93px; top: 43px; width: 248px; height: 23px; z-index: 21; text-align: left;">
			<span style="color: #FFFFFF; font-family: Georgia; font-size: 19px;"><strong>Edit Hidden Profile</strong></span>
		</div>
		<div id="Layer2" style="position: absolute; text-align: left; left: 36px; top: 84px; width: 345px; height: 591px; z-index: 22;">
			<div id="Layer4" style="position: absolute; text-align: left; left: 14px; top: 19px; width: 318px; height: 515px; z-index: 17;<?php if(!empty($userinfo[0]['nickname'])) { ?>hidden;<?php } else { ?>visible;<?php } ?>">
				<div id="wb_Shape2" style="position: absolute; left: 72px; top: 452px; width: 168px; height: 30px; z-index: 5;">
					<a href="javascript:window.open('','_parent','');window.close()">
						<div id="Shape2">
							<div id="Shape2_text">
								<span style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 12px;">Cancel</span>
							</div>
						</div>
					</a>
				</div>
				<div id="wb_save" style="position: absolute; left: 72px; top: 412px; width: 168px; height: 30px; z-index: 6;">
					<a href="javascript:saveProfile();">
						<div id="save">
							<div id="save_text">
								<span style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 12px;">Save &amp; View</span>
							</div>
						</div>
					</a>
				</div>
				<div id="wb_Shape68" style="position: absolute; left: 77px; top: 32px; width: 170px; height: 170px; z-index: 7;">
					<img src="<?php echo asset_url();?><?php echo $userinfo[0]['profile_image'];?>" id="Shape68" alt="" style="width: 170px; height: 170px;border-radius:50%;border:1px solid #ccc;">
				</div>
				<div id="wb_Text47" style="position: absolute; left: 17px; top: 300px; width: 282px; height: 84px; text-align: justify; z-index: 8;">
					<span style="color: #696969; font-family: Arial; font-size: 11px;">When
						you communicate in active way with others, and share your opinion
						with them through (Like or Comments) features, you may not prefer
						other member of the same industry come to know that you are a
						member of some sellers or buyers community, which could leads to
						affect or even limit your actives.. </span>
				</div>
				<input type="text" id="Editbox1" style="position: absolute; left: 18px; top: 236px; width: 274px; height: 30px; line-height: 30px; z-index: 9;" name="nickname" value="" maxlength="20" placeholder="Type a nickname">
			</div>
			<div id="Layer3" style="position: absolute; text-align: left; visibility: <?php if(!empty($userinfo[0]['nickname'])) { ?>visible;<?php } else { ?>hidden;<?php } ?> left: 16px; top: 21px; width: 312px; height: 515px; z-index: 18;">
				<div id="wb_Text4" style="position: absolute; left: 91px; top: 243px; width: 117px; height: 14px; text-align: center; z-index: 10;">
					<span style="color: #696969; font-family: Arial; font-size: 11px;">Your Nickname Is</span>
				</div>
				<div id="wb_Shape3" style="position: absolute; left: 75px; top: 30px; width: 169px; height: 168px; z-index: 11;">
					<img src="<?php echo asset_url();?>images/img3470.png" id="Shape3" alt="" style="width: 169px; height: 168px;">
				</div>
				<div id="wb_Shape4" style="position: absolute; left: 70px; top: 410px; width: 168px; height: 30px; z-index: 12;">
					<a href="javascript:removeNickName();">
						<div id="Shape4">
							<div id="Shape4_text">
								<span style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 12px;">Remove My Hidden Profile</span>
							</div>
						</div>
					</a>
				</div>
				<div id="wb_Shape5" style="position: absolute; left: 70px; top: 450px; width: 168px; height: 30px; z-index: 13;">
					<a href="javascript:window.open('','_parent','');window.close()">
						<div id="Shape5">
							<div id="Shape5_text">
								<span style="color: #FFFFFF; font-family: 'MS Shell Dlg'; font-size: 12px;">Close</span>
							</div>
						</div>
					</a>
				</div>
				<div id="wb_Text2" style="position: absolute; left: 55px; top: 208px; width: 203px; height: 16px; text-align: center; z-index: 14;">
					<span style="color: #1E90FF; font-family: Georgia; font-size: 13px;"><strong>Your Hidden Profile Is On</strong></span>
				</div>
				<div id="wb_Text1" style="position: absolute; left: 15px; top: 298px; width: 282px; height: 84px; text-align: justify; z-index: 15;">
					<span style="color: #696969; font-family: Arial; font-size: 11px;">Use hidden profile feature in your community, when you want to share a like or send a comment to a certain member and you don’t prefer other member know that you are a member of his community, so you can keep your profile image and name hidden.. </span>
				</div>
				<div id="wb_Text3" style="position: absolute; left: 52px; top: 265px; width: 203px; height: 16px; text-align: center; z-index: 16;">
					<span style="color: #1E90FF; font-family: Georgia; font-size: 13px;"><strong id="nickname-label"><?php if(!empty($userinfo[0]['nickname'])) {echo $userinfo[0]['nickname'];}?></strong></span>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<script>
function saveProfile() {
	$.post("<?php echo base_url();?>mybusiness/profile/update",{nickname: $("#Editbox1").val()},function(){
		ShowObjectWithEffect('Layer4', 0, 'fade', 10);
		ShowObjectWithEffect('Layer3', 1, 'fade', 10);
		$("#nickname-label").html($("#Editbox1").val());
	});
}
function removeNickName() {
	$.post("<?php echo base_url();?>mybusiness/profile/update",{nickname: ''},function(){
		ShowObjectWithEffect('Layer4', 1, 'fade', 10);
		ShowObjectWithEffect('Layer3', 0, 'fade', 10);
		$("#nickname-label").html('');
		$("#Editbox1").val('')
	});
}
</script>