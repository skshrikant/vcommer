<form name="change3dproduct"   method="post" action="" enctype="multipart/form-data" id="change3dproduct" >
	<input type="file" name="changefile3dimage" id="changefile3dimage"  accept=".png,.jpg,.jpeg.gif" onchange="uploadchangedimg('changefile3dimage',this,350,400,500);"  style="display:none" />
	<input type="hidden" name="image_index" id="image_index" value="0">
</form>
<div id="promodal">
</div>
<form name="frmadd3dproduct"   method="post" action="" enctype="multipart/form-data" id="frmadd3dproduct" >
	<div class="panel-heading custom-panel-heading">
  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer108', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 22px;padding-left: 45px;">		
  		<?php if($myds_stage == 4) { ?>
  		<div id="addproduct_div">
	  		<div class="row ">
		  		<div class="col-md-12">
		  			<input type="hidden"  value="<?php echo $max_3dpro;?>" name="maxproduct" id="maxproduct" />
		  			<input type="hidden"  value="<?php echo count($product3Ddata);?>" name="productcount" id="productcount" />
		  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Add Real 3D Effects To Your Products.</span>
		  		</div>
		  	</div><br><br>	
	  		<div class="row">
		  		<div class="col-md-12">
		  			<span style="color: #2D2D2D; font-family: Arial; font-size: 11px;">Deliver
										deep and rich information about your business and let your
										clients experience a new way to view your products..<br>Real in
										3D effect enable your clients to rotate your product and view
										it from all sides in an amazing way.. <br>To add R3D effect to
										your products, first, you have to link the R3D effect to a
										certin product.Get started and follow the steps and tips
										hereunder:<br>
					</span>
		  		</div>
		  	</div><br><br>
		  	<div id="wb_Text293" style="left:47px;top:228px;width:385px;height:67px;z-index:4449;text-align:left;">
				<span style="color:#F05539;font-family:'Arial Black';font-size:16px;">STEP 1<br></span><span style="color:#000000;font-family:Arial;font-size:11px;"><br></span><span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Click on &quot;Upload&quot; button, to upload a serial of 16 images ( Frames) for the same product token from 16 different horizontal angels in a respected sequence. <br></span>
			</div>
			
			<!--<div id="wb_Shape245" style="margin-top:10px;margin-left:145px;top:321px;width:150px;height:32px;z-index:4451;">-->
				<br/><br/>
				<input type="file" name="file3dimages[]" id="file3dimages"  multiple="multiple" accept=".png,.jpg,.jpeg.gif" onchange="uploaddimg('file3dimages',this,350,400,500);"  style="display:none" />
				<a href="#" class="upload_images"><div id="Shape245" style="display: table;margin-left: 100px;"><div id="Shape245_text" style="vertical-align: middle;display: table-cell;"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">&nbsp;&nbsp;Upload&nbsp;&nbsp;</span></div></div></a>
			<!--</div>-->
			<br/>
			<div id="wb_Text297" style="left:63px;top:386px;width:87px;height:29px;z-index:4453;text-align:left;">
				<div style="line-height:13px;">
					<span style="color:#2D2D2D;font-family:Arial;font-size:11px;"><span style="color:#F05539;font-family:Arial;font-size:11px;">*</span>Important Notes:</span>
				</div>
			</div>
			
			<!--<div id="wb_Text298" style="left:53px;top:388px;width:16px;height:29px;z-index:4454;text-align:left;">
				<div style="line-height:13px;"><span style="color:#F05539;font-family:Arial;font-size:11px;">*</span>
				</div>
			</div>-->
			<div id="wb_Text299" style="left:61px;top:404px;width:430px;height:100px;z-index:4455;text-align:left;">
				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">- Images to be in png or jpg format, Dimensions: w 350 * H 400 pixel.<br>- Resolution: 75 dpi.<br>- With transparent or white background.<br>- The 16 images to be named from frame_1 to frame_16 in respect to the position. <br>- The products in all images must has with the same size, height, width, in the&nbsp;&nbsp;&nbsp; <br>&nbsp;&nbsp; middle/center of all the frames as shown in the above example link.<br>- We recommend you to return to a professional designer to do it.<br></span>
			</div>

			
			<form name="SiteSearch4_form" id="SiteSearch4_form" accept-charset="UTF-8" onsubmit="return searchPage(features)">
			</form>
			
			<div id="wb_Text291" style="margin-left:560px;margin-top:-255px;width:89px;height:23px;z-index:4463;text-align:left;">
				<span style="color:#F05539;font-family:'Arial Black';font-size:16px;">STEP 2</span>
			</div>
			<div id="wb_Text449" style="margin-left:560px;margin-top:11px;width:256px;height:25px;z-index:4460;text-align:left;">
				<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Select A Product To Link</span>
			</div>
			<input type="text" id="product_item" autocomplete = off   style="margin-left:560px;margin-top:15px;width:358px;height:29px;line-height:29px;z-index:4461;" name="SiteSearch1" value="" placeholder="Type products name or no.">
			<input type="button" id="Button26" onclick="searchProduct();" name="searchproduct" style="width:45px;height:33px;z-index:4462;padding-bottom:10px;" data-toggle="modal"  backdrop='static' data-target="#productlist_modal">
			<br/>
			<div id="wb_Text294" style="margin-left:560px;margin-top:10px;width:410px;height:30px;z-index:4450;text-align:left;">
				<span style="color:#696969;font-family:Arial;font-size:11px;">Please note that we link the R3D effects to a specified product to get the product details, specifications, price …etc <br></span>
			</div>
			<div id="pinfo_div" class="pinfo_div" style="position: relative; text-align: left; visibility: visible;left:440px;width: 532px; height: 154px;display:none;">
				<div id="wb_Text511" style="position:absolute;left:265px;top:93px;width:300px;height:15px;text-align:left;">
					<a href="./desk_details.php" class="product_link" target="_blank" ><span style="color:#1E90FF;font-family:Arial;font-size:12px;" id="loc">Location: <span id="pmpro">Men Fashion</span> <span id="psubpro">/ Lether shoes</span></span></a>
				</div>
				<div id="wb_Text510" style="position:absolute;left:384px;top:71px;width:150px;height:15px;text-align:left;">
					<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Min. Qty : <span id="pqty">2</span> <span id="punit">Containers</span></span>
				</div>
				<div id="wb_Text509" style="position:absolute;left:265px;top:70px;width:100px;height:15px;text-align:left;">
					<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">USD <span id="pprice">60.00</span></span>
				</div>
				<div id="wb_Shape603" style="position:absolute;left:117px;top:19px;width:140px;height:103px;">
					<a href="./desk_details.php" class="product_link" target="_blank"><img src="<?php echo asset_url();?>images/img4386.png" id="mainproductimg" alt="" style="width:129px;height:103px;border: 1px solid #ccc;"></a>
				</div>
				<div id="wb_Text507" style="position:absolute;left:265px;top:50px;width:300px;height:15px;text-align:left;">
					<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Product No.: <span id="pnumber">JS0123</span></span>
				</div>
				<div id="wb_Text506" style="position:absolute;left:265px;top:32px;width:300px;height:15px;text-align:left;">
					<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Product Name: <span id="pname">Brown High Neck Shoes</span></span>
				</div>
				<div id="wb_Image228" style="position:absolute;left:11px;top:56px;width:32px;height:32px;">
					<img src="<?php echo asset_url();?>images/link.png" id="Image228" alt="">
				</div>
			</div><br/><br/>
			<input type="hidden" name="uploaded_images" id="uploaded_images">
			<input type="hidden" name="productid" id="productid">
			<div id="Layer983" style="text-align:left;visibility:visible;margin-left:67px;margin-top:113px;width:944px;z-index:4466;">
			</div>
			<div id="productlist_modal" class="modal fade" style="z-index: 5000">
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
								<div id="productlist" style="max-height:500px;overflow-x: scroll;">
								
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
   		<?php } else { ?>
		<div id="Layer222" style="position:absolute;text-align:center;left:0px;top:50px;width:1027px;height:581px;border:0px;">
			<div id="Layer222_Container" style="width:1027px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
				<div id="wb_Shape291" style="position:absolute;left:566px;top:330px;width:137px;height:32px;">
					<a href="javascript:ShowObjectWithEffect('Layer108', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');"><div id="Shape291"><div id="Shape291_text"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Ok</span></div></div></a>
				</div>
				<div id="wb_Text760" style="position:absolute;left:565px;top:206px;width:333px;height:52px;text-align:left;">
					<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">To add <strong>Real In 3D</strong>, you first have to complete creating your products directories and adding your products details in english.</span>
				</div>
				<div id="wb_Text761" style="position:absolute;left:563px;top:174px;width:333px;height:22px;text-align:left;">
					<span style="color:#FF6347;font-family:Arial;font-size:19px;"><strong>Oops..</strong></span>
				</div>
				<div id="wb_Image42" style="position:absolute;left:55px;top:7px;width:489px;height:489px;">
					<img src="<?php echo asset_url();?>images/businessman-toons.png" id="Image42" alt="">
				</div>
				<div id="wb_Text762" style="position:absolute;left:567px;top:271px;width:333px;height:28px;text-align:left;">
					<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Start with " <strong>My Desksite</strong>" icon to </span><span style="color:#808080;font-family:Arial;font-size:11px;">build </span><span style="color:#2D2D2D;font-family:Arial;font-size:11px;">you site and add your products.</span>
				</div>
			</div>
		</div>
		<?php } ?>
   </div>
   <input type="hidden" id="dpid" value="0"/>
 </form>
 
 <div id="example_modal" class="modal fade" style="background-color: #404040;width:100%;height:100%; text-align:center">
	<div class="modal-dialog" >
		<div class="" >
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="filter:alpha(opacity=100);opacity: 1;">
				<img src="<?php echo asset_url();?>images/closeround.png" id="Image66" alt="close" style="width:36px;">
			</button>
			<form id="frmexampleproduct" method="post" enctype="multipart/form-data" action="">
					<div class="row">
						<div class="col-md-12" id="example">
						</div>
					</div>					
			</form>
		</div>
	</div>
