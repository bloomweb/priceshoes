<div id="footer"  class="black-wrapper">
	<div class='wrapper'>
		<div id="info-wrapper">
			<div class="registrar">
				<h2>Registra tu correo</h2>
				<?php //echo $this -> Form -> create('User', array('plugin' => true, 'controller' => 'users', 'action' => 'registerEmail')); ?>
				<form id="mail" accept-charset="utf-8" method="post" controller="users" action="/user_control/users/registerEmail">
					<div>
						<?php echo $this -> Form -> input('User.email', array('label' => false,'value'=>'')); ?>
						<?php echo $this -> Form -> submit('Enviar'); ?>
					</div>
				<?php //echo $this -> Form -> end(); ?>
				</form>
				<p>
					Al registrar mi dirección de correo electrónico, certifico que la información que proporciono es correcta y que soy mayor de edad.
				</p>

			</div>

			<div class="menu-fijo">
				<div class="cuenta">
					<h3>Mi Cuenta</h3>
					<ul>
						<li>
							<?php echo $this -> Html -> link("Registro", "/registro"); ?>
						</li>
						<li>
							<?php echo $this -> Html -> link("Ver Carrito", "/carrito"); ?>
						</li>

						<li>
							<a href="/ayuda">Ayuda</a>
						</li>
					</ul>
				</div>
				<div class="favoritos">
					<h3>Atención al cliente</h3>
                    <ul>
                        <li>
                            <a href="/pages/contacto">Contacto</a>
                        </li>

                        <li>
                            <a href="/pages/view/29">Quejas y Reclamos </a>
                        </li>

                        <li>
                            <a href="/pages/view/27">Políticas de Devolución, Cambio o Garantía</a>
                        </li>


                    </ul>

				</div>
				<div class="paginas-inferior">
                    <h3>Priceshoes On-line</h3>
                    <?php echo $this -> element('menu-paginas-inferior'); ?>
                </div>
				<div style='clear:both;'></div>
                


			</div>

			<div style='clear:both;'></div>
            <div class="formas-de-pago">
                <?php echo $this -> Html -> image('footer-payment.png',array("width"=>"500",'usemap'=>'#imgmap2014112125219')); ?>
                <map id="imgmap2014112125219" name="imgmap2014112125219"><area shape="rect" alt="síguenos en twitter!!" title="" coords="40,27,113,101" href="https://twitter.com/PriceShoesCO" target="_blank" /><area shape="rect" alt="síguenos en facebook!!" title="" coords="129,27,206,103" href="https://www.facebook.com/priceshoes.co" target="_blank" /><!-- Created by Online Image Map Editor (http://www.maschek.hu/imagemap/index) --></map>

            </div>
		</div>
		<?php echo $this -> element('second-nav'); ?>
	</div>
</div>