<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordsmith
 */

?>

<footer>
	<div class="cat">
		<div class="container">
			<div class="row">
				
				<div class="col-xl-6 cat-first">
					<div class="cat-item">
						<h3 class="cat-h3">
							Популярные посты
						</h3>
						<div class="popular-posts">
							<?php 
							$args = array(
								'numberposts' => 5,
								'post_type'   => 'post',
								'post_status' => 'publish'
							); 

							$result = wp_get_recent_posts($args);

							foreach( $result as $p ){ 
								?>
								  <div class="popular-post">
										
									<a href="<?php echo $p['guid'] ?>">
										<h5><?php echo $p['post_title'] ?></h5>
									</a>
										<p>By <span><a href=""><?php the_author() ?> </a></span> on <?php echo $p['post_date'] ?></p>
									
								</div>
								<?php 
							} 
							?>
							
							
							
						</div>
					</div>
					
				</div>
				<?php dynamic_sidebar( 'sidebar-in') ?>
			</div>
		</div>
	</div>
	<div class="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="footer-title">
						<h4>О Wordsmith</h4>
					</div>
					<p class="footer-p">
						Fugiat quas eveniet voluptatem natus. Placeat error temporibus magnam sunt optio aliquam. Ut ut occaecati placeat at.
						Fuga fugit ea autem. Dignissimos voluptate repellat occaecati minima dignissimos mollitia consequatur.
						Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa error
						temporibus magnam est voluptatem.
					</p>
					<div class="footer-social">
						<ul>
							<li>
								<a href="<?php the_field('facebook') ?>"><i class="fab fa-facebook-square"></i></a>
							</li>
							<li>
								<a href="<?php the_field('twitter') ?>"><i class="fab fa-twitter"></i></a>	
							</li>
							<li>
								<a href="<?php the_field('instagramm') ?>"><i class="fab fa-instagram"></i></a>
							</li>
							<li>
								<a href=""><i class="fab fa-youtube"></i></a>
							</li>
							<li>
								<a href=""><i class="fab fa-pinterest"></i></a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="footer-title">
						<h4>Рассылкаr</h4>
					</div>
					<p class="footer-p">
						Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.
					</p>
					<div class="footer-form">
						<form action="">
							<?php dynamic_sidebar('sidebar-form'); ?>
							<!--<input type="email" name="email" id="email" class="email" placeholder="Email Adress">
							<input type="submit" name="subscribe" id="subscribe" class="subscribe" value="Send">-->
						</form>
					</div>
					<div class="footer-copyright">
						<span>Copyright ©2020  All rights reserved | This template is made with <i class="fas fa-heart"></i>  by <a href="#">Colorlib</a></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

	
	<script src="https://kit.fontawesome.com/0dde516780.js" crossorigin="anonymous"></script>
	 
	 <?php wp_footer(); ?>
	 <script>
		new WOW().init();
	</script>
</body>
</html>
