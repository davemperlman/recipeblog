<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://fonts.googleapis.com/css?family=Catamaran:100|Josefin+Sans:100|Montserrat:400" rel="stylesheet">
		<!-- <link rel="stylesheet" href="_css/style.css"> -->
		<?php wp_head(); ?>
	</head>
	<body>
		<header>
			<div id="top-nav-wrap">
				<div id="top-nav">
					<ul id="about-menu">
						<!-- This is where about/contact pages go -->
						<li><a href="#"><span>About</span></a></li>
						<li><a href="#"><span>Archives</span></a></li>
						<li><a href="#"><span>Contact</span></a></li>
					</ul>
					<ul id="links">
						<li><a href="#"><span>Facebook</span></a></li>
						<li><a href="#"><span>Instagram</span></a></li>
						<li><a href="#"><span>Filler</span></a></li>
					</ul>
				</div>
			</div>
			<div id="header-wrap">
				<img src="http://placehold.it/414x150"> <!-- This is for the main logo or banner -->
			</div>
				<div id='main-nav-wrap'>
					<ul id="main-nav">
						<!-- This is for links to different categories or different content/search bar -->
						<label for="menu-activator-box" id="menu-activator" data-title='Menu'></label>
						<input type="checkbox" id="menu-activator-box">
						<label for="search-activator-box" id="search-activator"></label>
						<input type="checkbox" id="search-activator-box">
						<?php wp_nav_menu(array(
						'menu' => 'custom',
						'container' => false)); ?>
						<?php get_search_form(); ?>
					</ul>
				</div>
		</header>


