<div >
<div id="left-col">
	<?php echo $this -> element('novedad'); ?>
	<?php echo $this -> element('resumen-favoritos'); ?>
</div>
<div id="right-col" class='black-wrapper carrito-view' style="padding-top: 10px;">
	<h2>Mi Carrito</h2>
	<p style="line-height: 20px;">
	Gracias por comprar en <a href="/" class="rosa">www.priceshoes.com.co</a>. Abajo encontrarás un resumen con los productos que has agregado a tu Carrito de compras. Rectifica los productos y las cantidades que tú elegiste; si tienes algún Cupón de descuento, aplícalo en la casilla mostrada, llena tus datos de envío y por último puedes culminar tu pago dando clic en el botón “Proceder a Pagar”. 
	</p>
	<div class="tabla-carrito">

		<div class="content">
            <?php echo $this -> element('tabla-carrito'); ?>
        </div>
		<?php // Carga el contenido via AJAX ?>
	</div>
	
</div>
<div style="clear:both;"></div>
</div>