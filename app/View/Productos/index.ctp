<?php echo $this->Html->css('productos/index', array('inline'=>true)) ?>

<div data-ng-controller="ProductosController">
	<div class="row">
		<div class="col-sm-12">
			<h2>Productos</h2>
			<form class="searchInput text-right" data-ng-submit="search()">
				<input type="text" id="search" class="form-control" data-ng-model="query" placeholder="Buscar Producto">
				<button type="submit" class="btn btn-default">Buscar</button>
				<button type="button" class="btn btn-default" data-ng-click="searchReset('search')">Limpiar</button>
			</form>
		</div>
	</div>

	<!-- Resultado de la Búsqueda -->
	<div data-ng-show="productos.length > 0" data-ng-cloak>
		<table cellpadding="0" cellspacing="0" class="table table-striped">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Barra</th>
					<th>Detalle</th>
					<th>Precio Compra</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Porcentaje</th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr data-ng-repeat="p in productos">
					<td data-ng-bind="p.Producto.codigo">&nbsp;</td>
					<td data-ng-bind="p.Producto.barra">&nbsp;</td>
					<td data-ng-bind="p.Producto.detalle">&nbsp;</td>
					<td data-ng-bind="p.Producto.precio_compra">&nbsp;</td>
					<td data-ng-bind="p.Producto.precio_venta">&nbsp;</td>
					<td data-ng-bind="p.Producto.stock">&nbsp;</td>
					<td data-ng-bind="p.Producto.porcentaje">&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view/{{p.Producto.id}}')); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit/{{p.Producto.id}}')); ?>
						<?php //echo $this->Form->link(__('Delete'), null, array('action' => 'delete/{{p.Producto.id}}'), array(), __('Are you sure you want to delete # {{p.Producto.id}}?')); ?>
						<?php echo $this->Html->link(__('Delete'), 'delete/{{p.Producto.id}}', null, sprintf(__('Are you sure you want to delete # %s?'), '{{p.Producto.id}}')); ?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<!-- Tabla común -->
	<div data-ng-hide="productos.length > 0">
		<table cellpadding="0" cellspacing="0" class="table table-striped">
			<thead>
				<tr>
					<th><?php echo $this->Paginator->sort('codigo'); ?></th>
					<th><?php echo $this->Paginator->sort('barra'); ?></th>
					<th><?php echo $this->Paginator->sort('detalle'); ?></th>
					<th><?php echo $this->Paginator->sort('precio_compra'); ?></th>
					<th><?php echo $this->Paginator->sort('precio_venta'); ?></th>
					<th><?php echo $this->Paginator->sort('stock'); ?></th>
					<th><?php echo $this->Paginator->sort('porcentaje'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($productos as $producto): ?>
					<tr>
						<td><?php echo h($producto['Producto']['codigo']); ?>&nbsp;</td>
						<td><?php echo h($producto['Producto']['barra']); ?>&nbsp;</td>
						<td><?php echo h($producto['Producto']['detalle']); ?>&nbsp;</td>
						<td><?php echo h($producto['Producto']['precio_compra']); ?>&nbsp;</td>
						<td><?php echo h($producto['Producto']['precio_venta']); ?>&nbsp;</td>
						<td><?php echo h($producto['Producto']['stock']); ?>&nbsp;</td>
						<td><?php echo h($producto['Producto']['porcentaje']); ?>&nbsp;</td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $producto['Producto']['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $producto['Producto']['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $producto['Producto']['id']), array(), __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<p class="text-center">
			<?php
			echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?>
		</p>
		<div class="text-center">
			<?php
				echo $this->Paginator->prev('< ' . __('previous') . ' | ', array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ' '));
				echo $this->Paginator->next(' | '. __('next') . ' >', array(), null, array('class' => 'next disabled'));
			?>
		</div>
	</div>
</div>
