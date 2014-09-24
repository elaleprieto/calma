<div class="productos view">
<h2><?php echo __('Producto'); ?></h2>
	<dl>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Barra'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['barra']); ?>
			&nbsp;
		</dd>
		<!-- <dt><?php echo __('Orden'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['orden']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Detalle'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['detalle']); ?>
			&nbsp;
		</dd>
		<!-- <dt><?php echo __('Unidad'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['unidad']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Precio Compra'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['precio_compra']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio Venta'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['precio_venta']); ?>
			&nbsp;
		</dd>
		<!-- <dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['foto']); ?>
			&nbsp;
		</dd> -->
		<!-- <dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['modified']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Stock'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['stock']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Porcentaje'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['porcentaje']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stock Minimo'); ?></dt>
		<dd>
			<?php echo h($producto['Producto']['stock_minimo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Producto'), array('action' => 'edit', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Producto'), array('action' => 'delete', $producto['Producto']['id']), array(), __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Movimientos'), array('controller' => 'movimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Movimiento'), array('controller' => 'movimientos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ordenes'), array('controller' => 'ordenes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ordene'), array('controller' => 'ordenes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Movimientos'); ?></h3>
	<?php if (!empty($producto['Movimiento'])): ?>
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
	<?php foreach ($producto['Movimiento'] as $movimiento): ?>
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
<div class="related">
	<h3><?php echo __('Related Ordenes'); ?></h3>
	<?php if (!empty($producto['Ordene'])): ?>
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
	<?php foreach ($producto['Ordene'] as $ordene): ?>
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
</div> -->
