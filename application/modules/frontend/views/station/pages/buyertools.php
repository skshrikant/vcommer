<link rel="stylesheet" href="<?php echo asset_url();?>css/iosCheckbox.css">
<style>
.skyblue {
	width:100%;
	text-align:center;
}
.skyblue th {
	background-color: #E0FFFF;
    border: 1px #DCDCDC solid;
    padding: 5px 10px;
    text-align: center;
}
.skyblue td {
	background-color: #FFFFFF;
    border: 1px #DCDCDC solid;
    padding: 5px 10px;
    text-align: center;
}
.page-active {
	color:#2688E4;
	text-decoration:underline;
}
.page-inactive {
	color:#3C3C3C;
	text-decoration:none;
}
.mytoolsts-div {
	min-height:500px;
	overflow:scroll;
}
.ios-ui-select {
 	margin-top: 0px;
}
.ios-ui-select.checked {
    -webkit-box-shadow: inset 0 0 0 36px #00BFFF;
    box-shadow: inset 0 0 0 36px #00BFFF;
    padding: 10px 0px;
    margin-top: 0px;
}
</style>
<div class="row editaccount_outer">
	<div class="col-md-2 account-left-nav"> 
		<div class="col-md-12" style="padding: 9px;">
			<div class="account-image">
				<a href="javascript:false;"> 
					<img class="hover" alt="" class="img-circle" src="<?php echo asset_url();?>images/configure-2.png" style="width:45px;">
				</a>
			</div>
			<div style="color:#FFFFFF;font-family:Arial;font-size:13px;text-align: center;padding-bottom: 15px;">Tools</div>
		</div>
		<div class="col-md-12" style="padding: 9px;">
			<!-- div class="" style="text-align: center;padding-top: 400px;">
			<span style="color: #FFFFFF; font-family: Arial; font-size: 11px;">TRADE</span><br>
				<span style="color: #FA5C43; font-family: Impact; font-size: 20px; letter-spacing: 0.07px;">STATION</span><br>
				<span style="color: #FFFFFF; font-family: Arial; font-size: 8px;">Copyrights
							| TRDSTATION 2013-2016@All Rights Reserved</span>
			</div-->
		</div>
	</div>
	<div class="col-md-10 account-content-area">
		<div class="tab-content main-tab-content">
			<div class="panel panel-default tab-pane fade in active" id="maintoolscreen" style="height:758px;">
				<div class="panel-heading custom-panel-heading mn-heading" style="text-align:left;padding-top: 5px !important;border-bottom: 0px;background-color:#fff !important;">
					<br>
					<a href="javascript:showPerformance();" id="busi_performance" class="btn btn-sm btn-tool btn-tool-active" style="margin-left:20px;">Control Panel</a>
					<a href="javascript:showStorage();" id="busi_storage" class="btn btn-sm btn-tool btn-tool">Storage</a>
					<a href="javascript:showBackup();" id="busi_backup" class="btn btn-sm btn-tool btn-tool">Backup</a>
					<span class="pull-right-close" style="padding-top: 0px;padding-right: 0px;margin-top: -23px;"><a href="javascript:ShowObjectWithEffect('Layer528', 0, 'dropup', 500, 'easeInBounce');ShowObjectWithEffect('Layer1', 1, 'dropdown', 500, 'easeInBounce');" class="btn-custom-close" style="padding:6px 12px;font-size:22px;">x</a></span>
				</div>
				<div class="panel-inner">
					<div id="myperformance" class="mytool-div">
						<div class="row" style="margin:0px;">
							<div class="col-sm-2">
							
							</div>
							<div class="col-sm-8">
								<div class="row">
									<span style="color:#2D2D2D;font-family:Calibri;font-size:13px;">Experience a high level of information security, privacy and control your activities in the Trade Station platform..<br>Your activities features has been turned “<strong>ON</strong>” as a default value ( <strong>Recommended </strong>), to reflect your status as an&nbsp; “ <strong>Active</strong>”, so as you will be able to send posts, requests, ask for quotes, add members to your community, chat, like, comments and much more..<br></span>
								</div>
								<br><br><br>
								<div class="row">
									<div class="col-sm-2"></div>
									<div class="col-sm-8">
										<div class="row">
											<div id="Layer8" class="col-sm-9" style="background-color: #F5F5F5;width:330px;height:38px;z-index:1703;">
												<div id="wb_Image4" style="position:absolute;left:10px;top:4px;width:31px;height:31px;z-index:1686;">
													<img src="<?php echo asset_url();?>images/emesene.png" id="Image4" alt="">
												</div>
												<div id="wb_Text1467" style="position:absolute;left:60px;top:12px;width:126px;height:15px;z-index:1687;text-align:left;">
													<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>Chat and chat Alerts</strong></span>
												</div>
											</div>
											<div class="col-sm-3">
												<label class="switch1">
												  	<input type="checkbox" id="chat_alert" <?php if($busi_info[0]['accept_chat'] == 1) { ?>checked<?php } ?> class="ios">
												</label>
											</div>
											<div class="col-sm-11 row" style="margin-top:10px;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Live chat is one of the ways which allows members to comunicate with each other in real-time in the Trade Station. It comes with the same features of the social chat apps such as ( Block, Allow, Delete, Send files and much more)..<br>Turning this feature "OFF" will not allow members to chat with you nor allow you to chat with other member, till you Turn it ON again.</span>
											</div>
										</div>
										<br>
										<div class="row">
											<div id="Layer8" class="col-sm-9" style="background-color: #F5F5F5;width:330px;height:38px;z-index:1703;">
												<div id="wb_Image4" style="position:absolute;left:10px;top:4px;width:31px;height:31px;z-index:1686;">
													<img src="<?php echo asset_url();?>images/SEND-FILE.png" id="Image4" alt="">
												</div>
												<div id="wb_Text1467" style="position:absolute;left:60px;top:12px;width:200px;height:15px;z-index:1687;text-align:left;">
													<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>Receive Elite Manufactures Offers</strong></span>
												</div>
											</div>
											<div class="col-sm-3">
												<label class="switch2">
												  	<input type="checkbox" id="accept_offer" <?php if($busi_info[0]['accept_offer']) { ?>checked<?php } ?> class="ios">
												</label>
											</div>
											<div class="col-sm-11 row" style="margin-top:10px;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Once you turn this function "OFF", you will not be able to receive the new arrivals, updates, stock and products opportuinities offered by the Elite members.</span>
											</div>
										</div>
										<br>
										<div class="row">
											<div id="Layer8" class="col-sm-9" style="background-color: #F5F5F5;width:330px;height:38px;z-index:1703;">
												<div id="wb_Image4" style="position:absolute;left:10px;top:4px;width:31px;height:31px;z-index:1686;">
													<img src="<?php echo asset_url();?>images/community.png" id="Image4" alt="">
												</div>
												<div id="wb_Text1467" style="position:absolute;left:60px;top:12px;width:240px;height:15px;z-index:1687;text-align:left;">
													<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>Add to Community ( Only Elite Members)</strong></span>
												</div>
											</div>
											<div class="col-sm-3">
												<label class="switch3">
												  	<input type="checkbox" id="addto_community" <?php if($busi_info[0]['accept_community']) { ?>checked<?php } ?> class="ios">
												</label>
											</div>
											<div class="col-sm-11 row" style="margin-top:10px;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Community is the most important part of the Trade Station platform, which is only allowed for the Elite members, to establish their own business platform, turning this feature OFF will not allow other manufactures to add you and also you will not be able to add other member.</span>
											</div>
										</div>
										<br>
										<div class="row">
											<div id="Layer8" class="col-sm-9" style="background-color: #F5F5F5;width:330px;height:38px;z-index:1703;">
												<div id="wb_Image4" style="position:absolute;left:10px;top:4px;width:32px;height:24px;z-index:1686;padding-top:5px;">
													<img src="<?php echo asset_url();?>images/comments.png" id="Image4" alt="">
												</div>
												<div id="wb_Text1467" style="position:absolute;left:60px;top:12px;width:200px;height:15px;z-index:1687;text-align:left;">
													<span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><strong>Members Contact Request</strong></span>
												</div>
											</div>
											<div class="col-sm-3">
												<label class="switch4">
												  	<input type="checkbox" id="accept_email" <?php if($busi_info[0]['accept_email']) { ?>checked<?php } ?> class="ios">
												</label>
											</div>
											<div class="col-sm-11 row" style="margin-top:10px;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:11px;">Turning this feature "OFF", will prevent mamber to contact you (send you emails)..</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="mystorage" style="display:none;overflow-y:hidden;height:758px;" class="mytool-div">
						<div class="row" style="margin:0px;">
							<div class="col-sm-7">
								<div class="text-center"><span style="color:#2D2D2D;font-family:Arial;font-size:13px;"><strong>USAGE CHART</strong></span></div>
								<div class="text-center" id="pie-chart" style="height:300px;width:300px;margin: auto auto;">
									<canvas id="myChart" width="300" height="300"></canvas>
								</div>
								<br><br>
								<div class="row">
									<div class="col-sm-4 text-center">
										<span style="color:#2D2D2D;font-family:Arial;font-size:13px;"><strong>Community Usage</strong></span>
									</div>
									<div class="col-sm-4 text-center">
										<span style="color:#2D2D2D;font-family:Arial;font-size:13px;"><strong>Offer Usage</strong></span>
									</div>
									<div class="col-sm-4 text-center">
										<span style="color:#2D2D2D;font-family:Arial;font-size:13px;"><strong>Inquiries Usage</strong></span>
									</div>
									<div class="col-sm-4" id="community_usage" style="height:130px;">
										<div style="width:130px;height:130px;margin:auto auto;">
											<canvas id="communityChart" width="130" height="130"></canvas>
										</div>
									</div>
									<div class="col-sm-4" id="offers_usage" style="height:130px;">
										<div style="width:130px;height:130px;margin:auto auto;">
											<canvas id="offersChart" width="130" height="130"></canvas>
										</div>
									</div>
									<div class="col-sm-4" id="inquiry_usage" style="height:130px;">
										<div style="width:130px;height:130px;margin:auto auto;">
											<canvas id="inquiryChart" width="130" height="130"></canvas>
										</div>
									</div>
									<div class="col-sm-4 text-left">
										<div style="margin-left:25px;">
											<label id="Layer553" style="width:15px;height:15px;background-color: #E7241A;vertical-align: middle;">
											</label>
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Used</span>
											<span style="color:#E7241A;font-family:Arial;font-size:20px;"><strong><?php echo $community_storage;?> </strong></span>
										</div>
										<div style="margin-left:25px;">
											<label id="Layer553" style="width:15px;height:15px;background-color: #292929;vertical-align: middle;">
											</label>
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Free Space <?php echo ($comm_plan - $community_storage)?>MB</span>
										</div>
									</div>
									<div class="col-sm-4 text-left">
										<div style="margin-left:25px;">
											<label id="Layer553" style="width:15px;height:15px;background-color: #af0f07;vertical-align: middle;">
											</label>
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Used</span>
											<span style="color:#E7241A;font-family:Arial;font-size:20px;"><strong><?php echo $offer_storage;?> </strong></span>
										</div>
										<div style="margin-left:25px;">
											<label id="Layer553" style="width:15px;height:15px;background-color: #292929;vertical-align: middle;">
											</label>
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Free Space <?php echo ($ois_plan - $offer_storage)?>MB</span>
										</div>
									</div>
									<div class="col-sm-4 text-left">
										<div style="margin-left:25px;">
											<label id="Layer553" style="width:15px;height:15px;background-color: #890d06;vertical-align: middle;">
											</label>
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Used</span>
											<span style="color:#E7241A;font-family:Arial;font-size:20px;"><strong><?php echo $inquiry_storage;?> </strong></span>
										</div>
										<div style="margin-left:25px;">
											<label id="Layer553" style="width:15px;height:15px;background-color: #292929;vertical-align: middle;">
											</label>
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Free Space <?php echo ($inq_plan - $inquiry_storage)?>MB</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-5">
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer537" style="width:200px;height:22px;z-index:3423;">
											<div id="wb_Text1481" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3403;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Your total STORAGE BOX</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1483" style="width:65px;height:24px;z-index:3420;text-align:left;">
											<span style="color:#F05539;font-family:Arial;font-size:20px;"><strong><?php echo $storage_plan;?> </strong></span><span style="color:#F05539;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="wb_Text1484" style="margin-left:40px;width:165px;height:32px;z-index:3421;text-align:left;">
											<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Your total USAGE</span><span style="color:#2D2D2D;font-family:Calibri;font-size:13px;"><br></span>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1482" style="width:65px;height:40px;z-index:3419;text-align:left;">
											<span style="color:#2D2D2D;font-family:Arial;font-size:20px;"><strong><?php echo $total_storage;?> </strong></span><span style="color:#2D2D2D;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer539" style="width:200px;height:22px;z-index:3424;">
											<div id="Layer540" style="width:21px;height:22px;z-index:3404;">
											</div>
											<div id="wb_Text1486" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3405;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">All Desksite Usage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1488" style="width:94px;height:24px;z-index:3426;text-align:left;">
											<span style="color:#E76C1A;font-family:Arial;font-size:20px;"><strong><?php echo $product_storage;?> </strong></span><span style="color:#E76C1A;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer541" style="width:200px;height:22px;z-index:3427;">
											<div id="Layer542" style="width:21px;height:22px;z-index:3406;">
											</div>
											<div id="wb_Text1489" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3407;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Community Posts Usage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1490" style="width:65px;height:24px;z-index:3428;text-align:left;">
											<span style="color:#E7241A;font-family:Arial;font-size:20px;"><strong><?php echo $community_storage;?> </strong></span><span style="color:#E7241A;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer543" style="width:200px;height:22px;z-index:3430;">
											<div id="Layer544" style="width:21px;height:22px;z-index:3408;">
											</div>
											<div id="wb_Text1492" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3409;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Offers Usage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1491" style="width:94px;height:24px;z-index:3429;text-align:left;">
											<span style="color:#AF0F07;font-family:Arial;font-size:20px;"><strong><?php echo $offer_storage;?> </strong></span><span style="color:#AF0F07;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer545" style="width:200px;height:22px;z-index:3431;">
											<div id="Layer546" style="width:21px;height:22px;z-index:3410;">
											</div>
											<div id="wb_Text1493" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3411;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Inquiries Usage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1494" style="width:65px;height:24px;z-index:3432;text-align:left;">
											<span style="color:#890D06;font-family:Arial;font-size:20px;"><strong><?php echo $inquiry_storage;?> </strong></span><span style="color:#890D06;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer549" style="width:200px;height:22px;z-index:3436;">
											<div id="Layer550" style="width:21px;height:22px;z-index:3414;">
											</div>
											<div id="wb_Text1498" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3415;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">B. Station Posts Usage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1497" style="width:65px;height:24px;z-index:3435;text-align:left;">
											<span style="color:#40BFB5;font-family:Arial;font-size:20px;"><strong><?php echo $bstation_storage;?> </strong></span><span style="color:#40BFB5;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
								<div class="row" style="padding-bottom:5px;">
									<div class="col-sm-6">
										<div id="Layer551" style="width:200px;height:22px;z-index:3437;">
											<div id="Layer552" style="width:21px;height:22px;z-index:3416;">
											</div>
											<div id="wb_Text1499" style="position:absolute;left:40px;top:3px;width:159px;height:16px;z-index:3417;text-align:left;">
												<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Stock M. Posts Usage</span>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div id="wb_Text1500" style="width:65px;height:24px;z-index:3438;text-align:left;">
											<span style="color:#1A9F75;font-family:Arial;font-size:20px;"><strong><?php echo $stock_storage;?> </strong></span><span style="color:#1A9F75;font-family:Arial;font-size:13px;">MB</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<br><br><br><br><br><br>
					</div>
					<div id="mybackup" style="display:none;overflow-y:hidden;height:758px;" class="mytool-div">
						<div style="height: 626px; overflow: auto; padding: 0px; display: block;border: 0px;" id="jquerytabs1-page-2" aria-labelledby="ui-id-3" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
						<div id="wb_Text1455" style="position:absolute;left:195px;top:142px;width:675px;height:162px;z-index:3460;text-align:left;">
						<span style="color:#2D2D2D;font-family:Arial;font-size:13px;">Enjoy high level of security, save your the whole contents of your website ( to your PC) in one compressed file and restore it by one click to recover any damaged of lost data.<br><br><strong>When I should backup my website..?<br></strong>You only should backup your website, once you finish adding all of your products, and keep doing it when you make some changes or adding new contents.<br><br><strong>When i should restore my website from backup?<br></strong>Never do restore, unless something serious happened in your website such as losing data..etc, in this case be sure that your will going to restore a recent Backup file.<br></span></div>
						<div id="wb_Shape340" style="position:absolute;left:398px;top:389px;width:133px;height:33px;z-index:3461;">
						<a href="" onclick="ShowObject('jQueryTabs1', 1);return false;"><div id="Shape340"><div id="Shape340_text"><span style="color:#FFFFFF;font-family:'MS Shell Dlg';font-size:11px;">BACKUP</span></div></div></a></div>
						<div id="wb_Shape361" style="position:absolute;left:536px;top:389px;width:133px;height:33px;z-index:3462;">
						<a href="" onclick="ShowObject('jQueryTabs1', 1);return false;"><div id="Shape361"><div id="Shape361_text"><span style="color:#FFFFFF;font-family:'MS Shell Dlg';font-size:11px;">RESTORE</span></div></div></a></div>
						<div id="wb_Text1513" style="position:absolute;left:196px;top:312px;width:311px;height:30px;z-index:3463;text-align:left;">
						<span style="color:#808080;font-family:Arial;font-size:12px;">Note:<br>Each new backup file will overwrite the previous one.</span></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="buyerToolModal" class="modal fade" role="dialog" style="z-index: 13000;">
	<div class="modal-dialog" style="width: 400px;">
		<div class="modal-content"
			style="border-radius: 0px; margin-top: 25%;">
			<div class="modal-body">
				<div class="row" style="padding-top: 10px;">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						<div style="text-align: center;">
							<span style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;">WARNING</span>
						</div>
						<input type="hidden" id="optiontype" value=""/>
						<br>
						<br>
						<div style="text-align: center;" id="wmsg">
							Turning two features "OFF", will set your status as "Inactive"
						</div>
					</div>
					<div class="col-sm-2"></div>
				</div>
				<br>
				<div class="row text-center">
					<a href="javascript:changeStatus();" class="btn btn-sm btn-danger-custom" >Continue</a>
					<a href="javascript:closeBTModal();" class="btn btn-sm btn-danger-custom" >Cancel</a>
				</div>
				<br>
				<br>
			</div>
		</div>
	</div>
