				<input type="hidden" value="<?php echo $productinfo[$number]['id'];?>" name="product_id"  id="product_id"  />
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo $productinfo[$number]['name'];?></span>
						</div>
					</div>
				</div>	
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#000000;font-family:SimSun;font-size:13px;"><?php echo $languagefieldinfo[0]['product_name'];?></span>
						</div>
					</div>
				</div>	
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-2 form-group">
							<input type="text" name="product_name"  id="product_name" value="<?php  if(!empty($langproductinfo)) { if(count($langproductinfo) >= ($number+1)) {  echo $langproductinfo[$number]['product_name']; }} ?>" class="form-control form-custom-input"  style="background-color:#E0FFFF;">
						</div>
						<div class="messageContainer"></div>
					</div>
				</div><br><br><br>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#3C3C3C;font-family:Arial;font-size:15px;"><strong>About This Product</strong></span>
						</div>
					</div>
				</div><br>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-10" style="padding-left: 32px;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $productinfo[$number]['about'];?><br></span>
					</div>
				</div>
<!--		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
<!-- 					<div class="col-md-12"> -->
	<!--					<span style="color:#3C3C3C;font-family:Arial;font-size:13px;"><br>Specific Use: Living Room Sofa&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; General Use: Home Furniture<br>Type: Living Room Furniture, Set&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Material: Synthetic Leather<br>Style:Sectional Sofa&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Regional Style: American Style<br>Appearance:Modern&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Inflatable: No<br>Place of Origin:Zhejiang, China (Mainland)&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Brand Name: ZOY <br>Model Number: 93930&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; Name: Leather Sofa Wholesale<br>Can be equiped Feature: Rocker/Glider/Swivel&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; Seat:Coil pocket/no-sag springs<br>Back: Webbing&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Frame: Plywood<br>Color:Brown, Black, Red, Wine, Beige, Blue,And so on&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Fabric type for recliner:	<br>Bonded leather/Leather air/Palomino/PU/Microfiber and so on<br>Mechanism: RMT and cenro Mechanism&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; G.W.kg (1+2+3):180 kg<br>Volume (1+2+3): 2.22 cbm</span>
<!-- 					</div> -->
<!-- 				</div> -->
				<br><br><br>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<span style="color:#2D2D2D;font-family:SimSun;font-size:13px;"><?php echo $languagefieldinfo[0]['about_product'];?></span>
					</div>
				</div><br>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-8 form-group">
						<textarea rows="13"  name="product_about"  id="product_about"  class="form-control"  style="background-color:#E0FFFF;" ><?php  if(!empty($langproductinfo)) { if(count($langproductinfo) >= ($number+1)) { echo $langproductinfo[$number]['about_product']; } } ?></textarea>
					</div>
				</div><br><br>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-10" style="padding-left: 32px;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:15px;"><strong>Product Description</strong></span>
					</div>
				</div><br><br>
		    	<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<span style="color:#3C3C3C;font-family:Arial;font-size:13px;"><?php echo $productinfo[$number]['description'];?></span>
						</div>
					</div>
				</div><br><br>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-2">
							<span style="color:#000000;font-family:SimSun;font-size:13px;"><?php echo $languagefieldinfo[0]['product_description'];?></span>
						</div>
					</div>
				</div><br>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-8 form-group">
						<textarea rows="13" name="product_description"  id="product_description" class="form-control"  style="background-color:#E0FFFF;" ><?php if(!empty($langproductinfo)) { if(count($langproductinfo) >= ($number+1)) { echo $langproductinfo[$number]['product_description']; } } ?></textarea>
					</div>
				</div><br><br>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-8">
						<span style="color:#3C3C3C;font-family:Arial;font-size:15px;"><strong>Product Specifications</strong></span>
					</div>
				</div>
				<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
					<div class="col-md-12">
						<div class="col-md-2">
							<span style="color:#000000;font-family:SimSun;font-size:13px;"><?php echo $languagefieldinfo[0]['product_specification'];?></span>
						</div>
					</div>
				</div><br>
				<input type="hidden"  name="prospecificationcount"  id="prospecificationcount"  value="<?php echo count($productspecification);?>" />
				<?php $prospec = 0; foreach($productspecification as $row) { ?>
					<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
						<div class="col-md-1">
							<span style="color:#3C3C3C;font-family:Arial;font-size:15px;"><?php echo $row['spec_name']?> :</span>
						</div>
						<div class="col-md-1">
							<span style="color:#000000;font-family:Arial;font-size:13px;"> <?php echo $row['spec_value']?></span>
						</div>
					</div><br>
					<div class="row" style="margin-left: -37px;padding-bottom: 4px;">
						<div class="col-md-1 form-group">
							<input type="text" name="spec_name[]"  value="<?php if(!empty($langproductspecificationinfo)) { echo $langproductspecificationinfo[$prospec]['spec_name']; } ?>"  style="background-color:#E0FFFF;"  id="spec_name_<?php echo $prospec;?>"  class="form-control" />
						</div>
						<div class="col-md-1 form-group ">
							<input type="text" name="spec_value[]"  value="<?php if(!empty($langproductspecificationinfo)) { echo $langproductspecificationinfo[$prospec]['spec_value']; } ?>"  style="background-color:#E0FFFF;"  id="spec_value_<?php echo $prospec;?>"  class="form-control" />
						</div>
					</div><br>
				<?php $prospec++; } ?>
				<div style="position: absolute;  left: 1066px; top: 335px; width: 100px;">
			    	<input type="button"    value="save"    onclick="savelangproductinfo();"   style=" background-color: #F69C0A;height: 35px;width: 130px;border:none;">
			    </div>
<script>
// $('#frmlanguageproductinfo').bootstrapValidator({
// 	container: function($field, validator) {
// 		return $field.parent().next('.messageContainer');
//    	},
//     feedbackIcons: {
//         validating: 'glyphicon glyphicon-refresh'
//     },
//     excluded: ':disabled',
//     fields: {
//     	'product_name': {
// 	   		validators: {
//              	notEmpty: {
//                  	message: 'The product_name  is required and cannot be empty'
//              	}
//          	}
// 	   	},
//     }
// }).on('success.form.bv', function(e) {
	
// // Prevent form submission
// 	e.preventDefault();
// 	savelangproductinfo();
// });


</script>