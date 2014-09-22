<div class="productos index">
	<h2><?php echo __('Productos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('orden'); ?></th>
			<th><?php echo $this->Paginator->sort('detalle'); ?></th>
			<th><?php echo $this->Paginator->sort('unidad'); ?></th>
			<th><?php echo $this->Paginator->sort('precio_compra'); ?></th>
			<th><?php echo $this->Paginator->sort('precio_venta'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('stock'); ?></th>
			<th><?php echo $this->Paginator->sort('porcentaje'); ?></th>
			<th><?php echo $this->Paginator->sort('stock_minimo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productos as $producto): ?>
	<tr>
		<td><?php echo h($producto['Producto']['id']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['orden']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['detalle']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['unidad']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['precio_compra']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['precio_venta']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['foto']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['created']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['modified']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['stock']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['porcentaje']); ?>&nbsp;</td>
		<td><?php echo h($producto['Producto']['stock_minimo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $producto['Producto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $producto['Producto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $producto['Producto']['id']), array(), __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Movimientos'), array('controller' => 'movimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ordenes'), array('controller' => 'ordenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ordene'), array('controller' => 'ordenes', 'action' => 'add')); ?> </li>
	</ul>
</div>
