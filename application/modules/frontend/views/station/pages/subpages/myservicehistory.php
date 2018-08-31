<div class="row">
	<div class="col-sm-12">
		<table class="skyblue">
			<thead>
				<tr>
					<th>S.N</th>
					<th>Services</th>
					<th>Views</th>
					<th>Likes</th>
					<th>Share</th>
					<th>Country</th>
					<th>City</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$visits = 0;
					$likes = 0;
					$shares = 0;
				?>
				<?php foreach ($product_history as $key=>$product_history_stat) { ?>
				<tr>
					<td><?php echo $key+1;?></td>
					<td><?php echo $product_history_stat['name'];?></td>
					<td><?php echo $product_history_stat['visits'];?></td>
					<td><?php echo $product_history_stat['likes'];?></td>
					<td><?php echo $product_history_stat['shares'];?></td>
					<td><?php echo $product_history_stat['country_name'];?></td>
					<td><?php echo $product_history_stat['city_name'];?></td>
					<td><?php echo date('d M Y',strtotime($product_history_stat['visit_date']));?></td>
				</tr>
				<?php 
					$visits = $visits + $product_history_stat['visits'];
					$likes = $likes + $product_history_stat['likes'];
					$shares = $shares + $product_history_stat['shares'];
				?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<br>
<div class="row">
	<div class="col-sm-1">
		<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $visits;?></strong></span>
	</div>
	<div class="col-sm-1">
		<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $likes;?></strong></span>
	</div>
	<div class="col-sm-1">
		<span style="color:#3C3C3C;font-family:Arial;font-size:12px;"><strong><?php echo $shares;?></strong></span>
	</div>
</div>
<br>
<div class="row">
	<div class="pull-right" style="padding-right:20px;">
		<strong>Page&nbsp;&nbsp;&nbsp; </strong>
		<?php for ($i = 1; $i <= $product_history_pages; $i++) { ?>
		<a href="javascript:showNextProductStats(<?php echo $i;?>);" class="<?php if($i == 1) { ?>page-active<?php } ?>"><?php echo $i;?></a>
		<?php } ?>
	</div>
</div>