function getVedios()
{
	ajaxindicatorstart('Loading...');
	ShowObjectWithEffect('Layer1', 0, 'dropup', 500, 'swing');
	$.get(base_url+"mystation/vedio",{},function(data){
		ajaxindicatorstop();
		ShowObjectWithEffect('Layer149', 1, 'scale', 500, 'swing');
		$("#Layer149_Container").html(data);
		return false;
	});
} 
function openAddvedio()
{
	$.get(base_url+"mystation/addvedio",{},function(data){
		$("#addvedio").html(data);
		$("#addvedio_div").show();
	});
}
function openEditvedio()
{
	$.get(base_url+"mystation/editvedio",{},function(data){
		$("#editvedio").html(data);
		$("#editvedio_div").show();
	});
} 
function addvedio()
{
	var max_vedio = document.getElementById('max_vedio').value;
	var totalvedio = document.getElementById('totalvedio').value;
	if(totalvedio < max_vedio) {
		var product_id = document.getElementById('product_id').value;
		if(product_id != "") {
			 if($('#uploadonepvedio').val().length < 0) {
				 alert("Please select Vedio File"); 
			 } else {
				 publishvedio();
			 }
		} else {
			alert("Please select Product");
		}
	} else {
		alert("You can not upload more than "+max_vedio+' vedio.');
	}
	/*if(totalvedio < max_vedio) {
			var values = new Array();
		    $.each($("input[name='chkproduct[]']:checked"), function(){            
		    	values.push($(this).val());
		    });
		    values = values.filter(v=>v!=null);
			if(values.length > 0 ) {
				if(values.length == 1 ) {
					if(values[0] == 1) {
						var product_id = document.getElementById('product_id').value;
						if(product_id != "") {
							 if($('#uploadonepvedio').val()) {
								 alert("Please select Vedio File"); 
							 } else {
								 publishvedio();
							 }
						} else {
							alert("Please select Product");
						}
					} else {
						var product_title = document.getElementById('product_title').value;
						var aboutvedio = document.getElementById('aboutvedio').value;
						var startrange  = $('input[type=number][name=start_price]').val();
						var endrange  = $('input[type=number][name=end_price]').val();
						
						if(product_title != "")
						{
							if(aboutvedio !="")
							{
								if(startrange != "")
								{
									if(endrange != "")
									{
										if($('#uploadmainprovedio').val()) {
											alert('Please select Vedio File');
										} else {
											publishvedio();
										}
									} else {
										alert('Please enter end price of product .');
									}
								
								} else {
									alert('Please enter start price of product .');
								}
								
							} else {
								alert('Please enter about product .');
							}
						} else{
							alert('Please enter product title.');
						}
						
						//publishvedio();
					}
				} else {
					alert("Please select only one way  to publish vedio");
				}
			} else {
				alert("Please select checkbox to publish vedio");
			}
	} else {
		alert("You can not upload more than "+max_vedio+' vedio.');
	}*/
}
function publishvedio()
{
	ajaxindicatorstart('Loading...');
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showAddVedioRequest, // pre-submit callback 
 			success :  showAddVedioResponse,
 			url : base_url+'mystation/publishvedio',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmaddvedio').ajaxSubmit(options);
}
function showAddVedioRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showAddVedioResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openEditvedio();
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openEditvedio();
		$("#myvideo_edit").trigger("click");
	}
}
function deletevedio()
{ 
		var values = new Array();
	        $.each($("input[name='chkoneproduct[]']:checked"), function(){            
	        	values.push($(this).val());
            });
	values = values.filter(v=>v!=null);
	
	var mvalues = new Array();
	$.each($("input[name='chkmultiproduct[]']:checked"), function(){            
		mvalues.push($(this).val());
	});
	mvalues = mvalues.filter(v=>v!=null);
	
	if(values.length > 0  || mvalues.length > 0) {
			deleteVedio();
		
	} else {
		alert("Please select Vedio ");
	}
}	
function deleteVedio()
{
	var r = confirm("Are you sure, you want to delete files?");
	if (r == true) {
		ajaxindicatorstart('Loading...');
		var options = {
	 			target : '#response', // target element(s) to be updated with server response 
	 			beforeSubmit : showDeleteVedioRequest, // pre-submit callback 
	 			success :  showDeleteVedioResponse,
	 			url : base_url+'mystation/deletevedio',
	 			semantic : true,
	 			dataType : 'json'
	 		};
			$('#frmeditvedio').ajaxSubmit(options);
	}
}
function showDeleteVedioRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showDeleteVedioResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		openEditvedio();
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openEditvedio();
	}
}

function changeVedio()
{
	ajaxindicatorstart('Loading...');
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showChangevedioRequest, // pre-submit callback 
 			success :  showChangevedioResponse,
 			url : base_url+'mystation/changevedio',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmeditservicevedio').ajaxSubmit(options);
}
function showChangevedioRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showChangevedioResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		openEditvedio();
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openEditvedio();
	}
}
function deleteservicevedio()
{
	
	var values = new Array();
    $.each($("input[name='chkvedio[]']:checked"), function(){            
    	values.push($(this).val());
    });
	values = values.filter(v=>v!=null);
	
	if(values.length > 0  || mvalues.length > 0) {
		deleteServiceVedio();
	
	} else {
	alert("Please select Vedio ");
	}
	
}
function deleteServiceVedio()
{
	ajaxindicatorstart('Loading...');
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : showDeleteVedioRequest, // pre-submit callback 
 			success :  showDeleteVedioResponse,
 			url : base_url+'mystation/deleteservicevedio',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmeditservicevedio').ajaxSubmit(options);
}
function showDeleteVedioRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function showDeleteVedioResponse(resp, statusText, xhr, $form){
	ajaxindicatorstop();
if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
		alert(resp.msg);
		openEditvedio();
	} else {
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		//alert(resp.msg);
		openEditvedio();
	}
}


