<form name="frmaddvedio" method="post" action="" enctype="multipart/form-data" id="frmaddvedio">
	<div class="panel-heading custom-panel-heading">
  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer149', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 15px;padding-left: 45px;">	
  		<?php if($myds_stage == 4) { ?>	
  		<div id="addproduct_div">
	  		<div class="row ">
		  		<div class="col-md-12">
		  			<input type="hidden" id="max_vedio"  name="max-vedio"  value="<?php echo $max_videos;?>" />
		  			<input type="hidden" id="totalvedio"  name="totalvedio"  value="<?php echo $totalvedio;?>" />
		  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Products Videos</span>
		  		</div>
		  	</div>
	  		<div class="row">
		  		<div class="col-md-12">
		  			<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Present your products with rich information to global buyers through our " Products In Videos " tube. <br>
To upload and link your video to a certain product, follow the two steps here-under and press publish:</span>
		  		</div>
		  	</div><br><br>
	  		<div class="row">
		  		<div class="col-md-6">
		  			<input type="checkbox" id="chkproduct" name="chkproduct[]" value="1" style="top:458px;display:none;" checked/>
		  			<div class="">
		  				<div id="wb_Text450" style="height:23px;z-index:1055;text-align:left;">
							<span style="color:#F05539;font-family:'Arial Black';font-size:16px;">STEP 1</span>
						</div>
						<div id="wb_Text504" style="height:25px;z-index:1047;text-align:left;">
							<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Upload Your Video</span>
						</div>
						<br>
						<div id="wb_Text515" style="height:12px;z-index:1045;text-align:left;">
							<span style="color:#666666;font-family:Arial;font-size:9.3px;">Mp4 format, Max. size: 20 MB</span>
						</div>
						<br>
						<div id="Layer980" style="text-align:left;height:200px;z-index:1056;">
							<div id="img_div" class="col-sm-6" style="width:250px;height:150px;z-index:1036;padding-left:0px;padding-top: 14px;">
								<a href="javascript:openFileInput(<?php echo $total_videos; ?>,<?php echo $max_videos; ?>);" id="oneproductupload"><img src="<?php echo asset_url();?>images/video-player.png" id="Image283" alt=""></a>
							</div>
							<div id="video_div" style="display: none">
								<div class="col-md-2" id="wb_MediaPlayer1" style="width:250px;height:150px;z-index:1036;padding-left:0px;padding-top: 14px;" >
									<video src="http://www.udtalks.com/orbitok.mp4" id="MediaPlayer1" controls="controls"></video>
			  					</div>
		  					</div>
							
							<div class="col-sm-6" id="upload_div" style="width:67px;height:150px;z-index:1037;text-align:left;padding-top: 14px;padding-top:80px;">
								<span style="color:#1E90FF;font-family:'Arial Black';font-size:12px;"><u><a href="javascript:openFileInput(<?php echo $total_videos ?>,<?php echo $max_videos ?>);" class="style23" id="oneproductupload">Upload</a></u></span>
							</div>
							<div class="col-sm-6" id="change_div" style="width:67px;height:150px;z-index:1037;text-align:left;padding-top: 14px;padding-top:80px;display:none;">
								<span style="color:#1E90FF;font-family:'Arial Black';font-size:12px;"><u><a href="javascript:openFileInput();" class="style23" id="oneproductupload">Change</a></u></span>
							</div>
							<?php $maxvediosizeinbyte =  20* 1048576; ?>
							<input type="file"  name="uploadonepvedio"  id="uploadonepvedio"  onchange="validatevediofile('uploadonepvedio',this,<?php echo $maxvediosizeinbyte ; ?>);" style="display: none"/>
						</div>
		  			</div>
		  		</div>
		  		<div class="col-md-6">
		  			<div class="">
		  				<div id="wb_Text337" style="height:23px;z-index:1054;text-align:left;">
							<span style="color:#F05539;font-family:'Arial Black';font-size:16px;">STEP 2</span>
						</div>
						<div id="wb_Text503" style="height:25px;z-index:1052;text-align:left;">
							<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Select A Product To Link</span>
						</div>
						<br>
						<div>
							<input type="hidden" id="product_id"  name="product_id" value="" >
		  					<input type="text" id="product_item" autocomplete = off   style="position:absolute;width:345px;height:29px;line-height:29px;" name="SiteSearch1" value="" placeholder="Type products name or no.">
		  					<input type="button" id="Button5"  name="Search"  data-toggle="modal"  backdrop='static' data-target="#productlist_modal"   onclick="searchproduct();" value="" style="position:absolute;left:359px;width:45px;height:32px;top: 61px;">
						</div>
						<br>
						<div id="pinfo_div" class="pinfo_div" style="position: relative; text-align: left; visibility: visible;left:-125px;top:22px; width: 532px; height: 154px;display:none;">
							<div id="wb_Text511" style="position:absolute;left:265px;top:93px;width:300px;height:15px;text-align:left;">
								<span style="color:#1E90FF;font-family:Arial;font-size:12px;" id="loc">Location: <span id="pmpro">Men Fashion</span> <span id="psubpro">/ Lether shoes</span></span>
							</div>
							<div id="wb_Text510" style="position:absolute;left:384px;top:71px;width:150px;height:15px;text-align:left;">
								<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Min. Qty : <span id="pqty">2</span> <span id="punit">Containers</span></span>
							</div>
							<div id="wb_Text509" style="position:absolute;left:265px;top:70px;width:100px;height:15px;text-align:left;">
								<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">USD <span id="pprice">60.00</span></span>
							</div>
							<div id="wb_Shape603" style="position:absolute;left:117px;top:19px;width:200px;height:103px;">
								<a href="./desk_details.php" target="_blank"><img src="<?php echo asset_url();?>images/img4386.png" id="mainproductimg" alt="" style="width:129px;height:103px;border: 1px solid #ccc;"></a>
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
						</div>
		  			</div>
		  		</div>
		  	</div><br><br>
	  		<div class="row" style="padding-top:35px;display:none;">
		  		<div class="col-md-12">
		  			<input type="checkbox" id="chkproduct" name="chkproduct[]" value="2" style="top:458px;" />
		  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">"Multi-Products" Video:</span>
		  		</div>
		  	</div>
	  		<div class="row" style="display:none;">
		  		<div class="col-md-12">
		  			<span style="color:#000000;font-family:Arial;font-size:11px;">Use this option in case your video displays many products at the same time with diffrent prices, and you prefer to link it to Main or Sub Products.</span>
		  		</div>
		  	</div>	
	  		<div class="row" style="display:none;">
		  		<div class="col-md-12">
		  			<br><br><span style="color:#F05539;font-family:Arial;font-size:13px;">*</span><span style="color:#666666;font-family:Arial;font-size:9.3px;">Mp4 format, Max. size: 50 MB</span>
		  		</div>
		  	</div><br><br>
	  		<div class="row" style="display:none;">
		  		<div class="col-md-12">
		  			<div class="col-md-1">
		  				<input type="file"  name="uploadmainpvedio"  id="uploadmainpvedio"  onchange="validatevediofile('uploadmainpvedio',this,<?php echo $maxvediosizeinbyte ; ?>);"  style="display: none" />
		  				<a href="#" class="style23" id="multiprovedio_link">Uploads</a><br><br>
		  				<a href="#" class="style23"  id="multiprovedio_link" >Change</a>
		  			</div>
		  			<div class="col-md-2" id="wb_MediaPlayer1" >
						<!--  <video src="http://www.udtalks.com/orbitok.mp4" id="MediaPlayer1" controls="controls"></video> -->
		  			</div>
		  			<div class="col-md-8">
		  				<div class="row">
		  					<div class="col-sm-12" style="padding-bottom: 22px;padding-left: 31px;">
			  					<span style="color:#F05539;font-family:Arial;font-size:13px;">*</span>
								<select name="sub_product_id" id="sub_product_id" class="form-control" style="display:inline-block;width:auto;height:30px;">
							  		<?php foreach ($mproducts as $mpro) { ?>
						      			<?php foreach ($mpro['subproducts'] as $spro) { ?>
						        		<option value="<?php echo $spro['id'];?>"><?php echo $spro['name'];?> (<?php echo $mpro['name'];?>)</option>
						        		<?php } ?>
							    	<?php } ?>
							  	</select>
							</div>
						</div>
		  				<div class="row">
		  					<div class="col-sm-12" style="padding-bottom: 22px;">
	  							<div class="col-sm-3" >
	  								<span style="color:#F05539;font-family:Arial;font-size:13px;">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Video title</span>
	  							</div>
	  							<div class="col-sm-8" >	
	  								<input type="text" id="product_title" style="padding-left: 22px;top:564px;width:305px;height:24px;line-height:24px;" name="vedio_title" value="" maxlength="30" placeholder="Ex. The Best Of TV's Screens">
								</div>
							</div>
						</div>
		  				<div class="row">
		  					<div class="col-sm-12" style="padding-bottom: 22px;">
	  							<div class="col-sm-3" >
		  							<span style="color:#F05539;font-family:Arial;font-size:13px;">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">About this video</span>
		  						</div>	
		  						<div class="col-sm-8" >
		  							<textarea name="vedio_description" id="aboutvedio" style="left:573px;top:606px;width:334px;height:46px;z-index:1100;" rows="2" cols="45" maxlength="60"></textarea>
								</div>
							</div>
						</div>
		  				<div class="row">
		  					<div class="col-sm-12" style="padding-bottom: 22px;">
		  						<div class="col-sm-3" >
		  							<span style="color:#F05539;font-family:Arial;font-size:13px;">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">Add USD price range from</span>
		  						</div>
		  						<div class="col-sm-2" >	
		  							<input type="number" id="startrange"  min="0" step="1" style="width:82px;height:24px;" name="start_price" value="" maxlength="6" placeholder="Price">
		  						</div>
		  						<div class="col-sm-1" >	
		  							<span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">To</span>
		  						</div>
		  						<div class="col-sm-2" >	
		  							<input type="number" id="endrange"  min="0" step="1" style="width:82px;height:24px;" name="end_price" value="" maxlength="6" placeholder="Price">
								</div>
							</div>
						</div>
		  			</div>
		  		</div>
		  	</div>
		  	<div class="row">
  				<div class="col-md-12" style="padding-bottom: 22px;">
  				<?php if($total_videos < $max_videos) { ?>
  					<div class="col-md-3"></div>
		  			<div class="col-md-2" >
		  				<button type="button" id="publish"  style="border:none;background-color: rgb(67, 69, 70);width: 142px;height: 33px;"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Publish</span></button>
		  				<!--  commented by suraj<button type="button" id="publish"  onclick="addvedio();" style="border:none;background-color: rgb(67, 69, 70);width: 142px;height: 33px;"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Publish</span></button> -->
		  			</div>
		  			<div class="col-md-2" >
		  				<button type="button" onclick="resetAll()" style="border:none;background-color: rgb(67, 69, 70);width: 142px;height: 33px;"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Cancel</span></button>
		  			</div>
		  		<?php } else { ?>
		  			<div class="text-center">
		  				<span style="color:#F05539;font-family:Arial;font-size:18px;">You have reached your maximum video limit.</span>
		  			</div>
		  		<?php } ?>
				</div>
			</div>
   		</div>
   		<?php } else { ?>
		<div id="Layer222" style="position:absolute;text-align:center;left:0px;top:50px;width:1027px;height:581px;border:0px;">
			<div id="Layer222_Container" style="width:1027px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
				<div id="wb_Shape291" style="position:absolute;left:566px;top:330px;width:137px;height:32px;">
					<a href="javascript:ShowObjectWithEffect('Layer149', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');"><div id="Shape291"><div id="Shape291_text"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Ok</span></div></div></a>
				</div>
				<div id="wb_Text760" style="position:absolute;left:565px;top:206px;width:333px;height:52px;text-align:left;">
					<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">To add <strong>Products In Videos</strong>, you first have to complete creating your products directories and adding your products details in english.</span>
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
						<div id="subproductlist_div" style="max-height:500px;">
						
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
<?php if($total_videos > $max_videos) { ?>
$('#accessDeniedModal5').modal({show:true,backdrop: 'static',keyboard: false});
function upgradeMyBusinessPlan() {
	ShowObjectWithEffect('Layer149', 0, 'dropup', 500, 'easeInBounce');
	getMyPackages();
}
function cancelAccessDeniedPopupVideo() {
	ShowObjectWithEffect('Layer149', 0, 'dropup', 500, 'easeInBounce');
	ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');
	$('#accessDeniedModal5').modal('toggle');
}
<?php } ?>
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
			    	$("#mainproductimg").attr("src", asseturl+data[0].main_image);
			    	$("#pinfo_div").show();
				 	jQuery('#productlist_modal').modal('hide');
			 	},'json');
		}
	} else {
		alert('Please select product.');
	}
}
function searchproduct()
{
	var product = document.getElementById('product_item').value;
	if(product != "" )
	{
		$.post('<?php echo base_url();?>mystation/subproductlist',{'product':product},function(data) {
			document.getElementById('subproductlist_div').innerHTML = data;
		});
	} else {
		alert('Please Enter ProductName');
	}
}
function openFileInput() {
	$("#uploadonepvedio:hidden").trigger('click');	
}
/*$(function(){
    $("#oneproductupload").unbind().on('click', function(e){
        e.preventDefault();
        //alert("Hi");
		
        $("#uploadonepvedio:hidden").trigger('click');
		
    });
});*/
$(function(){
    $("#multiprovedio_link").unbind().on('click', function(e){
        e.preventDefault();
        $("#uploadmainpvedio:hidden").trigger('click');
    });
});
function selectScat(scat_id,input,name) {
	$("#ds_main_cat").val(scat_id);
	$("#ds_main_cat_label").html(name+' <span class="caret" style="color:#d9574d;"></span>');
}

function selecteditScat(scat_id,input,name) {
	$("#old_ds_main_cat").val(scat_id);
	$("#ds_old_main_cat_label").html(name+' <span class="caret" style="color:#d9574d;"></span>');
}
var asseturl = '<?php echo asset_url();?>';

//Added By Suraj

$("#publish").on('click', function(e){
	if($("#uploadonepvedio").val()==''){
		alert('No video uploaded yet');
		e.preventDefault();
	} else{
		addvedio();
	}
} );
function resetAll(){
	$("#pinfo_div").css("display","none");
	$("#video_div").css("display","none");
	$("#change_div").css("display","none");
	$("#img_div").css("display","block");
	$("#upload_div").css("display","block");
	document.getElementById("frmaddvedio").reset();
	//$("form #frmaddvedio").reset();
	//alert("Reset");
}
 
</script>
 
 
