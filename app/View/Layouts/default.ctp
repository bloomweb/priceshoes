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
		<?php echo $this -> Html -> charset(); ?>
		<?php
			if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
				header('X-UA-Compatible: IE=edge,chrome=1');
			}
		?>
		<meta name="author" content="http://www.bloomweb.co">
		<meta http-equiv="pragma" content="no-cache">
		<meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate, proxy-revalidate">
		<meta http-equiv="expires" content="0">
		<?php /* if(isset($product)): ?>
			 <meta property="og:title" content="<?php $product['Product']['name'] ?>" />
			 <meta property="og:type" content="company" />
			 <meta property="og:url" content="http://priceshoes.bloomweb.co/products/view/<?php echo $this -> params['pass'][0]."/".$this -> params['pass'][1] ?>" />
			 <meta property="og:image" content="http://priceshoes.bloomweb.co/img/uploads" />
			 <meta property="og:site_name" content="PriceShoes" />
			 <meta property="og:description" content="<?php echo $product['Product']['description']?>">
			 <meta property="fb:app_id" content="157362437721922" />
		<?php endif; */ ?>
		<title> <?php echo 'PriceShoes'?> :: <?php echo $title_for_layout; ?> </title>
		<?php
		echo $this -> Html -> meta('icon');

		echo $this -> Html -> css('reset');
		//echo $this->Html->css('ie');
		echo $this -> Html -> css('styles');

		echo $this -> Html -> Script('jquery.min');
		echo $this -> Html -> Script('jquery.tools.min');
		echo $this -> Html -> Script('oauthpopup');
		echo $this -> Html -> Script('bjs/bjs');
		echo $this -> Html -> Script('bcart');
		//echo $this->Html->Script('cufon');
		echo $this -> Html -> script('common');
		echo $this -> Html -> script('coupons');
		//echo $this->Html->Script('HelveticaNeueLT_LightExt2_400-HelveticaNeueLT_LightExt2_400.font');
		echo $this -> fetch('meta');
		echo $this -> fetch('css');
		echo $this -> fetch('script');
	?>
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="/css/ie.css">
    <![endif]-->

    <?php $this -> element("zopin_code");?>
	</head>
	<body class="<?php echo $this -> action; ?>">
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
			<?php echo $this -> element('header'); ?>
			<div id="content">
				<?php echo $this -> Session -> flash(); ?>
				<?php echo $this -> fetch('content'); ?>
			</div>
            <?php echo $this -> element('footer'); ?>
		</div>
		
		<?php echo $this -> element('sql_dump'); ?>
	</body>

</html>