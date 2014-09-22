<div class="productosProveedores index">
	<h2><?php echo __('Productos Proveedores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('proveedore_id'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('precio'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('detalle'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_actualizacion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('bonificacion1'); ?></th>
			<th><?php echo $this->Paginator->sort('bonificacion2'); ?></th>
			<th><?php echo $this->Paginator->sort('bonificacion3'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($productosProveedores as $productosProveedore): ?>
	<tr>
		<td><?php echo h($productosProveedore['ProductosProveedore']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productosProveedore['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $productosProveedore['Producto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($productosProveedore['Proveedore']['name'], array('controller' => 'proveedores', 'action' => 'view', $productosProveedore['Proveedore']['id'])); ?>
		</td>
		<td><?php echo h($productosProveedore['ProductosProveedore']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($productosProveedore['ProductosProveedore']['precio']); ?>&nbsp;</td>
		<td><?php echo h($productosProveedore['ProductosProveedore']['observaciones']); ?>&nbsp;</td>
		<td><?php echo h($productosProveedore['ProductosProveedore']['detalle']); ?>&nbsp;</td>
		<td><?php echo h($productosProveedore['ProductosProveedore']['fecha_actualizacion']); ?>&nbsp;</td>
		<td><?php echo h($productosProveedore['ProductosProveedore']['created']); ?>&nbsp;</td>
		<td><?php echo h($productosProveedore['ProductosProveedore']['modified']); ?>&nbsp;</td>
		<td><?php echo h($productosProveedore['ProductosProveedore']['bonificacion1']); ?>&nbsp;</td>
		<td><?php echo h($productosProveedore['ProductosProveedore']['bonificacion2']); ?>&nbsp;</td>
		<td><?php echo h($productosProveedore['ProductosProveedore']['bonificacion3']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productosProveedore['ProductosProveedore']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productosProveedore['ProductosProveedore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productosProveedore['ProductosProveedore']['id']), array(), __('Are you sure you want to delete # %s?', $productosProveedore['ProductosProveedore']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Productos Proveedore'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
	</ul>
</div>
