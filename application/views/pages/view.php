<div class="container-content">
	<?php foreach($page as $data): ?>
		<h2><?php echo $data -> page_title; ?></h2>
		<hr>
		<p><?php echo $data -> page_content; ?></p>
	<?php endforeach; ?>
</div>