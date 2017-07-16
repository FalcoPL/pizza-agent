<?php
				echo '<pre>';
				print_r($this -> cart -> contents());
			echo '</pre>';
?>
<div class="container-content">
	<form action="" method="POST">
		<?php if (isset($_POST['add'])) $this -> product_model -> add_toCart($_POST['add']); ?>
		<table class="table">
			<tr>
				<th class="text-center">Nr.</th>
				<th>Tytuł</th>
				<th>Składniki</th>
				<?php $sizes = $this -> product_model -> get_sizes(); ?>
				<?php foreach($sizes as $size): ?>
				<th class="text-center"><?php echo $size -> size_name ?> <br> <small><?php echo $size -> size_radius ?></small></th>
				<?php endforeach; ?>
			</tr>
			<?php $i = 1; ?>
			<?php foreach($pizzas as $pizza): ?>
				<?php if($i == 3): ?>
					<?php $i = 1 ?>
					<?php continue; ?>
				<?php else: ?>
					<tr>
						<td class="text-center"><?php echo $pizza -> pizza_no; ?>.</td>
						<td><?php echo $pizza -> pizza_title; ?></td>
						<td><?php echo $pizza -> pizza_components; ?></td>
						
						<td class="text-center"><?php echo $pizza -> pizza_price; ?></td>
						<td class="text-center"></td>
						<td class="text-center"></td>
					</tr>
					<?php $i++; ?>
				<?php endif; ?>

			<?php endforeach; ?>
		</table>
	</form>
</div>