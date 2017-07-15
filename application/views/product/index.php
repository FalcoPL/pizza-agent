<div class="container-content">
	<table class="table">
		<?php foreach($products as $product): ?>
		<tr>
			<td><?php echo $product -> product_no; ?></td>
			<td><?php echo $product -> product_title; ?></td>
			<td><?php echo $product -> product_components; ?></td>
			<td><?php echo $product -> product_price1; ?></td>
			<td><?php echo $product -> product_price2; ?></td>
			<td><?php echo $product -> product_price3; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>