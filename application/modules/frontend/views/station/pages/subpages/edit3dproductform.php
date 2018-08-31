<form name="frmchangeproductlink" method="post" action="" enctype="multipart/form-data" id="frmchangeproductlink">
	<div class="panel-heading custom-panel-heading">
  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer108', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
  	</div>
  <div class="panel-body panel-body-custom" id="" style="padding-top: 22px;padding-left: 45px;">		
  	<div id="editproduct_div">
  		<div class="row ">
	  		<div class="col-md-12">
	  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Real 3D Effects.</span>
	  		</div>
	  	</div><br><br>	
  		<div class="row">
	  		<div class="col-md-12">
	  			<span style="color:#3C3C3C;font-family:'Arial Black';font-size:16px;">STEP 1</span>
	  			<span style="padding-left:22px;color:#2D2D2D;font-family:Arial;font-size:11px;">The following product has been linked successfully</span>
	  		</div>
	  	</div><br><br>
	  	<input type="hidden" name="did" value="<?php echo $productdata[0]['did'];?>" id="did" />
	  	<input type="hidden" name="oldproductid" value="<?php echo $productdata[0]['id'];?>" id="oldproductid" />
	  	<input type="hidden" name="newproductid" value="<?php echo $productdata[0]['id'];?>" id="newproductid" />
  		<div class="row">
	  		<div class="col-md-12" >
	  			<div class="col-md-3" style="padding-top: 18px;background-color: #DCDCDC;text-align:left;width:562px;height:136px;">
	  				<div class="col-sm-12" >
	  					<div class="col-sm-3" style="padding:0px;" >
							<a href="<?php echo base_url();?>products/details/<?php echo $productdata[0]['id'];?>" target="_blank"><img id="pimg" src="<?php echo asset_url().$productdata[0]['main_image'];?>" style="width:104px;height:103px;border:2px solid #ccc;border-radius: 7px;"></a>
						</div>
	  					<div class="col-sm-9">
							<span style="color:#3C3C3C;font-family:Arial;font-size:12px;" id="pmodel_no">Product No.: <?php echo $productdata[0]['model_no']?></span><br>
							<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Product Name: </span>
							<span style="color:#3C3C3C;font-family:Arial;font-size:12px;" id="pname"><?php echo $productdata[0]['name'];?></span><br><br>
							<span style="color:#808080;font-family:Arial;font-size:11px;" id="pdescription"><?php echo substr($productdata[0]['description'],0,200);?><?php if(strlen($productdata[0]['description']) > 200) { ?>...<?php } ?></span>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<img src="<?php echo asset_url();?>images/tick-big.png" style=""><br><br><br>
					<a href="#" data-toggle="modal"  onclick="getproductlist();" data-target="#editdproduct_modal" backdrop='static'><span style="color:#1E90FF;font-family:'Arial Black';font-size:12px;"><u>Change</u></span></a>
				</div>
	  		</div>
	  	</div><br><br>
	  	<div class="row">
	  		<div class="col-md-8">
	  				<span style="color:#3C3C3C;font-family:'Arial Black';font-size:16px;">STEP 2</span>
	  				<span style="padding-left:22px;color:#2D2D2D;font-family:Arial;font-size:11px;">Images have been added successfully, click on " <strong>Change</strong>" button to replace, click " <strong>Test</strong>" button to view or Click on " <strong>Create </strong>" button to save and publish. </span>
					<img src="<?php echo asset_url();?>images/tick-big.png" >
	  		</div>
	  	</div><br><br>
	  	<div class="row">
	  		<div class="col-md-12">
	  			<input type="hidden" id="fileid" name="fileid" />
	  			<input type="file"  name="filechangeimage"   id="filechangeimage"  onchange="setBackground('filechangeimage',this,350,400,500);"  style="display: none"/>
	  			<?php  $i=1; foreach($productimage as $row) { ?>
	  				<div class="col-md-2 text-center" style="padding-bottom:10px;">
	  					<img src="<?php echo asset_url().$row['image'];?>" id="frame_<?php echo $row['id'];?>" style="width:100%;">
	  					<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">frame_<?php echo $i;?>.png</span><br>
	  					<a href="#" style="color:#1E90FF;font-family:'Arial Black';font-size:12px;" id="changeimage" onclick="changeimage(<?php echo $row['id'];?>);"><u>Change</u></a>
	  				</div>
	  			<?php $i++; } ?>
	  		</div>
	  	</div><br><br>
	  	<div class="row">
	  		<div class="col-md-12" style="padding-bottom: 22px;">
  				<div class="col-md-3"></div>
		  		<div class="col-md-2" >
		  			<button type="button"  onclick="openEdit3Dproduct();" style="border:none;background-color: rgb(67, 69, 70);width: 142px;height: 33px;"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Cancel</span></button>
	  			</div>
	  			<div class="col-md-2" >
	  				<button type="button" style="border:none;background-color: rgb(67, 69, 70);width: 142px;height: 33px;" onclick="open3DProduct(<?php echo $productdata[0]['did'];?>);"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Test</span></button>
	  			</div>
	  			<div class="col-md-2" >
	  				<button type="button"  onclick="createlink();" style="border:none;background-color: rgb(67, 69, 70);width: 142px;height: 33px;"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Update</span></button>
	  			</div>
			</div>
	  	</div><br><br>
   </div>
 </div>
 </form>

 <div id="editdproduct_modal" class="modal fade" role="dialog">
  	<div class="modal-dialog" style="width:80%;padding-top:4%;">
    	<div class="modal-content">
      		<div class="modal-header" style="background-color: #FF6347;padding: 8px;text-align: center;">
        		<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h4 class="modal-title" style="color:#FFFFFF; font-family:Georgia;font-size:21px;font-style:normal;text-align:center;">Change Product</h4>
      		</div>
      		<div class="modal-body" style="background-color: #FAFAFA;">
      			<form name="frmedit_product" method="post" action="" enctype="multipart/form-data" id="frmedit_product">
      				<div class="row">
      						<div class="col-md-12" style="padding-bottom: 22px;text-align: center;">
      							<button type="button" name="btnselproduct" onclick="chooseproduct();" style="width: 112px;height: 26px;">Use</button>
      						</div>
      				</div>
        			<div id="divproductlist" style="max-height: 300px;overflow-y: scroll;">
        			</div>
        		</form>
      		</div>
    	</div>
  	</div>
