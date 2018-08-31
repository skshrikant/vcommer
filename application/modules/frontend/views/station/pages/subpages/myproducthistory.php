<div class="row">
	<div class="col-sm-12">
		<table class="skyblue">
			<thead>
				<tr>
					<th>S.N</th>
					<th>Product No</th>
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
				?>
				<?php foreach ($product_history as $key=>$product_history_stat) { 
				    if(is_array($product_history_stat)) {
				    ?>
				<tr>
					<td><?php echo $key+1;?></td>
					<td><?php echo $product_history_stat['model_no'];?></td>
					<td><?php echo $product_history_stat['visits'];?></td>
					<td><?php echo $product_history_stat['likes'];?></td>
					<td><?php echo $product_history_stat['shares'];?></td>
					<td><?php echo !empty($product_history_stat['country_name']) ? $product_history_stat['country_name']:'Unknown';?></td>
					<td><?php echo !empty($product_history_stat['city_name']) ? $product_history_stat['city_name']:'Unknown';?></td>
					<td><?php echo date('d M Y',strtotime($product_history_stat['visit_date']));?></td>
				</tr>
				
				<?php } } 
				if($currentPage == $totalPages) {
				?>
				<tr>
					<td style="border:0px;"></td>
					<td style="border:0px;"><strong><?php echo $product_history['products'];?></strong></td>
					<td style="border:0px;"><strong><?php echo $product_history['visits'];?></strong></td>
					<td style="border:0px;"><strong><?php echo $product_history['likes'];?></td>
					<td style="border:0px;"><strong><?php echo $product_history['shares'];?></strong></td>
					<td style="border:0px;"></td>
					<td style="border:0px;"></td>
					<td style="border:0px;"></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<br>
<div class="row">
	<div class="pull-right page_displayproduct" style="padding-right:20px;">
		<strong>Page&nbsp;&nbsp;&nbsp; </strong>
		<?php for ($i = 1; $i <= $totalPages; $i++) { ?>
		<a id="productpagination_<?php echo $i;?>" href="javascript:showNextProductStats(<?php echo $i;?>);" style="text-decoration: none;" class="pagination_tool<?php if($i == 1) { ?> page-active<?php } ?>"><?php echo $i;?></a>
		<?php } ?>
	</div>
</div>
<script type="text/javascript">
$(".rowParent").hide();
</script>