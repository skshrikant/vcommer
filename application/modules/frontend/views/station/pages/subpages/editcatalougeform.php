		<form name="frmeditcatalouge" method="post" action="" enctype="multipart/form-data" id="frmeditcatalouge">
			<div class="panel-heading custom-panel-heading">
				<a href="javascript:addNewCatalogueItem(<?php echo $catalogue['id'];?>);" class="btn btn-default btn-custom" id="personal_edit_btn">
				<img src="<?php echo asset_url();?>images/img1625.png" style="padding-right: 4px;height: 78%;">Add Product</a>
		  		<a href="javascript:deleteCatalogueItem(<?php echo $catalogue['id'];?>);" class="btn btn-default btn-custom" id="personal_info_btn">
		  		<img src="<?php echo asset_url();?>images/img1594.png" style="padding-right: 4px;height: 78%;" alt="">Delete</a>
		  		<a href="javascript:moveFrontCatalogueItem(<?php echo $catalogue['id'];?>);" class="btn btn-default btn-custom" id="personal_info_btn">
		  		<img src="<?php echo asset_url();?>images/img1623.png" style="padding-right: 4px;height: 78%;">Move Front</a>
		  		<a href="javascript:moveBackCatalogueItem(<?php echo $catalogue['id'];?>);" class="btn btn-default btn-custom" id="personal_info_btn">
		  		<img src="<?php echo asset_url();?>images/img1627.png" style="padding-right: 4px;height: 78%;">Move Back</a>
		  		<a href="javascript:updateCatalogue();" class="btn btn-default btn-custom" id="personal_info_btn">Update</a>
		  		<a href="javascript:openEditCatalouge();" class="btn btn-default btn-custom" id="personal_info_btn">Cancel</a>
		  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer124', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
		  	</div>
	  		<div class="panel-body panel-body-custom" id="" style="padding-top: 22px;padding-left: 45px;">		
			  	<div id="editcatalougeform_div">
			  		<input type="hidden" name="vcat_id" id="vcat_id" value="<?php echo $catalogue['id'];?>" />
			  		<div class="row ">
				  		<div class="col-md-12">
				  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Manage Virtual Catalouge</span>
				  		</div>
				  	</div><br><br>	
			  		<div class="row">
				  		<div class="col-md-12">
				  				<div class="col-md-2">
						  			<span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Change Title</span>
						  		</div>
						  		<div class="col-md-5">		
						  			<input type="text" id="catalogue_title" style="left:150px;top:179px;width:264px;height:24px;line-height:24px;z-index:996;" name="vcatalogue_title" value="<?php echo $catalogue['catalogue_title'];?>" maxlength="20" placeholder="Type A Short Name For Your Catalouge">
						  		</div>	
						  		<div class="col-md-2">		
						  			<span style="color:#3C3C3C;font-family:Georgia;font-size:11px;">Change the cover image</span><br>
						  			<span style="color:#666666;font-family:Arial;font-size:9.3px;">jpg or png, Dimensions: 200*200 pixel, Resolution: 75, with Max. size 100 KB </span><br><br>
						  			<a href="#" class="style23 vvCatalogAction" id="upload_img">Upload</a>
						  			<a href="#" class="style23 vvCatalogAction" id="change_img" style="display: none;">Change</a>
					  		 	</div>
					  		 	<div class="col-md-3">
					  		 		<input type="hidden" name="vcataloguepath" id="vcataloguepath"  value="<?php echo $catalogue['catalogue_cover'];?>" />
					  		 		<img src="<?php echo asset_url();?><?php echo $catalogue['catalogue_cover'];?>" id="Shape263" alt="" style="width:122px;height:122px;border-radius:50%;">
					  		 	</div>
					  	</div>
				  	</div>
				</div><br>
		  		<div class="row">
			  		<div class="col-md-8">
			  			<span style="color:#2D2D2D;font-family:Arial;font-size:16px;">Products:</span>
			  			<span style="color:#F05539;font-family:Arial;font-size:21px;"><?php echo count($products);?> </span>
			  			<span style="color:#F05539;font-family:Arial;font-size:12px;">out of </span>
			  			<span style="color:#F05539;font-family:Arial;font-size:21px;">20</span>
			  			<span style="color:#1E90FF;font-family:Arial;font-size:17px;">(<?php echo $catalogue['pages'];?> Pages Catalogue)</span>
			  		</div>
			  	</div><br><br>
		  		<div class="row">
		  		<?php foreach ($products as $product) { ?>
			  		<div class="col-md-4">
			  			<div id="Layer143" style="text-align:left;left:40px;top:331px;width:320px;height:115px;z-index:999;">
						<div id="wb_Text432" style="position:absolute;left:145px;top:39px;height:15px;z-index:961;text-align:left;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Product No.: <?php echo $product['model_no'];?></span></div>
						<div id="wb_Text435" style="position:absolute;left:145px;top:59px;height:15px;z-index:962;text-align:left;">
						<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><?php echo $product['name'];?></span></div>
						<div id="wb_Shape268" style="position:absolute;left:34px;top:20px;width:98px;height:80px;z-index:963;">
						<a href="<?php echo base_url();?>deskdetails/<?php echo $product['id'];?>" target="_blank"><img src="<?php echo asset_url();?><?php echo $product['main_image'];?>" id="Shape268" alt="" style="width:98px;height:80px;"></a></div>
						<input type="checkbox" id="vproduct_id" name="vproduct_id" value="<?php echo $product['id'];?>" style="position:absolute;left:22px;top:46px;z-index:964;">
						<input type="hidden" id="sortorder_<?php echo $product['id'];?>" value="<?php echo $product['sortorder'];?>" />
						</div>
			  		</div>
			  	<?php } ?>
			  	</div><br><br>
			  	<!--<div class="row"  style="padding-top: 35px;text-align:right">
			  		<div class="col-md-8">
			  			<button type="button"  style="text-align: center; width: 148px;height:25px;background-color: #3C3C3C; border:none;" onclick="updateCatalogue();"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Update</span></button>
			  			<button type="button"  style="text-align: center; width: 148px;height:25px;background-color: #3C3C3C; border:none;" onclick="openEditCatalouge();"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Cancel</span></button>
			  		</div>		
			  	</div>-->
			   </div>
	   		</div>
 	</form>
 	<div id="vcatalogue_ps_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Search Products</h3>
			</div>
			<div class="modal-body" >
				<input type="hidden" name="vcatlog_id" id="vcatlog_id" value="" />
				<div class="row col-sm-12" >
			  		<div class="product-search-bar">
						<!--<select name="sub_product_id" id="catalog_product_id" class="form-control" style="display:inline-block;width:auto;height:30px;">
					  		<?php foreach ($mproducts as $mpro) { ?>
				      			<?php foreach ($mpro['subproducts'] as $spro) { ?>
				        		<option value="<?php echo $spro['id'];?>"><?php echo $spro['name'];?> (<?php echo $mpro['name'];?>)</option>
				        		<?php } ?>
					    	<?php } ?>
					  	</select>-->
					  	<input type="text" id="vcitem_name" style="width: 230px; height: 29px; line-height: 29px;" name="item_name" placeholder="Type products name or no.">
					  	<button type="button" onclick="searchCatalogueProducts();" name="searchproduct" class="btn btn-search-black"><i class="fa fa-search"></i></button>
					</div>
					<br><br>
	  			</div>	
	  			<br><br>
			  	<div id="search_result_catalogue_edit">
			  	
			  	</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-danger-custom" data-dismiss="modal">Close</button>
				<button type="button" id="addtocat" class="btn btn-danger-custom">Add To Catalogue</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$('.vvCatalogAction').on('click', function(e){
	$('#vcatalogue_pic_modal').modal({show:true,backdrop: 'static',keyboard: false});
	$('#photo').css('display', 'none');
	$("#catalogue-pic").val('');
	$('.imgareaselect-outer').css('display','none');
});

