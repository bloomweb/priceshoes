<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
	//<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>	
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
			<?php __('Priceshoes Virtual'); ?>
			<?php echo $title_for_layout; ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
	
			echo $this->Html->css('front');
			echo $this->Html->script("http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js");
			
			echo $this->Html->script("front.js");
			echo $this->Html->script("http://cdn.jquerytools.org/1.2.5/full/jquery.tools.min.js");
			echo $this->Html->script("jquery-ui.js");
			//echo $this->Html->script("https://getfirebug.com/firebug-lite.js");
			echo $scripts_for_layout;
		?>
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="/css/ie.css">
    <![endif]-->
		
	</head>
	<body>
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
			  <?php echo $this->element("header_virtual");?>			
			<div id="content">
				<?php echo $this->Session->flash(); ?>
			   <?php echo $content_for_layout; ?>
			 
			 <div style="clear:both"></div>
			</div>
			
		</div>
		<div id="footer">
			<div class="wrap">
			   <?php echo $this->element("footer_virtual");?>
			   <div style="clear:both"></div>
			 </div>
		</div>
		<?php echo $this->element('sql_dump'); ?>
	</body>
</html>