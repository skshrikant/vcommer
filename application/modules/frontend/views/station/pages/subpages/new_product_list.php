<style>
.product-select {
    padding-top: 20px !important;
}
.wrapper {
    /*width: 500px;*/
    overflow: hidden; /* will contain if #first is longer than #second */
}
.first {
    /*width: 300px;*/
    float:left; /* add this */
    /*border: 1px solid red;*/
}
.second {
    /*border: 1px solid green;*/
    overflow: hidden; /* if you don't want #second to wrap below #first */
}
</style>
<?php  foreach ($products as $product) { ?>
<div id="Layer976" style="text-align:left;width:540px;height:136px;z-index:16825;">
			<table style="width:100%">
				<tr><td rowspan="2" style="width: 10%;text-align: center;">
          <?php if(!empty($selected_products) && in_array($product['id'],$selected_products)){  ?>
                <input type="checkbox" name="chkproduct_id"  id="chkproduct_id<?php echo $product['id'];?>" style="z-index:16799;" value="<?php echo $product['id'];?>" checked>
            <?php } else { ?>
					      <input type="checkbox" name="chkproduct_id"  id="chkproduct_id<?php echo $product['id'];?>" style="z-index:16799;" value="<?php echo $product['id'];?>">
          <?php } ?>
        </td>
					<td>
						<div class="wrapper">
                     		<div id="wb_Image238" class="first" style="width:73px;height:57px;z-index:16800;" ><!-- style="position:absolute;left:62px;top:12px;width:70px;height:54px;z-index:16800;"-->
                        		<img style="width:70px;height:54px;padding:3px;" src="<?php echo asset_url();?><?php echo $product['sub_image1'];?>" id="Image238" alt="">
                     		</div>
                     		<div id="wb_Image240" class="second" style="width:73px;height:57px;z-index:16801;"><!--style="position:absolute;left:139px;top:12px;width:70px;height:54px;z-index:16801;"-->
                        		<img style="width:70px;height:54px;padding:3px;" src="<?php echo asset_url();?><?php echo $product['sub_image2'];?>" id="Image240" alt="">
                     		</div>
                  		</div>
              		</td>
              		<td rowspan="2">
              			<div id="wb_Text560" style="height:15px;text-align:center;z-index:16797;"><!-- style="position:absolute;left:246px;top:44px;width:231px;height:15px;z-index:16797;text-align:left;"-->
                     		<span style="color:#1E90FF;font-family:Arial;font-size:12px;">Product Name: <?php echo $product['name'];?></span>
                  	</div>
                  		<div id="wb_Text561" style="height:15px;z-index:16798;text-align:center;z-index:16798;"><!-- style="position:absolute;left:246px;top:63px;width:231px;height:15px;z-index:16798;text-align:left;"-->
                     		<span style="color:#1E90FF;font-family:Arial;font-size:12px;"><?php echo $product['model_no']?></span>
                  		</div>
              		</td>
				</tr>
				<tr><td><div class="wrapper">
                     <div id="wb_Image273" class="first" style="width:73px;height:57px"><!-- style="position:absolute;left:139px;top:72px;width:70px;height:54px;z-index:16802;" -->
                        <img style="width:70px;height:54px;padding:3px;" src="<?php echo asset_url();?><?php echo $product['sub_image3'];?>" id="Image273" alt="">
                     </div>
                     <div id="wb_Image274" class="second" style="width:73px;height:57px"><!-- style="position:absolute;left:62px;top:72px;width:70px;height:54px;z-index:16803;"-->
                        <img style="width:70px;height:54px;padding:3px;" src="<?php echo asset_url();?><?php echo $product['sub_image4'];?>" id="Image274" alt="">
                     </div>
                 </div></td>
                 </tr>
			</table>
                  <!--<div id="wb_Text560" style="height:15px;text-align:right;z-index:16797;">
                     <span style="color:#1E90FF;font-family:Arial;font-size:12px;">Product Name: <?php echo $product['name'];?></span>
                  </div>
                  <div id="wb_Text561" style="height:15px;z-index:16798;text-align:right;z-index:16798;">
                     <span style="color:#1E90FF;font-family:Arial;font-size:12px;"><?php echo $product['model_no']?></span>
                  </div>
                  <input type="checkbox" id="Checkbox120" name="" value="on" style="z-index:16799;">
                  
                  <div class="wrapper">
                     <div id="wb_Image273" class="first" style="width:73px;height:57px">
                        <img style="width:70px;height:54px;padding:3px;" src="<?php echo asset_url();?><?php echo $product['sub_image3'];?>" id="Image273" alt="">
                     </div>
                     <div id="wb_Image274" class="second" style="width:73px;height:57px">
                        <img style="width:70px;height:54px;padding:3px;" src="<?php echo asset_url();?><?php echo $product['sub_image4'];?>" id="Image274" alt="">
                     </div>
                 </div>-->
</div>
<!--<div class="row" style="margin:0px;">
	<div class="row">
		<div class="col-sm-6" style="text-align: center">
			<span style="color:#1E90FF;font-family:Arial;font-size:16px;"><?php echo $product['name'];?></span>
		</div>
		<div class="col-sm-6" style="text-align: center">
			<span style="color:#1E90FF;font-family:Arial;font-size:16px;"><?php echo $product['model_no'];?></span>
		</div>
	</div>
	<div class="col-sm-12 product-list-row">
		<div class="col-sm-1 product-select">
			<input type="checkbox" name="chkproduct_id"  id="chkproduct_id" value="<?php echo $product['id'];?>">
		</div>
		<div class="col-sm-7">
			<img src="<?php echo asset_url();?><?php echo $product['sub_image1'];?>" class="subproduct-item-image" alt="" />
			<img src="<?php echo asset_url();?><?php echo $product['sub_image2'];?>" class="subproduct-item-image" alt="" />
			<img src="<?php echo asset_url();?><?php echo $product['sub_image3'];?>" class="subproduct-item-image" alt="" />
			<img src="<?php echo asset_url();?><?php echo $product['sub_image4'];?>" class="subproduct-item-image" alt="" />
		</div>
		<div class="col-sm-1">
		</div>
	</div>
</div>-->
<br>
<?php } ?>