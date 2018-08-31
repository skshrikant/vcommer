<link rel="stylesheet" href="<?php echo asset_url();?>js/prettyPhoto/css/prettyPhoto.css">
<script src="<?php echo asset_url();?>js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<style>
div.pp_overlay {
	z-index:12800;
}
div.pp_pic_holder {
	z-index:12801;
}
</style>
<div class="row editaccount_outer">
	<div class="col-md-2 account-left-nav"> 
		<div class="col-md-12" style="padding: 9px;">
			<div class="account-image">
				<img class="hover" alt="" src="<?php echo asset_url();?>images/my_file.png">
			</div>
		</div>
		<div class="col-md-12" style="padding: 9px;">
			<div class="account-image" style="padding-top: 0px;">
				<span style="color: #FFFFFF; font-family: Arial; font-size: 13px;">My Files</span>
			</div>
		</div>
		<div class="col-md-10" style="padding: 9px;">
			<div class="account-image" style="padding-top: 100px;">
				<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">Your
				Subscription Package Allows You To Upload Files&nbsp; With
				Total Storage Up To </span>
			</div>
		</div>
		<div class="col-md-12" style="padding: 9px;">
			<div class="text-center" style="padding-top: 2px;">
				<span style="color:#FFFFFF;font-family:Impact;font-size:48px;"><?php echo $max_filemb;?> <span style="padding-top: 20px;color:#FFFFFF;font-family:Georgia;font-size:13px;">MB</span></span>
			</div>
		</div>
		<div class="col-md-10" style="padding: 9px;">
			<!-- div class="" style="text-align: center;padding-top: 100px;">
			<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span><br>
				<span style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span><br>
				<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
			</div-->
		</div>
	</div>
	<div class="col-md-10 account-content-area">
		<div class="tab-content main-tab-content">
			<div class="panel panel-default tab-pane fade in active" id="ranking">
					<form name="frmfileupload" method="post" action="" enctype="multipart/form-data" id="frmfileupload">
					  	<div class="panel-heading custom-panel-heading">
					  		<input type="hidden" value = "<?php echo $remainstorageinbyte;?>"  name="remainstorage" />
					  		<input name="publicfileupload" type='file' class="upladImg" id="publicfileupload" onchange="validatefile('publicfileupload',this,<?php echo $remainstorageinbyte; ?>);"  />
					  		<a  style="width: 192px;padding-top: 7px !important;" href="#" class="btn btn-default btn-custom" id="personal_edit_btn">
					  		 <img style="left:8px;top:6px;width:31px;height:31px;z-index:689;" src="<?php echo asset_url();?>images/upload_cloud.png" id="Image49" alt="">
					  		 <span style="color:#A9A9A9;font-family:Arial;font-size:13px"><b>Upload Puplic File</b></span></a>
