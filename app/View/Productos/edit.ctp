<?php debug($this->data) ?>

<div data-ng-controller="ProductosController">
	<?php echo $this->Form->create('Producto'); ?>
		<fieldset>
			<legend>Editar Producto</legend>
		<?php
			echo $this->Form->hidden('id');
			echo $this->Form->input('codigo'
				, array('class'=>'form-control', 'div'=>'form-group'
					, 'label'=>'Código interno'));

			echo $this->Form->input('barra'
				, array('class'=>'form-control', 'div'=>'form-group'
					, 'label'=>'Código de barra'));
			// echo $this->Form->input('orden');
			echo $this->Form->input('detalle'
				, array('class'=>'form-control', 'div'=>'form-group'
					, 'label'=>'Descripción'));
			// echo $this->Form->input('unidad');

			# Precio de Compra
			echo $this->Form->input('precio_compra'
				, array('class'=>'form-control', 'div'=>'form-group'
					, 'data-ng-init'=>'precioCompra='.$this->data['Producto']['precio_compra']
					, 'data-ng-model'=>'precioCompra'
					, 'data-ng-change'=>'calcularPrecioVenta()'));

			# Porcentaje
			echo $this->Form->input('porcentaje'
				, array('class'=>'form-control', 'div'=>'form-group'
					, 'data-ng-init'=>'porcentaje='.$this->data['Producto']['porcentaje']
					, 'data-ng-model'=>'porcentaje'
					, 'data-ng-change'=>'calcularPrecioVenta()'
					, 'label'=>'Porcentaje (%)'
			));

			# Precio de Venta
			echo $this->Form->input('precio_venta'
				, array('class'=>'form-control', 'div'=>'form-group'
					, 'data-ng-init'=>'precioVenta='.$this->data['Producto']['precio_venta']
					, 'data-ng-model'=>'precioVenta'));

			// echo $this->Form->input('foto');
			echo $this->Form->input('stock'
				, array('class'=>'form-control', 'div'=>'form-group'));

			echo $this->Form->input('stock_minimo'
				, array('class'=>'form-control', 'div'=>'form-group'));
		?>
		</fieldset>
		<?php echo $this->Form->submit('Guardar'
			, array('class'=>'btn btn-primary col-sm-6 col-sm-offset-3'
				, 'div'=>'text-center')); ?>
	<?php echo $this->Form->end(); ?>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Producto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Producto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Movimientos'), array('controller' => 'movimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ordenes'), array('controller' => 'ordenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ordene'), array('controller' => 'ordenes', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
