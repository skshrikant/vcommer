<?php
foreach($SellerBox as $seller) {?>
	<div id="Layer136">
                <div id="Layer136_Container" class="layer2">
                    <div id="Layer264" class="style60">
                        <div id="wb_Text192" class="style61">
                            <span class="fontnew1"><strong>Main Products</strong></span></div>
                        <div id="wb_Text193" class="style62">
                            <span><?php echo substr($seller['main_product'], 0, 100); ?><br> </span></div>
                    </div>
                    <div id="wb_Image152" class="style64">
                        <a href="#" onclick="ShowObject('Layer_sellers', 0);return false;"><img src="<?php echo asset_url();?>images/close.png" id="Image152" alt=""></a>
                    </div>
                    <div id="RollOver18" class="style65">
                        <a href="javascript:addToMyFavourite(<?php echo $seller['busi_id'];?>,1);">
                                    <img class="hover" alt="" title="Add to Favourite" src="<?php echo asset_url();?>images/favorite_chery.gif">
                                    <span><img alt="" title="Add to view later" src="<?php echo asset_url();?>images/addtofav.png"></span>
                                </a>
                    </div>
                    <div id="RollOver19" class="style66">
                        <a href="javascript:addToCommunity(<?php echo $seller['busi_id'];?>,1);">
                            <img class="hover" alt="" title="Add to my community" src="<?php echo asset_url();?>images/addcommunity_button2.png">
                            <span><img alt="" title="Add to my community" src="<?php echo asset_url();?>images/add2comwhite.png"></span>
                        </a>
                    </div>
                    <div id="wb_Text194" class="style67">
                        <span class="style68"><strong><?php echo $seller['company_name']; ?></strong></span></div>
                    <div id="wb_Text200" class="style69" style="width: 200px;">
                        <span class="style70"><strong><?php echo $seller['contact_person']; ?></strong></span></div>
                    <div id="wb_Image153" class="style71">
                        <?php if($seller['plan_id'] > '1' && $seller['plan_id'] > '1' && $seller['picture'] != "" && !empty($seller['picture'])){?><img src="<?php echo asset_url() . $seller['picture']; ?>" id="Image1"><?php }?>
                        </div>
                    <div id="Layer265" class="style72">
                        <div id="wb_Text201" class="style767" style="top:30px;left:5px;">
                            <span class="style77"><?php echo $seller['sub_category'];?>   </span>
                        </div>
                        <div id="wb_Image10" class="style737" style="left: 180px;height: 25px;width: 25px;">
                                <?php if(!empty($seller['community_id'])){?><img src="<?php echo asset_url(); ?>images/ts/community.png"  id="Image1" >
                                <?php } else {?>
                                <img src="<?php echo asset_url(); ?>images/ts/community.png" id="Image1" style="opacity :0.15" > <?php }?>
                        </div>
                        <div id="wb_Image154" class="style737" style="left:210px;height: 25px;width: 25px;">
                            <?php if($seller['plan_id'] > 1 && $seller['is_logo_verified'] > 1){?><img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" > <?php } else { ?>
                                    <img src="<?php echo asset_url(); ?>images/ts/trusted.png" id="Image1" style="opacity :0.15" >
                                    <?php }?>
                         </div>
                        <div id="wb_Image158" class="style737" style="left: 235px;width:34px;height:26px;">
                       	 <?php if($seller['plan_id'] > 1 && $seller['gaurantee_period'] !=''){ ?><img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1"> <?php } else {?>
                                    <img src="<?php echo asset_url(); ?>images/ts/guarantee.png" id="Image1" style="opacity :0.15;" >
                                    <?php }?>
                        </div>
                        <div id="wb_Image158" class="style737" style="left: 270px;height: 25px;width: 25px;">
                            <?php if($seller['plan_id'] > '1' && $seller['plan_id'] > '1'){?><img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1"><?php } else {?>
                                    <img src="<?php echo asset_url(); ?>images/ts/member-logo.png" id="Image1" style="opacity :0.15;">
                                    <?php }?>
                        </div>
                        
                    </div>
                    <div id="Layer266" class="style78">
                        <div id="wb_Image159" class="style79">
                            <img src="<?php echo asset_url().''.$seller['company_info_img1'];?>" id="Image159" alt="">
                        </div>
                        <div id="wb_Text247" class="style80" style="width:205px;left:100px;text-align:left;">
                            <span class="style81"><strong><?php echo $seller['company_country'];?> | <?php echo $seller['company_province'];?></strong></span></div>
                        <div id="wb_Text248" class="style82">
                            &nbsp;</div>
                        <div id="wb_Image160" class="style83" style="left:40px;">
                            <img src="<?php echo asset_url();?>images/flags/<?php echo $seller['flag'];?>" id="Image160" alt=""></div>
                    </div>
                    <div id="RollOver20" class="style84">
                        <a onclick="chat_with(<?php echo $seller['user_id'];?>,<?php echo $seller['accept_chat'];?>);">
                                    <img class="hover" alt="" title="Chat" src="<?php echo asset_url();?>images/chat_button2.png">
                                    <span><img alt="" title="Chat" src="<?php echo asset_url();?>images/chatwhite.png"></span>
                                </a>
                    </div>
                    <div id="RollOver14" class="style85">
                        <a href="<?php echo base_url();?>desksite/<?php echo $seller['busi_id'];?>" target="_blank" title="Desksite">
                                    <img class="hover" alt="" src="<?php echo asset_url();?>images/desksite-hover2.png">
                                    <span><img alt="" src="<?php echo asset_url();?>images/desksite-default.png"></span>
                                </a>
                    </div>
                </div>
            </div>
<?php }?>