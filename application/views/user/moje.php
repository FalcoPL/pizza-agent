<div class="container-content">
	<?php foreach($user as $profile): ?>
		<h3>Witaj, <?php echo $profile -> user_login; ?></h3>
	<?php endforeach; ?>
</div>