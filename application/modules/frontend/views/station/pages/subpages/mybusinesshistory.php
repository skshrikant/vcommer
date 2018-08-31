<div class="row">
	<div class="col-sm-12">
		<table class="skyblue">
			<thead>
				<tr>
					<th>Visitors</th>
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
				<?php foreach ($busi_history as $busi_history_stat) { ?>
				<tr>
					<td><?php echo $busi_history_stat['visits'];?></td>
					<td><?php echo $busi_history_stat['likes'];?></td>
					<td><?php echo $busi_history_stat['shares'];?></td>
					<td><?php echo !empty($busi_history_stat['country_name']) ? $busi_history_stat['country_name']:'Unknown';?></td>
					<td><?php echo !empty($busi_history_stat['city_name']) ? $busi_history_stat['city_name']:'Unknown';?></td>
					<td><?php echo date('d M Y',strtotime($busi_history_stat['visit_date']));?></td>
				</tr>
				<?php 
					$visits = $visits + $busi_history_stat['visits'];
					$likes = $likes + $busi_history_stat['likes'];
					$shares = $shares + $busi_history_stat['shares'];
				?>
				<?php } ?>
				<tr>
					<td style="border:0px;"><?php echo $visits;?></td>
					<td style="border:0px;"><?php echo $likes;?></td>
					<td style="border:0px;"><?php echo $shares;?></td>
					<td style="border:0px;"></td>
					<td style="border:0px;"></td>
					<td style="border:0px;"></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<br>
