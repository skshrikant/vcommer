       <?php //print_r($postlike);?>
        <div class="likehead">
            <span class="like">Likes 
               <span class="likecount" style="font-size:20px;vertical-align:middle;padding:0px 10px;"><?php echo count($postlike);?></span>
            </span>
            <a href="#" onclick="ShowObjectWithEffect('Layer20', 0, 'slideright', 600);return false;">
			    <img src="<?php echo asset_url(); ?>images/img0313.gif" id="Shape14" alt="" style="width:42px;height:42px;float: right;margin-top: 5px;">
		    </a>
        </div>
        <div style="max-height:400px;overflow-y:scroll;">
        <?php foreach($postlike as $like) {?>
        <div class="likesection" style="padding:10px;margin:5px 0px;">
            <img src="<?php echo asset_url(); ?><?php echo $like['profile_image'];?>" id="Image28" alt="" class="likeimg">
            <span class="namestyle">&nbsp;&nbsp; <?php echo $like['formatted_name']; ?></span>
            <span class="pull-right" style="padding-top:7px;color:#A9A9A9;font-family:Arial;font-size:11px;"><?php if(date('Y-m-d',strtotime($like['created_datetime'])) == date('Y-m-d')){ ?>Today<?php } else { echo date('d M Y',strtotime($like['created_datetime'])); }?>&nbsp; | <?php echo date('H:i',strtotime($like['created_datetime']));?></span>
        </div>
        <?php } ?>
        </div>
        <div class="center block">
            <a href="javascript:postLike('<?php echo $post_id; ?>');" >
               <img src="<?php echo asset_url(); ?>images/img0312.png" id="Image114" alt="" style="width:39px;height:39px;">
            </a>
            <br>
            <span class="namestyle2">Click to Like this member</span>
        </div>
       