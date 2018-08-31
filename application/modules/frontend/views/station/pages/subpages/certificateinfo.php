<style>
.custom_certiformgroup {
padding-bottom:6px;
}
</style>
<style>
      ul.myudtalk {         
          padding:0 0 0 0;
          margin:0 0 0 0;
      }
      ul.myudtalk li {     
          list-style:none;
          margin-bottom:25px;           
      }
      ul.myudtalk li img {
          cursor: pointer;
      }
      .modal-body-certs {
          padding:5px !important;
      }
      .modal-content-certs {
          border-radius:0;
      }
      .modal-dialog-certs img {
          text-align:center;
          margin:0 auto;
          width: 100%;
      }
    .controls{          
        width:50px;
        display:block;
        font-size:11px;
        padding-top:8px;
        font-weight:bold;          
    }
    .next {
         float:right; 
         text-align:right; 
       
/*         background-color: #4CAF50; */
/*     	color: white; */
    }
    .next:hover { 
    background-color: #FF6347;
    color:white;
    }
    .previous:hover { 
    background-color: #FF6347;
    color:white;
    }
    .previous {
    background-color: #f1f1f1;
    color: black;
    
	}
      /*override modal for demo only*/
      .modal-dialog-certs {
          max-width:500px;
          padding-top: 90px;
      }
      @media screen and (min-width: 768px){
          .modal-dialog-certs {
              width:500px;
              padding-top: 90px;
          }          
      }
      @media screen and (max-width:1500px){
          #ads {
              display:none;
          }
      }
div.pp_overlay {
	z-index:12800 !important;
}
div.pp_pic_holder {
	z-index:12801 !important;
	/*overflow:scroll;*/
}
  </style>

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
<!-- <script src="<?php echo asset_url();?>js/photo-gallery.js"></script> -->
<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="<?php echo asset_url();?>js/prettyPhoto/css/prettyPhoto.css">
<script src="<?php echo asset_url();?>js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<form name="frmeditcertificateinfo" method="post" action="" enctype="multipart/form-data" id="frmeditcertificateinfo">
	<div class="panel-heading custom-panel-heading">
	  		<a href="javascript:openCertificateInfoEditForm();" class="btn btn-default btn-custom" id="certificate_edit_btn">EDIT</a>
	  		<a href="javascript:openCertificateInfo();" class="btn btn-default btn-custom" id="certificate_info_btn">RESET</a>
