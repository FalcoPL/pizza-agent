<div class="container-content">
	<?php foreach($user as $profile): ?>
		<h2>Witaj, <?php echo $profile -> user_login; ?></h2>
	<?php endforeach; ?>
</div>