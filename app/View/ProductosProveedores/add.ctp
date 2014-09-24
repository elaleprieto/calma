<div class="productosProveedores form">
<?php echo $this->Form->create('ProductosProveedore'); ?>
	<fieldset>
		<legend>Asociar Producto a un Proveedor</legend>
	<?php
		echo $this->Form->input('producto_id', array('class'=>'form-control', 'div'=>'form-group'));
		echo $this->Form->input('proveedore_id', array('class'=>'form-control', 'div'=>'form-group', 'label'=>'Proveedor'));
		echo $this->Form->input('codigo', array('class'=>'form-control', 'div'=>'form-group', 'label'=>'Código del Proveedor'));
		echo $this->Form->input('precio', array('class'=>'form-control', 'div'=>'form-group', 'label'=>'Precio del Proveedor'));
		echo $this->Form->input('observaciones', array('class'=>'form-control', 'div'=>'form-group', 'label'=>'Observaciones'));
		// echo $this->Form->input('detalle');
		// echo $this->Form->input('fecha_actualizacion');
		// echo $this->Form->input('bonificacion1');
		// echo $this->Form->input('bonificacion2');
		// echo $this->Form->input('bonificacion3');
	?>
	</fieldset>
	<?php echo $this->Form->submit('Asociar', array('class'=>'btn btn-primary col-sm-6 col-sm-offset-3', 'div'=>'text-center')); ?>
	<?php echo $this->Form->end(); ?>
</div>

<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Productos Proveedores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
