<?php $slides = $this->requestAction('/slider_images/getSlides'); ?>
<?php if(isset($slides) && !empty($slides)) : ?>
<div
	class="cycle-slideshow"
	data-cycle-fx="scrollHorz"
	data-cycle-pause-on-hover="true"
	data-cycle-speed="400"
	data-cycle-prev="#prev"
	data-cycle-next="#next"
>
	<?php foreach($slides as $slide) : ?>
		<?php print $this->Html->image('uploads' . DS . $slide['SliderImage']['path']); ?>
	<?php endforeach; ?>
</div>
<div id="next-prev-wrapper">
	<a href=# id="prev"><?php echo $this->Html->image('PrevButton.png'); ?></a>
	<a href=# id="next"><?php echo $this->Html->image('NextButton.png'); ?></a>
</div>
<?php echo $this->Html->script('jquery.cycle2.min'); ?>
<?php endif; ?>