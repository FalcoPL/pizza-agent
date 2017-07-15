<div class="container-content">
	<table class="table">
		<tr>
			<th class="text-center">Nr.</th>
			<th>Tytuł</th>
			<th>Składniki</th>
			<th class="text-center">Mała <br> <small><i>25 cm</i></small></th>
			<th class="text-center">Średnia <br> <small><i>35 cm</i></small></th>
			<th class="text-center">Duża <br> <small><i>45 cm</i></small></th>
			<th class="text-center"></th>
		</tr>
		<?php foreach($products as $product): ?>
		<tr>
			<td class="text-center"><?php echo $product -> product_no; ?>.</td>
			<td><?php echo $product -> product_title; ?></td>
			<td><?php echo $product -> product_components; ?></td>
			<td class="text-center"><?php echo $product -> product_price1; ?> zł</td>
			<td class="text-center"><?php echo $product -> product_price2; ?> zł</td>
			<td class="text-center"><?php echo $product -> product_price3; ?> zł</td>
			<td><a class="btn btn-warning" href="#" role="button">ZAMÓW!</a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>