<!-- 					  		<input name="privatefileupload" type='file' class="upladImg" id="privatefileupload"  onchange="getpassword();"  /> -->
					  		<a style="width: 192px;padding-top: 7px !important;" href="#" class="btn btn-default btn-custom" data-toggle="modal" data-target="#privatefilepassword_modal"  backdrop='static'>
					  			<img style="left: 3px; top: 6px; width: 31px; height: 31px; z-index: 691;" src="<?php echo asset_url();?>images/img1592.png" id="Image50" alt="">
					  			<span style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Upload Private File</b></span></a>
					  		<a style="width: 192px;padding-top: 7px;" href="#" class="btn btn-default btn-custom" id="" onclick="Filelist();">
					  			<img style="left: 8px; top: 12px; width: 20px; height: 20px; z-index: 693;" src="<?php echo asset_url();?>images/img1593.png" id="Image34" alt="">
					  			<span style="color: #A9A9A9; font-family: Arial; font-size: 13px"><b>Delete Selected File</b></span>
					  		</a>
					  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer101', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
					  	</div>
				  	<div class="panel-body panel-body-custom" id="account_personal_info">		
				  		<div class="personal_info_div" id="personal_info_div">
				  			<div style="width: 734px;z-index: 698;text-align: left;margin-left: 115px;margin-top: 15px;">
					  		  	<div class="row">
					  				<div class="col-md-12" style="text-align: left;">
					  					<span style="color: #2D2D2D; font-family: Georgia; font-size: 21px;">My Files</span>
					  				</div>
					  			</div><br>
						  		<div class="row">
									<div class="col-md-12">
										<span
											style="color: #3C3C3C; font-family: Arial; font-size: 11px;">A
											storage disk and new way to transfer files to your customers
											without spending time to send to them one after one. <br>When
											buyers, shippers or visitors view your Desksite and click on
											your &quot; My Files &quot; folder, they can view and download
											different type of files you keep for them such as ( txt, word,
											excel, power point presentations, Pdf, jpg...etc).<br>You can
											use these files to deliver a quick and deep information about
											your company, products, new arrivals, ads, offers, quotations
											and much more. Just click on
										</span>
										<span style="color: #2D2D2D; font-family: Arial; font-size: 11px;"><strong>&quot; Upload Public File &quot;</strong></span>
										<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;">
												button to upload files and keep it available for public.<br>
											<br>Enjoy more secure and privacy when click on
										</span>
										<span style="color: #2D2D2D; font-family: Arial; font-size: 11px;"><strong>&quot;Upload Private File&quot; </strong></span>
										<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;">button, which allows you to set a </span>
										<span style="color: #2D2D2D; font-family: Arial; font-size: 11px;"><strong>password </strong>to the uploaded file. </span>
										<span style="color: #3C3C3C; font-family: Arial; font-size: 11px;">
												You may have a special Price List or private invitation, and would
												like to keep it private for a certain customer. ( <strong>provide
												the password only to the customer you like him to view this
												file</strong>)..<br>
										</span>
									</div>
								</div><br>
								<div class="row">
									<div class="col-md-12"> 
										<!--   <a href="#"  data-rel="prettyPhoto_SlideShow3[SlideShow3]" rel="prettyPhoto_SlideShow3[SlideShow3]"  onclick="ShowObjectWithEffect('Layer316', 1, 'fade', 100, 'swing');return false;">
										<img class="image" src="<?php echo asset_url();?>images/myfiles_sample.jpg" alt="" title="" style="width:50px;height:28px"></a>-->
										<a href="<?php echo asset_url();?>images/myfiles_sample.jpg" data-rel="prettyPhoto_SlideShow3[SlideShow3]" rel="prettyPhoto_SlideShow3[SlideShow3]" style="width:42px;height:25px;"><img class="image" src="<?php echo asset_url();?>images/myfiles_sample.jpg" alt="" title="" style="width:42px;height:25px;"></a>
										<span style="padding-left: 22px;color:#1E90FF;font-family:Arial;font-size:11px;"><strong>Click on image to see where&nbsp; your " My Files" folder, will be displayed. </strong></span>
									</div>
								</div>
								<div><img src="<?php echo asset_url();?>images/img1591.png" id="Line4" alt=""></div><br>
								<div style="min-height:240px;">
									<?php for($i=0;$i<count($myfilelist);$i++) { ?>
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-6">
													<div class="col-sm-5">
														<input type="checkbox" id="Checkbox98" name="filearray[]" value="<?php echo $myfilelist[$i]['id'];?>" >
														
														<a 
															<?php if($myfilelist[$i]['file_access_type'] == 1) { ?> href="<?php  echo asset_url();?><?php echo $myfilelist[$i]['file'];?>" download 
															<?php } else {?> href="#" data-toggle="modal"	data-target="#filepassword_modal" backdrop='static' onclick="passwordpoup(<?php echo $myfilelist[$i]['id'];?>);"
															<?php } ?>
														>
																			
																<?php if($myfilelist[$i]['file_type'] == "pdf") { ?>
																	<img src="<?php echo asset_url();?>images/pdfimg.png" id="" alt="" style="width:80px;" height="80px;">
																<?php } else if($myfilelist[$i]['file_type'] == "word") { ?>
																	<img src="<?php echo asset_url();?>images/word.png" id="" alt=""  style="width:80px;" height="80px;">
																<?php } else if($myfilelist[$i]['file_type'] == "image") { ?>
																	<img src="<?php echo asset_url();?>images/imagicon.jpeg" id="" alt=""  style="width:80px;" height="80px;">
																<?php } else if($myfilelist[$i]['file_type'] == "excel") { ?>
																<img src="<?php echo asset_url();?>images/excel.jpg" id="" alt=""  style="width:80px;" height="80px;">
																<?php } else if ($myfilelist[$i]['file_type'] == "ppt") { ?>
																<img src="<?php echo asset_url();?>images/ppt.jpg" id="" alt=""  style="width:80px;" height="80px;">
																<?php } else if ($myfilelist[$i]['file_type'] == "text") { ?>
																<img src="<?php echo asset_url();?>images/txtfile.png" id="" alt=""  style="width:80px;" height="80px;">
																<?php } else if ($myfilelist[$i]['file_type'] == "zip") { ?>
																<img src="<?php echo asset_url();?>images/zipfile.png" id="" alt=""  style="width:80px;" height="80px;">
																<?php } ?>
															</a>
													</div>												

													<div class="col-sm-7" style="padding-left:0px;">
														<div id="wb_Text250" style="height:20px;text-align:left;padding:5px 0px;">
															<span style="color:#3C3C3C;font-family:Arial;font-size:13px;">Uploaded On :&nbsp; <?php echo date('j M Y',strtotime($myfilelist[$i]['created_date']));?></span>
														</div>
														<div id="wb_Text250" style="height:20px;text-align:left;padding:5px 0px;">
															<span style="color:#3C3C3C;font-family:Arial;font-size:13px;">Downloaded :&nbsp; <span id="file_down_count_<?php echo $myfilelist[$i]['id'];?>"><?php echo $myfilelist[$i]['download_count']?></span> times</span><br>
														</div>
														<div id="wb_Text250" style="height:20px;text-align:left;padding:5px 0px;">
															<span style="color:#3C3C3C;font-family:Arial;font-size:13px;">Size :&nbsp; <?php echo round($myfilelist[$i]['file_size']/1024);?> KB</span>
														</div>
													</div>	
													<div class="col-sm-12" style="text-align:left;">
														<span style="padding-left: 15px;color: #777;font-weight: bold;font-size: 11px;"><?php echo $myfilelist[$i]['dispaly_name']?></span>
													</div>
											</div>
											<?php $i++; if($i<count($myfilelist)) {?>
											<div class="col-md-6">
												<div class="col-sm-5">
													<input type="checkbox" id="Checkbox98" name="filearray[]" value="<?php echo $myfilelist[$i]['id'];?>" >
													
													<!-- <a <?php if($myfilelist[$i]['file_access_type'] == 1) { ?> href="<?php  echo base_url();?>mystation/myfile/download/<?php echo $myfilelist[$i]['id'];?>" 
													download="<?php  echo base_url();?>mystation/myfile/download/<?php echo $myfilelist[$i]['id'];?>" onclick="recordFileDownload(<?php echo $myfilelist[$i]['id'];?>);" <?php } else { ?> href="#" data-toggle="modal" data-target="#filepassword_modal" 
													 backdrop="static" onclick="passwordpoup(<?php echo $myfilelist[$i]['id'];?>);" <?php } ?>> -->
													<a 
													 	<?php if($myfilelist[$i]['file_access_type'] == 1) { ?> href="<?php  echo asset_url();?><?php echo $myfilelist[$i]['file'];?>" download 
														<?php } else { ?> href="#" data-toggle="modal" data-target="#filepassword_modal" backdrop="static" onclick="passwordpoup(<?php echo $myfilelist[$i]['id'];?>);" 
														<?php } ?>
													>

														<?php if($myfilelist[$i]['file_type'] == "pdf") { ?>
															<img src="<?php echo asset_url();?>images/pdfimg.png" id="" alt="" style="width:80px;" height="80px">
														<?php } else if($myfilelist[$i]['file_type'] == "word") { ?>
															<img src="<?php echo asset_url();?>images/word.png" id="" alt=""  style="width:80px;" height="80px;">
														<?php } else if($myfilelist[$i]['file_type'] == "image") { ?>
															<img src="<?php echo asset_url();?>images/imagicon.jpeg" id="" alt=""  style="width:80px;" height="80px;">
														<?php }  else if($myfilelist[$i]['file_type'] == "excel") { ?>
															<img src="<?php echo asset_url();?>images/excel.jpg" id="" alt=""  style="width:80px;" height="80px;">
														<?php }  else if ($myfilelist[$i]['file_type'] == "ppt") { ?>
															<img src="<?php echo asset_url();?>images/ppt.jpg" id="" alt=""  style="width:80px;" height="80px;">
														<?php }  else if ($myfilelist[$i]['file_type'] == "text") { ?>
															<img src="<?php echo asset_url();?>images/txtfile.png" id="" alt=""  style="width:80px;" height="80px;">
														<?php } else if ($myfilelist[$i]['file_type'] == "zip") { ?>
															<img src="<?php echo asset_url();?>images/zipfile.png" id="" alt=""  style="width:80px;" height="80px;">
														<?php } ?>
													</a>
												</div>
												<div class="col-sm-7" style="padding-left:0px;">
													<div id="wb_Text250" style="height:20px;text-align:left;padding:5px 0px;">
														<span style="color:#3C3C3C;font-family:Arial;font-size:13px;">Uploaded On :&nbsp; <?php echo date('j M Y',strtotime($myfilelist[$i]['created_date']));?></span>
													</div>
													<div id="wb_Text250" style="height:20px;text-align:left;padding:5px 0px;">
														<span style="color:#3C3C3C;font-family:Arial;font-size:13px;">Downloaded :&nbsp; <span id="file_down_count_<?php echo $myfilelist[$i]['id'];?>"><?php echo $myfilelist[$i]['download_count']?></span> times</span><br>
													</div>
													<div id="wb_Text250" style="height:20px;text-align:left;padding:5px 0px;">
														<span style="color:#3C3C3C;font-family:Arial;font-size:13px;">Size :&nbsp; <?php echo round($myfilelist[$i]['file_size']/1024);?> KB</span>
													</div>
												</div>	
												<div class="col-sm-12" style="text-align:left;">
													<span style="padding-left: 15px;color: #777;font-weight: bold;font-size: 11px;"><?php echo $myfilelist[$i]['dispaly_name']?></span>
													<a id="myfilename<?php echo $myfilelist[$i]['id'];?>" href="<?php echo asset_url().$myfilelist[$i]['file'];?>" style="display:none;">testfile</a>
												</div>
											</div>
											<?php } ?>
										</div>
										</div><br><br>
									<?php  }?>
								</div>
								<br><br>
							</div><br>
						</div>
						<div class="row" style="position:fixed;bottom: 0px;padding: 10px 0px;width: 1077px;background-color: #ccc;border-top: 1px solid #eee;margin-left: -15px;">
							<div class="col-md-12 text-center">
								<span style="color:#F05539;font-family:Arial;font-size:15px;"><?php echo $filecount;?></span>
								<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">files / </span>
								<span style="color:#F05539;font-family:Arial;font-size:15px;"><?php echo $remainingsize;?></span>
								<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">remains</span>
							</div>
						</div>
					</div>
				</form>
			 </div>
			</div>
			</div>
		</div>
	</div>
