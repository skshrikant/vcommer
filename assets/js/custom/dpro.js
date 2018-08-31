function get3Dproduct()
{
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/3dproduct",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer108', 1, 'scale', 500, 'swing');
		$("#Layer108_Container").html(data);
		return false;
	});
}
function openAdd3Dproduct()
{
	$.get(base_url+"mystation/add3dproduct",{},function(data){
		$("#addproduct").html(data);
		$("#addproduct_div").show();
	});
}
function openEdit3Dproduct()
{
	$.get(base_url+"mystation/edit3dproduct",{},function(data){
		$("#editproduct").html(data);
		$("#editproduct_div").show();
	});
}
function openEdit3DproductFormByeditproduct(product_id)
{
	$.get(base_url+"mystation/edit3dproductForm",{product_id:product_id},function(data){
		$("#editproduct").html(data);
		$("#editproduct_div").show();
		$(document).ready(function(){
			$('#frmedit_product').bootstrapValidator({
			 container: function($field, validator) {
		     	return $field.parent().next('.messageContainer');
		     },
		    feedbackIcons: {
		        validating: 'glyphicon glyphicon-refresh'
		    },
		    excluded: ':disabled',
		    fields: {
				    'data[productname]': {
				    	validators: {
				    		notEmpty: {
				    			message: 'The Product Name  is required and cannot be empty'
				    		}
				    	}
				    },
				    'data[discription]': {
				    	validators: {
				    		notEmpty: {
				    			message: 'The Discription  is required and cannot be empty'
				    		}
				    	}
				    }
				   }
				}).on('error.field.bv', function(e, data) {
					if (data.bv.getSubmitButton()) {
						data.bv.disableSubmitButtons(false);
					}
		    	}).on( 'status.field.bv', function( e, data ) {
		    	    $( '#btnedit').attr( 'disabled', false );
		    	}).on('success.form.bv', function(e) {
				   // Prevent form submission
				   e.preventDefault();
				  editproduct();
				});
			});
		
		
		
	});
}
function openEdit3DproductFormByaddproduct(product_id)
{
	$.get(base_url+"mystation/edit3dproductForm",{product_id:product_id},function(data){
		$("#addproduct").html(data);
		$("#addproduct_div").show();
		$(document).ready(function(){
			$('#frmedit_product').bootstrapValidator({
			 container: function($field, validator) {
		     	return $field.parent().next('.messageContainer');
		     },
		    feedbackIcons: {
		        validating: 'glyphicon glyphicon-refresh'
		    },
		    excluded: ':disabled',
		    fields: {
				    'data[productname]': {
				    	validators: {
				    		notEmpty: {
				    			message: 'The Product Name  is required and cannot be empty'
				    		}
				    	}
				    },
				    'data[discription]': {
				    	validators: {
				    		notEmpty: {
				    			message: 'The Discription  is required and cannot be empty'
				    		}
				    	}
				    }
				   }
				}).on('error.field.bv', function(e, data) {
					if (data.bv.getSubmitButton()) {
						data.bv.disableSubmitButtons(false);
					}
		    	}).on( 'status.field.bv', function( e, data ) {
		    	    $( '#btnedit').attr( 'disabled', false );
		    	}).on('success.form.bv', function(e) {
				   // Prevent form submission
				   e.preventDefault();
				   editproduct();
				});
			});
		
		
		
	});
}
function editproduct()
{
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showEditFileRequest, // pre-submit callback 
 			success :  showEditFileResponse,
 			url : base_url+'mystation/editproduct',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmedit_product').ajaxSubmit(options);
}
function showEditFileRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showEditFileResponse(resp, statusText, xhr, $form){
if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		openEdit3Dproduct();
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		openEdit3Dproduct();
	}
}
function deleteproductlist()
{ 
		var values = new Array();
	        $.each($("input[name='productlist[]']:checked"), function(){            
	        	values.push($(this).val());
            });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
			deleteProduct();
		
	} else {
		alert("Please select Product ");
	}
}	
function deleteProduct()
{
	ajaxindicatorstart('Loading...');
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showDeleteFileRequest, // pre-submit callback 
 			success :  showDeleteFileResponse,
 			url : base_url+'mystation/delete3dproduct',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmeditdproduct').ajaxSubmit(options);
}
function showDeleteFileRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showDeleteFileResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		openEdit3Dproduct();
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openEdit3Dproduct();
	}
}
function editproductlist()
{ 
		var values = new Array();
	        $.each($("input[name='productlist[]']:checked"), function(){            
	        	values.push($(this).val());
            });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
		if(values.length > 1) {
			alert("Please select Only one Product for edit ");
		} else {
			var product_id =  values[0];
			openEdit3DproductFormByeditproduct(product_id)
		}
		
	} else {
		alert("Please select Product ");
	}
}	
function searchProduct(preselect=false)
{
	var product = document.getElementById('product_item').value;
	if(product != ""){
		$.post(base_url+"mystation/product_item",{'product': product,"preselect":preselect,"selected_productids":$("#productid").val()},function(data){
			$("#productlist").html(data);
		});
	} else {
		alert('Please Enter product name or no.');
	}
}
function linkProduct()
{
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showLinkProductRequest, // pre-submit callback 
 			success :  showLinkProductResponse,
 			url : base_url+'mystation/linkproduct',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmadd3dproduct').ajaxSubmit(options);
}
function showLinkProductRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
var uploaded_images;
var size = 0;
function showLinkProductResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == false) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		customAlert(resp.msg);
	} else { 
		uploaded_images = resp.uploaded_files;
		$("#uploaded_files").val(uploaded_images);
		size = resp.size;
		$.post(base_url+"mystation/show3dimages",{'images': resp.uploaded_files},function(data){
			$("#Layer983").show();
			$("#Layer983").html(data);
			//$("#uploaded_images").val(resp.uploaded_files);
		});
	
	}
}
function publish3dimages(){
	var product_id = $("#productid").val();
	if(product_id != "")
	{
		ajaxindicatorstart('');
		//var uploaded_images = $("#uploaded_images").val();
		
		$.post(base_url+"mystation/publish3dimages",{'images': uploaded_images,'product_id':product_id,'size':size},function(resp){
			if(resp.status == 0) {
					$("#response").addClass('alert-danger');
					$("#response").html(resp.msg);
					$("#response").show();
					ajaxindicatorstop();
			} else {
					$("#response").addClass('alert-success');
					$("#response").html(resp.msg);
					$("#response").show();
					$("#dpid").val(resp.id);
					ajaxindicatorstop();
					$("#edit3dpro").trigger("click");
					$('.nav-tabs > .active').next('li').find('a').trigger('click');
					openEdit3Dproduct();
			}
			});
	}else{
			customAlert("Please select a product");
	}
		
}
var img_index = 0;
function changeimage(index){
	$("#changefile3dimage").trigger('click');
	//img_index = index;
	$("#image_index").val(index);
}

