<div class="left-column float-left">
	<div class="post-box">
		<div class="post-content">
			<h2><?php echo __('Title'); ?></h2>
			<span><?php echo $this->Html->link(__($post['Category']['title']), array('action' => 'viewcategory', $post['Category']['id'])); ?> - Posted by <?php echo $this->Html->link(__($post['Author']['name']), array('action' => 'viewauthor', $post['Author']['id'])); ?></span>
			<?php echo ($post['Post']['content']); ?>
		</div>
	</div>
</div>
<div class="right-column float-left">
	<div class="post-box">
		<div class="post-content">
			<h2>Read older posts</h2>
			<span>Select a category below</span>
			<?php foreach ($categories as $category): ?>
			<ul class="category-list">
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
</div>
<div class="clear"></div>	