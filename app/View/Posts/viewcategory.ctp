<?php 
	foreach ($posts as $post): 

	if (empty($post['Post']['imageurl'])) {
		$imageurl = "/jaredrigby-3/img/post-default.png";
	} else {
		$imageurl = $post['Post']['imageurl'];
	}

?>


	<div class="large-2 columns">
		<a href="#">
			<img class="center-block nice-border" src="<?php echo ($imageurl); ?>" width="100" height="100">
		</a>
	</div>
	<div class="large-10 columns">
		<div class="posts">
			<a href="#"><h3><?php echo $this->Html->link(__(h($post['Post']['title'])), array('action' => 'view', $post['Post']['id'])); ?></h3></a>
			<span><?php echo $this->Html->link(__($post['Category']['title']), array('action' => 'viewcategory', $post['Category']['id'])); ?> - Posted by <?php echo $this->Html->link(__($post['User']['name']), array('action' => 'viewuser', $post['User']['id'])); ?></span>
			<p><?php echo ($post['Post']['summary']); ?></p>
		</div>
	</div>
	<hr/>

<?php endforeach; ?>