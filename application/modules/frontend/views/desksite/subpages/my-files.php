				<div class="row" style="width:100%;margin:0px;">
					<?php foreach($Files as $file){?>
					<div class="col-md-3" style="height:100px;">
						 <a style="text-decoration: none !important;" <?php if($file['file_access_type'] == 1) { ?> href="<?php  echo base_url();?>mystation/myfile/download/<?php echo $file['id'];?>" 
													download="<?php  echo base_url();?>mystation/myfile/download/<?php echo $file['id'];?>" onclick="recordFileDownload(<?php echo $file['id'];?>);" <?php } else { ?> href="#" data-toggle="modal" data-target="#filepassword_modal" 
													 backdrop="static" onclick="passwordpoup(<?php echo $file['id'];?>);" <?php } ?>>
							 <?php if($file['file_type'] == "pdf") { ?>
								<img src="<?php echo asset_url();?>images/pdfimg.png" id="" alt="<?php echo $file['dispaly_name'];?>" style="width:50px;height:50px;">
							<?php } else if($file['file_type'] == "word") { ?>
								<img src="<?php echo asset_url();?>images/word.png" id="" alt="<?php echo $file['dispaly_name'];?>"  style="width:50px;height:50px;">
							<?php } else if($file['file_type'] == "image") { ?>
								<img src="<?php echo asset_url();?>images/imagicon.jpeg" id="" alt="<?php echo $file['dispaly_name'];?>"  style="width:50px;height:50px;">
							<?php } else if($file['file_type'] == "excel") { ?>
								<img src="<?php echo asset_url();?>images/excel.jpg" id="" alt="<?php echo $file['dispaly_name'];?>"  style="width:50px;height:50px;">
							<?php } else if ($file['file_type'] == "ppt") { ?>
								<img src="<?php echo asset_url();?>images/ppt.jpg" id="" alt="<?php echo $file['dispaly_name'];?>"  style="width:50px;height:50px;">
							<?php } else if ($file['file_type'] == "text") { ?>
								<img src="<?php echo asset_url();?>images/txtfile.png" id="" alt="<?php echo $file['dispaly_name'];?>"  style="width:50px;height:50px;">
							<?php } else if ($file['file_type'] == "zip") { ?>
								<img src="<?php echo asset_url();?>images/zipfile.png" id="" alt="<?php echo $file['dispaly_name'];?>"  style="width:50px;height:50px;">
							<?php } ?>
			   			 </a>
			   			 <br> 
			   			 <div style="padding-rop:5px;">
			   			 	<span style="color:#4B4B4B;font-family:Arial;font-size:11px;"><strong><?php echo substr($file['dispaly_name'],0,25);?><?php if(strlen($file['dispaly_name']) > 25) {?>..<?php } ?></strong></span>
			   			 </div>
		   			 </div>
					<?php } ?>
					<?php if(count($Files) <= 0) { ?>
						<div style="padding:100px;font-size:14px;">
							The <?php if($bcatinfo[0]['user_category_id'] == 1) { ?>seller<?php } elseif ($bcatinfo[0]['user_category_id'] == 2) { ?>shipper<?php } else { ?>buyer<?php } ?> has no files to share
						</div>
					<?php } ?>
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
		        			<div class="col-sm-4" style="margin-bottom:5px;">
		        						        			</div>
		        			<div class="col-sm-4" style="margin-bottom:5px;">
		        				<div class="form-group">
		        					<div class="label-text-input" style="padding-top:22px;text-align: center;">
	                            		<input type="button" class="btn btn-sm btn-primary" value="Download" id="btnfilepassword"  onclick="downloadprivatefile();"/>
									</div>
								</div>
		        			</div>
		        			<div class="col-sm-4" style="margin-bottom:5px;">
		        				
		        			</div>
		        		</div>	
	        	</form>
      		</div>
    	</div>
  	</div>
</div>
<script type="text/javascript">
	
function downloadprivatefile()
{
	var id = document.getElementById('fileid').value;
	var password = document.getElementById('filepassword').value;
	// alert(id);
	// alert(password);
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
				//e.preventDefault();  //stop the browser from following
			    //window.location.href = $("#myfilename"+id).attr('href');
			    window.open("<?php  echo base_url();?>mystation/myfile/download/"+id, '_blank', '');
			} 
		},'json');
	} else {
		alert('Please Enter Password');
	}
}


function passwordpoup(id)
{
	document.getElementById('fileid').value = id;
	document.getElementById('fileid').value = id;
}

$(document).keypress(
    function(event){
     if (event.which == '13') {
        event.preventDefault();
      }


});
</script>