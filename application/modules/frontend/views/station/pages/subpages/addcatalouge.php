<form name="frmeditpersonalinfo" method="post" action="" enctype="multipart/form-data" id="frmeditpersonalinfo">
	<div class="panel-heading custom-panel-heading">
  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer124', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 22px;padding-left: 45px;">
  	<?php if($myds_stage == 4) { ?>		
  	<div id="addcatelough_div">
  		<div class="row ">
	  		<div class="col-md-12">
	  			<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Add A Virtual Catalogue</span>
	  		</div>
	  	</div><br><br>	
  		<div class="row">
	  		<div class="col-md-8">
	  			<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">V-Catalogue is a new vision in E-commerce platforms, has been added to The Trade Station to enable sellers to deliver a rich and deep information about their whole products to global buyers at once. It's a smart way to attract buyers to view the maximun number of your products fast and easy without the necessity to visit your Desksite/website and even without they feel bored ..<br><br>Get started, follow the mentioned steps and create your own V-catalogue:</span>
	  		</div>
  			
	  	</div><br><br>
  		<div class="row">
	  		<div class="col-md-10">
	  			<div id="wb_Text405" style="width:89px;height:23px;z-index:966;text-align:left;margin-top:-10px;">
<span style="color:#F05539;font-family:'Arial Black';font-size:16px;">STEP 1</span>
				</div>
				<br/>
				<div id="wb_Text582" style="width:256px;height:25px;z-index:967;text-align:left;">
<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Create The Cover</span>
				</div>
				<br/>
	  			<div class="col-md-2" style="padding-left:0px;">
	  				<span style="color:#F05539;font-family:Arial;font-size:13px;padding-left:0px;">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:12px;">V-Cat. Name</span>
	  			</div>
	  			<div class="col-md-5">
	  				<input type="text" id="catalogue_title" style="width:264px;height:24px;line-height:24px;" name="catalogue_title" value="" maxlength="21" placeholder="Type A Short Name For Your Catalouge">
	  				<br><span style="color:#666666;font-family:Arial;font-size:9.3px;">It should includes the keyword buyers may type to find your catalouge above all.( e.g. Kids New Arrivals, Shoes Summer Collection ...etc</span>
	  			</div>
	  			<div class="col-md-3">
	  				<span style="color:#F05539;font-family:Arial;font-size:13px;">*</span><span style="color:#3C3C3C;font-family:Georgia;font-size:11px;">Upload An image for the cover</span>
	  				<br><span style="color:#666666;font-family:Arial;font-size:9.3px;">jpg or png, Dimensions: 200*200 pixel, <br>Resolution: 75, with Max. size 100 KB </span>
	  				<br><br><div id="wb_Text410" style="width:67px;height:17px;z-index:945;text-align:left;">
									<span style="color:#1E90FF;font-family:'Arial Black';font-size:12px;"><u><a href="#" class="style23 vCatalogAction" id="upload_img1">Upload</a></u>
									</span>
						</div>
						<div id="wb_Text410" style="width:67px;height:17px;z-index:945;text-align:left;">
									<span style="color:#1E90FF;font-family:'Arial Black';font-size:12px;"><u><a href="#" class="style23 vCatalogAction" id="change_img1" style="display: none;">Change</a></u>
									</span>
						</div>
	  				
	  				
	  			</div>
	  			<div class="col-md-2" style="margin-top:-35px;">
  					<input name="catalogCImg" type='button' class="catalog_c_img vCatalogAction" id="catalogCimg" style="border: none;" />
  					<input type="hidden" name="vcataloguepath" id="vcataloguepath"  value="" />
  				</div>
	  		</div>
	  	</div><br><br>
	  	<div id="wb_Text405" style="width:89px;height:23px;z-index:966;text-align:left;margin-top:-10px;">
<span style="color:#F05539;font-family:'Arial Black';font-size:16px;">STEP 2</span>
		</div>
		<br/>
  		<!--<div class="row">
	  		<div class="col-md-12">
	  			<span style="color:#F05539;font-family:Arial;font-size:13px;">*</span><span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Choose the best products that help provide the viewers with a distinct impression about your business profile ( Click on the Main&nbsp;&nbsp;&nbsp;&nbsp; <br>Products drop down list to select from or select them one by one by typing the product name or No. then click search).<br></span>
	  		</div>
	  	</div><br><br>-->
  		<!--<div class="row" >
	  		<div class="col-md-12 product-search-bar">
				<select name="sub_product_id" id="hotsub_product_id" class="form-control" style="display:inline-block;width:auto;height:30px;">
			  		<?php foreach ($mproducts as $mpro) { ?>
		      			<?php foreach ($mpro['subproducts'] as $spro) { ?>
		        		<option value="<?php echo $spro['id'];?>"><?php echo $spro['name'];?> (<?php echo $mpro['name'];?>)</option>
		        		<?php } ?>
			    	<?php } ?>
			  	</select>
			  	<input type="text" id="item_name" style="width: 400px; height: 29px; line-height: 29px;" name="item_name" placeholder="Type products name or no.">
			  	<button type="button" onclick="searchProducts();" name="searchproduct" class="btn btn-search-black"><i class="fa fa-search"></i></button>
			</div>
	  	</div>-->
	  	<div id="wb_Text449" style="width:256px;height:25px;z-index:4460;text-align:left;">
				<span style="color:#2D2D2D;font-family:Georgia;font-size:21px;">Select The Products</span>
		</div>
		<input type="text" id="product_item" autocomplete = off   style="width:358px;height:29px;line-height:29px;z-index:4461;" name="SiteSearch1" value="" placeholder="Type products name or no.">
			<input type="button" id="Button26" onclick="searchProduct(true);" name="searchproduct" style="width:45px;height:33px;z-index:4462;padding-bottom:10px;" data-toggle="modal"  backdrop='static' data-target="#productlist_modal">
		<br/>
		<div id="wb_Text294" style="width:410px;height:30px;z-index:4450;text-align:left;">
				<span style="color:#696969;font-family:Arial;font-size:9.3px;">V-Catalouge containes from Min. 10 Products ( 20 Pages ) to&nbsp; Max. 20 Products ( 40 Pages).<br>You can add products by typing many item no. separated by comma,or add them one after one.<br></span>
		</div>
		<br/>
		<div id="selected_products">
		</div>
		<input type="hidden" name="productid" id="productid">
	  	<div id="search_result_catalogue">
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
	  	<br/><br/><br/>
  		<div class="row"  style="padding-top: 35px;text-align:center">
	  		<div class="col-md-8" style="width:100%">
	  			<button type="button"  style="text-align: center; width: 148px;height:25px;background-color: #3C3C3C; border:none;" onclick="addCatalogue(<?php echo $max_vc;?>,<?php echo count($catalogues); ?>);"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Create</span></button>
	  			<button type="button"  style="text-align: center; width: 148px;height:25px;background-color: #3C3C3C; border:none;" onclick="openAddCatalouge();"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Cancel</span></button>
	  		</div>		
	  	</div>
   </div>
   <div class="row">
   		<br><br><br><br><br><br>
   </div>
   <?php } else { ?>
	<div id="Layer222" style="position:absolute;text-align:center;left:0px;top:50px;width:1027px;height:581px;border:0px;">
		<div id="Layer222_Container" style="width:1027px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
			<div id="wb_Shape291" style="position:absolute;left:566px;top:330px;width:137px;height:32px;">
				<a href="javascript:ShowObjectWithEffect('Layer124', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');"><div id="Shape291"><div id="Shape291_text"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Ok</span></div></div></a>
			</div>
			<div id="wb_Text760" style="position:absolute;left:565px;top:206px;width:333px;height:52px;text-align:left;">
				<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">
					How to create catalogues without products..! You have to complete adding your products or at least the products which will be listed in your first catalogue..<br>
				</span>
			</div>
			<div id="wb_Text761" style="position:absolute;left:563px;top:174px;width:333px;height:22px;text-align:left;">
				<span style="color:#FF6347;font-family:Arial;font-size:19px;"><strong>Oops..</strong></span>
			</div>
			<div id="wb_Image42" style="position:absolute;left:55px;top:7px;width:489px;height:489px;">
				<img src="<?php echo asset_url();?>images/businessman-toons.png" id="Image42" alt="">
			</div>
			<div id="wb_Text762" style="position:absolute;left:567px;top:290px;width:333px;height:28px;text-align:left;">
				<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Start with " <strong>My Desksite</strong>" icon to </span><span style="color:#808080;font-family:Arial;font-size:11px;">build </span><span style="color:#2D2D2D;font-family:Arial;font-size:11px;">you site and add your products.</span>
			</div>
		</div>
	</div>
	<?php } ?>
   </div>
 </form>
<script type="text/javascript">
$('.vCatalogAction').on('click', function(e){
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
		customAlert('Please select Image for crop');
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
				$("#catalogCimg").css('background-image','url('+response['fullpath']+')').css('background-cover','cover');
				$('#vcataloguepath').val(response['path']);
				$("#catalogue-pic").val('');
				$("#change_img1").css("display", "block");
				$("#upload_img1").css("display", "none");
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
function searchProducts() {
	if($("#item_name").val() != "" && $("#hotsub_product_id").val() != "") {
		ajaxindicatorstart("Please wait .. while we search product...");
		$.get(base_url+"mystation/desksite/searchproduct",{ query: $("#item_name").val(), sproduct_id: $("#hotsub_product_id").val()},function(data){
			$("#addcatelough_div #search_result_catalogue").html(data);
			ajaxindicatorstop();
		},'html');
	} else {
		customAlert("Please enter product name");
	}
}
var template = {
                    html: 'application/modules/frontend/views/default/default-book-view.html',
                    styles: [
                                asset_url+'css/font-awesome.min.css',
                              	asset_url+'css/short-white-book-view.css'
                            ],
                    script: asset_url+'js/default-book-view.js'
                };

var booksOptions = {
                       	pageCallback: orwell1984PageCallback,
                        pages: 10,
                        propertiesCallback: function (props) {
                            props.page.depth /= 2;
                            props.cover.padding = 0.002;
                            return props;
                        },
                   		template: template
                    };

function orwell1984PageCallback(n) {
    return {
            type: 'html',
            src: base_url + "catalogue/pages/" + catalogue_id + "/" + (n + 1),
            interactive: true
            };
}
var catalogue_id = 0;
function addCatalogue(max_cat_allowed,total_catalogues) {
	var selected_products = $("#productid").val();
	var checkcount = selected_products.split(',');
	if(total_catalogues >= max_cat_allowed)
	{
		customAlert("Your subscription plan allows you to create only "+max_cat_allowed+" catalogue, Please delete old catalogue or upgrade your subscription.")
	}else if($("#catalogue_title").val() == "")
	{
		customAlert("Please enter catalogue name");
	}else if($("#vcataloguepath").val() == ""){
		customAlert("Please upload catalogue cover image");
	}else if(checkcount.length <= 0){
		customAlert("Select product first.");
	}else if(checkcount.length < 10 || checkcount.length > 20){
		customAlert("Please select min of 10 products and maximum of 20");
	} else {
		ajaxindicatorstart("Please wait .. while we add product...");
		$.post(base_url+"mystation/catalogue/add",{item_id: selected_products, catalogue_img: $("#vcataloguepath").val(), catalogue_title: $("#catalogue_title").val()},function(resp){
			if(resp.status == 0) {
				customAlert(resp.msg);
			} else {
				$("#edit_cat_btn").click();
				customAlert(resp.msg);

				$.get(base_url+"catalogue/popup/"+resp.id,{},function(data){
					$('#customAlertBox').modal('hide');
					openEditCatalouge();
					ajaxindicatorstop();
					catalogue_id = resp.id;
					/*$("#catalogue_page_content").html(data);*/
					$("#pcatalogue_id").val(resp.id);
					/*openEditCatalouge();
					ajaxindicatorstop();
					$("#vcatalogue_overlay").modal('show');*/
					$("#catalogue_page_content").html(data);
            		$("#vcatalogue_overlay_home").modal('show');
            		var page_count = parseInt($("#product_count").val());
            		booksOptions.pages = parseInt(page_count*2);
            		var instance = {
                		scene: undefined,
                		options: undefined,
                		node: $('#flip-book-window').find('.mount-node')
            		};

      				instance.options = booksOptions;
            		instance.scene = instance.node.FlipBook(instance.options);
				},'html');
			}
		},'json');
	}
}
function publishCatalogue() {
	ajaxindicatorstart("Please wait .. while we publish catalogue...");
	$.get(base_url+"mystation/catalogue/publish",{catalogue_id: $("#pcatalogue_id").val()},function(resp){
		if(resp.status == 0) {
			customAlert(resp.msg);
		} else {
			$("#vcatalogue_overlay").modal('hide');
			$("#edit_cat_btn").trigger("click");
			customAlert(resp.msg);
			ajaxindicatorstop();
		}
	},'json');
}

function editCatalogue() {
	$.get(base_url+"mystation/editCatelougeForm",{catalogue_id: $("#pcatalogue_id").val()},function(data){
		$("#editcatalouge").html(data);
		$("#editcatalouge_div").show();
		$("#vcatalogue_overlay").modal('hide');
	});
}
var selected_product_ids = new Array();
function selectproduct()
{
	
    $.each($("input[name='chkproduct_id']:checked"), function(){ 
        if(selected_product_ids.indexOf($(this).val()) == -1)        
    		selected_product_ids.push($(this).val());
    });
	selected_product_ids = selected_product_ids.filter(v=>v!=null);
	if(selected_product_ids.length > 0 ) {
		if(selected_product_ids.length > 20)
		{
			customAlert('Please select upto 20 products');
		} else {
			 	//var productid = selected_product_ids;
			 	$("#productid").val(selected_product_ids);
			 	$.post("<?php echo base_url();?>mystation/getselectedproductlists",{productids:selected_product_ids},function(data) {
			 		$("#selected_products").html(data);
			 		jQuery('#productlist_modal').modal('hide');
			 		/*document.getElementById("product_item").value = data[0].name;
			    	document.getElementById("pname").textContent =data[0].name;
			    	document.getElementById("pnumber").textContent = data[0].model_no;
			    	document.getElementById("pqty").textContent = data[0].quantity;
			    	document.getElementById("punit").textContent = data[0].unit;
			    	document.getElementById("pmpro").textContent = data[0].main_product;
			    	if(data[0].sub_product !="") {
			    		document.getElementById("psubpro").textContent = " / "+data[0].sub_product;
			    	}
			    	$("#product_id").val(data[0].id);
			    	$(".product_link").attr("href","./desksite/102/"+data[0].id);
			    	$("#mainproductimg").attr("src", asseturl+data[0].main_image);
			    	$("#pinfo_div").show();
			    	document.getElementById('pinfo_div').style.display = "block";
			    	$("#Layer983").css('margin-top','');
				 	jQuery('#productlist_modal').modal('hide');*/
			 	});
		}
	} else {
		alert('Please select product.');
	}
 }
</script>
 