</div>
  <div id="3dproduct_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Add Product 3D Picture</h3>
			</div>
			<div class="modal-body" >
				<form id="frmcropimageproduct" method="post" enctype="multipart/form-data" action="">
						<span><b>Upload Image:</b> <input type="file" name="dproductfile"  onchange="uploadimagepopup();" id="dproductfile"  accept=".png,.jpg,.jpeg.gif" class="form-control" style="width:200px;display:inline-block;"/></span> <br><br>
						
						<input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
						<input type="hidden" name="x1" id="x1" value="" />
				        <input type="hidden" name="y1" id="y1" value="" />
				        <input type="hidden" name="x2" id="x2" value="" /> 
				        <input type="hidden" name="y2" id="y2" value="" />
				        <input type="hidden" name="width" id="width" value="200" />
				        <input type="hidden" name="height" id="height" value="200" />
				      	<!--  <input type="hidden" name="fullpath" id="fullpath" value="<?php //echo asset_url();?>" /> -->
						<input type="hidden" name="productimage_name" value="" id="productimage_name" />
						<div id="parent" style="position:relative;">
							<span id="thumbnail" style="display: inline-block;position:relative;">
								<img id="dproductphoto" src="#" alt="" title="" style="max-width:100%;display:none" />
							</span>
						</div>
						<div id="thumbs" style="padding:5px; width:600px"></div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" id="save_dcrop" class="btn btn-primary">Crop & Save</button>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>
