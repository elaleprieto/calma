<div class="acciones form">
<?php echo $this->Form->create('Accione'); ?>
	<fieldset>
		<legend><?php echo __('Add Accione'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('egreso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Acciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Movimientos'), array('controller' => 'movimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
