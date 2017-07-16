<div class="container-content">
	<h3>Oto Twój koszyk!</h3>
	<br>
	<?php
		if (isset($_GET['usun_wszystko'])) {
			$this -> cart -> destroy();
			redirect(site_url());
		}
	?>
	<form action="" method="POST">
		<?php $qty = 0; ?>
		<?php if (isset($_POST['add'])) $this -> product_model -> add_toCart($_POST['add']); ?>
		<table class="table">
			<tr>
				<th>Produkt</th>
				<th class="text-center">Cena</th>
				<th class="text-center">Ilość</th>
				<th class="text-center">Cena łączna</th>
				<th class="col-md-1"></th>
				<th class="col-md-1"></th>
			</tr>
			<?php foreach($this -> cart -> contents() as $product): ?>
			<tr>
				<td><b><?php echo $product['name']; ?></b></td>
				<td class="text-center"><?php echo $product['price']; ?> zł</td>
				<td class="text-center"><?php echo $product['qty']; $qty += $product['qty']; ?> sztuk</td>
				<td class="text-center"><b><?php echo $product['price']*$product['qty']; ?> zł</b></td>
				<td class="text-center"><a href="" class="btn btn-danger input-sm"><span class="fa fa-remove"></span></a></td>
				<td></td>
			</tr>
			<?php endforeach; ?>
			<tr class="bg-warning">
				<td colspan="2"><b>SUMA</b></td>
				<td class="text-center"><b><?php echo $qty; ?> sztuki</b></td>
				<td class="text-center"><b><?php echo $this -> cart -> total(); ?> zł</b></td>
				<td class="text-center"><a href="?usun_wszystko" class="btn btn-danger">USUŃ!</a></td>
				<td class="text-center"><a href="" class="btn btn-warning">ZAMÓW!</a></td>
			</tr>
		</table>
	</form>
</div>