<script>
	
	var asseturl = '<?php echo asset_url();?>';
	function selectproduct()
{
	var values = new Array();
    $.each($("input[name='chkproduct_id']:checked"), function(){            
    	values.push($(this).val());
    });
	values = values.filter(v=>v!=null);
	if(values.length > 0 ) {
		if(values.length > 1)
		{
			alert('Please select Only one product.');
		} else {
			 	var productid = values[0];
			 	$("#productid").val(productid);
			 	$.post("<?php echo base_url();?>mystation/getproductbyid",{productid:productid},function(data) {
			 		document.getElementById("product_item").value = data[0].name;
			    	document.getElementById("pname").textContent =data[0].name;
			    	document.getElementById("pnumber").textContent = data[0].model_no;
			    	document.getElementById("pqty").textContent = data[0].quantity;
			    	document.getElementById("punit").textContent = data[0].unit;
			    	document.getElementById("pmpro").textContent = data[0].main_product;
			    	document.getElementById("pprice").textContent = data[0].unit_price;
			    	if(data[0].sub_product !="") {
			    		document.getElementById("psubpro").textContent = " / "+data[0].sub_product;
			    	}
			    	$("#product_id").val(data[0].id);
			    	$(".product_link").attr("href","./products/details/"+data[0].id);
			    	$("#mainproductimg").attr("src", asseturl+data[0].main_image);
			    	$("#pinfo_div").show();
			    	document.getElementById('pinfo_div').style.display = "block";
			    	$("#Layer983").css('margin-top','');
				 	jQuery('#productlist_modal').modal('hide');
			 	},'json');
		}
	} else {
		alert('Please select product.');
	}
}
function test_before_save()//addexample()
{
	var product_id = $("#productid").val();
	if(product_id != "")
	{
		$.post(base_url+"mystation/3dpro/showbeforesave", {"uploaded_images":uploaded_images,"productid":product_id}, function(data){
			$("#promodal").html(data);
			$("#my3DModal").modal('show');
			init3D('my3dimg');
		},'html');
	}else{
		customAlert("Please select a product");
	}
}
function uploaddimg(id,input,width,height,size)
{
	var total = input.files.length;
	var count = 0;
	for(i =0;i<total;i++)
	{
		var flag = setup_readercert($(input)[0].files, i,size,width,height,id);
		if(flag == false)
		{
			count++;
		}
	}
	if(count == 16)
	{
		ajaxindicatorstart('');
		read3dimages(input);
	}else{
		customAlert("Please upload 16 images");
	}
}
function uploadchangedimg(id,input,width,height,size)
{
	var total = input.files.length;
	var count = 0;
	var flag = setup_readercert($(input)[0].files, 0,size,width,height,id);
	if(flag == false)
	{
			count++;

	}
	if(count == 1)
	{
		ajaxindicatorstart('');
		read3dimages(input);
	}else{
		customAlert("Please upload the image");
	}
}
function setup_readercert(files, i,size,width,height,id)
{
	var flag = false;
	 var file = files[i];
    	var reader = new FileReader();
       	reader.onload = function (e) {
       		var ext = file.name.split('.').pop();
       		var file_size = parseInt(file.size);
       		var filesizeinkb = (file_size/1024);
       		var image = new Image();
            image.src = e.target.result;
            image.onload = function () {
                var imgheight = this.height;
                var imgwidth = this.width;
                if(ext == 'jpg' || ext == 'jpeg' || ext == 'png' || ext == 'gif') {
	                if(filesizeinkb > size) {
	                	customAlert("Image size should be "+size+"kb max.");
	                    $('#'+id).val('');
	                } else {
		                if (imgwidth != width || imgheight != height) {
		                	customAlert("Image dimensions should be "+width+"*"+height+" Pixel.");
		                    $('#'+id).val('');
		                    flag = false;
		                } else {
							flag = true;
		                	$('#'+id).css('background-image', 'url('+e.target.result+')').css('background-size','cover');
		                }
	                }
                } else {
                	customAlert("Image should be JPG or JPEG.");
                    $('#'+id).val('');
                    flag = false;
                }
            };
      	}
        reader.readAsDataURL(file);
        return flag;
}

