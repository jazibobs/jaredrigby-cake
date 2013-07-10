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
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  	<meta name="viewport" content="width=device-width" />
  	<title>Porfolio of Cheshire Web Developer Jared Rigby</title>

  
  	<link rel="stylesheet" href="/css/foundation.css" />
  	<link href='http://fonts.googleapis.com/css?family=Dosis:200,400' rel='stylesheet' type='text/css'>
  	<link href='/css/style.css' rel='stylesheet' type='text/css'>
	<script src="/js/vendor/custom.modernizr.js"></script>
</head>

<body>
	<div class="row banner">
		<div class="large-8 columns">
			<div class="logo center-block">
				<a href="#">
					<span>JARED RIGBY</span>
					<span class="desc">websites&amp;software</span>
				</a>
			</div>
		</div>
		<div class="large-4 columns">
			<div class="panel">
				<h3>Github Feed</h3>
				<p>I have recently been coding in:</p>
				<span class="git-info"></span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="large-12 columns navigation">
			<nav class="top-bar">
				<ul class="title-area">
			    	<!-- Title Area -->
			    	<li class="name"></li>
			    	<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			    	<li class="toggle-topbar menu-icon"><a href="#"><span>MENU</span></a></li>
			  	</ul>
			  
				<section class="top-bar-section">
			  		<ul class="left">
				    	<li class=""><a href="/">Home</a></li>
				    	<li class="divider hide-for-small"></li>
				    	<li><a href="/pages/about">About</a></li>
					    <li class="divider hide-for-small"></li>
					    <li><a href="/posts/viewcategory/1">Projects</a></li>
					    <li class="divider hide-for-small"></li>
					    <li><a href="/posts/viewcategory/2">Snippets</a></li>
					    <li class="divider hide-for-small"></li>
					    <li><a href="/pages/contact">Contact</a></li>
					    <li class="divider hide-for-small"></li>
			    	</ul>
				</section>
			</nav>
		</div>
	</div>

	<div class="row">
		<div class="large-8 columns">
			<div id="content">
				<?php echo $this->fetch('content'); ?>
			</div>
		</div>

		<div class="large-4 columns">
			<div class="panel">
				<h3>Connect with me</h3>
				<a target="_blank" href="mailto:talk@jaredrigby.co.uk" class="social email"></a>
				<a target="_blank" href="https://github.com/jazibobs" class="social github"></a>
				<a target="_blank" href="https://plus.google.com/u/0/108846301542540516777/about" class="social plus"></a>
				<a target="_blank" href="http://www.last.fm/user/jazibobs" class="social lastfm"></a>
				<a target="_blank" href="http://uk.linkedin.com/in/jaredgrigby" class="social linkedin"></a>
				<a target="_blank" href="https://twitter.com/jaredrigby" class="social twitter"></a>
			</div>
			<div class="panel">
				<h3>Get in touch</h3>
				<form>
					<input type="text" placeholder="Full Name" name="name"/>
					<input type="text" placeholder="Email Address" name="email"/>
					<input type="text" placeholder="Phone Number" name="phone"/>
					<textarea name="message" placeholder="Message to me"></textarea>
					<input type="Submit" value="Submit" class="float-right button"/>
				</form>
				<div class="clear"></div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="large-12 columns footer">
			<p><small>Website by Jared Rigby 2013</small></p>
		</div>
	</div>

	<script src="/js/vendor/jquery.js"></script>
	<script src="/js/foundation.min.js"></script>
	<script src="/js/main.js"></script>
	<script>
		$(document).foundation();
	</script>
</body>

</html>