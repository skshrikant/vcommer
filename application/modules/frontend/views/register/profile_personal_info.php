<?php $this->load->view('default/header_after_login'); ?>
 <?php if($registration_step >= 1) { 
		redirect(base_url());
 } ?>
<?php //echo "kkkk".$registration_step; ?>
<style>
#Button1 {
border: 0px #A9A9A9 solid;
    background-color: #FF6347;
    color: #FFFFFF;
    font-family: Arial;
    font-weight: normal;
    font-size: 13px;
    }
    #messageModal     
  {
        top:100px; 
        position:absolute; 
        padding:30px; 
        -webkit-box-shadow:0 0 10px rgba(0,0,0,0.4);
        -moz-box-shadow:0 0 10px rgba(0,0,0,0.4); 
        box-shadow:0 0 10px rgba(0,0,0,0.4)
  }
</style>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="<?php echo asset_url();?>js/jquery.imgareaselect.js" type="text/javascript"></script>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<link rel="stylesheet" href="<?php echo asset_url();?>css/imgareaselect.css">
<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/imgareaselect-default.css" />  
<script type="text/javascript" src="<?php echo asset_url();?>js/jquery.imgareaselect.js" > </script>
	
<div class="container" style="background-color: #F5F5F5;width:1280px;">
    <div class="row">
        <div class="col-md-2" style="background:#DCDCDC; padding-top:10%; padding-bottom:30%;">
            <div class="form-group">
                <h1 class="text-center"><span style="color:#2D2D2D;font-family:Georgia;font-size:19px;">Account</span></h1>
                <ul style="list-style:none; margin-left:15px; position:relative;">
                    <div style="position:absolute; margin:auto; margin-left:4px; top:0px; height:89% ;width:5px; overflow:hidden; background:#fff; border-radius:50px;">
                        <div style="height:50%; width:5px; background:#F05539" id="account-steps"></div>
                    </div>
                    <li style="position:relative; margin-bottom:10px;"> <span style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>Profile</li>
                    <li ><span id="account-steps1" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#fff; margin-right:10px; position:relative; z-index:11;"></span>Personal Info.</li>
                </ul>
            </div>
            <div class="form-group" id="business" style="display:none;">
                <h1 class="text-center"><span style="color:#2D2D2D;font-family:Georgia;font-size:19px;">Business Info</span></h1>
                <ul style="list-style:none; position:relative; padding-left:30px;">
                    <div style="position:absolute; margin:auto; margin-left:4px; top:7px; height:89% ;width:5px; overflow:hidden; background:#fff; border-radius:50px;">
                        <div style="height:10%; width:5px; background:#F05539" id="business-steps"></div>
                    </div>
                    <li style="position:relative; margin-bottom:10px;"> <span style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>General Info.</li>
                    <li style="position:relative; margin-bottom:10px;"><span id="business-step1" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#fff; margin-right:10px; position:relative; z-index:11;"></span> Factory Details</li>
                    <li style="position:relative;margin-bottom:10px;"><span id="business-step2" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#fff; margin-right:10px; position:relative; z-index:11;"></span> Trade / Export Info.</li>
                    <li style="position:relative;"><span id="business-step3" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#fff; margin-right:10px; position:relative; z-index:11;"></span>Certificates</li>
                </ul>
            </div>
        </div>
        <div class="col-md-10" style="padding-top:5%;">
            <div class="row">
                <div class="col-xs-11 col-sm-10 col-sm-offset-1">
                    <div class="col-xs-3 col-md-2"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Account</span></div>
                    <div class="col-xs-3 col-md-2 text-center"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Profile</span></div>
                    <div class="col-xs-3 col-md-3 text-center"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Business Information</span></div>
                    <div class="col-xs-3 col-md-5 text-right"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Complete</span></div>
                </div>
                <div class="col-xs-11 col-sm-10 col-sm-offset-1">
                    <div class="col-xs-12 " style="margin-top:20px;">
                        <div class="row" style="position:relative; margin:0px;">
                            <div class="col-xs-12" style="position:relative;">
                               <div class="horizontal-step" style="position:absolute; margin:auto; left:0px; right:0px; top:7px; height:8px;width:95%; overflow:hidden; background:#fff; border-radius:50px;">
                                    <div style="height:8px; width:23%; background:#F05539" id="main-steps"></div>
                                 </div> 
                                <span style="color:#F05539;font-family:Arial;font-size:19px;position:absolute; right:-35px;" id="count">10 %</span> </div>
                            <div class="col-xs-3 col-md-2"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-2 text-center"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-3 text-center"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#FFFFFF; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-5 text-right"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#FFFFFF; margin-right:0px; position:relative; z-index:11;"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="display:block" id="step1">
                <form method="post" action="<?php echo base_url(); ?>account/save_personal_info" onsubmit="return ValidateForm1();" name="myprofile" enctype="multipart/form-data">
                    <div class="col-xs-11  col-sm-offset-1" style="margin-top:50px;">
                        <div class="row">
                            <div class="col-md-6">
                                <table style="width:100%">
                                    <tr>
                                        <td class="col-xs-5"><div class="form-group"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Account Type </span></div></td>
                                        <td class="col-xs-7"><div class="form-group"><img src="<?php echo asset_url(); ?>images/ts/buyer.png" style="width:30px"><span style="color:#2D2D2D;font-family:Arial;font-size:13px;"><?php echo $tscategory?></span></div></td>
                                    </tr>
                                    <tr>
                                        <td class="col-xs-5"><div class="form-group"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Business Type </span> </div></td>
                                        <td class="col-xs-7"><div class="form-group">
                                                <select size="1" id="Combobox2" name="seller_buisness_type" class="Combobox2">
                                                	<?php  foreach ($subcategories as $subtype) {
                                                		if($subtype['category_id'] == $tscategory_id) { ?>
                                                        	<option value=<?php echo $subtype['id']; ?> <?php if($subtype['id'] == $ts_subcat_id) { ?> selected<?php } ?>><?php echo $subtype['sub_category']?></option>
                                                        <?php }
                                                    	}?>
                                                </select>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td class="col-xs-5"><div class="form-group"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Station ID </span> </div></td>
                                        <td class="col-xs-7"><div class="form-group"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><?php echo $tsemail; ?></span> </div></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-6">
                                <table style="width:100%">
                                    <tr>
                                        <td class="col-xs-5">
                                            <input  name="profileImg" type='button' class="upladImg" id="imgInp" style="border: none;" />
                                             <img class="img-circle" id="blah" height="128" data-src="default.jpg" data-holder-rendered="true" style="width: 140px; height: 140px;display:none;" src=""/>
                                             <input type="hidden"  name="profilepath" id="profilepath"  value="" />

                                        </td>
                                        <td class="col-xs-7"><div class="form-group"> <span style="color:#3C3C3C;font-family:Georgia;font-size:11px;">Add your profile image</span> </div>
                                            <div class="form-group"> <span style="color:#666666;font-family:Arial;font-size:9.3px;">jpg or png, Dimensions: 200 * 200 pixel, Resolution: 75, with Min Size 40KB To Max. size 100KB </span> </div>
                                            <div class="form-group"> <span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor: pointer" onclick="remove()">Remove</span> </div></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row" style="margin-top:50px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Name</span></label>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-xs-3 " style="padding-right:0px;">
                                                <select name="prefix" size="1" id="Combobox2" class="Combobox2" style="height:35px">
                                                    <option value="Mr" <?php if('Mr' == $tsprefix) { ?>selected<?php }?>>Mr.</option>
                                                    <option value="Miss" <?php if('Miss' == $tsprefix) { ?>selected<?php }?>>Miss.</option>
                                                    <option value="Mrs" <?php if('Mrs' == $tsprefix) { ?>selected<?php }?>>Mrs.</option>
                                                    <option value="Ms" <?php if('Ms' == $tsprefix) { ?>selected<?php }?>>Ms.</option>
                                                </select>
                                            </div>
                                            <div class="col-xs-9" style="padding-left:5px;">
                                                <input type="text" class="Combobox2" name="name" value="<?php echo $tsusername; ?>" style="height:35px">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-3 " style="padding-right:0px;">

                                            </div>
                                            <div class="col-xs-9" style="padding-left:8px;padding-top:10px;display: none;" id="nameErr">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Alternative Email</span></label>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-xs-10 col-sm-11 col-md-10 name-div" style="padding-left:5px;">
                                                <input type="text" class="Combobox2"  id="alternateEmail" name="alternate_email" placeholder="email id" style="height:35px" onkeyup="validateEmail(this.value,'<?php echo $tsemail;?>');">
                                            </div>
                                            <div class="col-xs-2 col-sm-1 col-md-2">
                                                <img id="emailCorrectImg" src="<?php echo asset_url(); ?>images/ts/tick-octagon-frame.png" style="margin-top:10px;display: none;">
                                                <img id="emailCrossImg" src="<?php echo asset_url(); ?>images/Error.png" style="height:20px;display: none;">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-10 col-sm-11 col-md-10 name-div" style="padding-left:8px;padding-top:10px;" id="nameErr">
                                                <span style="margin-top:5px;" id="alternateEmailErr"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-sm-6 contact-add" style="padding-right:0px;">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Contact Address</span></label>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-xs-6" style="padding-left:10px; padding-right:0px;">
                                                <input type="text" class="Combobox2" placeholder="Country" id="country" name="country" style="height:35px">
                                            </div>
                                            <div class="col-xs-6" style="padding-left:5px; padding-right:0px;">
                                                <input type="text" class="Combobox2" id="province" name="province" placeholder="Province" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 city-div" style="padding-left:5px;">
                                <label class="col-md-5 hidden-md hidden-xs hidden-lg" style="padding-top:5px; font-weight:normal;">&nbsp;</label>
                                <div class="form-group">
                                    <div class="col-xs-6 col-sm-4" style="padding-left:0px; padding-right:0px;">
                                        <input type="text" class="Combobox2" id="city" name="city" placeholder="City" style="height:35px">
                                    </div>
                                    <div class="col-xs-6 col-sm-7" style="padding-left:5px;">
                                        <input type="text" class="Combobox2" id="street" name="street" placeholder="Street, Building No." style="height:35px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;display: none;" id="contact">
                            <div class="col-sm-6 contact-add" style="padding-right:0px;">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;">

                                    </label>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-xs-6" style="padding-left:10px; padding-right:0px;display: none;" id="countryErr">

                                            </div>
                                            <div class="col-xs-6" style="padding-left:10px; padding-right:0px;display: none;" id="provinceErr">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 city-div" style="padding-left:5px;">
                                <label class="col-md-5 hidden-md hidden-xs hidden-lg" style="padding-top:5px; font-weight:normal;">&nbsp;</label>
                                <div class="form-group">
                                    <div class="col-xs-6 col-sm-4" style="padding-left:10px; padding-right:0px;display: none;" id="cityErr">

                                    </div>
                                    <div class="col-xs-6 col-sm-7" style="padding-left:10px;display: none;" id="streetErr" >;

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;">
                                        <span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Mobile</span></label>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-xs-3" style="padding-right:0px;">
                                                <input type="text" class="Combobox2" id="mobileCode" name="mobile_code" placeholder="code" style="height:35px">
                                            </div>
                                            <div class="col-xs-9" style="padding-left:5px;">
                                                <input type="text" class="Combobox2" id="mobileNumber" name="mobile_number" placeholder="" maxlength="12" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;">
                                        <span style="color:#F70004">*</span>
                                        <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Time Zone</span></label>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-10 time-div" style="padding-left:5px;">
                                                <input type="text" class="Combobox2" placeholder ="TimeZone"  id="timezone" name="timezone" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;display: none;" id="mobile">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;"></label>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-xs-12" style="padding-right:0px;color:red;" id="mobileCodeErr">

                                            </div>
                                            <div class="col-xs-12" style="padding-left:5px;color:red;" id="mobileNumberErr">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;">
                                    </label>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-10 time-div" style="padding-left:5px;" id="timeZoneErr">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span>
                                        <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Position / Title</span></label>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <input type="text" id="position" name="position" class="Combobox2" placeholder="" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php if($tscategory_id == 1 || $tscategory_id == 2) {?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;">
                                        <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Ref.</span></label>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-md-10 time-div" style="padding-left:5px;">
                                                <input type="text" class="Combobox2" placeholder ="Reference"  id="reference" name="reference" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           <?php } ?> 
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;">

                                    </label>
                                    <div class="col-md-7">
                                        <div class="row">
                                            <div class="col-xs-12" id="positionErr">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-sm-12">
                                <div class="form-group text-center"> 
                                    <!--<input type="submit" style="background-image: url(<?php echo asset_url(); ?>images/ts/img1190.gif">--> 
                                    <button type="submit" class="btn" style="padding:0px;">
                                        <img src="<?php echo asset_url(); ?>images/ts/img1190.gif" >
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
       	</div>
    </div>
