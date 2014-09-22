<div class="productosProveedores view">
<h2><?php echo __('Productos Proveedore'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($productosProveedore['ProductosProveedore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productosProveedore['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $productosProveedore['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proveedore'); ?></dt>
		<dd>
			<?php echo $this->Html->link($productosProveedore['Proveedore']['name'], array('controller' => 'proveedores', 'action' => 'view', $productosProveedore['Proveedore']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($productosProveedore['ProductosProveedore']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precio'); ?></dt>
		<dd>
			<?php echo h($productosProveedore['ProductosProveedore']['precio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($productosProveedore['ProductosProveedore']['observaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Detalle'); ?></dt>
		<dd>
			<?php echo h($productosProveedore['ProductosProveedore']['detalle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Actualizacion'); ?></dt>
		<dd>
			<?php echo h($productosProveedore['ProductosProveedore']['fecha_actualizacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($productosProveedore['ProductosProveedore']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($productosProveedore['ProductosProveedore']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bonificacion1'); ?></dt>
		<dd>
			<?php echo h($productosProveedore['ProductosProveedore']['bonificacion1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bonificacion2'); ?></dt>
		<dd>
			<?php echo h($productosProveedore['ProductosProveedore']['bonificacion2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bonificacion3'); ?></dt>
		<dd>
			<?php echo h($productosProveedore['ProductosProveedore']['bonificacion3']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Productos Proveedore'), array('action' => 'edit', $productosProveedore['ProductosProveedore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Productos Proveedore'), array('action' => 'delete', $productosProveedore['ProductosProveedore']['id']), array(), __('Are you sure you want to delete # %s?', $productosProveedore['ProductosProveedore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos Proveedores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productos Proveedore'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('controller' => 'proveedores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('controller' => 'proveedores', 'action' => 'add')); ?> </li>
	</ul>
</div>
