<?php $slides = $this->requestAction('/slider_images/getSlides'); ?>
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
<div class="center">
	<a href=# id="prev">Prev</a>
	<a href=# id="next">Next</a>
</div>
<?php echo $this->Html->script('jquery.cycle2.min'); ?>