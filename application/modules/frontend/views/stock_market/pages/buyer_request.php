<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Send A Query</title>
<meta name="description" content="The World's First Social B2B Platform">
<meta name="keywords" content="sourcing product, e-commerce, business, trade, commerce, community, video tube, business chat, buyers, sellers, shippers, products, china. exporters, suppliers">
<meta name="author" content="Hazem Zaki">
<meta name="categories" content="E-Commerce">
<meta name="generator" content="Hotline Internet & Technology Co. Ltd.">
<link href="<?php echo asset_url();?>css/station.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/pages/buyer_request.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" href="<?php echo asset_url();?>css/font-awesome.min.css">
<script src="<?php echo asset_url(); ?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
$(document).ready(function() {
	$("#FileUpload1").change(function() {
	    if($("#FileUpload1")[0].files.length > 4) {
	        alert("You can select only 4 files");
	        $("#FileUpload1").val('');
	    }
	});
});
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt=""><div>'+text+'</div></div><div class="bg"></div></div>');
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
function ValidateOffer_for_you_post_in_RT_Business()
{
	var theForm = document.getElementById('bstbuyerrequest');
   var regexp;
   if (theForm.Editbox1.value == "")
   {
      alert("Please Enter The Contact Name");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value.length < 2)
   {
      alert("Please Enter The Contact Name");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox1.value.length > 100)
   {
      alert("Please Enter The Contact Name");
      theForm.Editbox1.focus();
      return false;
   }
   if (theForm.Editbox2.value == "")
   {
      alert("Please Enter Your Company Name");
      theForm.Editbox2.focus();
      return false;
   }
   if (theForm.Editbox2.value.length < 2)
   {
      alert("Please Enter Your Company Name");
      theForm.Editbox2.focus();
      return false;
   }
   if (theForm.Editbox2.value.length > 100)
   {
      alert("Please Enter Your Company Name");
      theForm.Editbox2.focus();
      return false;
   }
   if (theForm.Editbox6.value == "")
   {
      alert("Please Enter Your Phone Including The Country Code");
      theForm.Editbox6.focus();
      return false;
   }
   if (theForm.Editbox6.value.length < 10)
   {
      alert("Please Enter Your Phone Including The Country Code");
      theForm.Editbox6.focus();
      return false;
   }
   if (theForm.Editbox6.value.length > 20)
   {
      alert("Please Enter Your Phone Including The Country Code");
      theForm.Editbox6.focus();
      return false;
   }
   if (theForm.Editbox7.value == "")
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox7.focus();
      return false;
   }
   if (theForm.Editbox7.value.length < 10)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox7.focus();
      return false;
   }
   if (theForm.Editbox7.value.length > 128)
   {
      alert("Please Enter A Valid Email");
      theForm.Editbox7.focus();
      return false;
   }
   var extension = theForm.FileUpload1.value.substr(theForm.FileUpload1.value.lastIndexOf('.'));
   /*if ((extension.toLowerCase() != ".doc") &&
       (extension.toLowerCase() != ".docx") &&
       (extension.toLowerCase() != ".jpg") &&
       (extension.toLowerCase() != ".pdf") &&
       (extension.toLowerCase() != ".png") &&
       (extension != ""))
   {
      alert("The \"FileUpload3\" field contains an unapproved filename.");
      theForm.FileUpload1.focus();
      return false;
   }*/
   
   if (theForm.TextArea1.value == "")
   {
      alert("Please Enter Enough Description");
      theForm.TextArea1.focus();
      return false;
   }
   if (theForm.TextArea1.value.length < 10)
   {
      alert("Please Enter Enough Description");
      theForm.TextArea1.focus();
      return false;
   }
   if (theForm.TextArea1.value.length > 4000)
   {
      alert("Please Enter max Description of 4000 characters");
      theForm.TextArea1.focus();
      return false;
   }
   if (theForm.TextArea2.value == "")
   {
      alert("Please Enter Enough Introduction");
      theForm.TextArea2.focus();
      return false;
   }
   if (theForm.TextArea2.value.length < 10)
   {
      alert("Please Enter Enough Introduction");
      theForm.TextArea2.focus();
      return false;
   }
   if (theForm.TextArea2.value.length > 4000)
   {
      alert("Please Enter max Introduction of 4000 characters");
      theForm.TextArea2.focus();
      return false;
   }
   return true;
}

