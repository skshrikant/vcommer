<?php
//
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<meta name="description" content="The World's First Social B2B Platform">
<meta name="keywords" content="sourcing product, e-commerce, business, trade, commerce, community, video tube, business chat, buyers, sellers, shippers, products, china. exporters, suppliers">
<meta name="author" content="Hazem Zaki">
<meta name="categories" content="E-Commerce">
<meta name="generator" content="Hotline Internet & Technology Co. Ltd.">
<link href="<?php echo asset_url(); ?>css/bootstrap.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/station.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/login.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo asset_url();?>images/Homekit.png">
<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url();?>js/wb.stickylayer.min.js"></script>
<script src="<?php echo asset_url();?>js/wwb10.min.js"></script>
<script src="<?php echo asset_url(); ?>js/bootstrap.js"></script>
<script>
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><i class="fa fa-spinner fa-5x"></i><div>'+text+'</div></div><div class="bg"></div></div>');
	}

	jQuery('#resultLoading').css({
		'width':'100%',
		'height':'100%',
		'position':'fixed',
		'z-index':'10000000',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto'
	});

	jQuery('#resultLoading .bg').css({
		'background':'#000000',
		'opacity':'0.7',
		'width':'100%',
		'height':'100%',
		'position':'absolute',
		'top':'0'
	});

	jQuery('#resultLoading>div:first').css({
		'width': '250px',
		'height':'75px',
		'text-align': 'center',
		'position': 'fixed',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto',
		'font-size':'16px',
		'z-index':'10',
		'color':'#ffffff'

	});

    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeIn(300);
    jQuery('body').css('cursor', 'wait');
}
function ajaxindicatorstop()
{
    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeOut(300);
    jQuery('body').css('cursor', 'default');
}
</script>
<script>
$(document).ready(function()
{
   $("#Layer2").stickylayer({orientation: 2, position: [220, 350], delay: 0});
});
</script>
</head>
<body>
<div id="Layer46" style="position:fixed;text-align:left;left:0;top:0;right:0;bottom:0;z-index:44;">
<div id="Layer1" style="position:fixed;text-align:center;left:0;top:0;right:0;bottom:0;z-index:24;">
<div id="Layer1_Container" style="width:1280px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
</div>
</div>
<div id="Layer2" style="position:absolute;text-align:right;left:815px;top:383px;width:431px;height:106px;z-index:25;">
<div id="Layer2_Container" style="width:431px;position:relative;margin-left:auto;margin-right:0;text-align:left;">
<div id="wb_Text10" style="position:absolute;left:70px;top:8px;width:292px;height:39px;z-index:4;text-align:left;">
<span style="color:#FFFFFF;font-family:Impact;font-size:32px;">SOCIAL B2B PLATFORM</span></div>
<div id="wb_Text9" style="position:absolute;left:52px;top:58px;width:324px;height:22px;text-align:center;z-index:5;">
<span style="color:#FFFFFF;font-family:Arial;font-size:19px;">Generating Customers Each Second</span></div>
<hr id="Line1" style="position:absolute;left:59px;top:52px;width:310px;height:1px;z-index:6;">
<hr id="Line2" style="position:absolute;left:59px;top:88px;width:310px;height:1px;z-index:7;">
</div>
</div>
<!-- forgot password start-->
<div id="Recover_password" style="position:absolute;text-align:left;visibility:hidden;left:0px;top:0px;width:626px;height:775px;z-index:26;">
<div id="wb_PasswordRecovery1" style="position:absolute;left:121px;top:190px;width:401px;height:129px;z-index:8;">
<form name="forgotpasswordform" method="post" action="" id="forgotpasswordform">
<input type="hidden" name="form_name" value="forgotpasswordform">
<table id="PasswordRecovery1">
<tr>
   <td class="PasswordRecovery1_header" colspan="2" style="height:17px;">Forgot your password?</td>
</tr>
<tr>
   <td style="height:37px;width:95px;">Email</td>
   <td style="text-align:left"><input placeholder="Please enter your account unique email ID" class="form-control PasswordRecovery1_input" id="forgotemail" name="forgotemail" type="text" id="email"></td>