</div>
<div id="buyerTool3Modal" class="modal fade" role="dialog" style="z-index: 13000;">
	<div class="modal-dialog" style="width: 400px;">
		<div class="modal-content"
			style="border-radius: 0px; margin-top: 25%;">
			<div class="modal-body">
				<div class="row" style="padding-top: 10px;">
					<div class="col-sm-2"></div>
					<div class="col-sm-8">
						<div style="text-align: center;">
							<span
								style="color: #F05539; font-family: 'Arial Black'; font-size: 16px;">WARNING</span>
						</div>
						<br>
						<br>
						<div style="text-align: center;">
							You only can turn three features OFF
						</div>
					</div>
					<div class="col-sm-2"></div>
				</div>
				<br>
				<div class="row text-center">
					<a href="" class="btn btn-sm btn-danger-custom"
						data-dismiss="modal" style="width: 100px;">OK</a>
				</div>
				<br>
				<br>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo asset_url();?>js/iosCheckbox.js"></script>
<script src="<?php echo asset_url();?>js/htmlchart.js"></script>
<script>
$(".ios").iosCheckbox();
function showPerformance() {
	$(".mytool-div").hide();
	$(".mn-heading a").removeClass("btn-tool-active");
	$("#myperformance").show();
	$("#busi_performance").addClass("btn-tool-active");
}
function showStorage() {
	$(".mytool-div").hide();
	$(".mn-heading a").removeClass("btn-tool-active");
	$("#mystorage").show();
	$("#busi_storage").addClass("btn-tool-active");
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
	    type: 'pie',
	    data: {
	        labels: ["Free Space","All Desksite Storage", "Community Posts Storage", "Offers Storage", "Inquiries Storage", "B. Station Posts Storage","Stock M. Posts Storage"],
	        datasets: [{
	            label: '# MB',
	            data: [<?php echo round(($storage_plan-$total_storage),2);?>, <?php echo $product_storage;?>, <?php echo $community_storage;?>, <?php echo $offer_storage;?>, <?php echo $inquiry_storage;?>, <?php echo $bstation_storage;?>, <?php echo $stock_storage;?>],
	            backgroundColor: [
				    '#FF6347',
	                '#E76C1A',
	                '#E7241A',
	                '#AF0F07',
	                '#2688E4',
	                '#40BFB5',
	                '#1A9F75'
	            ],
	            borderWidth: 1
	        }]
	    },
		options: {
	        legend: {
	            display: false,
	        }
		}
	});

	var cctx = document.getElementById("communityChart").getContext('2d');
	var communityChart = new Chart(cctx, {
	    type: 'pie',
	    data: {
	        labels: ["Used", "Free Space"],
	        datasets: [{
	            //label: '# MB',
	            data: [<?php echo $community_storage;?>, <?php echo ($comm_plan - $community_storage)?>],
	            backgroundColor: [
	                '#e7241a',
	                '#292929'
	            ],
	            borderWidth: 1
	        }]
	    },
		options: {
	        legend: {
	            display: false,
	        }
		}
	});

	var octx = document.getElementById("offersChart").getContext('2d');
	var offersChart = new Chart(octx, {
	    type: 'pie',
	    data: {
	        labels: ["Used", "Free Space"],
	        datasets: [{
	            //label: '# MB',
	            data: [<?php echo $offer_storage;?>, <?php echo ($ois_plan - $offer_storage)?>],
	            backgroundColor: [
	                '#af0f07',
	                '#292929'
	            ],
	            borderWidth: 1
	        }]
	    },
		options: {
	        legend: {
	            display: false,
	        }
		}
	});

	var ictx = document.getElementById("inquiryChart").getContext('2d');
	var inquiryChart = new Chart(ictx, {
	    type: 'pie',
	    data: {
	        labels: ["Used", "Free Space"],
	        datasets: [{
	            label: '',
	            data: [<?php echo $inquiry_storage;?>, <?php echo ($inq_plan - $inquiry_storage)?>],
	            backgroundColor: [
	                '#890d06',
	                '#292929'
	            ],
	            borderWidth: 1
	        }]
	    },
		options: {
	        legend: {
	            display: false,
	        }
		}
	});
}
function showBackup() {
	$(".mytool-div").hide();
	$(".mn-heading a").removeClass("btn-tool-active");
	$("#mybackup").show();
	$("#busi_backup").addClass("btn-tool-active");
}