<!-- 	  		<a href="javascript:saveCertificateInfo();" class="btn btn-default btn-custom">SAVE</a> -->
			<input type="submit" class="btn btn-default btn-custom" name="savecertificatebtn" id="savecertificatebtn"  style="display:none"  value="SAVE"/>
	  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer164', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
	  	</div>
			<div class="panel-body panel-body-custom" id="account_certificate_info">
				<div class="personal_info_div" id="certificate_info_div">
					<div class="row">
						<div class="col-sm-offset-1 col-sm-10">
							<div style="padding-top: 120px;">&nbsp;</div>
							<div class="row info-row">
								<div class="col-sm-4 label-text" style="padding-left: 0px;padding-bottom:20px;">
									<?php 
									
									$imagcertiarray = array();
									$image_type1 = "";
									$image_type2 = "";
									$image_type3 = "";
									$image_type4 = "";
									
									if($certificateinfo[0]['cert_image1'] !="") {
										$image1 = $certificateinfo[0]['cert_image1'];
										$pieces1 = explode(".", $image1);
										$image_type1 = end($pieces1);
										$imagcertiarray[0]['image']= $certificateinfo[0]['cert_image1'];
									}
									if($certificateinfo[0]['cert_image2'] !="") {
										$image2 = $certificateinfo[0]['cert_image1'];
										$pieces2 = explode(".", $image2);
										$image_type2 = end($pieces2);
										$imagcertiarray[1]['image'] = $certificateinfo[0]['cert_image2'];
									}
									if($certificateinfo[0]['cert_image3'] !="") {
										$image3 = $certificateinfo[0]['cert_image3'];
										$pieces3 = explode(".", $image3);
										$image_type3 = end($pieces3);
										$imagcertiarray[2]['image']= $certificateinfo[0]['cert_image3'];
									}
									if($certificateinfo[0]['cert_image4'] !="") {
										$image4 = $certificateinfo[0]['cert_image4'];
										$pieces4 = explode(".", $image4);
										$image_type4 = end($pieces4);
										$imagcertiarray[3]['image'] = $certificateinfo[0]['cert_image4'];
									}
									
									
									//print_r($imagcertiarray);
									
								?>
								
								<ul class="myudtalk">
									<?php foreach ($imagcertiarray as $key=>$image) { ?>
							            <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							            	<div class="card1" id="<?php echo $key;?>">
							            		<a href="<?php echo asset_url().$image['image'];?>" data-rel="prettyPhoto_SlideShow311[SlideShow311]" rel="prettyPhoto_SlideShow311[SlideShow311]">
							               			<img class="img-responsive imageborderclass" src="<?php echo asset_url().$image['image'];?>" style="width: 100px; height: 100px;" />
							               		</a>
							               	</div>
							            </li>
							        <?php } ?>
								 </ul>
								</div>
								<div class="col-sm-8">
									<div class="row info-row">
										<div class="col-sm-12 label-text" style="color: #F05539; font-size: 13px;">Certificates & License</div>
									</div>
									<div class="row info-row">
										<div class="col-sm-4">Business/Industry Certificate/License</div>
										<div class="col-sm-8 label-text-value"><?php echo $certificateinfo[0]['license']?></div>
									</div>
									<div class="row info-row">
										<div class="col-sm-4">Start Date</div>
										<div class="col-sm-8 label-text-value"><?php echo date("j M Y",strtotime($certificateinfo[0]['start_date']));?></div>
									</div>
									<div class="row info-row">
										<div class="col-sm-4">End Date</div>
										<div class="col-sm-8 label-text-value">
											<div class="col-sm-12" style="padding:0px;padding-bottom: 10px;"><?php echo date("j M Y",strtotime($certificateinfo[0]['renwal_date']));?></div>
											<div class="col-sm-1" style="padding:0px;padding-top:0px;">
												<img src="<?php echo asset_url();?>images/Clock.png" width="16px" alt="Expiry Date Alarm" title="Expiry Date Alarm">
											</div>
											<div class="col-sm-9" style="padding:0px;">
												<div><span style="color:#FF0000;font-family:Arial;font-size:9.3px;">ALARM HAS SET<br></span></div>
												<div><span style="font-family:Arial;font-size:9.3px;">Your will be requested to renew your business certificate documents ( dates, inforamtions and images) after expiry date..</span></div>
											</div>
										</div>
									</div>
									<div class="row info-row">
										<div class="col-sm-4">Scope of Business</div>
										<div class="col-sm-8 label-text-value"><?php echo $certificateinfo[0]['scope'];?></div>
									</div>
								</div>
							</div>
							<br><br>
	                  		<?php 
	                  		if(isset($morecertificate)) {
								$count=1;
								foreach ($morecertificate as $row) { ?>
                  					
							<div class="row info-row">
								<div class="col-sm-4 label-text">
									<?php 
									$image_type = "";
									if($row['certificate_url']!="") { 
										$image = $row['certificate_url'];
										$pieces = explode(".", $image);
										$image_type = end($pieces);
									}
								?>
								
								<?php if($image_type == "pdf" or $image_type == "PDF") { ?>
										<object  data="<?php echo asset_url()?><?php echo $row['certificate_url'];?>" style="width: 100px; height: 100px;"  id="pdfimg1" style="border:2px solid grey;" target="_blank"></object>
								<?php } else { ?>
									<a href="<?php echo asset_url().$row['certificate_url'];?>" data-rel="prettyPhoto_SlideShow311[SlideShow311]" rel="prettyPhoto_SlideShow311[SlideShow311]">
									<img alt="certificate" <?php if($row['certificate_url']!="") { ?> src="<?php echo asset_url().$row['certificate_url'];?>"
									<?php } else { ?> src="<?php echo asset_url(); ?>images/img1237.png" <?php }?> class="imageborderclass" style="width: 100px; height: 100px;cursor: pointer;"/>
									</a>
								<?php } ?>	
								<?php if($row['certificate_url']!="") { ?>
									<!--  <a href="#"  style="border:none;" onclick="displayimg('<?php //echo $row['certificate_url']; ?>');" data-toggle="modal" data-target="#modal-openimagepopup" >view</a> -->
								<?php } ?>
								</div>
								<div class="col-sm-8">
									<div class="row info-row">
										<div class="col-sm-4 label-text" style="color: #F05539; font-size: 13px;">More Certificates</div>
										<div class="col-sm-8 label-text-value"><?php echo $row['certificatetype'];?></div>
									</div>
									<!--<div class="row info-row">
										<div class="col-sm-4">Certificate No.</div>
										<div class="col-sm-8 label-text-value"><?php echo $row['certificate_no'];?></div>
									</div>-->
									<div class="row info-row">
										<div class="col-sm-4">Name</div>
										<div class="col-sm-8 label-text-value"><?php echo $row['certificate_name'];?></div>
									</div>
									<div class="row info-row">
										<div class="col-sm-4">Reference No.</div>
										<div class="col-sm-8 label-text-value"><?php echo $row['certificate_no'];?></div>
									</div>
								</div>
							</div>
						<?php $count++; } 
						} ?>	
							<br>
							<br>
							<br>
							<br>
						</div>
					</div>
				</div>
				<div class="edit-div" id="certificate_edit_div" style="display: none;">
						<div class="row">
							<div class="col-sm-offset-1 col-sm-11">
								<div style="padding-top: 50px;">&nbsp;</div>
								<div class="row info-row">
									<div class="col-sm-3 label-text"
										style="color: #F05539; font-size: 13px;">Certificates & License</div>
								</div>
								<div class="row info-row">
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group custom_certiformgroup">
													<div class="control-label label-text-form">Business/Industry Certificate/License</div>
												</div>
											</div>
											<div class="col-sm-8">
												<div class="form-group custom_certiformgroup">
													<div class="label-text-input">
														<input type="hidden" name="data[certificate_id]" value="<?php echo $certificateinfo[0]['id']; ?>" />
														<input id="license" name="data[license]" type="text" value="<?php echo $certificateinfo[0]['license']?>" placeholder="Business/Industry Certificate/License" class="form-control form-custom-input">
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group custom_certiformgroup">
													<div class="control-label label-text-form">Start Date</div>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="form-group custom_certiformgroup">
													<div class="label-text-input">
														<input id="start_datepicker" name="data[start_date]"  value="<?php echo date("m/d/Y",strtotime($certificateinfo[0]['start_date']));?>" type="text" class="form-control form-custom-input">
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group custom_certiformgroup">
													<div class="control-label label-text-form">End Date</div>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="form-group custom_certiformgroup">
													<div class="label-text-input">
														<input id="end_datepicker" name="data[end_date]" type="text"  value=" <?php echo date("m/d/Y",strtotime($certificateinfo[0]['renwal_date']));?>" class="form-control form-custom-input">
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group custom_certiformgroup">
													<div class="label-text-input">
						                            	<div class="row">
							                            	<div class="col-sm-6" style="margin-bottom:5px;padding: 1px;">
							                            		<input name="certificateImage1" type='file' class="upladImgCert" id="certimgupload1" onchange="readCertImageURL1(this);" style="background: url('<?php echo asset_url(); ?>images/img1237.png') center center no-repeat;<?php if($certificateinfo[0]['cert_image1']!="") { ?>display:none;<?php } ?>"/>
							                            		<<?php if($certificateinfo[0]['cert_image1']!="") { ?><?php if(pathinfo($certificateinfo[0]['cert_image1'], PATHINFO_EXTENSION) == 'pdf') { ?>embed<?php } else { ?>img<?php } ?><?php } else { ?>img<?php } ?> id="companycert1" <?php if($certificateinfo[0]['cert_image1']!="") { ?> src="<?php echo asset_url().$certificateinfo[0]['cert_image1'];?>"  <?php } else { ?> src="<?php echo asset_url(); ?>images/img1237.png" <?php } ?> class="imageborderclass"  style="width:80px;height:85px;cursor: pointer;<?php if(empty($certificateinfo[0]['cert_image1'])) { ?>display:none;<?php } ?>"
							                            		onclick="imgtrigger1();"
							                            		/>
							                            <!--  <span class="pull-right" id="rm-cert-1"><a href="javascript:removeCertImageEdit(1);" id="rm-cert-text-1" style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;<?php if(empty($certificateinfo[0]['cert_image1'])) { ?>display:none;<?php } ?>">Remove</a></span> -->
							                            		<span class="pull-right" id="rm-cert-1"><a href="javascript:uploadCertImageEdit(1);" id="up-cert-text-1" style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;<?php if(!empty($certificateinfo[0]['cert_image1'])) { ?>display:none;<?php } ?>">Upload</a></span>
							                            		<input type="hidden" name="data[hcertimage1]" id="hcertimage1"  value="<?php if($certificateinfo[0]['cert_image1'] != "") { echo $certificateinfo[0]['cert_image1'];}?>" />
							                            	</div>
							                                <div class="col-sm-6" style="margin-bottom:5px;padding: 1px;">
							                                	<input name="certificateImage2" type='file' class="upladImgCert" id="certimgupload2" onchange="readCertImageURL2(this);" style="background: url('<?php echo asset_url(); ?>images/img1237.png') center center no-repeat;<?php if($certificateinfo[0]['cert_image2']!="") { ?>display:none;<?php } ?>"/>
							                                	<<?php if($certificateinfo[0]['cert_image2']!="") { ?><?php if(pathinfo($certificateinfo[0]['cert_image2'], PATHINFO_EXTENSION) == 'pdf') { ?>embed<?php } else { ?>img<?php } ?><?php } else { ?>img<?php } ?> id="companycert2"  <?php if($certificateinfo[0]['cert_image2']!="") { ?> src="<?php echo asset_url().$certificateinfo[0]['cert_image2'];?>" <?php } else { ?> src="<?php echo asset_url(); ?>images/img1237.png" <?php } ?> class="imageborderclass"   style="width:80px;height:85px;cursor: pointer;<?php if(empty($certificateinfo[0]['cert_image2'])) { ?>display:none;<?php } ?>"
							                                	onclick="imgtrigger2();"/>
							                            <!--   <span class="pull-right" id="rm-cert-2"><a href="javascript:removeCertImageEdit(2);" id="rm-cert-text-2" style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;<?php if(empty($certificateinfo[0]['cert_image2'])) { ?>display:none;<?php } ?>">Remove</a></span> -->
							                                	<span class="pull-right" id="rm-cert-2"><a href="javascript:uploadCertImageEdit(2);" id="up-cert-text-2" style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;<?php if(!empty($certificateinfo[0]['cert_image2'])) { ?>display:none;<?php } ?>">Upload</a></span>
							                                	<input type="hidden" name="data[hcertimage2]" id="hcertimage2" value="<?php if($certificateinfo[0]['cert_image2'] != "") { echo $certificateinfo[0]['cert_image2'];}?>" />
							                                </div>
							                          	</div>
							                          	<div class="row">
							                                <div class="col-sm-6" style="padding: 1px;">
							                                	<input name="certificateImage3" type='file' class="upladImgCert" id="certimgupload3" onchange="readCertImageURL3(this);" style="background: url('<?php echo asset_url(); ?>images/img1237.png') center center no-repeat;<?php if($certificateinfo[0]['cert_image3']!="") { ?>display:none;<?php } ?>"/>
							                                	<<?php if($certificateinfo[0]['cert_image3']!="") { ?><?php if(pathinfo($certificateinfo[0]['cert_image3'], PATHINFO_EXTENSION) == 'pdf') { ?>embed<?php } else { ?>img<?php } ?><?php } else { ?>img<?php } ?> id="companycert3"  <?php if($certificateinfo[0]['cert_image3']!="") { ?> src="<?php echo asset_url().$certificateinfo[0]['cert_image3'];?>" <?php } else { ?> src="<?php echo asset_url(); ?>images/img1237.png" <?php } ?> class="imageborderclass"  style="width:80px;height:85px;cursor: pointer;<?php if(empty($certificateinfo[0]['cert_image3'])) { ?>display:none;<?php } ?>"
							                                	onclick="imgtrigger3();"/>
							                            <!-- <span class="pull-right" id="rm-cert-3"><a href="javascript:removeCertImageEdit(3);" id="rm-cert-text-3" style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;<?php if(empty($certificateinfo[0]['cert_image3'])) { ?>display:none;<?php } ?>">Remove</a></span> -->
							                                   <span class="pull-right" id="rm-cert-3"><a href="javascript:uploadCertImageEdit(3);" id="up-cert-text-3" style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;<?php if(!empty($certificateinfo[0]['cert_image3'])) { ?>display:none;<?php } ?>">Upload</a></span>
							                                	<input type="hidden" name="data[hcertimage3]" id="hcertimage3"  value="<?php if($certificateinfo[0]['cert_image3'] != "") { echo $certificateinfo[0]['cert_image3'];}?>"/>
							                                </div>
							                                <div class="col-sm-6" style="padding: 1px;">
							                                	<input name="certificateImage4" type='file' class="upladImgCert" id="certimgupload4" onchange="readCertImageURL4(this);" style="background: url('<?php echo asset_url(); ?>images/img1237.png') center center no-repeat;<?php if($certificateinfo[0]['cert_image4']!="") { ?>display:none;<?php } ?>"/>
							                                	<<?php if($certificateinfo[0]['cert_image4']!="") { ?><?php if(pathinfo($certificateinfo[0]['cert_image4'], PATHINFO_EXTENSION) == 'pdf') { ?>embed<?php } else { ?>img<?php } ?><?php } else { ?>img<?php } ?> id="companycert4" <?php if($certificateinfo[0]['cert_image4']!="") { ?> src="<?php echo asset_url().$certificateinfo[0]['cert_image4'];?>" <?php } else { ?> src="<?php echo asset_url(); ?>images/img1237.png" <?php } ?> class="imageborderclass"  style="width:80px;height:85px;cursor: pointer;<?php if(empty($certificateinfo[0]['cert_image4'])) { ?>display:none;<?php } ?>"
							                                	onclick="imgtrigger4();"/>
							                             <!--  <span class="pull-right" id="rm-cert-4"><a href="javascript:removeCertImageEdit(4);" id="rm-cert-text-4" style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;<?php if(empty($certificateinfo[0]['cert_image4'])) { ?>display:none;<?php } ?>">Remove</a></span> -->
							                                	<span class="pull-right" id="rm-cert-4"><a href="javascript:uploadCertImageEdit(4);" id="up-cert-text-4" style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;<?php if(!empty($certificateinfo[0]['cert_image4'])) { ?>display:none;<?php } ?>">Upload</a></span>
							                                	<input type="hidden" name="data[hcertimage4]" id="hcertimage4"  value="<?php if($certificateinfo[0]['cert_image4'] != "") { echo $certificateinfo[0]['cert_image4'];}?>" />
							                                </div>
														</div>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
											<div class="col-sm-8">
												<div class="form-group custom_certiformgroup">
													<div class="label-text-input">
														Upload a clear copy of your certificates
													</div>
													<br>
													<div class="label-text-input" style="font-size:10px;">
														jpg or png,bmp, pdf Resolution: 75, with Max. size 500 KB. 
														<br>You can upload up to 4 images one time
														<br><!-- span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;" onclick="removeCertImage();">Remove</span-->
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row info-row">
									<div class="col-sm-12">
										<div class="row">
											<div class="col-sm-2">
												<div class="form-group custom_certiformgroup">
													<div class="control-label label-text-form">&nbsp;</div>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group custom_certiformgroup">
													<div class="label-text-input">
														<textarea maxlength="4000" cols="70" rows="6" placeholder="Type the scope of your business/Industry mentioned in licnese" style="height:90px;" class="form-control" name="data[scope]" id="scope"><?php echo $certificateinfo[0]['scope'];?></textarea>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
											<div class="col-sm-4">
												<div class="form-group custom_certiformgroup">
													<div class="label-text-input">
														<img src="<?php echo asset_url();?>images/Clock.png" alt="Expiry Date Alarm" width="16px" title="Expiry Date Alarm"/><br>
														<span style="font-size:10px;">
															Your will be requested to renew your business certificate documents ( dates, inforamtions and images) after expiry date..
														</span>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<br>
								<div class="row info-row">
									<div class="col-sm-3 label-text"
										style="color: #F05539; font-size: 13px;">More Certificates / License</div>
								</div>
								<?php 	if(isset($morecertificate)) {
									$row_count = count($morecertificate);
	                  		?>
	                  		<input type="hidden" name="certs_count" id="certs_count" value="<?php echo $row_count;?>"/>
	                  		<?php } else {?>
	                  		<input type="hidden" name="certs_count" id="certs_count" value="1"/>
	                  		<?php }?>
	                  		<input type="hidden" name="prerowcount"  id="prerowcount" value="<?php if(isset($morecertificate)) {  echo count($morecertificate); } ?>">
	                  		<?php 
	                  	if(isset($morecertificate)) {
								$i=1;
							foreach ($morecertificate as $row) { ?>
								
								<div class="row info-row" id="certs-no-<?php echo $i;?>">
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group custom_certiformgroup">
													<div class="control-label label-text-form">More Certificate</div>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="form-group custom_certiformgroup">
													<div class="label-text-input">
														<input type="hidden" name="morecertid[]" value="<?php echo $row['id'];?>" />
														<select style="height:37px;" class="form-control" size="1" name="certificate_type[]">
				                                          	<option value="">--Please Select Type--</option>
				                                          		<?php foreach($certificate_type as $cert) { ?>
				                                                   <option value="<?php echo $cert['id'];?>" <?php  if($cert['id'] == $row['certificate_type']) { ?>selected<?php } ?>><?php echo $cert['certificate_type'];?></option>
				                                                <?php }?>
				                                      	</select>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group custom_certiformgroup">
													<div class="control-label label-text-form">Name</div>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="form-group custom_certiformgroup">
													<div class="label-text-input">
														<input id="certificate_name" name="certificate_name[]" type="text"  value="<?php echo $row['certificate_name'];?>" class="form-control form-custom-input">
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group custom_certiformgroup">
													<div class="control-label label-text-form">Reference No.</div>
												</div>
											</div>
											<div class="col-sm-7">
												<div class="form-group custom_certiformgroup">
													<div class="label-text-input">
														<input id="certificate_reference_no" name="certificate_no[]"  value="<?php echo $row['certificate_no'];?>" type="text" class="form-control form-custom-input">
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="row">
											<div class="col-sm-4">
												<div class="form-group custom_certiformgroup">
													<div class="label-text-input">
													<?php // background: url('<?php echo asset_url();images/img1237.png') center center no-repeat;?>
													<input type="file" name="moreCertificateImage[]"  <?php if($row['certificate_url'] !="") {?> value="<?php echo $row['certificate_url']; ?>" <?php } ?> class="upladImg morecertimgupload"
													 onchange="aa(this,<?php echo $i;?>);" id="morecertimgupload-<?php echo $i;?>"  style="display:none;"/>
							                           	<<?php if($row['certificate_url']!="") { ?><?php if(pathinfo($row['certificate_url'], PATHINFO_EXTENSION) == 'pdf') { ?>embed<?php } else { ?>img<?php } ?><?php } else { ?>img<?php } ?> id="morecertimage-<?php echo $i;?>"  onclick="moreimgchange(<?php echo $i;?>);"  src="<?php if($row['certificate_url'] != "" || $row['certificate_url'] != NULL) { echo asset_url().$row['certificate_url'];} else { echo asset_url()."images/img1237.png";}?>"  class="imageborderclass"   style="width:120px;height:120px;cursor: pointer;"/>
							                           	<input type="hidden" name="moreimgpath[]" id="moreimgpath-<?php echo $i;?>"  value="<?php echo $row['certificate_url']; ?>" />
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
											<div class="col-sm-8">
												<div class="form-group custom_certiformgroup">
													<div class="label-text-input">
														Upload a clear copy of your certificate
													</div>
													<br>
													<div class="label-text-input" style="font-size:10px;">
														jpg or png,bmp, pdf Resolution: 75, with Max. size 500 KB.  
														<br>
														<br><span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;" onclick="removeMoreCertURL(<?php echo $i;?>);">Remove </span>
														<?php if($i!=1) { ?>
															<hr style="border-top: 1px solid #fff;">
															<!--  <a class="pull-right" href="javascript:removeCerts(<?php //echo $i;?>,1);"><img src="<?php //echo asset_url();?>images/Error.png"/></a> -->
														<?php } ?>
													</div>
													<div class="messageContainer"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
						<?php $i++; } 
						} ?>	
						
						<div id="more_cers_area">
                        
                        </div>
						<div class="row" style="margin-top:30px;">
                            <div class="col-sm-12">
                                <div class="form-group  custom_certiformgroup text-center">  
                                    <a href="javascript:addMoreCers();" class="btn pull-left"><img src="<?php echo asset_url(); ?>images/add.png">
                                        <span style="color:#F05539;font-family:Georgia;font-size:13px;">Add More </span></a>
                                        <!--  <a href="#" class="btn pull-right"id="next5"><img src="<?php echo asset_url(); ?>images/ts/img1190.gif"></a>--> 
                                </div>
                            </div>
                            <br>
							<br>
							<br> <br>
							<br>
							<br>
							<br> <br>
                        </div>
							</div>
							<div class="col-sm-offset-1 col-sm-11" id="more_certificate_area">
							
							</div>
							<br>
							<br>
							<br> <br>
							<br> <br>
							<br>
							<br> <br>
							<br> <br>
							<br> <br>
							<br>
							<br>
						</div>
				</div>
			</div>
		</form>	
