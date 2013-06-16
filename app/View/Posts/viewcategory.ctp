<?php foreach ($posts as $post): ?>

	<div class="post-box">
		<div class="post-content">
			<h2><?php echo h($post['Post']['title']); ?></h2>
			<span><?php echo h($post['Category']['title']); ?> - Posted by <?php echo h($post['Post']['author']); ?></span>
			<?php echo ($post['Post']['content']); ?>
		</div>
		<div class="post-btns">
			<?php echo $this->Html->link(__('View Post...'), array('action' => 'view', $post['Post']['id'])); ?>
		</div>
		
	</div>

<?php endforeach; ?>

<div class="post-box">
		<div class="post-content">
			<h2>Read older posts</h2>
			<span>Select a category below</span>
			<?php foreach ($categories as $category): ?>
			<ul>
				<li><?php echo $this->Html->link(__($category['Category']['title']), array('action' => 'viewcategory', $category['Category']['id'])); ?></li>
			</ul>
		<?php endforeach ?>
		</div>
	</div>

	<div class="post-box">
		<div class="post-content">
			<h2>Connect with me</h2>
			<a target="_blank" href="mailto:talk@jaredrigby.co.uk" class="social email"></a>
			<a target="_blank" href="https://github.com/jazibobs" class="social github"></a>
			<a target="_blank" href="https://plus.google.com/u/0/108846301542540516777/about" class="social plus"></a>
			<a target="_blank" href="http://www.last.fm/user/jazibobs" class="social lastfm"></a>
			<a target="_blank" href="http://uk.linkedin.com/in/jaredgrigby" class="social linkedin"></a>
			<a target="_blank" href="https://twitter.com/jaredrigby" class="social twitter"></a>
		</div>
	</div>