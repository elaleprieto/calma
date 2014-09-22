<div class="localidades view">
<h2><?php echo __('Localidade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($localidade['Localidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($localidade['Localidade']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo Postal'); ?></dt>
		<dd>
			<?php echo h($localidade['Localidade']['codigo_postal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($localidade['Localidade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($localidade['Localidade']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Provincia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($localidade['Provincia']['id'], array('controller' => 'provincias', 'action' => 'view', $localidade['Provincia']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Localidade'), array('action' => 'edit', $localidade['Localidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Localidade'), array('action' => 'delete', $localidade['Localidade']['id']), array(), __('Are you sure you want to delete # %s?', $localidade['Localidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provincias'), array('controller' => 'provincias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia'), array('controller' => 'provincias', 'action' => 'add')); ?> </li>
	</ul>
</div>
