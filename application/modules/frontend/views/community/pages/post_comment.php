  <?php //print_r($postcomment); ?> 
      <div id="Layer101_Container" class="style2">
            <div class="likehead">
                <span class="like">Comments
		    <span class="likecount" style="vertical-align:middle;font-size:20px;padding: 0px 10px;"><?php echo count($postcomment);?></span></span>
                <a href="#" onclick="ShowObjectWithEffect('Layer101', 0, 'slideright', 600);return false;">
		    <img src="<?php echo asset_url(); ?>images/img0313.gif" id="Shape14" alt="" style="width:42px;height:42px;float: right;margin-top: 5px;">
		    </a>
            </div>
            <div id="Layer102" style="position:absolute;overflow-y:scroll;text-align:left;left:2px;width:308px;height:516px;z-index:844;">
            <?php foreach($postcomment as $comment) {?>
            <div class="likesection1 row" style="margin:5px 0px;padding:10px 0px;">
                <div class="col-sm-2">
                	<img src="<?php echo asset_url(); ?><?php echo $comment['profile_image'];?>" id="Image28" alt="" class="likeimg">
                </div>
                <div class="col-sm-10">
                    <span class="stylefont1"><?php echo $comment['formatted_name']; ?></span>
                    <span class="pull-right"><?php if(date('Y-m-d',strtotime($comment['created_datetime'])) == date('Y-m-d')){ ?>Today<?php } else { echo date('d M Y',strtotime($comment['created_datetime'])); }?>&nbsp; | <?php echo date('H:i',strtotime($comment['created_datetime']));?></span>
                    <br>
                    <div style="padding-top:5px;">
                    <span class="b1"><?php echo $comment['comment'];?></span>
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>
            <!--<div class="center block">
                <textarea name="comment" id="comment<?php echo $post_id ?>"></textarea>
                <button id="Button11" onclick="commentPost(<?php echo $post_id.', '. $busi_id; ?>);" value="Send" style="margin-top:5px;width:285px;height:24px;z-index:1122;">Send</button>
            </div>-->

            <div id="wb_Form1" style="position:absolute;left:14px;top:686px;width:280px;height:78px;z-index:846;">
                <textarea name="ChatArea" id="comment<?php echo $post_id ?>" style="position:absolute;left:1px;top:0px;width:273px;height:37px;z-index:842;" rows="1" cols="36" maxlength="600"></textarea>
                <input type="submit" id="Button11" onclick="commentPost(<?php echo $post_id.', '. $busi_id; ?>);" name="Send" value="Send" style="position:absolute;left:2px;top:46px;width:278px;height:24px;z-index:843;">
            </div>
        </div>
        
<script>
 
</script>
        
        
        
        
        