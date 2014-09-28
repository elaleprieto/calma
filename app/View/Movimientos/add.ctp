<div class="movimientos form">
<?php echo $this->Form->create('Movimiento'); ?>
	<fieldset>
		<legend>Movimiento de Mercadería</legend>
	<?php
		echo $this->Form->input('producto_id'
			, array('class'=>'form-control', 'div'=>'form-group'
				, 'label'=>'Producto'));
		// echo $this->Form->input('cantidad_anterior'
		// 	, array('class'=>'form-control', 'div'=>'form-group'
		// 		, 'label'=>'Stock'));
		echo $this->Form->input('accione_id'
			, array('class'=>'form-control', 'div'=>'form-group'
				, 'label'=>'Origen del movimiento de mercadería'));
		echo $this->Form->input('cantidad'
			, array('class'=>'form-control', 'div'=>'form-group'
				, 'label'=>'Cantidad'));
		echo $this->Form->input('observaciones'
			, array('class'=>'form-control', 'div'=>'form-group'));
		// echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Movimientos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acciones'), array('controller' => 'acciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accione'), array('controller' => 'acciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
