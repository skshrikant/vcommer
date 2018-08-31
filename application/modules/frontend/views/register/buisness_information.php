<?php $this->load->view('default/header_after_login'); ?>
<?php if($registration_step >= 2) { 
		redirect(base_url());
} ?>
<style>
 input#change-logo-pic {
                display: inline-block;
                border: none;
                width: 157%;
                padding: 120px 0 0 0;
                height: 100px;
                overflow: hidden;
                /*-webkit-box-sizing: border-box;*/
                /*-moz-box-sizing: border-box;*/    
                box-sizing: border-box;
                background: url('<?php echo asset_url(); ?>images/ts/img1179.png') center center no-repeat ;
                /*border-radius: 20px;*/
                /*background-size: 150px 100px;*/
            }
#custom {
 	margin-top:0px !important;
 	margin-bottom:0px !important;
}

.modal-backdrop.fade {
opacity: 0;
filter: alpha(opacity=0);
}
.modal-backdrop.in {
opacity: 0.5;
filter: alpha(opacity=50);
}
.country-dropdn {
	width:145px;
	background-color:#fff;
	border-color:1px solid #ccc;
	border-radius:0px;
	height:27px;
	background-image: url(../assets/images/menu_arrow.png);
	background-repeat: no-repeat;
	background-position: right center;
	padding-left:15px;
}
.shiipingport {
	width: 379px;
    height: 28px;
    line-height: 28px;
    border: 1px #DCDCDC solid;
    background-color: #FFFFFF;
    color: #000000;
    font-family: Arial;
    font-weight: normal;
    font-size: 13px;
    padding: 4px 0px 0px 15px;
    text-align: left;
    vertical-align: middle;
}
a.style5
{
   font-family:Georgia;font-size:11px;
   color: #1E90FF;
   text-decoration: none;
}
a.style5:visited
{
   color: #1E90FF;
   text-decoration: none;
}
a.style5:active
{
   color: #1E90FF;
   text-decoration: none;
}
a.style5:hover
{
   color: #FF6347;
   text-decoration: underline;
}
</style>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<script src="<?php echo asset_url();?>js/jquery.imgareaselect.js" type="text/javascript"></script>
	<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
	<link rel="stylesheet" href="<?php echo asset_url();?>css/imgareaselect.css">
	<link rel="stylesheet" type="text/css" href="<?php echo asset_url();?>css/imgareaselect-default.css" />  
	<script type="text/javascript" src="<?php echo asset_url();?>js/jquery.imgareaselect.js" > </script>

