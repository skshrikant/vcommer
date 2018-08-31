<?php 
if(!empty($newCommunity)) {
    $isNewCommunity= true;
	foreach( $newCommunity as $kk => $record ){
	    if(!$record['alert_viewed']) {
?>
    <div class="panel alert-popup communityAlert" id="new-alert-popup-<?php echo $record['user_id']; ?>">
	<div class="panel-heading">
		<div class="row">
			<div class="col-xs-3">
			<?php if ($record['profile_image'] == '') { ?>
                        <img src="<?php echo asset_url(); ?>images/ts/img0995.png" class="img-circle" style="width: 80px; height: 80px; border: 3px solid #00E8C7; position: absolute; left: -30px; top: -30px;">
                    <?php } else { ?>
                        <img src="<?php echo asset_url(); ?><?php echo isset($record['profile_image'])?$record['profile_image']:''; ?>" class="img-circle" style="width: 80px; height: 80px; border: 3px solid #00E8C7; position: absolute; left: -30px; top: -30px;">
                    <?php } ?>
			</div>
			<div class="col-xs-7"><p style="color: #FFFFFF; font-family: Impact; font-size: 20px; margin-bottom: 0;text-indent: 2px;">Added Alert By</p><span style="color: #FFFFFF; font-family: Arial; font-size: 13px;"><?php echo isset($record['name'])?$record['name']:''; ?><br><?php echo isset($record['user_category'])?$record['user_category']:''; ?>&nbsp; |&nbsp; <?php echo isset($record['country'])?$record['country']:''; ?> </span></div>
			<div class="col-xs-2"><a href="#" onclick="ShowObjectWithEffect('new-alert-popup-<?php echo $record['user_id']; ?>', 0, 'slidedown', 300, 'swing');closePopup('new-alert-popup-<?php echo $record['user_id']; ?>');return false;" style="position: relative; top: -20px; right: -20px;"><img src="<?php echo asset_url(); ?>images/close.png"  width="30" height="30"></a></div>
		</div>
	</div>
	<div class="panel-body">
		<div class="row" style="margin: 0;">
			<div class="col-xs-12" style="background: #fff; border-radius: 5px; height: 115px;">
				<div class="col-xs-12 text-center" style="margin-bottom: 20px; padding-top: 20px;"><span style="color: #2D2D2D; font-family: Arial; font-size: 12px;"><?php echo isset($record['name'])?$record['name']:''; ?>, invites you to join his community.?</span></div>
				<div class="col-xs-12 text-center"></div>
			</div>
			<div class="col-xs-12" style="padding: 15px 0">
				<a href="#" onclick="accept_community_request(<?php echo $record['id'];?>);" class="btn btn-block btn-danger" style="background: #00E8C7 !important;">ACCEPT</a></div>
			<div class="col-xs-12" style="padding: 0"><a target="_blank" href="<?php echo base_url(); ?>desksite/<?php echo $record['my_busi_id']; ?>" class="btn btn-block btn-danger" style="background: #00E8C7 !important;">VIEW HIS DESKSITE</a></div>
		</div>
	</div>
	</div>
<?php  } } }
if (!empty($newInquiry)) {

foreach($newInquiry as $kk=>$record) {

    if(!$record['alert_viewed']) {

 ?>
 <div class="panel alert-popup inquiryAlert" id="new-alert-popup-<?php echo $record['inqury_id']; ?>">
	<div class="panel-heading">
		<div class="row">
			<div class="col-xs-3">
				<?php if ($record['profile_image'] == '') { ?>
                        <img src="<?php echo asset_url(); ?>images/ts/img0995.png" class="img-circle" style="width: 80px; height: 80px; border: 3px solid #f59800; position: absolute; left: -30px; top: -30px;">
                    <?php } else { ?>
                        <img src="<?php echo asset_url(); ?><?php echo isset($record['profile_image'])?$record['profile_image']:''; ?>" class="img-circle" style="width: 80px; height: 80px; border: 3px solid #f59800; position: absolute; left: -30px; top: -30px;">
                    <?php } ?>
			</div>
			<div class="col-xs-7" style="padding-right: 14px;"><p style="color: #FFFFFF; font-family: Impact; font-size: 20px; margin-bottom: 0;text-indent: 2px;">Inquiry Alert By</p><span style="color: #FFFFFF; font-family: Arial; font-size: 13px;"><?php echo $record['name_prefix']."  ".$record['name'];?><br><?php echo $record['user_category'];?>&nbsp; |&nbsp; <?php echo $record['company_country'];?> </span></div>
			<div class="col-xs-2"><a href="#" onclick="ShowObjectWithEffect('new-alert-popup-<?php echo $record['inqury_id']; ?>', 0, 'slidedown', 300, 'swing');closePopup('new-alert-popup-<?php echo $record['inqury_id']; ?>');return false;" style="position: relative; top: -20px; right: -20px;"><img src="<?php echo asset_url(); ?>images/close.png"  width="30" height="30"></a></div>
		</div>
	</div>
	<div class="panel-body">
		<div class="row" style="margin: 0;">
			<div class="col-xs-12" style="background: #fff; border-radius: 5px; height: 115px;">
				<div class="col-xs-12 text-center" style=" padding-top: 14px;"><span style="color: #2D2D2D; font-family: Arial; font-size: 12px;"> <?php echo substr($record['inquiry_body'], 0, 137);?></span></div>
                <div class="col-xs-12 text-center">
                    <?php if(!empty($record['attachment1']) || (!empty($record['attachment2'])) || (!empty($record['attachment2'])) || (!empty($record['attachment2']))) { ?>
                    <div class="col-xs-4" style="margin: 0 auto;width: 100%;"><img width="50" height="50" src="<?php echo asset_url().'/images/desksite/attachment-icon.png'; ?>"></div>
                    <?php } ?>
                </div>
			</div>
            <?php
                    $myStationUrl = '';
                    switch($this->session->userdata('tsuser')['category']){
                        case 'Seller':
                            $myStationUrl = base_url().'mystation/home-alert/inquiry/'.$busi_id;
                            break;
                        case 'Shipper':
                            $myStationUrl = base_url().'shipper-mystation/home-alert/inquiry/'.$busi_id;
                            break;
                        case 'Buyer':
                            $myStationUrl = base_url().'buyer-mystation/home-alert/inquiry/'.$busi_id;
                            break;
                        }
                ?>
			<div style="padding:15px 0" class="col-xs-12"> <a class="btn btn-block btn-warning" href="<?php echo $myStationUrl; ?>">VIEW</a></div>
		</div>
	</div>
	</div>
	<?php } } }

