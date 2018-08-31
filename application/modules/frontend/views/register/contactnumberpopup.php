<style>
<!--
.btn-custom {
	background-color: #ff6347;
    padding: 7px 60px;
    color: #fff;
    font-size: 14px;
    border-radius: 0px;
}
.btn-custom:hover{
	background-color: #f5f5f5;
    padding: 7px 60px;
    color: #ff6347;
    font-size: 14px;
    border-radius: 0px;
    border:1px solid #ff6347;
}
.form-custom-input {
	border-radius: 0px;
}
.custom-row {
	margin-bottom: 8px;
}
-->
</style>
<form name="addcontact" id="addcontact" action="" method="post">
						<div class="row info-row">
										  	<div class="col-md-12">
					                                <div class="form-group">
					                                	<div class="col-md-6">
					                                		<input type='button'  name="contact_personeimg"   id="change-contactprofile-pic" style="background: url('<?php echo asset_url(); ?>images/img1186.png') center center no-repeat;border:none;width:100px;height:100px;" />
					                                		<img id="imgcontactperson" src=""  onclick="contactpersonchange();"  class="img-circle" style="display:none;width:100px;height:100px;"/>
					                                		<input type="hidden"  onchage="revalidatepath();" name="contact_imgpath"  value="" id="contact_imgpath"/>
					                                    </div>
					                                    <div class="messageContainer"></div>
					                                    <div class="col-md-6">
					                                            	<div id="wb_Text85" style="width:215px;height:14px;z-index:362;text-align:left;">
																	<span style="color:#3C3C3C;font-family:Georgia;font-size:11px;">Add the contact person profile image</span></div>
																	<div id="wb_Text86" style="width:209px;height:24px;z-index:364;text-align:left;">
																	<span style="color:#666666;font-family:Arial;font-size:9.3px;">jpg or png, Dimensions: 200 * 200 pixel, Resolution: 75, with Max. size 40 KB </span></div>
					                                                <div id="wb_Text87" style="width:157px;height:14px;text-align:left;">
																	<a href="#"  onclick="remove_contact_profile_pic();" ><span style="color:#1E90FF;font-family:Georgia;font-size:11px;">Remove</span></a></div>
					                                    </div>
					                                </div>
					                            </div>
					                       </div><br><br>
											<div class="row info-row custom-row">
											  	<div class="col-md-12">
						                                <div class="form-group">
						                                    <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><span style="color: red">*</span>  Name</span></label>
						                                    <div class="col-md-8">
						                                        <div class="row">
						                                            <div class="col-sm-3" style="padding-right:0px;">
						                                                <select name="contactpersoneprefix"  id="Combobox2" class="Combobox2 form-custom-input" size="1" id="Combobox1" style="width:48px;height:34px;">
						                                                    <option value="Mr" >Mr.</option>
						                                                    <option value="Miss" >Miss.</option>
						                                                    <option value="Mrs" >Mrs.</option>
						                                                    <option value="Ms" >Ms.</option>
						                                                </select>
						                                            </div>
						                                            <div class="messageContainer"></div>
						                                            <div class="col-sm-9" >
						                                                <input type="text" class="form-control form-custom-input" name="contactpersone_name"   placeholder="Name"  value="" style="height:35px">
						                                            </div>
						                                            <div class="messageContainer col-sm-offset-3" style="padding-left:15px;"></div>
						                                        </div>
						                                    </div>
						                                </div>
						                            </div>
						                       </div>
												<div class="row info-row custom-row">
												  	<div class="col-md-12">
							                                <div class="form-group">
							                                    <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><span style="color: red">*</span>  Email</span></label>
							                                    <div class="col-md-8">
							                                       <input type="text" class="form-control form-custom-input" name="contact_person_email"   placeholder="Email"   value="" style="height:35px">
							                                    </div>
							                                    <div class="messageContainer col-sm-offset-4" style="padding-left:15px;"></div>
							                                </div>
							                            </div>
							                     </div>
												<div class="row info-row custom-row">
												  	<div class="col-md-12">
							                                <div class="form-group">
							                                    <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><span style="color: red">*</span>  Password</span></label>
							                                    <div class="col-md-8">
							                                       <input type="password" class="form-control form-custom-input" name="text_password"   placeholder="Password"   value="" style="height:35px">
							                                    </div>
							                                    <div class="messageContainer col-sm-offset-4" style="padding-left:15px;"></div>
							                                </div>
							                            </div>
							                     </div>
												<div class="row info-row custom-row">
												  	<div class="col-md-12">
							                                <div class="form-group">
							                                    <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><span style="color: red">*</span>  Confirm Password</span></label>
							                                    <div class="col-md-8">
							                                       <input type="password" class="form-control form-custom-input"  name="confirm_password"   placeholder="Confirm Password"   value="" style="height:35px">
							                                    </div>
							                                    <div class="messageContainer col-sm-offset-4" style="padding-left:15px;"></div>
							                                </div>
							                            </div>
							                     </div>
							                      <div class="row info-row custom-row">
												  	<div class="col-md-12">
							                                <div class="form-group">
							                                    <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><span style="color: red">*</span>  Mobile</span></label>
							                                    <div class="col-md-8">
							                                        <div class="row">
							                                            <div class="col-sm-4 " style="padding-right:0px;">
							                                            	<div>
							                                               	 	<input type="text" class="form-control form-custom-input" name="contact_person_code"  placeholder="Code" value="" style="height:35px">
							                                               	 </div>
							                                               	 <div class="messageContainer"></div>
							                                            </div>
							                                            <div class="col-xs-8" style="padding-left:5px;">
							                                                <input type="text" class="form-control form-custom-input" name="contact_person_mobile"  maxlength="12"  placeholder="Mobile" value="" style="height:35px">
							                                            </div>
							                                            <div class="messageContainer col-sm-offset-4" style="padding-left:15px;"></div>
							                                        </div>
							                                    </div>
							                                </div>
							                            </div>
							                       </div>
							                     <div class="row info-row custom-row">
												  	<div class="col-md-12">
							                                <div class="form-group">
							                                    <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"><span style="color: red">*</span>  Position/Title</span></label>
							                                    <div class="col-md-8">
							                                       <input type="text" class="form-control form-custom-input" name="contact_person_position" placeholder="Position/Title"  value="" style="height:35px">
							                                    </div>
							                                    <div class="messageContainer col-sm-offset-4" style="padding-left:15px;"></div>
							                                </div>
							                        </div>
							                 </div><br>
										 <div class="row info-row">
										  	<div class="col-md-offset-4 col-md-8" >
					                                <div class="form-group" style="padding-left:5px;">
					                                    	<button type="submit"  name="btn_savecontact" class="btn btn-lg btn-custom" >CREATE</button>
					                                </div>
					                            </div>
					                     </div>
					                    </form> 