</div>

<div id="profile_pic_modal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Add Profile Picture</h3>
			</div>
			<div class="modal-body" style="overflow:scroll;">
				<form id="cropimage" method="post" enctype="multipart/form-data" action="">
						<span><b>Upload Image:</b> 
						<input type="file" name="profile-pic" id="profile-pic"  accept=".png,.jpg,.jpeg.gif"  class="form-control" style="width:200px;display:inline-block;"/></span> <br><br>
						
						<input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
						<input type="hidden" name="x1" id="x1" value="" />
				        <input type="hidden" name="y1" id="y1" value="" />
				        <input type="hidden" name="x2" id="x2" value="" /> 
				        <input type="hidden" name="y2" id="y2" value="" />
				        <input type="hidden" name="width" id="width" value="200" />
				        <input type="hidden" name="height" id="height" value="200" />
				      	<!--  <input type="hidden" name="fullpath" id="fullpath" value="<?php //echo asset_url();?>" /> -->
						<input type="hidden" name="image_name" value="" id="image_name" />
						<div id="parent" style="position:relative;">
							<span id="thumbnail" style="display: inline-block;position:relative;">
								<img id="photo" src="#" alt="" title="Nature" style="display:none;" />
							</span>
						</div>
						<div id="thumbs" style="padding:5px; width:600px;position:relative;"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="save_crop" class="btn btn-primary">Crop & Save</button>
			</div>
		</div>
	</div>
