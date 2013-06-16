<div class="posts form">

<?php 
	$categoryarray = array();
	
	$key = 1;

	foreach ($categories as $category):
  		$categoryarray[$key] = $category['Category']['title'];
		$key = $key + 1;
	endforeach;
	unset($category);
?>

<?php echo $this->Form->create('Post'); ?>
	<fieldset>
		<legend><?php echo __('Bakery Add Post'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('author');
		echo $this->Form->input('category_id', array('options' => $categoryarray));
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
	</ul>
</div>