<div class="acciones form">
<?php echo $this->Form->create('Accione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Accione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('egreso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Accione.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Accione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Acciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Movimientos'), array('controller' => 'movimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
