<style>
.fileUpload {
    position: relative;
    overflow: hidden;
    margin: 10px;
    background-color: #222;
    padding: 9px;
    opacity: 1;
    color: #fff;
    font-size: 13px;
    text-align: center;
    width: 145px;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
</style>
<div class="row editaccount_outer">
	<!-- div class="trd-trade-mark" style="text-align:center;width:150px;position:absolute;bottom:80px;">
		<div><span style="color:#FFFFFF;font-family:Arial;font-size:11px;">TRADE</span></div>
		<div><span style="color:#FA5C43;font-family:Impact;font-size:20px;letter-spacing:0.07px;">STATION</span></div>
		<div><span style="color:#FFFFFF;font-family:Arial;font-size:8px;">Copyrights | TRDSTATION 2013-2016@All Rights Reserved</span></div>
	</div-->
	<div class="col-md-2 account-left-nav"> 
		<div class="col-md-12" style="padding: 9px;">
			<div class="account-image">
				<a href="javascript:false;"> 
					<img class="hover" alt="" class="img-circle" src="<?php echo asset_url();?>images/trusted.png" style="width:60px;">
				</a>
			</div>
			<div style="color:#FFFFFF;font-family:Arial;font-size:13px;text-align: center;padding-bottom: 15px;">Verifications</div>
		</div>
	</div>
	<div class="col-md-10 account-content-area">
		<div class="tab-content main-tab-content">
			<div class="panel panel-default tab-pane fade in active" id="ranking" style="height:758px;overflow:hidden;">
			  	<div class="panel-heading custom-panel-heading">
			  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer130', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
			  	</div>
			  	<div class="panel-body panel-body-custom" id="account_personal_info">		
			  		<div class="personal_info_div" id="personal_info_div1">
			  			<?php if($myds_stage == 4) { ?>
						<div class="row" style="margin-top:30px;">
							<div class="col-sm-1"></div>
							<div class="col-sm-10" style="padding:0px;">
								<div id="wb_Text346" style="height:25px;z-index:2511;text-align:left;">
									<span class="rank-heading">Verification System <span style="color:#FF6347;font-family:Georgia;font-size:13px;"></span></span>
								</div>
								<div style="color:#2D2D2D;font-family:Arial;font-size:11px;padding-top:10px;">
									Verification Logo is one of the most important indicators about your business and performance in the <strong>TRADE STATION</strong> platform, which presents the trust factor and <br>professional image about your business to global sellers. 
								</div>
							</div>
							<div class="col-sm-1"></div>
						</div>
						<br><br><br>
						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-10" style="padding:0px;">
								<div class="row ranking-rows" style="padding:40px 0px;">
									<form action="" name="attachmentupload" id="attachmentupload" enctype="multipart/form-data" method="post">
									<div class="col-sm-3 vlogo-img">
										<img src="<?php echo asset_url();?>images/trusted.png" id="Image68" alt="" style="width:79px;height: 80px;">
										<div>
											<span style="color:#2D2D2D;font-family:Arial;font-size:15px;"><strong>Verified Logo</strong></span><br>
											<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">&nbsp;</span>
										</div>
									</div>
									<div class="col-sm-9 <?php if($binfo[0]['is_logo_verified'] != 0) { ?>vlogo-wbg<?php } ?>" id="vlogo-area" style="padding:0px;border:1px solid #F5F5F5;min-height:200px;margin:-40px 0px;padding:40px 0px;">
										<?php if($binfo[0]['is_logo_verified'] == 0) { ?>
										<div class="col-sm-8" style="padding-left:0px;">
										<?php } else { ?>
										<div class="text-center">
										<?php } ?>
											<?php if($binfo[0]['is_logo_verified'] == 0) { ?>
											<div class="vlogo-desc">
												To add the Verified Member Logo, please upload a color copy of following documents, and click on send.
											</div>
											<div class="vlogo-list">
												<ol>
													<li>The official certificates and business license includes ( The scope of business, Name of the Director, Address, P.O.Box).</li>
													<li>Recent Bank Statement proves that your Company Bank Account is Exist and Active and owned by the same director.</li>
													<li>A declaration letter, issued for (The Trade Station Auditing Section), to be printed on company official letter, and signed by the director of the company (authorized signature and seal). Confess and certify that all the provided documents ( License, Certificates ..etc) are legal as an image copy of the original document and director bearing all the responsibility.</li>
													<li>Latest Utility Bill of the Company.</li>
													<li>Recent ID/Passport of the director.</li>
												</ol>
											</div>
											<div class="vlogo-note">
												N.B. In case you have been passed an audit check with any other<br>
												platform, please provide us with your (  Audited No. and The check link).<br><br>
												<input type="text" name="audit_no" id="audit_no" placeholder="Type Audit No." style="height:27px;width:130px;padding-left:5px;"/>
												<input type="text" name="verified_url" id="verified_url" placeholder="Type the check Link or verified URL" style="height:27px;width:230px;margin-left:15px;padding-left:5px;"/>
											
											</div>
											<?php } else if($binfo[0]['is_logo_verified'] == 1) { ?>
											<div class="vlogo-request text-center">
												<br><strong>Your request has been received <br>successfully..</strong><br><br>
											</div>
											<div class="vlogo-request-msg text-center">
												It takes up to 7 working days to end our verifications<br> process and activate your verification logo..<br>
												Once we end the required process, this message will be<br> disappeared and a successful message will be<br> displayed instead..<br><br>
												<strong>GOOD LUCK</strong><br><br>
											</div>
											<?php } else { ?>
											<div class="vlogo-verified text-center">
												<br><br><br>
												Congrats your are a verified member, <br>Your verifcation ID is: <strong><?php echo $binfo[0]['verification_id']?></strong>
												<br><br><br><br>
											</div>
											<?php } ?>
										</div>
										<?php if($binfo[0]['is_logo_verified'] == 0) { ?>
										<div class="col-sm-4 <?php if($binfo[0]['is_logo_verified'] != 0) { ?>vlogo-wbg<?php } ?>" style="color:#2D2D2D;font-family:Arial;font-size:11px;padding-right:30px;padding-top:80px;" id="vlogo-btn">
											<br>
											<?php if($binfo[0]['is_logo_verified'] == 0) { ?>
											<div class="fileUpload">
											    <span>Attachments</span>
											    <input type="file" name="fileattachs[]" id="fileattachs" class="upload" multiple accept=".png,.gif,.jpeg,.jpg,.bmp" onchange="showFileCount(this);"/>
											</div>
											<div style="padding-left: 15px;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;font-weight:bold;" id="attachments">0 files selected</span><br><br>
											</div>
											<div style="padding-left: 10px;">
												<input type="button" class="btn btn-sm btn-danger-custom" value="Upload Now" onclick="verifiedBuyerLogoRequeted();"/>
											</div>
											<?php } ?>
										</div>
										<?php } ?>
									</div>
									</form>
								</div>
							</div>
							<div class="col-sm-1"></div>
						</div>
						<br><br>
						<br><br>
						<br><br><br><br><br><br><br>
					<?php } else { ?>
					<div id="Layer222" style="position:absolute;text-align:center;left:0px;top:50px;width:1027px;height:581px;border:0px;">
						<div id="Layer222_Container" style="width:1027px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
							<div id="wb_Shape291" style="position:absolute;left:566px;top:330px;width:137px;height:32px;">
								<a href="javascript:ShowObjectWithEffect('Layer130', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');"><div id="Shape291"><div id="Shape291_text"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Ok</span></div></div></a>
							</div>
							<div id="wb_Text760" style="position:absolute;left:565px;top:206px;width:333px;height:52px;text-align:left;">
								<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">
									You have to complete adding your main products  information.<br>
								</span>
							</div>
							<div id="wb_Text761" style="position:absolute;left:563px;top:174px;width:333px;height:22px;text-align:left;">
								<span style="color:#FF6347;font-family:Arial;font-size:19px;"><strong>Oops..</strong></span>
							</div>
							<div id="wb_Image42" style="position:absolute;left:55px;top:7px;width:489px;height:489px;">
								<img src="<?php echo asset_url();?>images/businessman-toons.png" id="Image42" alt="">
							</div>
							<div id="wb_Text762" style="position:absolute;left:567px;top:290px;width:333px;height:28px;text-align:left;">
								<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Start with " <strong>My Desksite</strong>" to build your </span><strong>Desksite Profile </strong><span style="color:#2D2D2D;font-family:Arial;font-size:11px;">the way you like.</span>
							</div>
						</div>
					</div>
					<?php } ?>
			  		</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="termsModal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:546px;">
    	<div class="modal-content">
      		<div class="modal-body">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-3 text-right">
      					<img src="<?php echo asset_url();?>images/guarantee-lock.png" id="Image83" alt="" style="width:44px;">
      				</div>
      				<div class="col-sm-9 text-left">
	      				<span style="color:#3A973F;font-family:Arial;font-size:19px;"><strong>Guarantee Terms</strong></span><br>
	      				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Select one of the following terms and press continue</span>
      				</div>
      			</div>
      			<br><br>
      			<?php foreach ($terms as $term) { ?>
      			<div class="row">
      				<div class="col-sm-2 text-right">
      					<input type="radio" name="gterms" class="gterms-radio" value="<?php echo $term['id'];?>" /> 
      				</div>
      				<div class="col-sm-10 term-items" style="padding-left:0px;" id="term_text_<?php echo $term['id'];?>">
      					<?php echo $term['name'];?>
      				</div>
      			</div>
      			<br><br>
      			<?php } ?>
      			<div class="row">
      				<div class="col-sm-2 text-right">
      					<input type="radio" name="gterms" id="other-terms" class="gterms-radio" value="6" /> 
      				</div>
      				<div class="col-sm-10 term-items" style="padding-left:0px;">
      					Type your own terms:<br><br>
      					<div class="col-sm-9" style="padding-left:0px;">
      						<textarea name="TextArea1" id="TextArea11" style="width:336px;height:83px;z-index:12444;" rows="5" cols="45"></textarea>
      					</div>
      					<div class="col-sm-3 text-center" style="padding-top:15px;">
	      					<span style="color:#FF6347;font-family:Arial;font-size:11px;" id="termsoption-area">400</span><br>
	      					<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Remains</span>
      					</div>
      				</div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<a href="javascript:selectTerm();" class="btn btn-sm btn-danger-custom" >Continue</a>
      				<a href="" class="btn btn-sm btn-danger-custom" data-dismiss="modal">Cancel</a>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>
<div id="accessDeniedModal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:525px;">
    	<div class="modal-content" style="border-radius:0px;margin-top:25%;">
      		<div class="modal-body">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-2"></div>
      				<div class="col-sm-8">
	      				<div style="text-align: center;">
							<span style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;">ACCESS DENIED</span>
						</div>
						<br><br>
						<div style="text-align: center;">
							<img src="<?php echo asset_url();?>images/padlock-154684_640.png" width="100px;"/>
						</div>
						<div style="text-align: center;">
							We are so sorry. We have created this unique <br>feature
							for only <strong>BLACK HORSE</strong> member
						</div>
					</div>
					<div class="col-sm-2"></div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<a href="javascript:upgradeMyBusinessPlan();" class="btn btn-sm btn-danger-custom" style="width:150px;">Upgrade</a>
      				<a href="javascript:cancelAccessDeniedPopup();" class="btn btn-sm btn-danger-custom" style="width:150px;">Cancel</a>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
<?php if($tsplanid == 1 && $tscategory_id != 3) { ?>
	$('#accessDeniedModal').modal({show:true,backdrop: 'static',keyboard: false});
	function upgradeMyBusinessPlan() {
		ShowObjectWithEffect('Layer130', 0, 'dropup', 500, 'easeInBounce');
		getMyPackages();
	}
	function cancelAccessDeniedPopup() {
		ShowObjectWithEffect('Layer130', 0, 'dropup', 500, 'easeInBounce');
		ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');
	}
<?php }?>
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

$('#TextArea11').on('keyup',function(){
	$("#other-terms").prop('checked', true);
    var vcount = parseInt($(this).val().length);
    var rem = 400 - vcount;
    $("#termsoption-area").html(rem);
});

function openGauranteeTerms() {
	if($("#Editbox71").val() > 0) {
		$('#termsModal').modal({
		    backdrop: 'static',
		    keyboard: false
		});
	} else {
		alert("Please enter gaurantee period in months.")
	}
}

function selectTerm() {
	var term_id = $("input[name='gterms']:checked"). val();
	var term_text = "";
	if(term_id == 6) {
		term_text = $("#TextArea11").val();
	} else {
		term_text = $("#term_text_"+term_id).html();
	}
	if(term_id > 0 && term_text != "") {
		var months = $("#Editbox71").val();
		$("#selected_period").html('<strong>'+months+' Months</strong>');
		$("#selected_term").html(term_text);
		$("#terms-inputs").hide();
		$("#terms-text").hide();
		$("#terms-input-msg").show();
		$("#terms-btns").show();
		$("#termsModal").modal('hide');
	} else {
		alert("Please select or enter Guarantee Terms.");
	}
}

function editTerms() {
	$("#terms_desc").html("If you confess to provide buyers with a guarantee on your products <br>according to the terms you determine ( hereunder) by yourself, please <br>select it and press \" Confess & Confirm\" button.");
	$("input[name='gterms']:checked").prop('checked', false);
	$("#terms-inputs").show();
	$("#terms-text").show();
	$("#terms-input-msg").hide();
	$("#terms-btns").hide();
	$("#confess_btn").show();
}

function cancelTerms() {
	$("#terms_desc").html("If you confess to provide buyers with a guarantee on your products <br>according to the terms you determine ( hereunder) by yourself, please <br>select it and press \" Confess & Confirm\" button.");
	$("input[name='gterms']:checked").prop('checked', false);
	$("#terms-inputs").show();
	$("#terms-text").show();
	$("#terms-input-msg").hide();
	$("#terms-btns").hide();
	$.get(base_url+"mystation/gaurantee/cancel",{},function(data){
		$("#confess_btn").show();
	},'json');
}

function confirmTerms() {
	var term_id = $("input[name='gterms']:checked"). val();
	var term_text = "";
	if(term_id == 6) {
		term_text = $("#TextArea11").val();
	} else {
		term_text = $("#term_text_"+term_id).html();
	}
	var months = $("#Editbox71").val();
	$.post(base_url+"mystation/gaurantee/confirm",{ gaurantee_term: term_text, gaurantee_period: months},function(data){
		$("#terms_desc").html("<strong>You have been confess to provide a guarantee on your <br>products based on the following terms</strong>");
		$("#confess_btn").hide();
	},'json');
}

function confirmCerts() {
	var certs = $("#TextArea12").val();
	if(certs != "") {
		$.post(base_url+"mystation/product/certs/confirm",{ certs: certs },function(data){
			$("#certs_desc").html("<strong>I can issue the following Product Certificates</strong>");
			$("#certs-inputs").hide();
			$("#certs-text").hide();
			$("#certs-input-msg").show();
			$("#certs-btns").show();
			$("#certs_text_msg").html(certs);
		},'json');
	} else {
		alert("Please enter certificates.");
	}
}

function editCerts() {
	$("#certs_desc").html('<input type="radio" name="procduct_certs_check" value="1" checked/> I can issue the following Product Certificates');
	$("#certs_radio").prop('checked', false);
	$("#certs-inputs").show();
	$("#certs-text").show();
	$("#certs-input-msg").hide();
	$("#certs-btns").hide();
}

function confirmLics() {
	var lics = $("#Editbox72").val();
	$.post(base_url+"mystation/license/confirm",{ lics: lics },function(data){
		$("#lic_desc").hide();
		$("#lic-inputs").hide();
		$("#lic-text").hide();
		$("#lic-input-msg").show();
		$("#lic-btns").show();
		$("#lic_text_msg").html(lics);
	},'json');
}

function editLics() {
	$("#lic_desc").show();
	$("#lic-inputs").show();
	$("#lic-text").show();
	$("#lic-input-msg").hide();
	$("#lic-btns").hide();
}

function showFileCount(id) {
	var filecount = $(id)[0].files.length;
	$("#attachments").html(filecount+" files selected");
}

</script>
