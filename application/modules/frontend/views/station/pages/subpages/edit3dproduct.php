<form name="frmeditdproduct" method="post" action="" enctype="multipart/form-data" id="frmeditdproduct">
	<div class="panel-heading custom-panel-heading">
		<a href="javascript:editproductlist();;" class="btn btn-default btn-custom" id="3dproduct_edit_btn" >
		<img src="<?php echo asset_url();?>images/img1595.png" style="padding-right: 4px;height: 78%;" alt="">Edit</a>
  		<a href="javascript:deleteproductlist();" class="btn btn-default btn-custom" id="personal_info_btn"  >
  		<img src="<?php echo asset_url();?>images/img1594.png" style="padding-right: 4px;height: 78%;" alt="">Delete</a>
  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer108', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 22px;padding-left: 45px;">		
		  	<div id="editproduct_div">
		  		<div class="row ">
			  		<div class="col-md-12">
			  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Manage Your Real In 3D Products.</span>
			  		</div>
			  	</div><br><br>	
		  		<div class="row">
			  		<div class="col-md-12">
			  			<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Click checkbox next to each product then click edit or delete.</span>
			  		</div>
			  	</div><br><br>
		  		<div class="row">
			  		<div class="col-md-12">
			  				<span style="color:#2D2D2D;font-family:Arial;font-size:16px;">You have total:</span>
			  				<span style="color:#F05539;font-family:Arial;font-size:21px;"><?php echo count($productdata);?></span>
			  				<span style="color:#F05539;font-family:Arial;font-size:12px;">out of </span>
			  				<span style="color:#F05539;font-family:Arial;font-size:21px;"><?php echo $max_3dpro;?></span>
			  				<span style="color:#2D2D2D;font-family:Arial;font-size:16px;">3D Products</span>
			  		</div>
			  	</div><br><br>
			  	<?php for ($i=0;$i<count($productdata);$i++) {  ?>
		  		<div class="row">
			  		<div class="col-md-12" style="background-color: #DCDCDC;text-align: left;padding: 22px; width: 974px; height: 166px;">
			  				<div class="col-md-1">
			  					<input type="checkbox" id="productlist" name="productlist[]" value="<?php echo $productdata[$i]['did'];?>" style="position: absolute; left:61px;top: 44px;">
			  				</div>
			  				<div class="col-md-2">
			  					<a href="<?php echo base_url();?>products/details/<?php echo $productdata[$i]['id'];?>" target="_blank"><img src="<?php echo asset_url().$productdata[$i]['main_image'];?>" id="Shape49" alt="3D Pro" style="width: 135px;border: 2px solid #ccc;border-radius: 7px;"></a>
			  				</div>
			  				<div class="col-md-4">
			  					<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $productdata[$i]['name'];?></span>
			  					<span style="color:#808080;font-family:Arial;font-size:11px;"><?php echo substr($productdata[$i]['about'],0,280);?><?php if(strlen($productdata[$i]['about']) > 280) {?>...<?php } ?></span>
			  					<br><span style="color:#3C3C3C;font-family:Arial;font-size:12px;">USD <?php echo $productdata[$i]['unit_price'];?><span style="color:#3C3C3C;font-family:Arial;font-size:12px;"> Min. Qty :<?php echo $productdata[$i]['quantity'];?> Containers</span></span>
			  					
			  				</div>
			  				<div class="col-md-4">
			  							<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Product No.: <?php echo $productdata[$i]['model_no'];?></span><br>
			  							<span style="color:#1E90FF;font-family:Arial;font-size:12px;">Location: <?php echo $productdata[$i]['mainproduct'];?> > <?php echo $productdata[$i]['subproduct'];?> > <?php echo $productdata[$i]['name'];?></span>
			  				</div>
			  		</div>
			  	</div>
			  	<?php $i++;  if($i < count($productdata)) { ?>
			  	<div class="row">
			  		<div class="col-md-12" style="background-color: #F5FFFA;text-align: left;padding: 22px; width: 974px; height: 166px;">
			  				<div class="col-md-1">
			  					<input type="checkbox" id="productlist" name="productlist[]" value="<?php echo $productdata[$i]['did'];?>" style="position: absolute; left:61px;top: 44px;">
			  				</div>
			  				<div class="col-md-2">
			  					<a href="<?php echo base_url();?>products/details/<?php echo $productdata[$i]['id'];?>" target="_blank"><img src="<?php echo asset_url().$productdata[$i]['main_image'];?>" id="Shape49" alt="3D Pro" style="width: 135px;border: 2px solid #ccc;border-radius: 7px;"></a>
			  				</div>
			  				<div class="col-md-4">
			  					<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $productdata[$i]['name'];?></span>
			  					<span style="color:#808080;font-family:Arial;font-size:11px;"><?php echo substr($productdata[$i]['about'],0,280);?><?php if(strlen($productdata[$i]['about']) > 280) {?>...<?php } ?></span>
			  					<br><span style="color:#3C3C3C;font-family:Arial;font-size:12px;">USD <?php echo $productdata[$i]['unit_price'];?> <span style="color:#3C3C3C;font-family:Arial;font-size:12px;"> Min. Qty : <?php echo $productdata[$i]['quantity'];?> Containers</span></span>
			  					
			  				</div>
			  				<div class="col-md-4">
			  							<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Product No.: <?php echo $productdata[$i]['model_no'];?></span><br>
			  							<span style="color:#1E90FF;font-family:Arial;font-size:12px;">Location: <?php echo $productdata[$i]['mainproduct'];?> > <?php echo $productdata[$i]['subproduct'];?> > <?php echo $productdata[$i]['name'];?></span>
			  				</div>
			  		</div>
			  	</div>
			  	<?php } }?>
		   </div>
   	</div>
 </form>
  <div id="profile_pic_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Add Profile Picture</h3>
			</div>
			<div class="modal-body" >
				<form id="cropimage" method="post" enctype="multipart/form-data" action="">
						<span><b>Upload Image:</b> <input type="file" name="profile-pic" id="profile-pic"  accept=".png,.jpg,.jpeg.gif" class="form-control" style="width:200px;display:inline-block;"/></span> <br><br>
						
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
 <script>

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
 