</div>
</div>
 <div id="privatefilepassword_modal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:431px;padding-top:8%;">
    	<div class="modal-content">
      		<div class="modal-header" style="background-color: #FF6347;padding: 8px;text-align: center;">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title" style="color:#FFFFFF; font-family:Georgia;font-size:21px;font-style:normal;text-align:center;">Private File Security</h4>
      		</div>
      		<div class="modal-body" style="background-color: #FAFAFA;">
	      		<form name="frmprivatepassword" method="post" action="" enctype="multipart/form-data" id="frmprivatepassword">
	        			<div class="row">
		        			<div class="col-sm-12" style="margin-bottom:5px;">
		        				<div class="form-group">
		        					<div class="control-label label-text-form col-sm-4">Private File Upload </div>
									<div class="label-text-input col-sm-8">
		                            	<input name="privatefileupload" type='file' class="upladImg" id="privatefileupload" style="padding:0px;height: 22px;" id="privatefileupload"  onchange="return validateprivatefile('privatefileupload',this,<?php echo $remainstorageinbyte; ?>);"    />
									</div>
									<div class="messageContainer" style="padding-left: 37%;padding-top: 21px;"></div>
								</div>
		        			</div><br><br>
		        			<div class="col-sm-12" style="margin-bottom:5px;">
		        				<div class="form-group">
		        					<div class="control-label label-text-form col-sm-4">Password </div>
									<div class="label-text-input col-sm-8">
		                            	<input type="password" name="password"  placeholder="Password" id="subuserpassword" class="form-control form-custom-input" value=""/>
									</div>
									<div class="messageContainer" style="padding-left: 37%;"></div>
								</div>
		        			</div><br><br>
		        			<div class="col-sm-12" style="margin-bottom:5px;">
		        				<div class="form-group">
		        					<div class="label-text-input"     style="padding-top:22px;text-align: center;">
	                            		<input type="submit" class="btn btn-sm btn-user-custom" value="Save" id="btnprivatefilepassword" />
	                            		<input type="button" class="btn btn-sm btn-user-custom" data-dismiss="modal" value="Reset"/>
									</div>
								</div>
		        			</div>
		        		</div>	
	        	</form>
      		</div>
    	</div>
  	</div>