</div>


<div id="messageModal" class="modal fade">
	<div class="modal-dialog"  style="text-align:left;width:483px;height:58px;">
		<div class="modal-content" style="width: 589px;">
				<div class="modal-header text-center" style="background-color: #FF6347;height:58px;">
<!--					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-top:-27px;margin-right:-30px;z-index:5011;filter:alpha(opacity=100);opacity: 1;">
<!--						<img src="<?php //echo asset_url();?>images/closeround.png" id="Image66" alt="close" style="width:36px;">
<!-- 					</button> -->
					<span style="color:#FFFFFF;font-family:Georgia;font-size:17px;" id="contactmodal_title"><strong>Before You Start</strong></span>
				</div>
			<div class="modal-body" style="background-color:#FFF;">
				<table style="width: 100%; border: 0px;" cellpadding="1" cellspacing="0">
					<tr>
						<td colspan="2" style="padding-left: 15px;">
							<div id="contactdiv" class="text-center">
									<span style="color:#696969;font-family:'Calibri Light';font-size:15px;">
									To ensure that your company information will be listed correctly in the search result and to rank high your Desksite/Website, 
									we highly recommend you to fill in the registration fields in English language as a primary step, as long as you can add more languages 
									later on “ after you build your Desksite” .<br><br>To add more language, first finish building your Desksite in English then, 
									simply login to your “ My Station”, click on language icon, then add the additional language you prefer”..<br></span>
									<br><br>
								<input type="button" id="Button1" name=""    value="Ok" style="left:245px;top:252px;width:96px;height:25px;">
							</div>
					     </td>
					  </tr>
				</table> 
			</div>
		</div>
	</div>