</tr>
<tr class="retrievePassword">
	<td style="height:37px;width:95px;">Retrieve Code</td>
	<td style="text-align:left"><input placeholder="code" class="form-control PasswordRecovery1_input" id="securityCode" name="securityCode" type="text"></td>
</tr>
<tr class="retrievePassword">
	<td style="height:37px;width:95px;">New Password</td>
	<td style="text-align:left"><input placeholder="New Password" class="form-control PasswordRecovery1_input" id="securityPassword" name="securityPassword" type="password" ></td>
</tr>
<tr class="retrievePassword">
	<td style="height:37px;width:95px;">Confirm New Password</td>
	<td style="text-align:left"><input placeholder="Confirm New Password" class="form-control PasswordRecovery1_input" id="securityConfirmPassword" name="securityConfirmPassword" type="password"></td>
</tr>
<tr>
 	<td style="height:25px"></td>
     <td  id="forgotEmailErrMsg" style="color:red;font-weight:bold;display:none;" ></td>
</tr>
<tr>
 	<td style="height:25px"></td>
     <td  id="forgotEmailsuccessMsg" style="color:green;font-weight:bold;display:none;" ></td>
</tr>
<tr>
   <td>&nbsp;</td><td style="text-align:left;vertical-align:bottom">
   <input class="PasswordRecovery1_button" type="button" onclick="return forgetpassword()"  name="submit" value="Submit" id="submit"></td>
</tr>
</table>
</form>
</div>
<div id="wb_Text2" style="position:absolute;left:226px;top:177px;width:230px;height:16px;z-index:9;text-align:left;">
<span style="color:#3C3C3C;font-family:Georgia;font-size:21px;">Retrieve your password</span></div>
<div id="wb_Text3" style="position:absolute;left:304px;top:524px;width:72px;height:16px;text-align:center;z-index:10;">
<span style="color:#FA5C43;font-family:Arial;font-size:11px;">TRADE</span></div>
<div id="wb_Text6" style="position:absolute;left:308px;top:536px;width:72px;height:16px;z-index:11;text-align:left;">
<span style="color:#FA5C43;font-family:Impact;font-size:20px;letter-spacing:0.07px;">STATION</span></div>
<div id="wb_Text7" style="position:absolute;left:216px;top:574px;width:300px;height:16px;z-index:12;text-align:left;">
<span style="color:#A9A9A9;font-family:Arial;font-size:9.3px;">Copyrights | TRDSTATION 2013-2016@All Rights Reserved</span></div>
</div>
<!-- End -->
<div id="Login_layer" style="position:absolute;text-align:left;left:0%;top:0px;width:626px;height:775px;z-index:27;">
	<div style="color:green;font-weight:bold;display:none;padding-top: 120px;text-align: center;font-size: 14px;" id="recovery-message">An email with the password has been sent to you</div>
<div id="wb_Login1" style="position:absolute;left:118px;top:182px;width:387px;height:207px;z-index:13;">
<form name="loginform" method="post" action="" id="loginform">
<input type="hidden" name="form_name" value="loginform">
<table id="Login1">
<tr>
   <td class="Login1_header" colspan="2" style="height:17px;">Sign In</td>
</tr>
<tr>
   <td style="height:37px;width:150px">Email</td>
   <?php if ($this->input->cookie('email') != '') { ?>
   <td style="text-align:left"><input class="form-control Login1_input" name="email" type="text" placeholder="Email" id="loginEmail" value="<?php echo $this->input->cookie('email');?>"></td>

    <?php } else { ?>
    <td style="text-align:left"><input class="form-control Login1_input" name="email" type="text" placeholder="Email" id="loginEmail" value=""></td>
    <?php } ?>
</tr>
<tr>
   <td style="height:37px">Password</td>
   <?php if ($this->input->cookie('password') != '') { ?>
   <td style="text-align:left"><input class="form-control Login1_input" name="password" type="password" placeholder="Password" id="password" value="<?php echo $this->input->cookie('password'); ?>"></td>
   <?php } else { ?>
   <td style="text-align:left"><input class="form-control Login1_input" name="password" type="password" placeholder="Password" id="password" value=""></td>
   <?php } ?>
