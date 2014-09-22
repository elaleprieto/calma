<div class="ordenes form">
<?php echo $this->Form->create('Ordene'); ?>
	<fieldset>
		<legend><?php echo __('Edit Ordene'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('producto_id');
		echo $this->Form->input('pedido_id');
		echo $this->Form->input('observaciones');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Ordene.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Ordene.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ordenes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
