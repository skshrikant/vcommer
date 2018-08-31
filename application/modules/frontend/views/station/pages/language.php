<style>
.start_lng, .start_lng:hover, .start_lng:active, .start_lng:visited {
	width: 500px;
    height: 30px;
    background-color: #3C3C3C;
    border: 1px #3C3C3C solid;
    overflow: hidden;
    text-align: center;
    color: #FFFFFF;
    font-family: Arial;
    font-size: 19px;
    padding: 6px 25px;
    text-decoration: none;
}
.start_lng:hover {
	background-color: #777;
}
.start_lng:visited {
	color:#fff;
	text-decoration: none;
}
.start_lng:focus {
	color:#fff;
	text-decoration: none;
}
.edit-btn, .edit-btn:hover, .edit-btn:active, .edit-btn:visited  {
	border-radius:50%;
	width:80px;
	height:80px;
	border:1px solid #ccc;
	text-decoration:none;
	color:#fff;
}
</style>
<div class="row editaccount_outer">
	<div class="col-md-2 account-left-nav"> 
		<div class="col-md-12" style="padding: 9px;">
			<div class="account-image">
				<a href="javascript:false;"> <img class="hover" alt="" src="<?php echo asset_url();?>images/Globe1.png"></a>
			</div>
		</div>
		<div class="col-md-12" style="padding: 9px;">
			<div class="account-image" style="padding-top: 0px;">
				<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">Language</span>
			</div>
		</div>
		<div class="col-md-10" style="padding: 9px;">
			<!-- div class="" style="text-align: center;padding-top: 288%;">
			<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span><br>
				<span style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span><br>
				<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
			</div-->
		</div>
	</div>
	<div class="col-md-10 account-content-area">
		<div class="tab-content main-tab-content">
			<div class="panel panel-default tab-pane fade in active" id="ranking">
					<form name="frmfileupload" method="post" action="" enctype="multipart/form-data" id="frmfileupload">
					  	<div class="panel-heading custom-panel-heading">
					  	<!--  ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');ShowObjectWithEffect('Layer335', 1, 'scale', 500, 'swing');return false;-->
					  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer335', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
					  	</div>
				  	<div class="panel-body panel-body-custom" id="account_personal_info">
				  		<?php  if($myds_stage == 4) { ?>
				  		<div class="personal_info_div" id="personal_info_div">
				  			<div style="position: absolute;left: 139px; top: 70px; width: 734px;height: 128px;z-index: 698;text-align: center;">
									<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Add More Languages</span><br><br>
									<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Your Desksite / Website has been completed and displayed in</span><br>
									<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">ENGLISH</span>
									<img src="<?php echo asset_url();?>images/tick-octagon-frame.png" id="" style="padding-left:24px;height:19px;width:19px;"><br>
									<?php foreach ($published as $plang) { ?>
									<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;"><?php echo $plang['language'];?></span>
									<img src="<?php echo asset_url();?>images/tick-octagon-frame.png" id="" style="padding-left:24px;height:19px;width:19px;">
									<a href="<?php echo base_url();?>mystation/translation/<?php echo $plang['id'];?>" target="_blank" alt="Edit" title="edit" class="btn btn-success btn-xs"><i class="fa fa-pencil" style="font-size:14px;color:#fff;"></i></a>
									<br>
									<?php } ?>
									<br>
									<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">However, we offer an Auto - Translation into many languages, but we still recommend you <br> 
									to upload your own translation ( for a professional world-wide site ) ..</span><br><br>
									<span style="color:#696969;font-family:Arial;font-size:11px;">To do this, simply select the other language and click "Start"</span><br><br>
									<select onchange="changelanguage();"  name="Expiry Year" size="1" id="language" style="width:227px;height:34px;">
										<option value="Add More Language">Select Language</option>
<!-- 										<option value="more">Add More Language</option> -->
										<?php foreach($language as $lang) { 
												$is_published = 0;
											 	foreach ($published as $plang) { 
											 		if($lang['id'] == $plang['id']) {
											 			$is_published = 1;
											 		}
											 	}
										?>
											<?php if($is_published == 0) { ?>
											<option value="<?php echo $lang['id'];?>" <?php if(!empty($unpublished[0]['id']) && $unpublished[0]['id'] == $lang['id']){ ?>selected<?php } ?>><?php echo $lang['language'];?></option>
											<?php } ?>
										<?php } ?>
									</select>
									<label style="margin-top:6px;vertical-align:middle;">
										<a href="javascript:startlang()" class="start_lng">Start</a>
									</label>
									<br><br>
								 <div class="row" id="newlangdiv" style="display: none">
								 	<div class="col-md-12">
								 		<div class="col-md-4">
								 		</div>
								 		<div class="col-md-4">
								 			<input type="text" name="newlang" id="newlang"  class="form-control" />
								 		</div>
								 		<div class="col-md-4">
								 			<input type="button" name="btn_newlang" id="btn_newlang" value="Add Language"   onclick="addlanguage();" class="btn btn-success" />
								 		</div>
								 	</div>
								 </div><br><br>
								 <div id="lanlinkdiv" style="display:<?php if(!empty($unpublished[0]['id'])){ ?>block<?php } else { ?>none<?php } ?>;">
									 <span id="langname"  style="color:#2D2D2D;font-family:SimSun;font-size:21px;padding-right:10px;"><?php if(!empty($unpublished[0]['id'])){ echo $unpublished[0]['language']; }?></span>
									<span id="progressicon"><?php if(!empty($unpublished[0]['id']) && $unpublished[0]['allow_to_publish'] == 1){ ?><i class="fa fa-2x fa-check-circle" style="color:green;" aria-hidden="true" style="padding-left:22px;color: #AC2A0A;" ></i><?php } else { ?><a href="javascript:deletelanguage();"><i class="fa fa-2x fa-times-circle" style="color:#ac2a0a;" aria-hidden="true" style="padding-left:22px;color: #AC2A0A;" ></i></a><?php } ?></span>
									<!--  <img src="<?php //echo asset_url();?>images/Error.png" id="" style="width: 39px;height: 25px;padding-left: 18px;"> -->
									 <span  id="langstatus"  style="color:<?php if(!empty($unpublished[0]['id']) && $unpublished[0]['allow_to_publish'] == 1){ ?>green<?php } else { ?>#FF0000<?php } ?>;font-family:Arial;font-size:13px;padding-left: 15px;"><?php if(!empty($unpublished[0]['id']) && $unpublished[0]['allow_to_publish'] == 1){ ?>Done<?php } else { ?>Under Process<?php }?></span><br><br>
									 <span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><span id="lang_name"><?php if(!empty($unpublished[0]['id'])){ echo $unpublished[0]['english_name']; }?></span> language has been added to the following link, copy <br>
									 the link and share it with your translator. When you complete<br> the translation press <strong>Publish </strong>button.</span><br><br>
									 <span style="color:#FF4500;font-family:Arial;font-size:11px;">Don't publish the new language, before you completely translate <br>
									 all the information with all products details</span><br><br>
									 <span style="color:#1E90FF;font-family:Arial;font-size:13px;"><a id="languagelink"  href="<?php if(!empty($unpublished[0]['id'])){ ?><?php echo base_url();?>mystation/translation/<?php echo $unpublished[0]['id'];?><?php } ?>" target="_blank" class="style23"><?php if(!empty($unpublished[0]['id'])){ ?>www.trdstation.com/<?php echo $unpublished[0]['id'];?><?php }?></a></span><br><br><br><br>
									 <div class="row">
									 	<div class="col-md-12">
									 		<div class="col-md-6"><!--   onclick="ShowObject('Layer335', 1);return false;" -->
									 			<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><a href="javascript:publishlanguage();"  style="display: <?php if(!empty($unpublished[0]['id']) && $unpublished[0]['allow_to_publish'] == 1){ ?>block<?php } else { ?>none<?php } ?>;" class="style16 pull-right"  id="btnpublish" >Publish</a></strong></span>
									 		</div>
									 		<div class="col-md-6">
									 			 <span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><a href="javascript:deletelanguage();"  style="display: <?php if(!empty($unpublished[0]['id']) && $unpublished[0]['allow_to_publish'] == 1){ ?>block<?php } else { ?>none<?php } ?>;" class="style16 pull-left"   id="btndelete" >Delete</a></strong></span>
									 		</div>
									 	</div>
									 </div>
								 </div>
							</div>
						</div>
						<?php } else { ?>
						<div id="Layer222" style="position:absolute;text-align:center;left:0px;top:50px;width:1027px;height:581px;border:0px;">
							<div id="Layer222_Container" style="width:1027px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
								<div id="wb_Shape291" style="position:absolute;left:566px;top:330px;width:137px;height:32px;">
									<a href="javascript:ShowObjectWithEffect('Layer335', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');"><div id="Shape291"><div id="Shape291_text"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Ok</span></div></div></a>
								</div>
								<div id="wb_Text760" style="position:absolute;left:565px;top:206px;width:333px;height:52px;text-align:left;">
									<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">To add <strong>More Languages</strong>, you first have to complete <?php if($tscategory_id == 1) { ?>creating your products directories and adding your products details in english.<?php } else { ?>your Desksite <strong>information</strong>.<?php }?></span>
								</div>
								<div id="wb_Text761" style="position:absolute;left:563px;top:174px;width:333px;height:22px;text-align:left;">
									<span style="color:#FF6347;font-family:Arial;font-size:19px;"><strong>Oops..</strong></span>
								</div>
								<div id="wb_Image42" style="position:absolute;left:55px;top:7px;width:489px;height:489px;">
									<img src="<?php echo asset_url();?>images/businessman-toons.png" id="Image42" alt="">
								</div>
								<div id="wb_Text762" style="position:absolute;left:567px;top:271px;width:333px;height:28px;text-align:left;">
									<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Start with " <strong>My Desksite</strong>" to </span><span style="color:#808080;font-family:Arial;font-size:11px;">build </span><span style="color:#2D2D2D;font-family:Arial;font-size:11px;">your <strong>profile</strong> and add your <strong>information</strong>.</span>
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
				</form>
			 </div>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
<div id="accessDeniedModal3" class="modal fade" role="dialog">
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
function startlang()
{
	
	document.getElementById('lanlinkdiv').style.display = 'block';
	var e = document.getElementById("language");
	var languagename = e.options[e.selectedIndex].text;
	var languagevalue = e.options[e.selectedIndex].value;
	document.getElementById('langname').textContent = languagename;
	document.getElementById('languagelink').textContent = "www.trdstation.com/"+languagevalue;
	 document.getElementById("languagelink").href= "<?php echo base_url();?>mystation/translation/"+languagevalue;
	 $.post('<?php echo base_url();?>mystation/savelanguagebusiness' , { language_id:languagevalue},function(data) {
		 if(data == 2)
		 {
			 document.getElementById('langstatus').textContent = "Published";
			 document.getElementById('langstatus').style.color = "green";
			 $('#progressicon').html('<i class="fa fa-2x fa-check-circle" style="color:green;" aria-hidden="true" style="padding-left:22px;color: #AC2A0A;" ></i>');
			 document.getElementById('btnpublish').style.display = "none";
			 document.getElementById('btndelete').style.display = "block";
		 } else if(data == 1) {
			 document.getElementById('langstatus').textContent = "Done";
			 document.getElementById('langstatus').style.color = "green";
			 $('#progressicon').html('<i class="fa fa-2x fa-check-circle" style="color:green;" aria-hidden="true" style="padding-left:22px;color: #AC2A0A;" ></i>');
			 document.getElementById('btnpublish').style.display = "block";
			 document.getElementById('btndelete').style.display = "block";
		 } else {
			 document.getElementById('langstatus').textContent = "Under Process";
			 document.getElementById('langstatus').style.color = "red";
			 $('#progressicon').html('<a href="javascript:deletelanguage();"><i class="fa fa-2x fa-times-circle" style="color:#ac2a0a;" aria-hidden="true" style="padding-left:22px;color: #AC2A0A;" ></i></a>');
			 document.getElementById('btnpublish').style.display = "none";
			 document.getElementById('btndelete').style.display = "none";
		 }
	});
}
function publishlanguage()
{
	var e = document.getElementById("language");
	var languagename = e.options[e.selectedIndex].text;
	var languagevalue = e.options[e.selectedIndex].value;
	$.post('<?php echo base_url();?>mystation/publishlanguage' , { language_id:languagevalue},function(data) {
		alert(data.msg);
		getLanguage();
	},'json');
}
function deletelanguage()
{
	var ans = confirm("Are you sure want to delete this language ?");
	if(ans) {
		var e = document.getElementById("language");
		var languagename = e.options[e.selectedIndex].text;
		var languagevalue = e.options[e.selectedIndex].value;
		$.post('<?php echo base_url();?>mystation/deletelanguage' , { language_id:languagevalue},function(data) {
				 //alert(data.msg);
				 document.getElementById('langstatus').textContent = "Language Deleted";
				 document.getElementById('langstatus').style.color = "red";
				 $('#progressicon').html('<i class="fa fa-2x fa-times-circle" style="color:#ac2a0a;" aria-hidden="true" style="padding-left:22px;color: #AC2A0A;" ></i>');
				 document.getElementById('btnpublish').style.display = "none";
				 document.getElementById('btndelete').style.display = "none";
				 getLanguage();
		},'json');
	}
}
function addlanguage()
{
	var language = document.getElementById('newlang').value;
	if(language == "")
	{
		alert('Please enter language');
	} else {
		$.post('<?php echo base_url();?>mystation/addnewlanguage',{language:language},function(data) {
			alert(data.msg);
			document.getElementById('newlang').value = '';
			document.getElementById('newlang').style.display = 'none';
			document.getElementById('btn_newlang').style.display = 'none';
		},'json');
	}
}
function changelanguage()
{
	var e = document.getElementById("language");
	var strlang = e.options[e.selectedIndex].value;
	if(strlang  == "more")
	{
		document.getElementById('newlangdiv').style.display = 'block';
		document.getElementById('newlang').value = '';
	} else {
		document.getElementById('newlangdiv').style.display = 'none';
		document.getElementById('newlang').value = '';
	}
}
<?php if($tsplanid == 1 && $tscategory_id != 3) { ?>
$('#accessDeniedModal3').modal({show:true,backdrop: 'static',keyboard: false});
function upgradeMyBusinessPlan() {
	ShowObjectWithEffect('Layer335', 0, 'dropup', 500, 'easeInBounce');
	getMyPackages();
}
function cancelAccessDeniedPopup() {
	ShowObjectWithEffect('Layer335', 0, 'dropup', 500, 'easeInBounce');
	ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');
}
<?php }?>
</script>
