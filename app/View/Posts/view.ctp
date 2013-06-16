<div class="post-box">
	<div class="post-content">
		<h2><?php echo __('Title'); ?></h2>
		<span><?php echo h($post['Category']['title']); ?> - Posted by <?php echo h($post['Post']['author']); ?></span>
		<?php echo ($post['Post']['content']); ?>
	</div>
</div>
