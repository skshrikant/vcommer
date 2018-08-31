<div class="panel-heading custom-panel-heading" style="text-align:left;padding-top: 5px !important;">
	<span class="pull-right-close" style="padding-top: 5px;"><a href="javascript:ShowObjectWithEffect('Layer275', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
 </div>
<div class="panel-body panel-body-custom" id="main_screen_ads_info" style="background-color:#F5F5F5;padding-left:0px;">
	<?php if($myds_stage == 4) { ?>	
	<div id="product_list">
		<div class="product-list-outer">
			<input type="hidden" id="is_confirmed" value="0"/>
			<input type="hidden" id="is_cost_confirmed" value="0"/>
			<div class="row">
				<div class="col-sm-12">
					<span class="ms-ads-title">Main Screen Ads ( Home Page ).</span>
				</div>
				<div class="col-sm-12">
					<span class="product-list-text">To add your advertising in the trade station main screen please confirm the three steps shown below, to be able to upload your AD.:</span>
				</div>
				<div class="col-sm-12">
					<br><br>
				</div>
				<div class="col-sm-12">
					<span class="ms-ads-link-title"><u>The First Available Period</u></span>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-4">
							<span style="color:#2D2D2D;font-family:Arial;font-size:85px;"><?php echo strtoupper(date('M',strtotime($dates['from_date'])));?></span>
						</div>
						<div class="col-sm-5">
							<div>
								<span class="catalogue_page_no_text red-text">The <?php echo $weekname;?> Week</span>
							</div>
							<div class="top_layer_text">
								<?php for($i = $dates['from_date']; $i <= $dates['to_date']; ) { ?>
								<div id="wb_Shape443" class="date_number_outer">
									<a href=""><div id="Shape443"><div class="date_numbers"><span class="ms-ads-title"><?php echo date('d',strtotime($i));?></span></div></div></a>
								</div>
								<?php $i = date('Y-m-d',strtotime('+1 day',strtotime($i)));?>
								<?php } ?>
								<div style="clear:both;"></div>
							</div>
							<div class="bottom_layer_text">
								<span class="catalogue_page_no_text" style="color:#696969;">Please click on confirm to book this period to publish your Ad. <br>Your booking will only last for 1 hour untill you make your payment. </span>
							</div>
						</div>
						<div class="col-sm-3" style="padding-top:18px;">
							<div id="wb_Shape475" class="ads-confirm-btn" style="float:left;">
								<a href="javascript:confirmAdDate();" ><div id="Shape475"><div style="text-align:center;padding-top:13px;"><span style="color:#FFFFFF;font-family:Arial;font-size:19px;">Confirm</span></div></div></a>
							</div>
							<div id="wb_Image184" style="width:50px;height:50px;float:left;margin-left:15px;display:none;">
								<img src="<?php echo asset_url();?>images/tick-big.png" id="Image184" alt="">
							</div>
							<div style="clear:both;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-list-outer" style="background-color:#fff;margin:0px;">
			<div class="row" style="padding:40px;">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-4">
							<div style="padding-bottom:15px;">
								<span style="color:#2D2D2D;font-family:Arial;font-size:16px;">Confirm Cost</span>
							</div>
							<div>
								<span style="color:#696969;font-family:Arial;font-size:15px;">Total Cost</span>
							</div>
						</div>
						<div class="col-sm-5">
							<div style="padding-top:25px;">
								<span style="color:#696969;font-family:Arial;font-size:15px;">USD <?php echo $adinfo['ms_price'];?> / Per Week</span>
							</div>
						</div>
						<div class="col-sm-3" style="padding-top:18px;">
							<div id="wb_Shape475" class="ads-confirm-btn" style="float:left;">
								<a href="javascript:confirmPrice();" ><div id="Shape475"><div style="text-align:center;padding-top:13px;"><span style="color:#FFFFFF;font-family:Arial;font-size:19px;">Confirm</span></div></div></a>
							</div>
							<div id="wb_Image1841" style="width:50px;height:50px;float:left;margin-left:15px;display:none;">
								<img src="<?php echo asset_url();?>images/tick-big.png" id="Image184" alt="">
							</div>
							<div style="clear:both;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="product-list-outer">
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-4">
						</div>
						<div class="col-sm-5">
						</div>
						<div class="col-sm-3" style="padding-top:18px;">
							<div class="ads-confirm-btn" id="next_button" style="float:left;display:none;">
								<a href="javascript:msNextScreen('<?php echo $dates['from_date'];?>','<?php echo $dates['to_date'];?>');" ><div id="Shape475"><div style="text-align:center;padding-top:13px;"><span style="color:#FFFFFF;font-family:Arial;font-size:19px;">Next</span></div></div></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<br><br><br><br><br><br><br><br><br>
			</div>
		</div>
	</div>
	<?php } else { ?>
	<div class="panel panel-default tab-pane fade in active" id="mainscreenads" style="min-height:690px;">
		<div class="panel-heading custom-panel-heading" style="text-align:left;padding-top: 5px !important;">
			<span class="pull-right-close" style="padding-top: 5px;"><a href="javascript:ShowObjectWithEffect('Layer275', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
		</div>
		<div class="panel-inner">
			<div id="Layer222" style="position:absolute;text-align:center;left:0px;top:50px;width:1027px;height:581px;border:0px;">
				<div id="Layer222_Container" style="width:1027px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
					<div id="wb_Shape291" style="position:absolute;left:566px;top:330px;width:137px;height:32px;">
						<a href="javascript:ShowObjectWithEffect('Layer275', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');"><div id="Shape291"><div id="Shape291_text"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Ok</span></div></div></a>
					</div>
					<div id="wb_Text760" style="position:absolute;left:565px;top:206px;width:333px;height:52px;text-align:left;">
						<span style="color:#2D2D2D;font-family:Arial;font-size:15px;">To add <strong>An Advertising with a great result</strong>, you first have to complete adding your products, create Real in 3D products, Cataogues and Videos.</span>
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
		</div>
	</div>
	<?php } ?>
