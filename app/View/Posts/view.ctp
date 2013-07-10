

	<div class="large-12 columns">
		<div class="posts">
			<a href="#"><h3><?php echo $this->Html->link(__(h($post['Post']['title'])), array('action' => 'view', $post['Post']['id'])); ?></h3></a>
			<span><?php echo $this->Html->link(__($post['Category']['title']), array('action' => 'viewcategory', $post['Category']['id'])); ?> - Posted by <?php echo $this->Html->link(__($post['User']['name']), array('action' => 'viewuser', $post['User']['id'])); ?></span>
			<p><?php echo ($post['Post']['content']); ?></p>
		</div>
	</div>
	<hr/>