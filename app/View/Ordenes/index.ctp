<div class="ordenes index">
	<h2><?php echo __('Ordenes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cantidad'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('producto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pedido_id'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($ordenes as $ordene): ?>
	<tr>
		<td><?php echo h($ordene['Ordene']['id']); ?>&nbsp;</td>
		<td><?php echo h($ordene['Ordene']['cantidad']); ?>&nbsp;</td>
		<td><?php echo h($ordene['Ordene']['created']); ?>&nbsp;</td>
		<td><?php echo h($ordene['Ordene']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ordene['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $ordene['Producto']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($ordene['Pedido']['id'], array('controller' => 'pedidos', 'action' => 'view', $ordene['Pedido']['id'])); ?>
		</td>
		<td><?php echo h($ordene['Ordene']['observaciones']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $ordene['Ordene']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $ordene['Ordene']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $ordene['Ordene']['id']), array(), __('Are you sure you want to delete # %s?', $ordene['Ordene']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ordene'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
