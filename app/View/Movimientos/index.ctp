<div class="movimientos index">
	<h2><?php echo __('Movimientos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad_anterior'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('egreso'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('accione_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($movimientos as $movimiento): ?>
	<tr>
		<td><?php echo h($movimiento['Movimiento']['id']); ?>&nbsp;</td>
		<td><?php echo h($movimiento['Movimiento']['cantidad']); ?>&nbsp;</td>
		<td><?php echo h($movimiento['Movimiento']['cantidad_anterior']); ?>&nbsp;</td>
		<td><?php echo h($movimiento['Movimiento']['observaciones']); ?>&nbsp;</td>
		<td><?php echo h($movimiento['Movimiento']['egreso']); ?>&nbsp;</td>
		<td><?php echo h($movimiento['Movimiento']['created']); ?>&nbsp;</td>
		<td><?php echo h($movimiento['Movimiento']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($movimiento['Producto']['detalle'], array('controller' => 'productos', 'action' => 'view', $movimiento['Producto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($movimiento['Accione']['name'], array('controller' => 'acciones', 'action' => 'view', $movimiento['Accione']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($movimiento['User']['name'], array('controller' => 'users', 'action' => 'view', $movimiento['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $movimiento['Movimiento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $movimiento['Movimiento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $movimiento['Movimiento']['id']), array(), __('Are you sure you want to delete # %s?', $movimiento['Movimiento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acciones'), array('controller' => 'acciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accione'), array('controller' => 'acciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
