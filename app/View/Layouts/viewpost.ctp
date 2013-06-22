<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>Portfolio of Cheshire Web Developer Jared Rigby</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Inconsolata' rel='stylesheet' type='text/css'>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('style');
	?>
</head>
<body>

	<div id="header">
		<a href="/" class="logo">
			<span class="jared">jared</span> <span class="rigby">rigby</span>
		</a>
		<nav>
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/pages/about">About</a></li>
				<li><a href="/posts/viewcategory/1">Projects</a></li>
				<li><a href="/posts/viewcategory/2">Snippets</a></li>
				<li><a href="/pages/contact">Contact</a></li>
			</ul>
		</nav>
	</div>

	<div id="container">
		
		<div id="viewpost">
			<?php echo $this->fetch('content'); ?>
		</div>
		
	</div>
	<?php /*
		<?php echo $this->element('sql_dump'); ?>
	*/ ?>
	
</body>
</html>