</div>
 <div id="filepassword_modal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:431px;padding-top:15%;">
    	<div class="modal-content">
      		<div class="modal-header" style="background-color: #FF6347;padding: 8px;text-align: center;">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title" style="color:#FFFFFF; font-family:Georgia;font-size:21px;font-style:normal;text-align:center;">Private File Security</h4>
      		</div>
      		<div class="modal-body" style="background-color: #FAFAFA;">
	      		<form name="frmprivatepassword" method="post" action="" enctype="multipart/form-data" id="frmprivatepassword">
	      				<input type="hidden" name="fileid" id="fileid" value="" />
	        			<div class="row">
		        			<div class="col-sm-12" style="margin-bottom:5px;">
		        				<div class="form-group">
		        					<div class="control-label label-text-form col-sm-4">Password </div>
									<div class="label-text-input col-sm-8">
		                            	<input type="password" name="filepassword"  placeholder="Password" id="filepassword" class="form-control form-custom-input" value=""/>
									</div>
									<div class="messageContainer" style="padding-left: 37%;"></div>
								</div>
		        			</div><br><br>
		        			<div class="col-sm-12" style="margin-bottom:5px;">
		        				<div class="form-group">
		        					<div class="label-text-input" style="padding-top:22px;text-align: center;">
	                            		<input type="button" class="btn btn-sm btn-user-custom" value="Download" id="btnfilepassword"  onclick="downloadprivatefile();"/>
									</div>
								</div>
		        			</div>
		        		</div>	
	        	</form>
      		</div>
    	</div>
  	</div>
