<div class="ordenes view">
<h2><?php echo __('Ordene'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($ordene['Ordene']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($ordene['Ordene']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($ordene['Ordene']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($ordene['Ordene']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Producto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordene['Producto']['id'], array('controller' => 'productos', 'action' => 'view', $ordene['Producto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pedido'); ?></dt>
		<dd>
			<?php echo $this->Html->link($ordene['Pedido']['id'], array('controller' => 'pedidos', 'action' => 'view', $ordene['Pedido']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($ordene['Ordene']['observaciones']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ordene'), array('action' => 'edit', $ordene['Ordene']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Ordene'), array('action' => 'delete', $ordene['Ordene']['id']), array(), __('Are you sure you want to delete # %s?', $ordene['Ordene']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ordenes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ordene'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productos'), array('controller' => 'productos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Producto'), array('controller' => 'productos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pedidos'), array('controller' => 'pedidos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pedido'), array('controller' => 'pedidos', 'action' => 'add')); ?> </li>
	</ul>
</div>
