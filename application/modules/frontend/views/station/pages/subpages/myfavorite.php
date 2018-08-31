<script type="text/javascript">
function delete_favorite(id,type)
{
	$.post("<?php echo base_url();?>mystation/deletefavorite",{id:id,type:type},function(data) {
		if(data.status == 1)
		{
			customAlert(data.msg);
		} else {
			customAlert(data.msg);
		}
		
		openFavoriteInfo(5);
	},'json');
	
}
function delete_favoritepost(id,type)
{
	$.post("<?php echo base_url();?>mystation/deletefavorite",{id:id,type:type},function(data) {
		if(data.status == 1)
		{
			customAlert(data.msg);
		} else {
			customAlert(data.msg);
		}
		
		openFavoriteInfo(9);
	},'json');
	
}

function delete_favoritecatalog(id,type)
{
	$.post("<?php echo base_url();?>mystation/deletefavorite",{id:id,type:type},function(data) {
		if(data.status == 1)
		{
			customAlert(data.msg);
		} else {
			customAlert(data.msg);
		}
		
		openFavoriteInfo(7);
	},'json');
	
}

function delete_favorite3dproduct(id,type)
{
	$.post("<?php echo base_url();?>mystation/deletefavorite",{id:id,type:type},function(data) {
		if(data.status == 1)
		{
			customAlert(data.msg);
		} else {
			customAlert(data.msg);
		}
		
		openFavoriteInfo(6);
	},'json');
	
}


function showDeleteFavoriteRequest(formData, jqForm, options){
	var queryString = $.param(formData);
	return true;
}
function showDeleteFavoriteResponse(resp, statusText, xhr, $form){
	if(resp.status == 0) {
		$("#response").addClass('alert-danger');
		$("#response").html(resp.msg);
		$("#response").show();
	} else {
		$('#photo').attr('src', resp.msg);
		$("#response").addClass('alert-success');
		$("#response").html(resp.msg);
		$("#response").show();
		$('#dproductphoto').attr('src', resp.msg);
		$('#productimage_name').val(resp.msg);
	}
	ajaxindicatorstop();
}

function toggleDeleteDive(icon,chkbx) {
	if($("#"+chkbx).prop("checked")) {
		$("#"+chkbx).prop("checked","checked");
		$("#"+icon).show();
	} else {
		$("#"+chkbx).prop("checked",false);
		$("#"+icon).hide();
	}
}
</script>
<style>
.catalogue_page_item_name {
	padding-top:20px !important;
}
.booklet .b-arrow-prev {
    left: -60px !important;
}
.booklet .b-arrow-next {
    right: -40px !important;
}
</style>

<form name="frm_favorite"   method="post" action="" enctype="multipart/form-data" id="frm_favorite" >
	<div class="panel-heading custom-panel-heading">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-2" style="text-align: center;padding-top: 9px;padding-left:26px;">
					<span style="color:#A9A9A9;font-family:Georgia;font-size:19px;">My Favorite</span>
				</div>
				<div class="col-md-9"  style="text-align: center">
					<a href="javascript:openFavoriteInfo(1);" class="btn btn-default btn-custom alerts-btn <?php echo isset($favoriteseller)? 'alerts-btn-selected':''; ?>" id="alert-fab-1">Sellers</a>
			  		<a href="javascript:openFavoriteInfo(2);" class="btn btn-default btn-custom alerts-btn <?php echo isset($favoriteshipper)? 'alerts-btn-selected':''; ?>" id="alert-fab-2">Shippers</a>
			  		<a href="javascript:openFavoriteInfo(3);" class="btn btn-default btn-custom alerts-btn <?php echo isset($favoritebuyer)? 'alerts-btn-selected':''; ?>" id="alert-fab-3">Buyers</a>
			  		<a href="javascript:openFavoriteInfo(4);" class="btn btn-default btn-custom alerts-btn <?php echo isset($favoriteproduct)? 'alerts-btn-selected':''; ?>" id="alert-fab-4">Products</a>
			  		<a href="javascript:openFavoriteInfo(5);" class="btn btn-default btn-custom alerts-btn <?php echo isset($favoritevedio)? 'alerts-btn-selected':''; ?>" id="alert-fab-5">Videos</a>
			  		<a href="javascript:openFavoriteInfo(6);" class="btn btn-default btn-custom alerts-btn <?php echo isset($favoritedproduct)? 'alerts-btn-selected':''; ?>" id="alert-fab-6">R3D pro</a>
			  		<a href="javascript:openFavoriteInfo(7);" class="btn btn-default btn-custom alerts-btn <?php echo isset($favoritecatalouge)? 'alerts-btn-selected':''; ?>" id="alert-fab-7" style="width: 94px !important;">V-Catalouge</a>
			  		<a href="javascript:openFavoriteInfo(8);" class="btn btn-default btn-custom alerts-btn <?php echo isset($favoriteads)? 'alerts-btn-selected':''; ?>" id="alert-fab-8">Ads.</a>
			  		<a href="javascript:openFavoriteInfo(9);" class="btn btn-default btn-custom alerts-btn <?php echo isset($favoritepost)? 'alerts-btn-selected':''; ?>" id="alert-fab-9">Posts</a>
				</div>	
				<div class="col-md-1">
					<span class="pull-right-close" style="text-align: right"><a href="javascript:closeAlert();" class="btn-custom-close">X</a></span>
				</div>
			</div>
		</div>
  	</div>
  	<div class="panel-body panel-body-custom" id="" style="padding-top: 22px;height:700px;">		
  		<div id="seller_div" style="text-align: center;">
			<?php include 'favoriteseller.php';?>
   		</div>
  		<div id="shipper_div" style="text-align: center;">
			<?php include 'favoriteshipper.php';?>
   		</div>
  		<div id="buyer_div" style="text-align: center;">
			<?php include 'favoritebuyer.php';?>
   		</div>
  		<div id="product_div" style="text-align: center;">
			<?php include 'favoriteproduct.php';?>
   		</div>
  		<div id="vedio_div" style="text-align: center;">
			<?php include 'favoritevedio.php';?>
   		</div>
  		<div id="dproduct_div" style="text-align: center;">
			<?php include 'favorite3dpro.php';?>
   		</div>
  		<div id="catalouge_div" style="text-align: center;">
			<?php include 'favoritecatalouge.php';?>
   		</div>
  		<div id="ads_div" style="text-align: center;">
			<?php include 'favoriteads.php';?>
   		</div>
  		<div id="post_div" style="text-align: center;">
			<?php include 'favoritepost.php';?>
   		</div>
   		<br><br>
   </div>
