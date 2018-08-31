<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Like & Comments</title>
<meta name="description" content="The World's First Social B2B Platform">
<meta name="keywords" content="sourcing product, e-commerce, business, trade, commerce, community, video tube, business chat, buyers, sellers, shippers, products, china. exporters, suppliers">
<meta name="author" content="Hazem Zaki">
<meta name="categories" content="E-Commerce">
<meta name="generator" content="Hotline Internet & Technology Co. Ltd.">
<link href="<?php echo asset_url();?>css/jquery.ui.all.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/station.css" rel="stylesheet">
<link href="<?php echo asset_url();?>css/pages/likes_blogs.css" rel="stylesheet">
<script src="<?php echo asset_url();?>js/jquery-1.11.1.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.core.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.widget.min.js"></script>
<script src="<?php echo asset_url();?>js/jquery.ui.button.min.js"></script>
<script src="<?php echo asset_url();?>js/wwb10.min.js"></script>
<script>
$(document).ready(function()
{
   $("#jQueryButton1").button();
});
</script>
</head>
<body>
	<div id="Layer6" style="position: absolute; text-align: left; left: 0%; top: 0px; width: 386px; height: 1665px; z-index: 75;">
		<div id="Layer92" style="position: absolute; text-align: left; left: 0px; top: 0px; width: 386px; height: 207px; z-index: 32;">
			<div id="Layer100" style="position: absolute; text-align: left; left: 0px; top: 74px; width: 322px; height: 44px; z-index: 6;">
				<div id="wb_Text214" style="position: absolute; left: 182px; top: 15px; width: 56px; height: 19px; z-index: 5; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 16px;"><strong><?php echo count($comments);?></strong></span>
				</div>
			</div>
			<div id="wb_Text213" style="position: absolute; left: 10px; top: 70px; width: 119px; height: 53px; z-index: 7; text-align: left;">
				<span style="color: #FF6347; font-family: Impact; font-size: 43px;">&nbsp;&nbsp; Likes </span>
			</div>
		</div>
		<div id="Layer102" style="position: absolute; text-align: left; left: 0px; top: 207px; width: 384px; height: 1437px; z-index: 33;">
			<?php foreach ($comments as $comment) { ?>
			<div id="Layer103" style="width: 323px; z-index: 23;">
				<div id="wb_Text215" style="position: absolute; left: 67px; top: 15px; width: 103px; height: 16px; z-index: 8; text-align: left;">
					<span style="color: #4169E1; font-family: Arial; font-size: 13px;"><?php echo $comment['name'];?>&nbsp; </span>
				</div>
				<div id="wb_Text216" style="position: absolute; left: 189px; top: 17px; width: 82px; height: 14px; z-index: 9; text-align: left;">
					<span style="color: #A9A9A9; font-family: Arial; font-size: 11px;">Today | 08:15</span>
				</div>
				<div id="wb_Text221" style="position: absolute; left: 68px; top: 44px; width: 240px; height: 15px; z-index: 10; text-align: left;">
					<span style="color: #3C3C3C; font-family: Arial; font-size: 12px;"><?php echo $comment['comment'];?></span>
				</div>
				<div id="wb_Shape1" style="position: absolute; left: 14px; top: 11px; width: 45px; height: 45px; z-index: 11;">
					<img src="<?php echo asset_url();?><?php echo $comment['profile_image'];?>" id="Shape1" alt="" style="width: 45px; height: 45px;">
				</div>
			</div>
			<?php } ?>
		</div>
		<div id="wb_Text1" style="position: absolute; left: 10px; top: 520px; width: 282px; height: 53px; z-index: 34; text-align: left;">
			<span style="color: #02D4C3; font-family: Impact; font-size: 43px;">&nbsp;&nbsp; </span>
			<span style="color: #646464; font-family: Impact; font-size: 43px;">Comments</span>
		</div>
		<div id="wb_Form1" style="position: absolute; left: 12px; top: 221px; width: 346px; height: 280px; z-index: 35;">
			<form name="survey" method="post" action="" id="Form1">
				<input type="checkbox" id="Checkbox5" name="Checkbox1" value="on" style="position: absolute; left: 312px; top: 60px; visibility: hidden; z-index: 27;">
				<div id="wb_Image1" style="position: absolute; left: 114px; top: 36px; width: 24px; height: 24px; visibility: hidden; z-index: 28;">
					<img src="<?php echo asset_url();?>images/rate-single.png" id="Image1" alt="">
				</div>
				<button id="AdvancedButton1" type="button" style="position: absolute; left: 12px; top: 9px; width: 327px; height: 45px; z-index: 29;" onclick="" name="" value="">
					<div style="text-align: left">&nbsp;</div>
				</button>
				<input type="submit" id="jQueryButton1" onclick="SetImage('Checkbox1','images/rate-single0.png');return false;" name="" value="Send " style="position: absolute; left: 12px; top: 228px; width: 326px; height: 40px; z-index: 30;">
				<textarea name="commentbox" id="TextArea1" style="position: absolute; left: 13px; top: 61px; width: 319px; height: 156px; z-index: 31;" rows="11" cols="43" placeholder="Type your comment"></textarea>
			</form>
		</div>
	</div>
</body>
</html>