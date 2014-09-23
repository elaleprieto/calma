<div class="proveedores index">
	<h2><?php echo __('Proveedores'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('cuit'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('localidade_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($proveedores as $proveedore): ?>
	<tr>
		<td><?php echo h($proveedore['Proveedore']['id']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['name']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['cuit']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['observaciones']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['created']); ?>&nbsp;</td>
		<td><?php echo h($proveedore['Proveedore']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($proveedore['Localidade']['id'], array('controller' => 'localidades', 'action' => 'view', $proveedore['Localidade']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $proveedore['Proveedore']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proveedore['Proveedore']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proveedore['Proveedore']['id']), array(), __('Are you sure you want to delete # %s?', $proveedore['Proveedore']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Proveedore'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidade'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>