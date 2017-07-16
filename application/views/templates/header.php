<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Pizza Agent</title>

		<!-- BOOTSTRAP & JQUERY -->
		<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

		<!-- Custom styles -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">

		<!-- Font awesome -->
		<script src="https://use.fontawesome.com/e14d30caf1.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo site_url(); ?>">Pizza Agent <small> - Twoja pizzeria w zasięgu ręki!</small></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo site_url('dostawa'); ?>">Dostawa</a></li>
						<li><a href="<?php echo site_url('kontakt'); ?>">Kontakt</a></li>
						<li><a href="<?php echo site_url('kontakt'); ?>">MÓJ KOSZYK <span class="badge"><?php echo $this -> cart -> total(); ?> zł</span></a></li>
						<?php if (isset($_SESSION) && @$_SESSION['user']['logged'] == true): ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Cześć, <?php echo $_SESSION['user']['login']; ?> <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo site_url(); ?>" >Zamów pizzę!</a></li>
									<li class="divider"></li>
									<li><a href="<?php echo site_url('konto/moje'); ?>">Moje konto</a></li>
									<!-- <li><a href="<?php echo site_url('konto/rabaty'); ?>">Moje rabaty</a></li> -->
									<li class="divider"></li>
									<li><a href="<?php echo site_url('wyloguj'); ?>">Wyloguj</a></li>
								</ul>
							</li>
						<?php else: ?>
							<li><p class="navbar-btn"><a href="<?php echo site_url('zaloguj'); ?>" class="btn btn-warning">Zaloguj się!</a></p></li>
						<?php endif; ?>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
		<div class="container-fluid">