<div class="modal fade"  id="myUDModal" tabindex="-1" role="dialog" aria-labelledby="myUDModalLabel" aria-hidden="true" style="z-index:3000;">
  	<div class="modal-dialog">
        <div class="modal-content">         
          	<div class="modal-body">                
          	</div>
        </div><!-- /.modal-content -->
   	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
	<div id="modal-openimagepopup" tabindex="-1" role="dialog"
			aria-labelledby="modal-login-label" aria-hidden="true"
			class="modal fade">
			<div class="modal-dialog" style="width: 90%;">
				<div class="modal-content">
					<div class="modal-body">
						<a href="" data-dismiss="modal" aria-hidden="true" class="pull-right"><img alt="Close" src="<?php echo asset_url();?>images/closeround.png"></a>
						<table style="width: 100%; border: 0px;" cellpadding="1" cellspacing="0">
							<tr>
								<td colspan="2" style="padding-left:0px;">
									<form action="" method="post" enctype="multipart/form-data">
										<div id="mainimage" Style="">
											
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
		
<div class="modal fade"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-certs">
        <div class="modal-content modal-content-certs">         
          <div class="modal-body modal-body-certs">                
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
		
<link rel="stylesheet" href="<?php echo asset_url();?>css/datepicker3.css">
<script src="<?php echo asset_url();?>js/bootstrap-datepicker.min.js"></script>		
<script>
$("a[data-rel='prettyPhoto_SlideShow311[SlideShow311]']").attr('rel', 'prettyPhoto_SlideShow311[SlideShow311]');
$("a[rel^='prettyPhoto_SlideShow311']").prettyPhoto({theme:'facebook',social_tools:false});
function viewimag(src) 
{
	var img = '<img src="' + src + '" class="img-responsive"/>';
	
	//start of new code new code
	//var index = $(this).parent('li').index();   
	
	var html = '';
	html += img;                
	html += '<div style="height:25px;clear:both;display:block;">';
	html += '</div>';
	
	$('#myModal').modal();
	$('#myModal').on('shown.bs.modal', function(){
		$('#myModal .modal-body').html(html);
		//new code
	})
	$('#myModal').on('hidden.bs.modal', function(){
		$('#myModal .modal-body').html('');
	});
	
}


