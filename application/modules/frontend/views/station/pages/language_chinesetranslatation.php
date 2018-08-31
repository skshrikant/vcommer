<link href="<?php echo asset_url();?>css/pages/language.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/font-awesome.min.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/bootstrap.css" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo asset_url();?>images/Homekit.png">
<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url();?>js/bootstrap.js"></script>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>

<style>
/* Style the tab */
div.tab {
    overflow: hidden;
 
}

/* Change background color of buttons on hover */
.tab li a:hover {
    background-color: #FF6347  !imporatant;
}

/* Create an active/current tablink class */
.nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
color: #fff;
    background-color: #FF6347 !important;
}
</style>
<div class="main">
		<div class="row">
			<div class="col-md-12">
				<span style="color:#2D2D2D;font-family:Arial;font-size:24px;">ADD A PROFESSIONAL <br>LANGUAGE TO YOUR WEBSITE</span>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-12">
				<span style="color:#FF6347;font-family:Arial;font-size:25px;">1</span>&nbsp;&nbsp;&nbsp;
				<span style="color:#2D2D2D;font-family:Arial;font-size:15px;"><strong>Share </strong>this link with your translator.</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<span style="color:#FF6347;font-family:Arial;font-size:25px;">2</span>&nbsp;&nbsp;&nbsp;
				<span style="color:#2D2D2D;font-family:Arial;font-size:15px;"><strong>Add </strong>a professional translation into the "light blue" fields.</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<span style="color:#FF6347;font-family:Arial;font-size:25px;">3</span>&nbsp;&nbsp;&nbsp;
				<span style="color:#2D2D2D;font-family:Arial;font-size:15px;"><strong>Save </strong>in each step until you translate all the information, then <strong>Publish</strong>. <br>To publish open your "My Station/Languages/Click Publish Button ( Showing with the Under Process language).</span>
			</div>
		</div><br><br><br>
		<input type="hidden" value="<?php echo $languagefieldinfo[0]['language_id']; ?>" id="language_id" />
		<ul class="nav nav-pills tab">
		  <li class="active"><a  href="#languagepersonal_info"   data-toggle="pill">Personal Information</a></li>
		  <li><a href="#languagebusi_info"   data-toggle="pill" >Company Information</a></li>
		<?php if($tscategory_id == 1 ||  $tscategory_id == 3) {?>
			<?php if($tscategory_id == 3) {?>
		  	<li><a href="#languageproduct_info"  data-toggle="pill" >Main Products</a></li>
		  	<?php } else { ?>
		  	<li><a href="#languageproduct_info"  data-toggle="pill" >Main/Sub Products</a></li>
		  	<?php } ?>
		  	<?php if($tscategory_id == 1) {?>
		  	<li><a href="#languageproductspecification_info"  data-toggle="pill" >Products Specification</a></li>
		  	<?php } ?>
		  <?php } if($tscategory_id == 2) { ?>
		  	<li><a href="#languageproductservices_info"  data-toggle="pill" >Main Services</a></li>
		  <?php } ?>
		</ul>
		
		<div class="tab-content">
		  <div id="languagepersonal_info"  style="padding-left:33px;padding-top:33px;" class="tab-pane fade in active">
		  	<form name="frmlanguagepersonalinfo"   method="post" action="" enctype="multipart/form-data" id="frmlanguagepersonalinfo" >
		  	<input type="hidden" name="personal_langid"  id="personal_langid"  value="<?php echo $language_id; ?>" />
		  		<div class="row">
					<div class="col-md-12">
						<span style="color:#2D2D2D;font-family:Georgia;font-size:12px;">Contact Address</span><br><br>
						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $personalinfo[0]['country'];?>, <?php echo $personalinfo[0]['province'];?>, <?php echo $personalinfo[0]['city'];?>, <?php echo $personalinfo[0]['street'];?></span><br><br>
						<span style="color:#2D2D2D;font-family:SimSun;font-size:12px;"><?php echo $languagefieldinfo[0]['contact_address'];?></span><br>
					</div>
				</div>	
		  		<div class="row">
					<div class="col-md-12">
						<div class="col-md-2 form-group">
							 <input type="text"  name="personalinfocountry"  id="personalinfocountry"  value="<?php if(!empty($langpersonalinfo)) { echo $langpersonalinfo[0]['country']; } ?>"  class="form-control " placeholder="Country" style="background-color:#E0FFFF;height:35px;margin-left: -21px;">
						</div>
						<div class="col-md-2 form-group">
							<input type="text" name="personalinfoprovince"  id="personalinfoprovince" value="<?php  if(!empty($langpersonalinfo)) { echo $langpersonalinfo[0]['province']; } ?>" class="form-control form-custom-input" placeholder="Prvince" style="background-color:#E0FFFF;height:35px;margin-left: -46px;">
						</div>
						<div class="col-md-1 form-group">
							  <input type="text"  name="personalinfocity" id="personalinfocity" value="<?php if(!empty($langpersonalinfo)) { echo $langpersonalinfo[0]['city']; } ?>" class="form-control form-custom-input" placeholder="City" style="background-color:#E0FFFF;height:35px;margin-left: -71px;">
						</div>
						<div class="col-md-4 form-group" >
							 <input type="text" name="personalinfostreet"  id="personalinfostreet" value="<?php if(!empty($langpersonalinfo)) { echo $langpersonalinfo[0]['street']; } ?>" class="form-control form-custom-input" placeholder="Street, Building No." style="background-color:#E0FFFF;height:35px;width:330px;margin-left: -97px;">
						</div>
					</div>
				</div><br>
				<div class="row" style="margin-left: -37px;">
					<div class="col-md-12">
						<div class="col-md-4">
							 <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Name</span>
						</div>
						<div class="col-md-2">
							 <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Position / Title</span><br>
						</div>
					</div>
				</div>	
				<div class="row" style="margin-left: -37px;">
					<div class="col-md-12">
						<div class="col-md-4">
							 <span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $personalinfo[0]['name_prefix'];?>.<?php echo $personalinfo[0]['name'];?></span>
						</div>
						<div class="col-md-2">
							 <span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $personalinfo[0]['position'];?></span>
						</div>
					</div>
				</div>	
				<div class="row" style="margin-left: -37px;">
					<div class="col-md-12">
						<div class="col-md-4">
							 <span style="color:#3C3C3C;font-family:SimSun;font-size:12px;"><?php echo $languagefieldinfo[0]['name'];?></span>
						</div>
						<div class="col-md-2">
							 <span style="color:#3C3C3C;font-family:SimSun;font-size:12px;"><?php echo $languagefieldinfo[0]['positiontitle'];?></span>
						</div>
					</div>
				</div>	
				<div class="row" style="margin-left: -37px;">
					<div class="col-md-12">
						<div class="col-md-1">
							 <select class="form-control"  name="personalinfonameprefix"  id="personalinfonameprefix" style="background-color:#E0FFFF;height: 33px;width:60px;" />
							 	<option <?php  if(!empty($langpersonalinfo)) { if($langpersonalinfo[0]['name_prefix'] == "Mr") {  echo "selected"; }    } ?> value="Mr">Mr.</option>
							 	<option <?php  if(!empty($langpersonalinfo)) { if($langpersonalinfo[0]['name_prefix'] == "Miss") {  echo "selected"; }    } ?> value="Miss">Miss.</option>
							 	<option <?php  if(!empty($langpersonalinfo)) { if($langpersonalinfo[0]['name_prefix'] == "Mrs") {  echo "selected"; }    } ?> value="Mrs">Mrs.</option>
							 </select>
						</div>
						<div class="col-md-3 form-group">
							 <input type="text" class="form-control"  value="<?php  if(!empty($langpersonalinfo)) { echo $langpersonalinfo[0]['name']; } ?>"   name="personalinfoname"  id="personalinfoname"  style="background-color:#E0FFFF;margin-left: -46px;" />
						</div>
						<div class="col-md-2 form-group">
							 <input type="text" class="form-control"  value="<?php  if(!empty($langpersonalinfo)) { echo $langpersonalinfo[0]['position']; } ?>"  name="personalinfoposition"  id="personalinfoposition"  style="background-color:#E0FFFF;" />
						</div>
					</div>
				</div>	
			  	<div style="position: absolute;  left: 1066px; top: 335px; width: 100px;">
			    	<input type="submit" value="save" name="btnpersonalinfo"   style=" background-color: #F69C0A;height: 35px;width: 130px;border:none;">
			    </div>
			    </form>		
		  	</div>
		  <div id="languagebusi_info" style="padding-left:33px;padding-top:33px;" class="tab-pane fade">
		  	<form name="frmlanguagebusinessinfo"   method="post" action="" enctype="multipart/form-data" id="frmlanguagebusinessinfo" >
		  		<input type="hidden" name="company_langid"  id="company_langid"  value="<?php echo $language_id; ?>" />
		  		<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:Georgia;font-size:12px;">Company Name</span>
						</div>
						<?php //if($tscategory_id == 1  || $tscategory_id == 2) {?>
						<div class="col-md-2">
							 <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Owner Name</span><br>
						</div>
						<?php //} ?>
					</div>
				</div>	
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $businessinfo[0]['company_name'];?></span>
						</div>
						<?php //if($tscategory_id == 1 || $tscategory_id == 2) {?>
						<div class="col-md-2">
							 <span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $businessinfo[0]['company_owner_name'];?></span>
						</div>
						<?php //} ?>
					</div>
				</div>	
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:SimSun;font-size:12px;"><?php echo $languagefieldinfo[0]['company_name'];?></span>
						</div>
						<?php //if($tscategory_id == 1 || $tscategory_id == 2) {?>
						<div class="col-md-2">
							 <span style="color:#2D2D2D;font-family:SimSun;font-size:12px;"><?php echo $languagefieldinfo[0]['owner_name'];?></span>
						</div>
						<?php //} ?>
					</div>
				</div>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4 form-group">
							<input type="text" name="company_name"  id="company_name"   value="<?php  if(!empty($langcompanyinfo)) { echo $langcompanyinfo[0]['company_name']; } ?>"   class="form-control form-custom-input"  style="background-color:#E0FFFF;">
						</div>
						<?php //if($tscategory_id == 1 || $tscategory_id == 2) {?>
						<div class="col-md-4 form-group">
							 <input type="text" name="owner_name"  id="owner_name" value="<?php  if(!empty($langcompanyinfo)) { echo $langcompanyinfo[0]['owner_name']; } ?>" class="form-control form-custom-input"  style="background-color:#E0FFFF;">
						</div>
						<?php //} ?>
					</div>
				</div>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Company Introduction</span>
						</div>
					</div>
				</div>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-10" style="padding-left: 32px;">
							<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $businessinfo[0]['company_introduction'];?><br><br></span>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:SimSun;font-size:13px;"><?php echo $languagefieldinfo[0]['company_introduction'];?></span>
						</div>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-8 form-group">
							<textarea rows="10px"  cols="150px" name="company_intro" style="background-color:#E0FFFF;"><?php if(!empty($langcompanyinfo)) { echo $langcompanyinfo[0]['company_introduction']; } ?></textarea>
						</div>
					</div>
				</div>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Hot Presentation</span>
						</div>
					</div>
				</div>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-10" style="padding-left: 32px;">
							<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $businessinfo[0]['hot_presentation'];?><br><br></span>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:SimSun;font-size:13px;"><?php echo $languagefieldinfo[0]['hot_presentation'];?></span>
						</div>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-8 form-group">
							<textarea rows="10px" cols="150px" name="hot_presentation" style="background-color:#E0FFFF;"><?php if(!empty($langcompanyinfo)) { echo $langcompanyinfo[0]['hot_presentation']; } ?></textarea>
						</div>
					</div>
				</div>
				<?php if($tscategory_id == 1) {?>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4 ">
							<span style="color:#F05539;font-family:Georgia;font-size:13px;">Factory Details</span>
						</div>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:Georgia;font-size:12px;">Factory Address</span>
						</div>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $businessinfo[0]['fact_province'].",".$businessinfo[0]['fact_city'].",".$businessinfo[0]['fact_street'];?></span>
						</div>
					</div>
				</div>
		    	<div class="row" style="margin-left:-37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:SimSun;font-size:12px;"><?php echo $languagefieldinfo[0]['factory_address'];?></span>
						</div>
					</div>
				</div>
		  		<div class="row" style="margin-left: 6px;padding-bottom: 4px;">
					<div class="col-md-12">
<!-- 						<div class="col-md-2"> -->
<!-- 							 <input type="text"   name="country" id="street" value="" class="form-control form-custom-input" placeholder="Country" style="background-color:#E0FFFF;height:35px;margin-left: -21px;">
<!-- 						</div> -->
						<div class="col-md-2 form-group">
							<input type="text" name="fact_prvince"  id="fact_prvince" value="<?php if(!empty($langfactoryinfo)){ echo $langfactoryinfo[0]['province']; }?>" class="form-control form-custom-input" placeholder="Prvince" style="background-color:#E0FFFF;height:35px;margin-left: -46px;">
						</div>
						<div class="col-md-1 form-group">
							  <input type="text" name="fact_city"  id="fact_city" value="<?php if(!empty($langfactoryinfo)){ echo $langfactoryinfo[0]['city']; }?>" class="form-control form-custom-input" placeholder="City" style="background-color:#E0FFFF;height:35px;margin-left: -71px;">
						</div>
						<div class="col-md-4 form-group">
							 <input type="text" name="fact_street"  id="fact_street" value="<?php if(!empty($langfactoryinfo)){ echo $langfactoryinfo[0]['street']; }?>" class="form-control form-custom-input" placeholder="Street, Building No." style="background-color:#E0FFFF;height:35px;width:330px;margin-left: -97px;">
						</div>
					</div>
				</div><br><br>
				<?php } ?>
				<?php if($tscategory_id == 1 ) {?>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#F05539;font-family:Georgia;font-size:13px;">Trade &amp; Export Details</span>
						</div>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Nearst Port/Ports</span>
						</div>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><?php echo $businessinfo[0]['part1'].",".$businessinfo[0]['part2'].",".$businessinfo[0]['part3'];?></span>
						</div>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:SimSun;font-size:13px;"><?php echo $languagefieldinfo[0]['nearest_port'];?></span>
						</div>
					</div>
				</div>
		  		<div class="row">
					<div class="col-md-12">
						<div class="col-md-2 form-group">
							 <input type="text" name="port1"  id="port1" value="<?php if(!empty($langtradinfo)) { echo $langtradinfo[0]['port1']; } ?>" class="form-control form-custom-input" placeholder="Port" style="background-color:#E0FFFF;height:35px;margin-left: -21px;">
						</div>
						<div class="col-md-1">
							 <span style="color:#3C3C3C;font-family:SimSun;font-size:12px;"><?php echo $languagefieldinfo[0]['portwith'];?></span>
						</div>
						<div class="col-md-2 form-group">
							<input type="text" name="port2" id="port2" value="<?php if(!empty($langtradinfo)) { echo $langtradinfo[0]['port2']; } ?>" class="form-control form-custom-input" placeholder="Port" style="background-color:#E0FFFF;height:35px;margin-left: -46px;">
						</div>
						<div class="col-md-1">
							 <span style="color:#3C3C3C;font-family:SimSun;font-size:12px;"><?php echo $languagefieldinfo[0]['portwith'];?></span>
						</div>
						<div class="col-md-2 form-group">
							  <input type="text" name="port3" id="port3" value="<?php if(!empty($langtradinfo)) { echo $langtradinfo[0]['port3']; } ?>" class="form-control form-custom-input" placeholder="Port" style="background-color:#E0FFFF;height:35px;margin-left: -71px;">
						</div>
					</div>
				</div><br><br>
				<?php } ?>
				<?php if($tscategory_id == 1 ||  $tscategory_id == 2) {?>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#F05539;font-family:Georgia;font-size:13px;">Certificates &amp; License</span>
						</div>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:Georgia;font-size:12px;">Scope of business</span>
						</div>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-8">
							<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $businessinfo[0]['scope'];?></span>
						</div>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-8">
							<span style="color:#2D2D2D;font-family:SimSun;font-size:13px;"><?php echo $languagefieldinfo[0]['scope_of_business'];?></span>
						</div>
					</div>
				</div>
		  		<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-6 form-group">
							 <textarea style="background-color:#E0FFFF;" name="companyscope" rows="3" cols="80"><?php if(!empty($langcertificateinfo)) { echo  $langcertificateinfo[0]['scope']; }?></textarea>
						</div>
					</div>
				</div><br><br>
				<?php } ?>
				<div style="position: absolute;  left: 1066px; top: 335px; width: 100px;">
			    	<input type="submit" value="save"  style=" background-color: #F69C0A;height: 35px;width: 130px;border:none;">
			    </div>
			   </form> 
		  </div>
		  <div id="languageproduct_info"  style="padding-left:33px;padding-top:33px;"  class="tab-pane fade">
		  	<form name="frmlanguagemainproductinfo"   method="post" action="" enctype="multipart/form-data" id="frmlanguagemainproductinfo" >
		  		<input type="hidden" name="mainproduct_langid"  id="mainproduct_langid"  value="<?php echo $language_id; ?>" />
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:Georgia;font-size:12px;">Main Products</span>
						</div>
					</div>
				</div>	
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $mainprostr; ?></span>
						</div>
					</div>
				</div>	
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:SimSun;font-size:12px;"><?php echo $languagefieldinfo[0]['main_product'];?></span>
						</div>
					</div>
				</div>	
				<table>
					<?php  $mpcount = count($mainproductinfo); ?>
					<?php for($i = 0; $i < $mpcount; $i++) { ?>
					<tr>
						<?php if($mpcount > ($i * 5 + 0)) { ?>
						<td style="padding-right: 22px;padding-bottom: 22px;" class="form-group"  >
							<input type="text" name="mainproduct[]"  id="street" value="<?php if(!empty($langmainproductinfo))  { echo $langmainproductinfo[($i * 5 + 0)]['mainproduct']; } ?>" class="form-control form-custom-input"  style="background-color:#E0FFFF;" placeholder="<?php echo ($i * 5 + 1);?>">
						</td>
						<?php } ?>
						<?php if($mpcount > ($i * 5 + 1)) { ?>
						<td style="padding-right:22px;padding-bottom:22px;" class="form-group" >
							<input type="text"  name="mainproduct[]" id="street" value="<?php if(!empty($langmainproductinfo))  { echo $langmainproductinfo[($i * 5 + 1)]['mainproduct']; } ?>" class="form-control form-custom-input"  style="background-color:#E0FFFF;" placeholder="<?php echo ($i * 5 + 2);?>">
						</td>
						<?php } ?>
						<?php if($mpcount > ($i * 5 + 2)) { ?>
						<td style="padding-right:22px;padding-bottom:22px;" class="form-group" >
							<input type="text"  name="mainproduct[]" id="street" value="<?php if(!empty($langmainproductinfo))  { echo $langmainproductinfo[($i * 5 + 2)]['mainproduct']; } ?>" class="form-control form-custom-input"  style="background-color:#E0FFFF;" placeholder="<?php echo ($i * 5 + 3);?>">
						</td>
						<?php } ?>
						<?php if($mpcount > ($i * 5 + 3)) { ?>
						<td style="padding-right:22px;padding-bottom:22px;" class="form-group" >
							<input type="text"  name="mainproduct[]" id="street" value="<?php if(!empty($langmainproductinfo))  { echo $langmainproductinfo[($i * 5 + 3)]['mainproduct']; } ?>" class="form-control form-custom-input"  style="background-color:#E0FFFF;" placeholder="<?php echo ($i * 5 + 4);?>">
						</td>
						<?php } ?>
						<?php if($mpcount > ($i * 5 + 4)) { ?>
						<td style="padding-right: 22px;padding-bottom: 22px;" class="form-group" >
							<input type="text"  name="mainproduct[]" id="street" value="<?php if(!empty($langmainproductinfo))  { echo $langmainproductinfo[($i * 5 + 4)]['mainproduct']; } ?>" class="form-control form-custom-input"  style="background-color:#E0FFFF;" placeholder="<?php echo ($i * 5 + 5);?>">
						</td>
						<?php } ?>
					</tr>
					<?php } ?>
				</table>
				<br><br>
				<?php  for($i =0;$i<count($subproductinfo);$i++) { ?>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
						<span style="color:#2D2D2D;font-family:Georgia;font-size:12px;">Sub Products</span>
						</div>
					</div>
				</div>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-10" style="padding-left: 32px;">
						<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $subproductinfo[$i]['name'];?></span>
					</div>
				</div>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:SimSun;font-size:12px;"><?php echo $languagefieldinfo[0]['sub_product'];?></span>
						</div>
					</div>
				</div>
				<table>
				<tr>
				<?php  for($j=0;$j<count($subproductdata);$j++) {
					if($subproductdata[$j]['mproduct_id'] == $subproductinfo[$i]['mproduct_id']) { ?>
						<td style="padding-right: 22px;padding-bottom: 22px;" class="form-group" >
						<input type="text"  name="subproduct-<?php echo $subproductdata[$j]['id']; ?>"  value="<?php if(!empty($langsubproductinfo)) { echo $langsubproductinfo[$j]['sub_product']; } ?>" class="form-control form-custom-input"  style="background-color:#E0FFFF;" placeholder="<?php echo ($j+1);?>">
						</td>
				<?php }
				} ?>
				</tr>	
				</table>
				<br><br>
				<?php } ?>
				<div style="position: absolute;  left: 1066px; top: 335px; width: 100px;">
			    	<input type="submit" value="save"   style=" background-color: #F69C0A;height: 35px;width: 130px;border:none;">
			    </div>
			  </form>  
		  </div>
		  <div id="languageproductspecification_info"  style="padding-left:33px;padding-top:33px;"  class="tab-pane fade">
		  	  <form name="frmlanguageproductinfo"   method="post" action="" enctype="multipart/form-data" id="frmlanguageproductinfo" >
		  	  	<input type="hidden" name="productspec_langid"  id="productspec_langid"  value="<?php echo $language_id; ?>" />
		  	  	<input type="hidden" name="countid" id="countid"  value="1"/>
		  	  	<input type="hidden" name="productcount"  id="productcount"  value="<?php echo count($productinfo);?>"/>
		  	  		<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
							<div class="col-md-12">
								<div class="col-md-4">
									<span style="color:#3C3C3C;font-family:Arial;font-size:15px;"><strong>Product Name</strong></span>
								</div>
								<div class="col-md-2">
									<span style="color:#FF6347;font-family:Arial;font-size:15px;">Total : <?php echo count($productinfo);?> products</span>
								</div>
								<div class="col-md-2">
									<input type="button"  name="btnprevious"  onclick = "previous();"  class="form-control"  style="color:#FFFFFF;background-color: #0000FF;margin-left:-84px"  value="Previous Product" />
								</div>
								<div class="col-md-2">
									<input type="button"  name="btnnext"  onclick = "next();" class="form-control"  style="color:#FFFFFF;background-color: #0000FF;margin-left:-108px"  value="Next Product" />
								</div>
							</div>
					</div>
					<div id="productdiv">
						
					</div>
			   </form> 
		  </div>
		  <div id="languageproductservices_info"  style="padding-left:33px;padding-top:33px;"  class="tab-pane fade">
		  	  <form name="frmlanguageserviceinfo"   method="post" enctype="multipart/form-data" id="frmlanguageserviceinfo" >
		  	  	<input type="hidden" name="productservice_langid"  id="productservice_langid"  value="<?php echo $language_id; ?>" />
		  	  	<input type="hidden" name="scountid" id="scountid"  value="1"/>
		  	  	<input type="hidden" name="sproductcount"  id="sproductcount"  value="<?php echo count($productserviceinfo);?>"/>
						<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
							<div class="col-md-4">
									<span style="color:#3C3C3C;font-family:Arial;font-size:15px;"><strong>Service Name</strong></span>
							</div>
							<div class="col-md-2">
								<span style="color:#FF6347;font-family:Arial;font-size:15px;">Total : <?php echo count($productserviceinfo);?> services</span>
							</div>
							<div class="col-md-2">
								<input type="button"  name="btnprevious"  onclick = "previousServ();"  class="form-control"  style="color:#FFFFFF;background-color: #0000FF;margin-left:-84px"  value="Previous Service" />
							</div>
							<div class="col-md-2">
								<input type="button"  name="btnnext"  onclick = "nextServ();" class="form-control"  style="color:#FFFFFF;background-color: #0000FF;margin-left:-108px"  value="Next Service" />
							</div>
						</div>
						<div id="mservicediv">
						
						</div>
					<div style="position: absolute;  left: 1066px; top: 335px; width: 100px;">
			    		<input type="submit" value="save" name="btnserviceinfo"  style=" background-color: #F69C0A;height: 35px;width: 130px;border:none;">
			    	</div>
			   </form> 
		  </div>
	</div>
