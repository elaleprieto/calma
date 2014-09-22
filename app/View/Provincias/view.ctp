<div class="provincias view">
<h2><?php echo __('Provincia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($provincia['Provincia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($provincia['Provincia']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($provincia['Provincia']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($provincia['Provincia']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Provincia'), array('action' => 'edit', $provincia['Provincia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Provincia'), array('action' => 'delete', $provincia['Provincia']['id']), array(), __('Are you sure you want to delete # %s?', $provincia['Provincia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Provincias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidade'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Localidades'); ?></h3>
	<?php if (!empty($provincia['Localidade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Codigo Postal'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Provincia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($provincia['Localidade'] as $localidade): ?>
		<tr>
			<td><?php echo $localidade['id']; ?></td>
			<td><?php echo $localidade['nombre']; ?></td>
			<td><?php echo $localidade['codigo_postal']; ?></td>
			<td><?php echo $localidade['created']; ?></td>
			<td><?php echo $localidade['modified']; ?></td>
			<td><?php echo $localidade['provincia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'localidades', 'action' => 'view', $localidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'localidades', 'action' => 'edit', $localidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'localidades', 'action' => 'delete', $localidade['id']), array(), __('Are you sure you want to delete # %s?', $localidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Localidade'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
