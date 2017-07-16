<div class="container-content">
	<table class="table">
		<tr>
			<th class="text-center">Nr.</th>
			<th>Tytuł</th>
			<th>Składniki</th>
			<th class="text-center">Mała <br> <small><i>25 cm</i></small></th>
			<th class="text-center">Średnia <br> <small><i>35 cm</i></small></th>
			<th class="text-center">Duża <br> <small><i>45 cm</i></small></th>
			<th class="text-center">Do koszyka</th>
		</tr>
		<?php foreach($pizzas as $pizza): ?>
		<tr>
			<td class="text-center"><?php echo $pizza -> pizza_no; ?>.</td>
			<td><?php echo $pizza -> pizza_title; ?></td>
			<td><?php echo $pizza -> pizza_components; ?></td>
			<td class="text-center"><?php echo $pizza -> pizza_price1; ?> zł</td>
			<td class="text-center"><?php echo $pizza -> pizza_price2; ?> zł</td>
			<td class="text-center"><?php echo $pizza -> pizza_price3; ?> zł</td>
			<td class="text-center"><a class="btn btn-warning" href="#" role="button"><span class="fa fa-shopping-basket"></span></a></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>