$('#catalogue-pic').on('change', function() {
         var reader = new FileReader();
         reader.onload = function (e) {
          	$('#photo').show();
          
    	 }
         reader.readAsDataURL(this.files[0]);
         savetemparary();

         var ias = $('#photo').imgAreaSelect( {
             aspectRatio: '1:1',
             /*maxWidth: 200, 
             maxHeight: 200,
             minWidth: 200, 
             minHeight: 200,*/
             x1: 0,
             y1: 0, 
             x2: 200,
             y2: 200,
             onSelectEnd: function ( image, selected) {
                 $('input[name=x1]').val(selected.x1);
                 $('input[name=y1]').val(selected.y1);
                 $('input[name=x2]').val(selected.x2);
                 $('input[name=y2]').val(selected.y2);
                 $('input[name=width]').val(selected.width);
                 $('input[name=height]').val(selected.height);
             },
             handles: true,
             parent: '#parent'
         });
         ias.load(function(){
          	var height = ( this.width / 1 ) * 1;
          	if( height <= this.height ){     
            	var diff = ( this.height - height ) / 2;
               	var coords = { x1 : 0, y1 : 0, x2 : 200, y2 : 200 };
               	$('input[name=x1]').val(0);
                $('input[name=y1]').val(0);
                $('input[name=x2]').val(200);
                $('input[name=y2]').val(200);
                $('input[name=width]').val(200);
                $('input[name=height]').val(200);
         	} else {
           		var width = ( this.height / 1 ) * 1; 
                var diff = ( this.width - width ) / 2;
                var coords = { x1 : 0, y1 : 0, x2 : 200, y2: 200 };
                $('input[name=x1]').val(0);
                $('input[name=y1]').val(0);
                $('input[name=x2]').val(200);
                $('input[name=y2]').val(200);
                $('input[name=width]').val(200);
                $('input[name=height]').val(200);
         	}   
         	$( this ).imgAreaSelect( coords );
 		});
    
});

