<div class="pedidos view">
<h2><?php echo __('Pedido'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($pedido['Pedido']['observaciones']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pedido'), array('action' => 'edit', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pedido'), array('action' => 'delete', $pedido['Pedido']['id']), array(), __('Are you sure you want to delete # %s?', $pedido['Pedido']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ordenes'), array('controller' => 'ordenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ordene'), array('controller' => 'ordenes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Ordenes'); ?></h3>
	<?php if (!empty($pedido['Ordene'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Pedido Id'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pedido['Ordene'] as $ordene): ?>
		<tr>
			<td><?php echo $ordene['id']; ?></td>
			<td><?php echo $ordene['cantidad']; ?></td>
			<td><?php echo $ordene['created']; ?></td>
			<td><?php echo $ordene['modified']; ?></td>
			<td><?php echo $ordene['producto_id']; ?></td>
			<td><?php echo $ordene['pedido_id']; ?></td>
			<td><?php echo $ordene['observaciones']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'ordenes', 'action' => 'view', $ordene['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'ordenes', 'action' => 'edit', $ordene['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'ordenes', 'action' => 'delete', $ordene['id']), array(), __('Are you sure you want to delete # %s?', $ordene['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ordene'), array('controller' => 'ordenes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
