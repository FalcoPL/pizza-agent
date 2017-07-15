<div class="container-content">
	<form action="" method="POST">
		<?php if (isset($_POST['add'])) $this -> product_model -> add_toCart($_POST['add']); ?>
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
			<?php foreach($products as $product): ?>
			<tr>
				<td class="text-center"><?php echo $product -> product_no; ?>.</td>
				<td><?php echo $product -> product_title; ?></td>
				<td><?php echo $product -> product_components; ?></td>
				<td class="text-center"><button type="submit" name="add" value="<?php echo $product -> product_id.'|::|'.$product -> product_price1.'|::|'.$product -> product_title; ?>" class="btn btn-warning" href="#" role="button"><?php echo $product -> product_price1; ?> zł</button></td>
				<td class="text-center"><button type="submit" name="add" value="<?php echo $product -> product_id.'|::|'.$product -> product_price2.'|::|'.$product -> product_title; ?>" class="btn btn-warning" href="#" role="button"><?php echo $product -> product_price2; ?> zł</button></td>
				<td class="text-center"><button type="submit" name="add" value="<?php echo $product -> product_id.'|::|'.$product -> product_price3.'|::|'.$product -> product_title; ?>" class="btn btn-warning" href="#" role="button"><?php echo $product -> product_price3; ?> zł</button></td>
				<td class="text-center"></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</form>
</div>