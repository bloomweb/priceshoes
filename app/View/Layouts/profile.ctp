<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
	//<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <?php //  <script type="text/javascript" src="https://getfirebug.com/firebug-lite.js"></script> ?>

	<?php echo $this->Html->charset(); ?>
	<?php
		if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
			header('X-UA-Compatible: IE=edge,chrome=1');
		}
	?>
	<meta name="author" content="http://www.bloomweb.co">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate, proxy-revalidate">
	<meta http-equiv="expires" content="0">
	<title>
		<?php echo 'PriceShoes'?> :: 
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		
		echo $this->Html->css('reset');
		//echo $this->Html->css('ie');
		echo $this->Html->css('styles');
		
		echo $this->Html->Script('jquery.min');
		echo $this->Html->Script('jquery.tools.min');
		//echo $this->Html->Script('cufon');
		echo $this -> Html -> script('common'); 
		//echo $this->Html->Script('HelveticaNeueLT_LightExt2_400-HelveticaNeueLT_LightExt2_400.font');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="/css/ie.css">
    <![endif]-->
    <?php $this -> element("zopin_code");?>
</head>
<body id="profile" class="<?php echo $this -> action;?>">
	<?php echo $this->element('analyticstracking'); ?>
	<div id="fb-root"></div>
	<script>
		window.fbAsyncInit = function() {
			FB.init({
				appId      : '626363840745969',
				status     : true,
				xfbml      : true
			});
		};

		(function(d, s, id){
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) {return;}
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/es_LA/all.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<div id="container">
		<?php echo $this -> element('header');?>
		<div id="content">
			<div id="left-col">
			<?php echo $this -> element('novedad');?>
			<?php echo $this -> element('resumen-favoritos');?>
			</div>

			<div id="right-col">
				<?php if(isset($mensaje)) echo "<span style='color:#E6DB30'>".$mensaje."</span>"; ?>
				<ul id="profile-menu">
					<li class='profile'> <a href="/user_control/users/profile">Mi Perfil</a></li>
					<li class='edit'> <a href="/user_control/users/edit">Modificar Datos</a></li>
					<li class='orders'> <a href="/user_control/users/orders">Mis Ordenes</a></li>
				</ul>
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
                
			</div>
			<div style="clear:both;"> </div>
		</div>
        <?php echo $this -> element('footer');?>
	</div>
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
