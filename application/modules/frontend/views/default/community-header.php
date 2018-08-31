<link rel="stylesheet" href="<?php echo asset_url(); ?>css/pages/responsive.css">
<link rel="" href="<?php echo asset_url(); ?>css/pages/community.css" />
<div id="Layer76" style="height:800px;position:fixed;top:0;width:100%;">
    <div class="container" id="Layer106_Container" style="width:1280px;padding:0px;height:49px;">
        <div class="container-fluid top-div" style="height:49px;">
            <ul class="nav navbar-nav navbar-left top-nav" style="padding-left:120px;">
                <li class="inline"><a href="#" onclick="ShowObjectWithEffect('Layer106', 1, 'fold', 500, 'easeOutBounce');return false;" style="padding-right:0px;padding-top:12px;"><img src="<?php echo asset_url(); ?>images/img0235.png" id="Image25" alt="" class="imgus" style="width:29px;"></a></li>
                <li class="inline"><a href="#" onclick="ShowObjectWithEffect('Layer106', 1, 'fold', 500, 'easeOutBounce');return false;" style="padding-left:5px;padding-top:15px;"><span style="color:#A9A9A9;font-family:Arial;font-size:16px;">TRD</span><span style="color:#D3D3D3;font-family:Impact;font-size:16px;">STATION</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right top-nav" style="padding-right: 80px;">
                <li><a href="#" class="headerMenu1" style="padding-right: 0px;color:#C0C0C0 !important;">GOOD LUCK</a></li>
                
                <?php if(empty($this->session->userdata('tsuserid')) && $this->session->userdata('tsuserid') <= 0) { ?>
                     <li><a data-toggle="modal" style="color:#FFFFFF;font-family:Georgia;font-size:15px;">&nbsp;</a></li>
                <?php }else { ?>
                     <li><a data-toggle="modal" style="color:#FFFFFF;font-family:Georgia;font-size:15px;"><?php echo $tsprefix."  ".$tsusername; ?></a></li>
                <?php  } ?>
                
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-bottom: 10px;padding-top: 10px;">
                        <?php if ($profile_img == '') { ?>
							 <img src="<?php echo asset_url(); ?>images/rseller2.png" id="Image24" alt="" class="img35" style="border-radius:50%;width:30px !important;height:30px !important;">
	                    <?php } else { ?>
	                        <img src="<?php echo asset_url().$profile_img?>" id="Image24" alt="" class="img35" style="border-radius:50%;width:30px !important;height:30px !important;">
	                    <?php } ?>
	                    <img src="<?php echo asset_url(); ?>images/img0034.png" id="Shape8" alt="" style="width:14px;height:7px;">
                    </a>
                    <ul class="dropdown-menu" role="menu" style="font-weight: bold;font-size: 12px;text-align: center;min-width: 100px;">
	                	<?php if($activstatus == 0) { ?>
	                   		 <li class="firstmain"><a href="<?php echo base_url()?>continueregistration" target="_self">Continue</a> </li>
	                   	<?php } else { ?>
	                    	<?php if($tscategory_id == 1) { ?>
	                    		<li class="firstmain"><a href="<?php echo base_url()?>mystation" target="_self">My Station</a> </li>
	                    	<?php } else if($tscategory_id == 2) { ?>
	                    		<li class="firstmain"><a href="<?php echo base_url()?>shipper_mystation" target="_self">My Station</a> </li>
	                    	<?php } else if($tscategory_id == 3) { ?>
	                    		<li class="firstmain"><a href="<?php echo base_url()?>buyer_mystation" target="_self">My Station</a> </li>
	                    	<?php } ?>
	                    <?php } ?>
	                    <li><a href="<?php echo base_url(); ?>logout" target="_self" >Logout</a> </li>
	                </ul>
                </li>
            </ul>
        </div>
            <?php include 'hover-nav.php';?>
       </div>
       