if(!empty($newOffers)) {
    foreach($newOffers as $kk=>$record){
    if(!$record['alert_viewed']) {
?>
<div class="panel alert-popup offerAlert" id="new-alert-popup-<?php echo $record['offer_id']; ?>">
   <div class="panel-heading">
    <div class="row">
     <div class="col-xs-3">
		<?php if ($record['profile_image'] == '') { ?>
                <img src="<?php echo asset_url(); ?>images/ts/img0995.png" class="img-circle" style="width: 80px; height: 80px; border: 3px solid #f59800; position: absolute; left: -30px; top: -30px;">
            <?php } else { ?>
                <img src="<?php echo asset_url(); ?><?php echo isset($record['profile_image'])?$record['profile_image']:''; ?>" class="img-circle" style="width: 80px; height: 80px; border: 3px solid #f59800; position: absolute; left: -30px; top: -30px;">
            <?php } ?>
	</div>
     <div class="col-xs-7"><p style="color:#FFFFFF;font-family:Impact;font-size:20px; margin-bottom: 0;text-indent: 2px;">Offer Alert By</p><span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><?php echo $record['name_prefix']."  ".$record['name'];?><br><?php echo $record['user_category'];?>&nbsp; |&nbsp; <?php echo $record['company_country'];?></span></div>
     <div class="col-xs-2"><a onclick="ShowObjectWithEffect('new-alert-popup-<?php echo $record['offer_id']; ?>', 0, 'slidedown', 300, 'swing');closePopup('new-alert-popup-<?php echo $record['offer_id']; ?>');return false;" style="position:relative; top:-20px; right:-20px;" href="#"><img src="<?php echo asset_url(); ?>images/close.png"  width="30" height="30"></a></div>
    </div>
   </div>
   <div class="panel-body">
   <div style="margin:0;" class="row">
    <div style="background:#fff; border-radius:5px; height:150px;" class="col-xs-12">
     <div style="margin-bottom:20px; padding-top:20px;" class="col-xs-12 text-center"><span style="color:#2D2D2D;font-family:Arial;font-size:12px;"><?php echo substr($record['offer_body'], 0, 137);?></span></div>
     <div class="col-xs-12 text-center">
        <?php if(!empty($record['attachment1']) || (!empty($record['attachment2'])) || (!empty($record['attachment2'])) || (!empty($record['attachment2']))) { ?>
        <div class="col-xs-4" style="margin: 0 auto;width: 100%;"><img width="50" height="50" src="<?php echo asset_url().'/images/desksite/attachment-icon.png'; ?>"></div>
        <?php } ?>
     </div>
    </div>
       <?php
            $myStationUrl = '';
            switch($this->session->userdata('tsuser')['category']){
                case 'Seller':
                    $myStationUrl = base_url().'mystation/home-alert/offer/'.$busi_id;
                break;
                case 'Shipper':
                    $myStationUrl = base_url().'shipper-mystation/home-alert/offer/'.$busi_id;
                break;
                case 'Buyer':
                    $myStationUrl = base_url().'buyer-mystation/home-alert/offer/'.$busi_id;
                break;
            }
        ?>
   <div style="padding:15px 0" class="col-xs-12"> <a class="btn btn-block btn-warning" href="<?php echo $myStationUrl; ?>">VIEW</a></div>
   </div>
   </div>
   </div>
<?php  } } }