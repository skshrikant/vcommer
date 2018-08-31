<div style="display:inline;text-align:center;">

<?php for($i=0;$i<count($uploaded_files);$i++) {?>
<div style="float: left;width:110px;text-align:center;">
		
						<div id="wb_Text2036" style="left:96px;top:164px;max-width:100px;height:15px;z-index:4399;text-align:center;">
							<?php $counter = $i +1;?>
							<span style="color:#3C3C3C;font-family:Arial;font-size:12px;" id="uploaded_img_name<?php echo $i;?>"><?php echo "frame_".$counter;?></span>
						</div>
						<div id="wb_Image300" style="left:98px;top:24px;width:63px;height:133px;z-index:4400;">
							<img id="uploaded_img<?php echo $i;?>" src="<?php echo asset_url();?><?php echo $uploaded_files[$i]['image'];?>" style="max-height:133px;max-width:100px;" id="Image300" alt="">
						</div>
			<div id="wb_Text2035" style="left:103px;top:190px;max-width:100px;height:31px;z-index:4398;text-align:center;">
						<a href="#" onclick="changeimage(<?php echo $i;?>)"><span style="color:#1E90FF;font-family:'Arial Black';font-size:12px;" ><u>Change</u></span><span style="color:#1E90FF;font-family:Arial;font-size:11px;"><u><br></u>
							</span>
						</a>
			</div>
	</div>
<?php } ?>
</div>
<br/>

<div id="Layer982" style="width:320px;display:inline;text-align:center;"><!--style="text-align:left;left:332px;top:493px;width:320px;height:85px;z-index:4446;"-->
	<div id="wb_Shape305" style="width:150px;float: left;text-align:center;margin-left:250px;" ><!--  style="left:5px;top:11px;width:150px;height:32px;z-index:4397;"-->
			<a href="#" onclick="test_before_save()">
				<div id="Shape305" style="display: table;">
				<div id="Shape305_text" style="vertical-align: middle;display: table-cell;"><span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Test</span></div></div>
			</a>
	</div>
	<div id="wb_Shape306" style="width:150px;float: left;text-align:center;" onclick="publish3dimages()"><!-- style="left:158px;top:11px;width:150px;height:32px;z-index:4396;"-->
	      <!--<a href="" onclick="ShowObject('Layer110', 1);ShowObject('Layer116', 0);ShowObjectWithEffect('Layer983', 0, 'fade', 100, 'swing');ShowObjectWithEffect('Layer979', 0, 'fade', 20, 'swing');return false;">-->
	               <div id="Shape306" style="display: table;"><div id="Shape306_text" style="vertical-align: middle;display: table-cell;">
	                        <span style="color:#A9A9A9;font-family:Arial;font-size:13px;">Publish</span>
	               </div></div>
	      <!--</a>-->
	</div>
	
</div>