</div>

<div id="accessDeniedModalmyfile" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:525px;">
    	<div class="modal-content" style="border-radius:0px;margin-top:25%;">
      		<div class="modal-body">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-2"></div>
      				<div class="col-sm-8">
	      				<div style="text-align: center;">
							<span style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;">ACCESS DENIED</span>
						</div>
						<br><br>
						<div style="text-align: center;">
							<img src="<?php echo asset_url();?>images/padlock-154684_640.png" width="100px;"/>
						</div>
						<div style="text-align: center;">
							We are so sorry. We have created this unique <br>feature
							for only <strong>BLACK HORSE</strong> member
						</div>
					</div>
					<div class="col-sm-2"></div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<a href="javascript:upgradeMyBusinessPlan();" class="btn btn-sm btn-danger-custom" style="width:150px;">Upgrade</a>
      				<a href="javascript:cancelAccessDeniedPopup();" class="btn btn-sm btn-danger-custom" style="width:150px;">Cancel</a>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>

<div id="myfileimagemodal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:100%;">
    	<div class="modal-content" style="border-radius:0px;">
      		<div class="modal-body" style="background-color:black">
      			<div class="row" style="padding-top:10px;">
      				<div class="col-sm-2"></div>
      				<div class="col-sm-8">
	      				<img alt="" src="<?php echo asset_url();?>images/myfiles_sample.jpg" />
					</div>
					<div class="col-sm-2"></div>
      			</div>
      		</div>
    	</div>
  	</div>
