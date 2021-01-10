<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordsmith
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"/>
	<link rel="stylesheet" type="text/css" href="assets/slick-1.8.1/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="assets/slick-1.8.1/slick/slick-theme.css"/>
	<link rel="stylesheet" href="assets/css/main.css">
	
	<?php wp_head(); ?>
	<title>Wordsmith</title>
</head>
<body>
	<div id="toTop" ></div>
<header class="header">
	<div class="container-fluid">
		<div class="row d-flex justify-content-between">
			<div class="col-xl-2 col-md-8 col-sm-8">
			    <div class="mob-menu-open">
			    	<i class="fas fa-bars"></i>
			    </div>
				<a class="logo-wrap" href="index.html">
					<div>
						<?php the_custom_logo(); ?>
					</div>
					
				</a>
			</div>
			<div class="col-xl-5 col-md-1 col-sm-1 top-menu-wrap">
				<nav class="top-menu">
					<div class="mod-menu-block">
						<div class="menu-cross">
							<i class="fas fa-times"></i>
						</div>
						<div class="menu-h2">
							<h2>NAVIGATE TO</h2>
						</div>
					</div>
					<?php
                		wp_nav_menu(array(
                     		'theme_location' => 'top',
                     		
                     		'menu_class' => 'rel-menu top-menu menu',
                     		'menu_id' => 'nav',
                     		'page_item' => '<ul id="%1$s" class="%2$s"><div class="top-menu-item">%3$s</div></ul>'
             			)); ?>
					<!--<ul>
						<div class="top-menu-item">
							<li class="top-menu-item-li"><a href="index.html">Home</a></li>
						</div>
						<div class="top-menu-item">
							<li class="top-menu-item-li"><a href="">Categories</a></li><i class="fas fa-chevron-down"></i>
							<ul class="sub-menu">
								<li><a href="category.html">Lifestyle</a></li>
								<li><a href="category.html">Health</a></li>
								<li><a href="category.html">Family</a></li>
								<li><a href="category.html">Managenent</a></li>
								<li><a href="category.html">Travel</a></li>
								<li><a href="category.html">Work</a></li>
							</ul>
						</div>
						<div class="top-menu-item">
							<li class="top-menu-item-li"><a href="">Blog</a></li><i class="fas fa-chevron-down"></i>
							<ul class="sub-menu">
								<li><a href="#">Video Post</a></li>
								<li><a href="#">Audio Post</a></li>
								<li><a href="single.html">Standart Post</a></li>
							</ul>
						</div>
						<div class="top-menu-item">
							<li class="top-menu-item-li"><a href="">Style</a></li>
						</div>
						<div class="top-menu-item">
							<li class="top-menu-item-li"><a href="about.html">About</a></li>
						</div>
						<div class="top-menu-item">
							<li class="top-menu-item-li"><a href="contact.html">Contact</a></li>
						</div>						
					</ul>-->	
				</nav>
			</div>
			<div class="col-xl-2 col-md-3 col-sm-3">
					<a href="#">
						<div class="search">
							<span>Search</span>
							<i class="fas fa-search"></i>
						</div>
					</a>
					<?php dynamic_sidebar( 'sidebar-search') ?>
			</div>
		</div>
	</div>
</header>