</div>	
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
$( document ).ready(function() {
	var number = 1;
	var lang_id = document.getElementById('language_id').value;
	$.post('<?php echo base_url();?>mystation/getlanguageproduct',{number:number,lang_id:lang_id},function(data) {
		document.getElementById('productdiv').innerHTML = data;
	});
});
$( document ).ready(function() {
	var number = 1;
	var lang_id = document.getElementById('language_id').value;
	$.post('<?php echo base_url();?>mystation/getlanguageservice',{number:number,lang_id:lang_id},function(data) {
		document.getElementById('mservicediv').innerHTML = data;
	});
});
function previous()
{
	var number = document.getElementById('countid').value;
	number = parseInt(number) - 1;
	var lang_id = document.getElementById('language_id').value;
	if(number > 0) {
		document.getElementById('countid').value = number;
		$.post('<?php echo base_url();?>mystation/getlanguageproduct',{number:number,lang_id:lang_id},function(data) {
			document.getElementById('productdiv').innerHTML = data;
		});
	} 
}
function next()
{
	if(validateproduct()) {
		savelangproductinfo();
		var number = document.getElementById('countid').value;
		var productcount = document.getElementById('productcount').value;
		var lang_id = document.getElementById('language_id').value;
		number = parseInt(number) + 1;
		if(number > 0) {
			if(number <= productcount) {
				document.getElementById('countid').value = number;
				$.post('<?php echo base_url();?>mystation/getlanguageproduct',{number:number,lang_id:lang_id},function(data) {
					document.getElementById('productdiv').innerHTML = data;
				});
			} else {
				alert('No More Product Available');
			}
		}
	}
}

