<div class="authors form">
<?php echo $this->Form->create('Author'); ?>
	<fieldset>
		<legend><?php echo __('Bakery Edit Author'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('password');
		echo $this->Form->input('role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Author.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Author.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Authors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posts'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