</form>
<?php include APPPATH.'modules/frontend/views/default/vcatalogue.php';?> 
<style>
.catalog_c_img {
	border: none;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background-image: url(../../../assets/images/img2096.png);
    background-repeat: no-repeat;
    background-position: 50%;
}
.catalogue_modal_body {
	background-color:transparent;background-image:url('.../../assets/images/vcat_insider.png');background-size:cover;padding-top: 110px;
}
.catalogue_outer_body {
	width: 700px;
    margin-left: 100px;
}
.catalogue_page_item_name {
	color:#303030;font-family:Georgia;font-size:13px;padding-bottom:5px;padding-top:8px;
}
.catalogue_page_item_details {
	color:#787878;font-family:Arial;font-size:11px;padding-bottom:10px;
}
.catalogue_page_item_quantity {
	color:#1E90FF;font-family:Arial;font-size:11px;padding-bottom:25px;
}
.catalogue_page_item_price_div {
	text-align: center;
	margin-bottom: -10px;
    z-index: 1;
}
.catalogue_page_item_price {
	background-color:#FF0000;color:#FFFFFF;font-family:Arial;font-size:17px;padding: 2px 10px;
}
.catalogue_page_item_mimg {
	width:303px;height:268px;padding-bottom:5px;
}
.catalogue_page_left_num {
	padding-top: 10px;
	background-color:#fff;
}
.catalogue_page_no_text {
	color:#D3D3D3;font-family:Arial;font-size:11px;
}
.catalogue_page_no_num {
	color:#FF6347;font-family:'Arial Black';font-size:16px;
}
.catalogue_page_item_mimg-sm {
	width:150px;height:115px;margin-top: 10px;
}
.catalogue_page_right_num {
	padding-top: 10px;
	background-color:#fff;
}
.catalogue_main_img {
	border: 1px solid #eee;
	width: 303px;
    height: 268px;
}
.catalogue_sub_img {
	border: 1px solid #eee;
	width: 150px;
    height: 115px;
}
.catalogue_modal_close {
	width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: #fff !important;
    font-size: 19px;
    opacity: 1;
}
li.share-button a{
	font-size:20px;
	color:#fa5c43;
	border :2px solid;
	margin-top: 20px;
	border-radius :50%;
	padding: 4px;
	width:25px;
	height :25px;
}
li.share-button a:hover{
	font-size:20px;
	color:#ffffff;
	border :2px solid;
	margin-top: 20px;
	border-radius :50%;
	padding: 4px;
	width:30px;
	height :30px;
}
ul.share{
	list-style-type: none;
	margin-top:  100%;
	line-height: 50px;
}
.carousel_img {
	padding: 0% 23% !important; 
}
.hover-menu {
    position: absolute;
    height: 50px;
    width: 100%;
    bottom: 7px;
    left: 0;
    display: none;
}
</style>
<script src="<?php echo asset_url();?>js/bootstrap-typeahead.min.js"></script>
<link href="<?php echo asset_url();?>css/jquery.booklet.1.1.0.css?1.1" rel="stylesheet">
<script src="<?php echo asset_url();?>js/jquery.booklet.1.1.0.min.js?1.1"></script>
<script src="<?php echo asset_url();?>js/jquery.easing.1.3.js?1.1"></script>