</div>
<iframe id="frame" style="display:none"></iframe>
<script src="<?php echo asset_url();?>js/jquery.form.js"></script>
<script>
<?php if($tsplanid == 1 && ($tscategory_id == 1 || $tscategory_id == 2)) { ?>
$('#accessDeniedModalmyfile').modal({show:true,backdrop: 'static',keyboard: false});
function upgradeMyBusinessPlan() {
	ShowObjectWithEffect('Layer108', 0, 'dropup', 500, 'easeInBounce');
	getMyPackages();
}
function cancelAccessDeniedPopup() {
	ShowObjectWithEffect('Layer101', 0, 'dropup', 500, 'easeInBounce');
	ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');
}
<?php }?>
function validatefile(id,input,size)
{
	var flag = true;
	if (input.files && input.files[0]) {
       		var ext = input.files[0].name.split('.').pop();
       		var file_size = parseInt(input.files[0].size);
       		var filesizeinkb = (file_size/1024);
       		var sizeinkb = (size/1024);
       		if(ext == 'jpg' || ext == 'jpeg' || ext =='xlsx' || ext == 'xls' || ext == 'xlsm' || ext == 'txt'
                     || ext == 'docx' || ext == 'doc' || ext == 'ppt' || ext == 'pptm' || ext == 'pptx' || ext == 'pdf' || ext == 'jpeg' || ext == 'jpg' || ext == 'png' || ext == 'gif' || ext == 'zip' || ext == 'rar' || ext == 'arj') {
	                if(filesizeinkb > sizeinkb) {
	                	alert("File size should be "+size+"kb max.");
	                    $('#'+id).val('');
	                    flag = false;
	                } 
                } else {
                	alert("File should be txt, word, excel, power point presentations, Pdf, jpg, zip");
                    $('#'+id).val('');
                    flag = false;
                }
            if(flag == true)
            {
            	savePublicFile();
            }
   	}
}
function validateprivatefile(id,input,size)
{
	var flag = true;
	if (input.files && input.files[0]) {
       		var ext = input.files[0].name.split('.').pop();
       		var file_size = parseInt(input.files[0].size);
       		var filesizeinkb = (file_size/1024);
       		var sizeinkb = (size/1024);
       		if(ext == 'jpg' || ext == 'jpeg' || ext =='xlsx' || ext == 'xls' || ext == 'xlsm' || ext == 'txt'
                     || ext == 'docx' || ext == 'doc' || ext == 'ppt' || ext == 'pptm' || ext == 'pptx' || ext == 'pdf' || ext == 'jpeg' || ext == 'jpg' || ext == 'png' || ext == 'gif' || ext == 'zip' || ext == 'rar' || ext == 'arj') {
	                if(filesizeinkb > sizeinkb) {
	                	alert("Image size should be "+size+"kb max.");
	                    $('#'+id).val('');
	                    flag = false;
	                } 
                } else {
                	alert("File should be txt, word, excel, power point presentations, Pdf, jpg, zip");
                    $('#'+id).val('');
                    flag = false;
                }
           
   	}
   	return flag;
}
function downloadprivatefile()
{
	var id = document.getElementById('fileid').value;
	var password = document.getElementById('filepassword').value;
	if(password != "")
	{
		$.post("<?php  echo base_url();?>mystation/checkfilepassword",{id:id,'password':password},function(resp) {
			if(resp.status == 0)
			{
				alert('File Password is Wrong, Please Enter Correct Password.');
			} 
			if(resp.status == 1)
			{
				var file_count = parseInt($("#file_down_count_"+id).html());
				file_count++;
				$("#file_down_count_"+id).html(file_count);
				$("#filepassword_modal").modal('hide');
				var url = "<?php echo asset_url() ?>" + resp.filename;

				var element = document.createElement('a');
				element.setAttribute('href', url);
				element.setAttribute('download',resp.fname);
				element.setAttribute('target','_blank');
				element.style.display = 'none';
				document.body.appendChild(element);

				element.click();
				document.body.removeChild(element);
				
				//e.preventDefault();  //stop the browser from following
			    //window.location.href = $("#myfilename"+id).attr('href');
			    // window.open("echo base_url();mystation/myfile/download/"+id, '_blank', '');
			} 
		},'json');
	} else {
		alert('Please Enter Password');
	}
}

function recordFileDownload(id) {
	$.get("<?php  echo base_url();?>mystation/myfile/record/download/"+id,{},function(data){
		var file_count = parseInt($("#file_down_count_"+id).html());
		file_count++;
		$("#file_down_count_"+id).html(file_count);
	},'json');
}

function passwordpoup(id)
{
	document.getElementById('fileid').value = id;
	document.getElementById('fileid').value = id;
}


function getpassword()
{
	jQuery('#privatefilepassword_modal').modal({show:true,backdrop: 'static',keyboard: false});
	//var fileName = "";
// 	$("input[name='privatefileupload']").each(function() {
// 	    fileName = $(this).val().split('/').pop().split('\\').pop();
// 	    alert(fileName);
// 	    exit;
// 	});
// fileName = document.getElementById("privatefileupload").value
   
// 	if(fileName != "") {
// 		jQuery('#privatefilepassword_modal').modal({show:true,backdrop: 'static',keyboard: false});
// 	}
}
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="<?php echo asset_url();?>images/loading.gif" alt=""><div></div></div><div class="bg"></div></div>');
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
$("a[data-rel='prettyPhoto_SlideShow3[SlideShow3]']").attr('rel', 'prettyPhoto_SlideShow3[SlideShow3]');
$("a[rel^='prettyPhoto_SlideShow3']").prettyPhoto({theme:'facebook',social_tools:false});
$(document).keypress(
    function(event){
     if (event.which == '13') {
        event.preventDefault();
      }
});
</script>