function uploadimage() 
{
	
			 	/*var maxproduct = document.getElementById('maxproduct').value;
			 	var productcount = document.getElementById('productcount').value;
			 	if(productcount <= maxproduct)
			 	{*/
		        	$("#file3dimages").trigger('click');
			 	/*} else {
			 		customAlert('you can not upload more than '+maxproduct+' 3D images of product');
			 	}*/
}
function read3dimages(input) {
	var filecount = $(input)[0].files.length;
	if(filecount < 17) {
		if(filecount == 0) {
			customAlert('Please select at least one image.');
		} else if(filecount == 1) {
			change3DImage();
		}else{
            linkProduct();
		}
	} else {
		customAlert('You can not select more than 16 files');
	}
}
 function uploadimagepopup()
 {
	 
    $('#dproductphoto').css('display', 'block');
    savetemparary();

    var ias = jQuery('#dproductphoto').imgAreaSelect( {
        aspectRatio: '1:1',
        maxWidth: 350, 
        maxHeight: 400,
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

}

function savetemparary() {
	ajaxindicatorstart("Please wait .. System is Processing...");
	var options = {
 			target : '#response', // target element(s) to be updated with server response 
 			beforeSubmit : show3DProductRequest, // pre-submit callback 
 			success :  show3DProductResponse,
 			url : '<?php echo base_url()?>mystation/save3dproducttempararyimage',
 			semantic : true,
 			dataType : 'json'
 		};
		$('#frmcropimageproduct').ajaxSubmit(options);
}
function show3DProductRequest(formData, jqForm, options){
	var queryString = $.param(formData);
return true;
}
function show3DProductResponse(resp, statusText, xhr, $form){
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
	$('#dproductphoto').attr('src', resp.msg);
	$('#productimage_name').val(resp.msg);
	
	//getMyAccount();
	//window.location.reload();
	}
ajaxindicatorstop();
}

$("#Shape306").unbind().click(function(){
//$('div').on('click', '#wb_Shape306', function(event) { alert("xx");
	ajaxindicatorstart('');
		var uploaded_images = $("#uploaded_images").val();
		var product_id = $("#productid").val();
		$.post(base_url+"mystation/publish3dimages",{'images': uploaded_images,'product_id':product_id},function(data){
			if(resp.status == 0) {
					$("#response").addClass('alert-danger');
					$("#response").html(resp.msg);
					$("#response").show();
			} else {
					$("#response").addClass('alert-success');
					$("#response").html(resp.msg);
					$("#response").show();
					$("#dpid").val(resp.id);
			}
	});
		ajaxindicatorstop();
});

jQuery('.upload_images').unbind().click(function() {
				var maxproduct = document.getElementById('maxproduct').value;
			 	var productcount = document.getElementById('productcount').value;
			 	if(parseInt(productcount) < parseInt(maxproduct))
			 	{
		        	$("#file3dimages").trigger('click');
			 	} else {
			 		customAlert('you can not upload more than '+maxproduct+' 3D images of product');
			 	}
});
jQuery('#save_dcrop').unbind().on('click', function(e){
	if(jQuery('#x1').val() != "")
	{
			e.preventDefault();
			params = {
					targetUrl: '<?php echo base_url();?>mystation/add3dproductpicture',
					action: 'save',
					x_axis: jQuery('#x1').val(),
					y_axis : jQuery('#y1').val(),
					x2_axis: jQuery('#x2').val(),
					y2_axis : jQuery('#y2').val(),
					thumb_width : jQuery('#width').val(),
					thumb_height:jQuery('#height').val()
			};
			$('#dproductphoto').imgAreaSelect( {remove: true} );
			saveCropImage(params);
	} else {
		customAlert('Please select Image for crop');
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
				image_name :jQuery('#productimage_name').val(),
				product_id :jQuery('#product_id').val()
			},
			type: 'Post',
			success: function (response) {
				jQuery('#profile_pic_modal').modal('hide');
				jQuery('.imgareaselect-outer').css('display','none');
				jQuery(".imgareaselect-border1,.imgareaselect-border2,.imgareaselect-border3,.imgareaselect-border4,.imgareaselect-border2,.imgareaselect-outer,.imgareaselect-selection").css('display', 'none');
				//jQuery("#profileImage").attr('src', response['fullpath']);
				//$('#profilepath').val(response['path']);
				//$('#messageContainer1').empty();
				//$('#frmeditpersonalinfo').bootstrapValidator('revalidateField', 'data[profilepath]');
				//jQuery("#preview-profile-pic").html('');
				//$('#divprofileImage').css('display', 'block');
				//$('#divfileprofileImg').css('display', 'none');
				jQuery("#dproductfile").val('');
				jQuery('#3dproduct_modal').modal('hide');
				customAlert(response.msg);
				product_id = jQuery('#product_id').val();
				openEdit3DproductFormByaddproduct(product_id);
			},
		
	},'json');
}
$('#3dproduct_modal').on('hidden.bs.modal' , function() {
	$('#dproductphoto').imgAreaSelect( {remove: true} );
});

</script>
 
 
