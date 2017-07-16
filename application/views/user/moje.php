<div class="container-login">
	<?php foreach($user as $profile): ?>
		<form action="" method="POST">
			<?php if (isset($_POST['save'])) $this -> user_model -> update($_POST); ?>
			<label>Witaj, <?php echo $profile -> user_login; ?>!<br> <small>Tutaj możesz zmienić ustawienia swojego konta.</small></label>
			<p><input type="password" class="form-control" name="user_pass" value="<?php echo $profile -> user_pass; ?>" placeholder="Nowe hasło"></p>
			<hr>
			<label><small>Adres</small></label>
			<p><input type="text" class="form-control" name="user_adressCity" value="<?php echo $profile -> user_adressCity; ?>" placeholder="Miejscowość"></p>
			<p><input type="text" class="form-control" name="user_adressRoad" value="<?php echo $profile -> user_adressRoad; ?>" placeholder="Ulica"></p>
			<p><input type="text" class="form-control" name="user_adressNo" value="<?php echo $profile -> user_adressNo; ?>" placeholder="Numer domu/mieszkania"></p>
			<p><input type="submit" name="save" class="btn btn-warning form-control" value="Zapisz zmiany!"></p>
		</form>
	<?php endforeach; ?>
</div>