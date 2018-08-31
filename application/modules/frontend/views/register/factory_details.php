
<?php $this->load->view('default/header_after_login'); ?>
<?php if($registration_step >= 3) { 
		redirect(base_url());
 	} 
?>

<div class="container" style="background:#f1f1f1;">
    <div class="row">
        <div class="col-md-2" style="background:#DCDCDC; padding-top:10%; padding-bottom:30%;">
            <div class="form-group">
                <h1 class="text-center"><span style="color:#2D2D2D;font-family:Georgia;font-size:19px;">Account</span></h1>
                <ul style="list-style:none; margin-left:15px; position:relative;">
                    <div style="position:absolute; margin:auto; margin-left:4px; top:0px; height:89% ;width:5px; overflow:hidden; background:#F05539; border-radius:50px;">
                        <div style="height:10%; width:5px; background:#F05539" id="account-steps"></div>
                    </div>
                    <li style="position:relative; margin-bottom:10px;"> <span style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>Profile</li>
                    <li ><span id="account-steps1" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>Personal Info.</li>
                </ul>
            </div>
            <div class="form-group" id="business">
                <h1 class="text-center"><span style="color:#2D2D2D;font-family:Georgia;font-size:19px;">Business Info</span></h1>
                <ul style="list-style:none; position:relative; padding-left:30px;">
                    <div style="position:absolute; margin:auto; margin-left:4px; top:7px; height:89% ;width:5px; overflow:hidden; background:#fff; border-radius:50px;">
                        <div style="height:25%; width:5px; background:#F05539" id="business-steps"></div>
                    </div>
                    <li style="position:relative; margin-bottom:10px;"> <span style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>General Info.</li>
                    <li style="position:relative; margin-bottom:10px;"><span id="business-step1" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span> Factory Details</li>
                    <li style="position:relative;margin-bottom:10px;"><span id="business-step2" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#fff; margin-right:10px; position:relative; z-index:11;"></span> Trade / Export Info.</li>
                    <li style="position:relative;"><span id="business-step3" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#fff; margin-right:10px; position:relative; z-index:11;"></span>Certificates</li>
                </ul>
            </div>
        </div>
        <div class="col-md-10" style="padding-top:5%;">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="col-xs-3 col-md-2"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Account</span></div>
                    <div class="col-xs-3 col-md-2 text-center"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Profile</span></div>
                    <div class="col-xs-3 col-md-3 text-center"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Business Information</span></div>
                    <div class="col-xs-3 col-md-5 text-right"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Complete</span></div>
                </div>
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="col-xs-12 " style="margin-top:20px;">
                        <div class="row" style="position:relative; margin:0px;">
                            <div class="col-xs-12" style="position:relative;">
                                <div class="horizontal-step" style="position:absolute; margin:auto; left:0px; right:0px; top:7px; height:8px;width:95%; overflow:hidden; background:#fff; border-radius:50px;">
                                    <div style="height:8px; width:60%; background:#F05539" id="main-steps"></div>
                                </div>
                                <span style="color:#F05539;font-family:Arial;font-size:19px;position:absolute; right:-35px;" id="count">60 %</span> </div>
                            <div class="col-xs-3 col-md-2"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-2 text-center"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-3 text-center"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-5 text-right"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#FFFFFF; margin-right:0px; position:relative; z-index:11;"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="<?php echo base_url(); ?>account/save_factory_details" method="post" onsubmit="return validateFactoryInfo();">
                <div class="row" id="step3">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1" style="margin-top:50px;">
                        <div class="row" style="margin-top:50px;">
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <h1 class="col-md-12"><span style="color:#F05539;font-family:Georgia;font-size:13px;"> Factory Details</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Location In English</span></label>
                                    <div class="col-md-8" style="padding-right:2px;">
                                        <div class="row">
                                            <div class="col-xs-6" >
                                                <input type="text" name="province" id="province" class="Combobox2" placeholder=" Province " style="height:35px">
                                            </div>
                                            <div class="col-xs-6" >
                                                <input type="text" class="Combobox2"  name="city" id="city" placeholder=" City " style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 compant-titel " style="padding-left:2px">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="text" name="street" id="street" class="Combobox2" placeholder="Street, Building No." style="height:35px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Location In License Language</span></label>
                                    <div class="col-md-8" style="padding-right:2px;">
                                        <div class="row">
                                            <div class="col-xs-6" >
                                                <input type="text" name="license_province" id="license_province" class="Combobox2" placeholder="Province" style="height:35px">
                                            </div>
                                            <div class="col-xs-6" >
                                                <input type="text" name="license_city" id="license_city" class="Combobox2" placeholder="City" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5 compant-titel " style="padding-left:2px">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <input type="text"  name="license_street" id="license_street" class="Combobox2" placeholder="Street, Building No." style="height:35px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="col-md-3" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Tel</span></label>
                                    <div class="col-md-9 tel-box" style="padding-right:0px; padding-left:35px">
                                        <div class="row">
                                            <div class="col-xs-3" style="padding-right:2px;" >
                                                <input type="text" name="code" id="code" class="Combobox2" placeholder=" Code " style="height:35px">
                                            </div>
                                            <div class="col-xs-4" style="padding-left:2px; padding-right:2px;">
                                                <input type="text" name="city_code" id="city_code" class="Combobox2" placeholder=" City Code" style="height:35px">
                                            </div>
                                            <div class="col-xs-5" style="padding-left:2px;" >
                                                <input type="text" name="telephone" id="telephone" maxlength="12" class="Combobox2" placeholder=" Tel #" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">  Factory Size</span></label>
                                    <div class="col-md-7 time-div" style="padding-right:2px; padding-left:35px;">
                                        <div class="row">
                                            <div class="col-xs-12" >
                                                <select id="factory_size" name="factory_size" class="Combobox2" size="1" name="Combobox1">
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
                            <div class="col-md-7 fax-box" style="padding-left:2px">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> No. Of Production line </span></label>
                                        <div class="col-xs-12 col-md-2" style="padding-left:0px;">
                                            <input type="number" name="no_of_production_line" min="0" step="1" id="no_of_production_line" class="Combobox2" placeholder="" style="height:35px">
                                        </div>

                                        <label class="col-md-4 col-xs-12" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">  Production Lead Time (Days) </span></label>
                                        <div class="col-xs-12 col-md-2" style="padding-left:0px;">
                                            <input type="number" name="production_lead_time" min="0" step="1" id="production_lead_time" class="Combobox2" placeholder="" style="height:35px">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="col-md-5" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">No. Of Research & Development Staff</span></label>
                                    <div class="col-md-7 time-div" style="padding-right:2px; padding-left:35px;">
                                        <div class="row">
                                            <div class="col-xs-12" >
                                                <input type="number" name="r_d_staff" id="r_d_staff" min="0" step="1" class="Combobox2" placeholder="" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 fax-box" style="padding-left:2px">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-5" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> No. Of Quality Control Staff</span></label>
                                        <div class="col-xs-12 col-md-5" style="padding-left:0px;">
                                            <input type="number" name="quality_control_stff" id="quality_control_stff" min="0" step="1" class="Combobox2" placeholder="" style="height:35px">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="col-md-3" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">&nbsp;</span><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> R&D Capacity</span></label>
                                    <div class="col-md-9 po-box" style="padding-right:2px; padding-left:35px;">
                                        <div class="row">
                                            <div class="col-xs-6 col-md-2" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="rndtype[]" value="1" class="rndcap" type="checkbox">OEM
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6 col-md-2">
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="rndtype[]" value="2" class="rndcap"  type="checkbox"> ODM
                                                    </label>
                                                </div>                   
                                            </div>
                                            <div class="col-xs-6 col-md-4" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="rndtype[]"  value="3" class="rndcap" type="checkbox"> Own Brand
                                                    </label>
                                                </div>

                                            </div>
                                            <div class="col-xs-6 col-md-4" style="padding-left:2px;" >
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="rndtype[]" onclick="otherfield(this);"  id="otherrnd"  value="4" class="rndcap" type="checkbox"> Other
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
	                                         <div style="display: none;" id="rndErr">
	                                            <h1><span style="color:#F05539;font-family:Georgia;font-size:13px;"> Please select atleast one R&D Capacity.</span></h1>
	                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 fax-box" style="padding-left:2px;">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-xs-12 col-md-9" style="padding-left:0px;">
                                            <input type="text" id="other_r_d_capacity" name="other_r_d_capacity" class="Combobox2" placeholder="" style="height:35px;display:none;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="col-md-5 col-xs-12" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Annual Turnover</span></label>
                                    <div class="col-md-7 time-div" style="padding-right:2px; padding-left:35px;">
                                        <div class="row">
                                            <div class="col-xs-12" >
                                                <input type="text" id="annual_turnover" name="annual_turnover" class="Combobox2" placeholder="" maxlength="12" style="height:35px">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 fax-box" style="padding-left:2px">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="col-md-3" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Million USD</span></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top:30px;">
                            <div class="col-sm-12">
                                <div class="form-group text-center" id="next3"> 
                                    <!--<a href="#" class="btn"><img src="<?php echo asset_url(); ?>images/ts/img1190.gif"></a>--> 
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
<script>
function otherfield(chkelement)
{
	if (chkelement.checked) {
		document.getElementById('other_r_d_capacity').style.display = 'block';
		document.getElementById('other_r_d_capacity').value = "";
	} else {
		document.getElementById('other_r_d_capacity').style.display = 'none';
		document.getElementById('other_r_d_capacity').value = "";
	}
	
}

</script>