</div>

<script>
function validateprofileimagefile(id,input,min_size,max_size='100')
{
	var flag = true;
	if (input.files && input.files[0]) {
       		var ext = input.files[0].name.split('.').pop();
       		var file_size = parseInt(input.files[0].size);
       		var filesizeinkb = (file_size/1024);
       		//var sizeinkb = (size/1024);
       		//var filesizeinmb = (file_size/1048576).toFixed(2);
       		//var sizeinmb = (size/1048576).toFixed(2);
       		if(ext == 'png'  || ext =='jpg' || ext =='jpeg' || ext =='gif') {
	                if(parseInt(filesizeinkb) > parseInt(max_size)) {
	                	alert("File size should be max 100KB.");
	                    $('#'+id).val('');
	                    flag = false;
	                } 
                } else {
                	alert("File should be png,jpg,jpeg, or gif  formate.");
                    $('#'+id).val('');
                    flag = false;
                }
   		}
		return flag;
		
}

$(document).ready(function()  {
	jQuery('#messageModal').modal({show:true,backdrop: 'static',keyboard: false});
	
});
$('#Button1').on('click',function(e) {
	jQuery('#messageModal').modal('hide');
});
jQuery('#imgInp').on('click', function(e){
	jQuery('#profile_pic_modal').modal({show:true,backdrop: 'static',keyboard: false});
	$('#photo').css('display', 'none');
	jQuery("#profile-pic").val('');
	jQuery('.imgareaselect-outer').css('display','none');
	});


