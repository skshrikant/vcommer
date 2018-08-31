
<?php $this->load->view('default/header_after_login'); ?>
<?php if($registration_step >= 5) { 
		redirect(base_url());
 } ?>
   
 
 
<div class="container" style="background:#f1f1f1;">
    <div class="row">
        <div class="col-md-2" style="background:#DCDCDC; padding-top:10%; padding-bottom:100%;">
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
                <h1 class="text-center"><span style="color:#2D2D2D;font-family:Georgia;font-size:19px;">Buisness Info</span></h1>
                <ul style="list-style:none; position:relative; padding-left:30px;">
                <div style="position:absolute; margin:auto; margin-left:4px; top:7px; height:89% ;width:5px; overflow:hidden; background:#fff; border-radius:50px;">
                     <div style="height:85%; width:5px; background:#F05539" id="business-steps"></div>
                 </div>
                    <li style="position:relative; margin-bottom:10px;"> <span style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>General Info.</li>
                    <?php if($tscategory_id == 1) { ?>
		                    <li style="position:relative; margin-bottom:10px;"><span id="business-step1" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span> Factory Details</li>
		                    <li style="position:relative;margin-bottom:10px;"><span id="business-step2" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span> Trade / Export Info.</li>
		            <?php }?> 
		            <li style="position:relative;"><span id="business-step3" style="display:inline-block; width:13px; height:13px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span>Certificates</li>
                </ul>
            </div>
        </div>
        <div class="col-md-10" style="padding-top:5%;">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="col-xs-3 col-md-2"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Account</span></div>
                    <div class="col-xs-3 col-md-2 text-center"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Profile</span></div>
                    <div class="col-xs-3 col-md-3 text-center"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Buisness Information</span></div>
                    <div class="col-xs-3 col-md-5 text-right"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Complete</span></div>
                </div>
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="col-xs-12 " style="margin-top:20px;">
                        <div class="row" style="position:relative; margin:0px;">
                            <div class="col-xs-12" style="position:relative;">
                                <div class="horizontal-step" style="position:absolute; margin:auto; left:0px; right:0px; top:7px; height:8px;width:95%; overflow:hidden; background:#fff; border-radius:50px;">
                                    <div style="height:8px; width:90%; background:#F05539" id="main-steps"></div>
                                </div>
                                <span style="color:#F05539;font-family:Arial;font-size:19px;position:absolute; right:-35px;" id="count">90 %</span> </div>
                            <div class="col-xs-3 col-md-2"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-2 text-center"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-3 text-center"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#F05539; margin-right:10px; position:relative; z-index:11;"></span></div>
                            <div class="col-xs-3 col-md-5 text-right"><span style="display:inline-block; width:20px; height:20px; border-radius:50%; background:#FFFFFF; margin-right:0px; position:relative; z-index:11;"></span></div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="step5">
                <form method="post" action="<?php echo base_url(); ?>account/save_certificate_info" name="certificate" onsubmit="return validateCertificateInfo();" enctype="multipart/form-data">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1" style="margin-top:50px;">
                        <div class="row" style="margin-top:50px;">
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <h1><span style="color:#F05539;font-family:Georgia;font-size:13px;"> Certificates & License</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 col-xs-12 col-sm-12">
                                <div class="form-group" style="margin-bottom:5px;">
                                    <div class="row">
                                        <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Business/Industry Certificate/License</span></label>
                                        <div class="col-md-6" style="padding-right:2px;">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <input id="license" name="license" type="text" style="height:35px" placeholder=" Registration No. " class="Combobox2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    <div class="row">
                                        <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Start Date</span></label>
                                        <div class="col-md-6" style="padding-right:2px;">
                                            <div class="row">
                                                <div class="col-xs-10">
                                                    <input id="start_datepicker" name="start_date" type="text" style="height:35px" placeholder=" Start From " class="Combobox2">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    <div class="row">
                                        <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Renewal Date</span></label>
                                        <div class="col-md-6" style="padding-right:2px;">
                                            <div class="row">
                                                <div class="col-xs-10">
                                                    <input id="end_datepicker" name="end_date" type="text" style="height:35px" placeholder=" Renewal Date " class="Combobox2">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            
                            <div class="col-xs-12 col-sm-6 col-md-2" style="padding:0px;">
                            	<div class="col-sm-6" style="margin-bottom:5px;padding: 0px;padding-right:3px;">
                            		<input name="certificateImage[]" type='file'   style="cursor: pointer"     class="upladImg" id="certimgupload1"  onchange="readMyCertImageURL(this,'certimgupload1');" accept=".png,.gif,.jpeg,.jpg,.bmp"/><br>
                            		<span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;" onclick="removeMyCertURL('certimgupload1');">Remove</span>
                            	</div>
                            	<div class="col-sm-6" style="margin-bottom:5px;padding: 0px;padding-right:3px;">
                            		<input name="certificateImage[]" type='file' style="cursor: pointer"   class="upladImg" id="certimgupload2" onchange="readMyCertImageURL(this,'certimgupload2');" accept=".png,.gif,.jpeg,.jpg,.bmp"/><br>
                            		<span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;" onclick="removeMyCertURL('certimgupload2');">Remove</span>
                            	</div>
                            	<div class="col-sm-6" style="padding: 0px;padding-right:3px;">
                            		<input name="certificateImage[]" type='file'  style="cursor: pointer"   class="upladImg" id="certimgupload3" onchange="readMyCertImageURL(this,'certimgupload3');" accept=".png,.gif,.jpeg,.jpg,.bmp"/><br>
                            		<span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;" onclick="removeMyCertURL('certimgupload3');">Remove</span>
                            	</div>
                            	<div class="col-sm-6" style="padding: 0px;padding-right:3px;">
                            		<input name="certificateImage[]" type='file'  style="cursor: pointer"   class="upladImg" id="certimgupload4" onchange="readMyCertImageURL(this,'certimgupload4');" accept=".png,.gif,.jpeg,.jpg,.bmp"/>
                            		<span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;" onclick="removeMyCertURL('certimgupload4');">Remove</span>
                            	</div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3" style="padding-left: 15px;">
                                <p><span style="color:#F70004">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:11px;">Upload a clear copy of your certificates</span></p>
                                <p><span style="color:#666666;font-family:Arial;font-size:9.3px;">jpg or png,bmp, pdf Resolution: 75, with Max. size 500 KB. <br>You can upload up to 4 images one time</span><br><!--  span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;" onclick="removeCertImage();">Remove</span--></p>
                            </div>
                        </div>

                        <div class="row" style="margin-top:10px;">
                            <div class="col-md-9 col-xs-12 col-sm-12">
                                <div class="form-group" style="margin-bottom:5px;">
                                    <div class="row">
                                        <label class="col-md-3 text-right" style="padding-top:5px; font-weight:normal;"><span style="color:#F70004">*</span></label>
                                        <div class="col-md-9" style="padding-right:2px;">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <textarea maxlength="4000" cols="70" rows="8" placeholder="Type the scope of your business/Industry mentioned in licnese" style="height:118px;" class="TextArea1" name="scope" id="scope"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <p><img src="<?php echo asset_url(); ?>images/ts/Clock.png" style="width:15px;"></p>
                                <p><span style="color:#808080;font-family:Arial;font-size:9.3px;">Your will be requested to renew your business certificate documents ( dates, inforamtions and images) after expiry date..</span></p>
                            </div>
                        </div>

                        <div class="row" style="margin-top:20px;">
                            <div class="col-sm-12">
                                <div class="form-group ">
                                    <h1><span style="color:#F05539;font-family:Georgia;font-size:13px;">More Certificates / License</span></h1>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 col-xs-12 col-sm-12">
                                <div class="form-group" style="margin-bottom:5px;">
                                    <div class="row">
                                        <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">More Certificate</span></label>
                                        <div class="col-md-6" style="padding-right:2px;">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <select style="width:100%;height:25px;z-index:63;" class="Combobox2" size="1" name="certificate[]">
                                                        <option value="0">--Please Select Type--</option>
                                                       	<?php foreach($certificate_type as $row) { ?>
                                                       	<option value="<?php echo $row['id'];?>"><?php echo $row['certificate_type'];?></option>
                                                       	<?php }?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    <div class="row">
                                        <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Name</span></label>
                                        <div class="col-md-6" style="padding-right:2px;">
                                            <div class="row">
                                                <div class="col-xs-10">
                                                    <input name="certificate_name[]" type="text" style="height:35px" placeholder="" class="Combobox2">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:5px;">
                                    <div class="row">
                                        <label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Reference No.</span></label>
                                        <div class="col-md-6" style="padding-right:2px;">
                                            <div class="row">
                                                <div class="col-xs-10">
                                                    <input name="certificate_reference_no[]" type="text" style="height:35px" placeholder="" class="Combobox2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-2">
                            	<input name="moreCertificateImage[]" type='file'   style="cursor: pointer"  class="upladImg morecertimgupload" id="morecertimgupload-1"  style="border:none;" accept=".png,.gif,.jpeg,.jpg,.bmp"/>
                            	<img id="blah-1" src="#" onclick="changecertimg(1);" style="display: none;height:100px;width:100px;" />
                            	<input type="hidden" id="blahpath-1" name="blahpath-1" value="" />
                            	<input type="hidden" id="totalmorecertificatecount" name="totalmorecertificatecount" value="1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3" style="padding-left:15px;">
                                <p><span style="color:#3C3C3C;font-family:Georgia;font-size:11px;">Upload a clear copy of your certificate</span></p>
                                <p><span style="color:#666666;font-family:Arial;font-size:9.3px;">jpg or png,bmp, pdf Resolution: 75, with Max. size 500 KB.</span><br><span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;" onclick="removeMoreCertURL(1);">Remove</span></p>
                            </div>
                        </div>
                        
                        <div id="more_cers_area">
                        
                        </div>

                        <div class="row" style="margin-top:30px;">
                            <div class="col-sm-12">
                                <div class="form-group text-center">  
                                    <a href="javascript:addMoreCers();" class="btn pull-left"><img src="<?php echo asset_url(); ?>images/add.png">
                                        <span style="color:#F05539;font-family:Georgia;font-size:13px;">Add More </span></a>
                                        <!--<a href="#" class="btn pull-right"id="next5"><img src="<?php echo asset_url(); ?>images/ts/img1190.gif"></a>--> 
                                    <button type="submit" class="btn pull-right" style="padding:0px;">
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
				<h3>Add Certificate</h3>
			</div>
			<div class="modal-body">
				<form id="cropimage" method="post" enctype="multipart/form-data" action="">
						<strong>Upload Image:</strong> <br><br>
						<input type="file" name="certificateImage[]" id="certificateImage"  multiple="multiple"  accept=".png,.jpg,.jpeg.gif"/>
						<input type="hidden" name="x1" id="x1" value="" />
				        <input type="hidden" name="y1" id="y1" value="" />
				        <input type="hidden" name="x2" id="x2" value="" /> 
				        <input type="hidden" name="y2" id="y2" value="" />
				        <input type="hidden" name="width" id="width" value="" />
				        <input type="hidden" name="height" id="height" value="" />
				      	<!--  <input type="hidden" name="fullpath" id="fullpath" value="<?php //echo asset_url();?>" /> -->
						<input type="hidden" name="image_name" value="" id="image_name" />
						<img id="photo" src="#" alt="" title="" style="height:200px; width:200px;display:none" />
						<br>
						<input type="hidden" name="xx1" id="xx1" value="" />
				        <input type="hidden" name="yy1" id="yy1" value="" />
				        <input type="hidden" name="xx2" id="xx2" value="" /> 
				        <input type="hidden" name="yy2" id="yy2" value="" />
				        <input type="hidden" name="width1" id="width1" value="" />
				        <input type="hidden" name="height1" id="height1" value="" />
						<input type="hidden" name="image_name1" value="" id="image_name1" />
						<img id="photo1" src="#" alt="" title="" style="height:200px; width:200px;display:none" />
						<br>
						<input type="hidden" name="xxx1" id="xxx1" value="" />
				        <input type="hidden" name="yyy1" id="yyy1" value="" />
				        <input type="hidden" name="xxx2" id="xxx2" value="" /> 
				        <input type="hidden" name="yyy2" id="yyy2" value="" />
				        <input type="hidden" name="width12" id="width12" value="" />
				        <input type="hidden" name="height12" id="height12" value="" />
						<input type="hidden" name="image_name2" value="" id="image_name2" />
						<img id="photo2" src="#" alt="" title="" style="height:200px; width:200px;display:none" />
						<br>
						<input type="hidden" name="xxxx1" id="xxxx1" value="" />
				        <input type="hidden" name="yyyy1" id="yyyy1" value="" />
				        <input type="hidden" name="xxxx2" id="xxxx2" value="" /> 
				        <input type="hidden" name="yyyy2" id="yyyy2" value="" />
				        <input type="hidden" name="width13" id="width13" value="" />
				        <input type="hidden" name="height13" id="height13" value="" />
						<input type="hidden" name="image_name3" value="" id="image_name3" />
						<img id="photo3" src="#" alt="" title="" style="height:200px; width:200px;display:none" />
						<br>
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