<div class="container" style="background:#f1f1f1;">
    <div class="row">
        <div class="col-md-2" style="background:#DCDCDC; padding-top:10%; padding-bottom:110%;">
            <div class="form-group" style="margin-left: 10px;">
                <h1 class="text-center"><span style="color:#2D2D2D;font-family:Georgia;font-size:19px;">Account</span></h1>
                <ul style="list-style:none; margin-left:15px; position:relative;">
                    <div style="position:absolute; margin:auto; margin-left:4px; top:0px; height:89% ;width:5px; overflow:hidden; background:#F05539;; border-radius:50px;">
                        <div style="height:10%; width:5px; background:#F05539" id="account-steps"></div>
                    </div>
                    <li style="position:relative; margin-bottom:10px;"> <span style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>Profile</li>
                    <li ><span id="account-steps1" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>Personal Info.</li>
                </ul>
            </div>
            <div class="form-group" id="business">
                <h1 class="text-center"><span style="color:#2D2D2D;font-family:Georgia;font-size:19px;">Buisness Info</span></h1>
                <ul style="list-style:none; position:relative; padding-left:30px;">
                    <div style="position:absolute; margin:auto; margin-left:4px; top:7px; height:85% ;width:5px; overflow:hidden; background:#fff; border-radius:50px;">
                        <div style="height:7%; width:5px; background:#F05539" id="business-steps"></div>
                    </div>
                    <li style="position:relative; margin-bottom:10px;"> <span style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>General Info.</li>
                    <?php if($tscategory_id == 1) { ?> 
                    	<li style="position:relative; margin-bottom:10px;"><span id="business-step1" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#fff; margin-right:10px; position:relative; z-index:11;"></span> Factory Details</li>
                    	<li style="position:relative;margin-bottom:10px;"><span id="business-step2" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#fff; margin-right:10px; position:relative; z-index:11;"></span> Trade / Export Info.</li>
                    <?php } ?>
                     <?php if($tscategory_id == 1 ||  $tscategory_id == 2) { ?> 
                    	<li style="position:relative;"><span id="business-step3" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#fff; margin-right:10px; position:relative; z-index:11;"></span>Certificates</li>
                    <?php } ?>	
                    
                </ul>
            </div>
        </div>
        <div class="col-md-10" style="padding-top:5%;">
        <?php if($tscategory_id != 3) { ?> 
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="col-xs-3 col-md-1"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Account</span></div>
                    <div class="col-xs-3 col-md-2 text-center"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Profile</span></div>
                    <div class="col-xs-3 col-md-3 text-center"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Buisness Information</span></div>
                    <div class="col-xs-3 col-md-6 text-right"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Complete</span></div>
                </div>
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="col-xs-12 " style="margin-top:20px;">
                        <div class="row" style="position:relative; margin:0px;">
                            <div class="col-xs-12" style="position:relative;">
                                <div class="horizontal-step" style="position:absolute; margin:auto; left:0px; right:0px; top:7px; height:8px;width:95%; overflow:hidden; background:#fff; border-radius:50px;">
                                    <div style="height:8px; width:35%; background:#F05539" id="main-steps"></div>
                                </div>
                                <span style="color:#F05539;font-family:Arial;font-size:19px;position:absolute; right:-35px;" id="count">35 %</span> </div>
                            <div class="col-xs-3 col-md-1"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-2 text-center"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-3 text-center"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-6 text-right"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#FFFFFF; margin-right:0px; position:relative; z-index:11;"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            <form method="post" id="buisnessInfor" action="<?php echo base_url(); ?>account/save_buisness_info" name="buisnessInfor" onsubmit="return validateBuinsessInfo(<?php echo $tscategory_id;?>);" enctype="multipart/form-data">
                <div class="row" id="step2">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1" style="margin-top:50px;">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="col-xs-3">
                                    <!--<img src="<?php echo asset_url(); ?>images/ts/img1179.png">-->
                                    <input  name="buisnessImage" type='button' id="change-logo-pic" />
                                    <img class="img-circle" id="businesslogo_picture" height="128" data-src="default.jpg" data-holder-rendered="true" style="width: 140px; height: 140px;display:none;" src=""/>
                                    <input type="hidden"  name="logopath" id="logopath"  value="" />
                                </div>
                                <div class="col-xs-offset-1 col-xs-8">
                                    <div class="form-group" style="margin-bottom:5px;">
                                        <div class="row">
                                            <div class="col-xs-4 text-left" style="padding-top:15px;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Account Type </span></div>
                                            <div class="col-xs-8"><img src="<?php echo asset_url(); ?>images/ts/buyer.png" style="width:35px"><span style="color:#2D2D2D;font-family:Arial;font-size:13px; position:relative; top:5px;"><?php  echo $tscategory;?></span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-4 text-left"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Buisness Type </span></div>
                                            <div class="col-xs-8"><span style="color:#2D2D2D;font-family:Arial;font-size:13px;"><?php echo $tssubcategory; ?></span></div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 text-left">
                                                <p style="margin-bottom:5px;"><span style="color:#3C3C3C;font-family:Georgia;font-size:11px;"><span style="color:#F70004">*</span> Add your company Logo / Trade Mark</span></p>
                                                <p><span style="color:#666666;font-family:Arial;font-size:9.3px;">jpg or png, Dimensions: 200 * 200 pixel, Resolution: 75 dpi, with Max. size 100 KB </span><br>
                                                <span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor: pointer;" onclick="removeBuisnessURL();">Remove</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:50px;">
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <h1 class="col-md-12"><span style="color:#F05539;font-family:Georgia;font-size:13px;">Basic Information</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Company Name</span></label>
                                    <div class="col-md-8" style="padding-right:2px;">
                                        <div class="row">
                                            <div class="col-xs-12" >
                                                <input type="text" name="company_name" id="company_name" class="Combobox2" placeholder="In English" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 compant-titel " style="padding-left:2px">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="text" class="Combobox2"  name="buisness_license_name" id="buisness_license_name" placeholder="In the language shown in license" style="height:35px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Address In English</span></label>
                                    <div class="col-md-8" style="padding-right:2px;">
                                        <div class="row">
                                            <div class="col-xs-4" style="padding-right:2px;" >
                                                <input type="text" id="buisness_country" name="buisness_country" class="Combobox2" placeholder="Country" style="height:35px">
                                            </div>
                                            <div class="col-xs-4" style="padding-left:2px; padding-right:2px;">
                                                <input type="text" id="buisness_province" name="buisness_province" class="Combobox2" placeholder="Province" style="height:35px">
                                            </div>
                                            <div class="col-xs-4" style="padding-left:2px;" >
                                                <input type="text" class="Combobox2" id="buisness_city" name="buisness_city" placeholder="City" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 compant-titel" style="padding-left:2px">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="text" class="Combobox2" id="buisness_street" name="buisness_street" placeholder="Street, Building No." style="height:35px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Address In License Language</span></label>
                                    <div class="col-md-8" style="padding-right:2px;">
                                        <div class="row">
                                            <div class="col-xs-4" style="padding-right:2px;" >
                                                <input type="text" id="buisness_country_other_lng" name="buisness_country_other_lng" class="Combobox2" placeholder="Country" style="height:35px">
                                            </div>
                                            <div class="col-xs-4" style="padding-left:2px; padding-right:2px;">
                                                <input type="text" id="buisness_province_other_lng" name="buisness_province_other_lng" class="Combobox2" placeholder="Province" style="height:35px">
                                            </div>
                                            <div class="col-xs-4" style="padding-left:2px;" >
                                                <input type="text" id="buisness_city_other_lng" name="buisness_city_other_lng" class="Combobox2" placeholder="City" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 compant-titel" style="padding-left:2px">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="text" id="buisness_street_other_lng" name="buisness_street_other_lng" class="Combobox2" placeholder="Street, Building No." style="height:35px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Tel</span></label>
                                    <div class="col-md-8" style="padding-right:2px;">
                                        <div class="row">
                                            <div class="col-xs-6 col-md-3" style="padding-right:2px;" >
                                                <input type="text" id="telCode" name="telCode" class="Combobox2" placeholder="Code" style="height:35px">
                                            </div>
                                            <div class="col-xs-6 col-md-4" style="padding-left:2px;">
                                                <input type="text" id="cityCode" name="cityCode" class="Combobox2" placeholder="City Code" style="height:35px">
                                            </div>
                                            <div class="col-xs-12 col-md-5 tel-box" style="padding-left:2px;" >
                                                <input type="text" id="telephoneNumber1" name="telephoneNumber1" maxlength="12" class="Combobox2" placeholder="Tel #" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 fax-box" style="padding-left:2px">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-2 col-xs-12" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">And</span></label>
                                        <div class="col-xs-12 col-md-4" style="padding-left:0px;">
                                            <input type="text" id="telephoneNumber2" name="telephoneNumber2"  maxlength="12" class="Combobox2" placeholder="Tel #" style="height:35px">
                                        </div>
                                        <label class="col-md-2 col-xs-12" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Fax</span></label>
                                        <div class="col-xs-12 col-md-4" style="padding-left:0px;">
                                            <input type="text" id="fax" name="fax" class="Combobox2" maxlength="12" placeholder="Fax #" style="height:35px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="col-md-3" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">&nbsp;</span><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> P.O.Box</span></label>
                                    <div class="col-md-9 po-box" style="padding-right:2px; padding-left:35px;">
                                        <div class="row">
                                            <div class="col-xs-3 col-md-2" style="padding-right:2px;" >
                                                <input type="text" id="pob" name="pob" class="Combobox2" placeholder="" autocomplete="off" style="height:35px">
                                            </div>
                                            <div class="col-xs-3 col-md-2" style="padding-left:2px;">
                                                <label class="col-md-12 text-center" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Website</span></label>
                                            </div>
                                            <div class="col-xs-6 col-md-8" style="padding-left:2px;" >
                                                <input type="text" id="website" name="website" class="Combobox2" placeholder="" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 fax-box" style="padding-left:2px">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-3 col-xs-12" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Email</span></label>
                                        <div class="col-xs-12 col-md-9" style="padding-left:0px;">
                                            <input type="text" id="buisness_email" name="buisness_email" class="Combobox2" placeholder="" style="height:35px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div <?php if($tscategory_id == 3) { ?> style="display:none" <?php  } ?>>
		                        <div class="row" style="margin-top:20px;">
		                            <div class="col-sm-12">
		                                <div class="form-group ">
		                                    <label class="col-md-12" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Do You Have World-Wide Offices to add..?</span><a href="" onclick="openBranchPopup();" data-toggle="modal" data-target="#branchModal"><span style="color:#1E90FF;font-family:Georgia;font-size:11px;"><strong>Add</strong></span></a></label>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="row" style="margin-top:10px;">
		                            <div class="col-sm-12">
		                                <div class="form-group ">
		                                    <label class="col-md-12" style="padding-top:5px; font-weight:normal;"><span style="color:#F05539;font-family:Georgia;font-size:13px;">Company Introduction</span></label>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="row" style="margin-top:10px;">
		                            <div class="col-md-5">
		                                <div class="form-group">
		                                    <label class="col-md-5 col-xs-12" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Year Of Register</span></label>
		                                    <div class="col-md-7 time-div" style="padding-right:2px; padding-left:35px;">
		                                        <div class="row">
		                                            <div class="col-xs-12" >
		                                                <input type="text" id="year_of_registration"  name="year_of_registration" class="Combobox2" placeholder="" style="height:35px">
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="col-md-7 fax-box" style="padding-left:2px">
		                                <div class="row">
		                                    <div class="form-group">
		                                        <label class="col-md-3" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Owner Name</span></label>
		                                        <div class="col-xs-12 col-md-9" style="padding-left:0px;">
		                                            <input type="text" id="owner_name" name="owner_name" class="Combobox2" placeholder="" style="height:35px">
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
		                        <div class="row" style="margin-top:10px;">
		                            <div class="col-md-6">
		                                <div class="form-group">
		                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Company Size</span></label>
		                                    <div class="col-md-7 time-div" style="padding-right:2px; padding-left:7px;">
		                                        <div class="row">
		                                            <div class="col-xs-12" >
		                                                <select id="company_size" name="company_size" class="Combobox2" size="1" name="Combobox1">
		                                                    <option value="0">---  Please Select ---</option>
		                                                    <option value="100">Less Than 100 Square Meter</option>
		                                                    <option value="500">100 to 500 Square Meter</option>
		                                                    <option value="1000">501 to 1000 Square Meter</option>
		                                                    <option value="2000">1001 to 2000 Square Meter</option>
		                                                    <option value="2100">More Than 2000 Square Meter</option>
		                                                </select>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <div class="col-md-6 fax-box" style="padding-left:2px">
		                                <div class="row">
		                                    <div class="form-group">
		                                        <label class="col-md-5" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Total No. Of Employee </span></label>
		                                        <div class="col-xs-12 col-md-7" style="padding-left:0px;">
		                                            <input type="text" name="no_of_employee" id="no_of_employee" class="Combobox2" placeholder="" style="height:35px">
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
                        </div>
                        <div>
		                        <div class="row" style="margin-top:10px;">
		                            <div class="col-md-12">
		                                <div class="form-group">
		                                    <label class="col-md-2" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Company Introduction</span></label>
		                                    <div class="col-md-7" style="padding-right:2px; padding-left:35px;">
		                                        <div class="row">
		                                            <div class="col-xs-12" >
		                                                <textarea name="company_intro" id="company_intro" maxlength="4000" cols="70" rows="8" style="height:118px;" class="TextArea1" name="Introduction"></textarea>
		                                            </div>
		                                        </div>
		                                    </div>
		                                    <div class="col-md-3" style="position:relative;padding-top:10px;">
		                                        <span style="color:#666666;font-family:Arial;font-size:11px;">This introduction will be shown in "About Us" tab..</span>
		                                        <div id="wb_Text45" style="padding-top:10px;">
		                                            <span style="color:#F05539;font-family:Arial;font-size:12px;"><span id="intro_count">4000</span> Remining.....</span>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                        </div>
						</div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-2" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Hot Presentation</span></label>
                                    <div class="col-md-7" style="padding-right:2px; padding-left:35px;">
                                        <div class="row">
                                            <div class="col-xs-12" >
                                                <textarea id="company_presentation" name="company_presentation" maxlength="400" cols="70" rows="8" style="height:118px;" class="TextArea1" name="Introduction"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" style="position:relative;padding-top:10px;">
                                        <span style="color:#666666;font-family:Arial;font-size:11px;">This is the most part that attracts the visitors in your site, write quick but attractive words to present your talent..</span>
                                        <div id="wb_Text45" style="padding-top:10px;">
                                            <span style="color:#F05539;font-family:Arial;font-size:12px;"><span id="presentation_count">400</span> Remining.....</span>
                                       	</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div <?php if($tscategory_id != 3) { ?> style="display:none" <?php  } ?>>
	                        <div class="row" >
	                            <div class="col-md-12">
	                                <div class="form-group">
	                                    <label class="col-md-2" style="padding-top:5px; font-weight:normal; padding-right:0px;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Terms Of Payment</span></label>
	                                    <div class="col-md-10" style="padding-right:1px;">
	                                        <div class="row">
	                                            <div class="col-xs-4 col-sm-2" >
	                                                <div class="checkbox">
	                                                    <label>
	                                                        <input class="payment" id="tt" value="1" name="payment[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> T/T</span>
	                                                    </label>
	                                                </div>
	                                                <div class="checkbox">
	                                                    <label>
	                                                        <input class="payment" id="cash" value="7" name="payment[]" type="checkbox"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Cash</span>
	                                                    </label>
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-4 col-sm-2" style="padding:0px;">
	                                                <div class="checkbox">
	                                                    <label>
	                                                        <input class="payment" id="lc" value="2" name="payment[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">LC</span>
	                                                    </label>
	                                                </div>
	                                                <div class="checkbox">
	                                                    <label>
	                                                        <input class="payment" id="credit_card" value="8" name="payment[]" type="checkbox"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Credit Card</span>
	                                                    </label>
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-4 col-sm-2" >
	                                                <div class="checkbox">
	                                                    <label>
	                                                        <input class="payment" id="dp" value="3" name="payment[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> D/P</span>
	                                                    </label>
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-4 col-sm-2" >
	                                                <div class="checkbox">
	                                                    <label>
	                                                        <input class="payment" id="paypal" value="4" name="payment[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Paypal</span>
	                                                    </label>
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-4 col-sm-2" style="padding:0px;">
	                                                <div class="checkbox">
	                                                    <label>
	                                                        <input class="payment" id="western_union" value="5" name="payment[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Western Union </span>
	                                                    </label>
	                                                </div>
	                                            </div>
	                                            <div class="col-xs-4 col-sm-2" style="padding:0px;" >
	                                                <div class="checkbox">
	                                                    <label>
	                                                        <input class="payment" id="money_gram" value="6" name="payment[]" type="checkbox"> <span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">  Money Gram</span>
	                                                    </label>
	                                                </div>
	                                            </div>
	
	                                        </div>
	                                        <div style="display: none;" id="paymentErr">
	
	                                            <h1 ><span style="color:#F05539;font-family:Georgia;font-size:13px;"> Please select atleast one payment Type.</span></h1>
	
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="row" >
	                        	 <div class="col-md-12">
	                                <div class="form-group">
	                                		<label class="col-md-3 " style="padding-top:5px; font-weight:normal;"> Annual Trade Volume </label>
	                                		<div  class="col-md-3">
	                                			<div class="form-group">
	                                				<input type="text"  class="form-control" name="annual_trad_volume" id="annual_trad_volume" />
	                                				<span style="color:#A9A9A9">Ex: 30 Containers</span>
	                                			</div>
	                                		</div>
	                                		<div>
	                                		<span style="color:#696969" >Per Year</span>
	                                		</div>
	                        		</div>
	                        	</div>	
	                        </div>
						</div>
                        <div class="row" style="margin-top:10px;display:none;">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-3" style="padding-top:5px; font-weight:normal;">
                                    <span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">  Add Company Images</span>
                                        <!--  <div style="margin-top:30px;"><a href="#"><img src="<?php //echo asset_url(); ?>images/img1208.gif"></a></div> -->
                                    </label>
                                    <div class="col-md-5">
                                        <div class="row" >
                                            <div class="col-sm-12">
                                            	<input name="companyImage[]" type='file' class="upladImg" id="imgupload" multiple="multiple" onchange="readCompanyImageURL(this);"/>
                                                <!--<a href="#"><img src="<?php echo asset_url(); ?>images/ts/img1191.png" class="img-responsive"></a>
                                                <input class="img-responsive companyImg " name="buisnessImage[]" type='file' id="companyImgFirst" onchange="readCompanyImgURL(this);"/> -->
                                                <div class="col-sm-6" style="margin-bottom:5px;"><img id="companyphoto1" src="#"  style="display: none"/></div>
                                                <div class="col-sm-6" style="margin-bottom:5px;"><img id="companyphoto2" src="#" style="display: none" /></div>
                                                <div class="col-sm-6"><img id="companyphoto3" src="#"  style="display: none"/></div>
                                                <div class="col-sm-6"><img id="companyphoto4" src="#" style="display: none" /></div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group"> <span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor: pointer" onclick="removeCompanyImage();">Remove</span> </div>
                                    <div class="col-md-3 col-xs-6" style="position:relative;">
                                        <span style="color:#666666;font-family:Arial;font-size:11px;">Images will be shown in your " About Us " tab and in a slide show..<br><br>jpg or png, Dimensiones: 500*345 Pixel, Resolution 75dpi, Max size allowed: 80 kb</span>
                                    </div>
                                </div>
                            </div>
                        </div>
						<br>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-12" style="padding-top:5px; font-weight:normal;">
                                        <span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Who Is The The Contact Person In Your Company..?</span>
                                    </label>
                                    <div class="col-md-6">
                                        <span style="color:#666666;font-family:Arial;font-size:11px;">The Contact person is the person who will deal with your website buyers or visitors through:<br>- Chat, Emails, Messages and much more</span>
                                    </div>
                                    <div class="col-md-6">
                                    	<div class="row">
                                    		<div class="col-sm-12">
		                                        <div class="radio col-sm-11">
		                                            <label>
		                                                <input type="radio" name="optionsRadios"  onchange ="displaycontact();"  id="optionsRadios1" value="1" checked>
		                                                <span style="color:#3C3C3C;font-family:Georgia;font-size:11px;">I am The Contact Person</span>
		                                            </label>
		                                        </div>
	                                        </div>
	                                    </div> 
	                                    <div class="row">
	                                    	<div class="container col-sm-12 ">
			                                        <div class="radio col-sm-10" id="custom" >
			                                            <label >
			                                                <input type="radio" name="optionsRadios" id="optionsRadios2"  onchange ="displaycontact();" value="2">
			                                                <span style="color:#3C3C3C;font-family:Georgia;font-size:11px;">I Don't Prefer To Be The Contact Person, Let Me Add One</span>
			                                            </label> 
					                                    
			                                            <input type="hidden" name="contactflag"  id="contactflag" value="" />
			                                        </div>
			                                        <div class="col-sm-2" >
			                                        	<span style="color:#1E90FF;font-family:Georgia;font-size:11px; position:relative; right:-15px;" id="contactlink" >
					                                          <a href="#"  id="newcontact" onclick="openContactPopup();"  data-toggle="modal"   data-target="#contactModal"   style="color: #1E90FF;"><strong>ADD</strong></a></span> 
			                                        </div>
			                                        
		                                     </div> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="col-md-12" style="padding-top:5px; font-weight:normal;">
                                        <span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">The Main Routes(Select the country and type the ports or select worldwide).</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                         <div class="row" <?php  if($tscategory_id != 3) { ?> style="display:none"  <?php } ?>>
	                        	 <div class="col-md-12">
	                                <div class="form-group">
	                                		<input  type="checkbox" id="company_rendom_carousel" name="company_rendom_carousel"  checked value="1" class="" >
	                                		<span >Display My Company Information in the random carousel in the Home page.</span>
	                        		</div>
	                        	</div>	
	                    </div>
			  			<?php  if($tscategory_id == 2) { ?>
			  			 <br>
			  			<input type="hidden" id="route_count" value="0" />
			  			<div id="myroutes" style="background-color:#fff;padding:15px 25px;">
			  				<div class="route-1">
					  			<div class="row" style="margin:0px;">
					  				<div class="col-sm-8">
					  					<div class="row">
					  						<div class="form-group">
					  							<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Start Country</div>
					  							<div class="col-sm-9">
					  								<select name="from_country_id[]" class="country-dropdn" id="country-dropdn-10" onclick="unckeckCountry('from_country0','country-dropdn-10');">
					  									<option value="0">Country</option>
					  									<?php foreach ($countries as $country) {?>
					  									<option value="<?php echo $country['id'];?>"><?php echo $country['name'];?></option>
					  									<?php } ?>
					  								</select>
					  							</div>
					  						</div>
					  					</div>
					  				</div>
					  				<div class="col-sm-4">
					  					<div class="row">
					  						<div class="control-label label-text-form col-sm-10 col-sm-offset-2" style="padding-top:10px;">
						  						<input type="radio" name="from_country0" id="from_country0" value="1" onclick="disableDropDn(this,'country-dropdn-10');"/>
						  						 Worldwide
					  						</div>
					  					</div>
					  				</div>
					  			</div>
					  			<br>
					  			<div class="row" style="margin:0px;">
					  				<div class="col-sm-8">
					  					<div class="row">
					  						<div class="form-group">
					  							<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Port</div>
					  							<div class="col-sm-9">
					  								<input type="text" name="from_shipping_port[]" class="shiipingport" placeholder="Use commas to separate and type many destinations"/><br>
					  								<span style="color:#808080;font-family:Arial;font-size:9.3px;margin-left:15px;">Ex. Shenzen, Shangahi, xxxxxxxx, xxxxx</span>
					  							</div>
					  						</div>
					  					</div>
					  				</div>
					  				<div class="col-sm-4">
					  				</div>
					  			</div>
					  			<br><br>
					  			<div class="row" style="margin:0px;">
					  				<div class="col-sm-8">
					  					<div class="row">
					  						<div class="form-group">
					  							<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Destination</div>
					  							<div class="col-sm-9">
					  								<select name="to_country_id[]" class="country-dropdn" id="country-dropdn-20" onclick="unckeckCountry('to_country0','country-dropdn-20');">
					  									<option value="0">Country</option>
					  									<?php foreach ($countries as $country) {?>
					  									<option value="<?php echo $country['id'];?>"><?php echo $country['name'];?></option>
					  									<?php } ?>
					  								</select>
					  							</div>
					  						</div>
					  					</div>
					  				</div>
					  				<div class="col-sm-4">
					  					<div class="row">
					  						<div class="control-label label-text-form col-sm-10 col-sm-offset-2" style="padding-top:10px;">
						  						<input type="radio" name="to_country0" value="1" id="to_country0" onclick="disableDropDn(this,'country-dropdn-20');"/>
						  						 Worldwide
					  						</div>
					  					</div>
					  				</div>
					  			</div>
					  			<br>
					  			<div class="row" style="margin:0px;">
					  				<div class="col-sm-8">
					  					<div class="row">
					  						<div class="form-group">
					  							<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Port</div>
					  							<div class="col-sm-9">
					  								<input type="text" name="to_shipping_port[]" class="shiipingport" placeholder="Use commas to separate and type many ports"/><br>
					  								<span style="color:#808080;font-family:Arial;font-size:9.3px;margin-left:15px;">Ex. Dubai, Gabal Ali, xxxxx, xxxxxx, </span>
					  							</div>
					  						</div>
					  					</div>
					  				</div>
					  				<div class="col-sm-4">
					  				</div>
					  			</div>
					  		</div>
			  			</div>
			  			<div class="row" style="margin:0px;margin-right:15px;padding-top:10px;">
				  			<div class="pull-right" style="color:#1E90FF;font-family:Georgia;font-size:11px;">
					  			<strong><a href="javascript:addMoreRoutes();" class="style5" >Add a route</a></strong>
					  		</div>
				  		</div>
			  			<?php } ?>
			  			<?php  if($tscategory_id == 1) { ?>
			  				<div class="row" style="margin-top:10px;">
			  					<div class="col-md-9">
			  						<div class="row" style="margin-top:10px;">
				  						<div class="col-sm-12">
				  							<label class="col-sm-3" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Account No.</span></label>
				  							<div class="col-sm-9">
				  								<input type="text" class="form-control"  placeholder="Account Number"  name="account_no"  id="account_no" />
				  							</div>
				  						</div>
				  					</div>		
			  						<div class="row" style="margin-top:10px;">
				  						<div class="col-sm-12">
				  							<label class="col-sm-3" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Account Name</span></label>
				  							<div class="col-sm-9">
				  								<input type="text" class="form-control" name="account_name"  placeholder="Account Name"  id="account_name" />
				  							</div>
				  						</div>
				  					</div>
				  					<div class="row" style="margin-top:10px;">
				  						<div class="col-sm-12">
				  							<label class="col-sm-3" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Beneficiary Bank Name</span></label>
				  							<div class="col-sm-9">
				  								<input type="text" class="form-control" name="bank_name"  placeholder="Bank Name"  id="bank_name" />
				  							</div>
				  						</div>
				  					</div>			
				  					<div class="row" style="margin-top:10px;">
				  						<div class="col-sm-12">
				  							<label class="col-sm-3" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Bank Code</span></label>
				  							<div class="col-sm-9">
				  								<input type="text" class="form-control" name="bank_code"  placeholder="Bank Code"  id="bank_code" />
				  							</div>
				  						</div>
				  					</div>			
				  					<div class="row" style="margin-top:10px;">
				  						<div class="col-sm-12">
				  							<label class="col-sm-3" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Beneficiary Bank Address</span></label>
				  							<div class="col-sm-9">
				  								<textarea id="bank_address"  placeholder="Bank Address" name="bank_address" maxlength="400" cols="70" rows="8" style="height:118px;" class="TextArea1" ></textarea>
				  							</div>
				  						</div>
				  					</div>			
				  					<div class="row" style="margin-top:10px;">
				  						<div class="col-sm-12">
				  							 <label class="col-sm-3" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Swift Code</span></label>
				  							<div class="col-sm-9">
				  								<input type="text" class="form-control" name="swift_code"  placeholder="Swift Code"  id="swift_code" />
				  							</div>
				  						</div>
				  					</div>			
			  					</div>
			  					<div class="col-md-3" style="position:relative;">
                                        <span style="color:#666666;font-family:Arial;font-size:11px;">The official bank account is the account assigned and associated with your company registered name.<br><br>Personal accounts will be rejected.</span>
                                </div>
			  				</div>
                        <?php } ?>
                        <div class="row" style="margin-top:30px;">
                            <div class="col-sm-12">
                                <div class="form-group text-center"> 
                                    <button type="submit" style="padding:0px;border:0px;">
                                        <img src="<?php echo asset_url(); ?>images/ts/img1190.gif" >
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>     
        </div>
    </div>
</div>

<div id="profile_pic_modal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3 id="cropmodal_title"></h3>
			</div>
			<div class="modal-body">
				<form id="cropimage" method="post" enctype="multipart/form-data" action="">
						<span><b>Upload Image:</b></span> <input type="file" name="businesslogo-pic" id="businesslogo-pic"  accept=".png,.jpg,.jpeg.gif" class="form-control" style="width:200px;display:inline-block;"/><br><br>
						
						<input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
						<input type="hidden" name="x1" id="x1" value="" />
				        <input type="hidden" name="y1" id="y1" value="" />
				        <input type="hidden" name="x2" id="x2" value="" /> 
				        <input type="hidden" name="y2" id="y2" value="" />
				        <input type="hidden" name="width" id="width" value="" />
				        <input type="hidden" name="height" id="height" value="" />
				      	<!--  <input type="hidden" name="fullpath" id="fullpath" value="<?php //echo asset_url();?>" /> -->
						<input type="hidden" name="image_name" value="" id="image_name" />
						<input type="hidden"  name="flag" id="flag" value="" />
						<div id="parent" style="position:relative;">
							<span id="thumbnail" style="display: inline-block;position:relative;">
								<img id="photo" src="#" alt="" title="" style="max-width:100%;display:none" />
							</span>
						</div>
						<div id="thumbs" style="padding:5px; width:600px"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="save_crop" class="btn btn-primary">Crop & Save</button>
			</div>
		</div>
	</div>
</div>

<div id="branchModal" class="modal fade">
	<div class="modal-dialog" style="width:70%;">
		<div class="modal-content" id="word-wide-frm">
			<form name="addbranch" id="addbranch" action="" method="post">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Add World Wide Offices</h3>
			</div>
			<div class="modal-body" style="height:500px;overflow-y: scroll;">
					<div class="row info-row">
			  				<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">Address</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<div class="label-text-input">
                                    	<input type="text" name="bcountry[]" id="blicense_company_country" class="form-control form-custom-input" value="" placeholder="Country"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
									<div class="label-text-input">
                                    	<input type="text" name="bprovince[]" id="blicense_company_province" class="form-control form-custom-input" value="" placeholder="Province"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="form-group">
									<div class="label-text-input">
                                  		<input type="text" name="bcity[]" id="bbuisness_city_other_lng" class="form-control form-custom-input" value="" placeholder="City"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
					  	</div>
					  	<div class="row info-row">
					  		<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">Street</div>
								</div>
							</div>
					  		<div class="col-sm-6">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="bstreet[]" id="bbuisness_street_other_lng" class="form-control form-custom-input" value="" placeholder="Street"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
					  	</div>
			  			<div class="row info-row">
			  				<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">Tel </div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="bcountry_code[]" id="btelephone_code" class="form-control form-custom-input" value="" placeholder="Country Code"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                    	<input type="text" name="bcity_code[]" id="btelephone_city_code" class="form-control form-custom-input" value="" placeholder="City Code"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                  		<input type="text" name="btelephone1[]"   id="btelephone_1" maxlength="12" class="form-control form-custom-input" value="" placeholder="Telephone 1"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
							<div class="col-sm-1">
								<div class="form-group">
									<div class="control-label label-text-form" style="padding-top: 9px;">And </div>
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="btelephone2[]" id="btelephone_2"  maxlength="12" class="form-control form-custom-input" value="" placeholder="Telephone 2"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
					  	</div>
					  		<div class="row info-row">
					  		<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">Email </div>
								</div>
							</div>
					  		<div class="col-sm-4">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="bemail[]" id="bemail" class="form-control form-custom-input" value="" placeholder="Email"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
					  	</div>
					  	<div class="row info-row">
					  		<div class="col-sm-2">
								<div class="form-group">
									<div class="control-label label-text-form">Fax </div>
								</div>
							</div>
					  		<div class="col-sm-4">
								<div class="form-group">
									<div class="label-text-input">
                                   		<input type="text" name="bfax[]" id="bfax" class="form-control form-custom-input" value="" placeholder="Fax"/>
									</div>
									<div class="messageContainer"></div>
								</div>
							</div>
					  	</div>
					  	<div id="worlofficediv">
					  		
					  	</div>
					  	
					  	<div class="row info-row">
					  		<div class="col-sm-2">
								<div class="form-group">
									<a href="javascript:addMoreOffice();" class="btn pull-left"><img src="<?php echo asset_url(); ?>images/add.png">
                                        <span style="color:#F05539;font-family:Georgia;font-size:13px;">Add More </span></a>
								</div>
							</div>
					  	</div>
					  	<input type="hidden" name="office_count" id="office_count" value="1"/>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" name="save_branches" id="save_branches" class="btn btn-primary">Add Branch</button>
			</div>
			</form>
		</div>
	</div>
</div>

<div id="contactModal" class="modal fade">
	<div class="modal-dialog"  style="text-align:left;width:483px;height:58px;">
		<div class="modal-content" id="iam-contact-frm">
				<div class="modal-header text-center" style="background-color: #FF6347;height:58px;">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="margin-top:-27px;margin-right:-30px;z-index:5011;filter:alpha(opacity=100);opacity: 1;">
						<img src="<?php echo asset_url();?>images/closeround.png" id="Image66" alt="close" style="width:36px;">
					</button>
					<span style="color:#FFFFFF;font-family:Georgia;font-size:17px;" id="contactmodal_title"><strong>ADD A CONTACT PERSON</strong></span>
				</div>
			<div class="modal-body" style="background-color: #FAFAFA;">
				<table style="width: 100%; border: 0px;" cellpadding="1" cellspacing="0">
					<tr>
						<td colspan="2" style="padding-left: 15px;">
							<div id="contactdiv">
							
							</div>
					     </td>
					  </tr>
				</table> 
			</div>
		</div>
	</div>
</div>
<script src="<?php echo asset_url();?>js/bootstrapValidator.min.js"></script>
<script>
function addMoreOffice()
{
	var office_count = parseInt($("#office_count").val());
	office_count++;
	//var count = parseInt($("#totalmorecertificatecount").val());
	var html =
	'<div class="row" id="office-no-'+office_count+'">'
	+'<div class="col-md-12">'
	+'<hr>'
	+ '<div class="row info-row">'
		+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="control-label label-text-form">Address</div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-3">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
            	+'<input type="text" name="bcountry[]" id="blicense_company_country" class="form-control form-custom-input" value="" placeholder="Country"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-4">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
            	+'<input type="text" name="bprovince[]" id="blicense_company_province" class="form-control form-custom-input" value="" placeholder="Province"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-3">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
          		+'<input type="text" name="bcity[]" id="bbuisness_city_other_lng" class="form-control form-custom-input" value="" placeholder="City"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'</div>'
	+'<div class="row info-row">'
		+'<div class="col-sm-2">'
			+'<div class="form-group">'
				+'<div class="control-label label-text-form">Street</div>'
			+'</div>'
		+'</div>'
		+'<div class="col-sm-6">'
			+'<div class="form-group">'
				+'<div class="label-text-input">'
           			+'<input type="text" name="bstreet[]" id="bbuisness_street_other_lng" class="form-control form-custom-input" value="" placeholder="Street"/>'
				+'</div>'
				+'<div class="messageContainer"></div>'
			+'</div>'
		+'</div>'
	+'</div>'
	+'<div class="row info-row">'
		+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="control-label label-text-form">Tel </div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
           		+'<input type="text" name="bcountry_code[]" id="btelephone_code" class="form-control form-custom-input" value="" placeholder="Country Code"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
            	+'<input type="text" name="bcity_code[]" id="btelephone_city_code" class="form-control form-custom-input" value="" placeholder="City Code"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
          		+'<input type="text" name="btelephone1[]"   id="btelephone_1" maxlength="12" class="form-control form-custom-input" value="" placeholder="Telephone 1"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-1">'
		+'<div class="form-group">'
			+'<div class="control-label label-text-form" style="padding-top: 9px;">And </div>'
		+'</div>'
	+'</div>'
	+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
           		+'<input type="text" name="btelephone2[]" id="btelephone_2"  maxlength="12" class="form-control form-custom-input" value="" placeholder="Telephone 2"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'</div>'
	+'<div class="row info-row">'
		+'<div class="col-sm-2">'
			+'<div class="form-group">'
				+'<div class="control-label label-text-form">Email </div>'
			+'</div>'
		+'</div>'
		+'<div class="col-sm-4">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
           		+'<input type="text" name="bemail[]" id="bfax" class="form-control form-custom-input" value="" placeholder="Email"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'</div>'
	+'<div class="row info-row">'
		+'<div class="col-sm-2">'
		+'<div class="form-group">'
			+'<div class="control-label label-text-form">Fax </div>'
		+'</div>'
	+'</div>'
		+'<div class="col-sm-4">'
		+'<div class="form-group">'
			+'<div class="label-text-input">'
           		+'<input type="text" name="bfax[]" id="bfax" class="form-control form-custom-input" value="" placeholder="Fax"/>'
			+'</div>'
			+'<div class="messageContainer"></div>'
		+'</div>'
	+'</div>'
	+'</div>'
	+'<div class="row">'
	+'<div class="col-md-12">'
		+'<a class="pull-right" href="javascript:removeOffice('+office_count+',1);"><img src="<?php echo asset_url();?>images/Error.png"/></a>'
	+'</div>'
	+'</div>';	
	+'</div>'
	+'</div>';
	
	 $("#worlofficediv").append(html);
	 $('#addbranch').bootstrapValidator ('addField', 'bcountry[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bprovince[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bcity[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bstreet[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bcountry_code[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bcity_code[]');
	 $('#addbranch').bootstrapValidator ('addField', 'btelephone1[]');
	 $('#addbranch').bootstrapValidator ('addField', 'btelephone2[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bemail[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bfax[]');
	 $("#office_count").val(office_count);
}
function removeOffice(id,flag) {
	
	$("#office-no-"+id).remove();
	 $('#addbranch').bootstrapValidator ('addField', 'bcountry[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bprovince[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bcity[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bstreet[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bcountry_code[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bcity_code[]');
	 $('#addbranch').bootstrapValidator ('addField', 'btelephone1[]');
	 $('#addbranch').bootstrapValidator ('addField', 'btelephone2[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bemail[]');
	 $('#addbranch').bootstrapValidator ('addField', 'bfax[]');
	if(flag == 1)
	{
		var count = $('#office_count').val();
		var decrease = parseInt(count)-parseInt(1);
		$('#office_count').val(decrease);
	}
}
function contactpersonchange()
{
	$("#change-contactprofile-pic").click();
}
function validatecompanylogoimagefile(id,input,size)
{
	var flag = true;
	if (input.files && input.files[0]) {
       		var ext = input.files[0].name.split('.').pop();
       		var file_size = parseInt(input.files[0].size);
       		var filesizeinkb = (file_size/1024);
       		if(ext == 'png'  || ext =='jpg' || ext =='jpeg' || ext =='gif') {
	                if(filesizeinkb > size) {
	                	alert("File size should be 100 kb max.");
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

var base_url = "<?php echo base_url();?>";
jQuery('#change-logo-pic').on('click', function(e){
	jQuery('#profile_pic_modal').modal({show:true,backdrop: 'static',keyboard: false});
	$('#photo').css('display', 'none');
	$('#cropmodal_title').text('Add Company Logo  Picture');
	jQuery("#businesslogo-pic").val('');
	jQuery("#flag").val('1');
	jQuery('.imgareaselect-outer').css('display','none');
	
	});


jQuery('#businesslogo-pic').on('change', function() {
	var flag = validatecompanylogoimagefile('businesslogo-pic',this,100);
	if(flag == true) 
	{
         var reader = new FileReader();
         reader.onload = function (e) {
          	$('#photo').css('display', 'block');
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
			e.preventDefault();
			params = {
					targetUrl: '<?php echo base_url();?>account/changelogo',
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

					if(	jQuery("#flag").val() == 1) {
							jQuery("#businesslogo_picture").attr('src', response['fullpath']);
							$('#logopath').val(response['path']);
							//jQuery("#preview-profile-pic").html('');
							$('#businesslogo_picture').css('display', 'block');
							$('#change-logo-pic').css('display', 'none');
							
					}
					if(	jQuery("#flag").val() == 2) {
						jQuery("#imgcontactperson").attr('src', response['fullpath']);
						$('#contact_imgpath').val(response['path']);
						//jQuery("#preview-profile-pic").html('');
						$('#imgcontactperson').css('display', 'block');
						$('#change-contactprofile-pic').css('display', 'none');
						$('#addcontact').bootstrapValidator ('revalidateField', 'contact_imgpath');
						$('#contactModal').modal({show:true});
					
				}
					jQuery("#businesslogo-pic").val('');
			},
		// 	error: function (xhr, ajaxOptions, thrownError) {
		// 	//alert('status Code:' + xhr.status + 'Error Message :' + thrownError);
				
		// 	}
			},'json');
	}



function displaycontact()
{
	var value = $("#buisnessInfor input[type='radio']:checked").val();
	if(value == 1)
	{
		//$('.contact').hide();
		$('#contactlink').css('display', 'none');
		
	}
	if(value == 2)
	{
		//$('.contact').show();
		$('#contactlink').css('display', 'block');
		
	}
	//$("#contact_name").val('');
	
}

$('#company_intro').on('keyup',function(){
    var vcount = parseInt($(this).val().length);
    var rem = 4000 - vcount;
    $("#intro_count").html(rem);
});
$('#company_presentation').on('keyup',function(){
    var vcount = parseInt($(this).val().length);
    var rem = 400 - vcount;
    $("#presentation_count").html(rem);
});


function savetemparary() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showChangePasswordRequest, // pre-submit callback 
 			success :  showChangePasswordResponse,
 			url : '<?php echo base_url()?>account/savebusinesslogotempararyImage',
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
function openBranchPopup(){
	$('#addbranch').bootstrapValidator({
		 container: function($field, validator) {
	     	return $field.parent().next('.messageContainer');
	     },
	    feedbackIcons: {
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    excluded: ':disabled',
	    fields: {
    	   	'bcountry[]': {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Country Name is required and cannot be empty'
                 	}
             	}
    	   	},
    		'bprovince[]': {
    	   		validators: {
                 	notEmpty: {
                     	message: 'Province Name is required and cannot be empty'
                 	}
             	}
    	   	},
    		'bcity[]': {
    	   		validators: {
                 	notEmpty: {
                     	message: 'City is required and cannot be empty'
                 	}
             	}
    	   	},
    	   	'bstreet[]': {
    	   		validators: {
    	   			notEmpty: {
    	   				message: 'Street is required and cannot be empty'
    	   			}
    	   		}
    	   	},
    	   	'bcountry_code[]': {
    	   		validators: {
    	   			notEmpty: {
    	   				message: 'Country Code is required and cannot be empty'
    	   			}
    	   			
    	   		}
    	   	},
    	   	'bcity_code[]': {
    	   		validators: {
    	   			notEmpty: {
    	   				message: 'City Code is required and cannot be empty'
    	   			}
	           		
    	   		}
    	   	},
    	   	'btelephone1[]': {
    	   		validators: {
    	   			notEmpty: {
    	   				message: 'Telephone Number is required and cannot be empty'
    	   			},
    	   			 integer: {
                        message: 'The value is not an integer'
                    }
	    	   		
    	   		}
    	   	},
    	   	'btelephone2[]': { 
    	   		validators: {
    	   			notEmpty: {
    	   				message: 'Telephone Number is required and cannot be empty'
    	   			},
    	   			 integer: {
                        message: 'The value is not an integer'
                    }
	    	   		 
    	   		}
    	   	},
    	 	'bemail[]': {
    	   		validators: {
    	   			notEmpty: {
    	   				message: 'The Email is required and cannot be empty'
    	   			},
    	   			regexp: {
                        regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                        message: 'The value is not a valid email address'
                    }
    	   		}
    	   	},
    	   	'bfax[]': {
    	   		validators: {
    	   			notEmpty: {
    	   				message: 'The Fax is required and cannot be empty'
    	   			},
    	   			integer: {
	                    message: 'Invalid Fax Number.'
	           		}
    	   		}
    	   	},
    	  
		}
	}).on('error.field.bv', function(e, data) {
		if (data.bv.getSubmitButton()) {
			data.bv.disableSubmitButtons(false);
		}
    }).on( 'status.field.bv', function( e, data ) {
    	$( '#save_branches').attr( 'disabled', false );
    }).on('success.form.bv', function(e) {
		e.preventDefault();
		saveBusinessBranches();
	});
}
function saveBusinessBranches() {
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showBranchRequest, // pre-submit callback 
 			success :  showBranchResponse,
 			url : base_url+'account/save_buisness_branches',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#addbranch').ajaxSubmit(options);
}
function showBranchRequest(formData, jqForm, options){
	myloadingstart('word-wide-frm');
	var queryString = $.param(formData);
	return true;
}
function showBranchResponse(resp, statusText, xhr, $form){
	myloadingstop('word-wide-frm');
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		$("#branchModal").modal('hide');
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
	}
}
$('#profile_pic_modal').on('hidden.bs.modal' , function() {
	$('#photo').imgAreaSelect( {remove: true} );
});


// contact person

function remove_contact_profile_pic()
{
	  $('#imgcontactperson').attr('src', '');
      $('#imgcontactperson').hide();
      $('#change-contactprofile-pic').css('display', 'block');
      $('#contact_imgpath').val('');
}
function openContactPopup()
{
	$.post("<?php echo base_url();?>account/opencontact",function(data) {
		document.getElementById('contactdiv').innerHTML = data.message;
		document.getElementById('contactmodal_title').innerHTML = data.title;
		$(document).ready(function(){
			jQuery('#change-contactprofile-pic').on('click', function(e){
				jQuery('#profile_pic_modal').modal({show:true});
				$('#photo').css('display', 'none');
				$('#cropmodal_title').text('Add Contact Person Picture');
				jQuery("#businesslogo-pic").val('');
				jQuery("#flag").val('2');
				jQuery('#contactModal').modal('hide');
				jQuery('.imgareaselect-outer').css('display','none');
				});
			
			$('#addcontact').bootstrapValidator({
				 container: function($field, validator) {
			     	return $field.parent().next('.messageContainer');
			     },
			    feedbackIcons: {
			        validating: 'glyphicon glyphicon-refresh'
			    },
			    excluded: ':disabled',
			    fields: {
		   		'contactpersone_name': {
		   	   		validators: {
		                	notEmpty: {
		                    	message: 'Name is required and cannot be empty'
		                	}
		            	}
		   	   	},
		   	   	'contact_person_email': {
		   	   		validators: {
		   	   			notEmpty: {
		   	   				message: 'Email is required and cannot be empty'
		   	   			},
			   	   		regexp: {
			                regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
			                message: 'The value is not a valid email address'
			            }
		   	   		}
		   	   	},
		        'text_password': {
		             validators: {
		                 notEmpty: {
		                     message: 'The NewPassword is required and cannot be empty'
		                 }
		             }
		         },
		         'confirm_password': {
		             validators: {
		                 notEmpty: {
		                     message: 'The ConfirmPassword is required and cannot be empty'
		                 },
		                 identical: {
		                     field: 'text_password',
		                     message: 'The password and its confirm must be the same'
		                 }
		             }
		         },
		   	   	'contact_person_code': {
		   	   		validators: {
		   	   			notEmpty: {
		   	   				message: 'Code is required and cannot be empty'
		   	   			}
		   	   			
		   	   		}
		   	   	},
		   	   	'contact_person_mobile': {
		   	   		validators: {
		   	   			notEmpty: {
		   	   				message: 'Mobile is required and cannot be empty'
		   	   			},
			   	   		 regexp: {
			                 regexp: '[0-9]$',
			                 message: 'Invalid Mobile Number'
			             }
		   	   		}
		   	   	},
		   	   	'contact_person_position': {
		   	   		validators: {
		   	   			notEmpty: {
		   	   				message: 'position is required and cannot be empty'
		   	   			}
			    	   		
		   	   		}
		   	   	},
		   	   	'contact_imgpath': {
		   	   		validators: {
		   	   			notEmpty: {
		   	   				message: 'Profile picture is required and cannot be empty'
		   	   			}
			    	   		
		   	   		}
		   	   	}
		   	   
		   	  
				}
			}).on('error.field.bv', function(e, data) {
				if (data.bv.getSubmitButton()) {
					data.bv.disableSubmitButtons(false);
				}
		   }).on( 'status.field.bv', function( e, data ) {
		   	$( '#btn_savecontact').attr( 'disabled', false );
		   }).on('success.form.bv', function(e) {
				e.preventDefault();
				saveContactPersones();
			});
		});
	},'json');
	
}
function saveContactPersones() {
	myloadingstart('iam-contact-frm');
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showContactRequest, // pre-submit callback 
 			success :  showContactResponse,
 			url : base_url+'account/savebuisnesscontactpersone',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#addcontact').ajaxSubmit(options);
		$("#contactModal").modal('hide');
}
function showContactRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showContactResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		$("#contactModal").modal('hide');
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		$("#contactflag").val('1');
		alert(resp.msg);
	}
	myloadingstop('iam-contact-frm')
	
}

function addMoreRoutes() {
	var count = parseInt($("#route_count").val());
	count++;
	var html = '<hr/><div class="route-'+(count+1)+'">'
			  +'<div class="row" style="margin:0px;">'
			  +'<div class="col-sm-8">'
			  +'<div class="row">'
			  +'<div class="form-group">'
			  +'<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Start Country</div>'
			  +'<div class="col-sm-9">'
			  +'<select name="from_country_id[]" class="country-dropdn" id="country-dropdn-1'+count+'" onclick="unckeckCountry(`from_country'+count+'`,`country-dropdn-1'+count+'`);">'
			  +'<option value="0">Country</option>'
			  <?php foreach ($countries as $country) {?>
			  +'<option value="<?php echo $country['id'];?>"><?php echo addslashes($country['name']);?></option>'
			  <?php } ?>
			  +'</select>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<div class="col-sm-4">'
			  +'<div class="row">'
			  +'<div class="control-label label-text-form col-sm-10 col-sm-offset-2" style="padding-top:10px;">'
			  +'<input type="radio" name="from_country'+count+'" id="from_country'+count+'" value="1" onclick="disableDropDn(this,`country-dropdn-1'+count+'`);"/>'
			  +' Worldwide'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<br>'
			  +'<div class="row" style="margin:0px;">'
			  +'<div class="col-sm-8">'
			  +'<div class="row">'
			  +'<div class="form-group">'
			  +'<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Port</div>'
			  +'<div class="col-sm-9">'
			  +'<input type="text" name="from_shipping_port[]" class="shiipingport" placeholder="Use commas to separate and type many destinations"/><br>'
			  +'<span style="color:#808080;font-family:Arial;font-size:9.3px;margin-left:15px;">Ex. Shenzen, Shangahi, xxxxxxxx, xxxxx</span>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<div class="col-sm-4">'
			  +'</div>'
			  +'</div>'
			  +'<br><br>'
			  +'<div class="row" style="margin:0px;">'
			  +'<div class="col-sm-8">'
			  +'<div class="row">'
			  +'<div class="form-group">'
			  +'<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Destination</div>'
			  +'<div class="col-sm-9">'
			  +'<select name="to_country_id[]" class="country-dropdn" id="country-dropdn-2'+count+'" onclick="unckeckCountry(`to_country'+count+'`,`country-dropdn-2'+count+'`);">'
			  +'<option value="0">Country</option>'
			  <?php foreach ($countries as $country) {?>
			  +'<option value="<?php echo $country['id'];?>"><?php echo addslashes($country['name']);?></option>'
			  <?php } ?>
			  +'</select>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<div class="col-sm-4">'
			  +'<div class="row">'
			  +'<div class="control-label label-text-form col-sm-10 col-sm-offset-2" style="padding-top:10px;">'
			  +'<input type="radio" name="to_country'+count+'" id="to_country'+count+'" value="1" onclick="disableDropDn(this,`country-dropdn-2'+count+'`);"/>'
			  +' Worldwide'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<br>'
			  +'<div class="row" style="margin:0px;">'
			  +'<div class="col-sm-8">'
			  +'<div class="row">'
			  +'<div class="form-group">'
			  +'<div class="control-label label-text-form col-sm-3" style="padding-top:5px;">Port</div>'
			  +'<div class="col-sm-9">'
			  +'<input type="text" name="to_shipping_port[]" class="shiipingport" placeholder="Use commas to separate and type many ports"/><br>'
			  +'<span style="color:#808080;font-family:Arial;font-size:9.3px;margin-left:15px;">Ex. Dubai, Gabal Ali, xxxxx, xxxxxx, </span>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'</div>'
			  +'<div class="col-sm-4">'
			  +'</div>'
			  +'</div>'
			  +'</div>';
	$("#myroutes").append(html);
}

function disableDropDn(input,id) {
	if($(input).prop("checked")) {
		$("#"+id).css('background-color','#ccc');
	}
}

function unckeckCountry(id,id2) {
	$("#"+id).removeAttr('checked'); 
	$("#"+id2).css('background-color','#fff');
}

</script>