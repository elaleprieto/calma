<div class="movimientos view">
<h2><?php echo __('Movimiento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($movimiento['Movimiento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($movimiento['Movimiento']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad Anterior'); ?></dt>
		<dd>
			<?php echo h($movimiento['Movimiento']['cantidad_anterior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($movimiento['Movimiento']['observaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Egreso'); ?></dt>
		<dd>
			<?php echo h($movimiento['Movimiento']['egreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($movimiento['Movimiento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($movimiento['Movimiento']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($movimiento['Producto']['detalle'], array('controller' => 'productos', 'action' => 'view', $movimiento['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accione'); ?></dt>
		<dd>
			<?php echo $this->Html->link($movimiento['Accione']['name'], array('controller' => 'acciones', 'action' => 'view', $movimiento['Accione']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($movimiento['User']['name'], array('controller' => 'users', 'action' => 'view', $movimiento['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Movimiento'), array('action' => 'edit', $movimiento['Movimiento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Movimiento'), array('action' => 'delete', $movimiento['Movimiento']['id']), array(), __('Are you sure you want to delete # %s?', $movimiento['Movimiento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Movimientos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acciones'), array('controller' => 'acciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accione'), array('controller' => 'acciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