</tr>
<tr>
 	<td style="height:10px"></td>
     <td  id="loginPasswordErrMsg" style="color:red;font-weight:bold;display:none;" > Please enter password</td>
</tr>
<tr>
   <td>&nbsp;</td><td style="text-align:left;height:37px"><input id="rememberMe"  type="checkbox" name="rememberme"> Remember me</td>
</tr>
<tr>
   <td>&nbsp;</td><td style="text-align:left;">
   <input class="Login1_button" type="button" onclick="return ValidateLogin()" name="login" value="Sign in" id="login"></td>
</tr>
</table>
</form>
</div>
<div id="wb_Text428" style="position:absolute;left:203px;top:415px;bottom:22px;width:237px;height:15px;z-index:14;text-align:left;">
<span style="color:#4169E1;font-family:Arial;font-size:12px;">
<a href="<?php echo base_url();?>" class="style5">Join us and create your free account</a></span></div>
<div id="wb_Text1" style="position:absolute;left:203px;top:390px;bottom:22px;width:135px;height:14px;z-index:15;text-align:left;">
<span style="color:#4169E1;font-family:Arial;font-size:11px;"><a href="#" class="style5" onclick="ShowObject('Login_layer', 0);ShowObject('Recover_password', 1);return false;">I forgot my password</a></span></div>
<div id="wb_Text5" style="position:absolute;left:213px;top:170px;width:308px;height:25px;z-index:16;text-align:left;">
<span style="color:#3C3C3C;font-family:Georgia;font-size:21px;">Sign in to the Trade Station</span></div>
<div id="wb_Text106" style="position:absolute;left:308px;top:596px;width:72px;height:25px;z-index:17;text-align:left;">
<span style="color:#FA5C43;font-family:Impact;font-size:20px;letter-spacing:0.07px;">STATION</span></div>
<div id="wb_Text107" style="position:absolute;left:304px;top:584px;width:72px;height:14px;text-align:center;z-index:18;">
<span style="color:#FA5C43;font-family:Arial;font-size:11px;">TRADE</span></div>
<div id="wb_Text4" style="position:absolute;left:216px;top:634px;width:300px;height:12px;z-index:19;text-align:left;">
<span style="color:#A9A9A9;font-family:Arial;font-size:9.3px;">Copyrights | TRDSTATION 2013-2016@All Rights Reserved</span></div>
<div id="wb_Text8" style="position:absolute;left:300px;top:477px;width:89px;height:18px;z-index:20;text-align:left;">
<span style="color:#3C3C3C;font-family:Georgia;font-size:16px;">Sign in with</span></div>
<div id="RollOver1" style="position:absolute;left:282px;top:508px;overflow:hidden;width:35px;height:35px;z-index:21">
<a href="">
<img class="hover" alt="" src="<?php echo asset_url();?>images/face0.png">
<span><img alt="" src="<?php echo asset_url();?>images/face.png"></span>
</a>
</div>
<div id="RollOver2" style="position:absolute;left:323px;top:508px;overflow:hidden;width:35px;height:35px;z-index:22">
<a href="">
<img class="hover" alt="" src="<?php echo asset_url();?>images/google0.png">
<span><img alt="" src="<?php echo asset_url();?>images/google.png"></span>
</a>
</div>
<div id="RollOver3" style="position:absolute;left:364px;top:508px;overflow:hidden;width:35px;height:35px;z-index:23">
<a href="">
<img class="hover" alt="" src="<?php echo asset_url();?>images/qqlogin.png">
<span><img alt="" src="<?php echo asset_url();?>images/qq.png"></span>
</a>
</div>
</div>
</div>
<script src="<?php echo asset_url(); ?>js/custom/account.js"></script>
<script type="text/javascript">
	var base_url = '<?php echo base_url(); ?>';
	var asset_url = '<?php echo asset_url();?>';
	$("#recovery-message").hide();


	$(document).ready(function()               
		    {
		        // enter keyd
		        $(document).bind('keypress', function(e) {
		            if(e.keyCode==13){
		                 $('#login').trigger('click');
		             }
		        });
		    });
</script>
</body>
</html>