function change3DImage(){
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showLinkProductRequest, // pre-submit callback 
 			success :  showChangeImageResponse,
 			url : base_url+'mystation/change3dimages',
 			data: { "uploaded_files": uploaded_images},
 			semantic : true,
 			dataType : 'json'
 	};
	$('#change3dproduct').ajaxSubmit(options);
}
var asseturl = '<?php echo asset_url();?>';
function showChangeImageResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == false) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		customAlert(resp.msg);
	} else { //alert(resp.uploaded_files);
		uploaded_images = resp.uploaded_files;
		$("#uploaded_files").val(uploaded_images);
		$("#uploaded_img"+resp.image_index).attr("src",asseturl+uploaded_images[resp.image_index]['image']);
		//$("#uploaded_img_name"+resp.image_index).html(resp.img_name);
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		customAlert(resp.msg);
	}
}
function changeDimage()
{
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showChangeimageRequest, // pre-submit callback 
 			success :  showChangeimageResponse,
 			url : base_url+'mystation/changimage',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmchangeproductlink').ajaxSubmit(options);
}
function showChangeimageRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showChangeimageResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		customAlert(resp.msg);
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		customAlert(resp.msg);
		$('#frame_'+resp.pid).attr('src',asset_url+resp.src);
	}
}
function linkProductUpdate()
{
	var options = {
		target : '#response', // target element(s) to be updated with server response 
		beforeSubmit: showELinkProductRequest, // pre-submit callback 
		success: showELinkProductResponse,
		url : base_url+'mystation/changelinkproduct',
		semantic : true,
		dataType : 'json'
	};
	$('#frmchangeproductlink').ajaxSubmit(options);
}
function showELinkProductRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showELinkProductResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		customAlert(resp.msg);
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		$("#edit3dpro").trigger("click");
		$('.nav-tabs > .active').next('li').find('a').trigger('click');
		openEdit3Dproduct();
	}
}
