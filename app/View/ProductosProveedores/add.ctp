<div class="productosProveedores form">
<?php echo $this->Form->create('ProductosProveedore'); ?>
	<fieldset>
		<legend><?php echo __('Add Productos Proveedore'); ?></legend>
	<?php
		echo $this->Form->input('producto_id');
		echo $this->Form->input('proveedore_id');
		echo $this->Form->input('codigo');
		echo $this->Form->input('precio');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('detalle');
		echo $this->Form->input('fecha_actualizacion');
		echo $this->Form->input('bonificacion1');
		echo $this->Form->input('bonificacion2');
		echo $this->Form->input('bonificacion3');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Productos Proveedores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
	</ul>
</div>
