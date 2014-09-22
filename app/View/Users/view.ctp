<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rol'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Rol']['name'], array('controller' => 'rols', 'action' => 'view', $user['Rol']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rols'), array('controller' => 'rols', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rol'), array('controller' => 'rols', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movimientos'), array('controller' => 'movimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Movimientos'); ?></h3>
	<?php if (!empty($user['Movimiento'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cantidad'); ?></th>
		<th><?php echo __('Cantidad Anterior'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Movimiento'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Producto Id'); ?></th>
		<th><?php echo __('Accione Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Movimiento'] as $movimiento): ?>
		<tr>
			<td><?php echo $movimiento['id']; ?></td>
			<td><?php echo $movimiento['cantidad']; ?></td>
			<td><?php echo $movimiento['cantidad_anterior']; ?></td>
			<td><?php echo $movimiento['observaciones']; ?></td>
			<td><?php echo $movimiento['movimiento']; ?></td>
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
