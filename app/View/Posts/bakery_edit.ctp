<div class="posts form">

<?php 
	$categoryarray = array();
	$key = 1;

	foreach ($categories as $category):
  		$categoryarray[$key] = $category['Category']['title'];
		$key = $key + 1;
	endforeach;
	unset($category);

	$userarray = array();
	$key = 1;

	foreach ($users as $user):
  		$userarray[$key] = $user['User']['name'];
		$key = $key + 1;
	endforeach;
	unset($user);

?>	

<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Bakery Edit Post'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('user_id', array('options' => $userarray));
		echo $this->Form->input('imageurl');
		echo $this->Form->input('category_id', array('options' => $categoryarray));
		echo $this->Form->input('summary');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Post.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Post.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
	</ul>
</div>
