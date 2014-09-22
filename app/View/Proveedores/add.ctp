<div class="proveedores form">
<?php echo $this->Form->create('Proveedore'); ?>
	<fieldset>
		<legend><?php echo __('Add Proveedore'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('direccion');
		echo $this->Form->input('cuit');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('localidade_id');
		echo $this->Form->input('Producto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Proveedores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidade'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