$("#accept_email").click(function() {
	var ios_checkbox = $(".switch4 div.ios-ui-select");
	if($(".checked").length == 2 && !ios_checkbox.hasClass("checked")) {
		$("#optiontype").val('switch4');
		$("#buyerToolModal").modal({show:true,backdrop: 'static',keyboard: false});
	} else if($(".checked").length == 0) {
		$("#buyerTool3Modal").modal({show:true,backdrop: 'static',keyboard: false});
		$(".switch4 div.ios-ui-select").addClass('checked');
	} else {
		var accept_email = 0;
		if (ios_checkbox.hasClass("checked")){
			accept_email = 1;
		}
			
		$.post(base_url+"mystation/tools/aceeptcontrol",{accept_email: accept_email},function(data){
			//
		},'json');
	}
});
$("#accept_offer").click(function() {
	var ios_checkbox = $(".switch2 div.ios-ui-select");
	if($(".checked").length == 2 && !ios_checkbox.hasClass("checked")) {
		$("#optiontype").val('switch2');
		$("#buyerToolModal").modal({show:true,backdrop: 'static',keyboard: false});
	} else if($(".checked").length == 0) {
		$("#buyerTool3Modal").modal({show:true,backdrop: 'static',keyboard: false});
		$(".switch2 div.ios-ui-select").addClass('checked');
	} else {
		var accept_offer = 0;
		if (ios_checkbox.hasClass("checked")){
			accept_offer = 1;
		}
		$.post(base_url+"mystation/tools/aceeptcontrol",{accept_offer: accept_offer},function(data){
			//
		},'json');
	}
});
$("#addto_community").click(function() {
	var ios_checkbox = $(".switch3 div.ios-ui-select");
	if($(".checked").length == 2 && !ios_checkbox.hasClass("checked")) {
		$("#optiontype").val('switch3');
		$("#buyerToolModal").modal({show:true,backdrop: 'static',keyboard: false});
	} else if($(".checked").length == 0) {
		$("#buyerTool3Modal").modal({show:true,backdrop: 'static',keyboard: false});
		$(".switch3 div.ios-ui-select").addClass('checked');
	} else {
		var accept_community = 0;
		if (ios_checkbox.hasClass("checked")){
			accept_community = 1;
		}
		$.post(base_url+"mystation/tools/aceeptcontrol",{accept_community: accept_community},function(data){
			//
		},'json');
	}
});
$("#chat_alert").click(function() {
	var ios_checkbox = $(".switch1 div.ios-ui-select");
	if($(".checked").length == 2 && !ios_checkbox.hasClass("checked")) {
		$("#optiontype").val('switch1');
		$("#buyerToolModal").modal({show:true,backdrop: 'static',keyboard: false});
	} else if($(".checked").length == 0) {
		$("#buyerTool3Modal").modal({show:true,backdrop: 'static',keyboard: false});
		$(".switch1 div.ios-ui-select").addClass('checked');
	} else {
		var accept_chat = 0;
		if (ios_checkbox.hasClass("checked")){
			accept_chat = 1;
		}
		$.post(base_url+"mystation/tools/aceeptcontrol",{accept_chat: accept_chat},function(data){
			//
		},'json');
	}
});

function closeBTModal() {
	var classname = $("#optiontype").val();
	$("."+classname+" div.ios-ui-select").addClass('checked');
	$("#buyerToolModal").modal('hide');
}

function changeStatus() {
	var classname = $("#optiontype").val();
	if(classname == 'switch1') {
		$.post(base_url+"mystation/tools/aceeptcontrol",{accept_chat: 0},function(data){
			$("#buyerToolModal").modal('hide');
		},'json');
	} else if(classname == 'switch2') {
		$.post(base_url+"mystation/tools/aceeptcontrol",{accept_offer: 0},function(data){
			$("#buyerToolModal").modal('hide');
		},'json');
	} else if(classname == 'switch3') {
		$.post(base_url+"mystation/tools/aceeptcontrol",{accept_community: 0},function(data){
			$("#buyerToolModal").modal('hide');
		},'json');
	} else if(classname == 'switch4') {
		$.post(base_url+"mystation/tools/aceeptcontrol",{accept_email: 0},function(data){
			$("#buyerToolModal").modal('hide');
		},'json');
	}
}

</script>