<div id="morecertificate_modal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Add More Certificate</h3>
			</div>
			<div class="modal-body">
				<form id="frmcertificate" method="post" enctype="multipart/form-data" action="">
						<strong>Upload Image:</strong> <br><br>
						<input type="file" name="morecertificatefile-pic" id="morecertificatefile-pic"  onchange="morecertificatefilechange();" accept=".png,.jpg,.jpeg.gif"/>
						<input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
						<input type="hidden" name="morex1" id="morex1" value="" />
				        <input type="hidden" name="morey1" id="morey1" value="" />
				        <input type="hidden" name="morex2" id="morex2" value="" /> 
				        <input type="hidden" name="morey2" id="morey2" value="" />
				        <input type="hidden" name="morewidth" id="morewidth" value="" />
				        <input type="hidden" name="moreheight" id="moreheight" value="" />
				        <input type="hidden" name="targetimage" id="targetimage" value="" />
				        
				      	<!--  <input type="hidden" name="fullpath" id="fullpath" value="<?php //echo asset_url();?>" /> -->
						<input type="hidden" name="image_name" value="" id="morecerti_image_name" />
						<img id="morecertiphoto" src="#" alt="" title="Nature" style="height:200px; width:200px;display:none" />
						<div id="thumbs" style="padding:5px; width:600px"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="save_morecerticrop" class="btn btn-primary">Crop & Save</button>
			</div>
		</div>
	</div>
