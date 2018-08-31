<form name="frmshipperaddvedio" method="post" action="" enctype="multipart/form-data" id="frmshipperaddvedio">
	<div class="panel-heading custom-panel-heading">
  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer149', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 15px;padding-left: 45px;">		
  		<div id="addproduct_div">
	  		<div class="row ">
		  		<div class="col-md-12">
		  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Services Videos</span>
		  		</div>
		  	</div>
	  		<div class="row">
		  		<div class="col-md-12">
		  			<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Present your company with rich information to global sellers &amp; through our " Services In Videos " tube. <br></span>
		  		</div>
		  	</div><br>
			<div id="servicevedio" >
				<div class="row" >
					<div class="col-md-3" >
						
					</div>
					<div class="col-md-4" style="padding-left:45px;">
						<!-- video src="http://www.udtalks.com/orbitok.mp4" id="MediaPlayer1" controls="controls"></video-->
						<div id="img_div" style="width:250px;height:150px;z-index:1036;padding-left:15px;padding-top: 14px;">
							<a href="javascript:openFileInput();" id="oneproductupload"><img src="<?php echo asset_url();?>images/video-player.png" id="Image283" alt="" style="height:100%;"></a>
						</div>
						<div id="video_div" style="width:250px;height:150px;z-index:1036;padding-left:0px;padding-top: 14px;display:none;">
							<video src="" id="MediaPlayer1" controls="controls">
								<source src="" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
							</video>
						</div>
					</div>
				</div>
				<div class="row" >
					<div class="col-md-12" >
						<div class="col-md-3" >
						</div>
						<div class="col-md-4" style="text-align: center">
							<span style="color:red">*</span>	<span style="color:#666666;font-family:Arial;font-size:9.3px;">Mp4 format, Max. size: 20 MB</span>
						</div>	
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12" style="text-align: center">
						<div class="col-md-3" >
						</div>
						<div class="col-md-4">
							<?php $maxvediosizeinbyte =  20* 1048576; ?>
							<div class="col-sm-12" id="upload_div" style="height:30px;z-index:1037;text-align:center;padding-top: 0px;">
								<span style="color:#1E90FF;font-family:'Arial Black';font-size:12px;"><u><a href="javascript:openFileInput();" class="style23" id="oneproductupload">Upload</a></u></span>
							</div>
							<div class="col-sm-12" id="change_div" style="height:30px;z-index:1037;text-align:center;padding-top: 0px;display:none;">
								<span style="color:#1E90FF;font-family:'Arial Black';font-size:12px;"><u><a href="javascript:openFileInput();" class="style23" id="oneproductupload">Change</a></u></span>
							</div>
		  					<!-- a href="#"  style="padding-right: 22px;" class="style23"  id="oneproductupload">Upload</a>
		  					<a href="#" class="style23" >Change</a-->
		  					<input type="file"  name="uploadonepvedio"  id="uploadonepvedio" onchange="validatevediofile('uploadonepvedio',this,<?php echo $maxvediosizeinbyte ; ?>);" style="display: none"/>
						</div>
						<div class="messageContainer" ></div>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12" style="text-align: center">
						<div class="col-md-3" >
							<span style="color:red">*</span>&nbsp;<span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Video title</span>
						</div>	
						<div class="col-md-4" >
							<input type="text" class="form-control"  name="vediotitle" maxlength="50" Placeholder="e.g. Door to door air freight" id="vediotitle" />
							<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">The title must contain the words that the visitor is likely to type to find your video above others in search result</span>
						</div>
						<div class="messageContainer" ></div>
					</div>
				</div><br>
				<div class="row">
					<div class="col-md-12" style="text-align: center">
						<div class="col-md-3" >
							<span style="color:red">*</span>&nbsp;<span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">About this video</span>
						</div>	
						<div class="col-md-4" >
							<textarea rows="5" cols="42" name="description" maxlength="200" id="description"  Placeholder="Type a brief introduction to the service provided in this video"></textarea>
						</div>
						<div class="messageContainer" ></div>
					</div>
				</div><br>
				<div class="row">
  					<div class="col-md-12" style="padding-bottom: 22px;">
  					<?php if($total_videos < $max_videos) { ?>
  						<div class="col-md-3"></div>
			  			<div class="col-md-2" >
			  				<button type="submit" style="border:none;background-color: rgb(67, 69, 70);width: 142px;height: 33px;"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Publish</span></button>
			  			</div>
			  			<div class="col-md-2" >
			  				<button type="button" style="border:none;background-color: rgb(67, 69, 70);width: 142px;height: 33px;"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Cancel</span></button>
			  			</div>
			  		<?php } else { ?>
			  			<div class="col-sm-10 text-center">
			  				<!--<span style="color:#F05539;font-family:Arial;font-size:18px;">You have reached your maximum video limit.</span>-->
			  			</div>
			  		<?php } ?>
					</div>
				</div>
		  	</div>
   		</div>
   </div>
 </form>
  <div id="productlist_modal" class="modal fade">
	<div class="modal-dialog" >
		<div class="modal-content" style="border:2px #FF6347 solid">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Select The Product</h3>
			</div>
			<div class="modal-body" >
				<form id="frmproductlist" method="post" enctype="multipart/form-data" action="">
					<div style="text-align: center;padding-top:22px;padding-bottom:22px;">
						<input type="button"  onclick="selectproduct();" id="btnuseproduct"  name="" value="Use" style="width:158px;height:25px;">
					</div>
						<div id="subproductlist_div" style="max-height:500px;overflow-y: scroll;">
						
						</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div id="accessDeniedModal5" class="modal fade" role="dialog">
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
							Opps.. Your subscription plan not allow you to use this services 
						</div>
					</div>
					<div class="col-sm-2"></div>
      			</div>
      			<br>
      			<div class="row text-center">
      				<a href="javascript:upgradeMyBusinessPlan();" class="btn btn-sm btn-danger-custom" style="width:150px;">Upgrade</a>
      				<a href="javascript:cancelAccessDeniedPopupVideo();" class="btn btn-sm btn-danger-custom" style="width:150px;">Cancel</a>
      			</div>
      			<br><br>
      		</div>
    	</div>
  	</div>
