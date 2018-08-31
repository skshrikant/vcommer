<?php 
foreach($Company as $company){?>
 	<div class="row">
 		<div class="col-sm-4">
 			<img src="<?php echo asset_url().$company['business_logo']; ?>" id="Shape7" alt="" style="width:120px;height:120px;border:1px solid #ccc;border-radius:30px;">
 		</div>
 		<div class="col-sm-8" style="padding-top:15px;">
 			<div class="col-sm-12" style="padding-bottom:10px;"><span style="color:#3C3C3C;font-family:Georgia;font-size:13px;"><strong><?php echo $company['company_name']?></strong></span></div>
 			<div class="col-sm-3" style="padding-left:0px;padding-right:0px;"><img src="<?php echo asset_url().$company['profile_image']; ?>" style="width:50px;border:2px solid #f4624b;border-radius:50%;"></div>
 			<div class="col-sm-9" style="padding-left:0px;padding-top:15px;">Presented By : <?php echo $company['name'];?></div>
 		</div>
 	</div>
 	<div class="row" style="padding-top:20px;">
 		<div class="col-sm-5 text-left" style="padding-right:0px;">
 			<span style="color:#303030;font-family:Arial;font-size:12px;"><strong>Buyer Type </strong></span><br/>
 			<span style="color:#303030;font-family:Arial;font-size:12px;"><strong>Country</strong></span><br/>
 			<span style="color:#303030;font-family:Arial;font-size:12px;"><strong>Preferred Payment Method</strong></span><br/>
 			<span style="color:#303030;font-family:Arial;font-size:12px;"><strong>Annual Trade Volume</strong></span>
 		</div>
 		<div class="col-sm-7 text-left">
 			<span style="color:#808080;font-family:Arial;font-size:12px;"><?php echo $company['sub_category'];?></span><br/>
 			<span style="color:#303030;font-family:Arial;font-size:12px;"><strong><?php echo $company['company_country'];?> | </strong></span>
 			<span style="color:#808080;font-family:Georgia;font-size:12px;"><?php echo $company['company_province'];?></span><br/>
 			<span style="color:#808080;font-family:Arial;font-size:12px;"><?php if(count($pterms) > 0) { foreach ($pterms as $key=>$term) { echo $term['payment_terms']; if(count($pterms) > ($key+1)) echo ", "; }} else { echo "N/A"; } ?></span><br/>
 			<span style="color:#808080;font-family:Arial;font-size:12px;"><?php if($company['annual_trad_volume']) { echo $company['annual_trad_volume']; } else { echo "N/A"; }?> / Year</span>
 		</div>
 		<div class="col-sm-12 text-left" style="padding:5px 15px;">
 			<span style="color:#FA5C43;font-family:Arial;font-size:12px;"><strong>Main Products </strong></span><br/>
 			<span style="color:#4B4B4B;font-family:Arial;font-size:12px;"><?php echo $company['main_product'];?></span>
 		</div>
 	</div>
<?php } ?>