function previousServ()
{
	var number = document.getElementById('scountid').value;
	number = parseInt(number) - 1;
	var lang_id = document.getElementById('language_id').value;
	if(number > 0) {
		document.getElementById('scountid').value = number;
		$.post('<?php echo base_url();?>mystation/getlanguageservice',{number:number,lang_id:lang_id},function(data) {
			document.getElementById('mservicediv').innerHTML = data;
		});
	} 
}
function nextServ()
{
	savelangserviceinfo();
	var number = document.getElementById('scountid').value;
	var productcount = document.getElementById('sproductcount').value;
	var lang_id = document.getElementById('language_id').value;
	number = parseInt(number) + 1;
	if(number > 0) {
		if(number <= productcount) {
			document.getElementById('scountid').value = number;
			$.post('<?php echo base_url();?>mystation/getlanguageservice',{number:number,lang_id:lang_id},function(data) {
				document.getElementById('mservicediv').innerHTML = data;
			});
		} else {
			alert('No More Product Available');
		}
	}
}

$('#frmlanguagepersonalinfo').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {

    }
}).on('success.form.bv', function(e) {
// Prevent form submission
	e.preventDefault();
	savelangpersonalinfo();
});

function savelangpersonalinfo()
{
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showinfoRequest, // pre-submit callback 
 			success :  showinfoResponse,
 			url : "<?php echo base_url();?>mystation/savelangpersonalinfo",
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmlanguagepersonalinfo').ajaxSubmit(options);
}

