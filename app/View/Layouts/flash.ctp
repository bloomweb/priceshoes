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
	//<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<?php echo $this->Html->charset(); ?>
	<?php
		if(isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false)) {
			header('X-UA-Compatible: IE=edge,chrome=1');
		}
	?>
	<meta name="author" content="http://www.bloomweb.co">
	<meta http-equiv="pragma" content="no-cache">
	<meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate, proxy-revalidate">
	<meta http-equiv="expires" content="0">
	<title><?php echo $page_title; ?></title>
	<?php if(Configure::read('debug') == 0) { ?>
		<meta http-equiv="Refresh" content="<?php echo $pause; ?>;url=<?php echo $url; ?>"/>
	<?php } ?>
	<style><!--
		P {
			text-align: center;
			font: bold 1.1em sans-serif
		}

		A {
			color: #444;
			text-decoration: none
		}

		A:HOVER {
			text-decoration: underline;
			color: #44E
		}

		--></style>
</head>
<body>
	<?php echo $this->element('analyticstracking'); ?>
	<p><a href="<?php echo $url; ?>"><?php echo $message; ?></a></p>
</body>
</html>