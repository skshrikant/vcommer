<style>
.headimg{
	background:url(<?php echo asset_url();?>images/sellerheader0.jpg) no-repeat center center; background-size:100% 100%; height:235px;
}
.relative{
	 position: relative;
}
.c20{
	 color:#1E90FF;font-family:Arial;font-size:16px;
}
.c21{
	  color:#00BFFF;font-family:'Arial Black';font-size:11px;
}
.s1{
	color:#3C3C3C;font-family:Arial;font-size:11px;
}
.s2{
	color:#1E90FF;font-family:Arial;font-size:12px;
}
.s3{
	color:#3C3C3C;font-family:Arial;font-size:13px;
}
.s4{
	color:#3C3C3C;font-family:Arial;font-size:11px;
}
.s5{
	     top: 10%; text-align:left;  left: 34%;
	
			    width: 36%;   
}
.c2{
	position:absolute;left:67px;top:28px;width:59px;height:15px;z-index:36;text-align:left;
}
.c1{
	color:#FFFFFF;font-family:Arial;font-size:12px;
}
.b1{
	color:#1E90FF;font-family:Georgia;font-size:12px;
}
.d1{
	z-index: 0; height:900px; top: 0px; left: 0px; width: 1440px;
}
.d2{
	display: block; z-index: 1;  height:900px;top: 0px; left: 0px; width: 1440px;
}
.leftnav{
	position:fixed;text-align:left;left:0;top:25%;bottom:0;width:101px;z-index:3867; height: 320px
}
.bottomnav{
	position: fixed; text-align: center; left: 0px; top: auto; width: 99%; height: 109px; z-index: 3858; bottom: 0px;
}
.b2{
	color:#1E90FF;font-family:Georgia;font-size:12px;
}
.s15{
	 color:#2D2D2D;font-family:Arial;font-size:12px;
}
.s6{
	color:#696969;font-family:Arial;font-size:12px;
}
.s7{
	color:#1E1E1E;font-family:Georgia;font-size:13px;
}
.s8{
	background-color:#3C3C3C;color:#FFFFFF;font-family:Arial;font-size:13px;text-align:center
}
.s9{
	 top: 10%;    left: 40%;   width: 27%;
}
.s10{
	position:absolute;left:75px;top:94%;width:35px;height:13px;z-index:999
}
.s11{
	position:absolute;right:75px;top:94%;width:35px;height:13px;z-index:999
}
a{
	cursor:pointer;
}
.s12{
	color:#787878;font-family:Arial;font-size:13px;
}
.s13{
	 color:#4B4B4B;font-family:Arial;font-size:16px;
}
.s14{
	 color:#787878;font-family:Arial;font-size:11px;
}


.c22{
	 position:absolute;right:18px;top:96%;width:35px;height:13px;z-index:999;
}
.c19{
	top: 10%;text-align:left;  left: 34%;
    width: 36%;   top: 10%;  
}
.c17{
position:absolute; left: 250px;
    top: 519px;
width:74px;height:15px;z-index:3560;text-align:left;
}
.c18{
	position:absolute;left:22px;top:96%;width:35px;height:13px;z-index:999;
}
.c12{
	position: absolute;right:0%;top:10% ;width:450px;
}
.c13{
	position:absolute;left:9px;top:12px;width:28px;height:28px;z-index:70;
}
.c16{
	color:#A9A9A9;font-family:Arial;font-size:13px;
}
.c15{
	color:#3C3C3C;font-family:Arial;font-size:24px;
}
.c14{
	color:#3C3C3C;font-family:Arial;font-size:12px;
}
.c11{
	background-color:#FFFFFF;color:#3C3C3C;font-family:Arial;font-size:12px;
}
.c10{
background-color:#FFFFFF;color:#3C3C3C;font-family:Georgia;font-size:20px;
}
.c9{
	position: absolute;left:10%;top:10% ;width:450px;
}
.c8{
	position: relative; min-height: 235px;
}
.c6{
	color:#FFFFFF;font-family:Impact;font-size:48px;letter-spacing:0.07px;margin-top:-15px;
}
.c7{
	color:#E8AD8F;font-family:Arial;font-size:12px;margin-top:-7px
}
.c5{
	color:#FFFFFF;font-family:Arial;font-size:27px;margin-top:35px;
}
.c4{
	color:#E8AD8F;font-family:Georgia;font-size:12px;
}
.c3{
	padding-top:1px;padding-right:1px;
}
.dropdown-custom a {
	text-decoration:none;
}
.trd-nav a:hover {
	padding:0px;
	margin:0px;
}
</style>
<div class="container-fluid top-div" style="width: 1280px;height: 47px;">
        <div class="navbar-header" style="margin-left:125px;"> 
        	<a href="#" onclick="document.getElementById('Layer106').style.display='block';" class="navbar-brand" style="padding-top:12px;">
        		<img src="<?php echo asset_url();?>images/img0235.png" style="width:29px;height:17px;margin-top: -2px;display: inline-block;" alt="" class="imgus">
        		<span style="color:#A9A9A9;font-family:Arial;font-size:16px;vertical-align:middle;">TRD</span><span style="color:#D3D3D3;font-family:Impact;font-size:16px;vertical-align:middle;">STATION</span>
        	</a> 
        </div>
        <ul class="nav navbar-nav pull-right top-nav login-user-nav" style="margin-right:70px;">
            <li style="padding-top:15px;">
                <span style="color:#FFFFFF;font-family:Georgia;font-size:13px;">
                    <span style="color:#C0C0C0;font-family:Georgia;font-size:15px;">Good Luck |</span> <?php echo $tsprefix."  ".$tsusername; ?> 
              	</span>
           	</li>
            <li class="dropdown dropdown-custom">
            	<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-top:10px;padding-bottom:7px;">
                    <?php if (empty($profile_img)) { ?>
                        <img src="<?php echo asset_url(); ?>images/img0982.png" class="img-circle" style="width:30px; height:30px; margin-right:5px;">
                    <?php } else { ?>
                        <img src="<?php echo asset_url().$profile_img; ?>" class="img-circle" style="width:30px; height:30px; margin-right:5px;">
                    <?php } ?>
                    <img src="<?php echo asset_url(); ?>images/img0034.png" id="Shape8" alt="" style="width:14px;height:7px;">
               	</a>
                <ul class="dropdown-menu" role="menu" style="font-weight: bold; left: -25px;font-size: 12px;text-align: center;min-width: 100px;">
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
    <div class="container" style="width: 1280px;padding-left:0px;margin:auto auto;">
    <?php include 'hover-nav.php';?>
    </div>
<script>
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt="Loading..."><div>'+text+'</div></div><div class="bg"></div></div>');
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
</script>