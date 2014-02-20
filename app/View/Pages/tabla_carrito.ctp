<?php
	// Cargar el JS de manejo de cupones
	// echo $this -> Html -> script('coupons');
	// Obtener el carrito
	$shopping_cart = $this -> requestAction('/b_cart/ShoppingCarts/get');
	$shipment_cost = $this -> requestAction('/configs/getShipmentCost');

?>

<?php if(isset($shopping_cart['CartItem']) && !empty($shopping_cart['CartItem'])){?>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="2" class="tablaCarrito">
		<?php
			$subTotal = 0;
		?>
		<tr class="entryTableHeader">
			<th colspan="2" align="center">Producto</th>
			<th align="center">Precio</th>
			<th width="75" align="center">Cantidad</th>
			<th align="center">Total</th>
		</tr>
		<?php
			foreach($shopping_cart['CartItem'] as $item) {
				$subTotal += $item['Product']['price'] * $item['quantity'];
		?>
		<tr class="content cart-item item-id-<?php echo $item['id']; ?>" rel="<?php echo $item['id']; ?>">
			<td width="80" align="center" class="left">
				<?php
					echo $this -> Html->link(
						$this -> Html->image(
							'/img/uploads/100x100/' . $item['image'],
							array('border' => '0')
						),
						array('action' => '../products/view/'.$item['Product']['id']."/".$item['color_id']),
						array('escape' => false)
					);
				?>
			</td>
			<td>
				<h3><?php echo $this -> Html->link($item['Product']['reference'], "/products/view/".$item['Product']['id']."/".$item['color_id']);?></h3>
				<span>Talla <?php echo $item['ProductSize']['name']; ?></span>
			</td>
			<td align="center" class="price" id="<?php echo 'CartItem-' . $item['id'] . 'Price'; ?>" rel="<?php echo $item['Product']['price']; ?>">
				<?php echo "$".number_format( $item['Product']['price'], 0, ' ', '.'); ?>
			</td>
			<td width="115" align="center" class="quantity">
				<?php echo $this -> Form -> create('CartItem-'.$item['id'], array('url'=>'/carts/updates/','class'=>'updateCartItem','rel'=>$item['id'])); ?>
				<?php
					$options=null;
					$invetory=$this -> requestAction('/inventories/getQuantity/'.$item['product_id'].'/'.$item['color_id'].'/'.$item['product_size_id']);
					for($i=1;$i <= $invetory['Inventory']['quantity'];$i++){
						$options[$i]=$i;
					}
				?>
				<?php echo $this -> Form -> input('quantity', array('type'=>'select','options'=>$options, 'label'=>'', 'value'=>$item['quantity']));?>
				<?php echo $this -> Form -> end("Actualizar");?>
			</td>
			<td align="center" class="right total">
				<p id="<?php echo 'CartItem-' . $item['id'] . 'Total'; ?>"><?php echo "$ ".number_format($item['Product']['price'] * $item['quantity'], 0, ' ', '.');?></p>
				<p id="<?php echo 'CartItem-' . $item['id'] . 'Discount'; ?>"></p>
				<?php echo $this -> Html->link('Eliminar','/b_cart/ShoppingCarts/removeCartItem/'.$item['id'],array('class'=>'removeCartItem'));?>
			</td>

		</tr>
		<?php
				}
		?>
		<?php if($shipment_cost > 0) : ?>
		<tr class="total">
			<th colspan="2"style="background: none;">

			</th>
			<th colspan="1"style="padding-right: 10px; text-align: right; background: none;">
				Costo De Envío
			</th>
			<th colspan="1"style="text-align:center; min-width: 180px;"></th>
			<th id="CostoDeEnvio" rel="<?php echo $shipment_cost; ?>" style="text-align:center;">
				<?php if (isset($shipment_cost)) echo "$ ".number_format($shipment_cost, 0, ' ', '.'); ?>
			</th>
		</tr>
		<?php endif; ?>
		<tr class="total">
			<th colspan="2"style="background: none;">

			</th>
			<th colspan="1"style="padding-right: 10px; text-align: right; background: none;">
				Cupon
			</th>
			<th colspan="1"style="text-align:center; min-width: 180px;">
				<input id="CouponCode" type="text" style="text-align: center; width: 100px; float: left;" />
				<input id="SetCoupon" class="set-coupon" type="submit" value="Aplicar" />
			</th>
			<th id="CouponDiscount" style="text-align:center;"></th>
		</tr>
		<tr class="total">
			<th colspan="2"style="background: none;">

			</th>
			<th colspan="1"style="padding-right: 10px; text-align: right; background: none;">
				Total
			</th>
			<th colspan="1"style="text-align:center; min-width: 180px;"></th>
			<th id="TotalCarrito" rel="<?php echo $subTotal; ?>" style="text-align:center;">
				<?php if (isset($subTotal)) echo "$ ".number_format($subTotal + $shipment_cost, 0, ' ', '.'); ?>
			</th>
		</tr>
</table>


<?php } else { ?>
		<p class="rosa" style="text-align:center; font-size:18px; margin-top:20px;">[ No hay productos en tu Carrito ]</p>
<?php } ?>
<?php if(isset($addresses)):?>
	<script type="text/javascript">
		var addresses=<?php echo json_encode($addresses);?>
	</script>
<?php endif;?>