</div>

<div id="modal-openimagepopup" tabindex="-1" role="dialog"
			aria-labelledby="modal-login-label" aria-hidden="true"
			class="modal fade">
			<div class="modal-dialog" style="width: 94%;">
				<div class="modal-content">
					<div class="modal-header"
						style="color: #FFF; background: none repeat scroll 0% 0% #F2994B; border-color: #F2994B">
						<h3 id="modal-login-label" class="web_dialog_title">
							<button type="button" data-dismiss="modal" aria-hidden="true"
								class="close">&times;</button>
							<b><label id="titlepopup" class="control-label">Imagefile </label> </b>
						</h3>
					</div>
					<div class="modal-body">
						<table style="width: 100%; border: 0px;" cellpadding="1" cellspacing="0">
							<tr>
								<td colspan="2" style="padding-left: 15px;">
									<form action="" method="post" enctype="multipart/form-data">
										<div id="main" Style="">
											
										</div>
									</form>
								</td> 
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>

<input type="hidden" name="certs_count" id="certs_count" value="1"/>
<script>
function addMoreCers() {
	var cert_count = parseInt($("#certs_count").val());
	cert_count++;
	var count = parseInt($("#totalmorecertificatecount").val());
	var html = '<div class="row" id="certs-no-'+cert_count+'"><hr style="border-top: 1px solid #fff;"><a class="pull-right" href="javascript:removeCerts('+cert_count+');"><img src="<?php echo asset_url();?>images/Error.png"/></a>'
              +'<div class="col-md-7 col-xs-12 col-sm-12">'
              +'<div class="form-group" style="margin-bottom:5px;">'
              +'<div class="row">'
              +'<label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">More Certificate</span></label>'
              +'<div class="col-md-6" style="padding-right:2px;">'
              +'<div class="row">'
              +'<div class="col-xs-12">'
              +'<select style="width:100%;height:25px;z-index:63;" class="Combobox2" size="1" name="certificate[]">'
              +'<option value="0">--Please Select Type--</option>'
              +'<option value="1">Management System Certifications</option>'
              +'<option value="2">Product Certifications / Test Report</option>'
              +'<option value="3">License</option>'
              +'<option value="4">Intellectual Property Rights/Copy Right</option>'
              +'<option value="5">Honor</option>'
              +'</select>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'<div class="form-group" style="margin-bottom:5px;">'
              +'<div class="row">'
              +'<label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Name</span></label>'
              +'<div class="col-md-6" style="padding-right:2px;">'
              +'<div class="row">'
              +'<div class="col-xs-10">'
              +'<input name="certificate_name[]" type="text" style="height:35px" placeholder="" class="Combobox2">'
              +'</div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'<div class="form-group" style="margin-bottom:5px;">'
              +'<div class="row">'
              +'<label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Reference No.</span></label>'
              +'<div class="col-md-6" style="padding-right:2px;">'
              +'<div class="row">'
              +'<div class="col-xs-10">'
              +'<input name="certificate_reference_no[]" type="text" style="height:35px" placeholder="" class="Combobox2">'
              +'</div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'<div class="col-xs-12 col-sm-6 col-md-2">'
              +'<input name="moreCertificateImage[]" type="file" style="border:none;cursor: pointer;" class="upladImg morecertimgupload" id="morecertimgupload-'+cert_count+'" accept=".png,.gif,.jpeg,.jpg,.bmp" >'
              +'<img id="blah-'+cert_count+'" src="#" onclick="changecertimg('+cert_count+');"   style="display: none;height:100px;width:100px">'
              +'<input type="hidden" id="blahpath-'+count+'" name="blahpath-'+count+'" value="" />'
              +'</div>'
              +'<div class="col-xs-12 col-sm-6 col-md-3">'
              +'<p><span style="color:#3C3C3C;font-family:Georgia;font-size:11px;">Upload a clear copy of your certificate</span></p>'
              +'<p><span style="color:#666666;font-family:Arial;font-size:9.3px;">jpg or png,bmp, pdf Resolution: 75, with Max. size 500 KB.</span><br><span style="color:#1E90FF;font-family:Georgia;font-size:11px;" onclick="removeMoreCertURL('+cert_count+');">Remove</span></p>'
              +'</div>'
              +'</div>';
    $("#more_cers_area").append(html);
    count++;
    $("#totalmorecertificatecount").val(count);
    
    $("#certs_count").val(cert_count);
    $(".morecertimgupload").change(function (){
    	if (this.files && this.files[0]) {
        	var inps = $(this).attr('id').split("-");
            var reader = new FileReader();
            reader.onload = function (e) {
            	$('#morecertimgupload-'+inps[1]).css('display', 'none');
                $('#blah-'+inps[1]).show();
                $('#blah-'+inps[1]).attr('src', e.target.result).css('width', '120px').css('height', '120px');
            }
            reader.readAsDataURL(this.files[0]);
        }
  	});
}

