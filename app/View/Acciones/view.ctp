<div class="acciones view">
<h2><?php echo __('Accione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accione['Accione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($accione['Accione']['categoria']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($accione['Accione']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($accione['Accione']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accione'), array('action' => 'edit', $accione['Accione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accione'), array('action' => 'delete', $accione['Accione']['id']), array(), __('Are you sure you want to delete # %s?', $accione['Accione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