$('#save_crop').on('click', function(e){
	if($('#x1').val() != "")
	{
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
	$.ajax({
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
				$('#vcatalogue_pic_modal').modal('hide');
				$('.imgareaselect-outer').css('display','none');
				$(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-border2,.imgareaselect-outer").css('display', 'none');
				$("#Shape263").attr('src', response['fullpath']);
				$('#vcataloguepath').val(response['path']);
				$("#catalogue-pic").val('');
				$("#change_img").css("display", "block");
				$("#upload_img").css("display", "none");
			},
		
	},'json');
}

function savetemparary() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showVCoverRequest, // pre-submit callback 
 			success :  showVCoverResponse,
 			url : '<?php echo base_url()?>mystation/account/savevcovertempimg',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#cropimage').ajaxSubmit(options);
}

function showVCoverRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}

function showVCoverResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
	} else {
		$('#photo').attr('src', resp.msg);
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		$('#photo').attr('src', resp.msg);
		$('#image_name').val(resp.msg);
	}
	ajaxindicatorstop();
}

$('#vcatalogue_pic_modal').on('hidden.bs.modal' , function() {
	$('#photo').imgAreaSelect( {remove: true} );
});
var selected_product_ids = new Array();
$('input[name="vproduct_id"]').each(function() {
		if(selected_product_ids.indexOf(this.value) == -1)        
    		selected_product_ids.push(this.value);
});

function updateCatalogue() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="vproduct_id"]').each(function() {
		if(item_id != "") {
			item_id = item_id+","+this.value;
		} else {
			item_id = this.value;
		}
	   	checkcount++;
	});
	if(checkcount <= 0 ){
		alert("Select product first.");
	} else {
		ajaxindicatorstart("Please wait .. while we update catalogue...");
		$.post(base_url+"mystation/catalogue/update",{id: $("#vcat_id").val(),item_id: item_id, catalogue_img: $("#vcataloguepath").val(), catalogue_title: $("#catalogue_title").val()},function(resp){
			if(resp.status == 0) {
				alert(resp.msg);
			} else {
				alert(resp.msg);
				openEditCatalouge();
			}
			ajaxindicatorstop();
		},'json');
	}
}

function addNewCatalogueItem(id) {
	$("#vcatlog_id").val(id);
	$("#vcatalogue_ps_modal").modal('show');
}

