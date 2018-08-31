<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
	<div class="col-md-12">
		<span style="color:#3C3C3C;font-family:SimSun;font-size:12px;"><?php echo $productserviceinfo['name'];?></span>
	</div>
</div>
<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
	<div class="col-md-12">
		<span style="color:#3C3C3C;font-family:SimSun;font-size:12px;"><?php echo $languagefieldinfo[0]['service_name'];?></span>
	</div>
</div>
<input type="hidden" name="service_id[]"  id="service_id" value="<?php echo $productserviceinfo['id'];?>" class="form-control form-custom-input"  style="background-color:#E0FFFF;">
<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
	<div class="col-md-12">
		<div class="col-md-4 form-group" style="margin-left: -16px;">
			<input type="text" name="service_name[]"  id="service_name" value="<?php if(!empty($langproductserviceinfo[0]['service_name'])) { echo $langproductserviceinfo[0]['service_name']; }?>" class="form-control form-custom-input"  style="background-color:#E0FFFF;">
		</div>
	</div>
</div><br><br>
<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
	<div class="col-md-12">
		<span style="color:#3C3C3C;font-family:Arial;font-size:15px;"><strong>Service Description</strong></span>
	</div>
</div>
<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
	<div class="col-md-12">
		<span style="color:#3C3C3C;font-family:SimSun;font-size:12px;"><?php echo $productserviceinfo['description'];?></span>
	</div>
</div>
<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
	<div class="col-md-12">
		<span style="color:#000000;font-family:SimSun;font-size:13px;"><?php echo $languagefieldinfo[0]['service_description'];?></span>
	</div>
</div>
<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
	<div class="col-md-8 form-group">
		<textarea rows="13" name="service_description[]"  id="service_description" class="form-control"  style="background-color:#E0FFFF;" ><?php if(!empty($langproductserviceinfo[0]['service_description'])) { echo $langproductserviceinfo[0]['service_description']; } ?></textarea>
	</div>
</div>