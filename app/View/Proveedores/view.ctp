<div class="proveedores view">
<h2>Proveedor</h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuit'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['cuit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['observaciones']); ?>
			&nbsp;
		</dd>
		<!-- <dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['modified']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Localidade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($proveedore['Localidade']['id'], array('controller' => 'localidades', 'action' => 'view', $proveedore['Localidade']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proveedore'), array('action' => 'edit', $proveedore['Proveedore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proveedore'), array('action' => 'delete', $proveedore['Proveedore']['id']), array(), __('Are you sure you want to delete # %s?', $proveedore['Proveedore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidade'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Productos'); ?></h3>
	<?php if (!empty($proveedore['Producto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Codigo'); ?></th>
		<th><?php echo __('Barra'); ?></th>
		<th><?php echo __('Orden'); ?></th>
		<th><?php echo __('Detalle'); ?></th>
		<th><?php echo __('Unidad'); ?></th>
		<th><?php echo __('Precio Compra'); ?></th>
		<th><?php echo __('Precio Venta'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Stock'); ?></th>
		<th><?php echo __('Porcentaje'); ?></th>
		<th><?php echo __('Stock Minimo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($proveedore['Producto'] as $producto): ?>
		<tr>
			<td><?php echo $producto['id']; ?></td>
			<td><?php echo $producto['codigo']; ?></td>
			<td><?php echo $producto['barra']; ?></td>
			<td><?php echo $producto['orden']; ?></td>
			<td><?php echo $producto['detalle']; ?></td>
			<td><?php echo $producto['unidad']; ?></td>
			<td><?php echo $producto['precio_compra']; ?></td>
			<td><?php echo $producto['precio_venta']; ?></td>
			<td><?php echo $producto['foto']; ?></td>
			<td><?php echo $producto['created']; ?></td>
			<td><?php echo $producto['modified']; ?></td>
			<td><?php echo $producto['stock']; ?></td>
			<td><?php echo $producto['porcentaje']; ?></td>
			<td><?php echo $producto['stock_minimo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'productos', 'action' => 'view', $producto['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'productos', 'action' => 'edit', $producto['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'productos', 'action' => 'delete', $producto['id']), array(), __('Are you sure you want to delete # %s?', $producto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div> -->
