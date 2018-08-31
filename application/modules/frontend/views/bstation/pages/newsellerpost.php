<link href="<?php echo asset_url(); ?>css/typeahead.css"  rel="stylesheet">
<style>
<!--
ul.typeahead li a {
	background-color: #337ab7 !important;
	opacity:1;
	filter: alpha(opacity=100);
}
ul.typeahead li a:hover {
	background-color: #1E90FF !important;
	opacity:1;
	filter: alpha(opacity=100);
}
-->
</style>
<div class="col-md-3 col-sm-3 col-xs-3 hash">
	<img src="<?php echo asset_url(); ?>images/img0041.png" id="Image59" alt="" class="img191">
</div>
<form id="addPostContent" name="addPostContent" action="" method="post" enctype="multipart/form-data">
	<div class="col-md-9 col-sm-9 col-xs-9">
		<input type="hidden" name="usertype" value="<?php echo $tscategory_id;?>"> 
		<a href="#" onclick="ShowObjectWithEffect('Layer74', 0, 'clipvertical', 500);ShowObject('Layer75', 0);closeNewPost();return false;" class="pull-right" style="margin-right:-25px;margin-top:-10px;"> 
			<img src="<?php echo asset_url(); ?>images/close.png" id="Image2" alt="" class="img35">
		</a>
		<div id="postdatacontent">
			<h3 class="leftbox1">
				<b>Boost It Now..</b>
			</h3>
			<p class="leftbox2">Sell Post Covers All Sellers/Shippers
				Requirements, Such As New Offers, New Arrivals, Wholesale
				Discount, Special Shipping Rates, Sourcing A Potential Buyer For
				A Particular Product, Looking For Agents For A Special Product
				And Much More..
			</p>

			<div class="row" style="margin:0px;">
				<div>
					<div class="row">
						<label class="label-text col-sm-3">Post Title</label>
						<div class="form-group col-sm-5">
							<div>
								<input type="text" id="post-title" class="form-control post-input-control" placeholder="Selling Post Title" name="title" value="" maxlength="45" style="width:285px;margin-left: 0px;" />
							</div>
							<div class="messageContainer"></div>
						</div>
						<div class="col-sm-4">
							<span style="color:#696969;font-family:Arial;font-size:9.3px;">Title should include the keywords members may type to find your post above all.</span>
						</div>
					</div>
					<?php if($tscategory_id == 1) { ?>
					<div class="row">
						<label class="label-text col-sm-3">Upload Images</label>
						<div class="col-sm-1">
							<input type="radio" name="gender" value="productimage" checked />
						</div>
						<label class="label-text col-sm-2" style="padding:0px;">From my products</label>
						<div class="col-sm-6" style="padding:0px;margin-top:-5px;">
							<div>
							<input type="hidden" name="product_id" id="select_product_id" value=""/>
							<input type="text" style="width:190px;padding-top:4px;display:inline;" id="product_select" class="form-control post-input-control" placeholder="Type the product no."/>
							<button id="buttonselect" style="width:60px;height:25px;" type="button" onclick="getProductImages();">Link</button>
							</div>
							<div class="messageContainer"></div>
						</div>
					</div>
					<br>
					<div class="row">
						<label class="label-text col-sm-3">&nbsp;</label>
						<div class="hh label-text col-sm-4"><div class="col-sm-1" style="padding-left:0px;"><input type="radio" name="gender" value="uproductimage" /></div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; New images " Click below".</div>
						<div class="col-sm-3"><span style="color:#696969;font-family:Arial;font-size:9.3px;">4 jpg images, Each image with Max. size 75KB</span></div>
						<div class="col-sm-offset-3 col-sm-9" style="margin-top:10px;">
							<div>
								<input type="file" name="postphoto1" id="postphoto1" class="post-background" onchange="setBackgroundSize('postphoto1',this,75);" style="display:inline;"/>
								<input type="file" name="postphoto2" id="postphoto2" class="post-background" onchange="setBackgroundSize('postphoto2',this,75);" style="display:inline;"/>
								<input type="file" name="postphoto3" id="postphoto3" class="post-background" onchange="setBackgroundSize('postphoto3',this,75);" style="display:inline;"/>
								<input type="file" name="postphoto4" id="postphoto4" class="post-background" onchange="setBackgroundSize('postphoto4',this,75);" style="display:inline;"/>
							</div>
							<div class="messageContainer"></div>
						</div>
					</div>
					<?php } else { ?>
					<div class="row">
						<label class="label-text col-sm-3">Upload Images</label>
						<input type="hidden" name="product_id" id="select_product_id" value="0"/>
						<div class="hh label-text col-sm-4">Choose files below.</div>
						<div class="col-sm-3"><span style="color:#696969;font-family:Arial;font-size:9.3px;">4 jpg images, Each image with Max. size 75KB</span></div>
						<div class="col-sm-offset-3 col-sm-9" style="margin-top:10px;">
							<div>
								<input type="file" name="postphoto1" id="postphoto1" class="post-background" onchange="setBackgroundSize('postphoto1',this,75);" style="display:inline;"/>
								<input type="file" name="postphoto2" id="postphoto2" class="post-background" onchange="setBackgroundSize('postphoto2',this,75);" style="display:inline;"/>
								<input type="file" name="postphoto3" id="postphoto3" class="post-background" onchange="setBackgroundSize('postphoto3',this,75);" style="display:inline;"/>
								<input type="file" name="postphoto4" id="postphoto4" class="post-background" onchange="setBackgroundSize('postphoto4',this,75);" style="display:inline;"/>
							</div>
							<div class="messageContainer"></div>
						</div>
					</div>
					<?php } ?>
					<input type="hidden" name="cimg[]" id="cimg1"/>
					<input type="hidden" name="cimg[]" id="cimg2"/>
					<input type="hidden" name="cimg[]" id="cimg3"/>
					<input type="hidden" name="cimg[]" id="cimg4"/>
					<div class="row">
						<label class="label-text col-sm-3">Description & Spec.:</label>
						<div class="col-sm-9">
							<div>
								<textarea rows="4" cols="30" name="description" maxlength="1500" style="width:316px;"></textarea>
							</div>
							<div class="messageContainer"></div>
						</div>
					</div>
					<br>
					<?php if($tscategory_id == 1) { ?>
					<div class="row">
						<label class="label-text col-sm-3">USD Price</label>
						<div class="col-sm-2">
							<div>
								<input type="text" id="usd-price" name="usd_price" value="" maxlength="10" style="width:125px;margin-left:0px;" class="form-control post-input-control"/>
							</div>
							<div class="messageContainer"></div>
						</div>
						<label class="label-text col-sm-1 text-right">Qty</label>
						<div class="col-sm-2" style="padding-left:7px;">
							<div>
								<input type="text" name="quantity" style="width:125px;" class="form-control post-input-control"/>
							</div>
							<div class="messageContainer" style="padding-left:10px;"></div>
						</div>
					</div>
					<br>
					<?php } else { ?>
					<input type="hidden" id="usd-price" name="usd_price" value="0"/>
					<input type="hidden" name="quantity" value="1"/>
					<br><br>
					<?php } ?>
					<div class="row">
						<div class="col-sm-3">&nbsp;</div>
						<div class="col-sm-9">
							<div class="inline">
								<input type="checkbox" name="profilecheck" value="1" style="margin-left:0px;">
								 
							
								<p class="leftbox2">Keep My Profile Info. Locked For Other <?php if($tscategory_id == 1) { ?>Sellers<?php } else {?>Shippers<?php } ?>..</p>
							
							
							</div>
							<div class="inline">
								<button id="Button4" type="button" onclick="resetMyForm();">RESET</button>
								<button id="Button4" type="submit" name="submit">SEND</button>
							</div>
						</div>
					</div>
					<br>
					<?php if($tscategory_id == 2) { ?>
					<br><br><br><br>
					<?php } ?>
				</div>
			</div>
		</div>
		<div id="view_Product_image"></div>
		<div id="loading-image" class="post-loading-layer">
			<a href="#" onclick="ShowObjectWithEffect('Layer74', 0, 'clipvertical', 500);ShowObject('Layer75', 0);closeNewPost();return false;" class="pull-right" style="margin-right:-13px;margin-top:-10px;"> 
				<img src="<?php echo asset_url(); ?>images/close.png" id="Image2" alt="" class="img35">
			</a>
			<div class="loading-image">
				<img src="<?php echo asset_url();?>images/loading.gif" alt="" style="color:#FAEBD7;vertical-align:center;text-align:center;"><br><br>
				<span>Please Wait ...</span><br>
				<span>Creating and uploading your post</span>
			</div>
		</div>
		<div id="post-success-result" class="post-success-layer">
			<a href="#" onclick="ShowObjectWithEffect('Layer74', 0, 'clipvertical', 500);ShowObject('Layer75', 0);closeNewPostResult();return false;" class="pull-right" style="margin-right:-13px;margin-top:-10px;"> 
				<img src="<?php echo asset_url(); ?>images/close.png" id="Image2" alt="" class="img35">
			</a>
			<div class="loading-result-text">
				<span class="post-gd">GOOD LUCK</span><br><br>
				<span>Your Post Has Been Sent Successfully To Global Buyers..</span><br>
				<span>Buyers Requests Will be Sent Directly To Your Inquiries Box..</span>
				<br><br>
				<span class="post-gd-lower">Also</span><br>
				<span>Click Anytime On <span style="color:#1E90FF;">Global Offers Posts/View My Post</span></span><br>
				<span>To View And Manage Your Posts...</span>
			</div>
		</div>
	</div>
</form>
<script>
/*$(document).ready(function () {
	$("#product_select").typeahead({
	    onSelect: function(item) {
	        itemvalue = item.value;
	        $("#select_product_id").val(itemvalue);
	    },
	    ajax: {
	        url: base_url+"product/item/search",
	        timeout: 500,
	        displayField: "name",
	        triggerLength: 3,
	        method: "get",
	        loadingClass: "loading-circle",
	        preDispatch: function (query) {
	            return {
	            	name: query
	            }
	        },
	        preProcess: function (data) {
	            if (data.success === false) {
	                return false;
	            }
	            return data;
	        }
	    }
	    
	});	
});*/

function resetMyForm() {
	document.getElementById("addPostContent").reset();
}
</script>