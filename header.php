<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<link href="https://fonts.googleapis.com/css?family=Catamaran:100|Josefin+Sans:100|Montserrat:400" rel="stylesheet">
		<link rel="stylesheet" href="_css/style.css">
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
				<img src="http://placehold.it/850x150"> <!-- This is for the main logo or banner -->
			</div>
				<div id='main-nav-wrap'>
					<ul id="main-nav">
						<!-- This is for links to different categories or different content/search bar -->
						<?php wp_list_categories('title_li'); ?>
						<li id="store"><a href="#" title='Store'>Store</a></li>
						<form role="search" method="get" id="searchform" class="searchform" action="http://moistpie.servebeer.com/dave/projects/wordpress/">
							<div>
								<label class="screen-reader-text" for="s"></label>
								<input type="text" value="" name="s" id="s" placeholder="Search">
								<input type="submit" id="searchsubmit" value="Search">
							</div>
						</form>
					</ul>
				</div>
		</header>


