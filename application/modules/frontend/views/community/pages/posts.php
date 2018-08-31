<?php 
	if (count ( $allposts ) > 0 && $allposts [0] ['id'] != '') {
	foreach ( $allposts as $key=>$allpost ) {
?>
	<div id="wb_Text227" style="text-align:center;height:10px;z-index:200;padding:5px;">
		<span style="color:#303030;font-family:Arial;font-size:11px;text-align:center;"><?php if(date('Y-m-d',strtotime($allpost['create'])) == date('Y-m-d')){ ?>Today<?php } else { echo date('d M Y',strtotime($allpost['create'])); }?>&nbsp; | <?php echo date('H:i',strtotime($allpost['create']));?></span>
	</div>
	<div class="boxsize row" style="margin-top:21px;margin-right:19px;cursor:pointer;" onclick="openPostDetails(<?php echo $allpost['postid'];?>);">
		<div class="col-md-2 col-sm-2 inline text-center">
			<a href="#" id="showmenulist<?php echo $allpost['postid'];?>" class="showmenulist" data-id="<?php echo $allpost['postid'];?>"> 
				<hr id="Line19" style="position:absolute;left:30px;top:35px;width:5px;height:4px;z-index:227;">
				<hr id="Line18" style="position:absolute;left:30px;top:25px;width:5px;height:4px;z-index:228;">
				<hr id="Line20" style="position:absolute;left:30px;top:45px;width:5px;height:4px;z-index:229;">
				<img src="<?php echo asset_url(); ?>images/activecover.png" alt="img35" style="width:32px;height:38px;">
			</a> 
			<img src="<?php echo asset_url(); ?><?php echo $allpost['contact_profile_image'];?>" id="Shape25" alt="" style="width:74px;height:76px;border-radius:50%;border: 2px solid #FF6347;">
			<!-- chat and other all -->
			<div id="Layer47-<?php echo $allpost['postid'];?>" class="chat1" onmouseleave="ShowObjectWithEffect('Layer47-<?php echo $allpost['postid'];?>', 0, 'slideup', 500);return false;" style="display: none;text-align:center;width:140px;top:80px;">
				<a href="#" class="afont chatcomet" data-id="<?php echo $allpost['busi_id'];?>">Chat</a>
				<a href="#" class="afont viewpst" data-id="<?php echo $allpost['busi_id'];?>" data-busid="<?php echo $busi_id;?>">View Posts</a> 
				<a href="#" class="afont viewdsksite" data-id="<?php echo $allpost['busi_id'];?>" data-catid="<?php echo $allpost['user_category_id'];?>">DeskSite</a> 
			</div>
			<!-- chat end -->
		</div>
		<div class="col-md-6 col-sm-6" style="padding-left:0px;">
			<div class="row" style="margin:0px;">
				<div class="col-sm-7" style="padding-left:0px;">
					<p class="font6" style="font-size:14px;"><?php echo $allpost['company_name'];?> </p>
					<p class="font7">Presented by &nbsp;&nbsp;<span class="style5 font8"><?php echo $allpost['prefix'].' '.$allpost['username'];?> </span></p>
					<span class="s1" style="font-size:15px;"><strong><?php echo $allpost['title'];?></strong></span><br>
				</div>
				<?php if(!empty($allpost['share_cname'])) { ?>
					<div class="col-sm-5" style="padding:0px;">
						<div class="col-sm-3" style="padding:0px;">
										<img src="<?php echo asset_url(); ?><?php echo $allpost['share_profile_image'];?>" id="Shape25" alt="" style="width:41px;border-radius:50%;border: 1px solid #FF6347;">
						</div>
						<div style="color:#000000;font-family:Arial;font-size:13px;padding-left:10px;" class="col-sm-9">
										Shared By<br><?php echo $allpost['share_cname'];?>
						</div>
					</div>
				<?php } ?>
			</div>
			<div class="row" style="margin:0px;">
				<span class="s2"><?php echo substr($allpost['postdesc'],0,290);?> <?php if(strlen($allpost['postdesc']) > 290){?>...<?php }?></span> 
				<br><br>
				<?php 
					setlocale(LC_ALL, ''); // Locale will be different on each system.
					$locale = localeconv();
					if($allpost['postprice'] != "")
						$allpost['postprice'] = number_format($allpost['postprice'], 2, $locale['decimal_point'], $locale['thousands_sep']);
				?>
				<?php if($allpost['user_category_id'] == 3){ ?>Target Price <?php } ?>
				<span class="s3">USD</span> <span class="s4"><?php echo $allpost['postprice'];?>&nbsp;&nbsp;&nbsp; </span>
				<span class="s5 pull-right" style="padding-top:12px;"><?php if($allpost['user_category_id'] == 3) { ?>Max.<?php }else{?>Min.<?php } ?> Order: <?php echo $allpost['postqty'];?>&nbsp;&nbsp;&nbsp; </span>
				<?php 
					$tb = $allpost['postviews'] + $allpost['likes']+ $allpost['comment'];
					$total_count_for_percentage = 0;
					$percentage_likes = 0;
					if($tb == 0) {
						$vb = 0;
						$lb = 0;
						$cb = 0;
					} else {
						$vb = round($allpost['postviews']/$tb*3,1);
						$lb = round($allpost['likes']/$tb*3,1);
						$cb = round($allpost['comment']/$tb*3,1);
						$total_count_for_percentage = $allpost['postviews'];
						if($total_count_for_percentage == 0)
						{
							$percentage_likes = 0;
						}else{
							$percentage_likes = ($allpost['likes'] * 100)/$total_count_for_percentage;
							//below code is for showing likes line when there is no like so that we dont affect the view
							if($percentage_likes == 100)
							{
								$percentage_likes = 95;
							}
						}
					}
				?>
				<div>
					<hr style="background-color:#fff;height:1px;margin-bottom:10px;border-top: 1px solid #fff;">
					<?php if($total_count_for_percentage != 0) { ?>
						<hr id="Line16" style="position: absolute;z-index: 336; height: 1px; width: 100%">
						<hr id="Line17" style="width: <?php echo $percentage_likes;?>%; height: 4px; z-index: 340;position: absolute;bottom:33px;">
						<br/>
					<?php } ?>
					<span class="font11">Views </span> <span class="font11"><?php echo $allpost['postviews'];?></span>
					<a href="#" class="style5 font11 plbtn" data-id="<?php echo $allpost['postid'];?>">Likes</a> 
					<span class="font11"><?php echo $allpost['likes'];?></span>
					<a href="#" class="style5 font11 commbtn" data-id="<?php echo $allpost['postid'];?>">Comments</a> 
					<span class="font11"><?php echo $allpost['comment'];?></span>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="col-sm-6" style="padding:0px;">
				<div class="post-img-section" <?php if(!empty($allpost['image1'])) { ?>style="background-image:url('<?php echo asset_url(); ?><?php echo $allpost['image1'];?>');background-size:cover;"<?php } ?>>
					<?php if(!empty($allpost['image1'])) { ?>
					<!-- img src="<?php echo asset_url(); ?><?php echo $allpost['image1'];?>" id="" alt="" class="postimg"-->
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-6" style="padding:0px;">
				<div class="post-img-section" <?php if(!empty($allpost['image2'])) { ?>style="background-image:url('<?php echo asset_url(); ?><?php echo $allpost['image2'];?>');background-size:cover;"<?php } ?>>
					<?php if(!empty($allpost['image2'])) { ?>
					<!-- img src="<?php echo asset_url(); ?><?php echo $allpost['image2'];?>" id="" alt="" class="postimg"-->
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-6" style="padding:0px;">
				<div class="post-img-section" <?php if(!empty($allpost['image3'])) { ?>style="background-image:url('<?php echo asset_url(); ?><?php echo $allpost['image3'];?>');background-size:cover;"<?php } ?>>
					<?php if(!empty($allpost['image3'])) { ?>
					<!-- img src="<?php echo asset_url(); ?><?php echo $allpost['image3'];?>" id="" alt="" class="postimg" -->
					<?php } ?>
				</div>
			</div>
			<div class="col-sm-6" style="padding:0px;">
				<div class="post-img-section" <?php if(!empty($allpost['image4'])) { ?>style="background-image:url('<?php echo asset_url(); ?><?php echo $allpost['image4'];?>');background-size:cover;"<?php } ?>>
					<?php if(!empty($allpost['image4'])) { ?>
					<!-- img src="<?php echo asset_url(); ?><?php echo $allpost['image4'];?>" id="" alt="" class="postimg"-->
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
<?php } }  else { ?>
	<div style="background-color: #FFFFFF;padding:15px;height:637px;">
		<?php if(count($communitymember) <= 0) { ?>
		<h4 class="center" style="margin-top:50px;padding: 100px 240px;text-align: left;">
			<span style="color:#000000;font-family:Arial;font-size:13px;">
				<strong>You don’t have members in your community.. </strong>
				<br><br>
				To add members, click on the suitable business type “ Sellers, Shippers, Buyers” shown under “ Add Member” in The Toolbox..<br><br>
				In the related page, search for a certain members meet your requirement, view his Desksite, then click “Contact and select Add To My Community”..
				<br><br>
			</span>
		</h4>
		<?php } else if(count($firstpost) <= 0) { ?>
		<div id="wb_Text25" style="position:absolute;left:311px;top:233px;width:351px;height:32px;text-align:center;z-index:570;">
			<span style="color:#000000;font-family:Arial;font-size:13px;">To add your first post, close this tab and click on "Add a post" button..</span>
		</div>
		<div id="wb_Text53" style="position:absolute;left:314px;top:204px;width:336px;height:29px;text-align:center;z-index:571;">
			<span style="color:#303030;font-family:Impact;font-size:24px;">No Posts Yet</span>
		</div>
		<?php } else { ?>
		<div id="wb_Text25" style="position:absolute;left:311px;top:233px;width:351px;height:32px;text-align:center;z-index:570;">
			<span style="color:#000000;font-family:Arial;font-size:13px;">We do not fount any post added by your community members..</span>
		</div>
		<div id="wb_Text53" style="position:absolute;left:314px;top:204px;width:336px;height:29px;text-align:center;z-index:571;">
			<span style="color:#303030;font-family:Impact;font-size:24px;">Oops!!</span>
		</div>	
		<?php } ?>
	</div>
<?php }  ?>
<script>
$(document).ready(function(){
	$(".commbtn").click(function(event){
	    event.stopImmediatePropagation();
	    var id = $(this).attr("data-id");
	    $.post(base_url+"community/post/viewcomment", {id : id}, function(data){
	       $('#view_post_comment').html(data);
	       ShowObject('Layer20', 0);
	       ShowObjectWithEffect('Layer101', 1, 'slideright', 500);
	       ShowObject('Layer71', 0);
	    },'html');
	});
	$(".plbtn").click(function(event){
	    event.stopImmediatePropagation();
	    var id = $(this).attr("data-id");
	    $.post(base_url+"community/post/viewlike", {id : id}, function(data){
	       $('#view_post_like').html(data);
	       ShowObject('Layer101', 0);
	       ShowObjectWithEffect('Layer20', 1, 'slideright', 500);
	       ShowObject('Layer71', 0);
	    },'html');
	});
});
</script>