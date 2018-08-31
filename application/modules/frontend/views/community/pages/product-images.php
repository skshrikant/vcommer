<div id="Layer116" style="position:relative;height:415px;">
<div id="wb_Text3" style="position:absolute;left:118px;top:57px;width:210px;height:16px;z-index:385;text-align:left;">
<span style="color:#303030;font-family:Georgia;font-size:19px;"><strong>Select up to 4 Images</strong></span></div>
<div id="wb_Text4" style="position:absolute;left:79px;top:310px;width:271px;height:16px;text-align:center;z-index:386;">
<span style="color:#000000;font-family:Arial;font-size:16px;">Also<br></span><span style="color:#696969;font-family:Arial;font-size:11px;">You can select 1 or 2, and add other from your computer.</span></div>
<div id="wb_Image6" style="position:absolute;left:88px;top:144px;width:67px;height:58px;z-index:387;">
<img src="<?php echo asset_url(); ?><?php echo $product['main_image'];?>" id="Image6" alt=""></div>
<div id="wb_Image13" style="position:absolute;left:200px;top:144px;width:67px;height:58px;z-index:388;">
<img src="<?php echo asset_url(); ?><?php echo $product['sub_image1'];?>" id="Image13" alt=""></div>
<div id="wb_Image15" style="position:absolute;left:308px;top:144px;width:65px;height:56px;z-index:389;">
<img src="<?php echo asset_url(); ?><?php echo $product['sub_image2'];?>" id="Image15" alt=""></div>
<div id="wb_Image16" style="position:absolute;left:90px;top:213px;width:65px;height:56px;z-index:390;">
<img src="<?php echo asset_url(); ?><?php echo $product['sub_image3'];?>" id="Image16" alt=""></div>
<div id="wb_Image17" style="position:absolute;left:200px;top:213px;width:65px;height:56px;z-index:391;">
<img src="<?php echo asset_url(); ?><?php echo $product['sub_image4'];?>" id="Image17" alt=""></div>
<input type="checkbox" id="Checkbox3" name="cimgchk[]" value="<?php echo $product['main_image'];?>" style="position:absolute;left:61px;top:164px;z-index:392;">
<input type="checkbox" id="Checkbox5" name="cimgchk[]" value="<?php echo $product['sub_image1'];?>" style="position:absolute;left:174px;top:164px;z-index:393;">
<input type="checkbox" id="Checkbox6" name="cimgchk[]" value="<?php echo $product['sub_image2'];?>" style="position:absolute;left:62px;top:233px;z-index:394;">
<input type="checkbox" id="Checkbox7" name="cimgchk[]" value="<?php echo $product['sub_image3'];?>" style="position:absolute;left:283px;top:164px;z-index:395;">
<input type="checkbox" id="Checkbox8" name="cimgchk[]" value="<?php echo $product['sub_image4'];?>" style="position:absolute;left:174px;top:231px;z-index:396;">
<div id="wb_Text7" style="position:absolute;left:20px;top:25px;width:171px;height:16px;text-align:center;z-index:397;">
<span style="color:#A9A9A9;font-family:Arial;font-size:16px;"><?php echo $product['name'];?></span></div>
<div id="wb_Text10" style="position:absolute;left:270px;top:26px;width:171px;height:16px;z-index:398;text-align:left;">
<span style="color:#A9A9A9;font-family:Arial;font-size:16px;">No. <?php echo $product['model_no'];?></span></div>
<input type="button" id="buttonuse" name="" value="Use" style="position:absolute;left:146px;top:377px;width:158px;height:25px;z-index:399;" onclick="selectProductImage();" />
</div>