$('#frmlanguagebusinessinfo').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {

    }
}).on('success.form.bv', function(e) {
// Prevent form submission
	e.preventDefault();
	savelangcompanyinfo();
});

function savelangcompanyinfo()
{
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showinfoRequest, // pre-submit callback 
 			success :  showinfoResponse,
 			url : "<?php echo base_url();?>mystation/savelangcompanyinfo",
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmlanguagebusinessinfo').ajaxSubmit(options);
}

$('#frmlanguagemainproductinfo').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {

    }
}).on('success.form.bv', function(e) {
// Prevent form submission
	e.preventDefault();
	savelangmainproductinfo();
});
 
function savelangmainproductinfo()
{
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showinfoRequest, // pre-submit callback 
 			success :  showinfoResponse,
 			url : "<?php echo base_url();?>mystation/savelangmainproductinfo",
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmlanguagemainproductinfo').ajaxSubmit(options);
}

$('#frmlanguageserviceinfo').bootstrapValidator({
	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
    
    }
}).on('success.form.bv', function(e) {
// Prevent form submission
	e.preventDefault();
	savelangserviceinfo();
});

function savelangserviceinfo()
{
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showinfoRequest, // pre-submit callback 
 			success :  showinfoResponse,
 			url : "<?php echo base_url();?>mystation/savelangserviceinfo",
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmlanguageserviceinfo').ajaxSubmit(options);
}

function showinfoRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showinfoResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
	}
}

function savelangproductinfo()
{
	var  flag = true;

	flag = validateproduct();

	//if(flag) {
		var options = {
	 			target : '#response', // target element(s) to be updated with server response 
	 			beforeSubmit : showinfoRequest, // pre-submit callback 
	 			success :  showinfoResponse,
	 			url : "<?php echo base_url();?>mystation/savelangproductinfo",
	 			semantic : true,
	 			dataType : 'json'
	 		};
			$('#frmlanguageproductinfo').ajaxSubmit(options);
	//}
}
function validateproduct()
{
	var count = 0;
	var product_name = $('#product_name').val();
    if (product_name == '' || product_name == 'undefined') {
        $('#product_name').focus();
        $('#product_name').css('border', '1px solid red');
        return false;
    } else {
        $('#product_name').css('border', '1px solid #DCDCDC');
        count = count+parseInt(1);
    }
    
	var product_about = $('#product_about').val();
    if (product_about == '' || product_about == 'undefined') {
        $('#product_about').focus();
        $('#product_about').css('border', '1px solid red');
        return false;
    } else {
        $('#product_about').css('border', '1px solid #DCDCDC');
        count = count+parseInt(1);
    }
    
	var product_description = $('#product_description').val();
    if (product_description == '' || product_description == 'undefined') {
        $('#product_description').focus();
        $('#product_description').css('border', '1px solid red');
        return false;
    } else {
        $('#product_description').css('border', '1px solid #DCDCDC');
        count = count+parseInt(1);
    }

    var speccount  = $('#prospecificationcount').val();
	var j =0;
    for(var i = 0; i<speccount;i++) {
        
			var spec_name = $('#spec_name_'+i).val();
		    if (spec_name == '' || spec_name == 'undefined') {
		        $('#spec_name_'+i).focus();
		        $('#spec_name_'+i).css('border', '1px solid red');
		        return false;
		    } else {
		        $('#spec_name_'+i).css('border', '1px solid #DCDCDC');
		        j = j+parseInt(1);
		    }

			var spec_value = $('#spec_value_'+i).val();
		    if (spec_value == '' || spec_value == 'undefined') {
		        $('#spec_value_'+i).focus();
		        $('#spec_value_'+i).css('border', '1px solid red');
		        return false;
		    } else {
		        $('#spec_value_'+i).css('border', '1px solid #DCDCDC');
		        //j = j+parseInt(1);
		    }
		    if(j == speccount)
		    {
			    count = count + parseInt(1); 
		    }
    }
    if(count == 4)
    {
        return true;
    }
}


</script>