function imgtrigger1()
{
	$("#certimgupload1").trigger('click');
}
function imgtrigger2()
{
	$("#certimgupload2").trigger('click');
}
function imgtrigger3()
{
	$("#certimgupload3").trigger('click');
}
function imgtrigger4()
{
	$("#certimgupload4").trigger('click');
}
/*var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();*/

function displayimg(imagesrc)
{

	$.post("<?php echo base_url();?>dispalyimage",{'imagesrc':imagesrc},function(data){
		document.getElementById('mainimage').innerHTML = data;
		
	});
}

function removeMoreCertURL(id) {
	
	 $('#morecertimage-'+id).attr('src', '');
     $('#morecertimage-'+id).hide()
     $('#morecertimgupload-'+id).css('display', 'block');
     $('#moreimgpath-'+id).val('');
     $('#morecertimgupload-'+id).val('');
     
  
}
function aa(input,id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        var name = input.files[0].name;
        var extension = name.replace(/^.*\./, '');
        reader.onload = function (e) {
        	$('#morecertimgupload-'+id).css('display', 'none');
        	if(extension == "pdf") {
            	$('#morecertimage-'+id).replaceWith($('<embed id="morecertimage-'+id+'" src="" />'));
            } else {
            	$('#morecertimage-'+id).replaceWith($('<img id="morecertimage-'+id+'" src="" />'));
            }
        	$('#morecertimage-'+id).show();
        	$('#morecertimage-'+id).attr('src', e.target.result).css('width', '120px').css('height', '120px');
        	$('#moreimgpath-'+id).val('1');
        	$('#morecertimage-'+id).addClass("imageborderclass");
        }

        reader.readAsDataURL(input.files[0]);
    }
}

