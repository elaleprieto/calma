<div class="proveedores index">
	<h2>Proveedores</h2>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('name'); ?></th>
				<th><?php echo $this->Paginator->sort('direccion'); ?></th>
				<th><?php echo $this->Paginator->sort('cuit'); ?></th>
				<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($proveedores as $proveedore): ?>
				<tr>
					<td><?php echo h($proveedore['Proveedore']['name']); ?>&nbsp;</td>
					<td><?php echo h($proveedore['Proveedore']['direccion']); ?>&nbsp;</td>
					<td><?php echo h($proveedore['Proveedore']['cuit']); ?>&nbsp;</td>
					<td><?php echo h($proveedore['Proveedore']['observaciones']); ?>&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $proveedore['Proveedore']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $proveedore['Proveedore']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $proveedore['Proveedore']['id']), array(), __('Are you sure you want to delete # %s?', $proveedore['Proveedore']['id'])); ?>
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
