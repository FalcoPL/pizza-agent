<div class="container-login">
	<form action="" method="POST">
		<?php if (isset($_POST['register'])) $this -> user_model -> register($_POST); ?>
		<label>Zarejestruj się!</label>
		<p><input type="text" class="form-control" name="user_login" placeholder="Login"></p>
		<p><input type="password" class="form-control" name="user_pass" placeholder="Hasło"></p>
		<p><input type="text" class="form-control" name="user_adressCity" placeholder="W jakiej miejscowoci mieszkasz?"></p>
		<p><input type="text" class="form-control" name="user_adressRoad" placeholder="Na jakiej ulicy stoi Twój dom/mieszkanie?"></p>
		<p><input type="text" class="form-control" name="user_adressRoad" placeholder="Jaki jest jego numer?"></p>
		<p><input type="submit" name="register" class="btn btn-warning form-control" value="Zarejestruj się!"></p>
		<p class="text-center"><small>Jednak masz konto? </small><a href="<?php echo site_url('zaloguj') ?>">Zaloguj się!</a></p>
	</form>
</div>