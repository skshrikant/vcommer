<div class="panel-body panel" style="background-color: rgb(255, 255, 255); box-shadow: none ! important; margin-left: 0px ! important; margin-right: 0px ! important;margin-top: 0px ! important;">
	<div class="row" style="padding-bottom:50px;z-index: 200;">
		<div class="col-md-offset-1">
			<div class="col-md-3">
				<ul style="list-style:none;margin-bottom: -5px;">
					<li>
						<a class="btn btn-link" href="javascript:void(0);" style="color:#337ab7;text-decoration:underline;"><?php echo ucwords($params['name']);?></a>
					</li>
				</ul> 
			</div>
			<div class="col-md-9">
				<?php
				if(!empty($mainProduct)){
					foreach($mainProduct as $res){
				?>
					<div class="col-md-4">
						<ul style="list-style:none;margin-bottom: -5px;">
							<li>
								<a class="btn btn-link main_prod" href="javascript:void(0);" onclick="filter_by_subcat('<?php echo $params['main_cat'];?>','<?php echo $params['id'];?>','<?php echo $res['name'];?>')" style="color:#808080;"><?php echo $res["name"];?></a>
							</li>
						</ul>    
					</div>
				<?php	
					}
				}
				?>
			</div>
		</div>
	</div>
</div>