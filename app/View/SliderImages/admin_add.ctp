<div class="sliderImages form">
	<?php echo $this->Form->create('SliderImage'); ?>
	<fieldset>
		<legend><?php echo __('Agregar slide'); ?></legend>
		<?php echo $this->Form->hidden('path', array('id' => 'single-field')); ?>
		<div class="images">
			<h2>Imagen</h2>

			<div class="preview"></div>
			<div id="single-upload-slide" controller="slider_images"></div>
		</div>
	</fieldset>
	<?php echo $this->Form->end(__('Agregar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver slides'), array('action' => 'index')); ?></li>
	</ul>
</div>
