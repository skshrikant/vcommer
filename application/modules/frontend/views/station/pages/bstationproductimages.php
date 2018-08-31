 <div id="postviewimage" style="padding-top: 10%;">
  <div class="row text-center">
     <span style="color:#A9A9A9;font-family:Arial;font-size:16px;"><?php echo $prodata[0]['name'];?></span>
     <span style="color:#A9A9A9;font-family:Arial;font-size:16px;"><?php echo $prodata[0]['model_no'];?></span>
  </div>
  <br><br>
  <div class="row text-center">
      <span style="color:#303030;font-family:Georgia;font-size:19px;"><strong>Select up to 4 Images</strong></span>
  </div>
  <br><br>
  <div class="row" style="margin-left:25px;">
	   <div class="col-md-2 col-sm-2 col-xs-2">
	  	   <input type="checkbox" id="Checkbox1" name="cimgchk[]" value="<?php echo $prodata[0]['main_image'];?>" style="margin: 0px !important;">
	  	  <img src="<?php echo asset_url()?><?php echo $prodata[0]['main_image'];?>" id="Image31" alt="" style="width:70px;height:50px;">
	   </div>
	   <div class="col-md-2 col-sm-2 col-xs-2">
	       <input type="checkbox" id="Checkbox2" name="cimgchk[]" value="<?php echo $prodata[0]['sub_image1'];?>" style="margin: 0px !important;">
	  	  <img src="<?php echo asset_url()?><?php echo $prodata[0]['sub_image1'];?>" id="Image31" alt="" style="width:70px;height:50px;">
	     
	   </div>
	   <div class="col-md-2 col-sm-2 col-xs-2">
	      <input type="checkbox" id="Checkbox3" name="cimgchk[]" value="<?php echo $prodata[0]['sub_image2'];?>" style="margin: 0px !important;">
	  	  <img src="<?php echo asset_url()?><?php echo $prodata[0]['sub_image2'];?>" id="Image31" alt="" style="width:70px;height:50px;">
	      
	   </div>
	   <div class="col-md-2 col-sm-2 col-xs-2">
	      <input type="checkbox" id="Checkbox4" name="cimgchk[]" value="<?php echo $prodata[0]['sub_image3'];?>" style="margin: 0px !important;">
	  	  <img src="<?php echo asset_url()?><?php echo $prodata[0]['sub_image3'];?>" id="Image31" alt="" style="width:70px;height:50px;">
	      
	   </div>
	   <div class="col-md-2 col-sm-2 col-xs-2">
	      <input type="checkbox" id="Checkbox5" name="cimgchk[]" value="<?php echo $prodata[0]['sub_image4'];?>" style="margin: 0px !important;">
	  	  <img src="<?php echo asset_url()?><?php echo $prodata[0]['sub_image4'];?>" id="Image31" alt="" style="width:70px;height:50px;">
	   </div>
      
  </div>
  <br><br>
  <div class="row text-center">
  		<span style="color:#000000;font-family:Arial;font-size:16px;">Also<br></span>
  </div>
  
  <div class="row text-center">
    <span style="color:#696969;font-family:Arial;font-size:11px;">You can select 1 or 2, and add other from your computer.</span>
  </div>
  <br><br>
  <div class="row text-center">
  		 <button type="button" id="Button4" name="" value="Use" onclick="selectProductImage();">Use</button>
  		 <button type="button" id="Button4" name="" value="Cancel" onclick="cancelProductImage();">Cancel</button>
  </div>
  
  </div>
