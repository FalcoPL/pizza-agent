<div class="container-login">
	<form action="" method="POST">
		<?php if (isset($_POST['login'])) $this -> user_model -> login($_POST); ?>
		<label>Zaloguj się!</label>
		<p><input type="text" class="form-control" name="user_login" placeholder="Login"></p>
		<p><input type="password" class="form-control" name="user_pass" placeholder="Haso"></p>
		<p><input type="submit" name="login" class="btn btn-warning form-control" value="Zaloguj!"></p>
		<p class="text-center"><small>Nie masz konta? </small><a href="<?php echo site_url('zarejestruj') ?>">Zarejestruj się za darmo!</a></p>
	</form>
</div>