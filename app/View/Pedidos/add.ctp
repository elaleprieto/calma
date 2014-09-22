<div class="pedidos form">
<?php echo $this->Form->create('Pedido'); ?>
	<fieldset>
		<legend><?php echo __('Add Pedido'); ?></legend>
	<?php
		echo $this->Form->input('estado');
		echo $this->Form->input('observaciones');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Ordenes'), array('controller' => 'ordenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ordene'), array('controller' => 'ordenes', 'action' => 'add')); ?> </li>
	</ul>
</div>