</div>
<div id="promodal_edit">
</div>
 <script>
 function open3DProduct(id) {
	$.get(base_url+"mystation/3dpro/show/"+id, {}, function(data){
		$("#promodal_edit").html(data);
		$("#my3DModal").modal('show');
		init3D('my3dimg');
	},'html');
 }
 function setBackground(id,input,width,height,size) {
	  	if (input.files && input.files[0]) {
	    	var reader = new FileReader();
	       	reader.onload = function (e) {
	       		var ext = input.files[0].name.split('.').pop();
	       		var file_size = parseInt(input.files[0].size);
	       		var filesizeinkb = (file_size/1024);
	       		var image = new Image();
	            image.src = e.target.result;
	            image.onload = function () {
	                var imgheight = this.height;
	                var imgwidth = this.width;
	                if(ext == 'jpg' || ext == 'jpeg' || ext == 'png') {
		                if(filesizeinkb > size) {
		                	customAlert("Image size should be "+size+"kb max.");
		                    $('#'+id).val('');
		                } else {
			                if (imgwidth != width || imgheight != height) {
			                	customAlert("Image dimensions should be "+width+"*"+height+" Pixel.");
			                    $('#'+id).val('');
			                } else {
			                	changeDimage();
			                	var id = "frame_"+document.getElementById('fileid').value
			                	$('#'+id).css('background-image', 'url('+e.target.result+')').css('background-size','cover');
			                }
		                }
	                } else {
	                	customAlert("Image should be JPG or JPEG.");
	                    $('#'+id).val('');
	                }
	            };
	      	}
	        reader.readAsDataURL(input.files[0]);
	   	}
	}
 
 var asset_url = '<?php echo asset_url();?>';
 function createlink()
 {
	 var newproductid = document.getElementById('newproductid').value;
	 
	 if(newproductid != "")
	 {
		 linkProductUpdate();
	 } else {
		 customAlert('Please Select New Product to Link with 3D Images.');
	 }
 }
 function changeimage(id)
 {
	 document.getElementById('fileid').value = id;
	 $("#filechangeimage").trigger('click');
 }
 /*$('#filechangeimage').on('change', function() {
	 setBackground();
 });*/
 var asseturl = '<?php echo asset_url();?>';
 function chooseproduct()
 {
	 var values = new Array();
	    $.each($("input[name='product_id']:checked"), function(){            
	    	values.push($(this).val());
	    });
		values = values.filter(v=>v!=null);
		if(values.length > 0 ) {
			if(values.length > 1)
			{
				customAlert('Please select Only one product to link 3d  Images.');
			} else {
				 	var productid = values[0];
				 	$.post("<?php echo base_url();?>mystation/getproductbyid",{productid:productid},function(data) {
					 	document.getElementById('pmodel_no').textContent = data[0]['model_no'];
					 	document.getElementById('pname').textContent = data[0]['name']
					 	document.getElementById('pdescription').textContent = data[0]['description'];
					 	document.getElementById('newproductid').value = data[0]['id'];
					 	$("#pimg").attr("src", asseturl+data[0]['main_image']);
					 	jQuery('#editdproduct_modal').modal('hide');
				 	},'json');
			}
		} else {
			customAlert('Please select product to link 3d  Images.');
		}
 }
 function getproductlist()
 {
	 $.post("<?php echo base_url();?>mystation/getproductlist",{},function($data) {
		 document.getElementById('divproductlist').innerHTML = $data;
	 });
 }
 function changemainproductimg()
 {
	 document.getElementById('imgmainproduct').style.display = 'none';
	 document.getElementById('changeproductfile').style.display = 'block';
	 
 }
jQuery('#fileprofileImg').on('click', function(e){
	jQuery('#profile_pic_modal').modal({show:true,backdrop: 'static',keyboard: false});
	$('#photo').css('display', 'none');
	jQuery("#profile-pic").val('');
	jQuery('.imgareaselect-outer').css('display','none');
	});


jQuery('#profile-pic').on('change', function() {
	
         $('#photo').css('display', 'block');
         
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
    
});

jQuery('#save_crop').on('click', function(e){
	if(jQuery('#x1').val() != "")
	{
			e.preventDefault();
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
				jQuery(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-border2,.imgareaselect-outer,.imgareaselect-selection").css('display', 'none');
				jQuery("#profileImage").attr('src', response['fullpath']);
				$('#profilepath').val(response['path']);
				//$('#messageContainer1').empty();
				$('#frmeditpersonalinfo').bootstrapValidator('revalidateField', 'data[profilepath]');
				//jQuery("#preview-profile-pic").html('');
				$('#divprofileImage').css('display', 'block');
				$('#divfileprofileImg').css('display', 'none');
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
 
