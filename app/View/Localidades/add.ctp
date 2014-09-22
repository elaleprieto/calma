<div class="localidades form">
<?php echo $this->Form->create('Localidade'); ?>
	<fieldset>
		<legend><?php echo __('Add Localidade'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('codigo_postal');
		echo $this->Form->input('provincia_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Localidades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Provincias'), array('controller' => 'provincias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia'), array('controller' => 'provincias', 'action' => 'add')); ?> </li>
	</ul>
</div>
