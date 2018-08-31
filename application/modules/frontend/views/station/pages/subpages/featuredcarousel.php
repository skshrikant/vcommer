<div class="panel-heading custom-panel-heading" style="text-align:left;padding-top: 5px !important;">
	<span class="pull-right-close" style="padding-top: 5px;"><a href="javascript:ShowObjectWithEffect('Layer275', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
 </div>
<div class="panel-body panel-body-custom" id="main_screen_ads_info" style="background-color:#F5F5F5;padding-left:0px;">
	<div id="product_list">
		<div class="product-list-outer">
			<input type="hidden" id="fcis_confirmed" value="0"/>
			<input type="hidden" id="fcis_cost_confirmed" value="0"/>
			<div class="row">
				<div class="col-sm-12">
					<span class="ms-ads-title">Featured Products Ads ( All Pages).</span>
				</div>
				<div class="col-sm-12">
					<span class="product-list-text">It contains the following carousel ( Desksite + Real In 3D Products + V-Catalogue + Featured Products & Videos).:</span><br>
					<span class="product-list-text">To display your products in the trade station carousels in all pages, please confirm the three steps shown below :</span>
				</div>
				<div class="col-sm-12">
					<br><br>
				</div>
				<div class="col-sm-12">
					<div class="row">
						<div class="col-sm-9">
							<div>
								<span class="ms-ads-link-title"><u>The First Available Period</u></span>
							</div>
							<div id="wb_Shape495" style="padding-top:15px;width:333px;height:50px;z-index:2311;">
								<a href="" style="text-decoration:none;"><div id="Shape495"><div style="padding-top:15px;text-align:center;"><span style="color:#2D2D2D;font-family:Arial;font-size:19px;"><?php echo date('M - Y',strtotime($dates['from_date']));?></span></div></div></a>
							</div>
							<div class="top_layer_text" style="padding-top:25px;">
								<span style="color:#696969;font-family:Arial;font-size:11px;">Please click on confirm to book this period to publish your Ad. <br>Your booking will only last for 1 hour untill you make your payment. </span>
							</div>
						</div>
						<div class="col-sm-3" style="padding-top:30px;">
							<div id="wb_Shape475" class="ads-confirm-btn" style="float:left;">
								<a href="javascript:confirmFCAdDate();" ><div id="Shape475"><div style="text-align:center;padding-top:13px;"><span style="color:#FFFFFF;font-family:Arial;font-size:19px;">Confirm</span></div></div></a>
							</div>
							<div id="wb_Image1842" style="width:50px;height:50px;float:left;margin-left:15px;display:none;">
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
								<span style="color:#696969;font-family:Arial;font-size:15px;">USD <?php echo $adinfo['fc_price'];?> / Per Week</span>
							</div>
						</div>
						<div class="col-sm-3" style="padding-top:18px;">
							<div id="wb_Shape475" class="ads-confirm-btn" style="float:left;">
								<a href="javascript:confirmFCPrice();" ><div id="Shape475"><div style="text-align:center;padding-top:13px;"><span style="color:#FFFFFF;font-family:Arial;font-size:19px;">Confirm</span></div></div></a>
							</div>
							<div id="wb_Image1843" style="width:50px;height:50px;float:left;margin-left:15px;display:none;">
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
</div>
<div id="fc_confirmed_modal" class="modal fade">
	<div class="modal-dialog" style="">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #DCDCDC;">
				<img class="hover" alt="" src="<?php echo asset_url();?>images/advertising1.png" style="width:54px;">
				<span style="margin-left:50px;color:#2D2D2D;font-family:Georgia;font-size:27px;">Congrates <?php echo $this->session->userdata('tsuser')['prefix'];?> <?php echo $this->session->userdata('tsuser')['name'];?></span>
			</div>
			<div class="modal-body" >
				<div id="ms_confirmed_area">
					<div style="width:476px;height:117px;z-index:2300;margin:auto;">
						<img src="<?php echo asset_url();?>images/img1908.png" id="Shape500" alt="" style="width:476px;height:117px;">
					</div>
				</div>
				<div class="text-center" style="padding:10px 0px;">
					<span style="color:#3C3C3C;font-family:Arial;font-size:11px;">Your products will be displayed in all pages on <?php echo date('F Y',strtotime($dates['from_date']));?></span>
				</div>
			</div>
			<div class="modal-footer" style="text-align:center;">
				<button type="button" class="btn btn-sm btn-black-custom" data-dismiss="modal" style="padding:0px 40px;">Ok</button>
			</div>
		</div>
	</div>
</div>
<script>

paypal.Button.render({
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
	                     total: '101.00',
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
	       	featuredPaymentReceived(response,'<?php echo $dates['from_date'];?>','<?php echo $dates['to_date'];?>');
	   	});
	},
	onCancel: function(data) {
	   	alert('The payment was cancelled!');
	}

}, '#paypal-button-fc');

function featuredPaymentReceived(paydata,from_date,to_date) {
	$.post(base_url+"mystation/ads/featured/payment",{paydata: paydata, amount: 100, from_date: from_date, to_date: to_date},function(data) {
		$("#featuredcarousel").html(data);
	},'html');
}

function msNextScreen(from_date,to_date) {
	$.post(base_url+"mystation/ads/featured/next",{amount: 100, from_date: from_date, to_date: to_date},function(data) {
		$("#featuredcarousel").html(data);
	},'html');
}


function confirmFCAdDate() {
	$("#fcis_confirmed").val(1);
	$("#wb_Image1842").show();
	if($("input[name='fcgateway_name']:checked").val() == 'paypal' && $("#fcis_cost_confirmed").val() == '1') {
		$("#paypal-button-fc").show();
    }
}

function confirmFCPrice() {
	$("#fcis_cost_confirmed").val(1);
	$("#wb_Image1843").show();
	$("#next_button").show();
}

$("input[name='fcgateway_name']").change(function() {
    if($(this).val() == 'paypal') {
        if($("#fcis_confirmed").val() == '1' && $("#fcis_cost_confirmed").val() == '1') {
			$("#paypal-button-fc").show();
        } else {
			alert("Confirm date and cost first.");
        }
    }
});

</script>