function addMoreCers() {
	var cert_count = parseInt($("#certs_count").val());
	cert_count++;
	var html = '<div class="row" id="certs-no-'+cert_count+'"><hr style="border-top: 1px solid #fff;"><a class="pull-right" href="javascript:removeCerts('+cert_count+',0);"><img src="<?php echo asset_url();?>images/Error.png"/></a>'
              +'<div class="col-md-6 col-xs-12 col-sm-12">'
              +'<div class="form-group custom_certiformgroup" style="margin-bottom:5px;">'
              +'<div class="row">'
              +'<label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">More Certificate</span></label>'
              +'<div class="col-md-6" style="padding-right:2px;">'
              +'<div class="row">'
              +'<div class="col-xs-12">'
              +'<select style="width:100%;height:37px;z-index:63;" class="Combobox2" size="1" name="certificate_type[]">'
              +'<option value=" ">--Please Select Type--</option>'
              +'<option value="1">Management System Certifications</option>'
              +'<option value="2">Product Certifications / Test Report</option>'
              +'<option value="3">License</option>'
              +'<option value="4">Intellectual Property Rights/Copy Right</option>'
              +'<option value="5">Honor</option>'
              +'</select>'
              +'</div>'
              +'<div class="messageContainer"></div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'<div class="form-group custom_certiformgroup" style="margin-bottom:5px;">'
              +'<div class="row">'
              +'<label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Name</span></label>'
              +'<div class="col-md-6" style="padding-right:2px;">'
              +'<div class="row">'
              +'<div class="col-xs-10">'
              +'<input name="certificate_name[]" type="text" style="height:35px" placeholder="" class="form-control form-custom-input">'
              +'</div>'
              +'<div class="messageContainer"></div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'<div class="form-group custom_certiformgroup" style="margin-bottom:5px;">'
              +'<div class="row">'
              +'<label class="col-md-4" style="padding-top:5px; font-weight:normal;"><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;"> Reference No.</span></label>'
              +'<div class="col-md-6" style="padding-right:2px;">'
              +'<div class="row">'
              +'<div class="col-xs-10">'
              +'<input name="certificate_no[]" type="text" style="height:35px" placeholder="" class="form-control form-custom-input">'
              +'</div>'
              +'<div class="messageContainer"></div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'</div>'
              +'<div class="col-xs-12 col-sm-6 col-md-2">'
              +'<input name="moreCertificateImage[]" type="file" class="upladImg morecertimgupload" id="morecertimgupload-'+cert_count+'" >'
              +'<img id="morecertimage-'+cert_count+'" class="intro"  onclick="moreimgchange('+cert_count+');" class="imageborderclass"   src="#" style="display: none">'
              +'</div>'
              +'<div class="messageContainer"></div>'
              +'<div class="col-xs-12 col-sm-6 col-md-3">'
              +'<p><span style="color:#3C3C3C;font-family:Georgia;font-size:11px;">Upload a clear copy of your certificate</span></p>'
              +'<p><span style="color:#666666;font-family:Arial;font-size:9.3px;">jpg or png,bmp, pdf Resolution: 75, with Max. size 500 KB.</span><br><span style="color:#1E90FF;font-family:Georgia;font-size:11px;cursor:pointer;" onclick="removeMoreCertURL('+cert_count+');">Remove</span></p>'
              +'</div>'
              +'</div>';
    $("#more_cers_area").append(html);
   // $('#frmeditcompanyinfo').bootstrapValidator('revalidateField', 'data[profilepath]');
	$('#frmeditcertificateinfo').bootstrapValidator ('addField', 'certificate_type[]');
	$('#frmeditcertificateinfo').bootstrapValidator ('addField', 'certificate_name[]');
	$('#frmeditcertificateinfo').bootstrapValidator ('addField', 'certificate_no[]');
	$('#frmeditcertificateinfo').bootstrapValidator ('addField', 'moreCertificateImage[]');
    $("#certs_count").val(cert_count);
    $(".morecertimgupload").change(function (){
    	if (this.files && this.files[0]) {
        	var inps = $(this).attr('id').split("-");
            var reader = new FileReader();
            var name = this.files[0].name;
            var extension = name.replace(/^.*\./, '');
            reader.onload = function (e) {
            	$('#morecertimgupload-'+inps[1]).css('display', 'none');
//             	if(extension == "pdf") {
//                 	$('#morecertimage-'+inps[1]).replaceWith($('<embed id="morecertimage-'+inps[1]+'" src="" />'));
//                 } else {
//                 	$('#morecertimage-'+inps[1]).replaceWith($('<img id="morecertimage-'+inps[1]+'" src="" />'));
//                 }
				$('#morecertimage-'+inps[1]).css('display', 'block');
                $('#morecertimage-'+inps[1]).show();
                $('#morecertimage-'+inps[1]).attr('src', e.target.result).css('width', '120px').css('height', '120px').css('cursor','pointer');
                $('#morecertimage-'+inps[1]).addClass("imageborderclass");
               
            }
            reader.readAsDataURL(this.files[0]);
        }
  	});
   
}
function moreimgchange (id)
{
	$('#morecertimgupload-'+id).trigger('click');
}


