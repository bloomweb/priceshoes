<div class="sliderImages index">
	<h2><?php echo __('Slider Images'); ?></h2>
	<table id="sortable" cellspacing="0" cellpadding="0" controller="slider_images">
		<tr class="ui-state-disabled">
			<th><?php echo $this->Paginator->sort('position', 'Posición'); ?></th>
			<th><?php echo $this->Paginator->sort('id', 'ID'); ?></th>
			<th><?php echo $this->Paginator->sort('path', 'Imagen'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		<?php
			foreach($sliderImages as $sliderImage): ?>
				<tr id="<?php echo $sliderImage['SliderImage']['id']; ?>" class="ui-state-default">
					<td class="position"><?php echo h($sliderImage['SliderImage']['position']); ?>&nbsp;</td>
					<td><?php echo h($sliderImage['SliderImage']['id']); ?>&nbsp;</td>
					<td>
						<?php
							//echo h($sliderImage['SliderImage']['path']);
							echo $this->Html->image('uploads' . DS . '150x150' . DS . $sliderImage['SliderImage']['path']);
						?>
						&nbsp;
					</td>
					<td class="actions">
						<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $sliderImage['SliderImage']['id']), null, __('Realmente desea eliminar el slide con ID # %s?', $sliderImage['SliderImage']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
	</table>
	<p>
		<?php
			echo $this -> Paginator -> counter(array('format' => __('Página %page% de %pages%, mostrando %current% registros de un total de %count%, desde el %start%, hasta el %end%')));
		?>
	</p>
	<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Slide'), array('action' => 'add')); ?></li>
	</ul>
</div>
<?php echo $this->Html->script('jquery-ui.custom.min'); ?>
<script type="text/javascript">
	$(function() {// Order and reorder
		var sendData = function(order, controller) {
			var data = {};
			for( i = 0; i < order.length; i += 1) {
				data["data[SliderImage][" + order[i] + "]"] = (i + 1);
			}
			$.post("/" + controller + "/reOrder", data, function(response) {
				if(response == "yes") {
					for( i = 0; i < order.length; i += 1) {
						$("tr#" + order[i]).children(".position").text(i + 1);
					}
				}
			});
		}
		$("#sortable tbody").sortable({
			revert : true,
			items : "tr:not(.ui-state-disabled)",
			update : function(event, ui) {
				sendData($(this).sortable("toArray"), $("table").attr("controller"));
			}
		});
		$("#sortable tbody > tr").disableSelection();
	});
</script>