function removeCerts(id) {
	$("#certs-no-"+id).remove();
	var count = parseInt($("#totalmorecertificatecount").val());
    count--;
    $("#totalmorecertificatecount").val(count);
}

function openfile(src)
{
	alert(src);
}
function changecertimg(id)
{
	$('#morecertimgupload-'+id).trigger('click');
}

function readMyCertImageURL(input,id) {
	if (input.files && input.files[0]) {
		var name = input.files[0].name;
        var extension = name.replace(/^.*\./, '');
        var file_size = parseInt(input.files[0].size);
   		var filesizeinkb = (file_size/1024);
   		if(filesizeinkb <= 500) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	if(extension == "pdf") {
	            	$('#'+id).css('background-image', 'url(../assets/images/pdfimg.png)').css('background-size','cover').css('width', '60px').css('height', '60px');
	            } else {
	            	$('#'+id).css('background-image', 'url('+e.target.result+')').css('width', '60px').css('height', '60px');
	            }
	        };
	        reader.readAsDataURL(input.files[0]);
   		} else {
   			alert("File size should be 500kb max.");
   			$('#'+id).val('');
   		}
	}
}

function removeMyCertURL(id) {
	$('#'+id).css("background-image", "url(<?php echo asset_url();?>images/ts/img1237.png)").css('width', '100%').css('height', '60px');
	$('#'+id).val('');
}

</script>