</div>
<div id="ms_confirmed_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #DCDCDC;">
				<img class="hover" alt="" src="<?php echo asset_url();?>images/advertising1.png" style="width:54px;">
				<span style="margin-left:50px;color:#2D2D2D;font-family:Georgia;font-size:27px;">Congrates <?php echo $this->session->userdata('tsuser')['prefix'];?> <?php echo $this->session->userdata('tsuser')['name'];?></span>
			</div>
			<div class="modal-body" >
				<div id="ms_confirmed_area">
					<div id="wb_Image231" style="width:406px;height:185px;margin:auto;">
						<img src="" id="Image231" alt="">
					</div>
				</div>
				<div class="text-center" style="padding:10px 0px;">
					<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Your advertising will be live on <?php echo $weekname;?> WEEK of <?php echo date('F Y',strtotime($dates['from_date']));?></span>
				</div>
				<div style="text-align:center;">
					<div class="top_layer_text" style="width:400px;display:inline-block;">
						<?php for($i = $dates['from_date']; $i <= $dates['to_date']; ) { ?>
						<div id="wb_Shape443" class="date_number_outer">
							<a href=""><div id="Shape443"><div class="date_numbers"><span class="ms-ads-title"><?php echo date('d',strtotime($i));?></span></div></div></a>
						</div>
						<?php $i = date('Y-m-d',strtotime('+1 day',strtotime($i)));?>
						<?php } ?>
						<div style="clear:both;"></div>
					</div>
				</div>
			</div>
			<div class="modal-footer" style="text-align:center;">
				<button type="button" class="btn btn-sm btn-black-custom" data-dismiss="modal" style="padding:0px 40px;">Ok</button>
			</div>
		</div>
	</div>
</div>
<script>
function addNewProduct() {
	$.get(base_url+"mystation/desksite/newproductitem",{},function(data){
		$("#product_list").html(data);
	},'html');
}

function editOldProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="product_id"]:checked').each(function() {
		item_id = this.value;
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select product to update.");
	} else if(checkcount > 1) {
		alert("You can edit only one product at a time.");
	} else {
		$.get(base_url+"mystation/desksite/editproductitem/"+item_id,{},function(data){
			$("#product_list").html(data);
		},'html');
	}
}

function deleteOldProduct() {
	var checkcount = 0;
	var item_id = "";
	$('input[name="product_id"]:checked').each(function() {
		if(item_id == "") {
			item_id = this.value;
		} else {
			item_id = item_id+","+this.value;
		}
	   	checkcount++;
	});
	if(checkcount <=0 ){
		alert("Select product to delete.");
	} else {
		$.get(base_url+"mystation/desksite/deleteproductitem",{item_id: item_id},function(data){
			if(data.status == 0) {
				alert(resp.msg);
			} else {
				alert(data.msg);
				getMyDeskside();
			}
		},'json');
	}
}

/*paypal.Button.render({
	env: 'sandbox',
	style: {
        size: 'small',
        color: 'gold',
        shape: 'rect',
        label: 'pay'
    },
	client: {
	  	sandbox:    'AVZifqGdMaus7NSP8_Ps5dIGAo3NCPDBZ-pwa0hF0S--EBz8hOC3iaXr9mSS_0zf2p_7xK-_bkAjrIvO',
	  	production: 'AcIyXBUkURUQDSH_4ILWnFzoC4utWCuD2sr9RCRf2mFDWchhpeFCg8vrY_gq3HOcmwD-uWFVtRML3wuH' 	
	},
	payment: function(data, actions) {
	     return actions.payment.create({
	         transactions: [
	             {
	                 amount: {
	                     total:    '<?php echo $adinfo['ms_price'];?>.00',
	                     currency: 'USD'
	                 }
	             }
	         ]
	     });
	},
	commit: true,
	onAuthorize: function(data, actions) {
	   	return actions.payment.execute().then(function(response) {
	       	console.log("PayerID:"+response.id);
	       	console.log("Amount:"+response.transactions[0].amount.total);
	       	msPaymentReceived(response,'<?php echo $dates['from_date'];?>','<?php echo $dates['to_date'];?>');
	   	});
	},
	onCancel: function(data) {
	   	alert('The payment was cancelled!');
	}

}, '#paypal-button');*/

function msPaymentReceived(paydata,from_date,to_date) {
	$.post(base_url+"mystation/ads/mainscreen/payment",{paydata: paydata, amount: 250, from_date: from_date, to_date: to_date},function(data) {
		$("#mainscreenads").html(data);
	},'html');
}

function msNextScreen(from_date,to_date) {
	$.post(base_url+"mystation/ads/mainscreen/next",{amount: 250, from_date: from_date, to_date: to_date},function(data) {
		$("#mainscreenads").html(data);
	},'html');
}

function confirmAdDate() {
	$("#is_confirmed").val(1);
	$("#wb_Image184").show();
	if($("input[name='gateway_name']:checked").val() == 'paypal' && $("#is_cost_confirmed").val() == '1') {
		$("#paypal-button").show();
    }
}

function confirmPrice() {
	$("#is_cost_confirmed").val(1);
	$("#wb_Image1841").show();
	$("#next_button").show();
}

$("input[name='gateway_name']").change(function() {
    if($(this).val() == 'paypal') {
        if($("#is_confirmed").val() == '1' && $("#is_cost_confirmed").val() == '1') {
			$("#paypal-button").show();
        } else {
			alert("Confirm date and cost first.");
        }
    }
});

</script>