</div>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>
<script>
$('#frmshipperaddvedio').bootstrapValidator({

	container: function($field, validator) {
		return $field.parent().next('.messageContainer');
   	},
    feedbackIcons: {
        validating: 'glyphicon glyphicon-refresh'
    },
    excluded: ':disabled',
    fields: {
  		'vediotitle': {
            validators: {
                notEmpty: {
                    message: 'The Title is required and cannot be empty'
                }
            }
        }, 
        'description': {
            validators: {
                notEmpty: {
                    message: 'The Description  is required and cannot be empty'
                }
            }
        },
        'uploadonepvedio': {
            validators: {
                notEmpty: {
                    message: 'The Vedio File is required and cannot be empty'
                }
            }
        }

    }
}).on('success.form.bv', function(e) {
// Prevent form submission
	e.preventDefault();
	savevedio();
});
function savevedio() {
	ajaxindicatorstart("Please wait .. while we save query...");
	var options = {
		target : '#response', 
		beforeSubmit : showVedioRequest,
		success :  showVedioResponse,
		url : base_url+'mystation/saveservicevedio',
		semantic : true,
		dataType : 'json'
	};
	$('#frmshipperaddvedio').ajaxSubmit(options);
}

function showVedioRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}

function showVedioResponse(resp, statusText, xhr, $form){
	if(resp.status == '0') {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
			openAddvedio();
		$("#save").prop('disabled',false);
	} else {
		$(".text-danger").hide();
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		$("#myvideo_edit").trigger("click");
		ajaxindicatorstop();
		openAddvedio();
	}
}
function openFileInput() {
	<?php if($total_videos < $max_videos) { ?>
	 	$("#uploadonepvedio:hidden").trigger('click');
	<?php }else{ ?>
		$('#accessDeniedModal5').modal({show:true,backdrop: 'static',keyboard: false});
	<?php } ?>
}
function upgradeMyBusinessPlan() {
	ShowObjectWithEffect('Layer149', 0, 'dropup', 500, 'easeInBounce');
	getMyPackages();
}
function cancelAccessDeniedPopupVideo() {
			ShowObjectWithEffect('Layer149', 0, 'dropup', 500, 'easeInBounce');
			ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');
			$('#accessDeniedModal5').modal('toggle');
}

$(function(){
    $("#oneproductupload").unbind().on('click', function(e){
        e.preventDefault();
        $("#uploadonepvedio:hidden").trigger('click');
    });
});

function validatevediofile(id,input,size)
{
	var flag = true;
	if (input.files && input.files[0]) {
       		var ext = input.files[0].name.split('.').pop();
       		var file_size = parseInt(input.files[0].size);
       		var filesizeinkb = (file_size/1024);
       		var sizeinkb = (size/1024);
       		var filesizeinmb = (file_size/1048576).toFixed(2);
       		var sizeinmb = (size/1048576).toFixed(2);
       		if(ext == 'mp4') {
	         	if(parseFloat(filesizeinmb) > parseFloat(sizeinmb)) {
                	alert("File size should be 20 MB max.");
                    $('#'+id).val('');
                    flag = false;
                } else {
					$("#upload_div").hide();
					$("#change_div").show();
					$("#img_div").hide();
					$("#video_div").show();
					var reader = new FileReader();
                    reader.onload = function (e) {
                        video = $('#MediaPlayer1').attr('src', e.target.result);
                        var source = document.createElement('source');
                        source.setAttribute('src', e.target.result);
                        video.append(source);
                        $("#MediaPlayer1 > source").attr("src",e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
        	} else {
              	alert("File should be mp4 format.");
              	$('#'+id).val('');
               	flag = false;
         	}
			
   	} else {
   		$("#upload_div").show();
		$("#change_div").hide();
		$("#img_div").show();
		$("#video_div").hide();
		//$('#MediaPlayer1').attr('src', "");
   	}
	return flag;
}
var asseturl = '<?php echo asset_url();?>';

