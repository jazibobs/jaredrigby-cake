<div class="authors view">
<h2><?php  echo __('Author'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($author['Author']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($author['Author']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($author['Author']['password']); ?>
			&nbsp;
		</dd>
		<dd>
			<?php echo h($author['Author']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($author['Author']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($author['Author']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Author'), array('action' => 'edit', $author['Author']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Author'), array('action' => 'delete', $author['Author']['id']), null, __('Are you sure you want to delete # %s?', $author['Author']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Authors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Author'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts'), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Posts'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Posts'); ?></h3>
	<?php if (!empty($author['Posts'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Author Id'); ?></th>
		<th><?php echo __('Imageurl'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Summary'); ?></th>
		<th><?php echo __('Content'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($author['Posts'] as $posts): ?>
		<tr>
			<td><?php echo $posts['id']; ?></td>
			<td><?php echo $posts['title']; ?></td>
			<td><?php echo $posts['author_id']; ?></td>
			<td><?php echo $posts['imageurl']; ?></td>
			<td><?php echo $posts['category_id']; ?></td>
			<td><?php echo $posts['summary']; ?></td>
			<td><?php echo $posts['content']; ?></td>
			<td><?php echo $posts['created']; ?></td>
			<td><?php echo $posts['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'posts', 'action' => 'view', $posts['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'posts', 'action' => 'edit', $posts['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'posts', 'action' => 'delete', $posts['id']), null, __('Are you sure you want to delete # %s?', $posts['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Posts'), array('controller' => 'posts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
