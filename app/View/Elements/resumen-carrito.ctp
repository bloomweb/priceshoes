<div id="promocion" class="caja-producto-lateral" style="padding-bottom: 3px;">
	<div id="TituloResumenCarrito" class="titulo">
		<h1>Mi Carrito <img src="/img/carrito_2.png" class="carrito" alt="carrito"> </h1>
	</div>
	<div class="resumen-carrito">
	</div>
</div>
<script type="text/javascript">
	$(function(){
		var d = new Date();
		var n = d.getMilliseconds();
		$('.resumen-carrito').load('/pages/resumenCarrito?_t='+n);
	});
</script>