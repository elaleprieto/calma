<div class="acciones view">
<h2><?php echo __('Accione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accione['Accione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($accione['Accione']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Egreso'); ?></dt>
		<dd>
			<?php echo h($accione['Accione']['egreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($accione['Accione']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($accione['Accione']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accione'), array('action' => 'edit', $accione['Accione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accione'), array('action' => 'delete', $accione['Accione']['id']), array(), __('Are you sure you want to delete # %s?', $accione['Accione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Acciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movimientos'), array('controller' => 'movimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Movimientos'); ?></h3>
	<?php if (!empty($accione['Movimiento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Cantidad Anterior'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Egreso'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Accione Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($accione['Movimiento'] as $movimiento): ?>
		<tr>
			<td><?php echo $movimiento['id']; ?></td>
			<td><?php echo $movimiento['cantidad']; ?></td>
			<td><?php echo $movimiento['cantidad_anterior']; ?></td>
			<td><?php echo $movimiento['observaciones']; ?></td>
			<td><?php echo $movimiento['egreso']; ?></td>
			<td><?php echo $movimiento['created']; ?></td>
			<td><?php echo $movimiento['modified']; ?></td>
			<td><?php echo $movimiento['producto_id']; ?></td>
			<td><?php echo $movimiento['accione_id']; ?></td>
			<td><?php echo $movimiento['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'movimientos', 'action' => 'view', $movimiento['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'movimientos', 'action' => 'edit', $movimiento['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'movimientos', 'action' => 'delete', $movimiento['id']), array(), __('Are you sure you want to delete # %s?', $movimiento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
