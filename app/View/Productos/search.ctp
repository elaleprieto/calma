<div data-ng-controller="ProductosController">
	<div class="row">
		<div class="col-lg-6">
			<h2>Productos</h2>
		</div><!-- /.col-lg-6 -->
		<div class="col-lg-6">
			<div class="input-group">
				<input type="search" id="search" class="form-control" data-ng-model="query" ui-keypress="{13:'search()'}" autofocus>
				<span class="input-group-btn">
					<!-- <span class="input-group-addon">.00</span> -->
					<button class="btn btn-default" type="button" data-ng-click="searchReset('search')">X</button>
					<button class="btn btn-default" type="button" data-ng-click="search()">Buscar!</button>
				</span>
			</div><!-- /input-group -->
		</div><!-- /.col-lg-6 -->
	</div><!-- /.row -->
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>
				<th>Código</th>
				<th>Detalle</th>
				<th>Precio Unitario</th>
				<th>Cantidad</th>
				<th>Precio Total</th>
				<!-- <th><?php echo $this->Paginator->sort('detalle'); ?></th>
				<th><?php echo $this->Paginator->sort('precio_compra'); ?></th>
				<th><?php echo $this->Paginator->sort('stock'); ?></th>
				<th><?php echo $this->Paginator->sort('porcentaje'); ?></th>
				<th><?php echo $this->Paginator->sort('stock_minimo'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th> -->
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<tr data-ng-repeat="producto in productos">
				<td data-ng-bind="producto.Producto.barra">&nbsp;</td>
				<td data-ng-bind="producto.Producto.detalle">&nbsp;</td>
				<td data-ng-bind="producto.Producto.precio_venta">&nbsp;</td>
				<td>
					<input type="number" placeholder="Cantidad" 
						data-ng-model="producto.Producto.cantidad" data-ng-change="calcularPrecioTotal(producto.Producto)">
				</td>
				<td data-ng-bind="producto.Producto.precio_total">&nbsp;</td>
				<!-- <td><?php echo h($producto['Producto']['detalle']); ?>&nbsp;</td>
				<td><?php echo h($producto['Producto']['precio_compra']); ?>&nbsp;</td>
				<td><?php echo h($producto['Producto']['precio_venta']); ?>&nbsp;</td>
				<td><?php echo h($producto['Producto']['stock']); ?>&nbsp;</td>
				<td><?php echo h($producto['Producto']['porcentaje']); ?>&nbsp;</td>
				<td><?php echo h($producto['Producto']['stock_minimo']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $producto['Producto']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $producto['Producto']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $producto['Producto']['id']), array(), __('Are you sure you want to delete # %s?', $producto['Producto']['id'])); ?>
				</td> -->
				<td>
					<button class="btn btn-success" data-ng-click="vender(producto)"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
				</td>
			</tr>
		</tbody>
	</table>
</div>
