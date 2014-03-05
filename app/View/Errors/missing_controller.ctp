<?php if(Configure::read('debug') == 0) : ?>
	<script type="text/javascript">
		$(function() {
			window.location = '/';
		});
	</script>
<?php else: ?>
	<h2><?php echo $name; ?></h2>
	<p class="error">
		<strong><?php echo __d('cake', 'Error'); ?>: </strong>
		<?php echo __d('cake', 'An Internal Error Has Occurred.'); ?>
	</p>
	<?php echo $this->element('exception_stack_trace'); ?>
<?php endif; ?>