function imgmoreuploadfile(id)
{
	$(id).trigger('click');
}
function removeCerts(id,flag) {
	
	$("#certs-no-"+id).remove();
	$('#frmeditcertificateinfo').bootstrapValidator ('addField', 'certificate_type[]');
	$('#frmeditcertificateinfo').bootstrapValidator ('addField', 'certificate_name[]');
	$('#frmeditcertificateinfo').bootstrapValidator ('addField', 'certificate_no[]');
	$('#frmeditcertificateinfo').bootstrapValidator ('addField', 'moreCertificateImage[]');
	if(flag == 1)
	{
		var count = $('#prerowcount').val();
		var increse = parseInt(count)-1;
		$('#prerowcount').val(increse);
	}
}

function removeCertImageEdit(id) {
	$('#companycert'+id).attr('src', '');
    $('#companycert'+id).hide()
    $('#certimgupload'+id).css('display', 'block');
    $('#certimgupload'+id).val('');
    $("#rm-cert-text-"+id).hide();
    $("#up-cert-text-"+id).show();
    $('#hcertimage'+id).val('');
}
function uploadCertImageEdit(id)
{
	$('#certimgupload'+id).trigger('click');
}

function readCertImageURL1(input) {
	if (input.files && input.files[0]) {
        var reader = new FileReader();
        var name = input.files[0].name;
        var extension = name.replace(/^.*\./, '');
        var id = 1;
        reader.onload = function (e) {
        	$('#certimgupload'+id).css('display', 'none');
        	if(extension == "pdf") {
            	$('#companycert'+id).replaceWith($('<embed id="companycert'+id+'" src="" />'));
            } else {
            	$('#companycert'+id).replaceWith($('<img id="companycert'+id+'" src="" />'));
            }
        	$('#companycert'+id).show();
        	$('#companycert'+id).attr('src', e.target.result).css('width', '80px').css('height', '85px');
        	$("#rm-cert-text-"+id).show();
        	$("#up-cert-text-"+id).hide();
        	 $('#hcertimage'+id).val(e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function readCertImageURL2(input) {
	if (input.files && input.files[0]) {
        var reader = new FileReader();
        var name = input.files[0].name;
        var extension = name.replace(/^.*\./, '');
        var id = 2;
        reader.onload = function (e) {
        	$('#certimgupload'+id).css('display', 'none');
        	if(extension == "pdf") {
            	$('#companycert'+id).replaceWith($('<embed id="companycert'+id+'" src="" />'));
            } else {
            	$('#companycert'+id).replaceWith($('<img id="companycert'+id+'" src="" />'));
            }
        	$('#companycert'+id).show();
        	$('#companycert'+id).attr('src', e.target.result).css('width', '80px').css('height', '85px');
        	$("#rm-cert-text-"+id).show();
        	 $('#hcertimage'+id).val(e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function readCertImageURL3(input) {
	if (input.files && input.files[0]) {
        var reader = new FileReader();
        var name = input.files[0].name;
        var extension = name.replace(/^.*\./, '');
        var id = 3;
        reader.onload = function (e) {
        	$('#certimgupload'+id).css('display', 'none');
        	if(extension == "pdf") {
            	$('#companycert'+id).replaceWith($('<embed id="companycert'+id+'" src="" />'));
            } else {
            	$('#companycert'+id).replaceWith($('<img id="companycert'+id+'" src="" />'));
            }
        	$('#companycert'+id).show();
        	$('#companycert'+id).attr('src', e.target.result).css('width', '80px').css('height', '85px');
        	$("#rm-cert-text-"+id).show();
        	 $('#hcertimage'+id).val(e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function readCertImageURL4(input) {
	if (input.files && input.files[0]) {
        var reader = new FileReader();
        var name = input.files[0].name;
        var extension = name.replace(/^.*\./, '');
        var id = 4;
        reader.onload = function (e) {
        	$('#certimgupload'+id).css('display', 'none');
        	if(extension == "pdf") {
            	$('#companycert'+id).replaceWith($('<embed id="companycert'+id+'" src="" />'));
            } else {
            	$('#companycert'+id).replaceWith($('<img id="companycert'+id+'" src="" />'));
            }
        	$('#companycert'+id).show();
        	$('#companycert'+id).attr('src', e.target.result).css('width', '80px').css('height', '85px');
        	$("#rm-cert-text-"+id).show();
        	 $('#hcertimage'+id).val(e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function imgmorecerti(id)
{
	$(id).trigger('click');
}
</script>