function searchCatalogueProducts() {
	if($("#vcitem_name").val() != "" && $("#catalog_product_id").val() != "") {
		ajaxindicatorstart("Please wait .. while we search product...");
		$.get(base_url+"mystation/catalogue/product/search",{ query: $("#vcitem_name").val(), sproduct_id: $("#catalog_product_id").val()},function(data){
			$("#search_result_catalogue_edit").html(data);
			ajaxindicatorstop();
		},'html');
	} else {
		alert("Please enter product name");
	}
}

$("#addtocat").click(function(){
	var checkcount = 0;
	var item_id = "";
	var product_already_present = false;
	if(selected_product_ids.length > 20)
	{
		alert("20 Products have already been added");
	}
	$('#search_result_catalogue_edit input[name="vproduct_id"]:checked').each(function() {
		
		if(selected_product_ids.indexOf(this.value) == -1){
			selected_product_ids.push(this.value);
			if(item_id != "") {
					item_id = item_id+","+this.value;
			} else {
					item_id = this.value;
				}
	   			checkcount++;
		}else{
			product_already_present = true;
		}
		
	});

	if(checkcount <= 0 ){
		if(product_already_present)
			alert("Select product already present.");
		else
			alert("Select product first.");
	} else {
		ajaxindicatorstart("Please wait .. while we add catalogue item...");
		$.post(base_url+"mystation/catalogue/add/items",{catalogue_id: $("#vcatlog_id").val(), item_id: item_id},function(resp){
			if(resp.status == 0) {
				alert(resp.msg);
			} else {
				$("#vcatalogue_ps_modal").modal('hide');
				$("#edit_cat_btn").trigger("click");
				$.get(base_url+"mystation/editCatelougeForm",{catalogue_id: $("#vcatlog_id").val()},function(data){
					$("#addcatalouge").html("");
					$("#editcatalouge").html(data);
					$("#editcatalouge_div").show();
				});
				alert(resp.msg);
			}
			ajaxindicatorstop();
		},'json');
	}
});

function moveFrontCatalogueItem(catalogue_id) {
	var checkcount = 0;
	var item_id = "";
	$('input[name="vproduct_id"]:checked').each(function() {
		if(item_id != "") {
			item_id = item_id+","+this.value;
		} else {
			item_id = this.value;
		}
	   	checkcount++;
	});
	var sortorder = $("#sortorder_"+item_id).val();
	if(checkcount <= 0 ){
		alert("Select product first.");
	} else if(checkcount > 1) {
		 alert("You can move only one product at a time.");
	} else {
		ajaxindicatorstart("Please wait .. while we move catalogue item...");
		$.post(base_url+"mystation/catalogue/item/movetofront",{id: catalogue_id,item_id: item_id, sortorder: sortorder},function(resp){
			if(resp.status == 0) {
				alert(resp.msg);
			} else {
				$.get(base_url+"mystation/editCatelougeForm",{catalogue_id: catalogue_id},function(data){
					ajaxindicatorstop();
					$("#addcatalouge").html("");
					$("#editcatalouge").html(data);
					$("#editcatalouge_div").show();
				});
			}
			ajaxindicatorstop();
		},'json');
	}
}

function moveBackCatalogueItem(catalogue_id) {
	var checkcount = 0;
	var item_id = "";
	$('input[name="vproduct_id"]:checked').each(function() {
		if(item_id != "") {
			item_id = item_id+","+this.value;
		} else {
			item_id = this.value;
		}
	   	checkcount++;
	});
	var sortorder = $("#sortorder_"+item_id).val();
	if(checkcount <= 0 ){
		alert("Select product first.");
	} else if(checkcount > 1) {
		 alert("You can move only one product at a time.");
	} else {
		ajaxindicatorstart("Please wait .. while we move catalogue item...");
		$.post(base_url+"mystation/catalogue/item/movetoback",{id: catalogue_id,item_id: item_id, sortorder: sortorder},function(resp){
			if(resp.status == 0) {
				alert(resp.msg);
			} else {
				$.get(base_url+"mystation/editCatelougeForm",{catalogue_id: catalogue_id},function(data){
					ajaxindicatorstop();
					$("#addcatalouge").html("");
					$("#editcatalouge").html(data);
					$("#editcatalouge_div").show();
				});
			}
			ajaxindicatorstop();
		},'json');
	}
}

</script> 
