<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script src="<?php echo asset_url();?>js/jquery.imgareaselect.js" type="text/javascript"></script>
<link rel="stylesheet" href="<?php echo asset_url();?>css/imgareaselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/imgareaselect-default.css" />  
<script type="text/javascript" src="<?php echo asset_url();?>js/jquery.imgareaselect.js" > </script>

<div class="row editaccount_outer">
	<div class="col-md-2 account-left-nav"> 
		<div class="col-md-12" style="padding: 9px;">
			<div class="account-image">
				<a href="javascript:false;"> 
					<img class="hover" alt="" class="img-circle" src="<?php echo asset_url();?>images/Desksite-small.png">
				</a>
			</div>
			<div style="color:#FFFFFF;font-family:Arial;font-size:13px;text-align: center;padding-bottom: 15px;">My Desksite</div>
			<div class="account-main-nav">
				<ul class="nav nav-tabs nav-tabs-custom">
				  	<li><a data-toggle="tab" href="#webbackgroundnav" onclick="openWebsiteBackgrounds();">View | Edit <br><span>Backgrounds</span></a></li>
				  	<li><a data-toggle="tab" href="#mainservicenav" onclick="openMainServices();">View | Edit <br><span>Main Services</span></a></li>
				  	<li class="black-nav" style="margin-top:10px;"><a data-toggle="tab" href="#spservicenav" onclick="openSpecialServices();">View | Edit <br><span>Special Services</span></a></li>
				  	<li class="black-nav"><a href="<?php echo base_url();?>shipper/profile/<?php echo $busi_id;?>" target="_blank">View My Desksite</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="col-md-10 account-content-area">
		<div class="tab-content main-tab-content">
			<div class="panel panel-default tab-pane fade in active" id="mainservicenav">
				<?php include 'subpages/shipperservices.php';?>
			</div>
			<div class="panel panel-default tab-pane fade" id="webbackgroundnav">
			</div>
			<div class="panel panel-default tab-pane fade" id="spservicenav">
			</div>
			<div class="panel panel-default tab-pane fade" id="newarrivalnav">
			</div>
		</div>
	</div>
</div>
<div id="proAddedModal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:525px;">
    	<div class="modal-content" style="border-radius:0px;">
      		<div class="modal-body">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-2"></div>
      				<div class="col-sm-8">
	      				<div id="wb_Text245" style="width: 100%; height: 46px; text-align: center;padding-top:15px;">
							<span style="color: #3C3C3C; font-family: Arial; font-size: 20px;">
								Your Services have Been Added Successfully..
							</span>
						</div>
						<br><br>
						<div id="wb_Text246" style="width: 100%; height: 51px; text-align: center;">
							<span style="color: #3C3C3C; font-family: Arial; font-size: 13px;">
								Click OK button to View, Edit or Add new service<br>
							<br><br>
							</span>
						</div>
						<div id="wb_Text243" style="width: 100%; height: 14px; text-align: center;">
							<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;">TRADE</span>
						</div>
						<div id="wb_Text244" style="width: 100%; height: 25px; z-index: 681; text-align: center;">
							<span style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span>
						</div>
					</div>
					<div class="col-sm-2"></div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<a href="" class="btn btn-sm btn-danger-custom" data-dismiss="modal" style="width:150px;">Ok</a>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>

<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt=""><div></div></div><div class="bg"></div></div>');
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
<?php if($is_item_added == 1) { ?>
$("#proAddedModal").modal('show');
<?php } ?>

function openWebsiteBackgrounds() {
	$.get(base_url+"mystation/desksite/backgroundimages",{},function(data){
		$("#webbackgroundnav").html(data);
	},'html');
}
function openMainServices() {
	$.get(base_url+"mystation/desksite/viewmainservices",{},function(data){
		$("#mainservicenav").html(data);
	},'html');
}


function openSpecialServices() {
	$.get(base_url+"mystation/desksite/specialservices",{},function(data){
		$("#mainservicenav").html("");
		$("#spservicenav").html(data);
	},'html');
}

function setBackground(id,input,width,height,size) {
  	if (input.files && input.files[0]) {
    	var reader = new FileReader();
       	reader.onload = function (e) {
       		var ext = input.files[0].name.split('.').pop();
       		var file_size = parseInt(input.files[0].size);
       		var filesizeinkb = (file_size/1024);
       		var image = new Image();
            image.src = e.target.result;
            image.onload = function () {
                var imgheight = this.height;
                var imgwidth = this.width;
                if(ext == 'jpg' || ext == 'jpeg') {
	                if(filesizeinkb > size) {
	                	alert("Image size should be "+size+"kb max.");
	                    $('#'+id).val('');
	                } else {
		                if (imgwidth != width || imgheight != height) {
		                    alert("Image dimensions should be "+width+"*"+height+" Pixel.");
		                    $('#'+id).val('');
		                } else {
		                	$('#'+id).css('background-image', 'url('+e.target.result+')').css('background-size','cover');
		                }
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


function saveSPServices() {
	ajaxindicatorstart("Please wait .. while we save services...");
	var options = {
			target : '#response', // target element(s) to be updated with server response 
			beforeSubmit : showSPSRequest, // pre-submit callback 
			success :  showSPSResponse,
			url : base_url+'mystation/desksite/addspecialservices',
			semantic : true,
			dataType : 'json'
		};
	$('#newspecialservicefrm').ajaxSubmit(options);
}
function showSPSRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showSPSResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		alert(resp.msg);
		$( '#newspsubmitbtn').attr( 'disabled', false );
	} else {
		//alert(resp.msg);
		openSpecialServices();
	}
}

function saveNewMainService() {
	ajaxindicatorstart("Please wait .. while we save services...");
	var options = {
			target : '#response', // target element(s) to be updated with server response 
			beforeSubmit : showNEWSRequest, // pre-submit callback 
			success :  showNEWSResponse,
			url : base_url+'mystation/desksite/addnewservice',
			semantic : true,
			dataType : 'json'
		};
	$('#newmainservicefrm').ajaxSubmit(options);
}
function showNEWSRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showNEWSResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		alert(resp.msg);
		$( '#newmssubmitbtn').attr( 'disabled', false );
	} else {
		//alert(resp.msg);
		getMyShipperDeskside();
	}
}

function updateMainService() {
	ajaxindicatorstart("Please wait .. while we save services...");
	var options = {
			target : '#response', // target element(s) to be updated with server response 
			beforeSubmit : showUpdateSRequest, // pre-submit callback 
			success :  showUpdateSResponse,
			url : base_url+'mystation/desksite/updateservice',
			semantic : true,
			dataType : 'json'
		};
	$('#editmainservicefrm').ajaxSubmit(options);
}

function showUpdateSRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}

function showUpdateSResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		alert(resp.msg);
		$( '#editmssubmitbtn').attr( 'disabled', false );
	} else {
		getMyShipperDeskside();
	}
}

function updateSpecialService() {
	ajaxindicatorstart("Please wait .. while we save services...");
	var options = {
			target : '#response', // target element(s) to be updated with server response 
			beforeSubmit : showUpdateSSRequest, // pre-submit callback 
			success :  showUpdateSSResponse,
			url : base_url+'mystation/desksite/updatespecialservice',
			semantic : true,
			dataType : 'json'
		};
	$('#editspecialservicefrm').ajaxSubmit(options);
}

function showUpdateSSRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}

function showUpdateSSResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		alert(resp.msg);
		$( '#editspsubmitbtn').attr( 'disabled', false );
	} else {
		openSpecialServices();
	}
}

</script>
