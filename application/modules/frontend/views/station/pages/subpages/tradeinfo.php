<form name="frmedittradeinfo" method="post" action="" enctype="multipart/form-data" id="frmedittradeinfo">
	<div class="panel-heading custom-panel-heading">
	  		<a href="javascript:openTradeInfoEditForm();" class="btn btn-default btn-custom" id="trade_edit_btn">EDIT</a>
	  		<a href="javascript:openTradeInfo();" class="btn btn-default btn-custom" id="trade_info_btn">RESET</a>
<!-- 	  		<a href="javascript:saveTradeInfo();" class="btn btn-default btn-custom">SAVE</a> -->
			<input type="submit" class="btn btn-default btn-custom" name="savetradebtn" id="savetradebtn"  style="display:none" value="SAVE"/>
	  		<span class="pull-right-close"><a href="javascript:ShowObjectWithEffect('Layer164', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close">X</a></span>
	  	</div>
		<div class="panel-body panel-body-custom" id="account_trade_info">
			<div class="personal_info_div" id="trade_info_div">
				<div class="row">
					<div class="col-sm-offset-3 col-sm-8">
						<div style="padding-top: 120px;">&nbsp;</div>
						<div class="row info-row">
							<div class="col-sm-3 label-text"
								style="color: #F05539; font-size: 13px;">Trade & Export Details</div>
						</div>
						<div class="row info-row">
							<div class="col-sm-3 label-text">Main Markets</div>
							<div class="col-sm-9 label-text-value">
								<?php foreach ($trademarket as $row) { ?>
								<div class="col-sm-3" style="padding-left:0px;"><?php echo $row['name'];//echo $tradeinfo[0]['market_name'];?></div>
							<?php } ?>
							</div>
						</div>
						<div class="row info-row">
							<div class="col-sm-3 label-text">Nearst Port/Ports</div>
							<div class="col-sm-9 label-text-value">
							<?php echo $tradeinfo[0]['part1'] ; if(!empty($tradeinfo[0]['part2'])) { echo " And ".$tradeinfo[0]['part2']; } if(!empty($tradeinfo[0]['part3'])) { echo " And ".$tradeinfo[0]['part3']; }?></div>
						</div>
						<div class="row info-row">
							<div class="col-sm-3 label-text">Terms Of International Trade</div>
							<div class="col-sm-9 label-text-value">
							<?php foreach ($tradeinternationaltrad as $row) { ?>
								<div class="col-sm-2" style="padding-left:0px;"><?php echo $row['trade_name'];?></div> 
							<?php }?>
							</div>
						</div>
						<div class="row info-row">
							<div class="col-sm-3 label-text">Terms Of Payment</div>
							<div class="col-sm-9 label-text-value">
							<?php foreach ($tradepayment_terms as $row) { ?>
								<div class="col-sm-2" style="padding-left:0px;"><?php echo $row['payment_terms'];?></div> 
							<?php } ?>
							</div>
						</div>
						<div class="row info-row">
							<div class="col-sm-3 label-text">Payment Curency</div>
							<div class="col-sm-9 label-text-value">
							<?php foreach ($tradepaymentcurrency as $row) { ?>
								<div class="col-sm-2" style="padding-left:0px;"><?php echo $row['payment_currency'];?></div> 
							<?php } ?>
							</div>
						</div>
						<br>
						<br>
						<br>
						<br>
					</div>
				</div>
			</div>
			<div class="edit-div" id="trade_edit_div" style="display: none;">
					<div class="row">
						<div class="col-sm-offset-1 col-sm-11">
							<div style="padding-top: 50px;">&nbsp;</div>
							<div class="row info-row">
								<div class="col-sm-3 label-text"
									style="color: #F05539; font-size: 13px;">Trade & Export Details</div>
							</div>
							<div class="row info-row">
								<div class="col-sm-2">
									<div class="form-group">
										<div class="control-label label-text-form">Main Markets </div>
									</div>
								</div>
								<div class="col-sm-9">
									<div class="form-group">
										<div class="label-text-input">
											<input type="hidden" name="trad_id" value="<?php echo $tradeinfo[0]['id'];?>" />
											<?php foreach ($market as $row) { ?>
													<div class="col-sm-4" style="padding-left:0px;">
														<input class="markets"  onchange="removewordwild(this)"  id="north_america" value="<?php echo $row['id'];?>" name="market[]" 
														<?php $keymarket = in_array($row['id'],array_column($trademarket,'market_id'));
														if($keymarket!= false) { ?>
															checked
														<?php  }  ?> type="checkbox">
														 <?php echo $row['name']?>
													</div>
											<?php } ?>
											<div class="col-sm-4" style="padding-left:0px;">
												<input class="markets" id="worldwide" value="" name="market[]" type="checkbox">worldwide(to select all)
											</div>		
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
							</div>
							<div class="row info-row">
								<div class="col-sm-2">
									<div class="form-group">
										<div class="control-label label-text-form">Nearst Port/Ports</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<div class="label-text-input">
											<input type="text" name="port1" id="port1" class="form-control form-custom-input" value="<?php echo $tradeinfo[0]['part1'];?>" />
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
								<div class="col-sm-1">
									<div class="form-group">
										<div class="control-label label-text-form">And</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<div class="label-text-input">
											<input type="text" name="port2" id="port2" class="form-control form-custom-input" value="<?php echo $tradeinfo[0]['part2'];?>" />
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
								<div class="col-sm-1">
									<div class="form-group">
										<div class="control-label label-text-form">And</div>
									</div>
								</div>
								<div class="col-sm-2">
									<div class="form-group">
										<div class="label-text-input">
											<input type="text" name="port3" id="port3" class="form-control form-custom-input" value="<?php echo $tradeinfo[0]['part3'];?>" />
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
							</div>
							<div class="row info-row">
								<div class="col-sm-2">
									<div class="form-group">
										<div class="control-label label-text-form">Terms Of International Trade</div>
									</div>
								</div>
								<div class="col-sm-10">
									<div class="form-group">
										<div class="label-text-input">
										<?php foreach ($internationaltrad as $row) { ?>
											<div class="col-sm-2" style="padding-left:0px;">
												<input class="trade" id="fob" value="<?php echo $row['id'];?>" name="trade[]" type="checkbox"
												<?php $keyinternationaltrad = in_array($row['id'],array_column($tradeinternationaltrad,'international_trad_id'));
														if($keyinternationaltrad!= false) { ?>
															checked
															<?php  }  ?> > <?php echo $row['trade_name'];?>
											</div>
										<?php } ?>
											<div class="col-sm-2" style="padding-left:0px;">
												<input class="trade" id="allTrade" type="checkbox"> Select All
											</div>
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
							</div>
							<div class="row info-row">
								<div class="col-sm-2">
									<div class="form-group">
										<div class="control-label label-text-form">Terms Of Payment</div>
									</div>
								</div>
								<div class="col-sm-10">
									<div class="form-group">
										<div class="label-text-input">
										<?php foreach ($payment_terms as $row) { ?>
											<div class="col-sm-2" style="padding-left:0px;">
												<input class="payment" id="tt" value="<?php echo $row['id'];?>" name="payment[]" type="checkbox"
												<?php $keypayment = in_array($row['id'],array_column($tradepayment_terms,'payment_terms_id'));
													if($keypayment!= false) { ?>
															checked
															<?php  }  ?>> <?php echo $row['payment_terms'];?>
											</div>
											<?php } ?>
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
							</div>
							<div class="row info-row">
								<div class="col-sm-2">
									<div class="form-group">
										<div class="control-label label-text-form">Payment Curency</div>
									</div>
								</div>
								<div class="col-sm-10">
									<div class="form-group">
										<div class="label-text-input">
										<?php foreach ($paymentcurrency as $row) { ?>
											<div class="col-sm-2" style="padding-left:0px;">
												<input class="currency" id="usd" value="<?php echo $row['id'];?>" name="currency[]" type="checkbox"
												<?php $keypaymentcurrency = in_array($row['id'],array_column($tradepaymentcurrency,'payment_currency_id'));
												if($keypaymentcurrency!= false) { ?>
															checked
															<?php  }  ?>> <?php echo $row['payment_currency']; ?>
											</div>
											<?php } ?>
										</div>
										<div class="messageContainer"></div>
									</div>
								</div>
							</div>
						</div>
						<br>
						<br>
						<br> <br>
						<br>
						<br> <br>
						<br>
						<br>
					</div>
			</div>
		</div>
	</form>	
<script>
$(document).ready(function () {
    $("#worldwide").change(function () {  //"select all" change 
        var status = this.checked; // "select all" checked status
        $('.markets').each(function () { //iterate all listed checkbox items
            this.checked = status; //change ".checkbox" checked status
        });
    });

    $("#allTrade").change(function () {  //"select all" change 
        var status = this.checked; // "select all" checked status
        $('.trade').each(function () { //iterate all listed checkbox items
            this.checked = status; //change ".checkbox" checked status
        });
    });
});

function removewordwild(chkelement)
{
	if (chkelement.checked) {
		
	} else {
		document.getElementById("worldwide").checked = false;
	}
}
</script>