function saveRequest() {
	var options = {
	 		target : '#response', 
	 		beforeSubmit : showAddRequest,
	 		success :  showAddResponse,
	 		url : '<?php echo base_url();?>desksite/saveenquiry',
	 		semantic : true,
	 		dataType : 'json'
	 	};
   	$('#bstbuyerrequest').ajaxSubmit(options);
}
function showAddRequest(formData, jqForm, options){
   	var queryString = $.param(formData);
   	if(ValidateOffer_for_you_post_in_RT_Business()) {
   		ajaxindicatorstart("Please wait while we submit your request.");
		return true;
   	} else {
   		return false;
   	}
}
   	
function showAddResponse(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		ajaxindicatorstop();
  	} else {
  		ajaxindicatorstop();
  		window.close();
  	}
}
</script>
</head>
<body>
<div id="Layer77" style="position:absolute;text-align:center;left:1%;top:0px;width:96%;height:722px;z-index:46;">
<div id="Layer77_Container" style="width:525px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="Layer78" style="position:absolute;text-align:left;left:1px;top:462px;width:524px;height:239px;z-index:19;">
</div>
<div id="wb_Text138" style="position:absolute;left:38px;top:83px;width:43px;height:16px;z-index:20;text-align:left;">
<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong>Dear </strong></span></div>
<div id="wb_Text139" style="position:absolute;left:36px;top:141px;width:118px;height:14px;z-index:21;text-align:left;">
<span style="color:#696969;font-family:Arial;font-size:11px;">Ref. to your post titled : </span></div>
<div id="wb_Text140" style="position:absolute;left:89px;top:83px;height:16px;z-index:22;text-align:left;">
<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><?php echo $post[0]['name_prefix'];?> <?php echo $post[0]['name'];?> </strong></span></div>
<div id="wb_Text142" style="position:absolute;left:90px;top:105px;width:400px;height:16px;z-index:23;text-align:left;">
<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><?php echo $post[0]['company_name'];?> </strong></span></div>
<div id="wb_Text143" style="position:absolute;left:166px;top:141px;width:330px;height:16px;z-index:24;text-align:left;">
<span style="color:#303030;font-family:Georgia;font-size:13px;"><strong><?php echo $post[0]['title'];?></strong></span></div>
<div id="wb_Form1" style="position:absolute;left:7px;top:194px;width:509px;height:504px;z-index:25;">
<form name="Offer_for_you_post_in_RT_Business" method="post" action="" enctype="multipart/form-data" id="bstbuyerrequest" onsubmit="return ValidateOffer_for_you_post_in_RT_Business(this);">
<input type="hidden" name="post_id" value="<?php echo $post[0]['id'];?>" />
<input type="hidden" name="post_type" id="post_type" value="2" />
<input type="hidden" name="product_id" id="product_id" value="0" />
<input type="hidden" name="busi_id" value="<?php echo $seller_id;?>" />
<input type="hidden" name="my_busi_id" value="<?php echo $busi_id;?>" />
<input type="hidden" name="inquiry_type_id" id="inquiry_type_id" value="3" />
<input type="text" id="Editbox1" style="position:absolute;left:230px;top:288px;width:252px;height:19px;line-height:19px;z-index:0;" name="name" value="<?php echo $contact_details[0]['name'];?>" maxlength="20">
<input type="text" id="Editbox2" style="position:absolute;left:230px;top:318px;width:252px;height:19px;line-height:19px;z-index:1;" name="company" value="<?php echo $contact_details[0]['company_name'];?>" maxlength="20">
<input type="number" id="Editbox6" style="position:absolute;left:230px;top:380px;width:252px;height:19px;line-height:19px;z-index:2;" name="phone" value="<?php echo $contact_details[0]['mobile_number'];?>" maxlength="20">
<input type="email" id="Editbox7" style="position:absolute;left:230px;top:349px;width:252px;height:19px;line-height:19px;z-index:3;" name="email" value="<?php echo $contact_details[0]['email'];?>" maxlength="30">
<select name="country" size="1" id="Combobox2" style="position:absolute;left:230px;top:411px;width:258px;height:25px;z-index:4;">
<option selected value="Select">Select your country</option>
<?php foreach ($Country as $country){?>
<option value="<?php echo $country['name'];?> "><?php echo $country['name'];?></option>
<?php }?>
</select>
<input type="button" id="Button1" name="" value="Send" style="position:absolute;left:334px;top:455px;width:96px;height:25px;z-index:5;" onclick="saveRequest();">
<input type="reset" id="Button2" name="" value="Cancel" style="position:absolute;left:230px;top:455px;width:96px;height:25px;z-index:6;" onclick="window.close();">
<div id="wb_Text1" style="position:absolute;left:27px;top:355px;width:180px;height:14px;z-index:7;text-align:left;">
<span style="color:#696969;font-family:Arial;font-size:11px;">Contact Email</span></div>
<div id="wb_Text3" style="position:absolute;left:27px;top:418px;width:180px;height:14px;z-index:8;text-align:left;">
<span style="color:#696969;font-family:Arial;font-size:11px;">Country</span></div>
<div id="wb_Text7" style="position:absolute;left:27px;top:295px;width:180px;height:14px;z-index:9;text-align:left;">
<span style="color:#696969;font-family:Arial;font-size:11px;">Contact Person</span></div>
<div id="wb_Text8" style="position:absolute;left:27px;top:325px;width:180px;height:14px;z-index:10;text-align:left;">
<span style="color:#696969;font-family:Arial;font-size:11px;">Company </span></div>
<div id="wb_Text9" style="position:absolute;left:27px;top:389px;width:180px;height:14px;z-index:11;text-align:left;">
<span style="color:#696969;font-family:Arial;font-size:11px;">Phone</span></div>
<div id="wb_Text4" style="position:absolute;left:27px;top:218px;width:180px;height:14px;z-index:12;text-align:left;">
<span style="color:#696969;font-family:Arial;font-size:11px;">Attachement</span></div>
<div id="wb_Text5" style="position:absolute;left:27px;top:100px;width:180px;height:14px;z-index:13;text-align:left;">
<span style="color:#696969;font-family:Arial;font-size:11px;">More Details</span></div>
<input type="file" id="FileUpload1" style="position:absolute;left:284px;top:215px;width:200px;height:25px;line-height:25px;z-index:14;" name="FileUpload1[]" multiple="multiple" />
<textarea name="message" id="TextArea1" style="position:absolute;left:222px;top:96px;width:257px;height:84px;z-index:15;" rows="2" cols="34" maxlength="4000"></textarea>
<textarea name="title" id="TextArea2" style="position:absolute;left:222px;top:34px;width:258px;height:27px;z-index:16;" rows="5" cols="34" maxlength="4000"></textarea>
<div id="wb_Text6" style="position:absolute;left:29px;top:40px;width:180px;height:14px;z-index:17;text-align:left;">
<span style="color:#696969;font-family:Arial;font-size:11px;">Message to the seller:</span></div>
</form>
</div>
<div id="Layer79" style="position:absolute;text-align:left;left:0px;top:17px;width:525px;height:47px;z-index:26;">
<div id="wb_Text152" style="position:absolute;left:36px;top:20px;width:216px;height:16px;z-index:18;text-align:left;">
<span style="color:#FFFFFF;font-family:Georgia;font-size:13px;"><strong>RT BUSSINESS REQUEST</strong></span></div>
</div>
</div>
</div>
</body>
</html>