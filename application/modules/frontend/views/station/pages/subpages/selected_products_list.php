<style>
.outer_div {
	display:inline;
    text-align:center;
}
.inner_div {
    float:left;
}

</style>
<div class="outer_div">
<?php foreach ($products as $product) { ?>
	<div id="Layer986" class="inner_div" style="text-align:left;left:7px;top:24px;width:320px;height:100px;z-index:935;">
				<table>
					<tr><td rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td rowspan="2">
							<div id="wb_Shape502" style="left:34px;top:10px;width:98px;height:80px;z-index:901;padding-top:10px;">
								<a href="./desk_details.php" target="_blank"><img src="<?php echo asset_url();?><?php echo $product['main_image'];?>" id="Shape5020" alt="" style="width:98px;height:80px;"></a>
							</div>
						</td>
						<td rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>
							<div id="wb_Text403" style="left:145px;top:31px;width:123px;height:15px;z-index:899;text-align:left;padding-top:10px;">
								<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">Product No.: <?php echo $product['model_no'];?></span>
							</div>
						</td>
					</tr>
					<tr><td>
						<div id="wb_Text430" style="left:145px;top:51px;width:165px;height:30px;z-index:900;text-align:left;">
							<span style="color:#3C3C3C;font-family:Arial;font-size:12px;">B<?php echo $product['name'];?></span>
						</div>
						</td>
					</tr>
				</table>
			</div>
<?php } ?>
</div>