<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>General Inquiry</title>
<meta name="description" content="The World's First Social B2B Platform">
<meta name="keywords" content="sourcing product, e-commerce, business, trade, commerce, community, video tube, business chat, buyers, sellers, shippers, products, china. exporters, suppliers">
<meta name="author" content="Hazem Zaki">
<meta name="categories" content="E-Commerce">
<meta name="generator" content="Hotline Internet & Technology Co. Ltd.">
<link href="<?php echo asset_url();?>css/station.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/pages/general_inquiry.css" rel="stylesheet">
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
function Validatecontact()
{
   	var theForm = document.getElementById('Form4');
   	var regexp;
   	var extension = theForm.FileUpload1.value.substr(theForm.FileUpload1.value.lastIndexOf('.'));
	
   	/*if ((extension.toLowerCase() != ".gif") &&
       (extension.toLowerCase() != ".jpg") &&
       (extension.toLowerCase() != ".pdf") &&
       (extension.toLowerCase() != ".png") &&
       (extension.toLowerCase() != ".doc") &&
       (extension.toLowerCase() != ".docx") &&
       (extension.toLowerCase() != ".zip") &&
       (extension.toLowerCase() != ".xls") &&
       (extension != ""))
   	{
      	alert("The \"FileUpload1\" field contains an unapproved filename.");
      	theForm.FileUpload1.focus();
      	return false;
   	}*/
   	if (theForm.Editbox5.value == "")
    {
       alert("Please Enter The Contact Name");
       theForm.Editbox5.focus();
       return false;
    }
    if (theForm.Editbox5.value.length < 2)
    {
       alert("Please Enter The Contact Name");
       theForm.Editbox5.focus();
       return false;
    }
    if (theForm.Editbox5.value.length > 100)
    {
       alert("Please Enter The Contact Name");
       theForm.Editbox5.focus();
       return false;
    }
    if (theForm.Editbox12.value == "")
    {
       alert("Please Enter Your Company Name");
       theForm.Editbox12.focus();
       return false;
    }
    if (theForm.Editbox12.value.length < 2)
    {
       alert("Please Enter Your Company Name");
       theForm.Editbox12.focus();
       return false;
    }
    if (theForm.Editbox12.value.length > 100)
    {
       alert("Please Enter Your Company Name");
       theForm.Editbox12.focus();
       return false;
    }
    if (theForm.Editbox13.value == "")
    {
       alert("Please Enter A Valid Email");
       theForm.Editbox13.focus();
       return false;
    }
    if (theForm.Editbox13.value.length < 10)
    {
       alert("Please Enter A Valid Email");
       theForm.Editbox13.focus();
       return false;
    }
    if (theForm.Editbox13.value.length > 128)
    {
       alert("Please Enter A Valid Email");
       theForm.Editbox13.focus();
       return false;
    }
    if (theForm.Editbox11.value == "")
    {
       alert("Please Enter Your Phone Including The Country Code");
       theForm.Editbox11.focus();
       return false;
    }
    if (theForm.Editbox11.value.length < 10)
    {
       alert("Please Enter Your Phone Including The Country Code");
       theForm.Editbox11.focus();
       return false;
    }
    if (theForm.Editbox11.value.length > 20)
    {
       alert("Please Enter Your Phone Including The Country Code");
       theForm.Editbox11.focus();
       return false;
    }
    if (theForm.TextArea2.value == "")
    {
       alert("Please Enter Message");
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
             	$('#Form4').ajaxSubmit(options);
          }
function showAddRequest(formData, jqForm, options){
   	var queryString = $.param(formData);
   	if(Validatecontact()) {
   		ajaxindicatorstart("Please wait while we submit your Inquiry.");
		return true;
   	} else {
   		return false;
   	}
}
   	
function showAddResponse(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		ajaxindicatorstop();
  	} else {
      window.close();
  		ajaxindicatorstop();
  		alert("Inquiry added successfully.");
  		
  	}
}
</script>
</head>
<body>
<div id="Layer130" style="position:fixed;text-align:center;left:0;top:0;right:0;bottom:0;z-index:29;">
<div id="Layer130_Container" style="width:1048px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_Form4" style="position:absolute;left:175px;top:16px;width:827px;height:632px;z-index:14;">
<form name="contact" method="post" action="" enctype="application/x-www-form-urlencoded" id="Form4" >
<input type="hidden" name="busi_id" id="busi_id" value="<?php echo $desksite[0]['busi_id'];?>" />
<input type="hidden" name="my_busi_id" id="my_busi_id" value="<?php echo $mydesksite[0]['busi_id'];?>" />
<input type="hidden" name="product_id" id="product_id" value="0" />
<input type="hidden" name="post_type" id="post_type" value="0" />
<input type="hidden" name="post_id" id="post_id" value="0" />
<input type="hidden" name="inquiry_type_id" id="inquiry_type_id" value="1" />
<input type="hidden" name="title" id="title" value="General Inquiry" />
<input type="text" id="Editbox5" style="position:absolute;left:0px;top:157px;width:327px;height:46px;line-height:46px;z-index:0;" name="name" value="<?php if(!empty($mydesksite[0]['name'])) { echo $mydesksite[0]['name']; }?>" maxlength="50" placeholder="Name">
<textarea name="message" id="TextArea2" style="position:absolute;left:0px;top:328px;width:682px;height:232px;z-index:1;" rows="16" cols="95" maxlength="500" placeholder="Message"></textarea>
<input type="button" id="Button5" name="" value="Send" style="position:absolute;left:600px;top:588px;width:96px;height:25px;z-index:2;" onclick="saveRequest();">
<input type="number" id="Editbox11" style="position:absolute;left:353px;top:218px;width:327px;height:46px;line-height:46px;z-index:3;" name="phone" value="<?php if(!empty($mydesksite[0]['telephone_code'])) { echo $mydesksite[0]['telephone_code']; }?><?php if(!empty($mydesksite[0]['telephone_number'])) { echo $mydesksite[0]['telephone_number']; }?>" maxlength="15" placeholder="Phone">
<input type="text" id="Editbox12" style="position:absolute;left:354px;top:157px;width:327px;height:46px;line-height:46px;z-index:4;" name="company" value="<?php if(!empty($mydesksite[0]['company_name'])) { echo $mydesksite[0]['company_name']; }?>" maxlength="50" placeholder="Company">
<input type="email" id="Editbox13" style="position:absolute;left:0px;top:218px;width:327px;height:46px;line-height:46px;z-index:5;" name="email" value="<?php if(!empty($mydesksite[0]['company_email'])) { echo $mydesksite[0]['company_email']; }?>" maxlength="30" placeholder="Email">
<input type="file" id="FileUpload1" style="position:absolute;left:128px;top:285px;width:198px;height:21px;line-height:21px;z-index:6;" name="FileUpload1[]" multiple="multiple" />
<div id="wb_Image1" style="position:absolute;left:1px;top:281px;width:38px;height:38px;z-index:7;">
<img src="<?php echo asset_url();?>images/insert-image-3.png" id="Image1" alt=""></div>
<div id="wb_Text4" style="position:absolute;left:49px;top:288px;width:77px;height:17px;z-index:8;text-align:left;">
<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Attachment<br></span></div>
<div id="wb_Text2" style="position:absolute;left:1px;top:90px;width:44px;height:17px;z-index:9;text-align:left;">
<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Attn.: <br></span></div>
<div id="wb_Text278" style="position:absolute;left:1px;top:34px;width:166px;height:19px;z-index:10;text-align:left;">
<span style="color:#4B4B4B;font-family:Arial;font-size:17px;"><strong>General Inquiry</strong></span></div>
<div id="wb_Text3" style="position:absolute;left:33px;top:88px;width:166px;height:19px;z-index:11;text-align:left;">
<span style="color:#4B4B4B;font-family:Arial;font-size:16px;"><strong><?php echo $desksite[0]['name_prefix'];?> <?php echo $desksite[0]['name'];?></strong></span></div>
<div id="wb_Text308" style="position:absolute;left:1px;top:68px;width:460px;height:17px;z-index:12;text-align:left;">
<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Send a general inquiry to <br></span></div>
<div id="wb_Text1" style="position:absolute;left:147px;top:66px;width:297px;height:38px;z-index:13;text-align:left;">
<span style="color:#3C3C3C;font-family:Arial;font-size:16px;"><strong><?php echo $desksite[0]['company_name']; ?></strong></span></div>
</form>
</div>
</div>

<!--  -->
</div>
</body>
</html>