jQuery('#profile-pic').on('change', function() {
	var flag = validateprofileimagefile('profile-pic',this,40,100);
	if(flag == true) 
	{
         var reader = new FileReader();
         reader.onload = function (e) {
          	$('#photo').show();
          
    	 }
         reader.readAsDataURL(this.files[0]);
         savetemparary();

         var ias = jQuery('#photo').imgAreaSelect( {
             aspectRatio: '1:1',
             maxWidth: 300, 
             maxHeight: 300,
             minWidth: 100, 
             minHeight: 100,
             x1: 50,
             y1: 50, 
             x2: 300,
             y2: 300,
             onSelectEnd: function ( image, selected) {
                 jQuery('input[name=x1]').val(selected.x1);
                 jQuery('input[name=y1]').val(selected.y1);
                 jQuery('input[name=x2]').val(selected.x2);
                 jQuery('input[name=y2]').val(selected.y2);
                 jQuery('input[name=width]').val(selected.width);
                 jQuery('input[name=height]').val(selected.height);
             },
             handles: true,
             parent: '#parent'
         });
         ias.load(function(){
          	var height = ( this.width / 4 ) * 4;
          	if( height <= this.height ){     
            	var diff = ( this.height - height ) / 2;
               	var coords = { x1 : 0, y1 : diff, x2 : this.width, y2 : height + diff };
               	jQuery('input[name=x1]').val(0);
                jQuery('input[name=y1]').val(diff);
                jQuery('input[name=x2]').val(this.width);
                jQuery('input[name=y2]').val(height + diff);
                jQuery('input[name=width]').val(this.width);
                jQuery('input[name=height]').val(height);
         	} else {
           		var width = ( this.height / 4 ) * 4; 
                var diff = ( this.width - width ) / 2;
                var coords = { x1 : diff, y1 : 0, x2 : width + diff, y2: this.height };
                jQuery('input[name=x1]').val(diff);
                jQuery('input[name=y1]').val(0);
                jQuery('input[name=x2]').val(width + diff);
                jQuery('input[name=y2]').val(this.height);
                jQuery('input[name=width]').val(width);
                jQuery('input[name=height]').val(this.height);
         	}   
         	$( this ).imgAreaSelect( coords );
 		});
	}
    
});

jQuery('#save_crop').on('click', function(e){
	if(jQuery('#x1').val() != "")
	{
			//e.preventDefault();
			params = {
					targetUrl: '<?php echo base_url();?>account/changeprofilepic',
					action: 'save',
					x_axis: jQuery('#x1').val(),
					y_axis : jQuery('#y1').val(),
					x2_axis: jQuery('#x2').val(),
					y2_axis : jQuery('#y2').val(),
					thumb_width : jQuery('#width').val(),
					thumb_height:jQuery('#height').val()
			};
			$('#photo').imgAreaSelect( {remove: true} );
			saveCropImage(params);
	} else {
		alert('Please select Image for crop');
	}
});

function saveCropImage(params) {
	jQuery.ajax({
			url: params['targetUrl'],
			cache: false,
			dataType: "json",
			data: {
			//action: params['action'],
				id: jQuery('#hdn-profile-id').val(),
				t: 'ajax',
				w1:params['thumb_width'],
				x1:params['x_axis'],
				h1:params['thumb_height'],
				y1:params['y_axis'],
				x2:params['x2_axis'],
				y2:params['y2_axis'],
				image_name :jQuery('#image_name').val()
			},
			type: 'Post',
			success: function (response) {
				jQuery('#profile_pic_modal').modal('hide');
				jQuery('.imgareaselect-outer').css('display','none');
				jQuery(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-border2,.imgareaselect-outer").css('display', 'none');
				jQuery("#blah").attr('src', response['fullpath']);
				$('#profilepath').val(response['path']);
				//jQuery("#preview-profile-pic").html('');
				$('#blah').css('display', 'block');
				$('#imgInp').css('display', 'none');
				jQuery("#profile-pic").val('');
			},
		
	},'json');
}

function savetemparary() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showChangePasswordRequest, // pre-submit callback 
 			success :  showChangePasswordResponse,
 			url : '<?php echo base_url()?>account/saveprofilepictempararyimage',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#cropimage').ajaxSubmit(options);
}
function showChangePasswordRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showChangePasswordResponse(resp, statusText, xhr, $form){
if(resp.status == 0) {
	$("#response").addClass('alert-danger');
	$("#response").html(resp.msg);
	$("#response").show();
	//alert(resp.msg);
	//getChangepassword();
	} else {
	$('#photo').attr('src', resp.msg);
	$("#response").addClass('alert-success');
	$("#response").html(resp.msg);
	$("#response").show();
	//alert(resp.msg);
	$('#photo').attr('src', resp.msg);
	$('#image_name').val(resp.msg);
	
	//getMyAccount();
	//window.location.reload();
	}
ajaxindicatorstop();
}
$('#profile_pic_modal').on('hidden.bs.modal' , function() {
	$('#photo').imgAreaSelect( {remove: true} );
});

</script>